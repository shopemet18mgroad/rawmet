<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_contactsupplier extends CI_Controller {

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
		$id= $this->uri->segment(4);	
		//$category= urldecode($this->uri->segment(5));
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$active1 = array('buyerid'=>$sess['sessi']);
			
		
		$id = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$active = array('id'=>$id);
		
		
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct', $active);
		$data['sqldata']= $query;
		
		$data['sqldata2'] = $this->Admin_model->getdatafromtable_seller2($id);
		
		$data['sqldata3'] = $this->Admin_model->getdatafromtable_seller3($id);
		$data['sqldata4'] = $this->Admin_model->getdatafromtable_seller4($id);
		$data['sqldata5'] = $this->Admin_model->getdatafromtable_seller5($id);
		
		
		$adac['sqldata']= $query;
		
		
		
		
			
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/contactsupplier',$data);
		$this->load->view('customer/footer');
		
	}
	}
	
		 function approveProduct(){
		$this->load->model('Admin_model');
		$sellerpostproduct_id = $this->uri->segment(3);
		$sellerpostproduct_id = $this->input->post('sellerpostproduct_id');		
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		$data2 = array('buyerapprove'=>1);
		//$data = array('status'=>1);
		$comp = array('sellerpostproduct_id'=>$sellerpostproduct_id);
		//$comp2 = array('seller_mbuyreq_id'=>$id);
		//$this->Admin_model->update_custom('buyer_req_response',$data,$comp2,$comp2);
		$this->Admin_model->update_custom('selquotenegotate',$data2,$comp,$comp);
		exit;
		
		 
	}
	
	
	
	
	
	
	
		 
	
	
}
