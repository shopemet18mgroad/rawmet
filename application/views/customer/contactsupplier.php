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
				<p style="color:purple; font-size:18px;"><b><?php echo  $sqldata[0]->productname;?></b></p>
						<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $sqldata[0]->productname;?>">	
				<div class="col-sm-4">
				
				<div class="thumbnail mt-1">
					<td><?php $img = unserialize( $sqldata[0]->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="auto" height="100px"></td>
				<input type="hidden" class="form-control" id="uploadproductimage" name="uploadproductimage" value="<?php echo $img[0];?>">
				
					
				</div>	
					
				
				</div>
					 <label><b>Description:</b></label>
				<p class="w-auto small"><?php echo  $sqldata[0]->description;?></p>
							<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">	
				</div>
			

				<div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
								
							
							<p><b>Product Id:</b><?php echo  $sqldata[0]->productid;?></p>
							<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata[0]->productid;?>">
							
								<!--<p><b>Id:</b><?php // echo  $sqldata[0]->id;?></p>-->
							<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata[0]->id;?>">
							
							<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
							<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sessi;?>">
							
							<p><b>Category:</b><?php echo  $sqldata[0]->category;?></p>
							<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo  $sqldata[0]->category;?>">
							
							
							<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo  $sqldata[0]->companyname;?>">
							
							<p><b>Supplier Price:</b><?php echo  $sqldata[0]->price."/"; echo $sqldata[0]->punits;?></p>
							<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo  $sqldata[0]->price;?>">
							<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo  $sqldata[0]->punits;?>">
							
							
							<h6 style="color:green;"><b>Total Quantity: <?php echo  $sqldata[0]->quantity." "; echo  $sqldata[0]->units;?></b></h6>
							<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo  $sqldata[0]->quantity;?>">
							<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo  $sqldata[0]->units;?>">
							
							<h6 style="color:orange;"><b>Live Stock: <?php echo  $sqldata[0]->supplyability." "; echo  $sqldata[0]->supplyunits;?></b></h6>
							<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo  $sqldata[0]->supplyability;?>">
							<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">
							
							
							<p class="mt-3"><b>Place of Stock:</b> <?php echo $sqldata[0]->pcities."|"; echo  $sqldata[0]->pstates;?></p>
							<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
							<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo  $sqldata[0]->pstates;?>">
							
							
								<h6><b>Posted Date: <?php echo date('d-m-Y H:i',strtotime($sqldata[0]->datetime));?></b></h6>
							<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">
							
								<h6><b>Estimated Delivery: <?php echo  $sqldata[0]->estdeltime;?></b></h6>
							<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">
							
							
					</div>
					</div>
				  </div>


					
				  
				  
				  <div class="col-sm-5 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							<h6 style="color:purple;"><b>Validity Till: <?php echo  date('d-m-Y H:i',strtotime($sqldata[0]->productvalidityto));?></b></h6>
							<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">
								
							<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">
							
							<div class="form-check mt-3 text-left">
								
						<h4 style="color:blue;"><b>
								Negotiate Here</b></h4>
							</div>
  
							<?php 
			$strDisable = "";
			$buyerquantity = "";
			if($quotes){
				$buyerquantity = $quotes[0]->bquantity; 
				if($buyerquantity !=""){
					$strDisable = "disabled";
				}				
			}


			$strDisable2 = "";
			$buyerquantityunit = "";
			if($quotes){
				$buyerquantityunit = $quotes[0]->bsupplyability; 
				if($buyerquantityunit !=""){
					$strDisable2= "disabled";
				}				
			}

			$strDisable3 = "";
			$buyerprice = "";
			if($quotes){
				$buyerprice = $quotes[0]->bprice; 
				if($buyerprice !=""){
					$strDisable3= "disabled";
				}				
			}

			$strDisable4 = "";
			$buyerpriceunit = "";
			if($quotes){
				$buyerpriceunit = $quotes[0]->bunits; 
				if($buyerpriceunit !=""){
					$strDisable4= "disabled";
				}				
			}
		
			
		?>
							<div class="form-row mt-2">
								<label class="col-sm-6 col-form-label"  for="name"><b> Required Quantity</b></label>
								<input style="margin-bottom:5px;" type="text" class="form-control col-sm-2 mr-2" name="bquantity" placeholder="Quantity" id="bquantity" [(ngModel)]="person.name" value='<?php echo $buyerquantity;?>' <?php echo $strDisable; ?>/>
						
							<div class="col-sm-3">  
						<select class="form-control col-sm-0" id="bsupplyability" name="bsupplyability" value='<?php echo $buyerquantityunit;?>' <?php echo $strDisable2; ?>>
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
								<label class="col-sm-6 col-form-label"  for="name"><b>Ask For Your Price </b></label>
								<input type="text" class="form-control col-sm-2 mr-2" name="bprice" placeholder="price" id="bprice" [(ngModel)]="person.name" value='<?php echo $buyerprice;?>' <?php echo $strDisable3; ?>/>/
								<div class="col-sm-3">  
						<select class="form-control col-sm-0" id="bunits" name="bunits" value='<?php echo $buyerpriceunit;?>' <?php echo $strDisable4; ?>>
						<option value="KG">KG</option>
								<option value="Metric Ton">Metric Ton</option>
								<option value="Litre">Litre</option>
								<option value="lot">lot</option>
								<option value="Number">Number</option>
								<option value="Meter">Meter</option>
					
				    </select>
					
					</div>
					
						
							
							<input type="submit" name="submit" onclick="return validatepost()" role="submit" value="submit" class="btn btn-info mt-2" style="font-size:13px" <?php echo $strDisable; ?>>
							
							
							
							
					
							
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
	else{
        $.ajax({
            type:'submit',
            data: {bquantity:bquantity,bsupplyability:bsupplyability,bprice:bprice,bunits:bunits},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }

}
  </script>