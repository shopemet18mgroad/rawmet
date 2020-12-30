

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
               <!--  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
               
                </div> -->
                <!-- Card Body -->
                <div class="card-body">
				<center>
				<div class="form-check m-4 ">
							
								
								<button type="button" class="btn btn-primary">Negotiate All</button></a>
							</div>
							</center>
	<!--Form1-->			
				<form class="user" action="<?php echo base_url();?>vendor_sellerquotenego" method="POST" enctype="multipart/form-data">
				<div class="row bg-light mt-5">
				
				
				<div class="col-sm-2">
				<div class="col-sm-4">
				<div class="thumbnail mt-5">
				
				<!--<input type="hidden" class="form-control" id="uploadproductimage" name="uploadproductimage">-->
				</div>	
				</div>
				</div>
			

				<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
									
							
							<p><b>Supplier Name:</b><?php echo $sqldata[0]->vname;?></p>
							<p><b>Buyer Name:</b><?php echo $sqldata[0]->busername;?></p>
							
							<p><b>Category:</b><?php echo $sqldata[0]->category;?></p>
							
							
							<p><b>Product Id:</b><?php echo $sqldata[0]->productid;?></p>
						
							
							<p><b>Company Name:</b><?php echo $sqldata[0]->companyname;?></p>
						
							
							<p><b>Supplier Price:</b><?php echo $sqldata[0]->price."/"; echo $sqldata[0]->units;?></p>
							
							
							<p class="mt-3">Stock Available at : <?php echo $sqldata[0]->pcities."|"; echo $sqldata[0]->pstates;?></p>
							
					</div>
					</div>
				  </div>


					<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
							<h4 style="color:purple;"><b><?php echo $sqldata[0]->productname;?></b></h4>
						
						
							<p class="w-auto small"><?php echo $sqldata[0]->description;?></p>
							
							
					</div>
					</div>
				  </div>
				  
				  
				  <div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							<h6 class="text-center" style="color:orange;"><b>Live Stock : <?php echo $sqldata[0]->supplyability."/"; echo $sqldata[0]->supplyunits;?></b></h6>
						
							<p><b>Quantity:</b><?php echo $sqldata[0]->bquantity."/"; echo $sqldata[0]->bsupplyability;?></p>
							
							
							<p><b>Price:</b><?php echo $sqldata[0]->bprice."/"; echo $sqldata[0]->bunits;?></p>
							
							<hr class="sidebar-divider">
							<center><b>Seller Negotiate</b></center>
							
							<div class="form-check mt-3 text-left">
								
							<label class="form-check-label">
								<input type="checkbox" value="negotiate" id="negotiate" name="negotiate">Negotiate</label>
							</div>
  
					
							<div class="form-row">
								<label class="col-sm-6 col-form-label"  for="name">Quantity</label>
								<input type="text" class="form-control col-sm-2 mr-2" name="bquantity" placeholder="Quantity" id="bquantity" [(ngModel)]="person.name" />
							<div class="col-sm-3">  
						<select class="form-control col-sm-0" id="bsupplyability" name="bsupplyability">
								<option value="KG">KG</option>
								<option value="Metric Ton">Metric Ton</option>
								<option value="Litre">Litre</option>
								<option value="lot">lot</option>
								<option value="Number">Number</option>
								<option value="Meter">Meter</option>
					    </select>
				</div>
								
							</div>
							<div class="form-row mt-2">
								<label class="col-sm-6 col-form-label"  for="name">Your Price Per KG</label>
								<input type="text" class="form-control col-sm-2 mr-2" name="bprice" placeholder="price" id="bprice" [(ngModel)]="person.name"/>
								<div class="col-sm-3">  
						<select class="form-control col-sm-0" id="bunits" name="bunits">
						<option value="KG">KG</option>
								<option value="Metric Ton">Metric Ton</option>
								<option value="Litre">Litre</option>
								<option value="lot">lot</option>
								<option value="Number">Number</option>
								<option value="Meter">Meter</option>
					
				    </select>
					
					</div>
								<button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-5" name="submit" id= "submit" role="submit">Submit</a>
								 
							</div>
					
							
					</div>
					
					</div>
					 
				  </div>
				
                </div>
						
                </form>	

				
				
			

            </div>

			 <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->

            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

   