		
							
		
        <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Negotiate Here</h1>
         
          </div>

          
              <!-- Content Row -->

                    <div class="row">

                      <!-- Pie Chart -->
                        <div class="col-xl-7 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"> Negotiated</h6>
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
           <table style="align:center" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
		   
  
	
       <tbody>
	   
	    <tr  style="text-align:center; background-color:white;">
		
		
		


				</div>
					<td style="font-size:15px; width:150px;">Buyer's Quantity:<small style="color:orange;"><b><?php echo  $sqldata2[0]->bquantity. " / " .$sqldata2[0]->bsupplyability;?></b></small><br/>
		Buyer's price:<small style="color:orange;"><b><?php echo  $sqldata2[0]->bprice. " / " .$sqldata2[0]->bunits;?></b></small><br/>

	<b><?php  if($sqldata2[0]->sellapproval == 0) {echo 'Pending';}else if($sqldata2[0]->sellapproval == 2) {echo 'Rejected';}else if($sqldata2[0]->sellapproval == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Customer_sellnegoquotation/auc_no/'.$sqldata2[0]->id.'/'.$sqldata2[0]->buyerid.'/'.$sqldata2[0]->sellerid." target='_blank'><i class='fa fa-download'></i></a> / <a href=".base_url().'/Customer_renegotiation/index/'.$sqldata2[0]->sellerpostproduct_id.'/'.$sqldata2[0]->buyerid." data-toggle='modal' data-target='#frist' target='_blank'><i class='fa fa-upload'></i></a> ";}else if($sqldata2[0]->sellapproval == 0) {echo 'Approved-check in final Approval!';}?></b>
	
	
	
	
		
	
	</td>
	
		
			
			<td style="width:290px"> 
			
			
			Seller Price
		<small style="color:orange;"><b><?php echo  $sqldata3[0]->selprice. " / " .$sqldata3[0]->bunits;?></b></small><br/>
		
		
		<b><?php  if($buy_quot[0]->buyerapprove == 0) {echo 'Pending';}else if($buy_quot[0]->buyerapprove == 2) {echo 'Rejected';}else if($sqldata3[0]->buyerapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Customer_quotationpur/auc_no/'.$buy_quot[0]->id.'/'.$buy_quot[0]->buyerid.'/'.$buy_quot[0]->sellerid." target='_blank'><i class='fa fa-download'></i></a> / <a href=".base_url().'/Customer_renegotiation/index/'.$sqldata2[0]->sellerpostproduct_id.'/'.$sqldata2[0]->buyerid." data-toggle='modal' data-target='#scend' target='_blank'><i class='fa fa-upload'></i></a> ";}else if($buy_quot[0]->buyerapprove == 0) {echo 'Approved-check in final Approval!';}?></b>
		
		
		<br/>
		
		<button type="button" class="btn btn-outline-primary  btn-sm">
			
	<a href="<?php  echo base_url()."Customer_renegotiation/approve_requotes/".$sqldata2[0]->sellerpostproduct_id."/".$sqldata2[0]->buyerid;?>"><i class='fas fa-check'></i></a>
	</button> 
			
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
	</td>
		
		
	
			

			 
		</tr>

</form>
	
	<form action="<?php echo base_url();?>Customer_add_renegotiate" method="POST" enctype="multipart/form-data">
       <tbody>
	   
	    <tr  style="text-align:center;  background-color:lightgrey;">
		
		
		

				</div>
				
				
	
	<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo  $sqldata2[0]->productname;?>">					
			
	<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata2[0]->id;?>">	
  <input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata2[0]->productid;?>">
								
 <input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata2[0]->sellerid;?>">
				
	<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sessi;?>">
								
								
	<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo  $sqldata2[0]->category;?>">
								
								
<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo  $sqldata2[0]->companyname;?>">
								
								
									
<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata2[0]->datetime;?>">
								
<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata2[0]->estdeltime;?>">
<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata2[0]->description;?>">
					
<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo  $sqldata2[0]->price;?>">
<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo  $sqldata2[0]->punits;?>">
<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo  $sqldata2[0]->supplyability;?>">
<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata2[0]->supplyunits;?>">
<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata2[0]->pcities;?>">
<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo  $sqldata2[0]->pstates;?>">
								
								
								
<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo  $sqldata2[0]->quantity;?>">
<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo  $sqldata[0]->units;?>">
<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata2[0]->productvalidityto;?>">

<input type="hidden" class="form-control" id="selprice" name="selprice"  value="<?php echo $sqldata3[0]->selprice;?>">
<input type="hidden" class="form-control" id="sunits" name="sunits"  value="<?php echo $sqldata3[0]->sunits;?>">
<input type="hidden" class="form-control" id="sellerpostproduct_id" name="sellerpostproduct_id"  value="<?php echo  $sqldata3[0]->sellerpostproduct_id;?>">

<input type="hidden" class="form-control" id="bquantity" name="bquantity"  value="<?php echo  $sqldata2[0]->bquantity;?>">

<input type="hidden" class="form-control" id="bsupplyability" name="bsupplyability"  value="<?php echo $sqldata2[0]->bsupplyability;?>">
<input type="hidden" class="form-control" id="bprice" name="bprice"  value="<?php echo $sqldata2[0]->bprice;?>">
<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php echo  $sqldata2[0]->bunits;?>">




<td style="width:290px; color: white;"> 
<?php 
			$strDisable = "";
			$buyerquantity = "";
			if($cust_renego){
				$buyerquantity = $cust_renego[0]->brenegoquantity; 
				if($buyerquantity !=""){
					$strDisable = "disabled";
				}				
			}


			$strDisable2 = "";
			$buyerquantityunit = "";
			if($cust_renego){
				$buyerquantityunit = $cust_renego[0]->brenegoquantityunit; 
				if($buyerquantityunit !=""){
					$strDisable2= "disabled";
				}				
			}

			$strDisable3 = "";
			$buyerprice = "";
			if($cust_renego){
				$buyerprice = $cust_renego[0]->brenegoprice; 
				if($buyerprice !=""){
					$strDisable3= "disabled";
				}				
			}

			$strDisable4 = "";
			$buyerpriceunit = "";
			if($cust_renego){
				$buyerpriceunit = $cust_renego[0]->brenegounit; 
				if($buyerpriceunit !=""){
					$strDisable4= "disabled";
				}				
			}
			
		?>
Re-Negotiate Here
<div class="form-row m-2"> 
			
	<input type="text" class="form-control col-sm-4 mr-2" name="brenegoquantity" placeholder="Quantity" id="brenegoquantity" [(ngModel)]="person.name" value='<?php echo $buyerquantity;?>' <?php echo $strDisable; ?>/>
	<div class="col-sm-3">  
	<select class="form-control" id="brenegoquantityunit" name="brenegoquantityunit" value='<?php echo $buyerquantityunit;?>' <?php echo $strDisable2; ?>>
										<option value="KG">KG</option>
										<option value="Metric Ton">Metric Ton</option>
										<option value="Litre">Litre</option>
										<option value="lot">lot</option>
										<option value="Number">Number</option>
										<option value="Meter">Meter</option>
							</select>
					</div>
									
								</div>
							<div class="form-row m-2">
									
									<input type="text" class="form-control col-sm-4 mr-2" name="brenegoprice" placeholder="Price" id="bprice" [(ngModel)]="person.name"/ value='<?php echo $buyerprice;?>' <?php echo $strDisable3; ?>>/
							<div class="col-sm-3">  
							<select class="form-control" id="brenegounit" name="brenegounit" value='<?php echo $buyerpriceunit;?>' <?php echo $strDisable4; ?>>
							<option value="KG">KG</option>
									<option value="Metric Ton">Metric Ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>
						
							</select>
						
							</div>
								
								</div>	
								
									<a href="#" class="neg"> </a>
								<button type="submit" href="<?php echo base_url();?>"class="btn btn-outline-info btn-sm mt-2" name="btnsubmit_rengo" id= "btnsubmit_rengo" role="submit"  onclick= "return validate_selnego()">Re-Negotiated</a></button>								
							 
								 
								 <button type="button" class="btn btn-outline-warning btn-sm mt-2" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#final_Negotiated">Final Negotiation</button>
								 
								 
				  <div class="modal fade" id="final_Negotiated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 style="color: black;" class="modal-title" id="exampleModalLabel">Is this your final Negotiation?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
       
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2"  name="btnsubmit_final" id= "btnsubmit_final" role="submit"  onclick= "return validate_selnego()">Final-Negotiated</a></button>
        </div>
      </div>
    </div>
  </div>				 
</td>
		
		
		<td style="font-size:15px; width:150px; color: white;">Buyer's Quantity <br /><small style="color:orange;"><b><?php echo  $sqld[0]->brenegoquantity. " / " .$sqld[0]->brenegoquantityunit;?></b></small><br/>
		Buyer's price <br /><small style="color:orange;"><b><?php echo  $sqld[0]->brenegoprice. " / " .$sqld[0]->brenegounit;?></b></small><br/>
		
		
<b><?php  if($approve_buyer2[0]->selapprove == 0) {echo 'Pending';}else if($approve_buyer2[0]->selapprove == 2) {echo 'Rejected';}else if($approve_buyer2[0]->selapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_renegovaluequotation/auc_no/'.$approve_buyer2[0]->id.'/'.$approve_buyer2[0]->sellerid.'/'.$approve_buyer2[0]->buyerid." target='_blank'><i class='fa fa-download'></i></a> / <a href=".base_url().'/Customer_renegotiation/index/'.$sqldata2[0]->sellerpostproduct_id.'/'.$sqldata2[0]->buyerid." data-toggle='modal' data-target='#thrd' target='_blank'><i class='fa fa-upload'></i></a>  ";}else if($approve_buyer2[0]->selapprove == 0) {echo 'Approved-check in final Approval!';}?></b>
		
		</td>
 
		</tr>
	
	
	   <tr style="text-align:center;">
	   		
 		
	
		
			
		<td style="font-size:15px; width:150px;">Seller Re Negotiation Price<br /><small style="color:orange;"><b><?php echo  $sqldata5[0]->sellrenegoprice. " / " .$sqldata5[0]->bunits;?></b></small><br/>
		
	<b><?php  if($final_quotebyr[0]->custapprove == 0) {echo 'Pending';}else if($final_quotebyr[0]->custapprove == 2) {echo 'Rejected';}else if($final_quotebyr[0]->custapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Customer_quotation5/auc_no/'.$final_quotebyr[0]->id.'/'.$final_quotebyr[0]->sellerid.'/'.$final_quotebyr[0]->buyerid." target='_blank'><i class='fa fa-download'></i></a>/<a href=".base_url().'/Customer_renegotiation/index/'.$sqldata2[0]->sellerpostproduct_id.'/'.$sqldata2[0]->buyerid." data-toggle='modal' data-target='#forth' target='_blank'><i class='fa fa-upload'></i></a>";}else if($final_quotebyr[0]->custapprove == 0) {echo 'Approved-check in final Approval!';}?></b>	
	<br/>
				
	<button type="button" class="btn btn-outline-primary  btn-sm">
			
	<a href="<?php  echo base_url()."Customer_renegotiation/approve_requotes_seller/".$forth_renego2[0]->sellerpostproduct_id."/".$forth_renego2[0]->buyerid;?>"><i class='fas fa-check'></i></a>
	</button>
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
	
	 
		
	</td>
</form>

			 
	</tr>
<br/>
			 
	
 </tbody>
</table>
 </div>
 </div>
 </div>
 
 
 
						
<div class="col-xl-5 col-lg-7">
	<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product Name:<?php echo  $sqldata2[0]->productname;?></h6>
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
	<div class="form-row align-items-center">
	
											
	
		 
		 <div class="form-inline">
		 <div class="col-md-8">
<p style="font-size:12px;font-weight-bold">Seller Id: <?php echo  $sqldata2[0]->sellerid;?> </p>
 <p style="font-size:12px;font-weight-bold">Category: <?php echo  $sqldata2[0]->category;?> </p> <p style="font-size:12px;font-weight-bold"> Posted Date: <?php echo  $sqldata2[0]->datetime;?> </p>				
 <p style="font-size:12px;font-weight-bold"> Estimated Delivery:  <?php echo  $sqldata2[0]->estdeltime;?></p>	 
 <p style="font-size:12px;font-weight-bold"> Validity Till:  <?php echo  $sqldata2[0]->productvalidityto;?> </p>	
									

				
								
								
								
			

			  <br />

			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-4"> 						
								
		 
	<?php $img = unserialize($sqldata2[0]->uploadproductimage)?>
					<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="450px" height="350px">	 
			  

			</div>
		
		
						
								
			</div>
			    </div>
				<div style="border-color red 1px solid">
						

<table style="width:100%">
  <tr>
    <th>Supply Ability</th>
    <th>Supplier Price</th> 
    <th>Live Stock</th>
  </tr>
  <tr>
    <td><?php echo  $sqldata2[0]->quantity." "; echo  $sqldata2[0]->units;?></td>
    <td><?php echo  $sqldata2[0]->price."/"; echo $sqldata2[0]->punits;?></td>
    <td><?php echo  $sqldata2[0]->supplyability." "; echo  $sqldata2[0]->supplyunits;?></td>
  </tr>
  
</table>
						
						
						</div>	
						<hr>
						<div style="border-color red 1px solid">
						

  <p class="w-auto small"><h6 style="float:right;color:blue"><b>Description:</b> <br /> </h6>
  <?php echo  $sqldata2[0]->description;?></p>	
						
						
						</div>	
				
                            </div>
                        </div>
                    </div>
 
   			
							
							
							
		</div>				
					









<div class="modal fade" id="frist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		 <div class="table-responsive">
			 <!-- <form action="<?php //echo base_url();?>Customer_spurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">-->
                <table class="table table-striped table-bordered table-sm" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
			
	       	<th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>					 
			<th style="color:orange;">Buyer Price</th>
			<th style="color:orange;">Buyer Quantity</th>			 
			<th>Upload Purchase Order</th>
		
      </tr>
    </thead>
    <tbody>
	<?php $k=0;?>
	  <?php  $count = 1;?>
	 
	
      <tr>
	   <form action="<?php echo base_url();?>Customer_spurchase_order" method="POST"  enctype="multipart/form-data">
	  <?php $proid = str_ireplace('/','-',$frst_qut[0]->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$frst_qut[0]->productid);?>
		
		
	<td><input type="hidden" name="productname" value="<?php echo $frst_qut[0]->productname;?>">
		<?php echo $frst_qut[0]->productname;?></td>
	<td><input type="hidden" name="buyerid" value="<?php echo $frst_qut[0]->buyerid;?>">
							<?php echo $frst_qut[0]->buyerid;?>
		<input type="hidden" name="q_id" value="<?php echo $frst_qut[0]->id;?>">
		<input type="hidden" name="sellerpostproduct_id" value="<?php echo $frst_qut[0]->sellerpostproduct_id;?>"></td>
	<td><input type="hidden" name="sellerid" value="<?php echo $frst_qut[0]->sellerid;?>">
							<?php echo $frst_qut[0]->sellerid;?>
	<input type="hidden" name="productid" value="<?php echo $frst_qut[0]->productid;?>"><input type="hidden" name="category" value="<?php echo $frst_qut[0]->category;?>">
	<input type="hidden" name="pcities" value="<?php echo $frst_qut[0]->pcities;?>">
		<input type="hidden" name="price" value="<?php echo $frst_qut[0]->price;?>">
		 <input type="hidden" name="punits" value="<?php echo $frst_qut[0]->punits;?>">
	<input type="hidden" name="quantity" value="<?php echo $frst_qut[0]->quantity;?>">
		<input type="hidden" name="units" value="<?php echo $frst_qut[0]->units;?>">
	</td>
	<td><?php echo $frst_qut[0]->vcompanyname;?></td>
	<td><?php echo $frst_qut[0]->vaddress;?></td>
	<td><?php echo $frst_qut[0]->vaddress;?></td>
	<td><?php echo $frst_qut[0]->vgst;?></td>
	<td><input type="hidden" name="bquantity" value="<?php echo $frst_qut[0]->bquantity;?>">
	<?php echo $frst_qut[0]->bquantity."" ;echo $frst_qut[0]->bunits;?>
	<input type="hidden" name="bunits" value="<?php echo $frst_qut[0]->bunits;?>">
	</td>
	<td><input type="hidden" name="bprice" value="<?php echo $frst_qut[0]->bprice;?>">
		<?php echo $frst_qut[0]->bprice."/" ;echo $frst_qut[0]->bsupplyability;?>
		<input type="hidden" name="bsupplyability" value="<?php echo $frst_qut[0]->bsupplyability;?>"></td>
	<td>
				
		<input class="form-group w-auto"  multiple="multiple" id ="upload_dd"  type="file" name="upload_dd[]">
		<input class="form-group w-auto" value="<?php echo urldecode($frst_qut[0]->buyerid);?>"  type="hidden" name="buyerid_hidden">	
			
		<input type="submit" onclick="return upload_selnegoapprovedpo()" id="<?php echo $frst_qut[0]->id;?>" class="btn btn-info " name="submit" value="Upload"></td>
		 <?php $count++;?>	
		 </form>
		 
      </tr>      
      
    </tbody>
  </table>
  
		</div>
		
		
		
		
	  </div>






 
		
		
		
		
      </div>
      
    </div>
  </div>






<div class="modal fade" id="scend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		  <div class="table-responsive">
						
	 	<table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
								<thead class="bg-primary text-white">
									<tr>
									
			
	       	<th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>				
			<th>Buyer 1st Quantity</th>
		    <th>Buyer 1st  price</th>
			<th>Seller Re-Negotiated price</th>
			<th>Upload Purchase Order</th>
			
			


									</tr>
								</thead>
								<tbody>
								

				 	<?php $k = 0; ?>
				  	<?php  $count = 1;?>
			 	<tr>
			 	<form action="<?php echo base_url(); ?>Customer_purchase_order" method="POST"  enctype="multipart/form-data">
			 	<?php $proid = str_ireplace('/', '-', $sce_qut[0]->productid); ?>
				
				<td><input type="hidden" name="productname" value="<?php echo $sce_qut[0]->productname;?>">
								<?php echo $sce_qut[0]->productname;?></td>
				<td><input type="hidden" name="buyerid" value="<?php echo $sce_qut[0]->buyerid;?>">
							<?php echo $sce_qut[0]->buyerid;?>
					<input type="hidden" name="sqn_id" value="<?php echo $sce_qut[0]->id;?>">	
					<input type="hidden" name="sellerpostproduct_id" value="<?php echo $sce_qut[0]->sellerpostproduct_id;?>"></td>
				<td><input type="hidden" name="sellerid" value="<?php echo $sce_qut[0]->sellerid;?>">
							<?php echo $sce_qut[0]->sellerid;?></td>
				
		
			<td><?php echo $sce_qut[0]->vcompanyname;?></td>
			<td><?php echo $sce_qut[0]->vaddress;?></td>
			<td><?php echo $sce_qut[0]->vaddress;?></td>
			<td><?php echo $sce_qut[0]->vgst;?></td>
			<td><input type="hidden" name="productid" value="<?php echo $sce_qut[0]->productid;?>">
			<input type="hidden" name="category" value="<?php echo $sce_qut[0]->category;?>">
			<input type="hidden" name="pcities" value="<?php echo $sce_qut[0]->pcities;?>">
			<input type="hidden" name="quantity" value="<?php echo $sce_qut[0]->quantity;?>">
		     
			 <input type="hidden" name="units" value="<?php echo $sce_qut[0]->units;?>">
			<input type="hidden" name="price" value="<?php echo  $sce_qut[0]->price;?>">
		     
			 <input type="hidden" name="punits" value="<?php echo $sce_qut[0]->punits;?>">
		<input type="hidden" name="bquantity" value="<?php echo $sce_qut[0]->bquantity;?>">
		     <?php echo $sce_qut[0]->bquantity."" ;echo $sce_qut[0]->bunits;?>
			 <input type="hidden" name="bunits" value="<?php echo $sce_qut[0]->bunits;?>">
		
	     </td>
	
		<td><input type="hidden" name="bprice" value="<?php echo $sce_qut[0]->bprice;?>">
		     <?php echo $sce_qut[0]->bprice."/" ;echo $sce_qut[0]->bsupplyability;?>
			 <input type="hidden" name="bsupplyability" value="<?php echo $sce_qut[0]->bsupplyability;?>">
		</td>
			
		<td><input type="hidden" name="selprice" value="<?php echo $sce_qut[0]->selprice; ?>">
			<?php echo $sce_qut[0]->selprice . "/";echo $sce_qut[0]->sunits; ?>
		<input type="hidden" name="sunits" value="<?php echo $sce_qut[0]->sunits; ?>"></td>
			 
		<td><input class="form-group w-auto" multiple="multiple" type="file" id="upload_dd" name="upload_dd[]">

		<input type="submit" id="" onclick="return upload_buynegonegoapprovedpo()" class="btn btn-info " name="submit" value="Upload">
		</td>
		 <?php $count++;?>
</form>
										 
</tr>
									
								</tbody>
							</table>
						
					</div>
		
		
		
		
	  </div>






 
		
		
		
		
      </div>
      
    </div>
  </div>






<div class="modal fade" id="thrd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		   <div class="table-responsive">
				<table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
								<thead class="bg-primary text-white">
									<tr>
			<th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>		
			<th style="color:green;">Buyer Re-Negotiated price</th>
			<th style="color:green;">Buyer Re-Negotiated Quantity</th>
			<th>Upload Purchase Order</th>


									</tr>
</thead>
<tbody>
<?php $k = 0; ?>
<tr>
<form action="<?php echo base_url(); ?>Customer_repurchase_order" method="POST"  enctype="multipart/form-data">
<?php $proid = str_ireplace('/', '-', $thrd_qut[0]->productid); ?>
												
	 <td><input type="hidden" name="productname" value="<?php echo $thrd_qut[0]->productname;?>">
							<?php echo $thrd_qut[0]->productname;?></td>
	<td><input type="hidden" name="buyerid" value="<?php echo $thrd_qut[0]->buyerid;?>">
							<?php echo $thrd_qut[0]->buyerid;?></td>	
	<td><input type="hidden" name="sellerid" value="<?php echo $thrd_qut[0]->sellerid;?>">
							<?php echo $thrd_qut[0]->sellerid;?>
	<input type="hidden" name="cust_id" value="<?php echo $thrd_qut[0]->id;?>">
	<input type="hidden" name="sellerpostproduct_id" value="<?php echo $thrd_qut[0]->sellerpostproduct_id;?>"></td>
	<td><?php echo $thrd_qut[0]->vcompanyname;?></td>
	<td><?php echo $thrd_qut[0]->vaddress;?></td>
	<td><?php echo $thrd_qut[0]->vaddress;?></td>
	<td><?php echo $thrd_qut[0]->vgst;?></td>
	<td><input type="hidden" name="productid" value="<?php echo $thrd_qut[0]->productid;?>">
	
	<input type="hidden" name="category" value="<?php echo $thrd_qut[0]->category;?>">
	<input type="hidden" name="price" value="<?php echo $thrd_qut[0]->price; ?>">
	<input type="hidden" name="punits" value="<?php echo $thrd_qut[0]->punits; ?>">
	<input type="hidden" name="quantity" value="<?php echo $thrd_qut[0]->quantity; ?>">
	<input type="hidden" name="units" value="<?php echo $thrd_qut[0]->units; ?>">
	
	<input type="hidden" name="bquantity" value="<?php echo $thrd_qut[0]->bquantity; ?>">
	<input type="hidden" name="bunits" value="<?php echo $thrd_qut[0]->bunits; ?>">
	<input type="hidden" name="bprice" value="<?php echo $thrd_qut[0]->bprice; ?>">
	<input type="hidden" name="bsupplyability" value="<?php echo $thrd_qut[0]->bsupplyability; ?>">
	
	<input type="hidden" name="selprice" value="<?php echo $thrd_qut[0]->selprice; ?>">
	<input type="hidden" name="sunits" value="<?php echo $thrd_qut[0]->sunits; ?>">
	
	<input type="hidden" name="brenegoprice" value="<?php echo $thrd_qut[0]->brenegoprice; ?>">
	<?php echo $thrd_qut[0]->brenegoprice . "/";echo $thrd_qut[0]->brenegounit; ?>
	<input type="hidden" name="brenegounit" value="<?php echo $thrd_qut[0]->brenegounit; ?>">
												</td>
	<td><input type="hidden" name="brenegoquantity" value="<?php echo $thrd_qut[0]->brenegoquantity; ?>"><?php echo $thrd_qut[0]->brenegoquantity . "/";echo $thrd_qut[0]->brenegoquantityunit; ?>
	<input type="hidden" name="brenegoquantityunit" value="<?php echo $thrd_qut[0]->brenegoquantityunit; ?>"></td>
	<td>
	<input class="form-group w-auto" multiple="multiple" type="file" id="upload_dd" name="upload_dd[]">

	<input type="submit" onclick="return upload_renegovalue()" id="" class="btn btn-info " name="submit" value="Upload">
	</td>


     

											</form>
											
										 
										</tr>
									
								</tbody>
							</table>
						
					</div>
		
		
		
		
	  </div>
 </div>
      
    </div>
  </div>







<div class="modal fade" id="forth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="table-responsive">
						
							<table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
								<thead class="bg-primary text-white">
						<tr>
				
			<th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>		
			<th style="color:orange;">Buyer 2nd Re-Negotiated price</th>
			<th style="color:orange;">Buyer 2nd Re-Negotiated Quantity</th>
			<th style="color:yellow;">Seller final Re-Negotiated price</th>
			<th>Upload Purchase Order</th>
</tr>
								</thead>
								<tbody>
<?php $k = 0; ?>
<tr>
<form action="<?php echo base_url(); ?>Customer_respurchase_order" method="POST" enctype="multipart/form-data">
<?php $proid = str_ireplace('/', '-', $forth_qut[0]->productid); ?>

<td><input type="hidden" name="productname" value="<?php echo $forth_qut[0]->productname;?>">
							<?php echo $forth_qut[0]->productname;?>
<input type="hidden" name="sellerpostproduct_id" value="<?php echo $forth_qut[0]->sellerpostproduct_id;?>"></td>
<td><input type="hidden" name="buyerid" value="<?php echo $forth_qut[0]->buyerid;?>">
<?php echo $forth_qut[0]->buyerid;?></td>
<td><input type="hidden" name="sellerid" value="<?php echo $forth_qut[0]->sellerid;?>">
<?php echo $forth_qut[0]->sellerid;?>
<input type="hidden" name="v_id" value="<?php echo $forth_qut[0]->id;?>"></td>
	
	<td><?php echo $forth_qut[0]->vcompanyname;?></td>
	<td><?php echo $forth_qut[0]->vaddress;?></td>
	<td><?php echo $forth_qut[0]->vaddress;?></td>
	<td><?php echo $forth_qut[0]->vgst;?></td>
	
<td><input type="hidden" name="productid" value="<?php echo $forth_qut[0]->productid;?>">

<input type="hidden" name="category" value="<?php echo $forth_qut[0]->category;?>">
<input type="hidden" name="price" value="<?php echo $forth_qut[0]->price; ?>">

 <input type="hidden" name="punits" value="<?php echo $forth_qut[0]->punits; ?>">
<input type="hidden" name="quantity" value="<?php echo $forth_qut[0]->quantity; ?>">
<input type="hidden" name="units" value="<?php echo $forth_qut[0]->units; ?>">
<input type="hidden" name="bquantity" value="<?php echo $forth_qut[0]->bquantity; ?>">
<input type="hidden" name="bunits" value="<?php echo $forth_qut[0]->bunits; ?>">
<input type="hidden" name="bprice" value="<?php echo $forth_qut[0]->bprice; ?>">
<input type="hidden" name="bsupplyability" value="<?php echo $forth_qut[0]->bsupplyability; ?>">
<input type="hidden" name="selprice" value="<?php echo $forth_qut[0]->selprice; ?>">
<input type="hidden" name="sunits" value="<?php echo $forth_qut[0]->sunits; ?>">
<input type="hidden" name="brenegoprice" value="<?php echo $forth_qut[0]->brenegoprice; ?>">
<input type="hidden" name="brenegounit" value="<?php echo $forth_qut[0]->brenegounit; ?>">
<?php echo $forth_qut[0]->brenegoprice . " ";echo $forth_qut[0]->brenegounit; ?></td>
<td><input type="hidden" name="brenegoquantity" value="<?php echo $forth_qut[0]->brenegoquantity; ?>">
<?php echo $forth_qut[0]->brenegoquantity . " ";echo $forth_qut[0]->brenegoquantityunit; ?>
<input type="hidden" name="brenegoquantityunit" value="<?php echo $forth_qut[0]->brenegoquantityunit; ?>"></td>
<td><input type="hidden" name="sellrenegoprice" value="<?php echo $forth_qut[0]->sellrenegoprice; ?>">
<?php echo $forth_qut[0]->sellrenegoprice . "/";echo $forth_qut[0]->sellrenegounits; ?>
<input type="hidden" name="sellrenegounits" value="<?php echo $forth_qut[0]->sellrenegounits; ?>">
</td>
<td>

			<input class="form-group w-auto" multiple="multiple" type="file" name="upload_dd[]" id="upload_dd">


		<input type="submit" id="" onclick="return upload_finalrenvalue()" class="btn btn-info " name="submit" value="Upload">



												</td>


</form>
										 
</tr>
									
								</tbody>
							</table>
						
					</div>
		
		
		
	  </div>






 
		
		
		
		
      </div>
      
    </div>
  </div>







					
							
			<script>
	  
	function validatepost(){

		var bquantity = document.getElementById("bquantity").value;
		var bsupplyability = document.getElementById("bsupplyability").value;
		var bprice = document.getElementById("bprice").value;
		var bunits = document.getElementById("bunits").value;


		

	if(bquantity == '' || bsupplyability == '' || bprice == '' || bunits == '' ){
	swal("Alert!","You can negotiate only once and cannot leave any field blank!","error");
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
							
							
					
<script type="text/javascript">

$baseURL = "<?php echo base_url(); ?>"; 
function approveProduct(buyerid)
{
  alert(buyerid);
  swal({
  title: "Are you sure?",
  //content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_renegotiation/Approveproduct',
                         data:'buyerid='+buyerid,
                         success:function(msg){
                             if(msg){
                                swal("Information updated success.");
                             }else{
                                swal("Information not updated.");
                             }
                             location.reload();
                         }
                     });


  }else {
    swal("Approved!");
  }  
});


}



</script>		
			
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							

					
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							

