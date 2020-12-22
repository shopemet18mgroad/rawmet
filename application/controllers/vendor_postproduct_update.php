<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vendor_postproduct_update extends CI_Controller {

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
		//$this->load->library('fileupload');
		
			 $productname = $this->input->post('productname');
			 $category = $this->input->post('category');
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
	
			$this->load->model('Admin_model');
			 $data2 = array('category'=> $category,'pstates'=>$pstates,'types'=>$types,'materialname'=>$materialname,'description' => $description,'price'=>$price,'quantity'=>$quantity,'aifeatured'=>$aifeatured,'fobprice'=>$fobprice,'uploadproductimage'=>$uploadproductimage,'minoderquant'=>$minoderquant,'supplyability'=>$supplyability,'quantpermonth'=>$quantpermonth,'estdeltime'=>$estdeltime);
			  
			  $datainserr = "Data Inserted Successfully";
			  $updatech = array('productname' => $productname);
			 
			  $status = $this->Admin_model->update_custom('sellerpostproduct',$data2,$updatech,$updatech);
		//$status = $this->Admin_model->insert('vendor_register',$data2);
		//header('location: '.base_url().'admin_editsellerprofile/index/'.$datainserr);
		header('location: '.base_url().'vendor_editpostproduct/index/'.$datainserr);
	}
}


	
