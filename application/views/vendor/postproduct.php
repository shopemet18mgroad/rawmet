

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
					<label for="">Supplier Name </label>
					<input type="text" class="form-control" id="suppliername" name="suppliername"  placeholder="Supplier Name">
                    
                </div>
				
				
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Product Name</label>
					<input type="text" class="form-control" id="productname" name="productname"  placeholder="Product Name">
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Company Name</label>
					<input type="text" class="form-control" id="companyname" name="companyname"  placeholder="Company Name">
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Product Id</label>
					<input type="text" class="form-control" id="productid" name="productid"  placeholder="Product Id">
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Catergory</label>
					<input type="text" class="form-control" id="category" name="category"  placeholder="Catergory">
                    
                </div>
				
				
              
				<div class="col-sm-4">  
			   	<label for="category">States:</label>
					<select class="form-control" id="pstates" name="pstates">
					    <option value="">All India</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunchal Pradesh">Arunchal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option> 
						<option value="Haryana">Haryana</option>
						<option value="Himchala Pradesh">Himchala Pradesh</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagalan">Nagaland</option>
						<option value="Odisha">Odisha</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Telangana">Telangana</option>
						<option value="Tripura">Tripura</option>
						<option value="UttarKhand ">UttarKhand </option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="Uttar Pradesh">West Bengal</option>
						<option value="Andaman and nicobar">Andaman and nicobar</option>
						<option value="Chandigar">Chandigarh</option>
						<option value="Dadra and Nagar Haveli and Daman & Diu">Dadra and Nagar Haveli and Daman & Diu</option>
						<option value="Jammu and kashmir">Jammu and kashmir</option>
						<option value="ladakh">ladakh</option>
						<option value="puducherry">puducherry</option>
						</select>
				</div>
				<div class="col-sm-4">  
				
			   	<label for="category">Types:</label>
					<select class="form-control" id="types" name="types">
					<option value="Types">Types</option>
						<option value="Primary">Primary</option>
						<option value="Secondary">Secondary</option>
				        <option value="Scrap" >Scrap</option>
				    </select>  
				</div>
				<div class="col-sm-4">  
			   	<label for="category">City:</label>
					<select class="form-control" id="pstates" name="pstates">
					    <option>All city</option>
						<option>Bangalore</option>
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
						
						<button  href="<?php echo base_url();?>"class="btn btn-primary btn-sm" role="button">Submit</a>
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


