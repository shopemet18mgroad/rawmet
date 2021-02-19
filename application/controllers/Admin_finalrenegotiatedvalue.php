

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_finalrenegotiatedvalue extends CI_Controller {

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
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$active1 = array('custapprove'=>true);
		//print_r($active1); die;
		
		
		
		$query = $this->Admin_model->getdatafromtable('vend_renego',$active1);
		
		
		$adac['sqldata']= $query;
		
		
		$this->load->view('Admin/header',$sess);
		$this->load->view('Admin/finalrenegotiatedvalue',$adac);
		$this->load->view('Admin/footer');
		$this->load->helper('url');
		
			
			
		
		}

			
	}
	
		public function approve_requotes(){
			
		$this->load->model('Admin_model');
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
		$busername = urldecode(($this->uri->segment(4)));
		
		$retriveval = array('busername'=>$busername,'productid'=>$productid);

		//
		
		$this->load->model('Admin_model');
		$app= array('custapprove'=>false);
		$query = $this->Admin_model->update_custom('vend_renego', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Customer_finalrenegotiatedvalue/index/'.urldecode($productid)."/".urldecode($busername));
		
		die;
	
	}

	
	public function reject(){
		$this->load->helper('url');
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	
		$busername = urldecode(($this->uri->segment(4)));

		$retriveval = array('busername'=>$busername,'productid'=>$productid);

		
		
		$this->load->model('Admin_model');
		$app= array('custapprove'=>2);
		$query = $this->Admin_model->update_custom('vend_renego', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Customer_finalrenegotiatedvalue/index/'.urldecode($productid)."/".urldecode($busername));
		
		die;
	}
		
	}

		