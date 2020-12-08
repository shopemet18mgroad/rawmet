

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
				
				<img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/iron.jpg" alt="Chania" width="150" height="20">
				
					<div class="col-md-12 text-center mt-4">
						<a href="<?php echo base_url();?>vendor_postproduct" class="btn btn-primary btn-sm" role="button">Add More Files</a>
						<a href="<?php echo base_url();?>vendor_uploadedproduct" class="btn btn-primary btn-sm" role="button">Submit</a>
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


