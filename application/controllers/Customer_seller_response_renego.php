<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_seller_response_renego extends CI_Controller {

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
	public function index(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		
		$this->load->library('session');
		
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else
	{
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		
		$id = $this->uri->segment(3);
		
		$buyerid = $this->uri->segment(4);
		 
	
		$active = array('id'=>$id ,'buyerid'=>$sess['sessi']);
	 
		$query = $this->Admin_model->getdatafromtable('seller_mbuyreq',$active);
		$data['sqldata']= $query;
		
		$data['buyer2'] = $this->Admin_model->getdatafromtable_buyer2();
		$data['uploadPo'] = $this->Admin_model->getdatafromtablefrstsendoffer($buyerid,$id);
		//echo '<pre>';  print_r($data['uploadPo']); die;	
		$data['sqldata4'] = $this->Admin_model->getdatafrombuyer_req_response2($id);
		$data['sqldata15'] = $this->Admin_model->getdatafrombuyer_req_response15($id);
		$data['twouploadPo'] = $this->Admin_model->getdatafromtable_buyer10($buyerid,$id);
		 
		$data['reqres_appl'] = $this->Admin_model->req_approval($id);
		$data['finalapprovalstatus'] = $this->Admin_model->getdatafrombuyer_req_response5(); 
		$data['finalupldpo'] = $this->Admin_model->getdatafrombuyer_req_selfetch($buyerid,$id);
		//echo '<pre>';  print_r($data['finalupldpo']); die;
		$data['final_reg'] = $this->Admin_model->getdatafrombuyer_req_response30();
		$data['lastupload'] = $this->Admin_model->getdatafrombuyer_req_selfetchlast();
		
		 
		
		
		$data['buyer_req_response'] = $this->Admin_model->getbuyer_req_response($id, $sess['sessi']);
		$data['buyer_final_req'] = $this->Admin_model->getbuyer_req_response2($id, $sess['sessi']);
		//$data['sqldata4'] = $this->Admin_model->getdatafrombuyer_req_response2($id);
		
		//echo '<pre>';  print_r($data['buyer2']); die;
		  
		 
		$data['sqldata3'] = $this->Admin_model->getsellerrenego_datafetch($buyerid,$id);
		
		//echo '<pre>';  print_r($data['sqldata3']); die;
		//$query = $this->Admin_model->getdatafromtable_neg();
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		//$data['sqldata3'] = $this->Admin_model->getsellerrenego_data3();
		//$data['sqldata3'] = $this->Admin_model->getdatafrombuyer_req_selfetch();
		
		//print_r($data['sqldata3']); die;
		
		$data['sqldata5'] = $this->Admin_model->getdatafrombuyer_req_response5();		
		//print_r($data['sqldata5']); die;	
		
		
		 $data['seller_mbuyreq'] = $this->Admin_model->getbuyer_req_approval($id, $sess['sessi']);
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/seller_response_renego',$data);
		$this->load->view('customer/footer');
	}
		
	}
	
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->helper('url');
		$this->load->view('customer/header');
		$this->load->view('customer/seller_response_renego');
		$this->load->view('customer/footer');
			
	}
	
}
	