<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_quotation extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
// load helper
    $this->load->helper(array('url', 'html'));
  }
   public function index(){
     echo "hi";
  }
  public function auc_no(){
	  
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$aucf = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
			print_r($bnam );die;
		$bnam = urldecode($this->uri->segment(4));
		
		
		
			$active = array('productid'=>$aucf);
		
				
				
	
			
			
			
			//$active3 = array('bname'=>$bnam);
			
			$query = $this->Admin_model->getdatafromtable('selquotenegotate', $active);
			//print_r($query); die;
			
			//$query2 = $this->Admin_model->getdatafromtable('vendor_register', $active);
		
			//$query3 = $this->Admin_model->getdatafromtable('buyer_register',$active3);
		
			$data['sqldata']= $query;
			//print_r($query); die;	
			//$data['sqldata2']= $query2;
			//$data['sql']=$query3;
			
			//$data['sauctionid'] = $aucf;
			//print_r($data['sauctionid']); die;
			//$this->load->view('Pdf_File2',$data);
      $data2 = array(
        'title' => $aucf,
        'data' => 'List Of Lots');
	 $ci = &get_instance();
    $data['data'] = $data;

    $ci->load->view("quotation",$data);	 
    // Get output html
    $html = $ci->output->get_output();
// add external css library
    //$html .= '<link href="' .base_url().'web_files/css/style.css" rel="stylesheet">';
    // Load pdf library
    $ci->load->library('pdf');
    $ci->dompdf->loadHtml($html);
    // setup size
    $ci->dompdf->setPaper('A2', 'portrait');
    // Render the HTML as PDF
    $ci->dompdf->render();
    // Output  PDF (1 = download and 0 = preview)
    $ci->dompdf->stream($aucf.".pdf", array("Attachment" => 0));
		
		$this->load->view('customer/header');
		$this->load->view('customer/quotation');
		$this->load->view('customer/footer');
  }
 }
	?>