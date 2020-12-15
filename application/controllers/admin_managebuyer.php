<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_managebuyer extends CI_Controller {

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
		$this->load->model('Admin_model');
		$boptions = array('boptions'=>true);
		
		$query = $this->Admin_model->getdatafromtable('buyer_register',$boptions);
		
		$adac['data']= $query;
		/* echo '<pre>';
		print_r($adac['activestat']); die;
			echo '</pre>'; */
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/managebuyer',$adac);
		$this->load->view('admin/footer');
		$this->load->helper('url');
	
	}
	
}