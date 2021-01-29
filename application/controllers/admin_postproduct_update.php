<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_postproduct_update extends CI_Controller {

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
		    $vname = $this->input->post('vname');
			$category = $this->input->post('category');
			//$materialname = $this->input->post('materialname');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			
			//$pic_array = $this->input->post('uploadproductimage');
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
		$poptions = $this->input->post('poptions');
		$productvalidityto = $this->input->post('productvalidityto');
		 $productvalidityfrom = $this->input->post('productvalidityfrom');
		
				$_FILES['uploadproductimage']['name'];
			//$pic_array1  = self::upload_files('uploadproductimage'); die;
			 $pic_array1  = self::upload_files('uploadproductimage'); 
		
		     
		     $profileimage[] = $this->input->post('profileimage');
		      $profileimage2 = serialize($profileimage);
			  
		$dataact = array();
		$datacomp = array();
			if($dataact && $datacomp){
			$result = array_diff($dataact,$datacomp);
			$result2 = array_intersect($dataact,$datacomp);
			if(count($result)){
			foreach($result as $res){
			unlink(base_url()."web_files/uploads/".$res);
			}
			}
			
		}
	
			
			if($_FILES['uploadproductimage']['tmp_name'][0]){
		("../web_files/uploads/".$profileimage[0]);
			$pic_array = self::upload_files('uploadproductimage');
			
		}
		
	
		if(!count($pic_array)){
			echo '<script language="javascript">';
			echo 'alert("No Image Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$pic_array = $profileimage2;
		}else{
			$pic_array = serialize($pic_array);
		}
		
		
		//=================================================================================================
		
		
		
		//==================================================================
		$data = array('category'=> $category,'description' => $description,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'minoderquant'=>$minoderquant,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'quantpermonth'=>$quantpermonth,'estdeltime'=>$estdeltime,'pstates'=>$pstates,'types'=>$types,'pcities'=> $pcities,'payable'=> $payable ,'uploadproductimage' => $pic_array,'poptions'=>false,
		'productvalidityto'=>$productvalidityto,'productvalidityfrom'=>$productvalidityfrom);
		
		//print_r($data);die;
		$datainserr = "Data Inserted Successfully";
		$updatech = array('vname'=> $vname,'companyname'=>$companyname,'productid'=>$productid);
		
		$app= array('poptions'=>false);
		$status = $this->Admin_model->update_custom('sellerpostproduct',$data,$updatech,$updatech);
		
	
		header('location: '.base_url().'Admin_adminvendorproducts/index/'.$datainserr);
	
	
	}

	private function upload_files($nameid){
    	//print_r($nameid);
    //$countfiles = count($_FILES[$nameid]['name']);
	$countfiles=1;
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES[$nameid]['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES[$nameid]['name'];
          $_FILES['file']['type'] = $_FILES[$nameid]['type'];
          $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'];
          $_FILES['file']['error'] = $_FILES[$nameid]['error'];
          $_FILES['file']['size'] = $_FILES[$nameid]['size'];

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
		public function approve_product(){
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));

		$retriveval = array('productid'=>$retrivevaltmp);
		
		
		$this->load->model('Admin_model');
		$app= array('poptions'=>false);
		$query = $this->Admin_model->update_custom('sellerpostproduct', $app, $retriveval, $retriveval);
		if($retriveval){
			echo "HI";
		}else{
			echo "BYE";
		}
		}
	
	
}




