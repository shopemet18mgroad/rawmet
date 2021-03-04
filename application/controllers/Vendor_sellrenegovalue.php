<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_sellrenegovalue extends CI_Controller {

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
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$sellerpostproduct_id = $this->uri->segment(3);
		
		$sellerid = urldecode(($this->uri->segment(4)));
		
		$active1 = array('sellerid'=>$sess['sessi'],'sellapproval'=>false);
	
		$query['sqldata'] = $this->Admin_model->getdatafromtable('quotes',$active1);
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/sellrenegovalue',$query);
		$this->load->view('vendor/footer');
			}
		
	}
		
		
		public function approve_quotes(){
			
		$this->load->model('Admin_model');
		
		
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	
		$buyerid = urldecode(($this->uri->segment(4)));

		$retriveval = array('buyerid'=>$buyerid,'productid'=>$productid);

		//print_r($retriveval );die;
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>true);
		$query = $this->Admin_model->update_custom('quotes', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_sellrenegovalue/index/'.urldecode($productid)."/".urldecode($buyerid));
		
		die;
	
	}

	public function reject(){
		$this->load->helper('url');
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	
		$buyerid = urldecode(($this->uri->segment(4)));

		$retriveval = array('buyerid'=>$buyerid,'productid'=>$productid);

		
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>2);
		$query = $this->Admin_model->update_custom('quotes', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_sellrenegovalue/index/'.urldecode($productid)."/".urldecode($buyerid));
		
		die;
	}
	

}