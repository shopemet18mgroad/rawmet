<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_add_finalReq_buyer_selResponse extends CI_Controller {

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
			$buyer_final_price = $this->input->post('buyer_final_price');
			$buyer_final_units = $this->input->post('buyer_final_units');
			$seller_mbuyreq_id = $this->input->post('seller_mbuyreq_id');
			
			
			
			$data = array('bname' => $bname,'buyer_final_price'=> $buyer_final_price,'buyer_final_units'=>$buyer_final_units,'seller_mbuyreq_id'=>$seller_mbuyreq_id);
			

			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('buyer_final_req',$data);
			header('location: ./Customer_Buyer_final_renego_status/index/'.$datainserr);
			}
			
		
				$this->load->model('Admin_model');
				$this->load->library('session');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				
				
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/Buyer_final_renego_status',$data);
		$this->load->view('customer/footer');
			 
	 
//}
			
	
	}
	}
