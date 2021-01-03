
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
					  <form action="<?php echo base_url();?>Admin_buyer_basicinfo_add"  method="POST" onsubmit = "return validateForm()"  enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Buyer Name:</td>
							<td><input class="form-control w-50" type="text" id="bname" name="bname" ></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" id="bcompanyname" name="bcompanyname" ></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-50" type="text" id="bcompanytype" name="bcompanytype" ></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="bcontactperson" name="bcontactperson" ></td>
						</tr>
						<tr>
							<td class="btxt">Contact number:</td>
							<td><input class="form-control w-50" type="text" id="bcontactnumber" name="bcontactnumber" ></td>
						</tr>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="text" id="bemail" name="bemail" ></td>
						</tr>
						<tr>
							<td class="btxt">UserName:</td>
							<td><input class="form-control w-50" type="text" id="busername" name="busername" ></td>
						</tr>
						
						<tr>
							<td class="btxt">Password</td>
							<td><input class="form-control w-50" type="password" id="bpassword" name="bpassword"  onkeyup="validate_username()"><span id = "message1" style="color:red"> </span></td>
						</tr>
					
						<tr>
							<td class="btxt">RepeatPassword</td>
							<td><input class="form-control form-control-user w-50" type="password" id="brepeatpassword" name="brepeatpassword" > <span id = "message2" style="color:red"> </span></td>
						</tr>
						 <tr>
							<td class="btxt">Pan</td>
							<td><input class=" w-50 form-control form-control-user pan"  type="text" id="bpan" name="bpan" ></td>
						</tr>
						<tr>
							<td class="btxt">GST</td>
							<td><input class="w-50 form-control form-control-user gst"  type="text" id="bgst"  name="bgst"></td>
						</tr>

						
						
						 
						
					</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
					 <tbody>
				
						<tr>
							<td class="btxt">Postal Address:</td>
							<td><textarea class="form-control w-50" type="text" id="baddress" 	name="baddress" ></textarea></td>
						</tr> 
						<tr>
							<td class="btxt">city</td>
							<td><input class="form-control w-50" type="text" id="bcity" name="bcity" ></td>
						</tr>
						<td class="btxt">State /Union Ter.:</td>
							<td><input class="form-control w-50" type="text" id="bselectstate" name="bselectstate" ></td>
						</tr> 
						 
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-50" type="text" id="bpincode" name="bpincode" ></td>
						</tr> 
						 
						
						
						
						</tbody>
					</table>	

								
<!--<a href="#"><button type="submit" name="sb3"  class="btn btn-info offset-sm-3 mt-2">Submit</button></a>-->
  <center>
				<input type="submit" name="submit" id="btn1"   onclick= " return validatebuyer()"  value="Register Account" class="btn btn-primary col-3 mt-2 w-100">
				</center>

 
												
				<a href="#"><button type="submit" name="sb4" class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
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

  

