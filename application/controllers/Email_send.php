<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_send extends CI_Controller {

		function __construct() {
        parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	    public function index(){
				$this->load->helper('url');
		$this->session->sess_expiration = '3600';
 	if($this->input->post('email')){
		
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyer_register";
				$colname = "bemail";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "vendor_register";
				$colname = "vemail";
			}
	
	$email = $this->input->post('email');
	
	$check_db = array($colname => $email);
	
	$this->load->model('Admin_model');
	 if($this->Admin_model->check($table, $check_db)){
	 if($table == "buyer_register"){
		$newdata = $this->Admin_model->getdatafromtable('buyer_register',$check_db);
		$id= $newdata[0]->buyerid;
		$bname= $newdata[0]->bname;
		
	$to =  $this->input->post('email');  // User email pass here
    $subject = 'Welcome To Rawmet';

    $from = 'shopemet18@gmail.com';    // Pass here your mail id

    $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:0px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="padding-left:0%"><img src="http://www.rawmet24.com/web_files/img/rawmet%20logo.png" width="25%" vspace=10 /></td></tr>';
	$emailContent .='<tr style=""><td style="height:20px">Dear :'.$bname.'</td></tr>';
    $emailContent .='<tr style=""><td style="height:20px">Your Buyer Id is:'.$id.'</td></tr>';


    $emailContent .= $this->input->post('message');  //   Post message available here


    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= "<tr><td style='color:white;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://rawmet24.com/' target='_blank' style='text-decoration:none;color: orange;'><b>www.Rawmet24.com</b></a></p></td></tr></table></body></html>";
                


    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'shopemet18@gmail.com';    //Important
    $config['smtp_pass']    = 'samosa&098';  //Important

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
    return redirect('email_send');
	}
	}}
	 else{
			$this->load->view('email_send');
		}
	
   }
	public function send()
{
		
	
}

}