
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_custapprovedreq extends CI_Controller {

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
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('status'=>true);
		
		$query = $this->Admin_model->getdatafromtable('seller_mbuyreq',$active1);
        $adac['sqldata']= $query;
		$query = $this->Admin_model->getdatafromtable_admin10();
		$adac['sqldata2']= $query;
		$adac['sqldata3'] = $this->Admin_model->getsellerrenego_admin_datafetch();
		$adac['sqldata4'] = $this->Admin_model->getdatafrombuyer_admin_req();
		
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/custapprovedreq',$adac);
		$this->load->view('admin/footer');
		$this->load->helper('url');
		
		
		
		}

			
	}

	
	}
