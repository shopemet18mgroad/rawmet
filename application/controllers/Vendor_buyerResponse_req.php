
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendor_buyerResponse_req extends CI_Controller {

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
		$active1 = array('sellerid'=>$sess['sessi']);	
		
		$query = $this->Admin_model->getdatafrombuyer_req_response();	
		$adac['sqldata']= $query;
		
		
		
			
		
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/buyer_response_req',$adac);
		$this->load->view('vendor/footer');
		$this->load->helper('url');
		
		
		
		}

			
	}
	

	 function approveProduct(){
		$this->load->model('Admin_model');
		$id = $this->uri->segment(3);
		$id = $this->input->post('seller_mbuyreq_id');		
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		$data2 = array('status'=>5);
		$data = array('status'=>1);
		$comp = array('id'=>$id);
		$comp2 = array('seller_mbuyreq_id'=>$id);
		$this->Admin_model->update_custom('buyer_req_response',$data,$comp2,$comp2);
		$this->Admin_model->update_custom('seller_mbuyreq',$data2,$comp,$comp);
		exit;
		
		 
	}
	
	 function rejectProduct(){
		$this->load->model('Admin_model');
		$id = $this->uri->segment(3);
		$id = $this->input->post('seller_mbuyreq_id');		
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		$data2 = array('status'=>5);
		$data = array('status'=>2);
		$comp = array('id'=>$id);
		$comp2 = array('seller_mbuyreq_id'=>$id);
		$this->Admin_model->update_custom('buyer_req_response',$data,$comp2,$comp2);
		$this->Admin_model->update_custom('seller_mbuyreq',$data2,$comp,$comp);
		exit;
		
		 
	}
	 
		function rejectProduct4(){
		$this->load->model('Admin_model');
		$id = $this->uri->segment(3);
		$id = $this->input->post('seller_mbuyreq_id');	
		//$id = $this->input->post('seller_mbuyreq_id');			
		//$active = array('seller_mbuyreq_id'=> $seller_mbuyreq_id1);
		//$this->db->where('buyer_req_response',$active);
		//$data['status'] = 1;
		$data = array('buyer_approval'=>5);
		$data2 = array('status'=>5);
		$data3 = array('status'=>5);
		$data4 = array('sel_status'=>2);
		
		$comp = array('id'=>$id);
		$comp2 = array('seller_mbuyreq_id'=>$id);
		$comp3 = array('seller_mbuyreq_id'=>$id);
		$comp4 = array('seller_mbuyreq_id'=>$id);
		
		$this->Admin_model->update_custom('seller_req_response',$data,$comp2,$comp2,$comp2,$comp2);
		$this->Admin_model->update_custom('seller_mbuyreq',$data2,$comp,$comp,$comp,$comp);
		$this->Admin_model->update_custom('buyer_req_response',$data3,$comp3,$comp3,$comp3,$comp3);
		
		$this->Admin_model->update_custom('buyer_final_req',$data4,$comp4,$comp4,$comp4,$comp4);
		

		exit;
	}
	 
	
		
	}

		
