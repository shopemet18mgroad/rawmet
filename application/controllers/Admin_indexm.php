<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_indexm extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		 $uploadporder = unserialize($this->uri->segment(3));
		 
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$active = array('buyerapprove'=>false);
		$query['data1'] = $this->Admin_model->getdatafromtable('selquotenegotate',$active);
		
		
		$active2 = array('sellapproval'=>true);
		$query['data2'] = $this->Admin_model->getdatafromtable('purchaseoder',$active2);
		
		$active3 = array('uploadporder'=>$uploadporder);
		$query['data3'] = $this->Admin_model->getdatafromtable('purchaseoder',$active3);
		
		$active4 = array('pooptions'=>true);
		$query['data4'] = $this->Admin_model->getdatafromtable('sellerpostproduct',$active4);
		
		 
		 
		$query['data5'] = $this->Admin_model->getdatafromtableliveneg();
		
		$val['sql']=count($query['data1']);
		$val['sql2']=count($query['data2']);
		$val['sql3']=count($query['data3']);
		$val['sql4']=count($query['data4']);
		$val['sql5']=$query['data5'];
		
			}
	
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/indexm',$val);
		$this->load->view('admin/footer');
		
	}
	
	 
	
	function getUserDatalive(){
	$this->load->model('Admin_model');
	$strUID1   = $this->input->post('bcompanyname');
	$userData = $this->Admin_model->getUserDatalive($strUID1);
	echo json_encode($userData);exit;
}
	
	
	
	
}
