<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_postbuyreq  extends CI_Controller {

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
			$this->load->library('fileupload');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('file');
			$this->load->helper('html');
			$this->load->helper('date');
			date_default_timezone_set("Asia/Kolkata");
    }
	public function index()
	{
		 if($this->input->post('quantity')){
			 $date =  Date('Y-m-d'); 
			
			$this->load->model('Admin_model');
			$this->load->library('session');
			
			$bname = $this->input->post('bname');
			$buyerid = $this->input->post('buyerid');
			$bcompanyname = $this->input->post('bcompanyname');
			$category = $this->input->post('category');
			$productname = $this->input->post('productname');
			$productid = $this->input->post('productid');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$priceperkg = $this->input->post('priceperkg');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$requireddate = $this->input->post('requireddate');
			$lastdate = $this->input->post('lastdate');
			$email = $this->input->post('email');
			$contactnumber = $this->input->post('contactnumber');
			$iagreee = $this->input->post('iagreee');
			
			$_FILES['uploadimage']['name'];
			$pic_array = self::upload_files('uploadimage');
			$_FILES['uploadpdf']['name'];
			$doc_array = self::upload_files('uploadpdf');
			
			
			if(!count($pic_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array = serialize($pic_array);
		}
		if(!count($doc_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$doc_array = serialize($doc_array);
		}
		
			 $this->load->model('Admin_model');
			$data2 = array('bname'=>$bname,'buyerid'=>$buyerid,'bcompanyname'=>$bcompanyname,'category'=>$category,'productname'=> $productname,'productid'=>$productid,'description'=>$description,'price'=> $price, 'priceperkg'=> $priceperkg,'quantity'=> $quantity,'units'=>$units,'requireddate' => $requireddate,'lastdate'=>$lastdate,'email'=>$email,'contactnumber'=>$contactnumber,'uploadimage'=>$pic_array,'uploadpdf'=>$doc_array,'iagreee'=>$iagreee);

			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('buyerrequriement',$data2);
			header('location: ./customer_postbuyreq/index/');
		 }
			
			
				if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
				$datainserr = "Invalid Login Session";
				header('location: '.base_url().'login/index_error/'.$datainserr);
				die;
			}
			else
			{ 
				$this->load->model('Admin_model');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('buyerid'=>$sess['sessi']);
				//print_r($active1);die;
				$data['scomp'] = $this->Admin_model->getbuyerdatafromtable('buyer_register', $active1);
				
			
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/postbuyreq',$data);
		$this->load->view('customer/footer');
		
	}
	}


private function upload_files($nameid){
    	//print_r($nameid);
    //$countfiles = count($_FILES[$nameid]['name']);
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
