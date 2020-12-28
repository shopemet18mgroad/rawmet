<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_custquoteapproval extends CI_Controller {

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
		$reqapproval = array('sellapproval'=>false);
		$query['sqldata'] = $this->Admin_model->getdatafromtable('quotes',$reqapproval);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/custquoteapproval',$query);
		$this->load->view('vendor/footer');
		
	}
	public function approve_quotes(){
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$retrivevaltmp);
		
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>true);
		$query = $this->Admin_model->update_custom('quotes', $app, $retriveval, $retriveval);
		if($retriveval){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}
	

}