<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_sellerquotenego extends CI_Controller {

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
		$productid = urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	$busername =  urldecode($this->uri->segment(4));
		$vname =  urldecode($this->uri->segment(5));
	
		
		$active = array('productid '=>$productid ,'busername'=>$busername,'vname'=>$vname);
	
	
		$query = $this->Admin_model->getdatafromtable('quotes', $active);
	
		$data['sqldata']= $query;
		$sess = array('sessi'=>$this->session->userdata('username'));
		
	  
		
			
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/sellerquotenego',$data);
		$this->load->view('vendor/footer');
	
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->helper('url');
		$this->load->view('vendor/header');
		$this->load->view('vendor/sellerquotenego');
		$this->load->view('vendor/footer');
			
	}
	
}

	
