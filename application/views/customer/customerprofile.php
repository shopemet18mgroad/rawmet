

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
          </div>

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
					 <thead><th>Personal Info</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>customer_editcustprofile"><u>Edit Personal Info</u></a></th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
							<tr>
								
								<td>Name</td>
								<td><?php echo $sqldata[0]->bname; ?></td>
							</tr> 
							<tr>
								<td>Companyname</td>
								<td><?php echo $sqldata[0]->bcompanyname;?></td>
							</tr> 
							<tr>
								<td>Companytype</td>
								<td><?php echo $sqldata[0]-bscompanytype;?></td>
							</tr> 	
							<tr>
								<td>Contact Person</td>
								<td><?php echo $sqldata[0]->bcontactperson;?></td>
							</tr> 
							<tr>
								<td>Contact Number</td>
								<td><?php echo $sqldata[0]->bcontactnumber;?></td>
							</tr> 

						
						</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="40%">Contact Info</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>customer_editcustprofile"><u>Edit Contact Info</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Email</td>
								<td><?php echo $sqldata[0]->bemail;?></td>
							</tr> 
							<tr>
								<td>Username</td>
								<td><?php echo $sqldata[0]->busername;?></td>
							</tr> 
							<tr>
								<td>Password</td>
								<td><?php echo $sqldata[0]->bpassword;?></td>
							</tr> 	
							<tr>
								<td>RepeatPassword</td>
								<td><?php echo $sqldata[0]->brepeatpassword;?></td>
							</tr> 
							<tr>
								<td>Address</td>
								<td><?php echo $sqldata[0]->baddress;?></td>
							</tr> 
							<tr>
								<td>City</td>
								<td><?php echo $sqldata[0]->bcity;?></td>
							</tr>	
							<tr>
								<td>Selectstate</td>
								<td><?php echo $sqldata[0]->bselectstate;?></td>
							</tr>
							<tr>
								<td>pincode</td>
								<td><?php echo $sqldata[0]->bpincode;?></td>
							</tr>
                              <tr>
								<td>bussness type</td>
								<td>Rajkot, </td>
							</tr>
                             <tr>
								<td>bussness description</td>
								<td>Verified</td>
							</tr>							
						</tbody>
					</table>							
                
              </div>
            </div>

            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
