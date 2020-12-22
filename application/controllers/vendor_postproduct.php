<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_postproduct extends CI_Controller {

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
        $this->load->library('session');
        // Load the captcha helper
		$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
    }
    
	public function index()
	{ 
	 if($this->input->post('submit')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$productname = $this->input->post('productname');
			 $category = $this->input->post('category');
			 $materialname = $this->input->post('materialname');
			 $pstates= $this->input->post('pstates');
		     $types= $this->input->post('types');
			 $materialname = $this->input->post('materialname');
		     $description = $this->input->post('description');
			 $price = $this->input->post('price');
			$quantity = $this->input->post('quantity');
			$aifeatured = $this->input->post('aifeatured');
			$fobprice = $this->input->post('fobprice');
			$uploadproductimage = $this->input->post('uploadproductimage');
			$minoderquant = $this->input->post('minoderquant');
			$supplyability = $this->input->post('supplyability');
			$quantpermonth = $this->input->post('quantpermonth');
			$estdeltime = $this->input->post('estdeltime');
			
			
			
          

			  $data2 = array('productname' => $productname,'category'=> $category,'pstates'=>$pstates,'types'=>$types,'materialname'=>$materialname,'description' => $description,'price'=>$price,'quantity'=>$quantity,'aifeatured'=>$aifeatured,'fobprice'=>$fobprice,'uploadproductimage'=>$uploadproductimage,'minoderquant'=>$minoderquant,'supplyability'=>$supplyability,'quantpermonth'=>$quantpermonth,'estdeltime'=>$estdeltime);
	
		
			
			//$active = array('vusername'=>$sess['sessi']);      

		
		
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('sellerpostproduct',$data2);
		header('location: ./Vendor_postproduct/');
	 }
			if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
				$sess = array('sessi'=>$this->session->userdata('username'));
		//print_r($status);die;
			
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/postproduct');
		$this->load->view('vendor/footer');
			}  
	 
}
}    
	