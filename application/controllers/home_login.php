<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_login extends CI_Controller {

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
		$this->session->sess_expiration = '3600';
		if($this->input->post('user')){
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyer_register";
				$colname = "busername";
				$colname2 = "bpassword";
			     $status ="boptions";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "vendor_register";
				$colname = "vusername";
				$colname2 = "vpassword";
				$status ="voptions";
			}else{
				$table = "adminprofile";
				$colname = "ausername";
				$colname2 = "apassword";
				$status="aoptions";
			  }
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$pass = base64_encode($pass);
			$check_db = array($colname => $user, $colname2 => $pass, $status=>true);
			$this->load->model('Admin_model');
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "buyer_register"){
					  $newdata = array('username'=>$user,'auth'=>'BUYER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'customer_index');
					  die;
				  }else if($table == "vendor_register"){
					  $newdata = array('username'=>$user,'auth'=>'SELLER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'vendor_editvendorprofile');
					  die;
				  }else if($table == "adminprofile"){
					  $newdata = array('username'=>$user,'auth'=>'ADMIN','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					 header('location: '.base_url().'admin_indexm');
					 die; 
				  }
			  }else{
				  $datainserr = "Invalid Password";
				  header('location: '.base_url().'Home_login/index_error/'.$datainserr);
				  die;
			  }
			  die;
		}else{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			
	}
	
}
