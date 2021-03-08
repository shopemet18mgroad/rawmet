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
		$this->load->library('session');
		
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{  
		
		$voptions = array('voptions'=>false);
		
		$query = $this->Admin_model->getdatafromtable('vendor_register',$voptions);
		
		$adac['data']= $query;
		//$sess = array('sessi'=>$this->session->userdata('username'));
		
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('ausername'=>$sess['sessi']);
			}
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/approvevendor',$adac);
		$this->load->view('admin/footer');
	
	
	}
	
	public function approve_seller(){
		$sellerid= urldecode($this->uri->segment(3));
	
		$this->load->model('Admin_model');
		$app= array('voptions'=>true);
		$adaction2 = array('sellerid'=>$sellerid);
		
		$query = $this->Admin_model->update_custom('vendor_register', $app, $adaction2, $adaction2);
		if($sellerid){
			$ndata = $this->Admin_model->getdatafromtable('vendor_register',$adaction2);
		$vemail= $ndata[0]->vemail;
	//print_r($vemail); die;
	$check_db = array('vemail' =>$vemail);
	//print_r($check_db ); die;
	if($vemail =="vendor_register"){
		
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
   
	$emailContent .='<tr style=""><td style="height:20px">Your  account activation is pending.<br>Within 24 Hour your account will be activated<br>Thank You For Registering in Rawmet24.com.</td></tr>';
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
    return redirect('email_send');
	}	 
		}else{
			echo "BYE";
		}
	
	}

}
		


	
