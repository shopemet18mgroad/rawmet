

<link href="<?php echo base_url()."web_files2/";?>css/mediaform.css" rel="stylesheet" type="text/css">


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
            <div class="col-md-12 col-sm-12">
              <div class="card shadow">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Personal Info</th>
					  <form action="<?php echo base_url();?>Admin_buyer_basicinfo_add"  method="POST"  enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						
						<tr>
							<td class="btxt">Buyer Name:</td>
							<td><input class="form-control w-100" type="text" id="bname" name="bname" ></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-100" type="text" id="bcompanyname" name="bcompanyname" ></td>
							</tr>
						<tr>												
							<td class="btxt">Buyer Id:</td>
							<td><input class="form-control w-100" type="text" id="buyerid" value="B<?php echo(rand(1,1000000));?>" name="buyerid" Readonly ></td>
							</tr>

						<tr>
					
							<td class="btxt">Company Type:</td>
						<td> <select class="form-control w-100" id="bcompanytype" name="bcompanytype">
								<option default>PVT Ltd.</option>
					 
						<option value="OPC PVT Ltd.">OPC PVT Ltd.</option>
						<option value="Ltd">Ltd</option>
						<option value="LLP">LLP</option>
				        <option value="Partnership">Partnership</option>
						<option value="proprietorship">proprietorship</option>
						<option value="Others">Others</option>
				    </select> </td>
						</tr>   
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-100" type="text" id="bcontactperson" name="bcontactperson" ></td>
						</tr>
						<tr>
							<td class="btxt">Contact number:</td>
							<td><input class="form-control w-100" type="text" id="bcontactnumber" name="bcontactnumber" ></td>
						</tr>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-100" type="text"  onkeyup ="return validateForm() id="bemail" name="bemail" ></td>
						</tr>
						<tr>
							<td class="btxt">UserName:</td>
							<td><input class="form-control w-100" type="text" id="busername" name="busername" ></td>
						</tr>
						
						<tr>
							<td class="btxt">Password</td>
							<td><input class="form-control w-100" type="password" id="bpassword" name="bpassword"  onkeyup="validate_username()"><span id = "message1" style="color:red"> </span></td>
						</tr>
					
						<tr>
							<td class="btxt">RepeatPassword</td>
							<td><input class="form-control form-control-user w-100" type="password" id="brepeatpassword" name="brepeatpassword" > <span id = "message2" style="color:red"> </span></td>
						</tr>
						 <tr>
							<td class="btxt">Pan</td>
							<td><input class=" w-100 form-control form-control-user pan"  type="text" id="bpan" name="bpan" ></td>
						</tr>
						<tr>
							<td class="btxt">GST</td>
							<td><input class="w-100 form-control form-control-user gst"  type="text" id="bgst"  name="bgst"></td>
						</tr>

						
						
						 
						
					</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
					 <tbody>
				
						<tr>
							<td class="btxt">Postal Address:</td>
							<td><textarea class="form-control w-100" type="text" id="baddress" 	name="baddress" ></textarea></td>
						</tr> 
						<tr>
							<td class="btxt">city</td>
							<td><input class="form-control w-100" type="text" id="bcity" name="bcity" ></td>
						</tr>
						<td class="btxt">State /Union Ter.:</td>
							<td><input class="form-control w-100" type="text" id="bselectstate" name="bselectstate" ></td>
						</tr> 
						 
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-100" type="text" id="bpincode" name="bpincode" ></td>
						</tr> 
						
						<tr>
							<td class="btxt">Reference Name:</td>
							<td><input class="form-control w-100" type="text" id="brefer" name="brefer" ></td>
						</tr>
						
						
						 
						
						
						
						</tbody>
					</table>	

								
<!--<a href="#"><button type="submit" name="sb3"  class="btn btn-info offset-sm-3 mt-2">Submit</button></a>-->
  <center>
				<input type="submit" name="submit" id="btn1"   onclick= "return adminaddbuyer()" class="btn btn-info offset-sm-1 mt-2"  value="Register Account" class="btn btn-primary col-3 mt-2 w-100">   
				
				
			
		<a type="button" href="admin_buyerreg"  class="btn btn-info offset-sm-1 mt-2">cancel</a>

 
	<!--<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>-->
				  </center>
				
				</form>								
				
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
      <!--<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <script>
  
function adminaddbuyer(){

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
  

  

