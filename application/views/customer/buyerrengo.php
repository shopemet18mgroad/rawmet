

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
				
	<!--Form1-->			
				<form class="user" action="<?php echo base_url();?>Customer_add_renegotiate" method="POST" enctype="multipart/form-data">
				<div class="row bg-light mt-5">
				
				
				<div class="col-sm-2">
				<p style="color:purple;"><b><?php echo $sqldata[0]->productname;?></b></p>
							<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $sqldata[0]->productname;?>">
				<div class="col-sm-4">
				<div class="thumbnail mt-2">
				
						<td><?php $img = unserialize($sqldata[0]->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="150px" height="100%"></td>
					<input type="hidden" class="form-control" id="uploadproductimage" name="uploadproductimage" value="<?php echo $img;?>">
				
				</div>	
					 <label><b>Description:</b></label>
				<p class="w-auto small"><?php echo  $sqldata[0]->description;?></p>
							<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">	
				</div>
				
				</div>
			

				<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
			
				
								
							<input type="hidden" class="form-control" id="vname" name="vname"  value="<?php echo $sqldata[0]->vname;?>">
							<input type="hidden" class="form-control" id="busername" name="busername"  value="<?php echo $sqldata[0]->busername;?>">
							
							
							
							
							<p><b>Category:</b><?php echo $sqldata[0]->category;?></p>
							<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo $sqldata[0]->category;?>">
							
							
							<p><b>Product Id:</b><?php echo $sqldata[0]->productid;?></p>
							<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo $sqldata[0]->productid;?>">
								
							
							
							<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo $sqldata[0]->companyname;?>">
							
							<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo $sqldata[0]->supplyunits;?>">
						<!--	<h6 class="text-center" style="color:orange;"><b>Quantity : <?php// echo $sqldata[0]->supplyability."/"; echo $sqldata[0]->supplyunits;?></b></h6>-->
							
							<h6><b>Posted Date: <?php echo  $sqldata[0]->datetime;?></b></h6>
							<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">
							
								<h6><b>Estimated Delivery: <?php echo  $sqldata[0]->estdeltime;?></b></h6>
							<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">
							
							<p class="mt-3"><b>Stock Available at : </b><?php echo $sqldata[0]->pcities."|"; echo $sqldata[0]->pstates;?></p>
							<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
							<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo $sqldata[0]->pstates;?>">
							<h6 style="color:purple;"><b>Validity Till: <?php echo  $sqldata[0]->productvalidityto;?></b></h6>
							<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">
							
					</div>
					</div>
				  </div>


					<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
					<center><b>Seller 1st Value</b></center>
							<hr class="sidebar-divider">
					<p style="color:orange;"><b>Seller Price:<?php echo $sqldata[0]->quantity.""; echo $sqldata[0]->units;?></b></p>
								<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo $sqldata[0]->quantity;?>">
								<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo $sqldata[0]->units;?>">
							<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo $sqldata[0]->price;?>">
					<center><b>Buyer 1st Negotiate</b></center>
							<hr class="sidebar-divider">
					<p style="color:green;"><b>Buyer Price:<?php echo $sqldata[0]->bprice."/"; echo $sqldata[0]->bunits;?></b></p>
								<input type="hidden" class="form-control" id="bprice" name="bprice"  value="<?php echo $sqldata[0]->bprice;?>">
								<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php echo $sqldata[0]->bunits;?>">
							
						<p style="color:green;"><b>Quantity:<?php echo $sqldata[0]->bquantity; echo $sqldata[0]->bsupplyability;?></b></p>
							<input type="hidden" class="form-control" id="bquantity" name="bquantity"  value="<?php echo $sqldata[0]->bquantity;?>">
							<input type="hidden" class="form-control" id="bsupplyability" name="bsupplyability"  value="<?php echo $sqldata[0]->bsupplyability;?>">
					
							
						<!--	<input type="hidden" class="form-control" id="selqan" name="selqan"  value="<?php //echo $sqldata[0]->selqan;?>">
							<input type="hidden" class="form-control" id="selunits" name="selunits"  value="<?php //echo $sqldata[0]->selunits;?>">-->
				
							
					</div>
					</div>
				  </div>
				  
				  
				  <div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							
						
							
							
							<center><b>Supplier Re-Negotiate</b></center>
							<hr class="sidebar-divider">
							
								<div class="form-row">
					
							    
						<p style="color:orange;"><b> Price:<?php echo $sqldata[0]->selprice."/"; echo $sqldata[0]->sunits;?></b></p>
							<input type="hidden" class="form-control" id="selprice" name="selprice"  value="<?php echo $sqldata[0]->selprice;?>">
							<input type="hidden" class="form-control" id="sunits" name="sunits"  value="<?php echo $sqldata[0]->sunits;?>">
								
						
								
							</div>
  
						<center><b>Buyer Re-Negotiate</b></center>
							<hr class="sidebar-divider">
							<div class="form-row">
							
								<label class="col-sm-6 col-form-label"  for="name"><b>Quantity</b></label>
								<input type="text" class="form-control col-sm-2 mr-2" name="brenegoquantity" placeholder="Quantity" id="brenegoquantity" [(ngModel)]="person.name" />
							<div class="col-sm-3">  
						<select class="form-control col-sm-0" id="brenegoquantityunit" name="brenegoquantityunit">
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
								<label class="col-sm-6 col-form-label"  for="name"><b>Your Price </b></label>
								<input type="text" class="form-control col-sm-2 mr-2" name="brenegoprice" placeholder="price" id="brenegoprice" [(ngModel)]="person.name"/>/
								<div class="col-sm-3">  
						<select class="form-control col-sm-0" id="brenegounit" name="brenegounit">
						<option value="KG">KG</option>
								<option value="Metric Ton">Metric Ton</option>
								<option value="Litre">Litre</option>
								<option value="lot">lot</option>
								<option value="Number">Number</option>
								<option value="Meter">Meter</option>
					
				    </select>
					
						
					
					</div>
						</div>
						</div>
					 
				  </div>
								<a href="#" class="neg"> </a>
								<button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2" name="btnsubmit_rengo" id= "btnsubmit_rengo" role="submit"  onclick= "return validate_selnego()">Re-Negotiated</a></button>
								 <button type="button" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2" name="btncancel" id= "btncancel" role="Cancel">Cancel</a></button>
								 <button style="background-color:orange" type="button" class="btn btn-info btn-sm mt-2 offset-sm-2" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#final_Negotiated">Final Negotiated</button>
								 
							
							
							<!-- Logout Modal-->
  <div class="modal fade" id="final_Negotiated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">finel?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Final</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2"  name="btnsubmit_final" id= "btnsubmit_final" role="submit"  onclick= "return validate_selnego()">Final-Negotiated</a></button>
        </div>
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
	  
	 

   