<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sellerprofile extends CI_Controller {

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
		$vname = urldecode($this->uri->segment(3));
		
		$vcompanyname = urldecode($this->uri->segment(4));
		//print_r($vcompanyname); die;
		$active = array('vname'=>$vname,'vcompanyname'=>$vcompanyname);
	
		$query = $this->Admin_model->getdatafromtable('vendor_register', $active);
		$data['sqldata']= $query;
			//print_r($query); die;
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/sellerprofile',$data);
		$this->load->view('admin/footer');
		
	}
	
	public function delete_seller(){
	
		
		$vname = urldecode($this->uri->segment(3));
		$vcompanyname = urldecode($this->uri->segment(4));
		$active = array('vname'=>$vname,'vcompanyname'=>$vcompanyname);
		
		$this->load->model('Admin_model');
		if($vname){
			$this->Admin_model->delete_data('vendor_register', $active);
	
		}
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		header('location: '.base_url().'admin_manageseller/index/'.$vname);
	
}
	
	
}