<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_custquoteapproval extends CI_Controller {

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
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		
	
	
		$this->load->model('Admin_model');
		$id = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$buyerid = $this->uri->segment(4);
		$active = array('id'=>$id);
		
		
		$query = $this->Admin_model->getdatafromtable('sellerpostproduct', $active);
		$data['sqldata']= $query;
		
		
		$data['sqldata2'] = $this->Admin_model->getdatafromtable_buyerneg($buyerid);
		
		$data['sqldata3'] = $this->Admin_model->getdatafromtable_quote_buyer2($id);
		$data['sqldata4'] = $this->Admin_model->getdatafromtable_quote_seller4($id);
		$data['sqldata5'] = $this->Admin_model->getdatafromtable_quote_seller5($id);
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('vendor/header',$sess);
		$this->load->view('vendor/custquoteapproval',$data);
		$this->load->view('vendor/footer');
			}
		
	}
	
	public function buyerprice_update(){
		
		
		
		$this->load->model('Admin_model');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('sellerid'=>$sess['sessi']);
				//print_r($active1); die;
				$data2 = $this->Admin_model->getusernamedatafromtable('vendor_register', $active1);
				//print_r($data2); die;
				$sllerid= $data2[0]->sellerid;
				//	print_r($vusername); die;
	         if($this->input->post('buyerid')){
			 $date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$this->load->library('session');
            $id = $this->input->post('id');
			$sellerid = $this->input->post('sellerid');
			$buyerid = $this->input->post('buyerid');
			$category = $this->input->post('category');
			$productname = $this->input->post('productname');
			$productid = $this->input->post('productid');
			$companyname = $this->input->post('companyname');
			$category = $this->input->post('category');
		
			$price = $this->input->post('price');
			$punits = $this->input->post('punits');
	        $units = $this->input->post('units');
			$quantity = $this->input->post('quantity');
	     
		    $pstates = $this->input->post('pstates');
			$pcities = $this->input->post('pcities');
		
			$bquantity = $this->input->post('bquantity');
		    $bprice= $this->input->post('bprice');			 
		    $bunits = $this->input->post('bunits');
			$bsupplyability = $this->input->post('bsupplyability');
			$sellapproval = $this->input->post('sellapproval');
			
			$selprice= $this->input->post('selprice');
			$sunits = $this->input->post('sunits');

		   
			$productvalidityto = $this->input->post('productvalidityto');
		    $datetime= $this->input->post('datetime');			 
		    $estdeltime = $this->input->post('estdeltime');
			$uploadproductimage  = serialize($this->input->post('uploadproductimage')); 
			
			
			
			//$data1 = array('busername'=>$busername);
			
			$data2 = array('sellerpostproduct_id'=>$id,'productname' => $productname,'sellerid'=>$sellerid,'buyerid'=>$buyerid,'category'=> $category,'price'=>$price,'units'=> $units,'pstates'=>$pstates,'pcities'=> $pcities,'productid'=>$productid ,'companyname'=>$companyname, 'bquantity'=> $bquantity, 'bprice'=>$bprice, 'bsupplyability' => $bsupplyability, 'bunits'=> $bunits,'uploadproductimage'=>$uploadproductimage,'bsupplyability' => $bsupplyability,'sellapproval' =>$sellapproval,'selprice'=>$selprice,'sunits' =>$sunits,'datetime'=>$datetime,'estdeltime'=>$estdeltime,'productvalidityto'=>$productvalidityto,'quantity'=>$quantity,'punits' =>$punits);
			//print_r($data2);die;
			
			/* 	$this->load->model('Admin_model');
			  if($this->Admin_model->check('selquotenegotate', $data1)){
				 $datainserr = "ProductId already exist";
				header('location: '.base_url().'vendor_custquoteapproval/index_error/'.$datainserr);
				die;
			  }else{ */
				 
			  
		$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('selquotenegotate',$data2);
			header('location: '.base_url().'vendor_custquoteapproval/index/'.$id);
			//}
		


		
			  
			
	
	 }
			
		
	}

				
private function upload_files($nameid){
    	
	$countfiles=1;
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES[$nameid]['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES[$nameid]['name'][$i];
          $_FILES['file']['type'] = $_FILES[$nameid]['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES[$nameid]['error'][$i];
          $_FILES['file']['size'] = $_FILES[$nameid]['size'][$i];

          // Set preference
           $config['upload_path'] = 'web_files/uploads/';
			$config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif';
          $config['max_size'] = '50000000'; // max_size in kb
          $config['file_name'] = $_FILES[$nameid]['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
		$this->upload->initialize($config);
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            // Initialize array
            $datar[] = $filename;
          }
        }
 
      }
	 return $datar;
    }
		

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
		public function approve_quotes(){
			
		$this->load->model('Admin_model');
		
		
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	
		$buyerid = urldecode(($this->uri->segment(4)));

		$retriveval = array('buyerid'=>$buyerid,'productid'=>$productid);

		//print_r($retriveval );die;
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>true);
		$query = $this->Admin_model->update_custom('quotes', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_custquoteapproval/index/'.urldecode($productid)."/".urldecode($buyerid));
		
		die;
	
	}

	public function reject(){
		$this->load->helper('url');
		$productid =urldecode(str_ireplace('-','/', $this->uri->segment(3)));
	
		$buyerid = urldecode(($this->uri->segment(4)));

		$retriveval = array('buyerid'=>$buyerid,'productid'=>$productid);

		
		
		$this->load->model('Admin_model');
		$app= array('sellapproval'=>2);
		$query = $this->Admin_model->update_custom('quotes', $app, $retriveval, $retriveval);
		header('location: '.base_url().'Vendor_custquoteapproval/index/'.urldecode($productid)."/".urldecode($buyerid));
		
		die;
	}
	

}