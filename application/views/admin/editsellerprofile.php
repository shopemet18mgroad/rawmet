
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
			<a href="<?php echo base_url();?>admin_vendorprofile"><u>Back</u></a>
          </div>

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row p-2 ml-5">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-7 ml-5">
              <div class="card shadow mb-4 ml-5">
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
							<form action = "<?php echo base_url();?>admin_seller_basicinfo_update" method="POST" enctype="multipart/form-data">
							<td>   Name</td>
								<td><input class="form-control w-50" type="text" id="vname" name="vname" readonly value="<?php echo $sqldata[0]->vname; ?>"></td>
							</tr> 
							<tr>
								<td>Company Name</td>
								<td><input class="form-control w-50" type="text" id="vcompanyname" name="vcompanyname" value="<?php echo$sqldata[0]->vcompanyname; ?>"></td>
							</tr> 
							<tr>
								<td>Company Type</td>
								<td><input class="form-control w-50" type="text" id="vcompanytype" name="vcompanytype" value="<?php echo$sqldata[0]->vcompanytype; ?>">
							</tr> 	
							<tr>
								<td>Contact Person</td>
								<td><input class="form-control w-50" type="text" id="vcontactperson" name="vcontactperson" value="<?php echo $sqldata[0]->vcontactperson; ?>"></td>Seller</td>
							</tr> 
							<tr>
								<td>contact number</td>
								<td><input class="form-control w-50" type="text" id="vcontactnumber" name="vcontactnumber" value="<?php echo $sqldata[0]->vcontactnumber; ?>"></td>
								<td>
			
							</tr> 
							<tr>
								<td>Pan</td>
								<td><input class="form-control w-50" type="text" id="vpan" name="vpan" value="<?php echo$sqldata[0]->vpan; ?>">
							</tr> 	
							<tr>
								<td>GST</td>
								<td><input class="form-control w-50" type="text" id="vgst" name="vgst" value="<?php echo $sqldata[0]->vgst; ?>"></td>
							</tr> 
							<tr>
								<td>PCB</td>
								<td><input class="form-control w-50" type="text" id="vpcb" name="vpcb" value="<?php echo $sqldata[0]->vpcb; ?>"></td>
								<td>
			
							</tr> 

						
						</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="36%">Contact Info</th>
					
					 </thead>
						<tbody>
						<td>Email</td>
								<td> <input class="form-control w-50" type="text" id="vemail" name="vemail" value="<?php echo $sqldata[0]->vemail;?>"></td>
							</tr> 
							<tr>
								<td>Username</td>
								<td> <input class="form-control w-50" type="text" id="vusername" name="vusername" value="<?php echo $sqldata[0]->vusername; ?>" readonly></td>
							</tr> 
							<tr>
								<td>Password</td>
								<td>******</td>
							</tr> 	
							<tr>
								<td>Repeat Password</td>
								<td>*******</td>
							</tr> 
							<tr>
								<td>Address</td>
								<td><input class="form-control w-50" type="text" id="vaddress" name="vaddress" value="<?php echo $sqldata[0]->vaddress;?>"></td>
							</tr> 
							<tr>
								<td>City</td>
								<td><input class="form-control w-50" type="text" id="vcity" name="vcity" value="<?php echo $sqldata[0]->vcity;?>"></td>
							</tr>	
							<tr>
								<td>Select State</td>
								<td><input class="form-control w-50" type="text" id="vselectstate" name="vselectstate" value="<?php echo $sqldata[0]->vselectstate;?>"></td>
							</tr>
							<tr>
								<td>Pincode</td>
								<td><input class="form-control w-50" type="text" id="vpincode" name="vpincode" value="<?php echo $sqldata[0]->vpincode;?>"></td>
							</tr>
                            
							
					   </tbody>
					</table>
						<center>		
                <input type="submit" id="submitBtn" class="btn btn-primary" name="submit" value="Update">	</center>			
           <!--<a href="#" class="btn btn-info mt-4 offset-sm-5" style="font-size:13px" role="button"><b>S</b></a>-->
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

    