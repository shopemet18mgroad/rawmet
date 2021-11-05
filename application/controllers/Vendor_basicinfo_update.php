<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_basicinfo_update extends CI_Controller {

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
		//$this->load->model('Admin_model');
		//$busername = $this->uri->segment(3);	
	     $sellerid=$this->input->post('sellerid');
		$vname=$this->input->post('vname');
		$vcompanyname=$this->input->post('vcompanyname');
		$vcompanytype=$this->input->post('vcompanytype');
		$vcontactperson=$this->input->post('vcontactperson');
		$vcontactnumber=$this->input->post('vcontactnumber');
		$vpan=$this->input->post('vpan');
		$vgst=$this->input->post('vgst');
			$dealer_type = $this->input->post('dealer_type');
		$vpcb=$this->input->post('vpcb');
		$vemail=$this->input->post('vemail');
		$vaddress=$this->input->post('vaddress');
		$vcity=$this->input->post('vcity');
		$vselectstate=$this->input->post('vselectstate');
		$vpincode=$this->input->post('vpincode');
		$vproddescrip=$this->input->post('vproddescrip');
		
		
	//=================================================================================================
		//==================================================================
		$this->load->model('Admin_model');
		$data2 = array( 'sellerid'=>$sellerid,'vname' => $vname,'vcompanyname' => $vcompanyname, 'vcompanytype' => $vcompanytype,'vcontactperson' => $vcontactperson, 'vcontactnumber' =>$vcontactnumber,'vpan'=>$vpan,'vgst'=>$vgst,'vpcb'=>$vpcb,'vaddress' => $vaddress,'vcity' => $vcity, 'vselectstate'=>$vselectstate,'vpincode' => $vpincode,'dealer_type'=>$dealer_type,'vproddescrip'=>$vproddescrip);
		//print_r($data2);die;
		//$this->load->view('xya', $data);
		
		$datainserr = "Data Updated Successfully";
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		//print_r($sess);die;
		
		 $hidden = array('sellerid'=>$sess['sessi']);
		//print_r($hidden);die;
		
		//$updatech = array('baddress' => $baddress);
		$status = $this->Admin_model->update_custom('vendor_register',$data2,$hidden,$hidden);
	
		
		header('location: '.base_url().'Vendor_editvendorprofile/index_error/'.$datainserr);
		}
	}


	
}
