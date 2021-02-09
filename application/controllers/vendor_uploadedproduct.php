<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_uploadedproduct extends CI_Controller {

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
		$this->load->view('vendor/uploadedproduct',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');

		}

			
	}

	public function delete_seller(){
	
	$productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		
		$active = array('productid'=>$productid);
		
		$this->load->model('Admin_model');
		$this->Admin_model->delete_data('sellerpostproduct', $active);
		
		$this->load->helper('url');
		$this->load->library('session');
		
		header('location: '.base_url().'vendor_uploadedproduct/index/');
	
}
	public function price_update(){
		if($this->input->post('productid')){
			$date =  Date('Y-m-d'); 
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
				
	 $productid = $this->input->post('productid'); 
	$price = $this->input->post('price');
	 $quantity = $this->input->post('quantity');
  $units = $this->input->post('units');
		         $supplyability = $this->input->post('supplyability');
			    $supplyunits = $this->input->post('supplyunits');
		
		
			
$data = array('units'=>$units,'price'=>$price,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'quantity'=>$quantity);
//print_r($data); die;
	

		
		
		$datainserr = "Data Inserted Successfully";
		$updatech = array('productid'=>$productid);
		//print_r($updatech);die;
			
		$status = $this->Admin_model->update_custom('sellerpostproduct',$data,$updatech,$updatech);
	
		
		header('location: '.base_url().'vendor_uploadedproduct/index/'.$datainserr);
	
	
		}

	
	

	}
	
	
		
	}
		