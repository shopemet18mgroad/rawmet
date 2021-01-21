<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_contactsupplierredirect extends CI_Controller {

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
		$this->load->model('Admin_model');
		$productid = str_ireplace('-','/', $this->uri->segment(3));
		
		$retriveval = array('productid'=>$productid);
		$query = $this->Admin_model->insert('quotes', $retriveval);
		header('location: '.base_url().'home_contactsupplier/index/'.urldecode($productid)."/".urldecode($busername));
		
		$this->load->view('header');
		$this->load->view('contactsupplier');
		$this->load->view('footer');
		
	}
	
}