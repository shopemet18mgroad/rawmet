<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_add_buyerreq extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html*/
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
	 if($this->input->post('bname')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			
			
			$bname = $this->input->post('bname');
			$bcompanyname = $this->input->post('bcompanyname');
			$vusername = $this->input->post('vusername');
			$category = $this->input->post('category');
			$productname = $this->input->post('productname');
			$productid = $this->input->post('productid');
			$description = $this->input->post('description');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$price = $this->input->post('price');
			$priceperkg = $this->input->post('priceperkg');
			$sellerprice= $this->input->post('sellerprice');
			$bsupplyability = $this->input->post('bsupplyability');
			$buyerrequriement_id = $this->input->post('buyerrequriement_id');
			$uploadimage =serialize( $this->input->post('uploadimage'));
			
			
			$data2= array('bname' => $bname,'bcompanyname'=>$bcompanyname,'vusername'=>$vusername,'category'=> $category,'productname'=>$productname,'productid'=>$productid,'description' => $description,'quantity'=>$quantity,'units'=>$units,'price'=>$price,'priceperkg'=>$priceperkg,'sellerprice'=>$sellerprice,'bsupplyability'=>$bsupplyability,'buyerrequriement_id'=>$buyerrequriement_id,'uploadimage'=>$uploadimage);
			
			 	
				
			$this->load->model('Admin_model');
		/* 	$data1 = array('bname'=>$bname);
			//print_r($data1);die;
		
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('selquotenegotate', $data1)){
				 $datainserr = "ProductId already exist";
				header('location: '.base_url().'vendor_negotiated/index_error/'.$datainserr);
				die;
			  }else{
				 */
         $datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('seller_mbuyreq',$data2);
			header('location: ./vendor_negotiated/index/'.$datainserr);
			
			//}
			
		
				$this->load->model('Admin_model');
				$this->load->library('session');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				
				
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/managebuy',$data);
		$this->load->view('vendor/footer');
			 
	 

			
		
		
	}
	
		}
}