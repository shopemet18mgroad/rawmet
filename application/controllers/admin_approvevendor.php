<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_approvevendor extends CI_Controller {

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
		$this->load->model('Admin_model');
		$voptions = array('voptions'=>false);
		
		$query = $this->Admin_model->getdatafromtable('vendor_register',$voptions);
		
		$adac['data']= $query;
		/* echo '<pre>';
		print_r($adac['activestat']); die;
			echo '</pre>'; */
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/approvevendor',$adac);
		$this->load->view('admin/footer');
	
	}
	
	public function approve_seller(){
		$vusername= $this->uri->segment(3);
		$vusernmame = urldecode($vusername);
		$this->load->model('Admin_model');
		$app= array('voptions'=>true);
		$adaction2 = array('vusername'=>$vusername);
		$query = $this->Admin_model->update_custom('vendor_register', $app, $adaction2, $adaction2);
		if($vusername){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}

}
		


	
