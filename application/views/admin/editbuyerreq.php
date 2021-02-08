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
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
              <!--   Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                  <h5 class="m-0 font-weight-bold text-primary">Edit Requirement</h5>
               
                </div>
                <!-- Card Body -->
                
                </div>
                <!-- Card Body -->
                <div class="card-body">		
				<form action="<?php echo base_url();?>customer_postbuyreq" method="POST" enctype="multipart/form-data">
				
		
				
				
				<div class="row ml-10">
				

			<form action="<?php echo base_url();?>Admin_buyingrequirement_update" method="POST" enctype="multipart/form-data">
				<div class="caption col-12 ">
				<div class="form-inline">
					<div class="col-sm-6">
						
						<input type="text" class="form-control col-6" id="bname" name="bname"  value="<?php echo  $sqldata[0]->bname;?>" readonly>
                    </div>
					<div class="col-sm-4 mb-3 mb-sm-0">
						<label  >Company Name:</label>
						<input type="text" class="form-control" id="bcompanyname" name="bcompanyname"  value="<?php echo  $sqldata[0]->bcompanyname;?>" readonly>
                    </div>
				</div>
				<div class="form-inline">
				<div class="col-sm-6 pr-8 mb-3 mb-sm-0">
					<label for="">Category</label>
					<select class="form-control" id="category" name="category" readonly>
					       <option value="<?php echo  $sqldata[0]->category;?>"><?php echo  $sqldata[0]->category;?></option>
						<option value="Non Metal">Non Metal</option>
						<option value="Ferrous">Ferrous</option>
						<option value="Non Ferrous">Non Ferrous</option>
				        <option value="Scrap" >Scrap</option>
						<option value="Metal" >Metal</option>
				    </select> 
					</div>
				
							
				<div  class="col-sm-6 mb-5 pl-5 mb-sm-0 ">
                    <label  class="col-sm-6 mb-5 pl-5 mb-sm-0 " >Types:</label>
					<select class="form-control" id="types" name="types" readonly>
					<option value="<?php echo  $sqldata[0]->types;?>"><?php echo  $sqldata[0]->types;?></option>
						<option value="Primary">Primary</option>
						<option value="Secondary">Secondary</option>
				        <option value="Scrap" >Scrap</option>
				    </select>  
                </div>
				</div>
				
							
				<div class="form-inline">
				<div class="col-sm-6 pr-6 mb-6 mb-sm-8">
						<label>Product Name:</label>
						<input type="text" class="form-control" id="productname" name="productname" value="<?php echo  $sqldata[0]->productname;?>" readonly>
						</div>
				
							
				<div class="col-sm-6 mb-5 pl-5 mb-sm-0">
					<label for="">Product Id</label>
					<input type="text" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata[0]->productid;?>"readonly>
                    
                </div>
				</div>
					<h6 class="mt-2"><b>&nbsp;&nbsp;Describe your Buying requirement</b></h6>
					<div class="col-sm-5 col-md-12">
                      <textarea class="form-control" rows="4" id="description" name="description" value="<?php echo  $sqldata[0]->description;?>"><?php echo  $sqldata[0]->description;?></textarea>
					</div>
					
						<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
						<label>Price:</label>
						<input type="text" class="form-control" id="price" name="price" value="<?php echo  $sqldata[0]->price;?>">
					</div>
					<div class="col-sm-4 mb-3 pl-5 mb-sm-0">			
						<label for="price">Units:</label>
						<select class="form-control col-sm-0" id="priceperkg" name="priceperkg">
							<option  value="<?php echo  $sqldata[0]->priceperkg;?>"><?php echo  $sqldata[0]->priceperkg;?></option>
							<option value="Metric ton">Metric ton</option>
							<option value="Litre">Litre</option>
							<option value="lot">lot</option>
							<option value="litre">litre</option>
							<option value="Number">Number</option>
							<option value="Meter">Meter</option>
						</select>
					</div>
					</div>
					 
					<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
						<label>Quantity:</label>
						<input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo  $sqldata[0]->quantity;?>">
					</div>
					<div class="col-sm-4 mb-3 pl-5 mb-sm-0">			
						<label for="quantity">Units:</label>
						<select class="form-control col-sm-0" id="units" name="units">
							<option  value="<?php echo  $sqldata[0]->units;?>"><?php echo  $sqldata[0]->units;?></option>
							<option value="Metric ton">Metric ton</option>
							<option value="Litre">Litre</option>
							<option value="lot">lot</option>
							<option value="litre">litre</option>
							<option value="Number">Number</option>
							<option value="Meter">Meter</option>
						</select>
					</div>
					</div>
					
					
				<div class="form-inline">	
				<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
					<label>Required Date</label>
					<input class="form-control" type="Date" id="requireddate" name="requireddate" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->requireddate)); ?>">
				</div>
				<div class="col-sm-4 mb-3 pl-5 mb-sm-0">
					<label>Last Date</label>
					<input class="form-control" type="Date" id="lastdate" name="lastdate" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->lastdate)); ?>">
				</div>
				</div>
						<div class="col-sm-12 col-md-9 mt-2">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" class="form-control" id="email" name="email"  value="<?php echo  $sqldata[0]->email;?>">
							</div>
							<label>Contact Number</label>
							<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">+91</span>
							</div>
								<input type="text" class="form-control" aria-label="Small" id="contactnumber" name="contactnumber" aria-describedby="inputGroup-sizing-sm"  value="<?php echo  $sqldata[0]->contactnumber;?>">
							</div>
						</div>
						
						<div class="col-sm-12 col-md-6 mt-2">
						
							<div class="form-group">
							
							<img src="<?php if(unserialize($sqldata[0]->uploadimage) != NULL){
									$img = unserialize($sqldata[0]->uploadimage);
									echo base_url()."/web_files/uploads/".$img[0];}else{echo base_url()."#";} ?>" width="100%" height="100px">
									<?php 
									if(unserialize($sqldata[0]->uploadimage) != NULL){?>
								<input type="hidden" name="profileimage" id="profileimage" value="<?php echo $img[0];?>">
								<?php
									}
								?>
									<label for="">Update Image</label>
								<div class="input_fields_wrap">
								
								<input  type="file" id="uploadimage" name="uploadimage">
								</div>
							</div>
							
								
								<!-- <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
							</div>
						
						</div>
						</div>
						
						<!--<div class="col-sm-12 col-md-7 mt-2">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="iagreee" name="iagreee">
								<label class="form-check-label" for="exampleCheck1">
								I agree to the <a href="">Terms & Conditions</a></label>
							</div>
						</div>-->
				 <center>
				<input type="submit" name="submit"  role="submit" onclick="return validatepostreq()" value="Update" class="btn btn-info mt-4" style="font-size:13px">
				</center>
					
					</form>
					</div>
			
				  </div>
				

				</div>
	
           
			
              </div>
			  			    
            </div>

            <!-- Pie Chart -->

          </div>
		  
	

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

   

      <!-- End of Main Content -->
 <script>
  
function validatepostreq(){

	var category = document.getElementById("category").value;
	var productname = document.getElementById("productname").value;
	var description = document.getElementById("description").value;
	var price = document.getElementById("price").value;
	var priceperkg = document.getElementById("priceperkg").value;
	var quantity = document.getElementById("quantity").value;
	var units = document.getElementById("units").value;
	var requireddate = document.getElementById("requireddate").value;
	var lastdate = document.getElementById("lastdate").value;
	var email = document.getElementById("email").value;
	var contactnumber = document.getElementById("contactnumber").value;

	

if(category == '' || productname == '' || description == '' || price == '' || quantity == '' || priceperkg == '' || units == '' || requireddate == '' || lastdate == '' || email == '' || contactnumber == ''){
swal("Alert!","Category, Product Name, Description, Price, Quantity, Price/KG, Units, Dates , Email, Contact Number cannot leave any field blank!","error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {category:category,productname:productname,description:description,price:price,quantity:quantity,priceperkg:priceperkg,units:units,requireddate:requireddate,lastdate:lastdate,email:email,contactnumber:contactnumber},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }

}
  </script>
      