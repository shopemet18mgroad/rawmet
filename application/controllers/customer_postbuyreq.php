<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_postbuyreq  extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
    parent::__construct();
			// Load session library
			$this->load->library('session');
			// Load the captcha helper
			$this->load->helper('captcha');
			$this->load->helper('url');
			$this->load->helper('date');
			date_default_timezone_set("Asia/Kolkata");
    }
	public function index()
	{
		 if($this->input->post('productname')){
			 $date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$this->load->library('session');
			
			$productname = $this->input->post('productname');
			$description = $this->input->post('description');
			$quantity = $this->input->post('quantity');
			$materialname = $this->input->post('materialname');
			$requireddate = $this->input->post('requireddate');
			$lastdate = $this->input->post('lastdate');
			$email = $this->input->post('email');
			$contactnumber = $this->input->post('contactnumber');
			$uploadimage = $this->input->post('uploadimage');
			$uploadpdf = $this->input->post('uploadpdf');
			$iagreee = $this->input->post('iagreee');
			
			 
			$data2 = array('productname' => $productname,'description'=>$description,'quantity'=> $quantity,'requireddate' => $requireddate,'lastdate'=>$lastdate,'email'=>$email,'contactnumber'=>$contactnumber,'materialname'=>$materialname,'uploadimage'=>$uploadimage,'uploadpdf'=>$uploadpdf,'iagreee'=>$iagreee);

			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('sellerpostproduct',$data2);
			header('location: ./Vendor_postproduct/');
			}
			
			
			if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
				$datainserr = "Invalid Login Session";
				header('location: '.base_url().'login/index_error/'.$datainserr);
				die;
			}
			else
			{
				$this->load->model('Admin_model');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('vusername'=>$sess['sessi']);
				//print_r($active1); die;
				$data['scomp'] = $this->Admin_model->get1datafromtable('vendor_register', $active1);
				
			
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/postbuyreq');
		$this->load->view('customer/footer');
		
	}
	}	
}