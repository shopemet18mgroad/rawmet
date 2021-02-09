<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_postproduct_update extends CI_Controller {

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
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
				
				$productid = $this->input->post('productid');
				$price = $this->input->post('price');
		        $quantity = $this->input->post('quantity');
			    $units = $this->input->post('units');
		         $supplyability = $this->input->post('supplyability');
			    $supplyunits = $this->input->post('supplyunits');
		
		
			
		
		
		//=================================================================================================
		
		
		
		//==================================================================
		$data = array('units'=>$units,'price'=>$price,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'quantity'=>$quantity);
	

		
		
		$datainserr = "Data Inserted Successfully";
		$updatech = array('productid'=>$productid);
			print_r($updatech); die;
			
		$status = $this->Admin_model->update_custom('sellerpostproduct',$data,$updatech,$updatech);
	
		
		header('location: '.base_url().'vendor_uploadedproduct/index/'.$datainserr);
	
	
	

	
	
}



}
