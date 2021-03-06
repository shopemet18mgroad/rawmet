<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_respurchase_order extends CI_Controller {

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
		//$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
	
		date_default_timezone_set("Asia/Kolkata");
    }
	 
	 
	 
	public function index()
	{
	if($this->input->post('v_id')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$sellerid = $this->input->post('sellerid');
			$buyerid = $this->input->post('buyerid');
			$sellerpostproduct_id = $this->input->post('sellerpostproduct_id');
			$v_id = $this->input->post('v_id');
			$productname = $this->input->post('productname');
			$productid = $this->input->post('productid');
			$category = $this->input->post('category');
			$quantity = $this->input->post('quantity');
			  $units= $this->input->post('units');
		     $price = $this->input->post('price');
			  $punits= $this->input->post('punits');
		   
			$pcities = $this->input->post('pcities');
			$bquantity = $this->input->post('bquantity');
			$bunits = $this->input->post('bunits');
			$bprice = $this->input->post('bprice');
			$bsupplyability = $this->input->post('bsupplyability');
			$selprice = $this->input->post('selprice');
			$sunits = $this->input->post('sunits');
		
			$brenegoprice = $this->input->post('brenegoprice');
			$brenegounit = $this->input->post('brenegounit');
			$brenegoquantity = $this->input->post('brenegoquantity');
			$brenegoquantityunit = $this->input->post('brenegoquantityunit');
			$sellrenegoprice = $this->input->post('sellrenegoprice');
			$sellrenegounits = $this->input->post('sellrenegounits');
			
			//$sterms_condiaccept  = $this->input->post('sterms_condiaccept');
			$pic_array1 = self::upload_files('upload_dd');
		
			if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			}else{
			$pic_array1 = serialize($pic_array1);
		   }
		   
		   
		   /* $s= $vname = $this->input->post('vname');
		   print_r($s); die;
		   $f =array('vname'=>$s);
		   $query = $this->Admin_model->getdatafromtable('sellerpostproduct',$f); */
		   
		   
			//$this->load->model('Admin_model');
			$data = array('sellerpostproduct_id'=>$sellerpostproduct_id,'sellerid' => $sellerid, 'buyerid' => $buyerid,'v_id'=>$v_id,'productname' => $productname,'productid'=> $productid,'category' => $category,'quantity' => $quantity,'units' => $units,'price' => $price,'punits' => $punits,'pcities' => $pcities,'bquantity' => $bquantity,'bunits'=>$bunits,'bprice' => $bprice,'bsupplyability'=>$bsupplyability,'selprice' => $selprice,'sunits' => $sunits,'brenegoprice'=>$brenegoprice,'brenegounit'=>$brenegounit,'brenegoquantity'=>$brenegoquantity,'brenegoquantityunit'=>$brenegoquantityunit,'uploadporder'=>$pic_array1,'sellrenegoprice'=>$sellrenegoprice,'sellrenegounits'=>$sellrenegounits);
			
			$status = $this->Admin_model->insert('purchaseoder',$data);
			
			 //$transfer = array('category'=> $scategory, 'auctionid'=>$sauctionid,'sname' => $sname,'date'=>$date);
			   if($status){
				header('location: ./Customer_renegotiation/index/'.$sellerpostproduct_id.'/'.$buyerid);
				  }
			
	}
	}


private function upload_files($nameid)
    {	
	$countfiles = count($_FILES[$nameid]['name']);
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
	
		
		
		
		