

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
              <!--   Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                  <h5 class="m-0 font-weight-bold text-primary">Post Your Buy Requirement</h5>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">		
				<form class="user">
				
				<div class="row ml-4">
				<div class="col-sm-5 bg-warning">
				<div class="thumbnail mt-2 p-2">
				<h3 class="m-0 font-weight-bold text-primary">How to get Quotation Quickly?</h3>
				
					<div class="col p-3 m-5">
						<i class="fas fa-file-image fa-3x mt-5"></i>Submit RFQ</p>
						<p><i class="fas fa-sort fa-3x mt-5"></i>Compare Quote</p>
						<p><i class="fas fa-handshake fa-3x mt-5" aria-hidden="true"></i>	Contact </p>

					</div>
				</div>	
				</div>

			
				<div class="caption col-6 p-2 ml-5 mt-3 bg-light">
				<div class="form-group">
								<label>Product Name:</label>
								<input type="text" class="form-control" id="productname" name="productname" placeholder="Enter product name you want to buy..">
							</div>
					<h6 class="mt-2"><b>&nbsp;&nbsp;Describe your Buying requirement(Minimum 20 characters)*</b></h6>
					<div class="col-sm-5 col-md-12">
                      <textarea class="form-control" rows="4" id="description" name="description" placeholder="Describe your buying requirement.."></textarea>
					</div>
					
					<div class="col-sm-5 col-md-6 mt-2">
					 <form>
						<div class="form-group">
								<label>Quantity:</label>
								<input type="text" class="form-control" id="quantity" name="quantity">
							</div>
					 </form>
					</div> 
					
				<div class="col-sm-12 col-md-8 mt-2">
					<label>Required Date</label>
					<input class="form-control" type="Date" id="requireddate" name="requireddate"><br>
					<label>Last Date</label>
					<input class="form-control" type="Date" id="lastdate" name="lastdate">
             </div>
						<div class="col-sm-12 col-md-9 mt-2">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<label>Contact Number</label>
							<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">+91</span>
							</div>
								<input type="text" class="form-control" aria-label="Small" id="contactnumber" name="contactnumber" aria-describedby="inputGroup-sizing-sm">
							</div>
						</div>
						
						<div class="col-sm-12 col-md-6 mt-2">
							<div class="form-group">
								<label for="exampleInputFile">Upload Image</label>
								<input type="file" class="form-control-file" id="uploadimage" name="uploadimage" aria-describedby="fileHelp">
								<!-- <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Upload PDF Files</label>
								<input type="file" class="form-control-file" id="uploadpdf"  name="uploadpdf" aria-describedby="fileHelp">
								<!-- <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
							</div>
						</div>
						
						<div class="col-sm-12 col-md-7 mt-2">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="iagreee" name="iagreee">
								<label class="form-check-label" for="exampleCheck1">
								I agree to the <a href="">Terms & Conditions</a></label>
							</div>
						</div>
				
					<button type="submit" href="<?php echo base_url();?>" class="btn btn-info mt-4 offset-sm-5" style="font-size:13px" name="submit" role="button"><b>Post Buying Requirement</b></a>
					
					</div>
			
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

      