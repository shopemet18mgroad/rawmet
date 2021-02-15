<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_feedback extends CI_Controller {

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
	 function __construct()
	{
		parent::__construct();
		// Load session library
		$this->load->library('session');
		// Load the captcha helper
		$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('feedback');


if ($this->input->post('mobilenumber')) {
			$date =  Date('Y-m-d');
			$this->load->library('fileupload');
			$this->load->helper(array('url', 'form', 'file', 'html'));
			$this->load->model('Admin_model');
			$this->load->library('session');

			$mobilenumber = $this->input->post('mobilenumber');
			$fname = $this->input->post('fname');
			$emailid = $this->input->post('emailid');
			$pstates = $this->input->post('pstates');
			$pcities = $this->input->post('pcities');
			$commet = $this->input->post('commet');
			






			$data2 = array('mobilenumber' => $mobilenumber, 'fname' => $fname, 
			'emailid' => $emailid, 
			
			'pstates' => $pstates, 
			'pcities' => $pcities, 
			'commet' => $commet);
			
		

	$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('feedback', $data2);
		header('location: '.base_url().'home_feedback/index/'.$datainserr);
	}	
	}
}
