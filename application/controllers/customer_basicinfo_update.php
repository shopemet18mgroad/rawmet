<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_basicinfo_update extends CI_Controller {

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
		if($this->input->post('submit'))
		{
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->model('Admin_model');
		//$busername = $this->uri->segment(3);
        $bname=$this->input->post('bname');
		$bcompanyname=$this->input->post('bcompanyname');
		$bcompanytype=$this->input->post('bcompanytype');
		$bcontactperson=$this->input->post('bcontactperson');
		$bcontactnumber=$this->input->post('bcontactnumber');
		$bemail=$this->input->post('bemail');
		$bpan=$this->input->post('bpan');
		$bgst=$this->input->post('bgst');
		$busername =$this->input->post('busername');
		$baddress=$this->input->post('baddress');
		$bcity=$this->input->post('bcity');
		$bselectstate=$this->input->post('bselectstate');
		$bpincode=$this->input->post('bpincode');		
	
		
	//=================================================================================================
		//==================================================================
		$this->load->model('Admin_model');
		$data2 = array('bname' => $bname,'bcompanyname' => $bcompanyname, 'bcompanytype' => $bcompanytype, 'bcontactperson' => $bcontactperson, 'bcontactnumber' => $bcontactnumber,'bemail' => $bemail,'bpan'=>$bpan,'bgst'=>$bgst,'busername'=>$busername ,'baddress' => $baddress,'bcity' => $bcity, 'bselectstate' => $bselectstate, 'bpincode' => $bpincode);
		//$this->load->view('xya', $data);
		
		$datainserr = "Data Inserted Successfully";
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$hidden = array('busername'=>$sess['sessi']);
		
		//$updatech = array('baddress' => $baddress);
		$status = $this->Admin_model->update_custom('buyer_register',$data2,$hidden,$hidden);
		
		header('location: '.base_url().'customer_customerprofile/index_error/'.$datainserr);
		}
	}


	
}
