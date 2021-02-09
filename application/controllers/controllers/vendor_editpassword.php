<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_editpassword extends CI_Controller {

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
		$bcompany = $this->uri->segment(3);	
		
		if(!$this->session->has_userdata('username')){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'vendor_editvendorprofile/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$active = array('vusername'=>$sess['sessi']);
			$data['sqldata']= $this->Admin_model->getdatafromtable('vendor_register', $active);
			
			$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/editpassword',$data);
		$this->load->view('vendor/footer');
		
	}
	}
}