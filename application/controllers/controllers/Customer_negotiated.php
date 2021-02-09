
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_negotiated extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('bname'=>$sess['sessi'],'bapprove'=>false);
		
		//$query2 = $this->Admin_model->getdatafromtable('vendor_register',$active1);
		
		//$vendorname = $query2[0]->vname;
		//$poptions = array('vname'=>$vendorname);
		
		
		$query = $this->Admin_model->getdatafromtable('seller_mbuyreq',$active1);
		
		
		$adac['sqldata']= $query;
		
			//$active = array('vusername'=>$sess['sessi']);
		//$adac['sess']=array('sessi'=>$this->session->userdata('username'));
		
		
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/negotiated',$adac);
		$this->load->view('customer/footer');
		$this->load->helper('url');
		
		
		
		}

			
	}
	public function delete_seller(){
	
		
		$productname = urlencode($this->uri->segment(3));
		//$productid = str_ireplace('-','/',$productid);
		
		$active = array('productname'=>$productname);
		
		$this->load->model('Admin_model');
		$this->Admin_model->delete_data('seller_mbuyreq', $active);
		
		$this->load->helper('url');
		$this->load->library('session');
		
		header('location: '.base_url().'vendor_uploadedproduct/index/');
	
}

public function approve_requ(){
		
		
		$compnameurl = $this->uri->segment(3);
		
		
		$compnameurl = urldecode($compnameurl);
		$compnameurl2 = explode('|',$compnameurl);
		//$compnameurl3 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		//$com = urldecode($compnameurl3[2]);
		$this->load->model('Admin_model');
		
		
		//$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$comp,'vusername'=>$compname);
		
		
		$this->load->model('Admin_model');
		$app= array('bapprove'=>true);
		$query = $this->Admin_model->update_custom('seller_mbuyreq', $app, $retriveval, $retriveval);
		if($retriveval){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}
	
	
	public function reject(){
		$this->load->helper('url');
		
		$compnameurl = $this->uri->segment(3);
		
		
		$compnameurl = urldecode($compnameurl);
		$compnameurl2 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		
		
		$retrivevaltmp = str_ireplace('-','/',$this->uri->segment(3));
		
		$data2 = array('bapprove'=>2);
		$updatech = array('productid'=>$comp,'vusername'=>$compname);
		$this->load->model('Admin_model');
		
		$status = $this->Admin_model->update_custom('seller_mbuyreq',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'Customer_negotiated/index/'.urlencode($retrivevaltmp3));
		
		die;
	}
	
	}

		