<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_contactsupplier extends CI_Controller {

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
		$this->load->view('header');
		$this->load->view('contactsupplier');
		$this->load->view('footer');
		
	}
		public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike('sellerpostproduct','productname',$datatoquerydb);
		if(count($data)){

			foreach($data as $dat){
			$proid = str_ireplace('/','-',$dat['productid']);
			echo '<form class="user">';
			echo '<div class="row  bg-light">';
			echo '<div class="col-sm-2">';
			echo '<div class="col-sm-4">';
			echo '<div class="thumbnail mt-5">';

			$img = unserialize($dat['uploadproductimage']);

			echo '<img class="img" src="'.base_url().'web_files/uploads/'.$img[0].'" alt="Chania" width="200px" height="100px">';
		

			echo '</div>';
		
			echo '</div>';
				
			echo '</div>';
			
			echo '';
			echo '';
			echo '<div class="col-sm-3 p-2">';
			echo '<div class="row p-2">';
			echo '<div class="col-sm-12">';
			echo '';
			
			echo '<p><b>Product Id:</b><div>'.$dat['productid'].'</div></p>';
			echo '<p><b>Category:</b> <div>'.$dat['category'].'</div></p>';
			
			
			 //'<p><b>Supplier Price:</b> <div>'.$dat['price'].'  '.$dat['units'].'</div></p>';
	
			echo '<h6><b>Stock Available:</b>
			<div>'.$dat['quantity'].'  '.$dat['supplyunits'].'</div></h6>';
			echo '';
			echo '';


			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '';
			echo '';
			echo '<div class="col-sm-3 p-2">';
			echo '<div class="row p-2">';
			echo '<div class="col-sm-12">';
			echo '<h4 style="color:purple;"><b><div>'.$dat['productname'].'</div></b></h4>';
			echo '';
			echo '<p class="w-auto small">';
		
			echo '';
			echo '<p><b>Place of Stock:</b><div>'.$dat['pcities'].' | '.$dat['pstates'].'</div></p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '';
			echo '';
			echo '<div class="col-sm-4 p-2">';
			echo '<div class="row p-2">';
			echo '<div class="col-sm-10">';
			echo '<h6 style="color:orange;"><b>Quantity:</b><div>'.$dat['supplyability'].'  '.$dat['supplyunits'].'</div></h6>';
				echo '<h6 style="color:orange;"><b>Supplier price:</b><div>'.$dat['price'].'/  '.$dat['units'].'</div></h6>';
			 //'<div class="form-check mt-3 text-left">';
			 //'<input type="checkbox" class="form-check-input" id="exampleCheck1">';
			//'<label class="form-check-label" for="exampleCheck1">Negotiate</label>';
		 //'</div>';
			//'';
			echo '<form class="col-12">';
			echo '<div class="form-row">';
			echo '<label class="col-sm-6 col-form-label"  for="name">Quantity</label>';
			echo '<input type="text" class="form-control col-sm-2 mr-2" name="name" placeholder="Quantity" id="name" [(ngModel)]="person.name" />';
			echo '<div class="col-sm-3">';
			echo '<select class="form-control col-sm-0" id="type">';
			echo '<option>KG</option>';
			echo '<option>Metric Ton</option>';
			echo '<option>Litre</option>';
			echo '<option>lot</option>';
			echo '<option>litre</option>';
			echo '<option>Number</option>';
			echo '<option>Meter</option>';
			echo '';
			echo '</select>';
			echo '</div>';
			echo '';
			echo '</div>';
			echo '<div class="form-row mt-2">';
			echo '<label class="col-sm-6 col-form-label"  for="name">Your Price</label>';
			echo '<input type="text" class="form-control col-sm-2 mr-2" name="name" placeholder="price" id="name" [(ngModel)]="person.name" />'.'/';
			echo '<div class="col-sm-3">';
			echo '<select class="form-control col-sm-0" id="type">';
			echo '<option>KG</option>';
			echo '<option>Metric ton</option>';
			echo '<option>Litre</option>';
			echo '<option>lot</option>';
			echo '<option>litre</option>';
			echo '<option>Number</option>';
			echo '<option>Meter</option>';
			echo '';
			echo '</select>';
			echo '</div>';
			echo '<a href="'.base_url().'home_login/index/'.$proid.'"><button type="button" class="btn btn-primary btn-sm mt-2 offset-sm-5">submit</button></a>';

							
			echo '</div>';
			echo '</form>';
			echo '';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '';
			echo '<b>Description:</b><div>'.$dat['description'].'</div></p>';
			echo '</div>';
			
			echo '</form>';
			echo '<hr />';
						}
			
		}else{
			
				
			}
			
				
			
			
		}
public function get_product_table(){
	$dataw = urldecode($this->uri->segment(3));
	$this->load->model('Admin_model');
	$search = $this->Admin_model->get_lookalike('sellerpostproduct','productname',$dataw);	
	
	if($search){
		foreach($search as $sear){
			echo "<li onclick=\"getPaging(this.id)\" id=\"".$sear['gettable_search']."\" class=\"option\">".$sear['gettable_search']."</li>\n";
			
		}
	}else{
		echo "<li onclick=\"\" value=\"1\" class=\"option\">No Results</li>";
	}
	
}


	}
	
