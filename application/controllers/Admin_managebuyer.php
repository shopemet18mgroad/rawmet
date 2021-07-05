
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_managebuyer extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			 $datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{ 
		$boptions = array('boptions'=>true);
		
		$query = $this->Admin_model->getdatafromtable('buyer_register',$boptions);
		
		$adac['data']= $query;
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
			}
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/managebuyer',$adac);
		$this->load->view('admin/footer');
	
	}
		public function reject(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
         
		$buyerid = urldecode($this->uri->segment(3));
		$retriveval = array('buyerid'=>$buyerid);
		
		$data2 = array('boptions'=>2);

		$status = $this->Admin_model->update_custom('buyer_register',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_managebuyer/index/'.urlencode($retriveval));
		die;
	}
	
	public function subscribe(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
        
		$buyerid = urldecode($this->uri->segment(3));
		$retriveval = array('buyerid'=>$buyerid);
		
		$subs = array('subscription'=>0,'subscription_amount'=>0);
	
		
		$status = $this->Admin_model->update_custom('buyer_register',$subs,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_managebuyer/index/'.urlencode($retriveval));
		die;
	}
	
	
}
	
