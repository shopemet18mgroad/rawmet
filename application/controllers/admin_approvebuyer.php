<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_approvebuyer extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.php
	 */
	public function index()
	{
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{  
		$boptions = array('boptions'=>false);
		
		$query = $this->Admin_model->getdatafromtable('buyer_register',$boptions);
		
		$adac['data']= $query;
		
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/approvebuyer',$adac);
		$this->load->view('admin/footer');
	
	}
	
	
	public function approve_buyer(){
		
		$busername= $this->uri->segment(3);
		
		$busername = urldecode($busername);
		//print_r($bcompanytype);die;
		$this->load->model('Admin_model');
		$app= array('boptions'=>true);
		$adaction2 = array('busername'=>$busername);
		$query = $this->Admin_model->update_custom('buyer_register', $app, $adaction2, $adaction2);
		if($busername){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}
}
		
		
	
	


