
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_custrenegovalue extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('vname'=>$sess['sessi'],'selapprove'=>false);
		//$reqapproval = array('sellapproval'=>false);
		
		
		$query = $this->Admin_model->getdatafromtable('cust_renego',$active1);
		
		
		$adac['sqldata']= $query;
		
		
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/custrenegovalue',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');
		
			
			
		
		}

			
	}
	
		
		public function approve_requote(){
			
		$this->load->model('Admin_model');
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
		$vname = urldecode(($this->uri->segment(4)));
		$busername = urldecode(($this->uri->segment(5)));
		
		
		$retriveval = array('busername'=>$busername,'productid'=>$productid,'vname'=>$vname);

		//print_r($retriveval );die;
		
		$this->load->model('Admin_model');
		$app= array('selapprove'=>true);
		$query = $this->Admin_model->update_custom('cust_renego', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_custrenegovalue/index/'.urldecode($productid)."/".urldecode($busername)."/".urldecode($vname));
		
		die;
	
	}
	
	
	public function reject(){
		$this->load->helper('url');
		$compnameurl = $this->uri->segment(3);
		$compnameurl = urldecode($compnameurl);
		$compnameurl2 = explode('|',$compnameurl);
		//$compnameurl3 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		//$com = urldecode($compnameurl3[2]);
		$this->load->model('Admin_model');
		//$retrivevaltmp = str_ireplace('-','/',$this->uri->segment(3));
		
		$data2 = array('buyerapprove'=>2);
		$updatech = array('productid'=>$comp,'vname'=>$compname);
		$this->load->model('Admin_model');
		
		$status = $this->Admin_model->update_custom('selquotenegotate',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'customer_renegotiation/index/'.urlencode($retrivevaltmp3));
		
		die;
	}
		
	}

		