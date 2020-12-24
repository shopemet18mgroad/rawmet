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
		if($this->input->post('submit'))
		{
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		//$this->load->model('Admin_model');
		//$busername = $this->uri->segment(3);	
	
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
			$pcities = $this->input->post('pcities');
		    $types= $this->input->post('types');			 
		    $payable = $this->input->post('payable');
			$productid = $this->input->post('productid');
			$companyname = $this->input->post('companyname');
		
		
	//=================================================================================================
		//==================================================================
		$this->load->model('Admin_model');
		$data2 = array('vname'=>$vname,'category'=> $category,'description' => $description,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'materialname'=>$materialname,'aifeatured'=>$aifeatured,'fobprice'=>$fobprice,'uploadproductimage'=>$uploadproductimage,'minoderquant'=>$minoderquant,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'quantpermonth'=>$quantpermonth,'estdeltime'=>$estdeltime,'pstates'=>$pstates,'types'=>$types,'pcities'=> $pcities,'payable'=> $payable,'productid'=>$productid ,'companyname'=>$companyname );
		
		//$this->load->view('xya', $data);
		//print_r($data2);die;
		$datainserr = "Data Updated Successfully";
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		//print_r($sess);die;
		
		 $hidden = array('productid'=>$productid );
		//print_r($hidden);die;
		
		//$updatech = array('baddress' => $baddress);
		$status = $this->Admin_model->update_custom('sellerpostproduct',$data2,$hidden,$hidden);
		//print_r($status);die;
		
		
		
	
		
		header('location: '.base_url().'vendor_editpostproduct/index_error/'.$datainserr);
		}
	}


	
}



	
