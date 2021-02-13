<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_seller_register extends CI_Controller {

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
		 if($this->input->post('submit')){
		   $this->load->helper('url');
		
	
		
		$vname = $this->input->post('vname');
		$vcompanyname = $this->input->post('vcompanyname');
		$vcompanytype = $this->input->post('vcompanytype');
		$vcontactperson  = $this->input->post('vcontactperson');
		$vcontactnumber = $this->input->post('vcontactnumber');
		$vemail = $this->input->post('vemail');
		$vusername = $this->input->post('vusername');
		$vpassword =  base64_encode($this->input->post('vpassword'));
		$vrepeatpassword = base64_encode($this->input->post('vrepeatpassword'));
		$vpan= $this->input->post('vpan');
		$vgst = $this->input->post('vgst');
		$vpcb= $this->input->post('vpcb');
		$vaddress  = $this->input->post('vaddress');
		$vcity  = $this->input->post('vcity');
		$vselectstate  = $this->input->post('vselectstate');
		$vpincode  = $this->input->post('vpincode');
		$sellerid = $this->input->post('sellerid');
		$dealer_type = $this->input->post('dealer_type');
		$this->load->model('Admin_model');
		
		$data = array('vname' => $vname,'vcompanyname' => $vcompanyname, 
	'vcompanytype' => $vcompanytype,'vcontactperson' => $vcontactperson, 
	'vcontactnumber'=>$vcontactnumber ,
	'vemail'=> $vemail ,'vusername' => $vusername,
	'vpassword'=> $vpassword,'vrepeatpassword' => $vrepeatpassword,'vpan'=>$vpan,'vgst'=>$vgst,'vpcb'=>$vpcb,
	'vaddress' => $vaddress, 'vcity'=>$vcity,'vselectstate' => $vselectstate, 'vpincode' => $vpincode,'sellerid'=>$sellerid,'dealer_type'=>$dealer_type);
	$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('vendor_register',$data);
		header('location:'.base_url().'home/index/');
		
		
		 }
        $this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
       
		
	  
    
		
		$this->load->view('header',$sess);
		$this->load->view('seller_register');
	}
	 public function validate_username(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('vusername' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('vendor_register', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
	
	public function validate_vgst(){
		$dat = urldecode($this->uri->segment(3));
		
		$check_db = array('vgst' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('vendor_register', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
}