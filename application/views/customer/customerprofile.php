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
					 <table class="table table-sm table-borderless" id="section1">
					 <thead><th width="45%">Profile</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>customer_editpersonal"><u>Edit Personal Info</u></a></th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						
						 <form action = "<?php echo base_url();?> " method="POST" enctype="multipart/form-data">
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
								<td>Email</td>
								<td><?php echo $sqldata[0]->bemail;?></td>
							</tr> 
							<tr>
								<td>Username</td>
								<td><?php echo $sqldata[0]->busername;?></td>
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
                            

						 
							
													
						</tbody>
					</table>			

					

				<table class="table table-sm table-borderless" id="section3">
					 <thead><th width="45%">Password</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>customer_editpassword"><u>Edit Password</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Old Password</td>
								<td>******</td>
							</tr> 
							<tr>
								<td>New Password</td>
								<td>******</td>
							</tr> 
							<tr>
								<td>Confirm Password</td>
								<td>******</td>
							</tr>
							
											
						</tbody>
					</table>

				


			
					 </thead>
					
						

													
							</form>					
					
					</table>					
              
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
   <!--   <footer class="sticky-footer bg-white">
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
 
</body>

</html>






