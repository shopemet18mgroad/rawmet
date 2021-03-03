
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_sellernegotiatedquote extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
			}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active1 = array('buyerid'=>$sess['sessi']);
		
		$id = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$active = array('id'=>$id);
		$query['sqldata'] = $this->Admin_model->getdatafromtable_buyer_seller($active);
		//print_r($query['sqldata'] ); die;
		
		
		$this->load->view('customer/header',$sess);
		$this->load->view('customer/sellernegotiatedquote',$query);
		$this->load->view('customer/footer');
		$this->load->helper('url');
		
		
		
		}

			
	}
	
/* 		
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->helper(array('url','html','date'));
		//date_default_timezone_set('Asia/Kolkata');
		//$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike_buyer('sellerpostproduct','productname',$datatoquerydb);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Product Id</th>';
			echo '<th>Product Name</th>';
			echo '<th>Category</th>';
			echo '<th>Price</th>';
			echo '<th>Quantity</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				$proid = str_ireplace('/','-',$dat['productid']);
				
				
				echo '<td><a href="'.base_url().'customer_contactsupplier/index/'.$proid.'/'.($dat['vname']).
				'">';
				echo $dat['productid'];
				
				echo '</a>';
				echo '</td>';
				echo '<td>'.$dat['productname'].'</td>';
				echo '<td>'.$dat['category'].'</td>';
				echo '<td>'.$dat['price']."/".$dat['punits'].'</td>';
				echo '<td>'.$dat['quantity']." ".$dat['units'].'</td>';
				
				echo '<td><a href="'.base_url().'customer_contactsupplier/index/'.($dat['id'])."/".($dat['buyerid']).'">';
				echo '<button class="btn btn-info">Negotiate</button>';
				echo '</a>';
			
				echo '</a>';
				echo '</td>';
				
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
		echo '<th>Product Id</th>';
			echo '<th>Product Name</th>';
			echo '<th>Supplier Name</th>';
			echo '<th>Category</th>';
			//echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
			//	echo '<td>No Records Found</td>';
				echo '</a>';
				echo '</td>';
				echo '</tr>';
				echo '</tbody>';
				echo '</table>';
		}



	} */
	
	
	
		
	}

		
