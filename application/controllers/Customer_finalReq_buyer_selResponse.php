<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_finalReq_buyer_selResponse extends CI_Controller {

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
		$bname = urldecode(($this->uri->segment(4)));
		
		$active = array('id'=>$id ,'bname'=>$sess['sessi']);
		
		
		//$adac['sqldata'] = $this->Admin_model->getsellerrenego_data4();
		$query2 = $this->Admin_model->getdatafrombuyer_req_response2($id);	
		$adac['sqldata4']= $query2;
		//print_r($adac['sqldata1']); die;
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/finalReq_buyer_selResponse',$adac);
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
		$this->load->view('customer/finalReq_buyer_selResponse');
		$this->load->view('customer/footer');
			
	}
	
}
	