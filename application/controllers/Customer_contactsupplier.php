<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_contactsupplier extends CI_Controller {

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
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		$productname= $this->uri->segment(3);	
		$productid= $this->uri->segment(4);	
		//$category= urldecode($this->uri->segment(5));
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));

		$this->load->model('Admin_model');
		$productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$active = array('productid'=>$productid);
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct', $active);
		$data['sqldata']= $query;
			
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/contactsupplier',$data);
		$this->load->view('customer/footer');
		
	}
	}
	
	/* public function Addtosubmit(){
		$dat = urldecode($this->uri->segment(3));
		print_r($dat);die;
		$this->load->library('session');
		$this->load->model('Admin_model');
		$busername = $this->session->userdata('username');
		$datexp = explode('|',$dat);
		$productid = str_ireplace('-','/',$datexp[0]);
		$category = $datexp[1];

		$data = array('productid'=>$productid);
		
		$dat3 = $this->Admin_model->getdatafromtable('sellerpostproduct',$data);
		
		$vname = $dat3[0]->vname;
		
		$productname = $dat3[0]->productname;
		$category = $dat3[0]->category;
		$description = $dat3[0]->description;
		$price = $dat3[0]->price;
		$quantity = $dat3[0]->quantity;
		$units = $dat3[0]->units;
		$supplyability = $dat3[0]->supplyability;
		$supplyunits =$dat3[0]->supplyunits;
		$pstates = $dat3[0]->pstates;
		$pcities = $dat3[0]->pcities;
		$companyname = $dat3[0]->companyname;
		if($this->input->post('submit')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$negotiate = $this->input->post('negotiate');
			$bquantity = $this->input->post('bquantity');
			$bprice = $this->input->post('bprice');
			$bsupplyability = $this->input->post('bsupplyability');
			$bunits = $this->input->post('bunits');
		
			
			
		//$bcheck = array('vname'=>$vname,'productid'=>$productid,'category'=>$category);
		
		$cartdata = array(
		'vname'  => $vname,'productname'=>$productname,'busername' => $busername,'productid'=>$productid,'category' => $category,'description'=>$description,'companyname'=>$companyname,'pstates'=>$pstates,'pcities'=>$pcities,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'supplyability'=>$supplyability,'supplyunits'=>$supplyunits,'negotiate'=>$negotiate,'bquantity'=>$bquantity,'bprice'=>$bprice,'bsupplyability'=>$bsupplyability,'bunits'=>$bunits);
		
		$status = $this->Admin_model->insert('quotes', $cartdata);
 
		$datainserr = "Data inserted successfully";
		header('location: '.base_url().'customer_contactsupplier/index/'.$datainserr);
	}	
		die;
		if($this->Admin_model->check('quotes',$bcheck)){
			echo "EX";
		}else{
			$status = $this->Admin_model->insert('quotes', $cartdata);
			echo "IN";
		}
		die;
		
		
	
	}			 */

	
}
