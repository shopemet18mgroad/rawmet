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
		 if($this->input->post('quantity')){
			 $date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			
			$this->load->library('session');
			$bname = $this->input->post('bname');
			$bcompanyname = $this->input->post('bcompanyname');
			 $productname = $this->input->post('productname');
			 $description = $this->input->post('description');
			 $quantity = $this->input->post('quantity');
			$requireddate = $this->input->post('requireddate');
			$lastdate = $this->input->post('lastdate');
			$email = $this->input->post('email');
			$contactnumber = $this->input->post('contactnumber');
			$uploadimage = $this->input->post('uploadimage');
			$uploadpdf = $this->input->post('uploadpdf');
			$iagreee = $this->input->post('iagreee');
		
			 $this->load->model('Admin_model');
			$data2 = array('bname'=>$bname,'bcompanyname'=>$bcompanyname,'productname'=> $productname,'description'=>$description,'quantity'=> $quantity,'requireddate' => $requireddate,'lastdate'=>$lastdate,'email'=>$email,'contactnumber'=>$contactnumber,'uploadimage'=>$uploadimage,'uploadpdf'=>$uploadpdf,'iagreee'=>$iagreee);

			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('buyerrequriement',$data2);
			header('location: ./customer_postbuyreq/index/');
		 }
			
			
				if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
				$datainserr = "Invalid Login Session";
				header('location: '.base_url().'login/index_error/'.$datainserr);
				die;
			}
			else
			{ 
				$this->load->model('Admin_model');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('busername'=>$sess['sessi']);
				//print_r($active1);die;
				$data['scomp'] = $this->Admin_model->getbuyerdatafromtable('buyer_register', $active1);
				
			
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/postbuyreq',$data);
		$this->load->view('customer/footer');
		
	}
	}	
}