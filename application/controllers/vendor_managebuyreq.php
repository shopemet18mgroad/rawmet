<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_managebuyreq extends CI_Controller {

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
		$reqapproval = array('adapproval'=>true,'selapprove'=>false);
		$query['sqldata'] = $this->Admin_model->getdatafromtable('buyerrequriement',$reqapproval);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/managebuyreq',$query);
		$this->load->view('vendor/footer');
		
	}
	
	
	public function delete_buyingrequ(){
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retriveval = array('productid'=>$retrivevaltmp);
	
		$this->load->model('Admin_model');
		
		if($retrivevaltmp){
			$this->Admin_model->delete_data('buyerrequriement', $retriveval);
	
		}
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		header('location: '.base_url().'vendor_managebuyreq/index/'.$retrivevaltmp);
		
	}
	
		public function approve_requirement(){
			
		$this->load->model('Admin_model');
		$this->load->library('session');
		
	
		
		
		$productid = urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	
		$bname = urldecode(($this->uri->segment(4)));
		
		//print_r($sess); die;
		$retriveval = array('bname'=>$bname,'productid'=>$productid);

		
		
		$this->load->model('Admin_model');
	$sess = array('sessi'=>$this->session->userdata('username'));
		$app= array('selapprove'=>true,'vname'=>$sess['sessi']);
		
	
		$query = $this->Admin_model->update_custom('buyerrequriement', $app, $retriveval, $retriveval);
		header('location: '.base_url().'vendor_managebuyreq/index/'.urldecode($productid)."/".urldecode($bname));
		
		die;
	
	}
	
	
}
