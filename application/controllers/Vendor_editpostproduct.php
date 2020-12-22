<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_editpostproduct extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));

			$active = array('vusername'=>$sess['sessi']);
			//print_r($active);die;
			
			$query = $this->Admin_model->getdatafromtable('sellerpostproduct',$active);
			$data['sqldata']= $query;
			print_r($query);die;
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/editpostproduct');
		$this->load->view('vendor/footer');
		}
		
	}
	
}