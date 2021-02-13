<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_add_contactsupplier extends CI_Controller {

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
				$active1 = array('busername'=>$sess['sessi']);
				$data2 = $this->Admin_model->getbusernamedatafromtable('buyer_register', $active1);
				$busername= $data2[0]->busername;
				
		
	if($this->input->post('bquantity')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			
			
			$productid = $this->input->post('productid');
			$productname = $this->input->post('productname');
			$vname = $this->input->post('vname');
			$busername = $this->input->post('busername');
			$category = $this->input->post('category');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$supplyability = $this->input->post('supplyability');
			$supplyunits = $this->input->post('supplyunits');
			$pstates= $this->input->post('pstates');
			$pcities = $this->input->post('pcities');
			$companyname = $this->input->post('companyname');
			$negotiate = $this->input->post('negotiate');
			$bquantity = $this->input->post('bquantity');
			$bprice = $this->input->post('bprice');
			$bsupplyability = $this->input->post('bsupplyability');
			$bunits = $this->input->post('bunits');
			$datetime = $this->input->post('datetime');
			$estdeltime = $this->input->post('estdeltime');
			$productvalidityto = $this->input->post('productvalidityto');
			//$_FILES['uploadproductimage']['name'];
			$uploadproductimage  = serialize($this->input->post('uploadproductimage')); 
	
	
	      // $data1 = array('vname'=>$vname );
			$data2 = array('productname' => $productname,'vname'=>$vname,'busername'=>$busername,'category'=> $category,'description' => $description,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'pstates'=>$pstates,'pcities'=> $pcities,'productid'=>$productid ,'companyname'=>$companyname, 'negotiate' => $negotiate, 'bquantity'=> $bquantity, 'bprice'=>$bprice, 'bsupplyability' => $bsupplyability, 'bunits'=> $bunits,'datetime'=>$datetime,'estdeltime'=>$estdeltime,'productvalidityto'=>$productvalidityto,'uploadproductimage'=>$uploadproductimage );
			//print_r($data2);die;
		/* 	$this->load->model('Admin_model');
			  if($this->Admin_model->check('quotes', $data1)){
				 $datainserr = "ProductId already exist";
				header('location: '.base_url().'customer_sellernegotiatedquote/index_error/'.$datainserr);
				die;
			  }else{ */
				 
			  
				$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('quotes',$data2);
			header('location: ./customer_sellernegotiatedquote/index/'.$datainserr);
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
		$this->load->view('customer/sellernegotiatedquote');
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
