<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_myrequirements extends CI_Controller {

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
			}else
	{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('buyerid'=>$sess['sessi']);
		//print_r($active1); die; 
		//	$query2 = $this->Admin_model->getdatafromtable('buyer_register',$active1);
		
		//$buyername = $query2[0]->bname;
		//$custreq = array('bname'=>$buyername);
		
		
		//$adac['sqldata'] = $this->Admin_model->getdatafromtable('buyerrequriement',$custreq);
		
		$adac2 = $this->Admin_model->getdatafromtable_buyer();
		//$a = $adac2[0]->productid;
		//$custreq2 = array('productid'=>$a);
		//print_r($custreq); die;
		
		$adac['sqldata2']= $adac2;
		//$adac['sqldata3'] = $this->Admin_model->getdatafromtable('seller_mbuyreq',$custreq);



		//echo "<pre>";print_r($adac['sqldata3']);exit;
		//$adac['sqldata_mbuyer'] = $this->Admin_model->getdatafromtable_buyer1(//$buyername);
		//echo "<pre>";print_r($adac['sqldata_mbuyer']);exit;
		
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/myrequirements',$adac);
		$this->load->view('customer/footer');

		

		
	}




}

function setApproveproduct(){
		$this->load->model('Admin_model');
		$seller_mbuyreq_id = $this->input->post('id');
		$data['status'] = 1;
		$this->db->where('id',$seller_mbuyreq_id);
		echo $this->db->update('seller_mbuyreq', $data);exit;
	}


function getUserData(){
	$this->load->model('Admin_model');
	$strUID1   = $this->input->post('productid');
	$userData = $this->Admin_model->getUserData($strUID1);
	echo json_encode($userData);exit;
}
	 
		/* public function cust(){
		
		$this->load->model('Admin_model');
		
		
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	

		$retriveval = array('productid'=>$productid);

		print_r($retriveval );die;
		
		$this->load->model('Admin_model');
		$query['sqldata'] = $this->Admin_model->getdatafromtable('quotes',$retriveval);
		header('location: '.base_url().'Customer_myrequirements/index/'.urldecode($productid)."/".urldecode($busername));
		
		die;
	
	} */
}