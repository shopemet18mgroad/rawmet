<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_add_contactsupplier2 extends CI_Controller {

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
			$price = $this->input->post('price');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$punits = $this->input->post('punits');
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
			
			$uploadproductimage  = serialize($this->input->post('uploadproductimage')); 
	

	      
			$data2 = array('sellerpostproduct_id'=>$id,'productname' => $productname,'sellerid'=>$sellerid,'buyerid'=>$buyerid,'category'=> $category,'description' => $description,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'pstates'=>$pstates,'pcities'=> $pcities,'productid'=>$productid ,'companyname'=>$companyname, 'negotiate' => $negotiate, 'bquantity'=> $bquantity, 'bprice'=>$bprice, 'bsupplyability' => $bsupplyability, 'bunits'=> $bunits,'datetime'=>$datetime,'estdeltime'=>$estdeltime,'productvalidityto'=>$productvalidityto,'uploadproductimage'=>$uploadproductimage,'punits'=>$punits);
	
			//print_r($data2);die;
			  
				$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('quotes',$data2);
			header('location: ./home/buyerlogin/'.$id.'/'.$buyerid);
		

			
		}
	
				$this->load->model('Admin_model');
				$this->load->library('session');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
					header('location: '.base_url().'Home/buyerlogin/');		
				
		//$this->load->view('header',$sess);
		//$this->load->view('buyerlogin');
		//$this->load->view('footer');
			 
	 

			
		
		
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
	}
