<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_myquotes extends CI_Controller {

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
			if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		//$reqapproval = array('sellerid'=>$sess['sessi'],'sellapproval'=>true);
		
	     $id = urldecode($this->uri->segment(3));
		//print_r($id);die;
	   $sellerid = urldecode($this->uri->segment(4));
		
	     $buyerid = urldecode($this->uri->segment(5));
	
		//$query['sqldata'] = $this->Admin_model->getdatafromtable('purchaseoder',$reqapproval);
		$query['sql_sort'] = $this->Admin_model->getdatafromtable_sort_seller1($id,$buyerid);
	
		$query['sql_data'] = $this->Admin_model->getdatafromtable_sort_seller();
		
	//echo '<pre>'; print_r($query['sql_data']); die;
		//print_r($query['sql_data']);die;
		
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
			}
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/myquotes',$query);
		$this->load->view('vendor/footer');
		
	
	}
	
}
