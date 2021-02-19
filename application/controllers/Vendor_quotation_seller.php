<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_quotation_seller extends CI_Controller {

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
	
	   
	   $id = urldecode($this->uri->segment(3));
		
			//$sellerid = $this->uri->segment(4);		
			//$active = array('id'=>$id,);
			// $active1 = array('bname'=>$bname);
			//print_r($active); die;
		
		$query = $this->Admin_model->getdatafrom_vregistration($id);
		//echo '<pre>'; print_r($query); die;
		//$query1 = $this->Admin_model->getdatafromtable('vendor_register', $active);
		//$query2 = $this->Admin_model->getdatafromtable('buyer_register', $active1);
	 
		$data['sqldata1']= $query;
		//$data['sqldata2']= $query1;
	//	$data['sqldata3']= $query2;
	

			
			

		
      $data2 = array(
        'title' => $id,
        'data' => 'List Of Lots');
		//$data3 = array(
        //'title' => $vusername,
        //'data' => 'List Of Lots');
		
	 $ci = &get_instance();
    $data['data'] = $data2;
	// $data['data'] = $data3;
    $ci->load->view("quotation2",$data);	 
    // Get output html 
    $html = $ci->output->get_output();
// add external css library
    $html .= '<link href="' .base_url().'web_files/css/style.css" rel="stylesheet">';
    // Load pdf library
    $ci->load->library('pdf');
    $ci->dompdf->loadHtml($html);
    // setup size
    $ci->dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $ci->dompdf->render();
    // Output  PDF (1 = download and 0 = preview)
    $ci->dompdf->stream($id.".pdf", array("Attachment" => 0));
		
  }
 }
	?>