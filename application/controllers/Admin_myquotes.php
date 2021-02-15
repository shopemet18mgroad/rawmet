<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_myquotes extends CI_Controller {

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
		$query['sqldata'] = $this->Admin_model->getdatafromtable('purchaseoder',$reqapproval);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
	
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/myquotes',$query);
		$this->load->view('admin/footer');
		
	}
	
		public function approve_product(){
		
		 $productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		 
        // $vname = urldecode($this->uri->segment(4));

		$retriveval = array('productid'=>$productid);
		
		
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>true);
		
		$query = $this->Admin_model->update_custom('purchaseoder', $app, $retriveval, $retriveval);
	
		if($retriveval){
			header('location: '.base_url().'Admin_myquotes/index/'.urlencode($retriveval));
		}else{
			echo "BYE";
		}
	
	}
	
}
