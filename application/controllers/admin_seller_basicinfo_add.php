<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_seller_basicinfo_add extends CI_Controller {

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
	 * map to /index.php/welcome/<method_namev
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
           echo $vname = $this->input->post('vname');
			echo $vcompanyname = $this->input->post('vcompanyname');
			 echo $vcompanytype = $this->input->post('vcompanytype');
			echo $vcontactperson = $this->input->post('vcontactperson');
			echo $vcontactnumber = $this->input->post('vcontactnumber');
			echo $vemail = $this->input->post('vemail');
			echo $vusername = $this->input->post('vusername');
			echo $vpassword = $this->input->post('vpassword');
			echo $vrepeatpassword = $this->input->post('vrepeatpassword');
			//echo $spcb = $this->input->post('spcb');
			echo $vaddress = $this->input->post('vaddress');
			echo $vcity = $this->input->post('vcity');
			echo $vselectstate = $this->input->post('vselectstate');
			echo $vpincode = $this->input->post('vpincode');
			die;
			
		
		/* $pic_array1 = self::upload_files('buploadimagepic');
		$doc_array1 = self::upload_files('bsigneddocument');
		
			if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		if(!count($doc_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$doc_array1 = serialize($doc_array1);
		} */
	
						/* 
		$path = base_url()."web_files/upload/";
		$title = "uploaded";
		
		self::upload_files($path, $title, $buploadprofilepic);
		$bsigneddocument  = $this->input->post('bsigneddocument');
		self::upload_files($path, $title, $bsigneddocument); */
		//$count = count($bsigneddocument);
		
	 $this->load->model('Admin_model');
			  $data2 = array('vname' => $vname, 'vcompanyname' => $vcompanyname, 'vcompanytype' => $vcompanytype, 'vcontactperson' => $vcontactperson, 'vcontactnumber' => $vcontactnumber, 'vemail' => $vemail, 'vusername'=> $vusername, 'vpassword' => $vpassword, 'vrepeatpassword' => $vrepeatpassword, 'vaddress' => $vaddress,'vcity' => $vcity, 'vselectstate' => $vselectstate, 'vpincode' => $vpincode);
			 
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('vendor_register', $data2);
		header('location: '.base_url().'admin_sellerreg/index/'.$datainserr);
		
		
		//$this->load->view('admin/header');
		//$this->load->view('admin/salesreport');
		//$this->load->view('admin/footer');
		
	}
/* 	private function upload_files($nameid)
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
    } */
	
}
