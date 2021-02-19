
	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_quotation12 extends CI_Controller {

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
		
		$seller_mbuyreq_id = urldecode($this->uri->segment(3));
		
		
      $query = $this->Admin_model->getdatafrom_vregistration25($seller_mbuyreq_id);
	
	  $data['sqldata1']= $query;
	
			
			

		
      $data2 = array(
        'title' => $seller_mbuyreq_id,
        'data' => 'List Of Lots');
		
	 $ci = &get_instance();
    $data['data'] = $data2;

    $ci->load->view("quotation12",$data);	 
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
    $ci->dompdf->stream($seller_mbuyreq_id.".pdf", array("Attachment" => 0));
		
  }
 }
	?>