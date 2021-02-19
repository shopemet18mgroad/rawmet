
	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_quotation5 extends CI_Controller {

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
	
	   $sellerid = urldecode($this->uri->segment(4));
	   $buyerid = urldecode($this->uri->segment(3));
		
		
	      $active = array('sellerid'=>$sellerid);
		  $active1 = array('buyerid'=>$buyerid);
	
		
      $query = $this->Admin_model->getdatafromtable('vend_renego', $active);
	 // print_r( $query);die;
        $query1 = $this->Admin_model->getdatafromtable('vendor_register', $active);
		$query2 = $this->Admin_model->getdatafromtable('buyer_register', $active1);
	  $data['sqldata1']= $query;
	 //print_r( $data['sqldata1']);die;
	  $data['sqldata2']= $query1;
	  $data['sqldata3']= $query2;
	// print_r( $data['sqldata3']);die;

			
			

		
      $data2 = array(
        'title' => $buyerid,
        'data' => 'List Of Lots');
		$data3 = array(
        'title' => $sellerid,
        'data' => 'List Of Lots');
		//print_r( $data2);die;
	 $ci = &get_instance();
    $data['data'] = $data2;
	 $data['data'] = $data3;
    $ci->load->view("quotation5",$data);	 
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
    $ci->dompdf->stream($buyerid.".pdf", array("Attachment" => 0));
		
  }
 }
	?>
