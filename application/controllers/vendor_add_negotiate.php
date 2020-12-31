<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_add_negotiate extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('vusername'=>$sess['sessi']);
				//print_r($active1); die;
				$data2 = $this->Admin_model->getusernamedatafromtable('vendor_register', $active1);
				//print_r($data2); die;
				$vusername= $data2[0]->vusername;
				//	print_r($vusername); die;
	 if($this->input->post('productname')){
			 $date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$this->load->library('session');

			$vname = $this->input->post('vname');
			$busername = $this->input->post('busername');
			$category = $this->input->post('category');
			$productname = $this->input->post('productname');
			$productid = $this->input->post('productid');
			$companyname = $this->input->post('companyname');
			$category = $this->input->post('category');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			//$quantity = $this->input->post('quantity');
			//$units = $this->input->post('units');
			//$supplyability = $this->input->post('supplyability');
			$supplyunits = $this->input->post('supplyunits');
			$uploadproductimage = $this->input->post('uploadproductimage');
			$pstates = $this->input->post('pstates');
			$pcities = $this->input->post('pcities');
			$negotiate= $this->input->post('negotiate');
			$bquantity = $this->input->post('bquantity');
		    $bprice= $this->input->post('bprice');			 
		    $bunits = $this->input->post('bunits');
			$bsupplyability = $this->input->post('bsupplyability');
			$sellapproval = $this->input->post('sellapproval');
			$uploadporder = $this->input->post('uploadporder');
			$selprice= $this->input->post('selprice');
			$sunits = $this->input->post('sunits');
		    $selqan= $this->input->post('selqan');			 
		    $selunits = $this->input->post('selunits');
			
			//$uploadproductimage = self::upload_files('uploadproductimage');
			$_FILES['uploadproductimage']['name'];
			$pic_array1  = self::upload_files('uploadproductimage'); 
		
		       if(!count($pic_array1)){
			       echo '<script language="javascript">';
			             echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			            echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		//print_r($pic_array1);die;
			
			
			$data1 = array('productid'=>$productid);
			 //print_r($uploadproductimage);die;
			$data2 = array('productname' => $productname,'vname'=>$vname,'busername'=>$busername,'category'=> $category,'description' => $description,'price'=>$price,'supplyunits'=> $supplyunits,'pstates'=>$pstates,'pcities'=> $pcities,'productid'=>$productid ,'companyname'=>$companyname,'negotiate' => $negotiate, 'bquantity'=> $bquantity, 'bprice'=>$bprice, 'bsupplyability' => $bsupplyability, 'bunits'=> $bunits,'uploadproductimage'=>$uploadproductimage,'bsupplyability' => $bsupplyability,'sellapproval' =>$sellapproval,'uploadporder' =>$uploadporder,'selprice'=>$selprice,'sunits' =>$sunits,'selqan'=>$selqan,'selunits'=>$selunits);
			//print_r($data2);die;


		$this->load->model('Admin_model');
			  if($this->Admin_model->check('selquotenegotate', $data1)){
				 $datainserr = "ProductId already exist";
				header('location: '.base_url().'vendor_sellerquotenego/index_error/'.$datainserr);
				die;
			  }else{
				  //echo "HI";
			  
			$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('selquotenegotate',$data2);
			header('location: ./vendor_sellerquotenego/');
			}
	 }
			
			if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
				$datainserr = "Invalid Login Session";
				header('location: '.base_url().'login/index_error/'.$datainserr);
				die;
			}
			/* else
			{
				$this->load->model('Admin_model');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				$active1 = array('vusername'=>$sess['sessi']);
				//print_r($active1); die;
				$data['scomp'] = $this->Admin_model->get1datafromtable('vendor_register', $active1);
				$data['sessi'] = $this->session->userdata('username');
				//print_r($data['sessi']); die;
				$this->load->view('vendor/header',$sess);
				$this->load->view('vendor/postproduct',$data);
				$this->load->view('vendor/footer');
			}   */
	 
}
/* public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('vendor/header');
			$this->load->view('vendor/postproduct');
			$this->load->view('vendor/footer');
			
	} */

private function upload_files($nameid){
    	//print_r($nameid);
    //$countfiles = count($_FILES[$nameid]['name']);
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