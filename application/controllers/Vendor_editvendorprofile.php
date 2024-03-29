
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_editvendorprofile extends CI_Controller {

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
		//$voptions = array('voptions'=>true);
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$active = array('sellerid'=>$sess['sessi']);
		
		$query = $this->Admin_model->getdatafromtable('vendor_register',$active);
		
		$adac['sqldata']= $query;

		
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/editvendorprofile',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');

			
		}
			}
		public function index_error(){
			$this->load->model('Admin_model');
			$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth')!= "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$active = array('sellerid'=>$sess['sessi']);
		
		$query = $this->Admin_model->getdatafromtable('vendor_register',$active);
		
		$adac['sqldata']= $query;
		//$voptions = array('voptions'=>true);
		
	
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/editvendorprofile',$adac);
		$this->load->view('vendor/footer');
			}	
	}
	
		
	}
