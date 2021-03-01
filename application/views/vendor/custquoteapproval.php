
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ongoing Negotiation</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>   <th>Sl.No.</th>
	        <th>Suppier's First Negotiation</th>
			<th>Buyer First Negotiation </th>
			<th>Seller First Negotiation </th>
			
		

      </tr>
    </thead>
    <tbody>
	<?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid =str_ireplace('/','-',$row->productid);
				?>
				<td><?php echo $count;?></td>  
		<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="100" height="55px"> </br>Seller Base Price </br><?php echo $row->price."/"; echo $row->punits;?></br>Seller base Quantiy</br>
		<?php echo $row->quantity." "; echo $row->units;?></td>
		 <td> </br>Buyer Base Price </br><?php echo $row->bprice."/"; echo $row->bsupplyability;?> 
			</br>Buyer base Quantiy</br><?php echo $row->bquantity.""; echo $row->bunits;?>
		
		<a href="<?php  echo base_url()."Vendor_custquoteapproval/approve_quotes/".$proid."/".urldecode($row->buyerid);?>"><button type="button" class="btn btn-success btn-sm" onclick="validate_selnego()">Approve</button></a>
		
		<a href="<?php  echo base_url()."Vendor_custquoteapproval/reject/".$proid."/".urldecode($row->buyerid);?>"><button type="button" class="btn btn-danger btn-sm">Reject</button></a>
		
		
		
		 <a href="<?php echo base_url() .'Vendor_custquoteapproval/buyerprice_update/'.$proid."/". urldecode($row->buyerid) ; ?>" target="_blank" data-target="#new_userlogin-<?php echo $count; ?>"  data-toggle="modal" >Negotiation</a>
														</td>
	

		
		
		
		
		
		
					
		
		
		
		
		
				<div class="modal fade" id="new_userlogin-<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update New Price,Quantity and Live stock</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		<form action="<?php echo base_url();?>Vendor_custquoteapproval/buyerprice_update/" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
        
		
			  	<div class="col-sm-8">
		
			<h4 style="color:purple;"><b><?php echo $sqldata[0]->productname;?></b></h4>
							<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $sqldata[0]->productname;?>">
											<?php $img = unserialize($sqldata[0]->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="180px" height="250">
					<input type="hidden" class="form-control" id="uploadproductimage" name="uploadproductimage" value="<?php echo $img;?>">
					<b>Description</b>
								  							
								<p class="w-auto small"><?php echo $sqldata[0]->description;?>
							<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo $sqldata[0]->description;?>">
							
							<input type="text" class="form-control" id="sellerpostproduct_id" name="sellerpostproduct_id"  value="<?php echo $sqldata[0]->sellerpostproduct_id;?>">
							
							
							
       </div>
	   
	   
	   
	   
	   
	   	 <div class="form-inline">
				<div class="col-sm-4  mr-3">
				<label for="price">Live Stock:</label>
					 <p><b>Supplier Id:</b><?php echo $sqldata[0]->sellerid;?></p>
							<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
							
							
							
							
							<p><b>Category:</b><?php echo $sqldata[0]->category;?></p>
							<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo $sqldata[0]->category;?>">
							
							
							<p><b>Product Id:</b><?php echo $sqldata[0]->productid;?></p>
							<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo $sqldata[0]->productid;?>">
						
						
							<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo $sqldata[0]->companyname;?>">
						
							
							<p style="color:orange"><b>Supplier Base Price:</b><?php echo $sqldata[0]->price."/"; echo $sqldata[0]->punits;?></p>
							<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo $sqldata[0]->price;?>">
							<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo $sqldata[0]->punits;?>">
							
							
							<p style="color:orange"><b>Supplier Base Quantity:</b><?php echo $sqldata[0]->quantity."/"; echo $sqldata[0]->units;?></p>
							<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo $sqldata[0]->quantity;?>">
							<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo $sqldata[0]->units;?>">
							
							
							<p class="mt-3"><b>Stock Available at : </b><?php echo $sqldata[0]->pcities."|"; echo $sqldata[0]->pstates;?></p>
							<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
							<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo $sqldata[0]->pstates;?>">
                    
                </div>
				<div class="col-sm-4  offset-sm-3">	
					<center><b>Buyer Negotiated</b></center>
					<hr class="sidebar-divider">
					<p ><b>Buyer Id:</b><?php echo $sqldata[0]->buyerid;?></p>
					<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sqldata[0]->buyerid;?>">
					<!--<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php //echo $sqldata[0]->bunits;?>">-->
							
								<!--<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php //echo $sqldata[0]->supplyunits;?>">-->
						
							<p style="color:green"><b>Quantity:</b><?php echo $sqldata[0]->bquantity; echo $sqldata[0]->bsupplyability;?></p>
							<input type="hidden" class="form-control" id="bquantity" name="bquantity"  value="<?php echo $sqldata[0]->bquantity;?>">
							<input type="hidden" class="form-control" id="bsupplyability" name="bsupplyability"  value="<?php echo $sqldata[0]->bsupplyability;?>">
							
							
							<p style="color:green"><b>Price:</b><?php echo $sqldata[0]->bprice."/"; echo $sqldata[0]->bunits;?></p>
							<input type="hidden" class="form-control" id="bprice" name="bprice"  value="<?php echo $sqldata[0]->bprice;?>">
							<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php echo $sqldata[0]->bunits;?>">
							<h6 style="color:purple;"><b>Posted Date: <?php echo  $sqldata[0]->datetime;?></b></h6>
							<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">
							
							<h6 style="color:purple;"><b>Estimated Delivery: <?php echo  $sqldata[0]->estdeltime;?></b></h6>
							<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">
			</div>
	</div>
	
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
				

		
 
	
	 <div class="form-inline">
						<div class="form-row ml-3">
								<label class="col-sm-6 col-form-label"  for="name"><b>Your Price </b></label>
								<input type="text" class="form-control col-sm-2 mr-10" name="selprice" placeholder="price" id="selprice" [(ngModel)]="person.name"/>/
								<div class="col-sm-3">  
						<select class="form-control col-sm-0" id="sunits" name="sunits">
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
	
	
	
	
	

	<br>
	
	
	<div class="modal-footer">
        <button type="submit" name "update" class="btn btn-success">Submit</button>
		  </div>
	
	

 
	</form>        
        </div>
        </div>



        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  </div>
        </div>
      </div>
		
		

			
			
		    
		<?php $count++;?>	  
     <?php }?>	
        
	
		
			
		
      </tr> 

    </tbody>
  </table>
 
		
		
		 
		</div>
		</div>
		</div>
		</div>
		</div>
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
 
  
  <!-- End of Page Wrapper -->

