<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editpostproduct extends CI_Controller {

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
		$productid= $this->uri->segment(4);	

			$sess = array('sessi'=>$this->session->userdata('username'));

			$active = array('ausername'=>$sess['sessi']);
			//print_r($active);die;
			$query2 = $this->Admin_model->getdatafromtable('vendor_register',$active);
		
			$vendorname = $query2[0]->vname;
		
			$data['sqldata'] = $this->Admin_model->getdatafromtable('sellerpostproduct',$vendorname);
			//print_r($data['sqldata']); die;
		
			
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/editpostproduct');
		$this->load->view('admin/footer');
		
		
	}
	public function editproduct(){
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$retrivevaltmp);
		
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('sellerpostproduct',$retriveval);
			//print_r($data['sqldata']); die;
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/editpostproduct', $data);
		$this->load->view('admin/footer');
	}
	
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('admin/header');
			$this->load->view('admin/editpostproduct');
			$this->load->view('admin/footer');
			
	}
	
}
