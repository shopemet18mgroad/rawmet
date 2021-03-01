<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
           
   class Admin_model extends CI_Model {	
 
		  function __construct() { 
			 parent::__construct(); 
			$this->load->database(); 
		  } 
		  public function insert($table, $data) { 
			 if ($this->db->insert($table, $data)) { 
				return true; 
			 } 
		  } 
		 public function check($table, $data) { 
			 $query = $this->db->get_where($table, $data); 
					if ($query->num_rows() == 0 )
					{
					   return FALSE;
					}else{
						return TRUE;
					}
		 } 
	 
		public function getdatafromtable($table, $data) {
			$query = $this->db->get_where($table, $data); 
			 return $query->result();
		}

		 public function getdatafromtable_neg() {
			 $id = $this->session->userdata('username');
			$this->db->select('
					b.buyer_nego_price,
					b.buyer_nego_units,					 
					a.id,
					a.bname,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					a.status,
					a.uploadimage,				
					a.productid,
					a.productname,
					a.category,
					a.vusername,
					a.bcompanyname,
					a.buyerid,
					a.sellerid');
$this->db->where('a.buyerid', $id);						
					$this->db->join('buyer_req_response b', 'a.id=b.seller_mbuyreq_id',
					'left outer');		     			
					$query = $this->db->get("seller_mbuyreq a");
			   
			 return $query->result();
		}
		
		public function getdatafromtableliveneg() {
			$this->db->select('b.buyerrequriement_id,
					b.bname,
					b.productid,
					b.productname,
					b.bname,
					b.bcompanyname,
					b.description,
					b.buyerrequriement_id,
					a.id');
					$this->db->group_by('b.productid');
					$this->db->where('a.adapproval', 1);
					$this->db->join('seller_mbuyreq b', 'a.id=b.buyerrequriement_id',
					'left outer');		     			
					$query = $this->db->get("buyerrequriement a");
			   
			 return $query->result();
		}
		
		
		public function get1datafromtable($table, $data) { 
			 $this->db->select('vcompanyname');
			 $this->db->select('vname');  
			 $this->db->select('sellerid'); 			  
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
		public function getusernamedatafromtable($table, $data) { 
			 //$this->db->select('scomapnyname');
			  $this->db->select('vusername');
			   $this->db->select('sellerid'); 	
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
		public function getbusernamedatafromtable($table, $data) { 
			 //$this->db->select('scomapnyname');
			  $this->db->select('buyerid');
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
			public function getbuyerdatafromtable($table, $data) { 
			 $this->db->select('bcompanyname');
			  $this->db->select('bname');
			  $this->db->select('buyerid');
			  $this->db->select('bemail');
			  $this->db->select('bcontactnumber');
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
		
		public function datebetween($table, $date){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('saucstartdate_time <=', $date);
			$this->db->where('saucclosedate_time >=', $date);
			$query = $this->db->get();
			return $query->result();
		}
		
		
		public function datebetweensess($table, $date, $sessi){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('aucstartdate_time <=', $date);
			$this->db->where('aucclosedate_time >=', $date);
			$this->db->where('bidderusername =', $sessi);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function datebetweensess2($table, $date, $sessi){
			$this->db->select('*');
			$this->db->from($table);
			//$this->db->where('aucstartdate_time <=', $date);
			$this->db->where('aucclosedate_time <', $date);
			$this->db->where('bidderusername =', $sessi);
			$query = $this->db->get();
			return $query->result();
		} 
		
		public function maxbidvalue($table,$auctmp, $auclottmp){
			$this->db->select('*');
			$this->db->from($table);
			//$this->db->where('mybid_val >', $compdata);
			$this->db->where('auctionid =', $auctmp);
			$this->db->where('lotno =', $auclottmp);
			$query = $this->db->get();
			return $query->result();
		} 
		 
		
		public function gettable($table) { 
			 $query = $this->db->get($table); 
			 return $query->result();
		}    
		public function getdatafromtablejoin($table,$table2,$joincolname,$compdata){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->join($table2, "$table.$joincolname = $table2.$joincolname");
			$this->db->where("$table2.sname", $compdata);
			$query = $this->db->get();
			return $query->result();
		}
		
		  public function delete_data($table, $data) { 
			 if ($this->db->delete($table, $data)) { 
				return true; 
			 } 
		  } 
   
		  public function update($table,$data,$comp) { 
			 $this->db->set($data); 
			 $this->db->where("cat_name", $comp); 
			 $this->db->update($table, $data); 
		  } 
		  public function update_custom($table,$data,$colname,$comp) { 
			 $this->db->set($data); 
			 $this->db->where($colname, $comp);
			 $this->db->update($table, $data); 
		  } 
		  public function get_distinct($table,$col,$id) { 
			$this->db->select($col);
			$this->db->distinct();
			//$query = $this->db->get($table);
			$query = $this->db->get_where($table, array("prod_id"=>$id));
			return $query->result();
		  } 
		   
		  public function get_lookalike($table,$col,$query){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$q = $this->db->get();
			return $q->result_array();
		  }
		  public function get_lookalike_search($table,$col,$col2,$query){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$this->db->or_like($col2,$query);
			//$this->db->where('comapprove',1);
			$q = $this->db->get();
			return $q->result_array();
		  }
		  public function get_lookalike_search2($table,$col,$col2,$query,$cat,$loc){
			$this->db->from($table);
			$this->db->like($col,$query);
			$this->db->or_like($col2,$query);
			$this->db->where('types',$cat);
			$this->db->or_where(array('pstates'=>$loc,'pcities'=>$loc));
			$this->db->where('comapprove',1);
			$q = $this->db->get();
			return $q->result_array();
		}
			function fetch_all()
			 {
			  $query = $this->db->get("auction");
			  return $query->result();
			 }
		
		public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('biddercart');  
         return $query;  
      }

     
	function getAllbuyReqlist() {
			
		$this->db->select('a.buyerid,
		a.bcity,
		a.bselectstate,a.bname,
		
		b.productname,
		b.uploadimage,
		b.productid,
		b.bcompanyname,
		b.description,
		b.price,
		b.buyerid,
		b.priceperkg,
		b.quantity,
		b.units');
			
			$this->db->join('buyerrequriement b','a.buyerid = b.buyerid','left outer');
			
	 
		
			$query = $this->db->get("buyer_register a");
			 $result = $query->result();
			  return $result;

		
		}	  
		
	  
		function getdatafromtable_buyer() {	
			$id = $this->session->userdata('username');
			//$buyerid = $this->session->userdata('a.id');
			$this->db->select('b.buyerrequriement_id,
					b.buyerid,
					b.productid,
					b.quantity as seller_qua,
					b.units,
					b.price,
					b.vusername,				
					a.id,
					a.price,
					a.priceperkg,
					a.quantity,
					a.email,
					a.buyerid,a.*, count(b.productid) as cnt');				
					$this->db->group_by('a.id');
					//$this->db->where('b.status', 0);
					$this->db->where('a.buyerid', $id);					
					 
					
					$this->db->join('seller_mbuyreq b', 'a.id=b.buyerrequriement_id',
					'left outer');	
			     			
					$query = $this->db->get("buyerrequriement a");
					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			} 
			
			function getdatafromtable_buyer2() {
			 $id = $this->session->userdata('username');  
			$this->db->select('
					
					a.buyer_nego_price,
					a.buyer_nego_units,		
					a.seller_mbuyreq_id,
					a.status,
					 					
					b.id,
					b.buyerid,
					b.bname,				 
					b.productid,
					b.bcompanyname,
					b.category,
					b.productname,
					b.description,
					b.quantity,
					b.priceperkg,
					b.sellerprice,
					b.bsupplyability,
					b.units,
					b.price,
					b.vusername,
					b.sellerid,
					');
					$this->db->where('b.buyerid', $id);				 			
					$this->db->join('seller_mbuyreq b', 'a.seller_mbuyreq_id=b.id',
					'left outer');			   
					$query = $this->db->get("buyer_req_response a");
					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			  
	 function getdatafrom_vregistration24($seller_mbuyreq_id) {
			
		$this->db->select('
		
		
		a.id,
		a.productname,
		a.description,
		a.sellerprice,
		a.bsupplyability,
		a.quantity,
		a.units,
		a.sellerid,
		 
		 b.buyer_nego_price,
		 b.buyer_nego_units,
		 b.seller_mbuyreq_id,
		 
		 c.seller_renego_price,
		 c.seller_renego_units'
		
		);
		$this->db->where('c.seller_mbuyreq_id', $seller_mbuyreq_id);
			
			$this->db->join('seller_req_response c','c.seller_mbuyreq_id = a.id','left outer');
			$this->db->join('buyer_req_response b','b.seller_mbuyreq_id = a.id','left outer');
			$query = $this->db->get("seller_mbuyreq a");
			 $result = $query->result();
			  return $result;

		
		}
		
		 function getdatafrom_vregistration25($seller_mbuyreq_id) {
			
		$this->db->select('
		
		
		a.id,
		a.productname,
		a.description,
		a.sellerprice,
		a.bsupplyability,
		a.quantity,
		a.units,
		a.sellerid,
		
		 b.buyer_nego_price,
		 b.buyer_nego_units,
		 b.seller_mbuyreq_id,
		 
		 c.seller_renego_price,
		 c.seller_renego_units,
		 
		 d.buyer_final_price,
		 d.buyer_final_units'
		 
		
		);
		$this->db->where('c.seller_mbuyreq_id', $seller_mbuyreq_id);
			
			
			$this->db->join('buyer_final_req d','d.seller_mbuyreq_id = a.id','left outer');
			
			$this->db->join('seller_req_response c','c.seller_mbuyreq_id = a.id','left outer');
			
			$this->db->join('buyer_req_response b','b.seller_mbuyreq_id = a.id','left outer');
			
			$query = $this->db->get("seller_mbuyreq a");
			 $result = $query->result();
			  return $result;

		
		}
		
		 

		function getdatafrom_vregistration23($seller_mbuyreq_id) {
			
		$this->db->select('
		
		a.id,
		a.productname,
		a.description,
		a.sellerprice,
		a.bsupplyability,
		a.quantity,
		a.units,
		a.sellerid,
		 
		 b.buyer_nego_price,
		 b.buyer_nego_units'
		
		);
		$this->db->where('b.seller_mbuyreq_id', $seller_mbuyreq_id);
			$this->db->join('buyer_req_response b','a.id = b.seller_mbuyreq_id','left outer');
			
			$query = $this->db->get("seller_mbuyreq a");
			 $result = $query->result();
			  return $result;

		
		}	  
			
			
			
			function getdatafromtable_buyer10() {
			$id = $this->session->userdata('username'); 				
			$this->db->select('
					
					a.buyer_nego_price,
					a.buyer_nego_units,		
					a.seller_mbuyreq_id,
					a.status,
					
					
					b.bname,
					b.productid,
					b.bcompanyname,
					b.category,
					b.productname,
					b.description,
					b.quantity,
					b.priceperkg,
					b.sellerprice,
					b.bsupplyability,
					b.units,
					b.price,
					b.vusername');
					
					$this->db->where('a.status', 1);	
					$this->db->where('b.buyerid', $id);
					$this->db->join('seller_mbuyreq b', 'a.seller_mbuyreq_id=b.id',
					'left outer');			   
					$query = $this->db->get("buyer_req_response a");
					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			function getdatafromtable_seller10() {
			$id = $this->session->userdata('username'); 				
			$this->db->select('
					
					a.buyer_nego_price,
					a.buyer_nego_units,		
					a.seller_mbuyreq_id,
					a.status,
					
					
					b.bname,
					b.productid,
					b.bcompanyname,
					b.category,
					b.productname,
					b.description,
					b.quantity,
					b.priceperkg,
					b.sellerprice,
					b.bsupplyability,
					b.units,
					b.price,
					b.vusername');
					
					$this->db->where('a.status', 1);	
					$this->db->where('b.sellerid', $id);
					$this->db->join('seller_mbuyreq b', 'a.seller_mbuyreq_id=b.id',
					'left outer');			   
					$query = $this->db->get("buyer_req_response a");
					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			function getdatafromtable_admin10() {				
			$this->db->select('
					
					a.buyer_nego_price,
					a.buyer_nego_units,		
					a.seller_mbuyreq_id,
					a.status,
					
					
					b.bname,
					b.productid,
					b.bcompanyname,
					b.category,
					b.productname,
					b.description,
					b.quantity,
					b.priceperkg,
					b.sellerprice,
					b.bsupplyability,
					b.units,
					b.price,
					b.vusername');
					
					$this->db->where('a.status', 1);	
					$this->db->join('seller_mbuyreq b', 'a.seller_mbuyreq_id=b.id',
					'left outer');			   
					$query = $this->db->get("buyer_req_response a");
					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			function getdatafrombuyer_req_response()  {
			 $id = $this->session->userdata('username');
						 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,
			c.buyer_approval,
			c.seller_renego_price,
			c.seller_renego_units,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,a.bsupplyability');
					
					$this->db->where('a.sellerid', $id);
					//$this->db->where('b.status', 0);
					$this->db->join('buyer_req_response b', 'a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id',
					'left outer');					
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			
			function getdatafrombuyer_req_response121($id) {			 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.buyerid,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					C.seller_renego_price,
					C.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status');					
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					
					$this->db->join('seller_req_response c', 'c.seller_mbuyreq_id=b.seller_mbuyreq_id',
						'left outer');
					$this->db->join('buyer_final_req d', 
						'c.seller_mbuyreq_id=d.seller_mbuyreq_id',
						'left outer');
						
					$this->db->where('a.id',$id);					
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			
			
			function getdatafrombuyer_req_response1($id) {			 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.buyerid,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status');					
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					
					$this->db->join('seller_req_response c', 'c.seller_mbuyreq_id=b.seller_mbuyreq_id',
						'left outer');
					$this->db->join('buyer_final_req d', 
						'd.seller_mbuyreq_id=c.seller_mbuyreq_id',
						'left outer');
						
					$this->db->where('a.id',$id);					
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			} 
			
			function req_approval($id) {			 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,
b.status,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					c.buyer_approval,
					d.buyer_final_price,
					d.sel_status');					
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'c.seller_mbuyreq_id=d.seller_mbuyreq_id','left outer');
					$this->db->where('a.id',$id);
					
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			
			
			function getdatafrombuyer_req_response30() {			 
			$this->db->select('		
					b.buyer_final_price ,						
					b.buyer_final_units,
					b.seller_mbuyreq_id,
					b.sel_status,
					 
					a.seller_renego_price,
					a.seller_renego_units,
					a.seller_mbuyreq_id');					
					$this->db->join('buyer_final_req b','a.seller_mbuyreq_id=b.seller_mbuyreq_id',
					'left outer');						 
					//$this->db->where('a.id',$id);					
					$query = $this->db->get("seller_req_response a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			
			
			
			
		 function getdatafrombuyer_req_response2($id) {			 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,
b.status,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units');					
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'c.seller_mbuyreq_id=d.seller_mbuyreq_id','left outer');
					$this->db->where('a.id',$id);					
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			 
			function getUserData($strUID1){
				$this->db->where("productid",$strUID1);
				 //$this->db->where('status',0);
				$query = $this->db->get("seller_mbuyreq");
				$result = $query->result();
				return $result;
			} 
 
			function getUserDatalive($strUID1)	
			
			{
				$this->db->select('
				
						a.id,
						a.bsupplyability,
						a.vusername,
						a.sellerprice,
						
						b.buyer_nego_price,
						b.buyer_nego_units,
						
						c.seller_renego_price,
						c.seller_renego_units,
						
						d.buyer_final_price,
						d.buyer_final_units'); 
						
						//$this->db->where('b.status', 0);
						$this->db->where('a.bcompanyname', $strUID1);						
						$this->db->group_by('a.sellerid');
						$this->db->join('buyer_req_response b', 'a.id=b.seller_mbuyreq_id',
						'left outer');
						
						$this->db->join('seller_req_response c', 'c.seller_mbuyreq_id=b.seller_mbuyreq_id',
						'left outer');

						$this->db->join('buyer_final_req d', 
						'd.seller_mbuyreq_id=c.seller_mbuyreq_id',
						'left outer');
						
						
						
						$query = $this->db->get("seller_mbuyreq a");
				   		return $query->result();
			}
			
			
			
			// {
			// 	$this->db->where("buyerrequriement_id",$strUID1);				 
			// 	$query = $this->db->get("seller_mbuyreq");
			// 	$result = $query->result();
			// 	return $result;
			// }
			
			// function getUserDatalive($strUID1){


			// 	$this->db->select('		
			// 		a.bname,
			// 		b.buyerrequriement_id,			
			// 		b.id,
			// 		b.sellerprice');					
			// 		$this->db->join('seller_mbuyreq b','a.id=b.buyerrequriement_id',
			// 		'left outer');					
			// 		$this->db->where('b.buyerrequriement_id',$buyerrequriement_id);					
			// 		$query = $this->db->get("buyerrequriement a");					 
			// 		$result = $query->result();	
			// 		//echo $this->db->last_query();exit;			
			// 		return $result;
				



			// 	// $this->db->where("productid",$strUID1);				 
			// 	// $query = $this->db->get("buyerrequriement");
			// 	// $result = $query->result();
			// 	// return $result;
			// }

			
			
		/*  function getdatafromtable_sellerqut($table,$adac) {		 
			      
			$this->db->where('productid =', $adac);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
	
		} */
		
	 public function getdatafromtable_sellerqut($table, $data) { 
			 $this->db->select('productid');			 
			 $query = $this->db->get($table, $data); 
			 return $query->result();
		}
					
 
					 
				 	
	function getsellerrenego_data() {

			$this->db->select('
			b.buyer_nego_price,
			b.buyer_nego_units,
			b.bname,
			
			c.seller_renego_price,
			c.seller_renego_units,
			c.vusername,	
			c.buyer_approval,
			
            a.bcompanyname,			
			a.category,
			a.productname,
			a.productid,
			a.quantity,
			a.units,
			a.price,
			a.priceperkg,
			a.sellerprice,
			a.bsupplyability');	
			
			
            $this->db->join('seller_mbuyreq a', 'a.buyerrequriement_id=b.seller_mbuyreq_id','left outer');
			
			$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');			
			$query = $this->db->get("buyer_req_response b");
        $result = $query->result();
     //echo $this->db->last_query(); exit;
        return $result;


    }
	
	function getsellerrenego_data5() {
			$id = $this->session->userdata('username'); 
			$this->db->select('
			b.buyer_nego_price,
			b.buyer_nego_units,
			b.bname,
			
			c.seller_renego_price,
			c.seller_renego_units,
			c.vusername,	
			c.buyer_approval,
			
            a.buyerid,
			a.bcompanyname,			
			a.category,
			a.productname,
			a.productid,
			a.quantity,
			a.units,
			a.price,
			a.priceperkg,
			a.sellerprice,
			a.bsupplyability');	
			
			$this->db->where('a.sellerid', $id);
            $this->db->join('seller_mbuyreq a', 'a.id=b.seller_mbuyreq_id','left outer');
			$this->db->where('c.buyer_approval !=', 1);			 
			$this->db->or_where('b.status', 5);
			$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');			
			$query = $this->db->get("buyer_req_response b");
        $result = $query->result();
     //echo $this->db->last_query(); exit;
        return $result;


    }

	function getsellerrenego_data3() {
			$id = $this->session->userdata('username'); 
			$this->db->select('
			b.buyer_nego_price,
			b.buyer_nego_units,
			b.bname,
			
			c.seller_renego_price,
			c.seller_renego_units,
			c.vusername,	
			c.buyer_approval,
			c.seller_mbuyreq_id,
			
            a.bcompanyname,	
			a.sellerid,		
			a.category,
			a.productname,
			a.productid,
			a.quantity,
			a.units,
			a.price,
			a.priceperkg,
			a.sellerprice,
			a.bsupplyability');	
			
			$this->db->from("buyer_req_response b");
            $this->db->join('seller_mbuyreq a', 'a.id=b.seller_mbuyreq_id','left outer');	
			$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');		
			$this->db->join('buyer_final_req d', 'c.seller_mbuyreq_id=d.seller_mbuyreq_id','left outer');
			$this->db->where('d.sel_status =',NULL );
			 $this->db->where('c.buyer_approval !=',2);
			//$this->db->or_where('b.status !=',5 ); 
			 $this->db->where('a.buyerid', $id);
			$query = $this->db->get();
        $result = $query->result();
     //echo $this->db->last_query(); exit;
        return $result;


    } 
	 
	function getsellerrenego_datafetch() {
			$id = $this->session->userdata('username'); 
			$this->db->select('
			b.buyer_nego_price,
			b.buyer_nego_units,
			b.bname,
			
			c.seller_renego_price,
			c.seller_renego_units,
			c.vusername,	
			c.buyer_approval,
			c.seller_mbuyreq_id,
			
            a.bcompanyname,			
			a.category,
			a.productname,
			a.productid,
			a.quantity,
			a.units,
			a.price,
			a.priceperkg,
			a.sellerprice,
			a.bsupplyability');	
			
			$this->db->where('c.buyer_approval',1 );
			$this->db->where('a.buyerid', $id);
            $this->db->join('seller_mbuyreq a', 'a.id=b.seller_mbuyreq_id','left outer');	
			$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');			
			$query = $this->db->get("buyer_req_response b");
        $result = $query->result();
     //echo $this->db->last_query(); exit;
        return $result;


    }
	
	function getsellerrenego_seller_datafetch() {
			$id = $this->session->userdata('username'); 
			$this->db->select('
			b.buyer_nego_price,
			b.buyer_nego_units,
			b.bname,
			
			c.seller_renego_price,
			c.seller_renego_units,
			c.vusername,	
			c.buyer_approval,
			c.seller_mbuyreq_id,
			
            a.bcompanyname,			
			a.category,
			a.productname,
			a.productid,
			a.quantity,
			a.units,
			a.price,
			a.priceperkg,
			a.sellerprice,
			a.bsupplyability');	
			
			$this->db->where('c.buyer_approval',1 );
			$this->db->where('a.sellerid', $id);
            $this->db->join('seller_mbuyreq a', 'a.id=b.seller_mbuyreq_id','left outer');	
			$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');			
			$query = $this->db->get("buyer_req_response b");
        $result = $query->result();
     //echo $this->db->last_query(); exit;
        return $result;


    }

function getsellerrenego_admin_datafetch() {
			$this->db->select('
			b.buyer_nego_price,
			b.buyer_nego_units,
			b.bname,
			
			c.seller_renego_price,
			c.seller_renego_units,
			c.vusername,	
			c.buyer_approval,
			c.seller_mbuyreq_id,
			
            a.bcompanyname,			
			a.category,
			a.productname,
			a.productid,
			a.quantity,
			a.units,
			a.price,
			a.priceperkg,
			a.sellerprice,
			a.bsupplyability');	
			
			$this->db->where('c.buyer_approval',1 );
            $this->db->join('seller_mbuyreq a', 'a.id=b.seller_mbuyreq_id','left outer');	
			$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');			
			$query = $this->db->get("buyer_req_response b");
        $result = $query->result();
     //echo $this->db->last_query(); exit;
        return $result;


    }	
	
	function getdatafrombuyer_req_response4() {	
			$id = $this->session->userdata('username'); 	
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,
					d.bname');	
					$this->db->where('a.sellerid', $id);
					$this->db->where('d.sel_status', 0);
 					
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			 
			 
			 function getdatafrombuyer_req_response40($id) {	
			$id = $this->session->userdata('username'); 	
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,
					d.bname');	
					//$this->db->where('a.sellerid', $id);
					$this->db->where('d.sel_status', 0);
 					$this->db->where('a.id',$id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			function getdatafrombuyer_req_selfetch() {	
				$id = $this->session->userdata('username'); 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername,
					a.category,   
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,
					d.bname');	
					$this->db->where('d.sel_status', 1); 					
					$this->db->where('a.buyerid', $id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			function getdatafrombuyer_req_selfetchlast() {	
				$id = $this->session->userdata('username'); 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername,
					a.category,   
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,
					d.bname');	
					$this->db->where('d.sel_status', 1); 					
					$this->db->where('a.buyerid', $id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			
			function getdatafrombuyer_final() {	
				$id = $this->session->userdata('username'); 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername,
					a.category,   
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,
					d.bname');	
					$this->db->where('d.sel_status', 1); 					
					$this->db->where('a.buyerid', $id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			function getdatafrombuyer_seller_req() {	
				$id = $this->session->userdata('username'); 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername,
					a.category,   
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,
					d.bname');	
					$this->db->where('d.sel_status', 1); 					
					$this->db->where('a.sellerid', $id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			
			function getdatafrombuyer_admin_req() {	
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername,
					a.category,   
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,
					d.bname');	
					$this->db->where('d.sel_status', 1); 	
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
 
			
			function getdatafrombuyer_req_response20() {	
				$id = $this->session->userdata('username'); 
 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,
					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					
					c.seller_renego_price,
					c.seller_renego_units,
					
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,				 
					d.data_fetch2,
					d.bname');	
					
					$this->db->where('d.data_fetch2', 0);
 					$this->db->where('a.buyerid', $id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'b.seller_mbuyreq_id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			 
			function getdatafrombuyer_req_response5() {	
				$id = $this->session->userdata('username'); 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,				 
					d.data_fetch2,
					d.bname');	
					$this->db->where('d.data_fetch2', 0);
 					$this->db->where('a.buyerid', $id);
					//$this->db->where('a.id',$id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			function getdatafrombuyer_req_response15() {	
				//$id = $this->session->userdata('username'); 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					c.seller_renego_price,
					c.seller_renego_units,
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,				 
					d.data_fetch2,
					d.bname');	
					$this->db->where('d.data_fetch2', 0);
 					//$this->db->where('a.buyerid', $id);
					//$this->db->where('a.id',$id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}

	
	 

function getdatafrom_vregistration($id) {
			
		$this->db->select('*');
		$this->db->where('id', $id);
			//$this->db->join('seller_mbuyreq b','a.vname = b.vusername','left outer');
			
			$query = $this->db->get("seller_mbuyreq");
			 $result = $query->result();
			  return $result;

		
		}	
function getdatafromselquotenegotate() {	
			$id = $this->session->userdata('username'); 
			$this->db->select('		
					b.buyer_req_response_id ,						
					b.bname,
					b.buyer_nego_price,
					b.buyer_nego_units,
					b.seller_mbuyreq_id,
					
					a.id,
					a.bname,
					a.bcompanyname,
					a.vusername as sellername,
					a.category,
					a.productname,
					a.productid,
					a.description,
					a.quantity,
					a.units,
					a.price,
					a.priceperkg,
					a.sellerprice,
					a.bsupplyability,
					
					c.seller_renego_price,
					c.seller_renego_units,
					
					d.buyer_final_price,
					d.buyer_final_units,
					d.sel_status,				 
					d.data_fetch2,
					d.bname');	
					
					$this->db->where('d.data_fetch2', 0);
 					$this->db->where('a.buyerid', $id);
					$this->db->join('buyer_req_response b','a.id=b.seller_mbuyreq_id',
					'left outer');	
					$this->db->join('seller_req_response c', 'b.seller_mbuyreq_id=c.seller_mbuyreq_id','left outer');
					$this->db->join('buyer_final_req d', 'a.id=d.seller_mbuyreq_id','left outer');
										
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}

	 	
		    
   }
   
?> 