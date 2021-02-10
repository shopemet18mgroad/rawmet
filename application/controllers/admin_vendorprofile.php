<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_vendorprofile extends CI_Controller {

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
		$this->load->library('session');

		if(!$this->session->has_userdata('username') || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		
		$this->load->model('Admin_model');
		$bname = urldecode($this->uri->segment(3));
		$bcompanyname = urldecode($this->uri->segment(4));
		
		$active = array('bname'=>$bname,'bcompanyname'=>$bcompanyname);
		
	
		$query = $this->Admin_model->getdatafromtable('buyer_register', $active);
		$data['sqldata']= $query;
		$sess = array('sessi'=>$this->session->userdata('username')); 
		$active = array('ausername'=>$sess['sessi']);
		}
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/vendorprofile',$data);
		$this->load->view('admin/footer');
		
	}
	
	
	

	
}