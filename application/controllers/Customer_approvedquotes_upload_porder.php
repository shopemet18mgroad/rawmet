<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_approvedquotes_upload_porder extends CI_Controller {

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
		if($this->input->post('submit'))
		{
		$this->load->helper(array('url','html'));
		$this->load->model('Admin_model');
		$this->load->library('session');
		
		$porder = $this->input->post('porder');
		$kaa=0;
		foreach($_FILES['uploadporder']['name'] as $b){
			if($b != ""){
				$kab = $kaa;
			}
			$kaa++;
		}
		
		$datexp = explode('|',$porder[$kab]);
		$vname =  urlencode($datexp[0]);
		$productid = str_ireplace('-','/',$datexp[1]);
		$category = $datexp[2];
		
			 if(!$_FILES['uploadporder']['name'][$kab]){
				$datainserr = "Atleast One Signed Document Has To Uploaded";
				header('location: '.base_url().'customer_approvedquotes/index/'.$productid.'/'.$datainserr);
				die;
			}else{
				$doc_array = self::upload_files('uploadporder');
			}  
			if(!count($doc_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			}else{
				$doc_array = serialize($doc_array);
			}
			
			
				
			$data4 = array ('uploadporder' => $doc_array);
			$datainserr = "Data Inserted Successfully";
			$vname = urldecode($vname);
	
			$updatech = array('vname'=>$vname,'productid'=>$productid,'category' => $category);
			$status = $this->Admin_model->update_custom('quotes',$data4,$updatech,$updatech); 
			if($status){
				
			} 
			 header('location: '.base_url().'customer_approvedquotes/index/'.$datainserr);
		}
		
		
		}
		/* 
			public function purcorder(){
		$this->load->helper('url');
			
		$retrivevaltmp =($this->uri->segment(3));
		
		$retrivevaltmp = urldecode($retrivevaltmp);
	//print_r($retrivevaltmp); die;
		$retrivevaltmp2 = urldecode(str_ireplace('-','/',$this->uri->segment(4)));
			
		$retrivevaltmp3 = urldecode($this->uri->segment(5));
		
		$data2 = array('sellapproval'=>3);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('vname'=>$retrivevaltmp,'productid'=>$retrivevaltmp2,'category'=>$retrivevaltmp3);
		$this->load->model('Admin_model');
		
		
		$status2 = $this->Admin_model->update_custom('quotes',$data2,$updatech,$updatech);
	
		if($status2){
				
			} 
			 header('location: '.base_url().'customer_approvedquotes/index/'.$datainserr);
				
	
}
	 */	
}
