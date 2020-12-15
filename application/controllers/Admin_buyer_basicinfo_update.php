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
			  $data2= array('bname' => $bname,'bcompanyname' => $bcompanyname,'bcompanytype' => $bcompanytype, 'bcontactperson' => $bcontactperson, 'bcontactnumber' => $bcontactnumber, 'bemail' => $bemail, 'busername'=> $busername, 'bpassword' => $bpassword, 'brepeatpassword' => $brepeatpassword, 'baddress' => $baddress,'bcity' => $bcity, 'bselectstate' => $bselectstate, 'bpincode' => $bpincode);
			  
			  
			  $datainserr = "Data updated Successfully";
			  $updatech = array('bname' => $bname,'bcompanyname' => $bcompanyname);
			  //print_r($updatech);die;
			 
			  $status = $this->Admin_model->update_custom('buyer_register',$data2,$updatech,$updatech);
			  	 
			  
		header('location: '.base_url().'admin_managebuyer/index/'.$datainserr);
	die;
}
}

	
