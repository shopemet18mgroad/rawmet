<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_add_renegotiate extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
				$active1 = array('buyerid'=>$sess['sessi']);
				$data2 = $this->Admin_model->getbusernamedatafromtable('buyer_register', $active1);
				$buyerid= $data2[0]->buyerid;
				
		
	if($this->input->post('productname')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			
			$id = $this->input->post('id');
			$productid = $this->input->post('productid');
			$productname = $this->input->post('productname');
			$sellerid = $this->input->post('sellerid');
			$buyerid = $this->input->post('buyerid');
			$category = $this->input->post('category');
			$description = $this->input->post('description');
			$companyname = $this->input->post('companyname');
			
			$price = $this->input->post('price');
			$punits = $this->input->post('punits');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			
			
			$pstates= $this->input->post('pstates');
			$pcities = $this->input->post('pcities');
			$description = $this->input->post('description');
			$bquantity = $this->input->post('bquantity');
			$bprice = $this->input->post('bprice');
			$bunits = $this->input->post('bunits');
			$bsupplyability = $this->input->post('bsupplyability');
			
			$selprice = $this->input->post('selprice');
			$sunits = $this->input->post('sunits');
			
			
			$brenegoprice = $this->input->post('brenegoprice');
			$brenegounit = $this->input->post('brenegounit');
			$brenegoquantity = $this->input->post('brenegoquantity');
			$brenegoquantityunit = $this->input->post('brenegoquantityunit');
			
			$estdeltime = $this->input->post('estdeltime');
			$datetime = $this->input->post('datetime');
			$productvalidityto = $this->input->post('productvalidityto');
			
			//$_FILES['uploadproductimage']['name'];
			$uploadproductimage  = serialize($this->input->post('uploadproductimage'));

				
			$renegoStatus = 0;
			if(array_key_exists('btnsubmit_final',$this->input->post())){
				$renegoStatus = 1;
			}
	
	
	      // $data1 = array('vname'=>$vname );
			$data2 = array('sellerpostproduct_id'=>$id,'productid'=>$productid ,'productname' => $productname,'sellerid'=>$sellerid,'buyerid'=>$buyerid,'category'=> $category,'description' => $description,'companyname'=>$companyname,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'punits'=> $punits,'pstates'=>$pstates,'pcities'=> $pcities, 'bquantity'=> $bquantity, 'bprice'=>$bprice, 'bunits'=> $bunits ,'bsupplyability' => $bsupplyability,'selprice'=>$selprice,'sunits'=>$sunits,'brenegoprice'=>$brenegoprice,'brenegounit'=>$brenegounit,'brenegoquantity'=>$brenegoquantity,'brenegoquantityunit'=>$brenegoquantityunit,'estdeltime'=>$estdeltime,'datetime'=>$datetime,'productvalidityto'=>$productvalidityto,'uploadproductimage'=>$uploadproductimage ,'status' => $renegoStatus );
			
	
				 
			  
				$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('cust_renego',$data2);
			header('location: ./Customer_renegotiation/index/'.$id.'/'.$buyerid);
			//}

			
		}
			
		/* 	if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
				$datainserr = "Invalid Login Session";
				header('location: '.base_url().'login/index_error/'.$datainserr);
				die;
			}
			else
			{ */
				$this->load->model('Admin_model');
				$this->load->library('session');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				
				
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/renegotiation');
		$this->load->view('customer/footer');
			 
	 
//}
			
		
		
	}
	
	
	/* public function Addtosubmit(){
		$dat = $this->uri->segment(3);
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
		
		
		
	
	} */
	
	
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
	}
