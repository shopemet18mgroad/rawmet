 <head>
 <link href="<?php echo base_url()."web_files/";?>css/responsive.css" rel="stylesheet" type="text/css">

 </head>
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
                  <h6 class="m-0 font-weight-bold text-primary">Edit Personal Info</h6>
               			   					                <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="container">
					 <table class="table table-sm table-borderless table-responsive">
					 <thead><th width="45%">Profile</th>
					 
					 
					 </thead>
						<tbody>
						
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
							
							<form action = "<?php echo base_url();?>customer_basicinfo_update" method="POST" enctype="multipart/form-data">
							<tr>
								<td>Buyer Id</td>
								<td><input class="form-control w-auto" type="text" id="buyerid" name="buyerid" value="<?php echo$sqldata[0]->buyerid; ?>"readonly></td>
							</tr> 
							<tr><td>Name</td>
								<td><input class="form-control w-auto" type="text" id="bname" name="bname" value="<?php echo $sqldata[0]->bname; ?>"></td>
							</tr> 
							<tr>
								<td>Company Name</td>
								<td><input class="form-control w-auto" type="text" id="bcompanyname" name="bcompanyname" value="<?php echo$sqldata[0]->bcompanyname; ?>"></td>
							</tr> 
							<tr>
						<td class="btxt">Company Type:</td>
						<td> <select class="form-control w-auto" id="bcompanytype" name="bcompanytype">
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
								<td>Contact Person</td>
								<td><input class="form-control w-auto" type="text" id="vcontactperson" name="bcontactperson" value="<?php echo $sqldata[0]->bcontactperson; ?>"></td>
							</tr> 
							<tr>
								<td>contact number</td>
								<td><input class="form-control w-auto" type="text" id="vcontactnumber" name="bcontactnumber" value="<?php echo $sqldata[0]->bcontactnumber; ?>"></td>
								<td>
			
							</tr> 
							<tr>
							<td>Email</td>
							<td><input class="form-control w-auto" type="text" id="bemail" name="bemail" value="<?php echo $sqldata[0]->bemail; ?>"></td>
								<td>
								
							</tr>
							<tr>
								<td>Pan</td>
								<td><input class="form-control w-auto" type="text" id="bpan" name="bpan" value="<?php echo $sqldata[0]->bpan; ?>" ></td>
							</tr>
							<tr>
								<td>GST</td>
								<td><input class="form-control w-auto" type="text" id="bgst" name="bgst" value="<?php echo $sqldata[0]->bgst; ?>" ></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input class="form-control w-auto" type="text" id="busername" name="busername" value="<?php echo $sqldata[0]->busername; ?>"  ></td>
							</tr>
						
							 	
							<tr>
								<td>Address</td>
								<td><textarea class="form-control w-auto" type="text" id="baddress" name="baddress" value=""><?php echo $sqldata[0]->baddress; ?></textarea></td>
							</tr>
							<tr>
								<td>City</td>
								<td><input class="form-control w-auto" type="text" id="bcity" name="bcity" value="<?php echo $sqldata[0]->bcity; ?>" ></td>
							</tr>
							
							<tr>
								<td>Pincode</td>
								<td><input class="form-control w-auto" type="text" id="bpincode" name="bpincode" value="<?php echo $sqldata[0]->bpincode; ?>" ></td>
							</tr>
							<tr>
								<td>State</td>
								<td><input class="form-control w-auto" type="text" id="bselectstate" name="bselectstate" value="<?php echo $sqldata[0]->bselectstate; ?>" ></td>
								
							</tr>

							
							
													
						</tbody>
					</table>			

				<input type="submit" class="btn btn-primary offset-sm-3 mt-2" name="submit" value="Update">
												
				<input type="reset" class="btn btn-primary offset-sm-1 mt-2" value="Reset">
				</form>	


				
				  <a href="customer_customerprofile"><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>
				
				</div>
													
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
    <!--  <footer class="sticky-footer bg-white">
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
	//include('./footer.php');
?>
</body>

</html>
