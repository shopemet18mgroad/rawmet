<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_email extends CI_Controller {

		function __construct() {
        parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	public function index()
	{
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_expiration = '3600';
		if($this->input->post('email')){
			if($this->input->post('optradio')=="Seller_activate"){
				$table = "vendor_register";
				$colname = "vemail";
			}
				$email = $this->input->post('email');
	
	$check_db = array($colname =>$email);
	
	$this->load->model('Admin_model');
	 if($this->Admin_model->check($table, $check_db)){
	if($table =="vendor_register"){
		$newdata = $this->Admin_model->getdatafromtable('vendor_register',$check_db);
		$id = $newdata[0]->sellerid;
		$vname= $newdata[0]->vname;
		$vpassword = base64_decode($newdata[0]->vpassword);
		
		
		
		
		
		
		//$bpassword = $newdata[0]->bpassword;		
	$to =  $this->input->post('email');  // User email pass here
    $subject = 'Welcome To Rawmet';

    $from = 'rawmet24@gmail.com';    // Pass here your mail id

    $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:0px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="padding-left:0%"><img src="http://www.rawmet24.com/web_files/img/rawmet%20logo.png" width="25%" vspace=10 /></td></tr>';
	$emailContent .='<tr style=""><td style="height:20px">Dear :'.$vname.'</td></tr>';
   
	$emailContent .='<tr style=""><td style="height:20px">Your  account has  been activated
	.Your ID is:'.$id.'<br>
	.And Password is:'.$vpassword.'<br>Thank You For Registering in Rawmet24.com.</td></tr>';
    $emailContent .= $this->input->post('message');  //   Post message available here


    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= "<tr><td style='color:white;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://rawmet24.com/' target='_blank' style='text-decoration:none;color: orange;'><b>www.Rawmet24.com</b></a></p></td></tr></table></body></html>";
                


    $config['protocol']  = 'smtp';
    $config['smtp_host']  = 'ssl://smtp.gmail.com';
    $config['smtp_port']  = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'rawmet24@gmail.com';    //Important
    $config['smtp_pass']    = 'R@wm*_159';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

     

    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
    $this->email->send();

    $this->session->set_flashdata('msg',"Mail has been sent successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    return redirect('admin_approvevendor/index/');
	} 
				
			  }
			  
		}
			
			$this->load->view('vendordetail');
			
			
			
			
			

		
		

	
	
}
				  }