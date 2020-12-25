<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_contactsupplier extends CI_Controller {

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
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		$productname= $this->uri->segment(3);	
		$productid= $this->uri->segment(4);	
		$category= urldecode($this->uri->segment(5));
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));

			//$active = array('vusername'=>$sess['sessi']);
			//print_r($active);die;
			//$query2 = $this->Admin_model->getdatafromtable('vendor_register',$active);
		
			//$vendorname = $query2[0]->vname;
		$category='iron';
		$active = array('category'=>$category);
			$data['sqldata'] = $this->Admin_model->getdatafromtable('sellerpostproduct',$active);
			
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/contactsupplier',$data);
		$this->load->view('customer/footer');
		
	}
	}
}