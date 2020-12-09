<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_buyer_registration extends CI_Controller {

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
	 
	 function __construct() {
        parent::__construct();
        
        // Load session library
        //$this->load->library('session');
		//$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
    }
    
	
	    public function index(){
        // If captcha form is submitted
        if($this->input->post('submit')){
			$date =  Date('Y-m-d'); 
			$vname = $this->input->post('vname');
			$bcompanyname = $this->input->post('bcompanyname');
			$bcompanytype = $this->input->post('bcompanytype');
			$bcontactperson = $this->input->post('bcontactperson');
			$bcontactnumber = $this->input->post('bcontactnumber');
			$bemail = $this->input->post('bemail');
			$busername = $this->input->post('busername');
			$bpassword = $this->input->post('bpassword');
			$brepeatpassword = $this->input->post('brepeatpassword');
			//echo $spcb = $this->input->post('spcb');
			$baddress = $this->input->post('baddress');
			$bcity = $this->input->post('bcity');
			$bselectstate = $this->input->post('bselectstate');
			$bpincode = $this->input->post('bpincode');
			
            if($captcha === $sessCaptcha){
              $this->load->model('Admin_model');
			  $data = array('bcompany' => $bcompany, 'bcontactperson' => $bcontactperson,'bcomptype' => $bcomptype, 'bbuyerlocation'=> $bbuyerlocation, 'bname' => $bname, 'baddress' => $baddress, 'bcity' => $bcity, 'bpin' => $bpin, 'bstate' => $bstate, 'bcountry' => $bcountry, 'bemail' => $bemail, 'bphone' => $bphone, 'bpan' => $bpan, 'busername' => $busername, 'bpassword' => $bpassword, 'bgst' => $bgst,'bpcb' => $bpcb, 'bcin' => $bcin);
			  // check if company name exisyt before storing
			  
			  $status = $this->Admin_model->insert('buyerprofile', $data);
			 
			  if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../agreementforbuyer');
			  }else{
				   header('location: ./Buyers_registeration/error_handler/Database Insertion Error. Please Try Again');
			  }
            }else{
                header('location: ./Buyers_registeration/error_handler/Captcha Timed Out. Please Try Later');//echo 'Captcha code does not match, please try again.';
            }
        }
        
       
		$this->load->view('header');
		$this->load->view('buyer_registration',$data);
	  
    }
	
}