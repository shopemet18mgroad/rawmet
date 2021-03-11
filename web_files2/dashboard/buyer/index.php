<?php 
	include('./header.php');
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
					 <thead><th width="45%">Profile</th>
					 <th style="text-align:right"><a href="editpersonal.php"><u>Edit Personal Info</u></a></th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="../../img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
							<tr>
								
								<td>Buyer Name:</td>
								<td>John</td>
							</tr> 
							<tr>
								<td>Contact Person</td>
								<td>M.R.Venkatesh</td>
							</tr>  
							<tr>
								<td>Company Type:</td>
								<td>Industry</td>
							</tr> 	
							<tr>
								<td>Postal Address</td>
								<td>Indra Palace, Gandhi Nagar</td>
							</tr> 
							<tr>
								<td>City</td>
								<td>Amritsar</td>
							</tr>
							<tr>
								<td>Pincode</td>
								<td>555230</td>
							</tr>
							<tr>
								<td>State /Union Ter.</td>
								<td>Chandigarh</td>
							</tr>
							<tr>
								<td>Country</td>
								<td>India</td>
							</tr>
													
						</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 <th style="text-align:right"><a href="editcontact.php"><u>Edit Contact Info</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Email</td>
								<td>abc@gmail.com</td>
							</tr> 
							<tr>
								<td>Phone Number</td>
								<td>4475142122</td>
							</tr> 
							<tr>
								<td>Pan Number</td>
								<td>JCDB245555</td>
							</tr> 	
							<tr>
								<td>GST</td>
								<td>18%</td>
							</tr> 
													
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Password</th>
					 <th style="text-align:right"><a href="editpassword.php"><u>Edit Password</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Old Password</td>
								<td>*******</td>
							</tr> 
							<tr>
								<td>New Password</td>
								<td>*****</td>
							</tr> 
							<tr>
								<td>Confirm Password</td>
								<td>*****</td>
							</tr> 	
											
						</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 <th style="text-align:right"><a href="editaccount.php"><u>Edit Account</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Banker's Name</td>
								<td>PNB</td>
							</tr> 
							<tr>
								<td>Account Number</td>
								<td>256356852036</td>
							</tr> 
							<tr>
								<td>Branch</td>
								<td>Indra Palace</td>
							</tr> 
							<tr>
								<td>IFSC Code</td>
								<td>154221485245555</td>
							</tr> 							
											
						</tbody>
					</table>


				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Documents</th>
					 <th style="text-align:right"><a href="editdocument.php"><u>Edit documents</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td class="btxt">Upload Image1:</td>
								<td>XYZ.pdf</td>
							</tr> 
							<tr>
								<td class="btxt">Upload Image2:</td>
								<td>XYZ.pdf</td>
							</tr> 
							<tr>
								<td class="btxt">Upload Image3:</td>
								<td>XYZ.pdf</td>
							</tr>
							<tr>
								<td class="btxt">Signed Documents:</td>
								<td>XYZ.pdf</td>
							</tr>							
											
						</tbody>
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
 
<?php 
	include('./footer.php');
?>
</body>

</html>
