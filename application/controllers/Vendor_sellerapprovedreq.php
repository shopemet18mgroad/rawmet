<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_sellerapprovedreq extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$reqapproval = array('sellerid'=>$sess['sessi'],'selapprove'=>true);
		
		
		//$query['sqldata'] = $this->Admin_model->getdatafromtable('buyerrequriement',$reqapproval);
		$query = $this->Admin_model->getdatafromtable_seller10();
		$adac['sqldata']= $query;
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/sellerapprovedreq',$adac);
		$this->load->view('vendor/footer');
			}
	}
	
	
	
	
}
