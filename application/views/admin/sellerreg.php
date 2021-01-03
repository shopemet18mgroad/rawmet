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
					  <form action="<?php echo base_url();?>admin_seller_basicinfo_add" method="POST"  onsubmit = "return validateForm1()" enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Seller  Name:</td>
							<td><input class="form-control w-50" type="text" id="vname" name="vname" ></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" id="vcompanyname" name="vcompanyname" ></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-50" type="text" id="vcompanytype" name="vcompanytype" ></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="vcontactperson" name="vcontactperson"></td>
						</tr>
							<tr>
							<td class="btxt">Contact number:</td>
							<td><input class="form-control w-50" type="text" id="vcontactnumber" name="vcontactnumber"></td>
						</tr>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="text" id="vemail" name="vemail"></td>
						</tr>
						<tr>
							<td class="btxt">UserName:</td>
							<td><input class="form-control w-50" type="text" id="vusername" name="vusername"></td>
						</tr>
						<tr>
							<td class="btxt">Password</td>
							<td><input class="form-control w-50" type="password" id="vpassword" name="vpassword"  onkeyup="validate_username1()"><span id = "message1" style="color:red"> </span></td>
						</tr>
						<tr>
							<td class="btxt">RepeatPassword</td>
							<td><input class="form-control w-50" type="password" id="vrepeatpassword" name="vrepeatpassword"></td>
						</tr>
						 <tr>
							<td class="btxt">Pan</td>
							<td><input class=" w-50 form-control form-control-user pan"  type="text" id="vpan" name="vpan" ></td>
						</tr>
						<tr>
							<td class="btxt">GST</td>
							<td><input class="w-50 form-control form-control-user gst"  type="text" id="vgst"  name="vgst"></td>
						</tr>
						<tr>
							<td class="btxt">PCB</td>
							<td><input class="form-control w-50" type="text" id="vpcb" name="vpcb"></td>
						</tr>
						 
						
					</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						
					
						<tr>
							<td class="btxt">Postal Address:</td>
							<td><textarea class="form-control w-50" type="text" id="vaddress" 	name="vaddress"></textarea></td>
						</tr> 
						<tr>
							<td class="btxt">city</td>
							<td><input class="form-control w-50" type="text" id="vcity" name="vcity"></td>
						</tr>
						<td class = "btxt">State /Union Ter:</td>
							<td><input class="form-control w-50" type="text" id="vselectstate" name="vselectstate"></td>
						</tr> 
						 
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-50" type="text" id="vpincode" name="vpincode"></td>
						</tr> 
						 
						
						</tbody>
					</table>	

								
				<a href="#"><button type="submit" name="sb3" onclick="return validatearry2()" onclick=" validatebuyer1()" class="btn btn-info offset-sm-3 mt-2">Submit</button></a>
												
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




