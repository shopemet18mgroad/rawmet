
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_renegotiation extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('busername'=>$sess['sessi'],'buyerapprove'=>false);
		//$reqapproval = array('sellapproval'=>false);
		
		
		$query = $this->Admin_model->getdatafromtable('selquotenegotate',$active1);
		
		
		$adac['sqldata']= $query;
		
		
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/renegotiation',$adac);
		$this->load->view('customer/footer');
		$this->load->helper('url');
		
			
			
		
		}

			
	}
	
	public function approve_quote(){
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$retrivevaltmp);
		
		
		$this->load->model('Admin_model');
		$app= array('buyerapprove'=>true);
		$query = $this->Admin_model->update_custom('selquotenegotate', $app, $retriveval, $retriveval);
		if($retriveval){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}
	
	
	public function reject(){
		$this->load->helper('url');
		$retrivevaltmp = str_ireplace('-','/',$this->uri->segment(3));
		
		$data2 = array('buyerapprove'=>2);
		$updatech = array('productid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		
		$status = $this->Admin_model->update_custom('selquotenegotate',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'customer_renegotiation/index/'.urlencode($retrivevaltmp3));
		
		die;
	}
		
	}

		