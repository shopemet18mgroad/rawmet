<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_buyerrequriment2 extends CI_Controller {

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
		 
		 
		 
		 
		 
		
		$query = $this->Admin_model->getAllbuyReqlist();
		
		$adac['sqldata']= $query;
		
		
		
		
		
		
	
		
		
		
	
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('header',$sess);
		$this->load->view('buyerrequriment2',$adac);
		$this->load->view('footer');
		$this->load->helper('url');
	
			}
	
}

	
