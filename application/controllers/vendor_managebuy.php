<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_managebuy extends CI_Controller {

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
		$productid = str_ireplace('-','/', $this->uri->segment(3));
	
		$bname = ($this->uri->segment(4));
	
		
		$active = array('productid '=>$productid ,'bname'=>$bname);
		//print_r($active);die;
	
		$query = $this->Admin_model->getdatafromtable('buyerrequriement', $active);
		//print_r($query);die;
		$data['sqldata']= $query;
		$sess = array('sessi'=>$this->session->userdata('username'));
			//print_r($query); die;
			/* if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));

			$active = array('busername'=>$sess['sessi']) */;
		
			
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/managebuy',$data);
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
		$this->load->view('vendor/managebuy');
		$this->load->view('vendor/footer');
			
	}
	
}
	