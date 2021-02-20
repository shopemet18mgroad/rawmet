
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_cust_final_req_renego extends CI_Controller {

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
		
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('buyerid'=>$sess['sessi']);
		
		
		
		
		$adac['sqldata3'] = $this->Admin_model->getsellerrenego_data3();	
		
		
			
		
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/cust_final_req_renego',$adac);
		$this->load->view('customer/footer');
		$this->load->helper('url');
		
		
		
		}

			
	}
	
	
	function finalapproveProduct(){
		$this->load->model('Admin_model');
		$id = $this->uri->segment(3);
		$id = $this->input->post('seller_mbuyreq_id');	
		//$id = $this->input->post('seller_mbuyreq_id');			
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		$data = array('buyer_approval'=>1);
		$data2 = array('status'=>5);
		$data3 = array('status'=>5);
		
		$comp = array('id'=>$id);
		$comp2 = array('seller_mbuyreq_id'=>$id);
		$comp3 = array('seller_mbuyreq_id'=>$id);
		
		$this->Admin_model->update_custom('seller_req_response',$data,$comp2,$comp2,$comp2);
		$this->Admin_model->update_custom('seller_mbuyreq',$data2,$comp,$comp,$comp);
		$this->Admin_model->update_custom('buyer_req_response',$data3,$comp3,$comp3,$comp3);
		

		exit;
		
		 
	}
	
	function finalrejectProduct(){
		$this->load->model('Admin_model');
		$id = $this->uri->segment(3);
		$id = $this->input->post('seller_mbuyreq_id');	
		//$id = $this->input->post('seller_mbuyreq_id');			
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		$data = array('buyer_approval'=>2);
		$data2 = array('status'=>5);
		$data3 = array('status'=>5);
		
		$comp = array('id'=>$id);
		$comp2 = array('seller_mbuyreq_id'=>$id);
		$comp3 = array('seller_mbuyreq_id'=>$id);
		
		$this->Admin_model->update_custom('seller_req_response',$data,$comp2,$comp2,$comp2);
		$this->Admin_model->update_custom('seller_mbuyreq',$data2,$comp,$comp,$comp);
		$this->Admin_model->update_custom('buyer_req_response',$data3,$comp3,$comp3,$comp3);
		

		exit;
		
		 
	}
	
	
	
	
	

	
		
	}

		