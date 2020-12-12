
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_login  extends CI_Controller {

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
		$this->session->sess_expiration = '3600';
		if($this->input->post('user')){
			
			if($this->input->post('ltype')=="Bidder"){
				$table = "buyer_register";
				$colname = "busername";
				$colname2 = "bpassword";
			}else if($this->input->post('ltype')=="Auctioner"){
				$table = "vendor_register";
				$colname = "vusername";
				$colname2 = "vpassword";
			}
			
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$pass = ($pass);
			$check_db = array($colname => $busername, $colname2 => $bpassword,'boptons' => 
			False);
			$this->load->model('Admin_model');
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "buyer_register"){
					  $newdata = array('username'=>$user,'auth'=>'BUYER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'buyer_dashboard');
					  die;
				  }else if($table == "vendor_register"){
					  $newdata = array('username'=>$user,'auth'=>'SELLER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'seller_dashboard');
					  die;
				  }
			  }else{
				  $datainserr = "Invalid Password";
				  header('location: '.base_url().'Home_Login/index_error/'.$datainserr);
				  die;
			  }
			  die;
		}else{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			
	}
	
}
