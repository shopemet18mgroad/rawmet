<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_customerquotes extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		
		$this->load->model('Admin_model');
		$query['sqldata'] = $this->Admin_model->gettable('purchaseoder');
		
		$sess = array('sessi'=>$this->session->userdata('username'));
			$active = array('ausername'=>$sess['sessi'],'sellapproval'=>true);
			}
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/customerquotes',$query);
		$this->load->view('admin/footer');
		
	}
		public function approve_purchaseorder(){
		
		 $productid = urldecode(str_ireplace('/','-',$this->uri->segment(3)));
           $vname = urldecode($this->uri->segment(4));

		  $retriveval = array('productid'=>$productid,'vname'=>$vname);
		
		
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>true);
		
		$query = $this->Admin_model->update_custom('purchaseoder',$app, $retriveval, $retriveval);
	
		if($retriveval){
			header('location: '.base_url().'Admin_customerquotes/index/'.urlencode($retriveval));
		}else{
			echo "BYE";
		}
	
	}


}