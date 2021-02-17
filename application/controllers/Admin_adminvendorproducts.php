<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_adminvendorproducts extends CI_Controller {

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
$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$this->load->model('Admin_model');
		
		
	
		$poptions = array('poptions'=>false);
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct',$poptions);
		
		$adac['sqldata']= $query;
		//print_r($adac['sqldata']);die;
		
			//$active = array('vusername'=>$sess['sessi']);
		//$adac['sess']=array('sessi'=>$this->session->userdata('username'));
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
		
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/adminvendorproducts',$adac);
		$this->load->view('admin/footer');
		$this->load->helper('url');

		}
	}
		
		public function approve_product(){
		
		 $productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
         $sellerid = urldecode($this->uri->segment(4));

		$retriveval = array('productid'=>$productid,'sellerid'=>$sellerid);
		
		
		
		$this->load->model('Admin_model');
		$app= array('poptions'=>true);
		$query = $this->Admin_model->update_custom('sellerpostproduct', $app, $retriveval, $retriveval);
		if($retriveval){
			header('location: '.base_url().'Admin_adminvendorproducts/index/'.urlencode($retriveval));
		}else{
			echo "BYE";
		}
	
	}
		public function reject(){
		$this->load->helper('url');
		$productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
         $sellerid = urldecode($this->uri->segment(4));

		$retriveval = array('productid'=>$productid,'sellerid'=>$sellerid);
		
		$data2 = array('poptions'=>2);
	
		$this->load->model('Admin_model');
		
		$status = $this->Admin_model->update_custom('sellerpostproduct',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_adminvendorproducts/index/'.urlencode($retriveval));
		
		die;
	}

			
	
	
}