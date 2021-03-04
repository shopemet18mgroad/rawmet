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
		$buyerid = $this->input->post('buyerid');
		$bname = $this->input->post('bname');
		$brefer = $this->input->post('brefer');
		$bcompanyname = $this->input->post('bcompanyname');
		$bcompanytype = $this->input->post('bcompanytype');
		$bcontactperson  = $this->input->post('bcontactperson');
		$bcontactnumber = $this->input->post('bcontactnumber');
		$bpan = $this->input->post('bpan');
		$bgst = $this->input->post('bgst');
		$bemail = $this->input->post('bemail');
		$busername = $this->input->post('busername');
		$bpassword = $this->input->post('bpassword');
		$brepeatpassword = $this->input->post('brepeatpassword');
		$baddress  = $this->input->post('baddress');
		$bcity  = $this->input->post('bcity');
		$bselectstate  = $this->input->post('bselectstate');
		$bpincode  = $this->input->post('bpincode');
	
			$this->load->model('Admin_model');
			 $data2 = array('brefer'=>$brefer,'bcompanyname' => $bcompanyname,'bcompanytype' => $bcompanytype,'bcontactperson' => $bcontactperson,'bpan'=>$bpan,'bgst'=>$bgst,
	'bcontactnumber'=>$bcontactnumber ,
	'bemail'=> $bemail ,'busername' => $busername,
	'bpassword'=> $vpassword,'brepeatpassword' => $brepeatpassword,'bname'=>$bname,
	'baddress' => $baddress, 'bcity'=>$bcity,'bselectstate' => $bselectstate, 'bpincode' => $bpincode);

			  
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('buyerid' => $buyerid);
			 
			  $status = $this->Admin_model->update_custom('buyer_register',$data2,$updatech,$updatech);
		//$status = $this->Admin_model->insert('vendor_register',$data2);
		//header('location: '.base_url().'admin_editsellerprofile/index/'.$datainserr);
		header('location: '.base_url().'admin_managebuyer/index/'.$datainserr);
	}
}


	
