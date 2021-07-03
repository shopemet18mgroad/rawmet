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
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		$sellerpostproduct_id= $this->uri->segment(3);
		//print_r($sellerpostproduct_id); die;	
	 			 
	 


		//$category= urldecode($this->uri->segment(5));
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$active1 = array('buyerid'=>$sess['sessi']);
			
		
		$id = urldecode($this->uri->segment(3));
		$buyerid = $this->uri->segment(4);
	 //print_r($buyerid); die;
		$active = array('id'=>$id);
		
		
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct', $active);
		$data['sqldata']= $query;
		$data['approve_buyer'] = $this->Admin_model->getdatafromtable_approve_buyer2($id,$buyerid);
		$data['sqldata2'] = $this->Admin_model->getdatafromtable_seller2($id,$buyerid);
		$data['buyerid'] = $buyerid;
		$data['id'] = $id;
		$data['sqldata3'] = $this->Admin_model->getdatafromtable_seller3($id,$buyerid);
		//echo '<pre>'; print_r($data['sqldata3'] ); die;
		$data['sqldata4'] = $this->Admin_model->getdatafromtable_seller4($id,$buyerid);		
		$data['sqld'] = $this->Admin_model->getdatafromtable_buy_sel($id,$buyerid);
		
		$data['sqldata5'] = $this->Admin_model->getdatafromtable_forth_renego($id,$buyerid);
		$data['forth_renego2'] = $this->Admin_model->getdatafromtable_forth_renego2($id,$buyerid);  	
		$data['final_quotebyr'] = $this->Admin_model->getdatafromtable_final_quotebyr($id,$buyerid);
		//echo '<pre>';  print_r($data['final_quotebyr']); die;		
		$data['buy_quot'] = $this->Admin_model->getdatafromtable_buy_quot($id,$buyerid);
		$data['approve_buyer2'] = $this->Admin_model->getdatafromtable_approve_buyer2($id,$buyerid);		
		$data['frst_qut'] = $this->Admin_model->getdatafromtable_frst_qut($sellerpostproduct_id,$buyerid);
		$data['sce_qut'] = $this->Admin_model->getdatafromtable_sce_qut($sellerpostproduct_id,$buyerid);
		$data['thrd_qut']= $this->Admin_model->getdatafromtable_thrd_qut($sellerpostproduct_id,$buyerid);
		//echo '<pre>';  print_r($data['thrd_qut']); die;	
		$data['forth_qut'] = $this->Admin_model->getdatafromtable_forth_qut($sellerpostproduct_id,$buyerid);
		
		 
	
		//print_r($query); die;
		
		$data['cust_renego'] = $this->Admin_model->getbuyer_post_response($id, $sess['sessi']); 
		
		$adac['sqldata']= $query;
		
		
		
		
			
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/renegotiation',$data);
		$this->load->view('customer/footer');
		
	}
	}
	

	
		
	
	public function approve_requotes(){
			
		$this->load->model('Admin_model');
		//$sellerpostproduct_id =$this->uri->segment(3);
		$buyerid = $this->uri->segment(4);
		$sellerpostproduct_id = $this->uri->segment(3);
		$retriveval = array('buyerid'=>$buyerid,'sellerpostproduct_id'=>$sellerpostproduct_id);

		
		
		$this->load->model('Admin_model');
		$app= array('buyerapprove'=>true);
		$query = $this->Admin_model->update_custom('selquotenegotate', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Customer_renegotiation/index/'.$sellerpostproduct_id."/".$buyerid);
		
		die;
	
	}
	
		public function approve_requotes_seller(){
			
		$this->load->model('Admin_model');
		//$sellerpostproduct_id =$this->uri->segment(3);
		$buyerid = $this->uri->segment(4);
		$sellerpostproduct_id = $this->uri->segment(3);
		$retriveval = array('buyerid'=>$buyerid,'sellerpostproduct_id'=>$sellerpostproduct_id);

		//
		
		$this->load->model('Admin_model');
		$app= array('custapprove'=>true);
		$query = $this->Admin_model->update_custom('vend_renego', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Customer_renegotiation/index/'.$sellerpostproduct_id."/".$buyerid);
		
		die;
	
	}
	
	
	 public function reject_requotes(){
			
		$this->load->model('Admin_model');
		//$sellerpostproduct_id =$this->uri->segment(3);
		$buyerid = $this->uri->segment(4);
		$sellerpostproduct_id = $this->uri->segment(3);
		$retriveval = array('buyerid'=>$buyerid,'sellerpostproduct_id'=>$sellerpostproduct_id);

		$this->load->model('Admin_model');
		$app= array('buyerapprove'=>2);
		$query = $this->Admin_model->update_custom('selquotenegotate', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Customer_renegotiation/index/'.$sellerpostproduct_id."/".$buyerid);
		
		die;
	
	} 
		 
	
 public function reject_requotes_seller(){
			
		$this->load->model('Admin_model');
		//$sellerpostproduct_id =$this->uri->segment(3);
		$buyerid = $this->uri->segment(4);
		$sellerpostproduct_id = $this->uri->segment(3);
		$retriveval = array('buyerid'=>$buyerid,'sellerpostproduct_id'=>$sellerpostproduct_id);

		//
		
		$this->load->model('Admin_model');
		$app= array('custapprove'=>2);
		$query = $this->Admin_model->update_custom('vend_renego', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Customer_renegotiation/index/'.$sellerpostproduct_id."/".$buyerid);
		
		die;
	
	} 
	
}
