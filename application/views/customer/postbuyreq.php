

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
                  <h5 class="m-0 font-weight-bold text-primary">Post Bulk Requirement</h5>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">		
				<form action="<?php echo base_url();?>customer_postbuyreq" method="POST" enctype="multipart/form-data">
				
				<div class="row ml-4">
				<div class="col-sm-4 bg-warning">
				<div class="thumbnail mt-2 p-2">
				<h3 class="m-0 font-weight-bold text-primary">How to get Quotation Quickly?</h3>
				
					<div class="col p-3 m-5">
						<i class="fas fa-file-image fa-3x mt-5"></i>Submit RFQ</p>
						<p><i class="fas fa-sort fa-3x mt-5"></i>Compare Quote</p>
						<p><i class="fas fa-handshake fa-3x mt-5" aria-hidden="true"></i>	Contact </p>

					</div>
				</div>	
				</div>

			<form action="<?php echo base_url();?>customer_postbuyreq" method="POST" enctype="multipart/form-data">
				<div class="caption col-7 p-2 ml-5 bg-light">
				<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
						<label for="">Customer Name</label>
						<input type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $scomp[0]->bname;?>" readonly>
						<input hidden type="text" class="form-control" id="buyerid" name="buyerid"  value="<?php echo  $scomp[0]->buyerid;?>" readonly>
                    </div>
					<div class="col-sm-4 mb-12 pl-5 mb-sm-0">
						<label for="">Company Name</label>
						<input type="text" class="form-control" id="bcompanyname" name="bcompanyname"  value="<?php echo  $scomp[0]->bcompanyname;?>" readonly>
                    </div>
				</div>
				
				<div class="col-sm-4 mb-3 mb-sm-1">
					<label for="">Category</label>
					<select class="form-control" id="category" name="category">
					       <option value="Category">--Category--</option>
						<option value="Non Metal">Non Metal</option>
						<option value="Ferrous">Ferrous</option>
						<option value="Non Ferrous">Non Ferrous</option>
				        <option value="Scrap" >Scrap</option>
						<option value="Metal" >Metal</option>
				    </select> 
                    
                </div>
							
				<div class="form-inline">
				<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
						<label>Product Name:</label>
						<input type="text" class="form-control" id="productname" name="productname" placeholder="Enter product name.." onkeyup="product_id()">
						</div>
				
							
				<div class="col-sm-4 mb-3 pl-5 mb-sm-0">
					<label for="">Product Id</label>
					<input type="text" class="form-control" id="productid" name="productid"  placeholder="Product Id">
                    
                </div>
				</div>
					<h6 class="mt-2"><b>&nbsp;&nbsp;Describe your Buying requirement</b></h6>
					<div class="col-sm-5 col-md-12">
                      <textarea class="form-control" rows="4" id="description" name="description" placeholder="Describe your buying requirement.."></textarea>
					</div>
					
						<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
						<label>Expected Price:</label>
						<input type="text" class="form-control" id="price" name="price">
					</div>
					<div class="col-sm-4 mb-3 pl-5 mb-sm-0">			
						<label for="price">Units:</label>
						<select class="form-control col-sm-0" id="priceperkg" name="priceperkg">
							<option  value="KG">KG</option>
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
						<input type="text" class="form-control" id="quantity" name="quantity">
					</div>
					<div class="col-sm-4 mb-3 pl-5 mb-sm-0">			
						<label for="quantity">Units:</label>
						<select class="form-control col-sm-0" id="units" name="units">
							<option  value="KG">KG</option>
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
					<input style="width:250px" class="form-control" type="datetime-local" id="requireddate" name="requireddate">
					</div>
					<div class="col-sm-4 mb-3 pl-5 mb-sm-0">			
						<label>Last Date</label>
					<input style="width:250px" class="form-control" type="datetime-local" id="lastdate" name="lastdate">
					</div>
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
								<input type="file" class="form-control-file" id="uploadimage" name="uploadimage[]">
								<!-- <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Upload PDF Files</label>
								<input type="file" class="form-control-file" id="uploadpdf"  name="uploadpdf[]">
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
				 <center>
				<input type="submit" name="submit"  role="submit" onclick="return validatepostreq()" value="Post Buying Requirement" class="btn btn-info mt-4" style="font-size:13px">
				</center>
					
					</form>
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
 <script>
  
function validatepostreq(){

	var category = document.getElementById("category").value;
	var productname = document.getElementById("productname").value;
	var description = document.getElementById("description").value;
	//var price = document.getElementById("price").value;
	var priceperkg = document.getElementById("priceperkg").value;
	var quantity = document.getElementById("quantity").value;
	var units = document.getElementById("units").value;
	var requireddate = document.getElementById("requireddate").value;
	var lastdate = document.getElementById("lastdate").value;
	var email = document.getElementById("email").value;
	var contactnumber = document.getElementById("contactnumber").value;
	var uploadimage = document.getElementById("uploadimage").value;
	var uploadpdf = document.getElementById("uploadpdf").value;
	var iagreee = document.getElementById("iagreee").value;
	

if(category == '' || productname == '' || description == '' || quantity == ''  || units == '' || requireddate == '' || lastdate == '' || email == '' || contactnumber == '' || uploadimage == ''|| uploadpdf == '' || iagreee == ''){
swal("Alert!","Category, Product Name, Description, Quantity, Units, Dates , Email, Contact Number, Image, PDF, Terms and condition cannot leave any field blank!","error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {category:category,productname:productname,description:description,quantity:quantity,units:units,requireddate:requireddate,lastdate:lastdate,email:email,contactnumber:contactnumber,uploadimage:uploadimage,uploadpdf:uploadpdf,iagreee:iagreee},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }

}
  </script>
      