<?php $this->load->view('header_nw.php');?>

<form class="user" name="registerForm" id="registerForm" action="<?php echo base_url().'index.php/Buyer/register'?>" method="POST"></form>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
              <img style="width:150px" src="<?php echo base_url()."web_files/";?>img/2rawmet-logo.png" class="img-fluid" alt=""  >
                        <h3>Welcome</h3>
                        <p style="text-align:left; font-size:14px;"><b>*
						Search for Required Raw Materials.<br/>*
						Find List of Suppliers with Stock Availability, Pricing & Payments Terms.<br/>*
						Ask For Quote, Negotiate Price and Send PO.<br/>*
						Materials will be Dispatched as per TAT.</b></p>
						
  <a href="<?php echo base_url();?>home_login">
         <button style="width:150px" type="button" class="btn btn-light">Login</button></a>                       
					  
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">                                
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Buyers" role="tab" aria-controls="home" aria-selected="true">Buyers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Seller" role="tab" aria-controls="profile" aria-selected="false">Seller</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Buyers" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Buyers Registration</h3>
                           	<form action="<?php echo base_url();?>home_buyer_register"  method="POST">
                                <div class="row register-form">
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="bcompanyname" name="bcompanyname" class="form-control" placeholder="Company Name*" value="" />
                                        </div>
                                        <div class="form-group">
                                             <input type="text" id="bcontactperson" name="bcontactperson" class="form-control" placeholder="Contact Person*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="buyerid" readonly value="B<?php echo(rand(1,1000000));?>" name="buyerid" class="form-control" placeholder="User Id*" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" id="bpassword" name="bpassword"  class="form-control" placeholder="Password*" value=""  />
                                        </div>
                                         <div class="form-group">
                                            <input type="text" onkeyup ="return validateForm()" id="bemail" name="bemail" class="form-control" placeholder="Email Id*" value="" />
                                        </div>

                                        <div class="form-group">
                                           <input type="text" id="bpan" name="bpan"  placeholder="PAN"  class="form-control" placeholder="Pan No *" value="" />
                                        </div>
		
                                        <div class="form-group">
                                        <select id="bselectstate" name="bselectstate" class="form-control">
                                                <option>Select State</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattishgarh" >Chhattishgarh</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Harayana">Harayana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Eleven" >Jharkhand</option>
                                                <option value="Jharkhand">Andhra Pradesh</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra" >Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya" >Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim" >Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura" >Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarascountrykhand">Uttarascountrykhand</option>
                                                <option value="West Bengal" >West Bengal</option>
                                            </select>
                                        </div>
										 <div class="form-group">
                                        <input type="text" id="bpincode" name="bpincode"  class="form-control " placeholder="Pin Code *" value="" />
                                        </div>

                                     
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
										<select id="bcompanytype" name="bcompanytype" class="form-control">
                                                <option class="hidden"  selected disabled>Company Type</option>
                                                <option value="Govt Regd Company">Govt Regd Company</option>
                                                <option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
                                                <option value="Partnership, Proprietorship, OPC" >Partnership, Proprietorship, OPC</option>
                                                <option value="Other">Other</option>
                                            </select>
                                              
                                        </div>

                                        <div class="form-group">
                                            <input type="text" id="bcontactnumber" name="bcontactnumber" class="form-control" placeholder="Phone*" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" id="busername" name="busername" onkeyup="validate_bname()"  placeholder="Name" class="form-control" value="" />
											<input hidden type="text" class="form-control form-control-user" id="bname" name="bname"  placeholder="" readonly>
                                        </div>

                                        <div class="form-group">
										 <input type="password" id="brepeatpassword" name="brepeatpassword"   placeholder="Confirm Password" class="form-control" value=""/>
                                            
                                                                                    </div>

                                        <div class="form-group">
                                           	<input type="text" id="bgst" name="bgst"  class="form-control" placeholder="GST No *" value="" />
                                        </div>

                                        <div class="form-group">
											
                                           
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="text" id="baddress" name="baddress" class="form-control" placeholder="Address*" value="" />
                                        </div>
                                        

                                        <div class="form-group">
										          <select id="bcity" name="bcity" class="form-control">
                                                <option>Select City</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattishgarh" >Chhattishgarh</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Harayana">Harayana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Eleven" >Jharkhand</option>
                                                <option value="Jharkhand">Andhra Pradesh</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra" >Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya" >Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim" >Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura" >Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarascountrykhand">Uttarascountrykhand</option>
                                                <option value="West Bengal" >West Bengal</option>
                                            </select>
                                         
                                        </div>
										  <div class="form-group">
									     <input type="checkbox" class="form-check-input" id="iagreee" name="iagreee">
								<label class="form-check-label" for="exampleCheck1">
								I agree to the <a href="">Terms & Conditions</a></label>
                                        </div>

                                                                                
                       <input type="submit" name="submit" id="btn1"  onclick="return validatebuyer()" value="Register" class="btn btn-primary">
                                    </div>                              

                                    </form>
                                     
                         
						        
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="Seller" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Seller Registration</h3>
                   <form action="<?php echo base_url();?>home_seller_register"  method="POST">
                                <div class="row register-form">
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="vcompanyname" name="vcompanyname" class="form-control" placeholder="Company Name*" value="" />
                                        </div>
                                        <div class="form-group">
                                             <input type="text" id="vcontactperson"  name="vcontactperson" class="form-control" placeholder="Contact Person*" value="" />
                                        </div>
										<div class="form-group">
										        <select class="form-control" id="dealer_type" name="dealer_type">
											  <option default>--Type of Dealer--</option>
													   <option value="Manufacturer">Manufacturer</option>
													<option value="Wholesaler">Wholesaler</option>
													<option value="Re-saler">Re-saler</option>
													<option value="Dealer">Dealer</option>
													<option value="Distributor">Distributor</option>
													<option value="Others">Others</option>
													
												</select> 
                                         
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="sellerid" value="S<?php echo(rand(1,1000000));?>" name="sellerid"  placeholder="Seller Id" Readonly class="form-control" placeholder="User Id*" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" id="vpassword" name="vpassword" class="form-control"  placeholder="Password" onkeyup="validate_username()"> 
                                        </div>
                                         <div class="form-group">
                                            <input type="email" onkeyup="return validateForm()" id="vemail"  name="vemail" class="form-control" placeholder="Email Id*" value="" />
                                        </div>

                                        <div class="form-group">
                                           <input type="text" id="vpan"  name="vpan"   placeholder="PAN"  class="form-control gst" placeholder="Pan No *" value="" />
                                        </div>
		
                                        <div class="form-group">
                                        <select id="vselectstate" name="vselectstate" class="form-control">
                                                <option>Select State</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattishgarh" >Chhattishgarh</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Harayana">Harayana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Eleven" >Jharkhand</option>
                                                <option value="Jharkhand">Andhra Pradesh</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra" >Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya" >Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim" >Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura" >Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarascountrykhand">Uttarascountrykhand</option>
                                                <option value="West Bengal" >West Bengal</option>
                                            </select>
                                        </div>
										 <div class="form-group">
                                        <input type="text" id="vpincode"  name="vpincode"  class="form-control PAN" placeholder="Pin Code *" value="" />
                                        </div>                                    
                                        </div>
										
										
                                        <div class="col-md-6">
                                        <div class="form-group">
										<select id="vcompanytype" name="vcompanytype" class="form-control">
                                                <option class="hidden"  selected disabled>Company Type</option>
                                                <option value="Govt Regd Company">Govt Regd Company</option>
                                                <option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
                                                <option value="Partnership, Proprietorship, OPC" >Partnership, Proprietorship, OPC</option>
                                                <option value="Other">Other</option>
                                            </select>
                                              
                                        </div>

                                        <div class="form-group">
                                            <input type="text" id="vcontactnumber"  name="vcontactnumber" class="form-control" placeholder="Phone*" value="" />
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control gst" id="vpcb"  name="vpcb"  placeholder="PCB license" value="" />
                                        </div>
										 <div class="form-group">
                                           <input type="text" id="vusername"  name="vusername" onkeyup="validate_name()" placeholder="Name" class="form-control" value="" />
											<input hidden type="text" class="form-control form-control-user" id="vname" name="vname"  placeholder="" readonly>
                                        </div>

                                        <div class="form-group">
										 
										 <input class="form-control" type="password" id="vrepeatpassword" name="vrepeatpassword"  placeholder="Confirm Password"><span id = "message2" style="color:red"> </span>
                                            
                                                                                    </div>

                                        <div class="form-group">
                                           	<input type="text" id="vgst"  name="vgst"  class="form-control gst" placeholder="GST No *" value="" />
                                        </div>

                                        <div class="form-group">
											
                                           
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="text" id="vaddress"  name="vaddress" class="form-control" placeholder="Address*" value="" />
                                        </div>
                                        

                                        <div class="form-group">
										          <select id="bcity" name="bcity" class="form-control">
                                                <option>Select City</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattishgarh" >Chhattishgarh</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Harayana">Harayana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Eleven" >Jharkhand</option>
                                                <option value="Jharkhand">Andhra Pradesh</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra" >Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya" >Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim" >Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura" >Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarascountrykhand">Uttarascountrykhand</option>
                                                <option value="West Bengal" >West Bengal</option>
                                            </select>
                                         
                                        </div>
										 <div class="form-group">
									     <input type="checkbox" class="form-check-input" id="iagreee" name="iagreee">
								<label class="form-check-label" for="exampleCheck1">
								I agree to the <a href="">Terms & Conditions</a></label>
                                        </div>

                                                                                
                                     	<input type="submit" name="submit" id="btn1"  onclick="return validateseller()" value="Register" class="btn btn-primary col-3 mt-2 w-100">
                                    </div>                              

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <?php $this->load->view('script_nw.php');?>

<script type="text/javascript">   
document.addEventListener('contextmenu',function (e){
e.preventDefault();


});
</script>


<script type="text/javascript">  
  
$(document).ready(function(){     
        
$("#pan").blur(function () {      
var inputvalues = $(this).val();      
//alert(inputvalues);
  var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;    
  if(!regex.test(inputvalues)){      
  $("#pan").val("");    
  swal("Alert!","Invalid PAN no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script> 





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
function validateForm() {
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
  function validate_username(){
	  var val = document.getElementById("busername").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'home_buyer_register/validate_username/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Username Already Exists", "error");
					document.getElementById("busername").value = "";
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
<script>
 function validate_bname(){
	  var cat2 = document.getElementById('busername').value;
	 if(cat2){
		  document.getElementById('bname').value = cat2 ;
	 }
 }
</script>



<script>
  
function validateseller(){
 
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
	var iagreee = document.getElementById("iagreee").value;
	

if(vname == '' || vcompanyname == '' || vcompanytype == '' || vcontactperson == '' || vcontactnumber == '' || vemail == '' || vusername == '' || vpassword == '' || vrepeatpassword == '' || vpan == '' || vgst == '' || vaddress == '' || vcity == '' || vselectstate == '' || vpincode == '' || iagreee == ''){
swal("Alert!","Vendor Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin, Accept Terms and Condition  cannot leave any field blank!","error");
		return false;
	}else{
        $.ajax({
            type:'submit',
            data: {vname:vname,vcompanyname:vcompanyname,vcompanytype:vcompanytype,vcontactperson:vcontactperson,vcontactnumber:vcontactnumber,vemail:vemail,vusername:vusername,vpassword:vpassword,vrepeatpassword:vrepeatpassword,vpan:vpan,vgst:vgst,vaddress:vaddress,vcity:vcity,vselectstate:vselectstate,vpincode:vpincode,iagreee:iagreee},
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
  
  
  <script>
function validateForm() {
    //collect form data in JavaScript variables
    var pw1 = document.getElementById("vpassword").value;
    var pw2 = document.getElementById("vrepeatpassword").value;
   
  
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
  function validate_username(){
	  var val = document.getElementById("vusername").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'home_seller_register/validate_username/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Username Already Exists", "error");
					document.getElementById("vusername").value = "";
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

<script>
 function validate_name(){
	  var cat2 = document.getElementById('vusername').value;
	 if(cat2){
		  document.getElementById('vname').value = cat2 ;
	 }
 }
</script>

 <script>
  function vgst(){
	  var val = document.getElementById("vgst").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Home_seller_register/validate_vgst/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "GST Already Exists", "error");
					document.getElementById("vgst").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter GST!", "error");
			return false;
		}
  }
  </script>
