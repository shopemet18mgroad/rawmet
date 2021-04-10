  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_app_rawmet extends CI_Controller {

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
		if($this->uri->segment(3)){
			$errormsg = urldecode($this->uri->segment(3));
		echo '<script language="javascript">';
		echo	 'alert("'.$errormsg.'")';
		echo '</script>';
		}
		
		$this->load->view('header');
		$this->load->view('index_app');
		$this->load->view('footer');
		
	}
	
	
	public function search()
	{
		$this->load->model('Admin_model');
		$this->load->helper(array('url','html','date'));
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
				
		if($this->session->userdata('username') && $this->session->userdata('auth') == "BUYER")
		{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$active1 = array('buyerid'=>$sess['sessi']);
		 }else{
			$sess['sessi'] = "";
		}
			
 
	
		$productname = $this->input->post('productname');
		$category = $this->input->post('category');
		$myCountry = $this->input->post('myCountry');
		date_default_timezone_set('Asia/Kolkata');
		$data2 = "";  
		$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike_search2('sellerpostproduct','productname','description',$productname,$category, $myCountry);
		if(count($data)){
			foreach($data as $dat){
			$proid = str_ireplace('/','-',$dat['productid']);



			

 $data2 .='<div class="">';
 $data2 .='<div class="row shadow">';
 $data2 .=' <div style="border:1px solid lightgray" class="col-2">
	<p>Seller ID:<b>'.$dat['sellerid'].' </b></p>
	<hr />
	<p>Category:<b>'.$dat['category'].' </b></p>
	<p><b>'.$dat['pcities'].'  '.$dat['pstates'].' </b></p>';
	
	$data2 .=' </div>';
	$data2 .= ' <div style="border:1px solid lightgray ;padding:15px;" class="col-10">';
 
	$data2 .= '  <div class="row">';
	$data2 .= '   <div style="" class="col-3">';
		
    
	
	$img = unserialize($dat['uploadproductimage']);
		if($img){
				$data2 .='<img class="img-thumbnail" src="'.base_url().'web_files/uploads/'.$img[0].'" alt="Chania" width="200px" height="100px">';
			    }else{
				$data2 .='<img class="img" src="'.base_url().'web_files/uploads/emptyproductimg.png" alt="Chania" width="100px" height="100px">';
			}
			
	$data2 .= ' </div>';		
	$data2 .= '  <div style="" class="col-6">
	
	
	<h3>'.$dat['productname'].'</h3><small> <b>Last Modified:</b> '.$dat['datetime'].' | <b>Validity :</b> '.$dat['productvalidityto'].' <br/>Estimated Delivery : <b>'.$dat['estdeltime'].'</b></small><br>
	
		<span style="background:green; color:white;border-radius:5px;" class="heading">4.1</span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<br/><div style="margin:8px">

					<li style="list-style-type: none;">Live Stock : '.$dat['supplyability'].'  '.$dat['supplyunits'].'</li>
					<li style="list-style-type: none;">Supplier Expected price : '.$dat['price'].'/  '.$dat['punits'].'</li>
					<li style="list-style-type: none;" >Supply Ability : '.$dat['quantity'].'  '.$dat['units'].'</li>
					
					<i style="" class="fa fa-certificate" aria-hidden="true"></i> 
					<i class="fa fa-shield" aria-hidden="true"></i>
					
 
 </div>
	</div>';
	
	$data2 .= ' <div style="padding-top:20px" class="col-3">
	 
	 
	<img style="float:right" class="img" src="'.base_url().'web_files/uploads/virifed.png'.'" alt="Chania" width="60px" height="20px">
	 
	<form class="user" action="'. base_url().'Home_add_contactsupplier/'.'" method="POST" enctype="multipart/form-data">
	
	<input type="hidden" class="form-control" id="sellerpostproduct_id" name="sellerpostproduct_id"  value="'.$dat['id'].'">';
	
	  
	
	$data2 .= '<input type="hidden" class="form-control" id="productname" name="productname"  value="'.$dat['productname'].'"> 
	
	
	 
	 <input type="hidden" class="form-control" id="uploadproductimage" name="uploadproductimage" value="'.$img[0].'">
	
	<input type="hidden" class="form-control" id="description" name="description"  value="'.  $dat['description'].'">

	<input type="hidden" class="form-control" id="productid" name="productid"  value="'.  $dat['productid'].'">

	<input type="hidden" class="form-control" id="id" name="id"  value="'.  $dat['id'].'">
	
	<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="'.  $dat['sellerid'].'">';
	
	 if(isset($sess["sessi"])){
		$data2 .= '<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="'.$sess["sessi"].'">';
	}else{
		$data2 .= '<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="">';
	};
	
	
	

	
	$data2 .= ' <input type="hidden" class="form-control" id="category" name="category"  value="'.  $dat['category'].'">
	
 
	<input type="hidden" class="form-control" id="companyname" name="companyname"  value=
	"'.  $dat['companyname'].'">
	
	<input type="hidden" class="form-control" id="price" name="price"  value="'.  $dat['price'].'">
	
	<input type="hidden" class="form-control" id="punits" name="punits"  value="'.  $dat['punits'].'">
	
	<input type="hidden" class="form-control" id="quantity" name="quantity"  value="'.  $dat['quantity'].'">
	
	<input type="hidden" class="form-control" id="units" name="units"  value="'.  $dat['units'].'">
	
	<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="'.  $dat['supplyability'].'">
	
	<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="'.  $dat['supplyunits'].'">
	
	<input type="hidden" class="form-control" id="pcities" name="pcities"  value="'.  $dat['pcities'].'">
	
	<input type="hidden" class="form-control" id="pstates" name="pstates"  value="'.  $dat['pstates'].'">

	<input type="hidden" class="form-control" id="datetime" name="datetime"  value="'.  $dat['datetime'].'">
	
	<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="'.  $dat['estdeltime'].'">
	
	<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="'. $dat['productvalidityto'].'">
	
	<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="'.  $dat['supplyunits'].'">
	
	
  <div class="row" style="margin-top:30px;">
    <div class="col">
       <input type="text" class="form-control" id="bquantity" name="bquantity" placeholder="Required Quantity:">
    </div>
    <div class="col">
      <select class="form-control col-sm-0" id="bunits" name="bunits">
	   <option>KG</option> 
			 <option>Metric ton</option> 
			 <option>Litre</option> 
			 <option>lot</option> 
		
			 <option>Number</option> 
			 <option>Meter</option> 
	  
	  </select>
	  
    </div>
  </div>
  <br/>
    <div style="float:left" class="row">
    <div style="float:left" class="col">
      <input type="text" class="form-control" id="bprice" placeholder="Ask for Your Price" name="bprice">
    </div>
    <div class="col">
       <select class="form-control col-sm-0" id="bsupplyability" name="bsupplyability">
	   <option>KG</option> 
			 <option>Metric ton</option> 
			 <option>Litre</option> 
			 <option>lot</option> 
		
			 <option>Number</option> 
			 <option>Meter</option> 
	  
	  </select>
    </div>
	
	</div><br/>
	';
	


if($sess['sessi'] != ""){
		$data2 .= '<input type="submit" name="submit" role="submit" value="Submit" class="btn btn-info btn-sm mt-2 offset-sm-5" style="font-size:13px" />';
	}else{
		$data2 .= '<button style="font-size:16px" type="button" class="btn btn-warning btn-sm mt-2 offset-sm-5" data-toggle="modal" data-target="#new_userlogin">Login</button>';
	}
	
	
	

$data2 .= '</form>
	  
	
	 
<br/><div style="margin:8px;">

			 
					
 </div>
 
	</div>';
	
	
			 					
		$data2 .= ' </div>';		
		$data2 .= ' <hr>  
				Description:
				 '.$dat['description'].'
				
				</div>';
				
				 
			
			$data2 .= ' </div>';
			
			$data2 .= '<hr>  </div>';
			 
  
						}
			
	
			
		


		$datapass['sr'] = $data2;
			$datapass['sessi'] = $sess;
	    $this->load->view('header1',$sess);
	   $this->load->view('search',$datapass);
		$this->load->view('footer1');
		$this->load->helper('url');
	
		
	}
	
		
		
		
		
		

		
		
		
		
			
		
	}
	
		public function login(){
			
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_expiration = '3600';
		if($this->input->post('user')){
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyer_register";
				$colname = "buyerid";
				$colname2 = "bpassword";
			     $status ="boptions";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "vendor_register";
				$colname = "sellerid";
				$colname2 = "vpassword";
				$status ="voptions";
			}else{
				$table = "adminprofile";
				$colname = "ausername";
				$colname2 = "apassword";
				$status="aoptions";
			  }
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$pass = base64_encode($pass);
			$check_db = array($colname => $user, $colname2 => $pass, $status=>true);
			$this->load->model('Admin_model');
			$productid= $this->uri->segment(3);
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "buyer_register"){
					  $newdata = array('username'=>$user,'auth'=>'BUYER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'home/search');
					  die;
				  }else if($table == "buyer_register"){
					  $this->load->model('Admin_model');
					$productid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
					  $newdata = array('username'=>$user,'auth'=>'BUYER','logged_in' => TRUE,'productid'=>$productid);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'home_contactsupplier/index/');
					  die;
				  }else if($table == "vendor_register"){
					  $newdata = array('username'=>$user,'auth'=>'SELLER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'vendor_indexm');
					  die;
				  }else if($table == "adminprofile"){
					  $newdata = array('username'=>$user,'auth'=>'ADMIN','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					 header('location: '.base_url().'admin_indexm');
					 die; 
				  }
			  }else{
				  $datainserr = "Invalid Password";
				  header('location: '.base_url().'home/search/'.$datainserr);
				  die;
			  }
			  die;
		}else{
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
		}
			public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo  'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo  '</script>';
			$this->load->view('header');
			$this->load->view('login_pp');
			$this->load->view('footer');
			
	}
		
		
	
	public function buyerlogin(){
		
		
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('buyerid'=>$sess['sessi']);
		 
			{

		$this->load->helper(array('url','html','date'));
		$productname = $this->input->post('productname');
		$category = $this->input->post('category');
		$myCountry = $this->input->post('myCountry');
		date_default_timezone_set('Asia/Kolkata');
		$data2 = "";  
		$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike_search2('sellerpostproduct','productname','description',$productname,$category, $myCountry);
		if(count($data)){
			foreach($data as $dat){
			$proid = str_ireplace('/','-',$dat['productid']);



			

 $data2 .='<div class="">';
 $data2 .='<div class="row shadow">';
 $data2 .=' <div style="border:1px solid lightgray" class="col-2"><p>
			<b>'.$dat['category'].' </b></p>
				
				
				<hr />
					<li style="list-style-type: none;"><a href="">Iron</a></li>
					<li style="list-style-type: none;"><a href="list-style-type: none;">Copper</a></li>
					<li style="list-style-type: none;"><a href="list-style-type: none;">Aluminum</a></li>
			
			
				';
				$data2 .=' </div>';
				
			
				$data2 .= ' <div style="border:1px solid lightgray ;padding:15px;" class="col-10">';
 
			
				
		 
	$data2 .= '  <div class="row">';
	$data2 .= '   <div style="" class="col-3">';
		
    $img = unserialize($dat['uploadproductimage']);
		if($img){
				$data2 .='<img class="img-thumbnail" src="'.base_url().'web_files/uploads/'.$img[0].'" alt="Chania" width="200px" height="100px">';
			    }else{
				$data2 .='<img class="img" src="'.base_url().'web_files/uploads/emptyproductimg.png" alt="Chania" width="100px" height="100px">';
			}
			
	$data2 .= ' <h6>'.$dat['pcities'].' | '.$dat['pstates'].'</h6></div>';		
	$data2 .= '  <div style="" class="col-6">
	
	
	<h3>'.$dat['productname'].'</h3><small> <b>Last Modified:</b> '.$dat['datetime'].' | <b>Validity :</b> '.$dat['productvalidityto'].' <br/>Estimated Delivery : <b>'.$dat['estdeltime'].'</b></small><br>
	
		<span style="background:green; color:white;border-radius:5px;" class="heading">4.1</span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<br/><div style="margin:8px">

					<li style="list-style-type: none;">Live Stock : '.$dat['supplyability'].'  '.$dat['supplyunits'].'</li>
					<li style="list-style-type: none;">Supplier price : '.$dat['price'].'/  '.$dat['punits'].'</li>
					<li style="list-style-type: none;" >Total Quantity : '.$dat['quantity'].'/  '.$dat['units'].'</li>
					
					<i style="" class="fa fa-certificate" aria-hidden="true"></i> 
					<i class="fa fa-shield" aria-hidden="true"></i>
					
 
 </div>
	</div>';
	
	$data2 .= ' <div style="padding-top:20px" class="col-3">
	 
	 
	<img style="float:right" class="img" src="'.base_url().'web_files/uploads/virifed.png'.'" alt="Chania" width="60px" height="20px">;
	 
	<form class="user" action="'. base_url().'Customer_add_contactsupplier/index/'.'" method="POST" enctype="multipart/form-data">
	
	<input type="hidden" class="form-control" id="sellerpostproduct_id" name="sellerpostproduct_id"  value="'.$dat['id'].'">
	
	<input type="hidden" class="form-control" id="productname" name="productname"  value="'.$dat['productname'].'">
	
	<input type="hidden" class="form-control" id="description" name="description"  value="'.  $dat['description'].'">

	<input type="hidden" class="form-control" id="productid" name="productid"  value="'.  $dat['productid'].'">

	<input type="hidden" class="form-control" id="id" name="id"  value="'.  $dat['id'].'">
	
	<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="'.  $dat['sellerid'].'">
	

	<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="'.  $dat['buyerid'].'"> 
	
	<input type="hidden" class="form-control" id="category" name="category"  value="'.  $dat['category'].'">
 
	<input type="hidden" class="form-control" id="companyname" name="companyname"  value=
	"'.  $dat['companyname'].'">
	
	<input type="hidden" class="form-control" id="price" name="price"  value="'.  $dat['price'].'">
	
	<input type="hidden" class="form-control" id="punits" name="punits"  value="'.  $dat['punits'].'">
	
	<input type="hidden" class="form-control" id="quantity" name="quantity"  value="'.  $dat['quantity'].'">
	
	<input type="hidden" class="form-control" id="units" name="units"  value="'.  $dat['units'].'">
	
	<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="'.  $dat['supplyability'].'">
	
	<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="'.  $dat['supplyunits'].'">
	
	<input type="hidden" class="form-control" id="pcities" name="pcities"  value="'.  $dat['pcities'].'">
	
	<input type="hidden" class="form-control" id="pstates" name="pstates"  value="'.  $dat['pstates'].'">

	<input type="hidden" class="form-control" id="datetime" name="datetime"  value="'.  $dat['datetime'].'">
	
	<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="'.  $dat['estdeltime'].'">
	
	<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="'.  $dat['productvalidityto'].'">
	
	<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="'.  $dat['supplyunits'].'">
	
	
  <div class="row" style="margin-top:30px;">
    <div class="col">
       <input type="text" class="form-control" id="bquantity" name="bquantity" placeholder="Quantity:">
    </div>
    <div class="col">
      <select class="form-control col-sm-0" id="bunits" name="bunits">
	   <option>KG</option> 
			 <option>Metric ton</option> 
			 <option>Litre</option> 
			 <option>lot</option> 
		
			 <option>Number</option> 
			 <option>Meter</option> 
	  
	  </select>
	  
    </div>
  </div>
  <br/>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="bprice" placeholder="Price" name="bprice">
    </div>
    <div class="col">
       <select class="form-control col-sm-0" id="bsupplyability" name="bsupplyability">
	   <option>KG</option> 
			 <option>Metric ton</option> 
			 <option>Litre</option> 
			 <option>lot</option> 
		
			 <option>Number</option> 
			 <option>Meter</option> 
	  
	  </select>
    </div>
	
	</div><br/>
	<input type="submit" name="submit" role="submit" value="Submit" class="btn btn-info btn-sm mt-2 offset-sm-5" style="font-size:13px" >
</form>
	  
	
	 
<br/><div style="margin:8px">

				 
					
 </div>
 
	</div>';
	
	
			 					
		$data2 .= ' </div>';		
		$data2 .= ' <hr>  
				Description 
				 '.$dat['description'].'
				
				</div>';
				
				 
			
			$data2 .= '  </div>';
			
			$data2 .= '<hr>  </div>';
			 
  
						}
			
	
			
		}


		$datapass['sr'] = $data2;
			
	    $this->load->view('header1',$sess);
	   $this->load->view('search',$datapass);
		$this->load->view('footer1');
		$this->load->helper('url');
	
		
	}
	
		
		
		
		
		

		
		
		
		
			
	}
	
}
	public function Addtocart(){

	
		
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
		
			$uploadproductimage  = serialize($this->input->post('uploadproductimage')); 
	
	
	      
			$data2 = array('productname' => $productname,'vname'=>$vname,'busername'=>$busername,'category'=> $category,'description' => $description,'price'=>$price,'quantity'=>$quantity,'units'=>$units,'supplyability'=>$supplyability,'supplyunits'=> $supplyunits,'pstates'=>$pstates,'pcities'=> $pcities,'productid'=>$productid ,'companyname'=>$companyname, 'negotiate' => $negotiate, 'bquantity'=> $bquantity, 'bprice'=>$bprice, 'bsupplyability' => $bsupplyability, 'bunits'=> $bunits,'datetime'=>$datetime,'estdeltime'=>$estdeltime,'productvalidityto'=>$productvalidityto,'uploadproductimage'=>$uploadproductimage );
			
				 
			  
				$datainserr = "Data Inserted Successfully";
			$status = $this->Admin_model->insert('quotes',$data2);
			header('location: ./customer_sellernegotiatedquote/index/'.$datainserr);
		
			
		}
			
	
				$this->load->model('Admin_model');
				$this->load->library('session');
				$sess = array('sessi'=>$this->session->userdata('username'));
	
				
				
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/sellernegotiatedquote');
		$this->load->view('customer/footer');
			 
	 

			
		
		
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
	
