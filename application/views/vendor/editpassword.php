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
                  <h6 class="m-0 font-weight-bold text-primary">Edit Password</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
			

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Password</th>
					
					 </thead>
						<tbody>
						<form action ="<?php echo base_url();?>vendor_basicpassword_update" method="POST" enctype="multipart/form-data">
						<div class="error-msg"></div>
							<tr>
								<td>Old Password</td>
								<td><input class="form-control w-50" type="password" id="vpassword"  name="boldpassword"placeholder="******" ></td>
							</tr> 
							<tr>
								<td>New Password</td>
								<td><input class="form-control w-50" type="password" id="vnewpassword" name="vnewpassword"  placeholder="******" onkeyup="validate_password()"></td>
							</tr> 
							<tr>
								<td>Confirm Password</td>
								<td><input class="form-control w-50" type="password" id="vrepeatpassword" name="vrepeatpassword" placeholder="******"></td>
							</tr> 	
											
						</tbody>
					</table>

				<input type="submit" id="submitBtn" class="btn btn-primary offset-sm-3 mt-2" name="submit" value="Update" onclick="return validate_user_password()">
												
			<input type="reset" class="btn btn-primary offset-sm-1 mt-2" value="Reset">
					</form>							
				<a href="buyer_dashboard"><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>
				
								
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
     <!-- <footer class="sticky-footer bg-white">
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
