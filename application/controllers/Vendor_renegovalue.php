
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_renegovalue extends CI_Controller {

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
		$active1 = array('sellerid'=>$sess['sessi']);
		
		
		
		$query = $this->Admin_model->getdatafromtable('cust_renego',$active1);
		
		
		$adac['sqldata']= $query;
		
		
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/renegovalue',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');
		
			
			
		
		}

			
	}
	
	public function approve_quote(){
			
		$compnameurl = $this->uri->segment(3);
		$compnameurl = urldecode($compnameurl);
		$compnameurl2 = explode('|',$compnameurl);
		//$compnameurl3 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		//$com = urldecode($compnameurl3[2]);
		$this->load->model('Admin_model');
		
		
		//$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$comp,'vname'=>$compname);
		
		
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

		
