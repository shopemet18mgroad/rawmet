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
		$this->load->model('Admin_model');
		$bname = urldecode($this->uri->segment(3));
		$bcompanytype = urldecode($this->uri->segment(4));
		
		$active = array('bname'=>$bname,'bcompanytype'=>$bcompanytype);
	
		$query = $this->Admin_model->getdatafromtable('buyer_register', $active);
		$data['sqldata']= $query;
			//print_r($query); die;
		$this->load->view('admin/header');
		$this->load->view('admin/vendorprofile',$data);
		$this->load->view('admin/footer');
		
	}
	
}