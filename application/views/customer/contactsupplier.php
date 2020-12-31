

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
				<form class="user" action="<?php echo base_url();?>customer_add_contactsupplier" method="POST" enctype="multipart/form-data">
				
				<div class="row bg-light mt-5">
				<?php foreach($sqldata as $row){?>
				<?php $proid =str_ireplace('/','-',$row->productid);
				
				?>
				<div class="col-sm-2">
				<div class="col-sm-4">
				<div class="thumbnail mt-5">
					<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="85px"></td>
				<input type="hidden" class="form-control" id="uploadproductimage" name="uploadproductimage" value="<?php echo $img[0];?>">
				</div>	
				</div>
				</div>
			

				<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
									
							
							<p><b>Supplier Name:</b><?php echo $row->vname;?></p>
							<input type="hidden" class="form-control" id="vname" name="vname"  value="<?php echo $row->vname;?>">
							<input type="hidden" class="form-control" id="busername" name="busername"  value="<?php echo $sessi;?>">
							
							<p><b>Category:</b><?php echo $row->category;?></p>
							<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo $row->category;?>">
							
							<p><b>Product Id:</b><?php echo $row->productid;?></p>
							<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo $row->productid;?>">
							
							<p><b>Company Name:</b><?php echo $row->companyname;?></p>
							<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo $row->companyname;?>">
							
							<p><b>Supplier Price:</b><?php echo $row->price."/"; echo $row->units;?></p>
							<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo $row->price;?>">
							<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo $row->units;?>">
							
							<p class="mt-3">Stock Available at : <?php echo $row->pcities."|"; echo $row->pstates;?></p>
							<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $row->pcities;?>">
							<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo $row->pstates;?>">
					</div>
					</div>
				  </div>


					<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
							<h4 style="color:purple;"><b><?php echo $row->productname;?></b></h4>
						<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $row->productname;?>">
						
							<p class="w-auto small"><?php echo $row->description;?></p>
							<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo $row->description;?>">
							
					</div>
					</div>
				  </div>
				  
				  
				  <div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							<h6 class="text-center" style="color:orange;"><b>Live Stock : <?php echo $row->supplyability."/"; echo $row->supplyunits;?></b></h6>
							<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo $row->supplyability;?>">
							<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo $row->supplyunits;?>">
							
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
					
								<!--<button type="submit" href="<?php// echo base_url()."customer_contactsupplier/Addtosubmit/".$proid."/".urlencode($row->vname);?>" class="btn btn-info btn-sm mt-2 offset-sm-5" name="submit" id="submit" role="submit">Submit</button>-->
								

			<input type="hidden" name="submit" value="<?php echo base_url()."customer_contactsupplier/Addtosubmit/". $proid.'|'.urlencode($row->vname)?>"> 
					<input type="submit" id="" class="btn btn-primary " name="submit" value="submit">
		 								
							</div>
					
							
					</div>
					
					</div>
					  
				  </div>
				  
				  <?php }?>	
				
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

   