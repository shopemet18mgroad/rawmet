<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyer_basicinfo_update extends CI_Controller {

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
		//$this->load->library('fileupload');
		$bname = $this->input->post('bname');
	    $bcompanyname = $this->input->post('bcompanyname');
	    $bcompanytype = $this->input->post('bcompanytype');
	   $bcontactperson = $this->input->post('bcontactperson');
	   $bcontactnumber = $this->input->post('bcontactnumber');
			$bemail = $this->input->post('bemail');
			$busername = $this->input->post('busername');
			$bpassword = $this->input->post('bpassword');
			$brepeatpassword = $this->input->post('brepeatpassword');
			//echo $spcb = $this->input->post('spcb');
			$baddress = $this->input->post('baddress');
			$bcity = $this->input->post('bcity');
			$bselectstate = $this->input->post('bselectstate');
			$bpincode = $this->input->post('bpincode');
	
			$this->load->model('Admin_model');
			  $data2= array('bcompanytype' => $bcompanytype, 'bcontactperson' => $bcontactperson, 'bcontactnumber' => $bcontactnumber, 'bemail' => $bemail, 'busername'=> $busername, 'bpassword' => $bpassword, 'brepeatpassword' => $brepeatpassword, 'baddress' => $baddress,'bcity' => $bcity, 'bselectstate' => $bselectstate, 'bpincode' => $bpincode);
			  
			  
			  $datainserr = "Data updated Successfully";
			  $updatech = array('bname' => $bname,'bcompanyname' => $bcompanyname);
			 
			  $status = $this->Admin_model->update_custom('buyer_register',$data2,$updatech,$updatech);
			  	 
			  
		//$status = $this->Admin_model->insert('buyer_register',$data);
		//header('location: '.base_url().'admin_editcustprofile/index/'.$datainserr);
		header('location: '.base_url().'home/'.$datainserr);
	
}
}


		
		/* $dataact = array(); 
		$datacomp = array();
		$dataact = $this->input->post('bsigneddocumentex');
		$datacomp = $this->input->post('bsigneddocumentexcom');
		if($dataact && $datacomp){
			$result = array_diff($dataact,$datacomp);
			$result2 = array_intersect($dataact,$datacomp);
		if(count($result)){
			foreach($result as $res){
			unlink(base_url()."web_files/uploads/".$res);
			}
		}
		
		if(!count($result2) && !$_FILES['bsigneddocument']['name'][0]){
			$datainserr = "Atleast One Signed Document Has To Uploaded";
			header('location: '.base_url().'admin_editbuyer/edit_buyer_alert/'.$bcompany.'/'.$datainserr);
			die;
		}*/
		
		
		
		
		 /* if($_FILES['buploadimagepic']['tmp_name'][0]){ 
			unlink(base_url()."web_files/uploads/".$profileimage2[0]);
			$pic_array = self::upload_files('buploadimagepic');
		}
		if($_FILES['bsigneddocument']['tmp_name'][0]){
			$doc_array = self::upload_files('bsigneddocument');
		}
	
		
		if(!count($pic_array)){
			echo '<script language="javascript">';
			echo 'alert("Image Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$pic_array = $profileimage3;
		}else{
			$pic_array = serialize($pic_array);
		}
		if(!count($doc_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$doc_array = serialize($result2);
		}else{
			if($result2){
				$doc_array = array_merge($doc_array,$result2);
				$doc_array = serialize($doc_array);
			}else{
				$doc_array = serialize($doc_array);
			}
			
		}*/
		
		
		
		//=================================================================================================
		
		
		
		//==================================================================
		/* $this->load->model('Admin_model');
			  $data = array('bname' => $bname, 'bcompanyname' => $bcompanyname, 'bcompanytype' => $bcompanytype, 'bcontactperson' => $bcontactperson, 'bcontactnumber' => $bcontactnumber, 'bemail' => $bemail, 'busername'=> $busername, 'bpassword' => $bpassword, 'brepeatpassword' => $brepeatpassword, 'baddress' => $baddress,'bcity' => $bcity, 'bselectstate' => $bselectstate, 'bpincode' => $bpincode);
			  $datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('buyer_register',$data);
		header('location: '.base_url().'home/'.$datainserr); */
		
		//$this->load->view('xya', $data);
		/* $datainserr = "Data Inserted Successfully"; */
		//$updatech = array('bcompanyname' => $bcompanyname);
		/* $status = $this->Admin_model->update_custom('buyer_register',$data,); */
		// $status = $this->Admin_model->insert('sellerp', $data2);
	/* 	header('location: '.base_url().'Admin_editcustprofile/index/'.$datainserr);
	die; */
		//$this->load->view('admin/header');
		//$this->load->view('admin/salesreport');
		//$this->load->view('admin/footer');
		
		
	
	

	/*private function upload_files($nameid)
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
}*/
	
