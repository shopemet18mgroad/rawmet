<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_add_seller_renego_buyresponse extends CI_Controller {

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
	 if($this->input->post('vusername')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			
			
			$vusername = $this->input->post('vusername');
			$seller_renego_price = $this->input->post('seller_renego_price');
			$seller_renego_units = $this->input->post('seller_renego_units');
			$buyer_req_response_id = $this->input->post('buyer_req_response_id');
			
			
			
			$data = array('vusername' => $vusername,'seller_renego_price'=> $seller_renego_price,'seller_renego_units'=>$seller_renego_units,'buyer_req_response_id'=>$buyer_req_response_id);
			

			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('seller_req_response',$data);
			header('location: ./vendor_buyerResponse_req/index/'.$datainserr);
			}
			
		
				$this->load->model('Admin_model');
				$this->load->library('session');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				
				
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/buyer_response_req',$data);
		$this->load->view('customer/footer');
			 
	 
//}
			
	
	}
	}
