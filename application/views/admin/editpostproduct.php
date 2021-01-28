

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
                  <h6 class="m-0 font-weight-bold text-primary">Edit Products</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					
			
			<form action="<?php echo base_url();?>admin_postproduct_update" method="POST" enctype="multipart/form-data">
			 	
                <div class="form-group row">
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Supplier Name</label>
					<input type="text" class="form-control" id="vname" name="vname"  value="<?php echo  $sqldata[0]->vname;?>" readonly>
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Company Name</label>
					<input type="text" class="form-control" id="companyname" name="companyname"  placeholder="Company Name" value="<?php echo  $sqldata[0]->companyname;?>">
                    
                </div>
				
				<div class="col-sm-4 mb-3 mb-sm-0">
				
					<label for="">Category</label>
					
					<select class="form-control" id="category" name="category">
					       <option value="<?php echo  $sqldata[0]->category;?>"><?php echo  $sqldata[0]->category;?></option>
						<option value="Non Metal">Non Metal</option>
						<option value="Ferrous">Ferrous</option>
						<option value="Non Ferrous">Non Ferrous</option>
				        <option value="Scrap" >Scrap</option>
						<option value="Metal" >Metal</option>
				    </select> 
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Product Name</label>
					<input type="text" class="form-control" id="productname" name="productname"  placeholder="Product Name" value="<?php echo  $sqldata[0]->productname;?>" onkeyup="product_id()" >
                    
                </div>

				
				
				
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Product Id</label>
					<input type="text" class="form-control" id="productid" name="productid"  placeholder="Product Id" value="<?php echo  $sqldata[0]->productid;?>" readonly>
                    
                </div>
				
				
				
              
				<div class="col-sm-4">  
			   	<label for="category">States:</label>
					<select class="form-control" id="pstates" name="pstates" value="">
					<option value="<?php echo  $sqldata[0]->pstates;?>"><?php echo  $sqldata[0]->pstates;?></option>
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
					<select class="form-control" id="types" name="types" value="">
					<option value="<?php echo  $sqldata[0]->types;?>"><?php echo  $sqldata[0]->types;?></option>
					<option value="Types">Types</option>
						<option value="Primary">Primary</option>
						<option value="Secondary">Secondary</option>
				        <option value="Scrap" >Scrap</option>
				    </select>  
				</div>
				<div class="col-sm-4">  
			   	<label for="category">City:</label>
					<select class="form-control" id="pcities" name="pcities" value="">
						<option value="<?php echo  $sqldata[0]->pcities;?>"><?php echo  $sqldata[0]->pcities;?></option>
					    <option value="All city">All city</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Dehli">Delhi</option>
						<option value="Bangalore">Bangalore</option>
						<option value="hyderabad">hyderabad</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Chennai">Chennai </option>
						<option value="Kolkata">Kolkata</option>
						<option value="Surat">Surat</option>
						<option value="Pune">Pune</option>
						<option value="Jaipur">Jaipur</option>
						<option value="Lucknow">Lucknow</option>
						<option value="Kanpur">Kanpur</option>
						<option value="Nagpur">Nagpur</option>
						<option value="Indore">Meghalaya</option>
						<option value="Thane">Thane</option>
						<option value="Bhopal">Bhopal</option>
						<option value="Visakhapatnam">Visakhapatnam</option>
						<option value="Patna">Patna</option>
						<option value="Vadodara">Vadodara</option>
						<option value="Ghaziabad">Ghaziabad</option>
						<option value="Ludhiana">Ludhiana</option>
						<option value="Agra">Agra</option>
						<option value="Nashik">Nashik</option>
						<option value="Faridabad">Faridabad</option>
						<option value="Meerut">Meerut</option>
						<option value="Rajkot">Rajkot</option>
						<option value="Kalyan">Kalyan</option>
						<option value="Vasai Virar">Vasai Virar</option>
						<option value="Varanasi">Varanasi</option>
						<option value="Srinagar">Srinagar</option>
						<option value="Aurangabad">Aurangabad</option>
						<option value="Dhanbad	Jharkhand">Dhanbad	Jharkhand</option>
						<option value="Amritsar">Amritsar</option>
						<option value="Navi Mumbai">Navi Mumbai</option>
						<option value="Allahabad">Allahabad</option>
						<option value="Ranchi">Ranchi</option>
						<option value="Haora">Haora</option>
						<option value="Coimbatore">Coimbatore</option>
						<option value="Jabalpur">Jabalpur</option>
						<option value="Gwalior">Gwalior</option>
						<option value="Vijayawada">Vijayawada</option>
						<option value="Jodhpur">JodhpurPune</option>
						<option value="Madurai">Madurai</option>
						<option value="Raipur">Raipur</option>
						<option value="Kota">Kota</option>
						<option value="Guwahati">Guwahati</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Solapur">Solapur</option>
						<option value="Hubli">Hubli</option>
						<option value="Dharwad">Dharwad</option>
						<option value="Bareilly">Bareilly</option>
						<option value="Moradabad">Moradabad</option>
						<option value="Mysore">Mysore</option>
						<option value="Gurgaon">Gurgaon</option>
						<option value="Aligarh">Aligarh</option>
						<option value="Jalandhar">Jalandhar</option>
						<option value="Tiruchirappalli">Tiruchirappalli</option>
						<option value="Bhubaneswar">Meerut</option>
						<option value="Salem">Salem</option>
						<option value="Mira">Mira</option>
						<option value="Thiruvananthapuram">Thiruvananthapuram</option>
						<option value="Bhiwandi">Bhiwandi</option>
						<option value="Saharanpur">Saharanpur</option>
						<option value="Gorakhpur">Gorakhpur</option>
						<option value="Guntur">Guntur</option>
						<option value="Amritsar">Amritsar</option>
					    <option value="Bikaner">Bikaner</option>
						<option value="Amravati">Amravati</option>
						<option value="Noida">Noida</option>
						<option value="Jamshedpur">Jamshedpur</option>
						<option value="Bhilai Nagar">Bhilai Nagar</option>
						<option value="Warangal">Warangal</option>
						<option value="Cuttack	Orissa">Cuttack	Orissa</option>
						<option value="Firozabad">Firozabad</option>
						<option value="Kochi">Kochi</option>
						<option value="Bhavnagar">Bhavnagar</option>
						<option value="Dehradun">Dehradun</option>
						<option value="Durgapur">Durgapur</option>
						<option value="Asansol">Asansol</option>
						<option value="Nanded Waghala">Nanded Waghala</option>
						<option value="Kolapur">Kolapur</option>
						<option value="Ajmer">Ajmer</option>
						<option value="Gulbarga">Gulbarga</option>
						<option value="Jamnagar">Jamnagar/option>
						<option value="Ujjain">Ujjain</option>
						<option value="Loni">Loni</option>
						<option value="Siliguri">Siliguri</option>
						<option value="Jhansi">Jhansi</option>
						<option value="Ulhasnagar">Ulhasnagar</option>
						<option value="Nellore">Nellore</option>
						<option value="Jammu">Jammu</option>
						<option value="Sangli Miraj Kupwad">Sangli Miraj Kupwad</option>
						<option value="Belgaum">Belgaum</option>
						<option value="Mangalore">Mangalore</option>
						<option value="Ambattur">Ambattur</option>
						<option value="Tirunelveli">TirunelveliTirunelveli</option>
						<option value="Malegoan">Malegoan</option>
						<option value="Gaya">Gaya</option>
						<option value="Udaipur">Udaipur</option>
						<option value="Maheshtala">Maheshtala</option>
						<option value="Jalgaon">Jalgaon</option>
						</select>
				</div>
				
				  
				  <div class="col-sm-12">
					<label for="description">Description:</label>
					<textarea class="form-control" rows="5" name="description" id="description"  value="<?php echo  $sqldata[0]->description;?>"><?php echo  $sqldata[0]->description;?></textarea>
					</div>
				
				   <div class="col-sm-4">
				   <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="0"  value="<?php echo  $sqldata[0]->price;?>">
                  </div>
                
				
                <div class="col-sm-2">
					<label for="quantity">Stock:</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder  value="<?php echo  $sqldata[0]->quantity;?>">
				  </div>
				  <div class="col-sm-2 mb-3 mb-sm-0">	
				<label for="quantity">Units:</label>
			   	<select class="form-control col-sm-0" id="units" name="units" value="">
				<option value="<?php echo  $sqldata[0]->units;?>"><?php echo  $sqldata[0]->units;?></option>
						<option  value="KG">KG</option>
						<option value="Metric ton">Metric ton</option>
						<option value="Litre">Litre</option>
						<option value="lot">lot</option>
						<option value="litre">litre</option>
						<option value="Number">Number</option>
						<option value="Meter">Meter</option>
					
				    </select> 
			</div>
				
				
				
				
				<!--<img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/iron.jpg" alt="Chania" width="150" height="20">-->
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Minimum Order Stock:</label>
					<input type="text" class="form-control" id="minoderquant" name="minoderquant"  placeholder="" value="<?php echo  $sqldata[0]->minoderquant;?>" >
                    
                </div>
				<div class="col-sm-2 mb-3 mb-sm-0">
					<label for="Pname">supply Ability:</label>
					<input type="text" class="form-control" id="supplyability" name="supplyability"  placeholder="" value="<?php echo  $sqldata[0]->supplyability;?>">
                    
                </div>
				<div class="col-sm-2 mb-3 mb-sm-0">	
				<label for="quantity">Units:</label>
			   	<select class="form-control col-sm-0" id="supplyunits" name="supplyunits">
				<option value="<?php echo  $sqldata[0]->supplyunits;?>"><?php echo  $sqldata[0]->supplyunits;?></option>
						<option>KG</option>
						<option>Metric ton</option>
						<option>Litre</option>
						<option>lot</option>
						<option>litre</option>
						<option>Number</option>
						<option>Meter</option>
					
				    </select>
			</div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Payable To Rawmet:(%)</label>
					<input type="text" class="form-control" id="payable" name="payable"  placeholder="" value="<?php echo  $sqldata[0]->payable;?>" required>
					
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Stock Per Month:</label>
					<input type="text" class="form-control" id="quantpermonth" name="quantpermonth" value="<?php echo  $sqldata[0]->quantpermonth;?>"placeholder="">
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Estimated Delivery Time:</label>
					<input type="text" class="form-control" id="estdeltime" name="estdeltime"  placeholder="" value="<?php echo  $sqldata[0]->estdeltime;?>">
                    
                </div>
				 
		
					<div class="col-sm-4 mt-4">
					
								<img src="<?php if(unserialize($sqldata[0]->uploadproductimage) != NULL){
									$img = unserialize($sqldata[0]->uploadproductimage);
									echo base_url()."/web_files/uploads/".$img[0];}else{echo base_url()."#";} ?>" width="100%" height="100px">
									<?php 
									if(unserialize($sqldata[0]->uploadproductimage) != NULL){?>
								<input type="hidden" name="profileimage" id="profileimage" value="<?php echo $img[0];?>">
								<?php
									}
								?>
							
							
						
								
							<label for="">Update Image</label>
								<div class="input_fields_wrap">
								
								<input  type="file" id="uploadproductimage" name="uploadproductimage">
								</div>
							</div>
				
					<div class="col-md-12 text-center mt-4">
						<?php $proid = str_ireplace('/','-',$sqldata[0]->productid);
				?>
						
						<center>	
							
                <input type="submit" id="submitBtn" a style="margin:2px" class="btn btn-primary btn-sm text-white" href="<?php echo base_url()."vendor_postproduct_update/approve_product/".$proid;?>" class="btn btn-primary" name="submit" value="Update">	</center>	
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


