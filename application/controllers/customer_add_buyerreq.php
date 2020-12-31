<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_add_buyerreq extends CI_Controller {

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
	 if($this->input->post('bname')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			
			$bname = $this->input->post('bname');
			$bcompanyname = $this->input->post('bcompanyname');
			
			$busername = $this->input->post('busername');
			$category = $this->input->post('category');
			$productname = $this->input->post('productname');
			$productid = $this->input->post('productid');
			$description = $this->input->post('description');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$price = $this->input->post('price');
			$priceperkg = $this->input->post('priceperkg');
			$sellerprice= $this->input->post('sellerprice');
			$bsupplyability = $this->input->post('bsupplyability');
			
			
			 //print_r($uploadproductimage);die;
			$data = array('bname' => $bname,'bcompanyname'=>$bcompanyname,'busername'=>$busername,'category'=> $category,'productname'=>$productname,'productid'=>$productid,'description' => $description,'quantity'=>$quantity,'units'=>$units,'price'=>$price,'priceperkg'=>$priceperkg,'sellerprice'=>$sellerprice,'bsupplyability'=>$bsupplyability);
			//print_r($data2);die;

			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('seller_mbuyreq',$data);
			header('location: ./vendor_managebuyreq/index/'.$datainserr);
			}
			
		/* 	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
				$datainserr = "Invalid Login Session";
				header('location: '.base_url().'login/index_error/'.$datainserr);
				die;
			}
			else
			{ */
				$this->load->model('Admin_model');
				$this->load->library('session');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				
				
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/managebuy',$data);
		$this->load->view('vendor/footer');
			 
	 
//}
			
		
		
	}
	}
