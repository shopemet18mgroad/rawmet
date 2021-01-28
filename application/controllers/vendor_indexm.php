<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_indexm extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('vname'=>$sess['sessi']);
			
		$query['data'] = $this->Admin_model->getdatafromtable('selquotenegotate',$active);
		
		$adac['sql']= count($query['data']);
		
		$active3 = array('vname'=>$sess['sessi'],'sellapproval'=>true);
		$query['data'] = $this->Admin_model->getdatafromtable('purchaseoder',$active3);
		

		$adac['sql3']=count($query['data']);
	
		
		
			
			//$query = $this->db->query('SELECT * FROM selquotenegotate');
		//$val['count']=$query->num_rows();
	
		
			}
		$this->load->view('vendor/header',$sess);
		$this->load->view('Vendor/indexm',$adac);
		$this->load->view('Vendor/footer');
		
	}
	
}
