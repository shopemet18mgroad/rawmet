<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_send extends CI_Controller {

		function __construct() {
        parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	    public function index(){
			$this->load->view('email_send');
		}
	public function send()
{
		
		$this->load->helper('url');
		$this->session->sess_expiration = '3600';
	if($this->input->post('email')){
		
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyer_register";
				$colname = "bemail";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "vendor_register";
				$colname = "semail";
			}
	
	$email = $this->input->post('email');
	
	$check_db = array($colname => $email);
	print_r($check_db);die;
	
	 if($this->Admin_model->check($table, $check_db)){
	 if($table == "buyer_register"){
		print_r($bemail); die; 
	 }}
    $to =  $this->input->post('from');  // User email pass here
    $subject = 'Welcome To Rawmet';

    $from = 'shopemet18@gmail.com';    // Pass here your mail id

    $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="img/aucjunction.jpg" width="300px" vspace=10 /></td></tr>';
    $emailContent .='<tr><td style="height:20px"></td></tr>';


    $emailContent .= $this->input->post('message');  //   Post message available here


    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://Aucjunction.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.Rawmet.com</a></p></td></tr></table></body></html>";
                


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
}

}