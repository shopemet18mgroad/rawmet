<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_index extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('buyerid'=>$sess['sessi'],'buyerapprove'=>false);
		
		$query['data'] = $this->Admin_model->getdatafromtable('selquotenegotate',$active);
		
		$active2 = array('buyerid'=>$sess['sessi'],'buyerapprove'=>true);
		$query['data2'] = $this->Admin_model->getdatafromtable('selquotenegotate',$active2);
		
		$active3 = array('buyerid'=>$sess['sessi'],'sellapproval'=>true);
		$query['data3'] = $this->Admin_model->getdatafromtable('purchaseoder',$active3);
		
		$val['sql']=count($query['data']);
		$val['sql2']=count($query['data2']);
		$val['sql3']=count($query['data3']);
			}
	
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/index',$val);
		$this->load->view('customer/footer');
		
	}
	
}
