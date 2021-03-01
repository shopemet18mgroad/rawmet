<div style = "float:left;">
	<div class="col-xl-6ol-lg-8">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div
										class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										
										<h6  class="text-xl-center m-0 font-weight-bold text-primary">Product Name:<?php echo  $sqldata[0]->productname;?></h6>
										
										
								<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo  $sqldata[0]->supplyability;?>">
								<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">
										
										
										
										
										
										<div class="dropdown no-arrow">
											<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
												aria-labelledby="dropdownMenuLink">
												<div class="dropdown-header">Dropdown Header:</div>
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<!-- Card Body -->
			<div class="card-body">
										
	  <div class="form-row align-items-top">
		 
		 <div class="form-inline">
		 <div class="col-md-6">

			  <div class="view overlay z-depth-1-half">
				<?php $img = unserialize($sqldata[0]->uploadproductimage)?>
					<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="120" height="100">
				<div class="mask rgba-white-light"></div>
				<label><b>Description:</b></label>
					<p class="w-auto small"><?php echo  $sqldata[0]->description;?></p>
								<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">
					<p><b>Supplier Price:</b><?php echo  $sqldata[0]->price."/"; echo $sqldata[0]->punits;?></p>
								<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo  $sqldata[0]->price;?>">
								<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo  $sqldata[0]->punits;?>">
								
								
								<h6 style="color:green;"><b>Supply Ability: <?php echo  $sqldata[0]->quantity." "; echo  $sqldata[0]->units;?></b></h6>
								<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo  $sqldata[0]->quantity;?>">
								<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo  $sqldata[0]->units;?>">
								
								<h6 style="color:orange;"><b>Live Stock: <?php echo  $sqldata[0]->supplyability." "; echo  $sqldata[0]->supplyunits;?></b></h6>
								
								
						
								
								
								
								
								
								
								
			  </div>

			  <br />

			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-6">
			
			
			
		
			
									
								
								<p><b>Product Id:</b></br><?php echo  $sqldata[0]->productid;?></p>
								<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata[0]->productid;?>">
								
								<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
								<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sessi;?>">
								
								<p><b>Category:</b></br><?php echo  $sqldata[0]->category;?></p>
								<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo  $sqldata[0]->category;?>">
								
								
								<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo  $sqldata[0]->companyname;?>">
								
								
									<h6><b>Posted Date:</br> <?php echo  $sqldata[0]->datetime;?></b></h6>
								<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">
								
									<h6><b>Estimated Delivery:<br> <?php echo  $sqldata[0]->estdeltime;?></b></h6>
								<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">
								
								<h6 style="color:purple;"><b>Validity Till:<br> <?php echo  $sqldata[0]->productvalidityto;?></b></h6>
								
			
			
			
			
					 
			 
			  

			</div>
		
		
							
								
			</div>
		  </div>
		  </div>
		 </div>
	</div>
</div>
							
							
							
							
							
							
							
							
							
							
							
							
		</div>		
		<div style = "float:right;">
	<div class="col-xl-4 col-lg-6">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div
										class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										
										<h6  class="text-xl-center m-0 font-weight-bold text-primary">Product Name:<?php echo  $sqldata[0]->productname;?></h6>

									</div>
									<!-- Card Body -->
			<div class="card-body">
			
				<form class="user" action="<?php echo base_url();?>Customer_add_contactsupplier" method="POST" enctype="multipart/form-data">							
	  <div class="form-row align-items-top">
		 
		 <div class="form-inline">
		 <div class="col-md-6">

			  
			  <br />

			</div>
			<!--Grid column-->

			<!--Grid column-->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

			













									
															
								
								
			
			
								
								
						
								
								
								
								
								
								
								
								
			</div>
		  </div>
		  	</form>	
		 </div>
	</div>
</div>
							
							
							
					