<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_buyer_register extends CI_Controller {

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
	    public function index(){
        // If captcha form is submitted
        if($this->input->post('submit')){
			$this->load->helper('url');
			
			$bname = $this->input->post('bname');
			$bcompanyname = $this->input->post('bcompanyname');
			$bcompanytype = $this->input->post('bcompanytype');
			$bcontactperson = $this->input->post('bcontactperson');
			$bcontactnumber = $this->input->post('bcontactnumber');
			$bemail = $this->input->post('bemail');
			$busername = $this->input->post('busername');
			$bpassword = base64_encode( $this->input->post('bpassword'));
			$brepeatpassword = base64_encode( $this->input->post('brepeatpassword'));
			//echo $spcb = $this->input->post('spcb');
			$bpan= $this->input->post('bpan');
			$bgst = $this->input->post('bgst');
			$baddress = $this->input->post('baddress');
			$bcity = $this->input->post('bcity');
			$bselectstate = $this->input->post('bselectstate');
			$bpincode = $this->input->post('bpincode');
			$buyerid = $this->input->post('buyerid');
            
              $this->load->model('Admin_model');
			  $data2 = array('bname' => $bname, 'bcompanyname' => $bcompanyname, 'bcompanytype' => $bcompanytype, 'bcontactperson' => $bcontactperson, 'bcontactnumber' => $bcontactnumber, 'bemail' => $bemail, 'busername'=> $busername, 'bpassword' => $bpassword,  'brepeatpassword' => $brepeatpassword,'bpan'=>$bpan,'bgst'=>$bgst,'baddress' => $baddress,'bcity' => $bcity, 'bselectstate' => $bselectstate, 'bpincode' => $bpincode,'buyerid'=>$buyerid);
		//$this->load->view('xya', $data);
		
		
		$datainserr = "Data Inserted Successfully";

		$status = $this->Admin_model->insert('buyer_register', $data2);
		header('location: '.base_url().'home/index/');

		  
        }
        $this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
       
		//$this->load->view('header',$sess);
		$this->load->view('buyer_register');
	  
    }
	
	 public function validate_buyerid11(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('buyerid' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('buyer_register', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
	 
	  public function validate_selid11(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('sellerid' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('vendor_register', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
	 

	  
	  
	 
	 
	 public function validate_bcompanyname(){
		$dat2 = urldecode($this->uri->segment(3));
		$check_db = array('bcompanyname' => $dat2);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('buyer_register', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		 
	}
	 
	 public function validate_vcompanyname(){
		$dat2 = urldecode($this->uri->segment(3));
		$check_db = array('vcompanyname' => $dat2);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('vendor_register', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
	
	 
	 
	 
	 
	
		
	
	
	
}
