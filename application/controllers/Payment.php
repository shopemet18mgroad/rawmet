
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

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
	public function response()
	{
	
		$this->load->model('Admin_model');
		$this->load->library('session');
   $this->load->helper(array('url','form','file','html'));
  
$msg = '';
if (isset($postdata ['key'])) {
	$key				=   $this->input->post('key');
	$salt				=   "3Rv6t8zCFh";
	$txnid 				= 	$this->input->post('txnid');
    $amount      		= 	$this->input->post('amount');
	$productInfo  		= 	$this->input->post('productinfo');
	$firstname    		= 	$this->input->post('firstname');
	$email        		=	$this->input->post('email');
	$udf5				=   $this->input->post('udf5');
	$mihpayid			=	$this->input->post('mihpayid');
	$status				= 	$this->input->post('status');
	$resphash				= 	$this->input->post('hash');
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));
	
	
	if ($status == 'success'  && $resphash == $CalcHashString) {
		$msg = "Transaction Successful and Hash Verified...";
		//Do success order processing here...
	}
	else {
		//tampered or failed
		$msg = "Payment failed for Hasn not verified...";
	} 
}
else exit(0);
			
	
	
	
	


	}	
	
	}