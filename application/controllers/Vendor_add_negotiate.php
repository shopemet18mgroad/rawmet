<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_add_negotiate extends CI_Controller {

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
	function __construct() {
    parent::__construct();
			// Load session library
			$this->load->library('session');
			// Load the captcha helper
			$this->load->helper('captcha');
			$this->load->helper('url');
			$this->load->helper('date');
			date_default_timezone_set("Asia/Kolkata");
    }
    
	public function index()
	{
		$this->load->model('Admin_model');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('sellerid'=>$sess['sessi']);
				//print_r($active1); die;
				$data2 = $this->Admin_model->getusernamedatafromtable('vendor_register', $active1);
				//print_r($data2); die;
				$sllerid= $data2[0]->sellerid;
				//	print_r($vusername); die;
	         if($this->input->post('buyerid')){
			 $date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$this->load->library('session');
			
            $id = $this->input->post('id');
			$sellerid = $this->input->post('sellerid');
			$buyerid = $this->input->post('buyerid');
			
			
			
			$selprice= $this->input->post('selprice');
			$sunits = $this->input->post('sunits');

		   
			$productvalidityto = $this->input->post('productvalidityto');
		    $datetime= $this->input->post('datetime');			 
		    $estdeltime = $this->input->post('estdeltime');
			$uploadproductimage  = serialize($this->input->post('uploadproductimage')); 
			
			
			
			//$data1 = array('busername'=>$busername);
			
			$data2 = array('sellerpostproduct_id'=>$id,,'sellerid'=>$sellerid,'buyerid'=>$buyerid);
			
			/* 	$this->load->model('Admin_model');
			  if($this->Admin_model->check('selquotenegotate', $data1)){
				 $datainserr = "ProductId already exist";
				header('location: '.base_url().'vendor_custquoteapproval/index_error/'.$datainserr);
				die;
			  }else{ */
				 
			  
		$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('selquotenegotate',$data2);
			header('location: '.base_url().'vendor_sellernegotiatedquote/index/'.$id);
			//}
		


		
			  
			
	
	 }
			
			
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

