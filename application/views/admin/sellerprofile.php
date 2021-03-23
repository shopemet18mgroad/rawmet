<?php ?>
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
					  <th style="text-align:right">
					   <a  href="<?php echo base_url()."admin_editsellerprofile/index/".urldecode($sqldata[0]->sellerid).'/'.urldecode($sqldata[0]->vcompanyname);?>"><u>Edit Personal Info</u></a></th>
					

					 	
					 

					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td>
						</tr>
						<tr>
						<td>Name</td>
								<td><?php echo $sqldata[0]->vname;?></td>
							</tr> 
								<tr>
						<td>Name</td>
								<td><?php echo $sqldata[0]->sellerid;?></td>
							</tr>
							<tr>
								<td>Company Name</td>
								<td><?php echo $sqldata[0]->vcompanyname;?></td>
							</tr> 
							<tr>
								<td>Company Type</td>
								<td><?php echo $sqldata[0]->vcompanytype;?></td>
							</tr> 	
							<tr>
								<td>Contact Person</td>
								<td><?php echo $sqldata[0]->vcontactperson;?></td>
							</tr> 
							<tr>
								<td>Type of Dealer</td>
								<td><?php echo $sqldata[0]->dealer_type;?></td>
							</tr>
							<tr>
							
								<td>Contact Number</td>
								<td><?php echo $sqldata[0]->vcontactnumber;?></td>
							</tr> 
							<tr>
								<td>Pan</td>
								<td><?php echo $sqldata[0]->vpan;?></td>
							</tr> 	
							<tr>
								<td>GST</td>
								<td><?php echo $sqldata[0]->vgst;?></td>
							</tr> 
							<tr>
								<td>PCB</td>
								<td><?php echo $sqldata[0]->vpcb;?></td>
							</tr> 
<tr>
								<td>Reference Name</td>
								<td><?php echo $sqldata[0]->vrefer;?></td>
							</tr> 
						
						</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th>Contact Info</th>
					<!-- <th style="text-align:right">
					 <a  href="<?php echo base_url()."admin_editsellerprofile/index/".urldecode($sqldata[0]->sellerid).'/'.urldecode($sqldata[0]->vcompanyname);?>"><u>Edit Contact Info</u></a></th>-->
					 </thead>
						<tbody>
						<tr>
								<td>Email</td>
								<td><?php echo $sqldata[0]->vemail;?></td>
							</tr> 
							<tr>
								<td>Username</td>
								<td><?php echo $sqldata[0]->vusername;?></td>
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
								<td><?php echo $sqldata[0]->vaddress;?></td>
							</tr> 
							<tr>
								<td>City</td>
								<td><?php echo $sqldata[0]->vcity;?></td>
							</tr>	
							<tr>
								<td>Select State</td>
								<td><?php echo $sqldata[0]->vselectstate;?></td>
							</tr>
							<tr>
								<td>Pincode</td>
								<td><?php echo $sqldata[0]->vpincode;?></td>
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
