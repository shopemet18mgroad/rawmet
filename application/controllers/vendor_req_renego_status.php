
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendor_req_renego_status extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('vusername'=>$sess['sessi']);
		
		
		
		
		$adac['sqldata'] = $this->Admin_model->getsellerrenego_data5();	
		
		
			
		
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/req_renego_status',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');
		
		
		
		}

			
	}

	
		
	}

		