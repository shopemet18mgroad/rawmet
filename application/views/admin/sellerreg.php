<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Personal Info</th>
					  <form action="<?php echo base_url();?>admin_seller_basicinfo_add" method="POST" enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Seller  Name:</td>
							<td><input class="form-control w-50" type="text" id="vname" name="vname" required></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" id="vcompanyname" name="vcompanyname" required></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-50" type="text" id="vcompanytype" name="vcompanytype" required></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="vcontactperson" name="vcontactperson" required></td>
						</tr>
							<tr>
							<td class="btxt">Contact number:</td>
							<td><input class="form-control w-50" type="text" id="vcontactnumber" name="vcontactnumber" required></td>
						</tr>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="text" id="vemail" name="vemail" required></td>
						</tr>
						<tr>
							<td class="btxt">UserName:</td>
							<td><input class="form-control w-50" type="text" id="vusername" name="vusername" required></td>
						</tr>
						<tr>
							<td class="btxt">Password</td>
							<td><input class="form-control w-50" type="password" id="vpassword" name="vpassword" required></td>
						</tr>
						<tr>
							<td class="btxt">RepeatPassword</td>
							<td><input class="form-control w-50" type="password" id="vrepeatpassword" name="vrepeatpassword" required></td>
						</tr>
						<tr>
							<td class="btxt">Pan</td>
							<td><input class="form-control w-50" type="text" id="vpan" name="vpan" required></td>
						</tr>
						<tr>
							<td class="btxt">GST</td>
							<td><input class="form-control w-50" type="text" id="vgst" name="vgst" required></td>
						</tr>
						<tr>
							<td class="btxt">PCB</td>
							<td><input class="form-control w-50" type="text" id="vpcb" name="vpcb" required></td>
						</tr>
						 
						
					</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						
					
						<tr>
							<td class="btxt">Postal Address:</td>
							<td><textarea class="form-control w-50" type="text" id="vaddress" 	name="vaddress" required></textarea></td>
						</tr> 
						<tr>
							<td class="btxt">city</td>
							<td><input class="form-control w-50" type="text" id="vcity" name="vcity" required></td>
						</tr>
						<td class="btxt">State /Union Ter.:</td>
							<td><input class="form-control w-50" type="text" id="vselectstate" name="vselectstate" required></td>
						</tr> 
						 
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-50" type="text" id="vpincode" name="vpincode" required></td>
						</tr> 
						 
						
						</tbody>
					</table>	

								
				<a href="#"><button type="submit" name="sb3" onclick="return validatearry2()" onclick=" validatebuyer()" class="btn btn-info offset-sm-3 mt-2">Submit</button></a>
												
				<a href="#"><button type="submit" name="sb4" class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
				</form>								
				
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

   

    </div>
    <!-- End of Content Wrapper -->

  </div>

  <script>
  
function validatebuyer(){

	var bname = document.getElementById("vname").value;
	var bcompanyname = document.getElementById("vcompanyname").value;
	var bcompanytype = document.getElementById("vcompanytype").value;
	var bcontactperson = document.getElementById("vcontactperson").value;
	var bcontactnumber = document.getElementById("vcontactnumber").value;
	var bemail = document.getElementById("vemail").value;
	var busername = document.getElementById("vusername").value;
	var bpassword = document.getElementById("vpassword").value;
	var brepeatpassword = document.getElementById("vrepeatpassword").value;
	var bpan = document.getElementById("vpan").value;
	var bgst = document.getElementById("vgst").value;
	var baddress = document.getElementById("vaddress").value;
	var bcity = document.getElementById("vcity").value;
	var bselectstate = document.getElementById("vselectstate").value;
	var bpincode = document.getElementById("vpincode").value;
	

if(vname == '' || vcompanyname == '' || vcompanytype == '' || vcontactperson == '' || vcontactnumber == '' || vemail == '' || vusername == '' || vpassword == '' || vrepeatpassword == '' || vpan == '' || vgst == '' || vaddress == '' || vcity == '' || vselectstate == '' || vpincode == ''){
		swal("Alert!",  "Vendor Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST,Pcb, Address, Street, City, State, Pin  cannot leave any field blank!", "error");
		return false;
	}
	if (vcontactnumber.value.length < 10 || vcontactnumber.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (vcontactnumber.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	
	if(vpassword != vrepeatpassword){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
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
  $(".vpan").val("");    
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


