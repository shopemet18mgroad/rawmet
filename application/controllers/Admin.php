<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
	{
		public function __construct()
	  
	public function getUserData(){
		$strUID1   = $this->input->post('productid');	 
		$userData = $this->Admin_model->getUserData($strUID1 );
		getCompressedData($userData);exit;
	}

	 
}

