<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_managebuyreq extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.php
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('customer/header');
		$this->load->view('customer/managebuyreq');
		$this->load->view('customer/footer');
		
	}
	
}
 <a href="<?php echo base_url();?>admin_bidhistory">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a>
<link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">
<?php 
include('./header.php')?>