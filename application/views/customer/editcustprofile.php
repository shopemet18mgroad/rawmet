
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
          </div>

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row p-2 ml-4">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Personal Details</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th>Personal Info</th>
					 
					
					 </thead>
						<tbody style="width:5px;">
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
							<tr>
							<form action = "<?php echo base_url();?>admin_buyer_basicinfo_update" method="POST" enctype="multipart/form-data">
							<td>Name</td>
								<td><input class="form-control w-50" type="text" id="bname" name="bname" value="<?php echo $sqldata[0]->bname; ?>"></td>
							</tr> 
							<tr>
								<td>Company Name</td>
								<td><input class="form-control w-50" type="text" id="bcompanyname" name="bcompanyname" value="<?php echo$sqldata[0]->bcompanyname; ?>"></td>
							</tr> 
							<tr>
								<td>Company Type</td>
								<td><input class="form-control w-50" type="text" id="bcompanytype" name="bcompanytype" value="<?php echo$sqldata[0]->bcompanytype; ?>">
							</tr> 	
							<tr>
								<td>Contact Person</td>
								<td><input class="form-control w-50" type="text" id="vcontactperson" name="bcontactperson" value="<?php echo $sqldata[0]->bcontactperson; ?>"></td>
							</tr> 
							<tr>
								<td>contact number</td>
								<td><input class="form-control w-50" type="text" id="vcontactnumber" name="bcontactnumber" value="<?php echo $sqldata[0]->bcontactnumber; ?>"></td>
								<td>
			
							</tr> 

						
						</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="36%">Contact Info</th>
					
					 </thead>
						<tbody>
						<td>Email</td>
								<td> <input class="form-control w-50" type="text" id="bemail" name="bemail" value="<?php echo $sqldata[0]->bemail;?>"></td>
							</tr> 
							<tr>
								<td>Username</td>
								<td> <input class="form-control w-50" type="text" id="busername" name="busername" value="<?php echo $sqldata[0]->busername;?>"></td>
							</tr> 
							<tr>
								<td>Password</td>
								<td><input class="form-control w-50" type="text" id="bpassword" name="bpassword" value="<?php echo $sqldata[0]->bpassword;?>"></td>
							</tr> 	
							<tr>
								<td>RepeatPassword</td>
								<td> <input class="form-control w-50" type="text" id="brepeatpassword" name="brepeatpassword" value="<?php echo $sqldata[0]->brepeatpassword;?>"></td>
							</tr> 
							<tr>
								<td>Address</td>
								<td><input class="form-control w-50" type="text" id="baddress" name="baddress" value="<?php echo $sqldata[0]->baddress;?>"></td>
							</tr> 
							<tr>
								<td>City</td>
								<td><input class="form-control w-50" type="text" id="bcity" name="bcity" value="<?php echo $sqldata[0]->bcity;?>"></td>
							</tr>	
							<tr>
								<td>Selectstate</td>
								<td><input class="form-control w-50" type="text" id="bselectstate" name="bselectstate" value="<?php echo $sqldata[0]->bselectstate;?>"></td>
							</tr>
							<tr>
								<td>pincode</td>
								<td><input class="form-control w-50" type="text" id="bpincode" name="bpincode" value="<?php echo $sqldata[0]->bpincode;?>"></td>
							</tr>
                              <tr>
								
								<td>Rajkot, </td>
							</tr>
                             <tr>
								<td>bussness description</td>
								<td>Verified</td>
							</tr>
							
					   </tbody>
					</table>
					<button type="submit" class="btn btn-info offset-sm-4 mt-2">Update</button>
                	
								
								
							</form>

              </div>
            </div>

            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
 