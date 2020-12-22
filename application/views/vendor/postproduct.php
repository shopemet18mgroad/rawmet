

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
					
			
			<form action="<?php echo base_url();?>vendor_postproduct" method="POST">
			 	
                <div class="form-group row">
				
				
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Company Name</label>
					<input type="text" class="form-control" id="productname" name="productname"  placeholder="productname">
                    
                </div>
				
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Product Name:</label>
					<input type="text" class="form-control" id="productname" name="productname"  placeholder="productname">
                    
                </div>
               <div class="col-sm-4">  
			   	<select class="form-control" id="type">
						<option>Metal</option>
						<option>Non-Metal</option>
						<option>Raw Material</option>
						<option>Scrap</option>
				    </select>
				</div>
				<div class="col-sm-4">  
			   	<label for="category">States:</label>
					<select class="form-control" id="pstates" name="pstates">
					    <option>All India</option>
						<option>Andhra Pradesh</option>
						<option>Arunchal Pradesh</option>
						<option>Assam</option>
						<option>Chhattisgarh</option>
						<option>Goa</option>
						<option>Gujarat</option>
						<option>Haryana</option>
						<option>Himchala Pradesh</option>
						<option>Jharkhand</option>
						<option>Karnataka</option>
						<option>Kerala</option>
						<option>Madhya Pradesh</option>
						<option>Manipur</option>
						<option>Meghalaya</option>
						<option>Mizoram</option>
						<option>Nagaland</option>
						<option>Odisha</option>
						<option>Punjab</option>
						<option>Rajasthan</option>
						<option>Sikkim</option>
						<option>Tamil Nadu</option>
						<option>Telangana</option>
						<option>Tripura</option>
						<option>UttarKhand </option>
						<option>Uttar Pradesh</option>
						<option>West Bengal</option>
						<option>Andaman and nicobar</option>
						<option>Chandigarh</option>
						<option>Dadra and Nagar Haveli and Daman & Diu</option>
						<option>Jammu and kashmir</option>
						<option>ladakh</option>
						<option>Lakshadweep</option>
						<option>puducherry</option>
						</select>
				</div>
				<div class="col-sm-4">  
				
			   	<label for="category">Types:</label>
					<select class="form-control" id="types" name="types">
					<option>Types</option>
						<option>Primary</option>
						<option>Secondary</option>
				        <option>Scrap</option>
				    </select>
				</div>
				<div class="col-sm-4">
				<label for="materialname"> :</label>				
					<select class="form-control" id="materialname" name="materialname">
						<option>Aluminium</option>
						<option>Silicon</option>
						<option>Iron</option>
						<option>Coal</option>
				    </select>
					
				</div>
				  
				  <div class="col-sm-12">
					<label for="description">Description:</label>
					<textarea class="form-control" rows="5" name="description" id="description"></textarea>
					</div>
				
				   <div class="col-sm-4">
				   <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="0">
                  </div>
                
				
                <div class="col-sm-4">
					<label for="quantity">Stock:</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="">
                </div>
				
				
				
				
				<!--<img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/iron.jpg" alt="Chania" width="150" height="20">-->
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Minimum Order Stock:</label>
					<input type="text" class="form-control" id="minoderquant" name="minoderquant"  placeholder="">
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">supply Ability:</label>
					<input type="text" class="form-control" id="supplyability" name="supplyability"  placeholder="">
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Payable To Rawmet:(%)</label>
					<input type="text" class="form-control" id="payable" name="payable"  placeholder="" required>
					
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Stock Per Month:</label>
					<input type="text" class="form-control" id="quantpermonth" name="quantpermonth"  placeholder="">
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Estimated Delivery Time:</label>
					<input type="text" class="form-control" id="estdeltime" name="estdeltime"  placeholder="">
                    
                </div>
				<div class="col-sm-5 mt-4">
					<p>Upload Product Image:</p>
					<input type="file" id="uploadproductimage" name="uploadproductimage">
				</div>
				<div class="col-sm-4 mt-4">
					<label for="fobprice">Is Fob Price?</label>
					<label class="radio-inline"><input type="radio" name="fobprice" id="fobprice" checked> Yes</label>
					<label class="radio-inline"><input type="radio" name="fobprice"  id="fobprice">No</label>
				</div>
				<div class="col-sm-4 mt-4">
					<label class="checkbox-inline">
					<input type="checkbox" value="aifeatured" id="aifeatured" name="aifeatured">Add into Featured</label>
				</div>
				
					<div class="col-md-12 text-center mt-4">
						<a href="<?php echo base_url();?>vendor_postproduct" class="btn btn-primary btn-sm" role="button">Add More Files</a>
						
						<input type="submit" class="btn btn-primary btn-sm" name="submit" value="submit">
						
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


