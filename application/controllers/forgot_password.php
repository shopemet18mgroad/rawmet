<?php

class forgot_password extends CI_Controller
{
public function __construct() {
parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	   public function index()
	{
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session');
		$this->load->helper('url');		 
		$this->session->sess_expiration = '3600';
		if($this->input->post('bemail')){
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyer_register";
				$colname = "bemail";
//				$colname2 = "bcontactnumber";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "vendor_register";
				$colname = "vemail";
	//			$colname2 = "vcontactnumber";
			}
			$bemail = $this->input->post('bemail');
			//$phoneno = $this->input->post('phoneno');
			$check_db = array($colname => $bemail);
			$this->load->model('Admin_model');
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "buyer_register"){
					  // get data from table based on session
					  $this->load->model('Admin_model');
					  $newdata = $this->Admin_model->getdatafromtable('buyer_register',$check_db);
					  //$bname,$busername,$time 
					  $bname = $newdata[0]->bname;
					  $buyerid = $newdata[0]->buyerid;
					  $bemail = $newdata[0]->bemail;
					  
					  
					  $newdata = array('bname'=>$bname,'buyerid'=>$buyerid,'bemail'=>$bemail);
					  
					  //check db otp table username if exist update with otp for same user
					   $check_db2a = array('buyerid' => $buyerid);
					   
					   $checkresp= $this->Admin_model->check('bemail',  $check_db2a);
					   if($checkresp){
						 //update  
						// $status = $this->Admin_model->update_custom('bemail',$newdata,$check_db2a,$check_db2a);
						 $to =  $this->input->post('email');  // User email pass here
						 $subject = 'Welcome To Rawmet';

						 $from = 'shopemet18@gmail.com';              // Pass here your mail id

						 $emailContent = '<!DOCTYPE><html><head>
						 </head><body>
						 <div class="container">
						 <div class="card ml-5 mr-5">
						 <img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
						 <div class="card-body ml-4">
						 <p>Dear '.$bname.',</p>
						 <p>OTP to reset your password is : <h1>'.$buyerid.'</h1></p>
						 <p>Note: This is a system generated mail. Please do not reply to it.</p></div>
						 </div>
						 </div></body></html>"';


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
					   }
						$this->session->set_userdata($newdata);		
					  header('location: '.base_url().'Reset_Password');
				  die;
				  }
				  
				  else if($table == "vendor_register"){
					   // get data from table based on session
					  $this->load->model('Admin_model');
					  $newdata = $this->Admin_model->getdatafromtable('vendor_register',$check_db);
					  //$bname,$busername,$time 
					  $vname = $newdata[0]->vname;
					  $sellerid = $newdata[0]->sellerid;
					  $vemail = $newdata[0]->vemail;
					//  $otp = rand(00000,99999);
					  
					  $newdata = array('vname'=>$vname,'sellerid'=>$sellerid,'vemail'=>$vemail);
					  
					  //check db otp table username if exist update with otp for same user
					   $check_db2a = array('sellerid' => $sellerid);
					   
					   $checkresp= $this->Admin_model->check('vemail',  $check_db2a);
					   if($checkresp){
						 //update  
						 //$status = $this->Admin_model->update_custom('resetpassword',$newdata,$check_db2a,$check_db2a);
						 
						 $to =  $this->input->post('email');  // User email pass here
						   $subject = 'Welcome To rawmet';

						   $from = 'shopemet18@gmail.com';              // Pass here your mail id

						   $emailContent = '<!DOCTYPE><html><head>
							</head><body>
							<div class="container">
							<div class="card ml-5 mr-5">
							<img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
							<div class="card-body ml-4">
							<p>Dear '.$vname.',</p>
							<p>OTP to reset your password is : <h1>'.$sellerid.'</h1></p>
							<p>Note: This is a system generated mail. Please do not reply to it.</p></div>
							</div>
							</div></body></html>"';
                


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
							//return redirect('Reset_Password');
					   }
					$this->session->set_userdata($newdata);
					  header('location: '.base_url().'Reset_Password');
					  die;
				  }
			  }else{
				  $datainserr = "Invalid Email Id";
				  header('location: '.base_url().'forgotpassword/index_error/'.$datainserr);
				  die;
			  }
			  die;
			  
		}else{
			
			$this->load->view('header');
			$this->load->view('forgotpassword');
			$this->load->view('footer');
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('header');
			$this->load->view('forgotpassword');
			$this->load->view('footer');
			
	}



	
}