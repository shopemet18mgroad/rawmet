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
		

          $vname = $this->input->post('vname');
		  $vrefer = $this->input->post('vrefer');
			$vcompanyname = $this->input->post('vcompanyname');
			$vcompanytype = $this->input->post('vcompanytype');
			$dealer_type = $this->input->post('dealer_type');
			
			$vcontactperson = $this->input->post('vcontactperson');
			$vcontactnumber = $this->input->post('vcontactnumber');
			$vemail = $this->input->post('vemail');
			$vusername = $this->input->post('vusername');
			$vpassword =  base64_encode($this->input->post('vpassword'));
		     $vrepeatpassword = base64_encode($this->input->post('vrepeatpassword'));
			$vpan = $this->input->post('vpan');
			$sellerid = $this->input->post('sellerid');
			$vgst = $this->input->post('vgst');
			$vpcb = $this->input->post('vpcb');
			$vaddress = $this->input->post('vaddress');
			 $vcity = $this->input->post('vcity');
			$vselectstate = $this->input->post('vselectstate');
			$vpincode = $this->input->post('vpincode');
			

		
	 $this->load->model('Admin_model');
			  $data2 = array('vname' => $vname,'vrefer'=>$vrefer,'vcompanyname' => $vcompanyname, 'vcompanytype' => $vcompanytype, 'vcontactperson' => $vcontactperson, 'vcontactnumber' => $vcontactnumber, 'vemail' => $vemail,'vusername'=> $vusername, 'vpassword' => $vpassword, 'vrepeatpassword' => $vrepeatpassword,'vpan'=>$vpan,'vgst'=>$vgst,'vpcb'=>$vpcb ,'vaddress' => $vaddress,'vcity' => $vcity, 'vselectstate' => $vselectstate, 'vpincode' => $vpincode,'dealer_type'=>$dealer_type,'sellerid'=>$sellerid);
			 
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('vendor_register', $data2);
		header('location: '.base_url().'admin_sellerreg/index/'.$datainserr);
	
		
	}

	
}
