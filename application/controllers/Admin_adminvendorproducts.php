<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_adminvendorproducts extends CI_Controller {

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
		$this->load->library('session');
	/* 	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('vusername'=>$sess['sessi']);
		
		$query2 = $this->Admin_model->getdatafromtable('vendor_register',$active1);
		
		$vendorname = $query2[0]->vname;
		$poptions = array('vname'=>$vendorname); */
		
		
	
		$poptions = array('poptions'=>false);
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct',$poptions);
		
		$adac['sqldata']= $query;
		//print_r($adac['sqldata']);die;
		
			//$active = array('vusername'=>$sess['sessi']);
		//$adac['sess']=array('sessi'=>$this->session->userdata('username'));
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/adminvendorproducts',$adac);
		$this->load->view('admin/footer');
		$this->load->helper('url');

		}
		
		public function approve_product(){
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$retrivevaltmp);
		
		
		$this->load->model('Admin_model');
		$app= array('poptions'=>false);
		$query = $this->Admin_model->update_custom('sellerpostproduct', $app, $retriveval, $retriveval);
		if($retriveval){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}

			
	
	
}