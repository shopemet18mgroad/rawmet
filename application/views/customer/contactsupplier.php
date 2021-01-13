

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
				<form class="user" action="<?php echo base_url();?>Customer_add_contactsupplier" method="POST" enctype="multipart/form-data">
				
				<div class="row bg-light mt-5">
				
				<?php $proid =str_ireplace('/','-', $sqldata[0]->productid);
				
				?>
				<div class="col-sm-3">
				<div class="col-sm-4">
				<p style="color:purple;"><b><?php echo  $sqldata[0]->productname;?></b></p>
						<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $sqldata[0]->productname;?>">
				<div class="thumbnail">
					<td><?php $img = unserialize( $sqldata[0]->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="100%"></td>
				<input type="hidden" class="form-control" id="uploadproductimage" name="uploadproductimage" value="<?php echo $img[0];?>">
				
					
					</div>		
						
				</div>
				</div>
			

				<div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
									
							
							<p><b>Supplier Name:</b><?php echo $sqldata[0]->vname;?></p>
							<input type="hidden" class="form-control" id="vname" name="vname"  value="<?php echo $sqldata[0]->vname;?>">
							<input type="hidden" class="form-control" id="busername" name="busername"  value="<?php echo $sessi;?>">
							
							<p><b>Category:</b><?php echo  $sqldata[0]->category;?></p>
							<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo  $sqldata[0]->category;?>">
							
							<p><b>Product Id:</b><?php echo  $sqldata[0]->productid;?></p>
							<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata[0]->productid;?>">
							
						
							
							<p><b>Company Name:</b><?php echo  $sqldata[0]->companyname;?></p>
							<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo  $sqldata[0]->companyname;?>">
							
							<p><b>Supplier Price:</b><?php echo  $sqldata[0]->price."/"; echo $sqldata[0]->units;?></p>
							<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo  $sqldata[0]->price;?>">
							<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo  $sqldata[0]->units;?>">
							
							<p class="mt-3"><b>Stock Available at :</b> <?php echo $sqldata[0]->pcities."|"; echo  $sqldata[0]->pstates;?></p>
							<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
							<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo  $sqldata[0]->pstates;?>">
							
							<h6 style="color:orange;"><b>Live Stock : <?php echo  $sqldata[0]->supplyability."/"; echo  $sqldata[0]->supplyunits;?></b></h6>
							<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo  $sqldata[0]->supplyability;?>">
					</div>
					</div>
				  </div>


					
				  
				  
				  <div class="col-sm-5 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							
							<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">
							
							<div class="form-check mt-3 text-left">
								
							<center><h3 style="color:blue;"><b>
								Negotiate Here</b></h3></center>
							</div>
  
					
							<div class="form-row mt-5">
								<label class="col-sm-6 col-form-label"  for="name"><b>Quantity</b></label>
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
								<label class="col-sm-6 col-form-label"  for="name"><b>Your Price </b></label>
								<input type="text" class="form-control col-sm-2 mr-2" name="bprice" placeholder="price" id="bprice" [(ngModel)]="person.name"/>/
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
					
						
							<center>
							
							<input type="submit" name="submit" onclick="return validatepost()" role="submit" value="Submit" class="btn btn-info btn-sm mt-2" style="font-size:13px" >
							
							
							
							<!--<a type="submit" href="<?php //echo base_url()."Customer_add_contactsupplier/Addtosubmit/".$proid."/".urlencode($sqldata[0]->vname);?>" onsubmit="return validate_neg()  role="submit">-->
							

							
							
							</center>	
								
							 <!--<a type="submit" href="<?php// echo base_url()."Customer_add_contactsupplier/Addtosubmit/".$proid."/".urlencode($row->vname);?>"  role="submit"><button name="submit"  class="btn btn-info btn-sm mt-2 offset-sm-5">Submit</button></a>-->
								

			<!--<button><a type="submit" name="submit" href="<?php// echo base_url(). $proid.'|'.urlencode($row->vname)?>" onclick="return validate_prodid()"> Submit</a></button>-->
					<!--<input type="submit" id="" class="btn btn-primary " name="submit" value="submit">-->
					
							
							</div>
					
							
					</div>
					
					</div>
					  
				  </div>
				  
				  <label><b>Description:</b></label>
				<p class="w-auto small"><?php echo  $sqldata[0]->description;?></p>
							<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">
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

    <script>
  
function validatepost(){

	var bquantity = document.getElementById("bquantity").value;
	var bsupplyability = document.getElementById("bsupplyability").value;
	var bprice = document.getElementById("bprice").value;
	var bunits = document.getElementById("bunits").value;


	

if(bquantity == '' || bsupplyability == '' || bprice == '' || bunits == '' ){
swal("Alert!","You can negotiate ony once and cannot leave any field blank!","error");
		return false;
	}

}
  </script>