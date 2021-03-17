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
		   
    <thead class="bg-primary text-white">
    	<form action="<?php echo base_url();?>customer_add_sellerResponse_renego" method="POST" enctype="multipart/form-data">
    </thead>
	
       <tbody>
	   <tr  style="text-align:center;">
	   
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata[0]->bname;?>" readonly>
          
		  <input hidden type="text" class="form-control" id="buyerid" name="buyerid"  value="<?php echo  $sqldata[0]->buyerid;?>" readonly>
		  <input hidden type="text" class="form-control" id="sellerid" name="sellerid"  value="<?php echo  $sqldata[0]->sellerid;?>" readonly>
		  
			<input type="hidden" class="form-control" id="vusername" name="vusername"  value="<?php echo $sessi;?>">
			<input type="hidden" value="<?php echo  $sqldata[0]->id;?> "  class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" >
			<input type="hidden" value="<?php echo  $sqldata[0]->bsupplyability;?> "  class="form-control" id="buyer_nego_units" name="buyer_nego_units" >
						
						
 		
		<td style="font-size:15px; width:150px;"><b style="text-decoration: underline;">Seller's Offer</b> <br /><p style="color:blue;"><b><?php echo  $sqldata[0]->sellerprice. " / " .$sqldata[0]->bsupplyability;?></b></p> 
		
		<button type="button" class="btn btn-outline-primary  btn-sm">
			
			<?php echo "<a href='javascript:approveProduct(\"".$sqldata4[0]->id."\")'> <i class='fas fa-check'></i></a> "; 
                 ?></button>	 
			
		<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
	<hr >
	  <b><?php  if($sqldata[0]->status == 0) {echo 'Pending';}else if($sqldata[0]->status == 2) {echo 'Rejected';}else if($sqldata[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'customer_quotation2/auc_no/'.$sqldata[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href=".base_url().'Customer_seller_response_renego/index/'.$sqldata[0]->buyerid.'/'.$sqldata[0]->id. " data-toggle='modal' data-target='#exampleModal' target='_blank'><i class='fa fa-upload'></i></a>";}else if($sqldata[0]->status == 5) {echo 'Approved-check in final Approval!';}?></b>
	
		
		
		</td>
	 
		
			
		<td>
		<?php 
			$strDisable = "";
			$buyerNegoPrice = "";
			if($buyer_req_response){
				$buyerNegoPrice = $buyer_req_response[0]->buyer_nego_price; 
				if($buyerNegoPrice !=""){
					$strDisable = "disabled";
				}				
			}
			
		?>
		Negotiate Here
			<input required style="width:80px;" type="text" class="form-control mt-4" id="buyer_nego_price" name="buyer_nego_price" value='<?php echo $buyerNegoPrice;?>' <?php echo $strDisable; ?>>
			<hr>
	<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm"  name="submit" role="submit" onclick="return validate()" <?php echo $strDisable; ?>><b>Negotiate</b></a></button>	
		
		  
			</form>			
		</td>
		
		
		 
			 <td>
					 	 
			<label><b>Buyer's Negotiated Price</b></label><br/>
<b style="color:orange;"><?php echo  $sqldata4[0]->buyer_nego_price. " / " .$sqldata4[0]->buyer_nego_units;?></b> <br />
<hr>
<b><?php  if($sqldata4[0]->status == null) {echo '';} elseif($sqldata4[0]->status == 0) {echo 'Pending';}else if($sqldata4[0]->status == 2) {echo 'Rejected';}else if($sqldata4[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Customer_quotation10/auc_no/'.$sqldata4[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href=".base_url().'Customer_seller_response_renego/index/'.$sqldata[0]->buyerid.'/'.$sqldata[0]->id. " data-toggle='modal' data-target='#exampleModal4' target='_blank'><i class='fa fa-upload'></i></a>";}else if($sqldata4[0]->status == 5) {echo 'Approved-check in final Approval!';}?></b>

  </td>
			 
			 </tbody>
		</table>	 
			 
			 
	 








<!--- - -- ----  ---  - -  - - -- --    ---  -- --  -- --   ----->
 



  
   <table style="align:center;" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
		   
    <thead class="bg-primary text-white">
    	<form action="<?php echo base_url();?>Customer_add_finalReq_buyer_selResponse" method="POST" enctype="multipart/form-data">
    </thead>
	
       <tbody>
	   <tr  style="text-align:center;">
	   
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata4[0]->bname;?>" readonly>
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata4[0]->bname;?>" readonly>			 
			<input type="hidden" value="<?php echo  $sqldata4[0]->seller_mbuyreq_id;?> "  class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" >
			
			<input type="hidden" value="<?php echo  $sqldata4[0]->bsupplyability;?> "  class="form-control" id="buyer_nego_units" name="buyer_nego_units" >
						
						
 		
		<td style="font-size:15px; width:150px;"><b>Seller's 2nd Negotiate </b><br />		
		
		<p style="color:blue;"><b><?php echo  $sqldata4[0]->seller_renego_price. " / " .$sqldata4[0]->bsupplyability;?></b></p>
		<br />
		<button type="button" class="btn btn-outline-primary  btn-sm">
			<?php  echo "   <a href='javascript:finalapproveProduct(\"".$sqldata4[0]->seller_mbuyreq_id."\")'> <i class='fas fa-check'></i></a> ";
                 ?></button>	 
			
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
			
		<br />
		<hr>
		<b><?php  if($reqres_appl[0]->buyer_approval == null) {echo '';}else if($reqres_appl[0]->buyer_approval == 0) {echo 'Pending';}else if($reqres_appl[0]->buyer_approval == 2) {echo 'Rejected';}else if($reqres_appl[0]->buyer_approval == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Customer_quotation11/auc_no/'.$reqres_appl[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href=".base_url().'Customer_seller_response_renego/index/'.$sqldata[0]->buyerid.'/'.$sqldata[0]->id. " data-toggle='modal' data-target='#exampleModal6' target='_blank'><i class='fa fa-upload'></i></a>";}else if($reqres_appl[0]->buyer_approval == 5) {echo 'Approved-check in final Approval!';}?></b>
		
		
		
		</td>
			 
			
			
		<td>
		<?php 
			$strDisable = "";
			$buyerFinalPrice = "";
			if($buyer_final_req){
				$buyerFinalPrice = $buyer_final_req[0]->buyer_final_price; 
				if($buyerFinalPrice !=""){
					$strDisable = "disabled";
				}				
			}
			
		?>
		Re-Negotiate Here
			<input required style="width:80px;" type="text" class="form-control mt-4" id="buyer_final_price" name="buyer_final_price" value='<?php echo $buyerFinalPrice;?>' <?php echo $strDisable; ?>>	
		<hr>
		<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm"  name="submit" role="submit" onclick="return validate()"><b>Final<br/> Negotiate</b></a></button>	
		</td>
		
		
		<td>
			
 
		<label><b>Buyer's Re-Negotiated Price</b></label><br />
			<small style="color:orange;"><b><?php echo  $sqldata4[0]->buyer_final_price. " / " .$sqldata4[0]->bsupplyability;?></b></small>
		<hr>
		
		<b><?php  if($reqres_appl[0]->sel_status == null) {echo '';}else if($reqres_appl[0]->sel_status == 0) {echo 'Pending';}else if($reqres_appl[0]->sel_status == 2) {echo 'Rejected';}else if($reqres_appl[0]->sel_status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation12/auc_no/'.$reqres_appl[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href=".base_url().'Customer_seller_response_renego/index/'.$sqldata[0]->buyerid.'/'.$sqldata[0]->id." data-toggle='modal' data-target='#exampleModal5' target='_blank'><i class='fa fa-upload'></i></a>";}else if($reqres_appl[0]->sel_status == 5) {echo 'Approved-check in final Approval!';}?></b>
			 
			</form>
			
			</td>
			</tbody>
			</table>
			 <table style="align:center;float:right" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
			 <tr>
			
			
			 
	</tr>		
    
                </tbody>


  </table>
                                </div>
                            </div>
                        </div>
						
						<div class="col-xl-5 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Product Name:<?php echo  $sqldata[0]->productname;?></h6>
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
     
	 
	 <div class="col-md-6">

          <div class="view overlay z-depth-1-half">
            <?php $img = unserialize($sqldata[0]->uploadimage)?>
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="100%" height="100%">
            <div class="mask rgba-white-light"></div>
			 <br />
			 <hr>
			 <p><b>Description :</b> <?php echo  $sqldata[0]->description;?></p> 
          </div>
		  

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6">
		  <p><b style="color:orange">Seller Offers :</b> <a href="<?php echo  $sqldata[0]->sellerid;?>">6.View</a> </p>		
          <p><b>Supper Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> 
		  <p><b>Category :</b> <?php echo  $sqldata[0]->category;?></p>
		  <p><b>Stock :</b> <?php echo  $sqldata[0]->quantity. " / " .$sqldata[0]->units;?>"</p> 
		  
		 
		  

        </div>
		
		 
	 
	 	
     
    
  </div>

                                </div>
                            </div>
                        </div>
                    </div>
             

           

        
         

          
         
		  
		  
		 
		 
		 
    
</div>


     
  <script>
  
function validate(){
swal("You have negotiated", {
  submit: ["Oh noez!", "Aww yess!"],
});

}
  </script>
 
 <script>

 </script>
 
 
 
 
 
 
 
 
 
 
 <div class="modal fade" id="2seller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
		
		  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload your Purchase Order</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
             <div class="table-responsive">
			  <form action="<?php echo base_url();?>Customer_buypurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  <th>Supplier name</th>
	  <th>Buyer Name</th>
	  
      <th>companyname</th>
	   <th>Category</th>
		<th>productname</th>
		<th>product Id</th>
		<th>Description</th>
        <th>buyer Quantity</th>
	    <th> Buyer Price</th>
		<th>Seller Price</th>
		<!--<th>Image</th>-->
		<th>View Quotation</th>
	<th>Upload Purchase Order</th>
      </tr>
    </thead>
    <tbody>
	
      
      	
	<?php $k=0;?>
	   <?php foreach($uploadPo as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>

	
			<td><input  type="hidden" name="sellerid" value="<?php echo $uploadPo[0]->sellerid;?>">
			<input  type="hidden" name="buyerid" value="<?php echo $row->buyerid;?>">
							<?php echo $row->sellerid;?></td>
							 
							<td><input type="hidden" name="bname" value="<?php echo $row->bname;?>">
							<?php echo $row->bname;?></td>
			<td><input type="hidden" name="bcompanyname" value="<?php echo $row->bcompanyname;?>">
							<?php echo $row->bcompanyname;?></td>
			<td><input type="hidden" name="category" value="<?php echo $row->category;?>">
								<?php echo $row->category;?></td>
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>">
								<?php echo $row->productname;?></td>
			<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>">
								<?php echo $row->productid;?></td>
			<td><input type="hidden" name="description" value="<?php echo $row->description;?>">
								<?php echo $row->description;?></td>
		
			<td><input type="hidden" name="quantity" value="<?php echo $row->quantity;?>">
							<?php echo $row->quantity.""; echo $row->units;?>
			<input type="hidden" name="units" value="<?php echo $row->units;?>">
						</td>
							
							
<td><input type="hidden" name="price" value="<?php echo $row->price;?>">
		     <?php echo $row->price."/" ;echo $row->priceperkg;?>
			 <input type="hidden" name="priceperkg" value="<?php echo $row->priceperkg;?>">
		</td>
		<td><input type="hidden" name="sellerprice" value="<?php echo $row->sellerprice;?>">
		     <?php echo $row->sellerprice."/" ;echo $row->bsupplyability;?>
			 <input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>">
		</td>
		
	<!--	
<div class="thumbnail">
					<td><?php //$img = unserialize( $row->uploadimage)?>
				<img class="img" src="<?php //echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="200px" height="100%"></td>
				<input type="hidden" class="form-control" id="uploadimage" name="uploadimage" value="<?php //echo $img;?>">
				
					
					</div>	--> 
			 
		<td> <a href="<?php echo base_url().'customer_quotation2/auc_no/'.$row->id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
					
			
				<input type="submit" id="" onclick="return upload_po()" class="btn btn-info " name="submit" value="Upload">
					
			
				
		 </td>

		
        

</tr>   
      <?php $k++;}?>
    </tbody>
	</form>
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
</div>






 
		
		
		
		
      </div>
      
    </div>
  </div>
 
 
 
 
<!--Customer_buypurchase_order3--> 
 
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
		
		  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload your Purchdfdase Order</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			    <form action="<?php echo base_url();?>Customer_buypurchase_order3" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
			<th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>	
			<th>Quantity</th>
			<th>Seller's Re-Negotiated Price</th>
			<th>View Quotation</th>
			<th>Upload Purchase Order</th>
	</tr>
    </thead>			
	<tbody>
	<?php $k=0;?>
	 
      <tr>
			<td><input type="hidden" name="productname" value="<?php echo $sqldata3[0]->productname;?>"><?php echo $sqldata3[0]->productname;?></td>
				 
			<td><input type="hidden" name="sellerid" value="<?php echo $sqldata3[0]->sellerid;?>">
			<?php echo $sqldata3[0]->bname;?>
			<input type="hidden" name="buyerid" value="<?php echo $sqldata3[0]->bname;?>">
			<input type="hidden" name="seller_mbuyreq_id" value="<?php echo $sqldata3[0]->seller_mbuyreq_id;?>"></td>
			
			<td><input type="hidden" name="sellerid" value="<?php echo $sqldata3[0]->sellerid;?>">
			<?php echo $sqldata3[0]->sellerid;?></td>
			
			
			
			<td><input type="hidden" name="bcompanyname" value="<?php echo $sqldata3[0]->bcompanyname;?>"><?php echo $sqldata3[0]->vcompanyname;?></td>
			
			
			<td><?php echo $sqldata3[0]->vaddress;?></td>
			<td><?php echo $sqldata3[0]->vaddress;?></td>
			<td><?php echo $sqldata3[0]->vgst;?></td>
			
			<td><input type="hidden" name="category" value="<?php echo $sqldata3[0]->category;?>">
			<input type="hidden" name="productid" value="<?php echo $sqldata3[0]->productid;?>">
			<input type="hidden" name="quantity" value="<?php echo $sqldata3[0]->quantity;?>"><?php echo $sqldata3[0]->quantity."/"; echo $sqldata3[0]->units;?><input type="hidden" name="units" value="<?php echo $sqldata3[0]->units;?>">
			<input type="hidden" name="price" value="<?php echo $sqldata3[0]->price;?>">
			<input type="hidden" name="priceperkg" value="<?php echo $sqldata3[0]->priceperkg;?>">
			<input type="hidden" name="sellerprice" value="<?php echo $sqldata3[0]->sellerprice;?>">
			<input type="hidden" name="bsupplyability" value="<?php echo $sqldata3[0]->bsupplyability;?>">
			
			<input type="hidden" name="buyer_nego_price" value="<?php echo $sqldata3[0]->buyer_nego_price;?>">
			<input type="hidden" name="buyer_nego_units" value="<?php echo $sqldata3[0]->buyer_nego_units;?>"></td>
			
			<td><input type="hidden" name="seller_renego_price" value="<?php echo $sqldata3[0]->seller_renego_price;?>"><?php echo $sqldata3[0]->seller_renego_price."/"; echo $sqldata3[0]->units;?><input type="hidden" name="seller_renego_units" value="<?php echo $sqldata3[0]->seller_renego_units;?>"></td>
			
		<td> 
		<a href="<?php echo base_url().'Customer_quotation11/auc_no/'.$sqldata3[0]->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
				<input onclick="return upload_2ndapprovedpo()" type="submit" id="" class="btn btn-info " name="submit" value="Upload">
			</td>
			
      </tr>      
   
    </tbody>
	</form>			
				
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
</div>






 
		
		
		
		
      </div>
      
    </div>
  </div>
 
 
 
 <!--Customer_buypurchase_order4-->
 
 <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
		
		  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload your Purchase Order</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              
			   <div class="table-responsive">
			    <form action="<?php echo base_url();?>Customer_buypurchase_order4" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  
	  <th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>	
			<th>Quantity</th>
		
		<th>Buyer's Re-Negotiated Price</th>
		<th>View Quotation</th>
		<th>Upload Purchase Order</th>
		
                    
             
		
      </tr>
    </thead>			
				
				<tbody>
	<?php $k=0;?>
 
      <tr>
		<td><input type="hidden" name="productname" value="<?php echo $finalupldpo[0]->productname;?>"><?php echo $finalupldpo[0]->productname;?></td>
				 
			
			<td><input type="hidden" name="vusername" value="<?php echo $finalupldpo[0]->
			vusername;?>"><?php echo $finalupldpo[0]->bname;?>
			<input type="hidden" name="bname" value="<?php echo $finalupldpo[0]->
			bname;?>">
			
			<input type="hidden" name="bcompanyname" value="<?php echo $finalupldpo[0]->bcompanyname;?>">
			
			<input type="hidden" name="seller_mbuyreq_id" value="<?php echo $finalupldpo[0]->seller_mbuyreq_id;?>">
			
			<input type="hidden" name="category" value="<?php echo $finalupldpo[0]->category;?>">
			
			<input type="hidden" name="productid" value="<?php echo $finalupldpo[0]->productid;?>">
			</td>
			
		
			<td><input type="hidden" name="sellerid" value="<?php echo $finalupldpo[0]->
			sellerid;?>"><?php echo $finalupldpo[0]->sellerid;?></td>
			
			<td><?php echo $finalupldpo[0]->vcompanyname;?></td>
			<td><?php echo $finalupldpo[0]->vaddress;?></td>
			<td><?php echo $finalupldpo[0]->vaddress;?></td>
			<td><?php echo $finalupldpo[0]->vgst;?></td>
			
			<td><input type="hidden" name="quantity" value="<?php echo $finalupldpo[0]->quantity;?>"><?php echo $finalupldpo[0]->quantity."/"; echo $finalupldpo[0]->bsupplyability;?>
			<input type="hidden" name="units" value="<?php echo $finalupldpo[0]->units;?>">
			
			<input type="hidden" name="price" value="<?php echo $finalupldpo[0]->price;?>"><input type="hidden" name="priceperkg" value="<?php echo $finalupldpo[0]->priceperkg;?>">
			
			<input type="hidden" name="sellerprice" value="<?php echo $finalupldpo[0]->sellerprice;?>"><input type="hidden" name="bsupplyability" value="<?php echo $finalupldpo[0]->bsupplyability;?>">
			
			<input type="hidden" name="buyer_nego_price" value="<?php echo $finalupldpo[0]->buyer_nego_price;?>">
			<input type="hidden" name="buyer_nego_units" value="<?php echo $finalupldpo[0]->buyer_nego_units;?>">
			
			<input type="hidden" name="seller_renego_price" value="<?php echo $finalupldpo[0]->seller_renego_price;?>">
			<input type="hidden" name="seller_renego_units" value="<?php echo $finalupldpo[0]->seller_renego_units;?>"></td>
			
			<td><input type="hidden" name="buyer_final_price" value="<?php echo $finalupldpo[0]->buyer_final_price;?>">
			<?php echo $finalupldpo[0]->buyer_final_price."/"; echo $finalupldpo[0]->bsupplyability;?>
			<input type="hidden" name="buyer_final_units" value="<?php echo $finalupldpo[0]->buyer_final_units;?>"></td>
			
	<td> 
		<a href="<?php echo base_url().'Customer_quotation12/auc_no/'.$finalupldpo[0]->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
				<input  type="submit" id="" class="btn btn-info " onclick="return upload_sel2ndapprovedpo()" name="submit" value="Upload">
			</td>
			
      </tr>      
    
    </tbody>
	</form>			
				
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
</div>






 
		
		
		
		
      </div>
      
    </div>
  </div>
 
 
 
 <!--Customer_buypurchase_order2-->
 
 <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
		
		  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload your Purchase Order</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			  <form action="<?php echo base_url();?>Customer_buypurchase_order2" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  
	  <th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>	
	 
		<th>Qunatity</th>
	   
		<th>Buyer Negotiated Price</th>
		<th>View Quotation</th>
		<th>Upload Purchase Order</th>
                    
             
		
      </tr>
    </thead>
    <tbody>
	
      
      <?php $k=0;?>
	  
      <tr>
	  
	<td><input type="hidden" name="productname" value="<?php echo $twouploadPo[0]->productname;?>"><?php echo $twouploadPo[0]->productname?></td>
		  		
	  <td><input type="hidden" name="vusername" value="<?php echo $twouploadPo[0]->vusername;?>">
	  <?php echo $twouploadPo[0]->bname;?>
	  <input type="hidden" name="bname" value="<?php echo $twouploadPo[0]->bname;?>">
	  <input type="hidden" name="sellerid" value="<?php echo $twouploadPo[0]->sellerid;?>">
	  <input type="hidden" name="buyerid" value="<?php echo $twouploadPo[0]->bname;?>">
	<input type="hidden" name="seller_mbuyreq_id" value="<?php echo $twouploadPo[0]->seller_mbuyreq_id;?>">
	  <input type="hidden" name="bcompanyname" value="<?php echo $twouploadPo[0]->bcompanyname;?>">
	  
	  <input type="hidden" name="category" value="<?php echo $twouploadPo[0]->category;?>"></td>
	  
	  <td><?php  echo $twouploadPo[0]->sellerid;?>
	  <td><?php echo $twouploadPo[0]->vcompanyname;?></td>
	<td><?php echo $twouploadPo[0]->vaddress;?></td>
	<td><?php echo $twouploadPo[0]->vaddress;?></td>
	<td><?php echo $twouploadPo[0]->vgst;?></td>
	  <input type="hidden" name="productid" value="<?php echo $twouploadPo[0]->productid;?>">
	
	<input type="hidden" name="description" value="<?php echo $twouploadPo[0]->description;?>"></td>
		
		<td><input type="hidden" name="quantity" value="<?php echo $twouploadPo[0]->quantity;?>"><?php echo $twouploadPo[0]->quantity." ";echo $twouploadPo[0]->units;?>
		<input type="hidden" name="units" value="<?php echo $twouploadPo[0]->units;?>">
		<input type="hidden" name="price" value="<?php echo $twouploadPo[0]->price;?>">
		<input type="hidden" name="priceperkg" value="<?php echo $twouploadPo[0]->priceperkg;?>">
		<input type="hidden" name="sellerprice" value="<?php echo $twouploadPo[0]->sellerprice;?>">
		<input type="hidden" name="bsupplyability" value="<?php echo $twouploadPo[0]->bsupplyability;?>"></td>
										
		<td><input type="hidden" name="buyer_nego_price" value="<?php echo $twouploadPo[0]->buyer_nego_price;?>"><?php echo $twouploadPo[0]->buyer_nego_price."/";echo $twouploadPo[0]->buyer_nego_units;?><input type="hidden" name="buyer_nego_units" value="<?php echo $twouploadPo[0]->buyer_nego_units;?>"></td>
									
	<td> 
		<a href="<?php echo base_url().'Customer_quotation10/auc_no/'.$twouploadPo[0]->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
			
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
					
			
				<input onclick="return upload_po()" type="submit" id="" class="btn btn-info " name="submit" value="Upload">
			</td>

		
 
</tr>   
      
    </tbody>
	</tbody>
  </table>
</form>
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
</div>






 
		
		
		
		
      </div>
      
    </div>
  </div>
 
 
 
 
 
 
 
 
 <!--Customer_buypurchase_order-->
 
 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Seller Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
		
		  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload your Purchase Order</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
             <div class="table-responsive">
			  <form action="<?php echo base_url();?>Customer_buypurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  
	    <th>Product Name</th>
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Company Name</th>
			<th>Billing Address</th>
			<th>Shipped To</th>
			<th>GST Number</th>	
			<th>Quantity</th>
			<th>Seller Price</th>
		<!--<th>Image</th>-->
			<th>View Quotation</th>
			<th>Upload Purchase Order</th>
      </tr>
    </thead>
    <tbody>
	
      
      	
	<?php $k=0;?>
	   
      <tr>
	  
	 

		<td><input type="hidden" name="productname" value="<?php echo $uploadPo[0]->productname;?>">
								<?php echo $uploadPo[0]->productname;?></td>
								
			<td><input  type="hidden" name="sellerid" value="<?php echo $uploadPo[0]->sellerid;?>">
			<input  type="hidden" name="buyerid" value="<?php echo $uploadPo[0]->buyerid;?>">
							<?php echo $uploadPo[0]->buyerid;?>
              <input  type="hidden" name="id" value="<?php echo $sqldata[0]->id;?>">
							
              </td>
							 
			<td><input type="hidden" name="bname" value="<?php echo $uploadPo[0]->bname;?>">
							<?php echo $uploadPo[0]->sellerid;?></td>
			<td><input type="hidden" name="bcompanyname" value="<?php echo $uploadPo[0]->bcompanyname;?>"><?php echo $uploadPo[0]->vcompanyname;?></td>
	<td><?php echo $uploadPo[0]->vaddress;?></td>
	<td><?php echo $uploadPo[0]->vaddress;?></td>
	<td><?php echo $uploadPo[0]->vgst;?></td></td>
			
			<td><input type="hidden" name="category" value="<?php echo $uploadPo[0]->category;?>">
			
			<input type="hidden" name="productid" value="<?php echo $uploadPo[0]->productid;?>">
			<input type="hidden" name="description" value="<?php echo $uploadPo[0]->description;?>">
			
			<input type="hidden" name="quantity" value="<?php echo $uploadPo[0]->quantity;?>">
			<?php echo $uploadPo[0]->quantity.""; echo $uploadPo[0]->units;?>
			<input type="hidden" name="units" value="<?php echo $uploadPo[0]->units;?>">
			
			<input type="hidden" name="price" value="<?php echo $uploadPo[0]->price;?>">
		    
			 <input type="hidden" name="priceperkg" value="<?php echo $uploadPo[0]->priceperkg;?>">
		</td>
		<td><input type="hidden" name="sellerprice" value="<?php echo $uploadPo[0]->sellerprice;?>">
		     <?php echo $uploadPo[0]->sellerprice."/" ;echo $uploadPo[0]->bsupplyability;?>
			 <input type="hidden" name="bsupplyability" value="<?php echo $uploadPo[0]->bsupplyability;?>">
		</td>
		
	<!--	
<div class="thumbnail">
					<td><?php //$img = unserialize( $row->uploadimage)?>
				<img class="img" src="<?php //echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="200px" height="100%"></td>
				<input type="hidden" class="form-control" id="uploadimage" name="uploadimage" value="<?php //echo $img;?>">
				
					
					</div>	--> 
			 
		<td> <a href="<?php echo base_url().'customer_quotation2/auc_no/'.$uploadPo[0]->id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
					
			
				<input type="submit" id="" onclick="return upload_po()" class="btn btn-info " name="submit" value="Upload">
					
			
				
		 </td>

		
        

</tr>   
       
    </tbody>
	</form>
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
</div>






 
		
		
		
		
      </div>
      
    </div>
  </div>
</div>





<script type="text/javascript">

$baseURL = "<?php echo base_url(); ?>"; 
function finalapproveProduct(seller_mbuyreq_id)
{
  alert(seller_mbuyreq_id);
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
                         url:$baseURL+'Customer_cust_final_req_renego/finalapproveProduct',
                         data:'seller_mbuyreq_id='+seller_mbuyreq_id,
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


function finalrejectProduct(seller_mbuyreq_id)
{
  alert(seller_mbuyreq_id);
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
                         url:$baseURL+'Customer_cust_final_req_renego/finalrejectProduct',
                         data:'seller_mbuyreq_id='+seller_mbuyreq_id,
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
    swal("Rejected!");
  }  
});


}

 


function approveProduct(id)
{
  alert(id);
  swal({
  title: "Are you sure?",
  content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_myrequirements/setApproveproduct',
                         data:'id='+id,
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
    swal("Your imaginary file is safe!");
  }  
});


}



function rejectproduct(id)
{
  alert(id);
  swal({
  title: "Are you sure?",
  content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_myrequirements/setrejectproduct',
                         data:'id='+id,
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
    swal("Your imaginary file is safe!");
  }  
});


}
 
 
 
 
 
 
 
 
 
 
 
 $baseURL = "<?php echo base_url(); ?>";  
function showreneg_productid(productid) {
	$.ajax({
        type:'post',
        url:$baseURL+'Customer_seller_response_renego/index',
        data:'productid='+productid,
        success:function(msg){
            var tempmsg = JSON.parse(msg);                 
            
        }
    });
	
}

     
function showUserData(productid){
    $.ajax({
        type:'post',
        url:$baseURL+'Customer_myrequirements/getUserData',
        data:'productid='+productid,
        success:function(msg){
            var tempmsg = JSON.parse(msg);
            $('#final_Negotiated1').modal('show');
            var tbleData = "<table class='table table-striped table-bordered table-sm w-auto small' id='dataTable' width='100%' cellspacing='0'><tr><td>Seller name</td><td>Product Id</td><td>Product Name</td><td>Seller Price</td><td>Option</td></tr>";
            for(var i=0; i<tempmsg.length; i++){
                $sellerMBueryReqId = tempmsg[i]['id'];								
                tbleData = tbleData+"<tr><td>"+tempmsg[i]['sellerid']+"</td><td>"+tempmsg[i]['productid']+"</td><td>"+tempmsg[i]['productname']+"</td><td>"+tempmsg[i]['sellerprice']+" / "+tempmsg[i]['bsupplyability']+"</td><td><button  onclick='approveProduct(\""+$sellerMBueryReqId+"\");'>Approve</button> || <button  onclick='rejectproduct(\""+$sellerMBueryReqId+"\");'>Reject</button> || <a href='Customer_seller_response_renego/index/"+tempmsg[i]['id']+ "';>Negotiate</a></td></tr>";	
            }			  
            tbleData = tbleData+"</table>";
            $("#sellerResponse").html(tbleData);
        }
    });
}







function approveProduct(id)
{
  alert(id);
  swal({
  title: "Are you sure?",
  content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_myrequirements/setApproveproduct',
                         data:'id='+id,
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
    swal("Your imaginary file is safe!");
  }  
});


}



function rejectproduct(id)
{
  alert(id);
  swal({
  title: "Are you sure?",
  content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_myrequirements/setrejectproduct',
                         data:'id='+id,
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
    swal("Your imaginary file is safe!");
  }  
});


}
</script>
      