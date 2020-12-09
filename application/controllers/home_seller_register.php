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
		$this->load->helper('url');
		$this->load->view('seller_register');
		$vname = $this->input->post('vname');
		$vcompanyname = $this->input->post('vcompanyname');
		$vcompanytype = $this->input->post('vcompanytype');
		$vcontactperson  = $this->input->post('vcontactperson');
		$vcontactnumber = $this->input->post('vcontactnumber');
		$vemail = $this->input->post('vemail');
		//$spassword = password_hash('default_auc123',PASSWORD_BCRYPT);
		$spassword = base64_encode('default_auc123');
		$scin  = $this->input->post('scin');
		$sgst  = $this->input->post('sgst');
		$span  = $this->input->post('span');
		$spcb  = $this->input->post('spcb');
		$semail  = $this->input->post('semail');
		$sphone  = $this->input->post('sphone');
		$saddress  = $this->input->post('saddress');
		$saddress2 = serialize($saddress);
		$saddresscount  = $this->input->post('saddresscount');
		$saddresscount = serialize($saddresscount);
		$spin  = $this->input->post('spin');
		$scity = $this->input->post('scity');
		$sstate  = $this->input->post('sstate');
		$scountry  = $this->input->post('scountry');
		$sbankername  = $this->input->post('sbankernam
		
		
	}
	
}