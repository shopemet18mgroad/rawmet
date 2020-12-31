
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_negotiated extends CI_Controller {

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
		$active1 = array('vusername'=>$sess['sessi']);
		
		//$query2 = $this->Admin_model->getdatafromtable('vendor_register',$active1);
		
		//$vendorname = $query2[0]->vname;
		//$poptions = array('vname'=>$vendorname);
		
		
		$query = $this->Admin_model->getdatafromtable('seller_mbuyreq',$active1);
		
		
		$adac['sqldata']= $query;
		
			//$active = array('vusername'=>$sess['sessi']);
		//$adac['sess']=array('sessi'=>$this->session->userdata('username'));
		
		
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/negotiated',$adac);
		$this->load->view('customer/footer');
		$this->load->helper('url');
		
		
		
		}

			
	}
	public function delete_seller(){
	
		
		$productname = urlencode($this->uri->segment(3));
		//$productid = str_ireplace('-','/',$productid);
		
		$active = array('productname'=>$productname);
		
		$this->load->model('Admin_model');
		$this->Admin_model->delete_data('seller_mbuyreq', $active);
		
		$this->load->helper('url');
		$this->load->library('session');
		
		header('location: '.base_url().'vendor_uploadedproduct/index/');
	
}
	
	
		
	}

		