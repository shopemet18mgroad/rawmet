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
			$pic_array1 = self::upload_files('uploadimage');
			
			if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			}else{
			$pic_array1 = serialize($pic_array1);
		   }
			
			
			 //print_r($uploadproductimage);die;
			$data = array('bname' => $bname,'bcompanyname'=>$bcompanyname,'busername'=>$busername,'category'=> $category,'productname'=>$productname,'productid'=>$productid,'description' => $description,'quantity'=>$quantity,'units'=>$units,'price'=>$price,'priceperkg'=>$priceperkg,'sellerprice'=>$sellerprice,'bsupplyability'=>$bsupplyability,'uploadimage'=>$pic_array1);
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
			
		private function upload_files($nameid)
    {	
	$countfiles = count($_FILES[$nameid]['name']);
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
	}
