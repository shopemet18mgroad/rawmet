
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
                  <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					
			<form class="user">
			 	
                <div class="form-group row">
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Product Name:</label>
                    <input type="text" class="form-control" id="exampleFirstName" placeholder="Product Name">
                  </div>
               <div class="col-sm-4">  
			   	<label for="mtype">Category:</label>
					<select class="form-control" id="type">
						<option>Metal</option>
						<option>Non-Metal</option>
						<option>Raw Material</option>
						<option>Scrap</option>
				    </select>
				</div>
				<div class="col-sm-4">
				<label for="mname">Material Name :</label>				
					<select class="form-control" id="material">
						<option>Aluminium</option>
						<option>Silicon</option>
						<option>Iron</option>
						<option>Coal</option>
				    </select>
				</div>
				  
				  <div class="col-sm-12">
					<label for="desc">Description:</label>
					<textarea class="form-control" rows="5" id="desc"></textarea>
					</div>
				
				   <div class="col-sm-4">
				   <label for="price">Price:</label>
                    <input type="text" class="form-control" id="exampleContactNumber" placeholder="0">
                  </div>
                
				
                <div class="col-sm-4">
					<label for="Qnty">Quantity:</label>
                  <input type="email" class="form-control" id="exampleInputEmail" placeholder="">
                </div>
				
				 <div class="col-sm-4 mt-4">
					<label class="checkbox-inline">
					<input type="checkbox" value="">  Add into Featured</label>
				</div>
				
				<div class="col-sm-4 mt-4">
					<label for="isfobprice">Is Fob Price?</label>
					<label class="radio-inline"><input type="radio" name="optradio" checked>  Yes</label>
					<label class="radio-inline"><input type="radio" name="optradio">  No</label>
				</div>
				
				
				<div class="col-sm-5 mt-4">
					<p>Upload Product Image:</p>
					<input type="file" id="myFile" name="filename2">
				</div>
				
				<img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/gold.png" alt="Chania" width="150" height="20">
				
					<div class="col-md-12 text-center mt-4">
						<a href="<?php echo base_url();?>admin_postproduct" class="btn btn-primary btn-sm" role="button">Add More Files</a>
						<a href="<?php echo base_url();?>admin_uploadedproduct" class="btn btn-primary btn-sm" role="button">Submit</a>
					</div>	
					
				</div>
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
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."web_files/";?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url()."web_files/";?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-pie-demo.js"></script>

</body>

</html>
