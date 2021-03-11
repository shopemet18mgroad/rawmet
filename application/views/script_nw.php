 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 
  
    <!-- Page level plugins -->
      <script src="<?php echo base_url()."web_files/";?>js/jquery.min.js"></script> 
   <!--<script src="./js/jquery-3.2.2.js"></script>-->	
  <script src="<?php echo base_url()."web_files/";?>js/popper.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/jquery.easy-ticker.js"></script> 
   <script src="<?php echo base_url()."web_files/";?>weblib/auclib.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?php echo base_url()."web_files/";?>/weblib/homevalidate.js" type="text/javascript" charset="utf-8"></script>
   <!--data table-->
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>
 

 <script>
  
function validatebuyer(){

	var bname = document.getElementById("bname").value;
	var bcompanyname = document.getElementById("bcompanyname").value;
	var bcompanytype = document.getElementById("bcompanytype").value;
	var bcontactperson = document.getElementById("bcontactperson").value;
	var bcontactnumber = document.getElementById("bcontactnumber").value;
	var bemail = document.getElementById("bemail").value;
	var busername = document.getElementById("busername").value;
	var bpassword = document.getElementById("bpassword").value;
	var brepeatpassword = document.getElementById("brepeatpassword").value;
	var bpan = document.getElementById("bpan").value;
	var bgst = document.getElementById("bgst").value;
	var baddress = document.getElementById("baddress").value;
	var bcity = document.getElementById("bcity").value;
	var bselectstate = document.getElementById("bselectstate").value;
	var bpincode = document.getElementById("bpincode").value;
	var iagreee = document.getElementById("iagreee").value;
	

if(bname == '' || bcompanyname == '' || bcompanytype == '' || bcontactperson == '' || bcontactnumber == '' || bemail == '' || busername == '' || bpassword == '' || brepeatpassword == '' || bpan == '' || bgst == '' || baddress == '' || bcity == '' || bselectstate == '' || bpincode == '' || iagreee == ''){
		swal("Alert!",  "Buyer Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin, Accept Terms and condition cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {bname:bname,bcompanyname:bcompanyname,bcompanytype:bcompanytype,bcontactperson:bcontactperson,bcontactnumber:bcontactnumber,bemail:bemail,busername:busername,bpassword:bpassword,brepeatpassword:brepeatpassword,bpan:bpan,bgst:bgst,baddress:baddress,bcity:bcity,bselectstate:bselectstate,bpincode:bpincode,iagreee:iagreee},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }
	
	if (bcontactnumber.value.length < 10 || bcontactnumber.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (bcontactnumber.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	
	if(bpassword != brepeatpassword){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
		return false;
	}
	
	if (bcontactnumber.value.length < 10 || bcontactnumber.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (bcontactnumber.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	
}
  </script>

	   
	  		 
  <script>
function validate_password1() {
    //collect form data in JavaScript variables
    var pw1 = document.getElementById("bpassword").value;
    var pw2 = document.getElementById("brepeatpassword").value;
   
  
    //check empty password field

    //minimum password length validation
    if(pw1.length < 8) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if(pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
  
    if(pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    } 
 }
</script>
	
  <script>
function validate_password() {
    //collect form data in JavaScript variables
    var pw11 = document.getElementById("bpassword").value;
    var pw22 = document.getElementById("brepeatpassword").value;
   
  
    //check empty password field

    //minimum password length validation
    if(pw11.length < 8) {
      document.getElementById("message11").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if(pw11.length > 15) {
      document.getElementById("message11").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
  
    if(pw11 != pw2) {
      document.getElementById("message22").innerHTML = "**Passwords are not same";
      return false;
    } 
 }
</script>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	  
	  
	  
  
 
  <script>
  function validate_buyerid(){
	  var val = document.getElementById("buyerid").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Home_buyer_register/validate_buyerid11/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Buyer Id Already Exists", "error");
					document.getElementById("buyerid").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Name!", "error");
			return false;
		}
  }
  </script>
	  
	    <script>
  function validate_selid(){
	  var val = document.getElementById("sellerid").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Home_buyer_register/validate_selid11/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Seller Id Already Exists", "error");
					document.getElementById("buyerid").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Name!", "error");
			return false;
		}
  }
  </script>
	  
	
  <script>
  function validate_sellerid(){
	  var val = document.getElementById("sellerid").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Home_buyer_register/validate_sellerid11/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Seller Id Already Exists", "error");
					document.getElementById("sellerid").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Name!", "error");
			return false;
		}
  }
  </script>  
	  
	  
	  
	  
	  
 




	
	
<script>
 function validate_bname(){
	  var cat2 = document.getElementById('busername').value;
	 if(cat2){
		  document.getElementById('bname').value = cat2 ;
	 }
 }
</script>




  
  





<script>
 function validate_name(){
	  var cat2 = document.getElementById('vusername').value;
	 if(cat2){
		  document.getElementById('vname').value = cat2 ;
	 }
 }
</script>


<script>
  function validate_bcompany11(){
	  var val = document.getElementById("bcompanyname").value;
		if(val != ''){

			 $.get('<?php echo base_url().'Home_buyer_register/validate_buyer_companyname/'; ?>'+val, function(data2){				 

				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Buyer Company Already Exists", "error");
					document.getElementById("bcompanyname").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter Buyer Company Name!", "error");
			return false;
		}
  }

   </script>
	   
	   
	   
	   
	   
	   <script>
  function validate_bcompany1L1(){
	  var val = document.getElementById("vcompanyname").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Home_buyer_register/validate_vcompanyname/'; ?>'+val, function(data2){
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Seller Company Already Exists", "error");
					document.getElementById("vcompanyname").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter Seller Company Name!", "error");
			return false;
		}
  }

   </script>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
<script>
  function validate_seller22(){
	  var val1 = document.getElementById("vcompanyname").value;
		if(val1 != ''){
			 $.get('<?php echo base_url() .'Home_seller_register/validate_seller11/'; ?>'+val1, function(data2){
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Seller Company Already Exists", "error");
					document.getElementById("vcompanyname").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter Seller Company Name!", "error");
			return false;
		}
  }

   </script>	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
		<script type="text/javascript">    
$(document).ready(function(){     
        
$(".pan").change(function () {      
var inputvalues = $(this).val();      
  var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;    
  if(!regex.test(inputvalues)){      
  $(".pan").val("");    
  swal("Alert!","Invalid PAN no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script> 


<script type="text/javascript">    
$(document).ready(function(){     
        
$(".gst").change(function () {      
var inputvalues = $(this).val();      
  var regex = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9A-Z]){1}?$/;    
  if(!regex.test(inputvalues)){      
  $(".gst").val("");    
  swal("Alert!","Invalid gst no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script>
		<script type="text/javascript">    
$(document).ready(function(){     
        
$(".span").change(function () {      
var inputvalues = $(this).val();      
  var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;    
  if(!regex.test(inputvalues)){      
  $(".span").val("");    
  swal("Alert!","Invalid PAN no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script> 


<script type="text/javascript">    
$(document).ready(function(){     
        
$(".sgst").change(function () {      
var inputvalues = $(this).val();      
  var regex = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9A-Z]){1}?$/;    
  if(!regex.test(inputvalues)){      
  $(".sgst").val("");    
  swal("Alert!","Invalid gst no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script>   
	
	
	
	
	
	
	
	  <script>
  
function validate_seller(){
 
	var vname = document.getElementById("vname").value;
	var vcompanyname = document.getElementById("vcompanyname").value;
	var vcompanytype = document.getElementById("vcompanytype").value;
	var vcontactperson = document.getElementById("vcontactperson").value;
	var vcontactnumber = document.getElementById("vcontactnumber").value;
	var vemail = document.getElementById("vemail").value;
	var vusername = document.getElementById("vusername").value;
	var vpassword = document.getElementById("vpassword").value;
	var vrepeatpassword = document.getElementById("vrepeatpassword").value;
	var vpan = document.getElementById("vpan").value;
	var vgst = document.getElementById("vgst").value;
	var vaddress = document.getElementById("vaddress").value;
	var vcity = document.getElementById("vcity").value;
	var vselectstate = document.getElementById("vselectstate").value;
	var vpincode = document.getElementById("vpincode").value;
	

if(vname == '' || vcompanyname == '' || vcompanytype == '' || vcontactperson == '' || vcontactnumber == '' || vemail == '' || vusername == '' || vpassword == '' || vrepeatpassword == '' || vpan == '' || vgst == '' || vaddress == '' || vcity == '' || vselectstate == '' || vpincode == ''){
swal("Alert!","Vendor Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin  cannot leave any field blank!","error");
		return false;
	}else{
        $.ajax({
            type:'submit',
            data: {vname:vname,vcompanyname:vcompanyname,vcompanytype:vcompanytype,vcontactperson:vcontactperson,vcontactnumber:vcontactnumber,vemail:vemail,vusername:vusername,vpassword:vpassword,vrepeatpassword:vrepeatpassword,vpan:vpan,vgst:vgst,vaddress:vaddress,vcity:vcity,vselectstate:vselectstate,vpincode:vpincode},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }
	if (vcontactnumber.value.length < 10 || vcontactnumber.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (vcontactnumber.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	
	
	
}
  </script>
	   
	   

   