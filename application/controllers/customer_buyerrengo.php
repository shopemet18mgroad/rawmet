
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_buyerrengo extends CI_Controller {

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
		$productid = urldecode(str_ireplace('-','/', $this->uri->segment(3)));
		$busername =  urldecode($this->uri->segment(4));
		$vname =  urldecode($this->uri->segment(5));
	//print_r($vname); die;
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
				
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('productid '=>$productid,'busername'=>$sess['sessi'],'vname'=>$vname);
		//$reqapproval = array('sellapproval'=>false);
		
		
$query = $this->Admin_model->getdatafromtable('selquotenegotate',$active1);
		//print_r($query[0]->bprice); die;
		
		$adac['sqldata']= $query;
		
		
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/Buyerrengo',$adac);
		$this->load->view('customer/footer');
		$this->load->helper('url');
		
			
			
		
		}

			
	}
	

	
	
	

	}

		