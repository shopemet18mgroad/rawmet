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
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		
	
	
		$this->load->model('Admin_model');
		$id = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$buyerid = $this->uri->segment(4);
		
		$active = array('id'=>$id);
		
		
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct', $active);
		$data['sqldata']= $query;
		
		
		$data['sqldata2'] = $this->Admin_model->getdatafromtable_buyerneg($id,$buyerid);
		
		$data['approve_buyer'] = $this->Admin_model->getdatafromtable_approve_buyer($id,$buyerid);
		$data['sqldata30'] = $this->Admin_model->getdatafromtable_selneg($id,$buyerid);		
		$data['sqldata3'] = $this->Admin_model->getdatafromtable_seller3595($id,$buyerid);		
		$data['sqldata4'] = $this->Admin_model->getdatafromtable_third_neg($id,$buyerid);
		$data['sqldata5'] = $this->Admin_model->getdatafromtable_fifth_neg($id,$buyerid);
		$data['final_quote'] = $this->Admin_model->getdatafromtable_final_quote($id,$buyerid);


		$data['selquotenegotate'] = $this->Admin_model->getseller_post_response($id, $sess['sessi']); 
		$data['vend_renego'] = $this->Admin_model->getseller_post_response2($id, $sess['sessi']);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/custquoteapproval',$data);
		$this->load->view('vendor/footer');
			}
		
	}
	
public function approve_quotes(){
			
		$this->load->model('Admin_model');
		//$sellerpostproduct_id =$this->uri->segment(3);
		$buyerid = $this->uri->segment(4);
		$sellerpostproduct_id = $this->uri->segment(3);
		$retriveval = array('buyerid'=>$buyerid,'sellerpostproduct_id'=>$sellerpostproduct_id);

		//
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>true);
		$query = $this->Admin_model->update_custom('quotes', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_custquoteapproval/index/'.$sellerpostproduct_id."/".$buyerid);
		
		die;
	
	}
	
	/* public function reject_quotes(){
			
		$this->load->model('Admin_model');
		//$sellerpostproduct_id =$this->uri->segment(3);
		$buyerid = $this->uri->segment(4);
		$sellerpostproduct_id = $this->uri->segment(3);
		$retriveval = array('buyerid'=>$buyerid,'sellerpostproduct_id'=>$sellerpostproduct_id);

		//
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>2);
		$query = $this->Admin_model->update_custom('quotes', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_custquoteapproval/index/'.$sellerpostproduct_id."/".$buyerid);
		
		die;
	
	}
	 */
	public function approve_renegoquotes(){
			
		$this->load->model('Admin_model');
		//$sellerpostproduct_id =$this->uri->segment(3);
		$buyerid = $this->uri->segment(4);
		$sellerpostproduct_id = $this->uri->segment(3);
		$retriveval = array('buyerid'=>$buyerid,'sellerpostproduct_id'=>$sellerpostproduct_id);

		//
		
		$this->load->model('Admin_model');
		$app= array('selapprove'=>true);
		$query = $this->Admin_model->update_custom('cust_renego', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_custquoteapproval/index/'.$sellerpostproduct_id."/".$buyerid);
		
		die;
	
	}

				
private function upload_files($nameid){
    	
	$countfiles=1;
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES[$nameid]['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES[$nameid]['name'][$i];
          $_FILES['file']['type'] = $_FILES[$nameid]['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES[$nameid]['error'][$i];
          $_FILES['file']['size'] = $_FILES[$nameid]['size'][$i];

          // Set preference
           $config['upload_path'] = 'web_files/uploads/';
			$config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif';
          $config['max_size'] = '50000000'; // max_size in kb
          $config['file_name'] = $_FILES[$nameid]['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
		$this->upload->initialize($config);
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            // Initialize array
            $datar[] = $filename;
          }
        }
 
      }
	 return $datar;
    }



}