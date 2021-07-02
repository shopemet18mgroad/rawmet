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
		//print_r($data['sqldata']); die;	
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
	
	
	 function rejectProduct2(){
		$this->load->model('Admin_model');
		$id = $this->uri->segment(3);
		$id = $this->input->post('id');		
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		
		$data = array('status'=>2);
		$comp = array('id'=>$id);
		$comp2 = array('id'=>$id);
		$this->Admin_model->update_custom('seller_mbuyreq',$data,$comp,$comp);
	
		exit;
		
		 
	}
	
	
		function rejectProduct3(){
		$this->load->model('Admin_model');
		$id = $this->uri->segment(3);
		$id = $this->input->post('seller_mbuyreq_id');	
		//$id = $this->input->post('seller_mbuyreq_id');			
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		$data = array('buyer_approval'=>2);
		$data2 = array('status'=>6);
		$data3 = array('status'=>6);
		
		$comp = array('id'=>$id);
		$comp2 = array('seller_mbuyreq_id'=>$id);
		$comp3 = array('seller_mbuyreq_id'=>$id);
		
		$this->Admin_model->update_custom('seller_req_response',$data,$comp2,$comp2,$comp2);
		$this->Admin_model->update_custom('seller_mbuyreq',$data2,$comp,$comp,$comp);
		$this->Admin_model->update_custom('buyer_req_response',$data3,$comp3,$comp3,$comp3);
		

		exit;
		
		 
	}
	
}
	