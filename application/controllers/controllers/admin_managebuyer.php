<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_managebuyer extends CI_Controller {

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
		 /*
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{  */
		$busername = array('busername'=>false);
		
		$query = $this->Admin_model->getdatafromtable('buyer_register',$busername);
		
		$adac['data']= $query;
		//$sess = array('sessi'=>$this->session->userdata('username'));
		//$active = array('ausername'=>$sess['sessi']);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/managebuyer',$adac);
		$this->load->view('admin/footer');
		$this->load->helper('url');
	
	
	
}
	public function reject(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
         $vname = urldecode($this->uri->segment(3));
	

		$retriveval = array('vname'=>$vname);
		
		$data2 = array('voptions'=>False);

		
		
		$status = $this->Admin_model->update_custom('vendor_register',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_managebuyer/index/'.urlencode($retriveval));
		
		die;
	}
	}