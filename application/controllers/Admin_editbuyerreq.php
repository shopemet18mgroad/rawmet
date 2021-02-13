<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editbuyerreq extends CI_Controller {

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

		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		
		
		$reqapproval = array('adapproval'=>false);
		$query['sqldata'] = $this->Admin_model->getdatafromtable('buyerrequriement',$reqapproval);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/editbuyerreq',$query);
		$this->load->view('admin/footer');
		
	}
	}
	public function editproduct(){
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$retrivevaltmp);
		
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('buyerrequriement',$retriveval);
			//print_r($data['sqldata']); die;
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/editbuyerreq', $data);
		$this->load->view('admin/footer');
	}
	
	
	
}