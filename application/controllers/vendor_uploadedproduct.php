<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_uploadedproduct extends CI_Controller {

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
		
		
		$this->load->model('Admin_model');
		$poptions = array('poptions'=>false);
		//print_r($poptions);die;
		
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct',$poptions);
		//print_r($poptions);die;
		//print_r($query);die;
		
		$adac['sqldata']= $query;
		//print_r($query);die;
		
		
		/* echo '<pre>';
		print_r($adac['activestat']); die;
			echo '</pre>'; */
		
		
		$this->load->view('vendor/header');
		$this->load->view('vendor/uploadedproduct',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');
/* 		$this->load->helper('url');
		/* $this->load->helper('url');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->model('Admin_model');
		$bcompany = $this->uri->segment(3);	
		
			$sess = array('sessi'=>$this->session->userdata('username'));
			$active = array('busername'=>$sess['sessi']); */
			/*$this->load->model('Admin_model');
			$bcompanyname = $this->uri->segment(3);	
			$query = $this->Admin_model->getdatafromtable('buyer_register');
			$data['sqldata']= $query;
			$data['bcompanyname'] = $bcompanyname;
			$this->load->view('customer/header',);
			$this->load->view('customer/customerprofile',$data);
			$this->load->view('customer/footer'); */
			
		
		
			
	}
	
		
	}
		