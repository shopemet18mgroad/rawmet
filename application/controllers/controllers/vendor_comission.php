<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_comission extends CI_Controller {

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
		
		//$query2 = $this->Admin_model->getdatafromtable('vendor_register',$active1);
		
		//$vendorname = $query2[0]->vname;
		//$poptions = array('vname'=>$vendorname);
		
		
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct',$active1);
		
		
		$adac['sqldata']= $query;
		
			//$active = array('vusername'=>$sess['sessi']);
		//$adac['sess']=array('sessi'=>$this->session->userdata('username'));
		
		
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/comission',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');

		}

			
	}
	public function approve_product(){
		
		 $productid = urldecode(str_ireplace('/','-',$this->uri->segment(3)));
         $vname = urldecode($this->uri->segment(4));

		$retriveval = array('productid'=>$productid,'vname'=>$vname);
		
		//print_r($retriveval);die;
		
		
		$this->load->model('Admin_model');
		$app= array('comapprove'=>true);
		$query = $this->Admin_model->update_custom('sellerpostproduct', $app, $retriveval, $retriveval);
		if($retriveval){
			header('location:'.base_url().'vendor_comission/index/'.urlencode($retriveval));
		}else{
			echo "BYE";
		}
	
	}

	public function delete_seller(){
	
	$productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		
		$active = array('productid'=>$productid);
		
		$this->load->model('Admin_model');
		$this->Admin_model->delete_data('sellerpostproduct', $active);
		
		$this->load->helper('url');
		$this->load->library('session');
		
		header('location: '.base_url().'vendor_comission/index/');
	
}
public function reject(){
		$this->load->helper('url');
		$productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
         $vname = urldecode($this->uri->segment(4));

		$retriveval = array('productid'=>$productid,'vname'=>$vname);
		
		$data2 = array('comapprove'=>2);
	
		$this->load->model('Admin_model');
		
		$status = $this->Admin_model->update_custom('sellerpostproduct',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'vendor_comission/index/'.urlencode($retriveval));
		
		die;
	}
	
	
		
	}
		