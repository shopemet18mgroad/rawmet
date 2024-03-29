<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_purchaseoder extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		
			$pooptions = array('pooptions'=>false);
			//print_r($pooptions);die;
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct',$pooptions);
		
		
		$adac['sqldata']= $query;
			}	
		$sess = array('sessi'=>$this->session->userdata('username'));

		
		
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/purchaseoder',$adac);
		$this->load->view('admin/footer');
		
	}
	
	public function approve_paid(){
		
		 $productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
         $sellerid = urldecode($this->uri->segment(4));

		$retriveval = array('productid'=>$productid,'sellerid'=>$sellerid);
		
		
		
		$this->load->model('Admin_model');
		$app= array('pooptions'=>true);
		$query = $this->Admin_model->update_custom('sellerpostproduct', $app, $retriveval, $retriveval);
		if($retriveval){
			header('location: '.base_url().'admin_purchaseoder/index/'.urlencode($retriveval));
		}else{
			echo "BYE";
		}
	
	}
	
		public function reject_unpaid(){
		$this->load->helper('url');
		$productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
         $sellerid = urldecode($this->uri->segment(4));

		$retriveval = array('productid'=>$productid,'sellerid'=>$sellerid);
		
		$data2 = array('pooptions'=>2);
	
		$this->load->model('Admin_model');
		
		$status = $this->Admin_model->update_custom('sellerpostproduct',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'admin_purchaseoder/index/'.urlencode($retriveval));
		
		die;
	}
}
