<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_seller_basicinfo_update extends CI_Controller {

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
		$vname = $this->input->post('vname');
		$vcompanyname = $this->input->post('vcompanyname');
		$vcompanytype = $this->input->post('vcompanytype');
		$vcontactperson  = $this->input->post('vcontactperson');
		$vcontactnumber = $this->input->post('vcontactnumber');
		$vemail = $this->input->post('vemail');
		$vusername = $this->input->post('vusername');
		$vpassword = $this->input->post('vpassword');
		$vrepeatpassword = $this->input->post('vrepeatpassword');
		$vaddress  = $this->input->post('vaddress');
		$vcity  = $this->input->post('vcity');
		$vselectstate  = $this->input->post('vselectstate');
		$vpincode  = $this->input->post('vpincode');
	
			$this->load->model('Admin_model');
			 $data2 = array('vcompanyname' => $vcompanyname,'vcompanytype' => $vcompanytype,'vcontactperson' => $vcontactperson, 
	'vcontactperson'=>$vcontactperson ,
	'vemail'=> $vemail ,'vusername' => $vusername,
	'vpassword'=> $vpassword,'vrepeatpassword' => $vrepeatpassword,
	'vaddress' => $vaddress, 'vcity'=>$vcity,'vselectstate' => $vselectstate, 'vpincode' => $vpincode);

			  
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('vname' => $vname);
			 
			  $status = $this->Admin_model->update_custom('vendor_register',$data2,$updatech,$updatech);
		//$status = $this->Admin_model->insert('vendor_register',$data2);
		//header('location: '.base_url().'admin_editsellerprofile/index/'.$datainserr);
		header('location: '.base_url().'home/'.$datainserr);
	}
}