<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_managebuyrequirements extends CI_Controller {

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


		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$reqapproval = array('adapproval'=>false);
		$query['sqldata'] = $this->Admin_model->getdatafromtable('buyerrequriement',$reqapproval);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/managebuyrequirements',$query);
		$this->load->view('customer/footer');
		
	}
	}
	
	public function approve_buyingrequ(){
		
		//$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		//$retriveval = array('productid'=>$retrivevaltmp);
		$compnameurl = $this->uri->segment(3);
		$compnameurl = urldecode($compnameurl);
		$compnameurl2 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		$this->load->model('Admin_model');

		$retriveval = array('productid'=>$comp,'buyerid'=>$compname);
		$this->load->model('Admin_model');
		$app= array('adapproval'=>true);
		$query = $this->Admin_model->update_custom('buyerrequriement', $app, $retriveval, $retriveval);
		if($retriveval){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}
	
}
