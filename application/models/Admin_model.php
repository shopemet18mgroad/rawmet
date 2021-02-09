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
		
		public function get1datafromtable($table, $data) { 
			 $this->db->select('vcompanyname');
			  $this->db->select('vname');
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
		public function getusernamedatafromtable($table, $data) { 
			 //$this->db->select('scomapnyname');
			  $this->db->select('vusername');
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
		public function getbusernamedatafromtable($table, $data) { 
			 //$this->db->select('scomapnyname');
			  $this->db->select('busername');
			 $query = $this->db->get_where($table, $data); 
			 return $query->result();
		}
		
			public function getbuyerdatafromtable($table, $data) { 
			 $this->db->select('bcompanyname');
			  $this->db->select('bname');
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
			
		$this->db->select('a.bname,a.bcity,a.bselectstate,b.productname,b.uploadimage,b.productid,b.bcompanyname,b.description,b.price,b.priceperkg,b.quantity,b.units');
			$this->db->join('buyerrequriement b','a.bname = b.bname','left outer');
			//$this->db->group_by('b.requirement_id');
			//$this->db->where("a.user_created", $user_created);
			//$this->db->order_by('b.buyername desc');
			
			$query = $this->db->get("buyer_register a");
			 $result = $query->result();
			  return $result;

		
		}	  
		
	 
		
		function getdatafromtable_buyer() {			 
			$this->db->select('b.buyerrequriement_id,
					b.bname,
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
					a.bname,a.*, count(b.productid) as cnt');
					$this->db->group_by('a.id');					 			
					$this->db->join('seller_mbuyreq b', 'a.id=b.buyerrequriement_id',
					'left outer');			   
					$query = $this->db->get("buyerrequriement a");
					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			function getdatafrombuyer_req_response() {			 
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
					a.sellerprice,a.bsupplyability');
					$this->db->where('b.status', 0);
					$this->db->join('buyer_req_response b', 'a.id=b.seller_mbuyreq_id',
					'left outer');			   
					$query = $this->db->get("seller_mbuyreq a");					 
					$result = $query->result();	
					//echo $this->db->last_query();exit;			
					return $result;
		
			}
			
			

			function getUserData($strUID1){
				$this->db->where("productid",$strUID1);
				$query = $this->db->get("seller_mbuyreq");
				$result = $query->result();
				return $result;
			}

			
			
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
					
 
					
				 	
	



		
		  
   }
   
?> 