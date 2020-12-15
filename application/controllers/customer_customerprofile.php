
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_customerprofile extends CI_Controller {

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
		$boptions = array('boptions'=>true);
		
		$query = $this->Admin_model->getdatafromtable('buyer_register',$boptions);
		
		$adac['sqldata']= $query;
		/* echo '<pre>';
		print_r($adac['activestat']); die;
			echo '</pre>'; */
		
		
		$this->load->view('customer/header');
		$this->load->view('customer/customerprofile',$adac);
		$this->load->view('customer/footer');
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
		public function index_error(){
					$this->load->model('Admin_model');
		$boptions = array('boptions'=>true);
		
		$query = $this->Admin_model->getdatafromtable('buyer_register',$boptions);
		
		$adac['sqldata']= $query;
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('customer/header');
		$this->load->view('customer/customerprofile',$adac);
		$this->load->view('customer/footer');
			
			
	}
		
	}





	
	
