
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
            <a href="manageseller.php"><u>Back</u></a>
          </div>

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-md-10 col-lg-11 ml-5">
              <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th>Personal Info</th>
					 <th style="text-align:right"> <a  href="<?php echo base_url()."admin_editcustprofile/index/".urldecode($sqldata[0]->buyerid).'/'.urldecode($sqldata[0]->bcompanyname);?>"><u>Edit Personal Info</u></a></th>
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td>
						</tr>
						<tr>
						<td>Name</td>
								<td><?php echo $sqldata[0]->bname; ?></td>
							</tr> 
							<tr>
						<td>Buyer Id</td>
								<td><?php echo $sqldata[0]->buyerid; ?></td>
							</tr>
							<tr>
								<td>Company Name</td>
								<td><?php echo $sqldata[0]->bcompanyname;?></td>
							</tr> 
							<tr>
								<td>Company Type</td>
								<td><?php echo $sqldata[0]->bcompanytype;?></td>
							</tr> 	
							<tr>
								<td>Contact Person</td>
								<td><?php echo $sqldata[0]->bcontactperson;?></td>
							</tr> 
							<tr>
								<td>Contact Number</td>
								<td><?php echo $sqldata[0]->bcontactnumber;?></td>
							</tr> 
							<tr>
								<td>Pan</td>
								<td><?php echo $sqldata[0]->bpan;?></td>
							</tr> 
							<tr>
								<td>GST</td>
								<td><?php echo $sqldata[0]->bgst;?></td>
							</tr> 
							

						
						</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="47%">Contact Info</th>
					<!-- <th style="text-align:right">
					    <a  href="<?php echo base_url()."admin_editcustprofile/index/".urldecode($sqldata[0]->buyerid).'/'.urldecode($sqldata[0]->bcompanyname);?>">Edit personal</a></th>-->
					 
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
								<td>********</td>
							</tr> 	
							<tr>
								<td>Repeat Password</td>
								<td>********</td>
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
								<td>Select State</td>
								<td><?php echo $sqldata[0]->bselectstate;?></td>
							</tr>
							<tr>
								<td>pincode</td>
								<td><?php echo $sqldata[0]->bpincode;?></td>
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

     

