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
	 if($this->input->post('productname')){
			 $date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			
			$productname = $this->input->post('productname');
			$vname = $this->input->post('vname');
			$category = $this->input->post('category');
			$materialname = $this->input->post('materialname');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$aifeatured = $this->input->post('aifeatured');
			$fobprice = $this->input->post('fobprice');
			$uploadproductimage = $this->input->post('uploadproductimage');
			$minoderquant = $this->input->post('minoderquant');
			$supplyability = $this->input->post('supplyability');
			$supplyunits = $this->input->post('supplyunits');
			$quantpermonth = $this->input->post('quantpermonth');
			$estdeltime = $this->input->post('estdeltime');
			$pstates= $this->input->post('pstates');
			$city = $this->input->post('$city');
		    $types= $this->input->post('types');			 
		    $payable = $this->input->post('payable');
			$productid = $this->input->post('productid');
			$companyname = $this->input->post('companyname');
			 
			$data2 = array('productname' => $productname,'vname'=>$vname,'category'=> $category,'description' => $description,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'materialname'=>$materialname,'aifeatured'=>$aifeatured,'fobprice'=>$fobprice,'uploadproductimage'=>$uploadproductimage,'minoderquant'=>$minoderquant,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'quantpermonth'=>$quantpermonth,'estdeltime'=>$estdeltime,'pstates'=>$pstates,'types'=>$types,'city'=> $city,'payable'=> $payable,'productid'=>$productid ,'companyname'=>$companyname );

			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('sellerpostproduct',$data2);
			header('location: ./Vendor_postproduct/');
			}
			
			if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
				$datainserr = "Invalid Login Session";
				header('location: '.base_url().'login/index_error/'.$datainserr);
				die;
			}
			else
			{
				$this->load->model('Admin_model');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('vusername'=>$sess['sessi']);
				//print_r($active1); die;
				$data['scomp'] = $this->Admin_model->get1datafromtable('vendor_register', $active1);
				
				$this->load->view('vendor/header',$sess);
				$this->load->view('vendor/postproduct',$data);
				$this->load->view('vendor/footer');
			}  
	 
}
}    
	