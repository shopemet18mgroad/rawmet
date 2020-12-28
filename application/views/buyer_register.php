

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">Create an Account!</h1>
				
              </div>
             
			  <h3 class="h5 text-gray-700 mb-2">Contact Info</h3> 	
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<form action="<?php echo base_url();?>home_buyer_register" onsubmit ="return validateForm()" method="POST">
				
                    <input type="text" class="form-control form-control-user" id="bname" name="bname"  placeholder="Name">
                  </div>
                  
				   <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="bcompanyname" name="bcompanyname" placeholder="Company Name">
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="bcompanytype" name="bcompanytype"  placeholder="Company Type" >
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="bcontactperson" name="bcontactperson" placeholder="Contact Person">
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="bcontactnumber" name="bcontactnumber" placeholder="Contact Number" >
                  </div>
                </div>
				<h3 class="h5 text-gray-700 mb-2">User Info</h3>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user" id="bemail" name="bemail" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="busername" name="busername"  placeholder="User Name">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"id="bpassword" name="bpassword"  placeholder="Password" onkeyup="validate_username()"><span id = "message1" style="color:red"> </span>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"id="brepeatpassword" name="brepeatpassword"  placeholder="Repeat Password"><span id = "message2" style="color:red"> </span>
                  </div>
				  <h3 class="h5 text-gray-700 mb-2"></h3>
                </div>
				<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="text" class="form-control form-control-user pan" id="bpan" name="bpan"  placeholder="PAN" >
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-2">
					<input type="text" class="form-control form-control-user gst" id="bgst" name="bgst" placeholder="GST">
                  </div>
				  
                </div>
				
				<h3 class="h5 text-gray-700 mb-2">Location</h3>
                <div class="form-group">
					<input type="text" class="form-control form-control-user"id="baddress" name="baddress"  placeholder="Address">
				</div>
				
				
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="text" class="form-control form-control-user" id="bcity" name="bcity"  placeholder="City" >
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-2">
					<input type="text" class="form-control form-control-user" id="bselectstate" name="bselectstate" placeholder="State">
                  </div>
				  
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user"id="bpincode" name="bpincode" placeholder="Pincode">
                  </div>
                </div>
                <center>
				<input type="submit" name="submit" id="btn1"  onclick="return validatebuyer()" value="Register Account" class="btn btn-primary col-3 mt-2 w-100">
				</center>
                <!-- <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url();?>home_forgotpassword">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url();?>home_login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

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
	

if(bname == '' || bcompanyname == '' || bcompanytype == '' || bcontactperson == '' || bcontactnumber == '' || bemail == '' || busername == '' || bpassword == '' || brepeatpassword == '' || bpan == '' || bgst == '' || baddress == '' || bcity == '' || bselectstate == '' || bpincode == ''){
		swal("Alert!",  "Buyer Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin  cannot leave any field blank!", "error");
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
	
	if(bpassword != brepeatpassword){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
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