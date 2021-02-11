

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
                  <h5 class="m-0 font-weight-bold text-primary">Negotiate Buyer Requirement</h5>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">		
				<form action="<?php echo base_url();?>Vendor_add_seller_renego_buyresponse" method="POST" enctype="multipart/form-data">
				
				<div class="row ml-4">
				
			

			<form action="<?php echo base_url();?>Vendor_add_seller_renego_buyresponse" method="POST" enctype="multipart/form-data">
				<div class="caption col-10 p-2 ml-5 bg-light">
				<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
						<label for="">Buyer Name</label>
						<input type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata1[0]->bname;?>" readonly>
						
						<input type="hidden" class="form-control" id="vusername" name="vusername"  value="<?php echo $sessi;?>">
						
						
                    </div>
					
					

                    
              
					<div class="col-sm-4 mb-3 pl-5 mb-sm-0">
						<label for="">Companyname</label>
						<input type="text" class="form-control" id="bcompanyname" name="bcompanyname"  value="<?php echo  $sqldata1[0]->bcompanyname;?>" readonly>
                    </div>
				</div>
				
				<div class="col-sm-4 mb-3 mb-sm-1">
				<label for="">Category</label>
					
					<select class="form-control" id="category" name="category" readonly>
					       <option value="<?php echo  $sqldata1[0]->category;?>"><?php echo  $sqldata1[0]->category;?></option>
						<option value="Non Metal">Non Metal</option>
						<option value="Ferrous">Ferrous</option>
						<option value="Non Ferrous">Non Ferrous</option>
				        <option value="Scrap" >Scrap</option>
						<option value="Metal" >Metal</option>
				    </select> 
                    
                </div>
							
				<div class="form-inline">
				<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
						<label> Buyer Productname:</label>
						 <input type="text" class="form-control" id="productname" name="productname"placeholder="Enter product name.." onkeyup="product_id()" value="<?php echo  $sqldata1[0]->productname;?>" readonly>
						
						</div>
				
					
				<div class="col-sm-4 mb-3 pl-5 mb-sm-0">
					<label for="">Buyer Productid</label>
					<input type="text" class="form-control" id="productid" name="productid"  placeholder="Product Id" value="<?php echo  $sqldata1[0]->productid;?>" readonly>
                    
                </div>
				</div>
					<h6 class="mt-2"><b>&nbsp;&nbsp;Describe your Buying requirement</b></h6>
					<div class="col-sm-5 col-md-12">
                      <textarea class="form-control" rows="4" id="description" name="description" placeholder="Describe your buying requirement.."value="<?php echo  $sqldata1[0]->description;?>"readonly><?php echo  $sqldata1[0]->description;?></textarea>
					</div>
					
					
					 
					<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
					 
						<label>Buyer Base Quantity:</label>
						<input type="text" class="form-control" id="quantity" name="quantity"value="<?php echo  $sqldata1[0]->quantity.' '.$sqldata1[0]->units;?>" readonly>
					</div>
					
					
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
				 
						<label> Buyer Base Price:</label>
						<input type="text" class="form-control" id="price" name="price"value="<?php echo  $sqldata1[0]->price.' / '.$sqldata1[0]->priceperkg;?> " readonly>
					</div>
					
					</div>
					
					<hr >
					
						<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
					 	<b>Seller Negotiated Price</b>
						<label>Seller Price:</label>
						<input type="text" class="form-control" id="price" name="price"value="<?php echo  $sqldata1[0]->sellerprice.' / '.$sqldata1[0]->bsupplyability;?> " readonly>
					</div>
					
					
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
				 
						<b>Buyer Negotiated Price</b>
						<label>Buyer Price:</label>
						<input type="text" class="form-control" id="price" name="price" value="<?php echo  $sqldata1[0]->buyer_nego_price.' / '.$sqldata1[0]->buyer_nego_units;?> " readonly>
					</div>
					
					</div>
					
					<hr >
					<b>Seller Re_Negotiated Price</b>
						<div class="form-inline">
					<div class="col-sm-5 pr-5 mb-3 mb-sm-0">
					 	
						<label>Seller Price:</label>
						<input type="text" class="form-control" id="seller_renego_price" name="seller_renego_price"  >
					</div>
					
					
					<div class="col-sm-4 pr-5 mb-3 mb-sm-0">
						<label>Units:</label>
						<select class="form-control col-sm-0" id="seller_renego_units" name="seller_renego_units">
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
				 
					 
				
					
					
					
				<input type="hidden" class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" value="<?php echo  $sqldata1[0]->seller_mbuyreq_id;?> ">
						
						
						
						
				<center>
					<button type="submit" href="<?php echo base_url();?>" class="btn btn-info btn-sm mt-2" style="font-size:13px" name="submit" role="submit"><b>Submit</b></button>
					 <button style="background-color:orange" type="button" class="btn btn-info btn-sm mt-2 offset-sm-2" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#final_Negotiated">Final Negotiated</button>
					</center> 
					 
					 
	 <div class="modal fade" id="final_Negotiated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">This is your final Re_Negotiation?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
       
        <div class="modal-footer">
		
          <button class="btn btn-danger btn-sm mt-2" type="button" data-dismiss="modal">Cancel</button>
	<button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2"  name="btnsubmit_final" id= "btnsubmit_final" role="submit" >Final-Negotiated</a></button>

        </div>
      </div>
    </div>
  </div>
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

      
      <!-- End of Main Content -->

      