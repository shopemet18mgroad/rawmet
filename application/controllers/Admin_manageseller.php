<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_manageseller extends CI_Controller {

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
		$voptions = array('voptions'=>true);
		
		$query = $this->Admin_model->getdatafromtable('vendor_register',$voptions);
		
		$adac['data']= $query;
		$query = $this->Admin_model->gettable('spoc');
		
		$adac['data1']= $query;
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
			}
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/manageseller',$adac);
	    $this->load->view('admin/footer');
	
	}
		public function reject(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
         $sellerid = urldecode($this->uri->segment(3));
	

		$retriveval = array('sellerid'=>$sellerid);
		
		$data2 = array('voptions'=>False);

		
		
		$status = $this->Admin_model->update_custom('vendor_register',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_manageseller/index/'.urlencode($retriveval));
		
		die;
	}
		public function export_csvenquiry(){ 
		// file name 
		$vrefer = $this->uri->segment(3);
		//print_r($vrefer);die;
		$this->load->model('Admin_model');
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	   $usersData = $this->Admin_model->getenquirydataDetails($vrefer);
	   $usersData1 = $this->Admin_model->getenquirydataDetails1();
		 
		if($vrefer){
		$file = fopen('php://output','w');
		
		$header = array("VENDOR NAME","SELLER ID","DEALER TYPE","COMPANY NAME","COMPANY TYPE","CONTACT PERSON","CONTACT NUMBER","EMAIL","PAN","GST","ADDRESS","CITY","STATE","PIN CODE","REFERENCE"); 
		   fputcsv($file,$header);
		   foreach ($usersData as $line){ 
			fputcsv($file,array($line->vname,$line->sellerid,$line->dealer_type,$line->vcompanyname,$line->vcompanytype,$line->vcontactperson,$line->vcontactnumber,$line->vemail,$line->vpan,$line->vgst,$line->vaddress,$line->vcity,$line->vselectstate,$line->vpincode,$line->vrefer)); 
		}
		
		fclose($file); 
		exit ;
}	
else {
		$file = fopen('php://output','w');
       $header = array("VENDOR NAME","SELLER ID","DEALER TYPE","COMPANY NAME","COMPANY TYPE","CONTACT PERSON","CONTACT NUMBER","EMAIL","PAN","GST","ADDRESS","CITY","STATE","PIN CODE","REFERENCE"); 
		   fputcsv($file,$header);
		   foreach ($usersData1 as $line){ 
			fputcsv($file,array($line->vname,$line->sellerid,$line->dealer_type,$line->vcompanyname,$line->vcompanytype,$line->vcontactperson,$line->vcontactnumber,$line->vemail,$line->vpan,$line->vgst,$line->vaddress,$line->vcity,$line->vselectstate,$line->vpincode,$line->vrefer)); 
		}
		
		fclose($file); 
		exit ;
}

}
		
		public function verify(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
         $sellerid = urldecode($this->uri->segment(3));
	

		$retriveval = array('sellerid'=>$sellerid);
		
		$data2 = array('vverify'=>true);

		
		
		$status = $this->Admin_model->update_custom('vendor_register',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_manageseller/index/'.urlencode($retriveval));
		
		die;
	}
		public function unverify(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
         $sellerid = urldecode($this->uri->segment(3));
	

		$retriveval = array('sellerid'=>$sellerid);
		
		$data2 = array('vverify'=>false);

		
		
		$status = $this->Admin_model->update_custom('vendor_register',$data2,$retriveval,$retriveval);
		
		header('location: '.base_url().'Admin_manageseller/index/'.urlencode($retriveval));
		
		die;
	}
	
	
	
}
	
