        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customer Dashboard</h1>
         
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
          
			<input type="hidden" class="form-control" id="vusername" name="vusername"  value="<?php echo $sessi;?>">
			<input type="hidden" value="<?php echo  $sqldata[0]->id;?> "  class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" >
			<input type="hidden" value="<?php echo  $sqldata[0]->bsupplyability;?> "  class="form-control" id="buyer_nego_units" name="buyer_nego_units" >
						
						
 		
		<td style="font-size:15px; width:150px;">Seller's Offer <br /><small style="color:orange;"><b><?php echo  $sqldata[0]->sellerprice. " / " .$sqldata[0]->bsupplyability;?></b></small><br/>
	
	  <b><?php  if($sqldata[0]->status == 0) {echo 'Pending';}else if($sqldata[0]->status == 2) {echo 'Rejected';}else if($sqldata[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/customer_quotation2/auc_no/'.$sqldata[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href='' data-toggle='modal' data-target='#exampleModal' target='_blank'><i class='fa fa-upload'></i></a>";}else if($sqldata[0]->status == 5) {echo 'Approved-check in final Approval!';}?></b>
	
		
		
		</td>
		<td>
			<button type="button" class="btn btn-outline-primary  btn-sm">
			
			<?php echo "<a href='javascript:approveProduct(\"".$sqldata4[0]->id."\")'> <i class='fas fa-check'></i></a> "; 
                 ?></button>	<br />
			
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
		</td>
		
			
		<td>
			<input required style="width:80px;" type="text" class="form-control" id="buyer_nego_price" name="buyer_nego_price">	
		</td>
		
		
		
		<td>
 
		<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm"  name="submit" role="submit" onclick="return validate()"><b>Negotiate</b></a></button>	
		
		  
			</form>
			 </td>
			 <td>
<b style="color:orange;"><?php echo  $sqldata4[0]->buyer_nego_price. " / " .$sqldata4[0]->buyer_nego_units;?></b> <br />

<b><?php  if($sqldata4[0]->status == 0) {echo 'Pending';}else if($sqldata4[0]->status == 2) {echo 'Rejected';}else if($sqldata4[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Customer_quotation10/auc_no/'.$sqldata4[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href='' data-toggle='modal' data-target='#exampleModal2' target='_blank'><i class='fa fa-upload'></i></a>";}else if($sqldata4[0]->status == 5) {echo 'Approved-check in final Approval!';}?></b>



			 	 
			</td>
			 
	</tr>
	
 
	
	
	
	
	 
	
	
	

  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		 			
    
                </tbody>







  </table>
  
   <table style="align:center" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
		   
    <thead class="bg-primary text-white">
    	<form action="<?php echo base_url();?>Customer_add_finalReq_buyer_selResponse" method="POST" enctype="multipart/form-data">
    </thead>
	
       <tbody>
	   <tr  style="text-align:center;">
	   
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata4[0]->bname;?>" readonly>
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata4[0]->bname;?>" readonly>			 
			<input type="hidden" value="<?php echo  $sqldata4[0]->seller_mbuyreq_id;?> "  class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" >
			
			<input type="hidden" value="<?php echo  $sqldata4[0]->bsupplyability;?> "  class="form-control" id="buyer_nego_units" name="buyer_nego_units" >
						
						
 		
		<td style="font-size:15px; width:150px;">Seller's 2nd Negotiate <br />		
		
		<small style="color:orange;"><b><?php echo  $sqldata4[0]->seller_renego_price. " / " .$sqldata4[0]->seller_renego_units;?></b></small>
		<br />
		
		<b><?php  if($reqres_appl[0]->buyer_approval == 0) {echo 'Pending';}else if($reqres_appl[0]->buyer_approval == 2) {echo 'Rejected';}else if($reqres_appl[0]->buyer_approval == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Customer_quotation11/auc_no/'.$reqres_appl[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href='' data-toggle='modal' data-target='#exampleModal2' target='_blank'><i class='fa fa-upload'></i></a>";}else if($reqres_appl[0]->buyer_approval == 5) {echo 'Approved-check in final Approval!';}?></b>
		
		
		
		</td>
			<td>
			
				 
		
		 
			<button type="button" class="btn btn-outline-primary  btn-sm">
			<?php $strTable = "";foreach($sqldata4 as $seller){              
                                             $strTable .= "   <a href='javascript:finalapproveProduct(\"".$seller->seller_mbuyreq_id."\")'> <i class='fas fa-check'></i></a> ";}echo $strTable;
                 ?></button><br/>
			
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
			
			
		</td>
			
			
		<td>
			<input required style="width:80px;" type="text" class="form-control" id="buyer_final_price" name="buyer_final_price">	
		</td>
		
		
		<td>
 
		<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm"  name="submit" role="submit" onclick="return validate()"><b>Final<br/> Negotiate</b></a></button>	
		
		 
			 
			</form>
			
			</td>
			<td>
			
 
		
			<small style="color:orange;"><b><?php echo  $sqldata4[0]->buyer_final_price. " / " .$sqldata4[0]->buyer_final_units;?></b></small>
		<br />
		
		<b><?php  if($reqres_appl[0]->sel_status == 0) {echo 'Pending';}else if($reqres_appl[0]->sel_status == 2) {echo 'Rejected';}else if($reqres_appl[0]->sel_status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation12/auc_no/'.$reqres_appl[0]->id." target='_blank'><i class='fa fa-download'></i></a> / <a href='' data-toggle='modal' data-target='#exampleModal5' target='_blank'><i class='fa fa-upload'></i></a>";}else if($reqres_appl[0]->sel_status == 5) {echo 'Approved-check in final Approval!';}?></b>
			
			
	 
			
			 
			 
			
			 
			</td>
			 
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
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100%" height="100%">
            <div class="mask rgba-white-light"></div>
			 <br />
			 <hr>
			 <p><b>Description :</b> <?php echo  $sqldata[0]->description;?></p> 
          </div>
		  

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6">          
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
            <h1 class="h3 mb-0 text-gray-800">Upload your Purchdfdase Order</h1>
           
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

	
			<td><input  type="hidden" name="sellerid" value="<?php echo $row->sellerid;?>">
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
 
 
 
 
 
 
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			    <form action="<?php echo base_url();?>Customer_buypurchase_order4" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
		<th>Seller ID</th>
		
	    <th>Category</th>
		<th>Buyer Product Name</th>
		<th>Buyer Product Id</th>
        <th>Quantity</th>
		<th style="color:orange">Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>Seller's Re-Negotiated Price</th>
		<th>Buyer's Re-Negotiated Price</th>
		<th>View Quotation</th>
		<th>Upload Purchase Order</th>
		
                    
             
		
      </tr>
    </thead>			
				
				<tbody>
	<?php $k=0;?>
	 <?php foreach($lastupload as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
			
			<td><input type="hidden" name="vusername" value="<?php echo $row->
			vusername;?>"><?php echo $row->vusername;?>
			<input type="hidden" name="bname" value="<?php echo $row->
			bname;?>">
			
			<input type="hidden" name="bcompanyname" value="<?php echo $row->bcompanyname;?>"></td>
			
		
			
			<td><input type="hidden" name="category" value="<?php echo $row->category;?>"><?php echo $row->category;?></td>
			
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>"><?php echo $row->productname;?></td>
			
			<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>"><?php echo $row->productid;?></td>
			
			<td><input type="hidden" name="quantity" value="<?php echo $row->quantity;?>"><?php echo $row->quantity."/"; echo $row->units;?><input type="hidden" name="units" value="<?php echo $row->units;?>"></td>
			
			<input type="hidden" name="price" value="<?php echo $row->price;?>"><input type="hidden" name="priceperkg" value="<?php echo $row->priceperkg;?>">
			
			<td><input type="hidden" name="sellerprice" value="<?php echo $row->sellerprice;?>"><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?><input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>"></td>
			
			<td><input type="hidden" name="buyer_nego_price" value="<?php echo $row->buyer_nego_price;?>"><?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?><input type="hidden" name="buyer_nego_units" value="<?php echo $row->buyer_nego_units;?>"></td>
			
			<td><input type="hidden" name="seller_renego_price" value="<?php echo $row->seller_renego_price;?>"><?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?><input type="hidden" name="seller_renego_units" value="<?php echo $row->seller_renego_units;?>"></td>
			
			<td><input type="hidden" name="buyer_final_price" value="<?php echo $row->buyer_final_price;?>"><?php echo $row->buyer_final_price."/"; echo $row->buyer_final_units;?><input type="hidden" name="buyer_final_units" value="<?php echo $row->buyer_final_units;?>"></td>
			
	<td> 
		<a href="<?php echo base_url().'Customer_quotation12/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">.
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
				<input  type="submit" id="" class="btn btn-info " onclick="return upload_sel2ndapprovedpo()" name="submit" value="Upload">
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
 
 
 
 
 
 <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			    <form action="<?php echo base_url();?>Customer_buypurchase_order4" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
		<th>Seller ID</th>
		
	    <th>Category</th>
		<th>Buyer Product Name</th>
		<th>Buyer Product Id</th>
        <th>Quantity</th>
		<th style="color:orange">Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>Seller's Re-Negotiated Price</th>
		<th>Buyer's Re-Negotiated Price</th>
		<th>View Quotation</th>
		<th>Upload Purchase Order</th>
		
                    
             
		
      </tr>
    </thead>			
				
				<tbody>
	<?php $k=0;?>
	 <?php foreach($finalupldpo as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
			
			<td><input type="hidden" name="vusername" value="<?php echo $row->
			vusername;?>"><?php echo $row->vusername;?>
			<input type="hidden" name="bname" value="<?php echo $row->
			bname;?>">
			
			<input type="hidden" name="bcompanyname" value="<?php echo $row->bcompanyname;?>"></td>
			
		
			
			<td><input type="hidden" name="category" value="<?php echo $row->category;?>"><?php echo $row->category;?></td>
			
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>"><?php echo $row->productname;?></td>
			
			<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>"><?php echo $row->productid;?></td>
			
			<td><input type="hidden" name="quantity" value="<?php echo $row->quantity;?>"><?php echo $row->quantity."/"; echo $row->units;?><input type="hidden" name="units" value="<?php echo $row->units;?>"></td>
			
			<input type="hidden" name="price" value="<?php echo $row->price;?>"><input type="hidden" name="priceperkg" value="<?php echo $row->priceperkg;?>">
			
			<td><input type="hidden" name="sellerprice" value="<?php echo $row->sellerprice;?>"><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?><input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>"></td>
			
			<td><input type="hidden" name="buyer_nego_price" value="<?php echo $row->buyer_nego_price;?>"><?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?><input type="hidden" name="buyer_nego_units" value="<?php echo $row->buyer_nego_units;?>"></td>
			
			<td><input type="hidden" name="seller_renego_price" value="<?php echo $row->seller_renego_price;?>"><?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?><input type="hidden" name="seller_renego_units" value="<?php echo $row->seller_renego_units;?>"></td>
			
			<td><input type="hidden" name="buyer_final_price" value="<?php echo $row->buyer_final_price;?>"><?php echo $row->buyer_final_price."/"; echo $row->buyer_final_units;?><input type="hidden" name="buyer_final_units" value="<?php echo $row->buyer_final_units;?>"></td>
			
	<td> 
		<a href="<?php echo base_url().'Customer_quotation12/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">.
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
				<input  type="submit" id="" class="btn btn-info " onclick="return upload_sel2ndapprovedpo()" name="submit" value="Upload">
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
 
 
 
 
 
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			  <form action="<?php echo base_url();?>Customer_buypurchase_order2" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  <th>Supplier Id</th>
	  

	   <th>Category</th>
		<th>Product Name</th>
		<th>Product Id</th>
        <th>Description</th>
		
		<th>Stock</th>
	   
		<th>Price</th>
		<th>Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>View Quotation</th>
		<th>Upload Purchase Order</th>
                    
             
		
      </tr>
    </thead>
    <tbody>
	
      
      <?php $k=0;?>
	   <?php foreach($twouploadPo as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
		  		
	  <td><input type="hidden" name="vusername" value="<?php echo $row->vusername;?>"><?php echo $row->vusername;?><input type="hidden" name="bname" value="<?php echo $row->bname;?>">
	  <input type="hidden" name="sellerid" value="<?php echo $row->vusername;?>"><input type="hidden" name="buyerid" value="<?php echo $row->bname;?>">
	  <input type="hidden" name="bcompanyname" value="<?php echo $row->bcompanyname;?>"></td> 

		
		<td><input type="hidden" name="category" value="<?php echo $row->category;?>"><?php  echo $row->category;?></td>
		
		<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>"><?php echo $row->productname?></td>
		 
		 <td><input type="hidden" name="productid" value="<?php echo $row->productid;?>"><?php echo $row->productid?></td>
         
		 <td><input type="hidden" name="description" value="<?php echo $row->description;?>"><?php echo $row->description?></td>
		
		<td><input type="hidden" name="quantity" value="<?php echo $row->quantity;?>"><?php echo $row->quantity." ";echo $row->units;?>
		<input type="hidden" name="units" value="<?php echo $row->units;?>"></td>
		
		<td><input type="hidden" name="price" value="<?php echo $row->price;?>"><?php echo $row->price."/";echo $row->priceperkg;?><input type="hidden" name="priceperkg" value="<?php echo $row->priceperkg;?>"></td>
		
		<td><input type="hidden" name="sellerprice" value="<?php echo $row->sellerprice;?>"><?php echo $row->sellerprice."/";echo $row->bsupplyability;?><input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>"></td>
										
		<td><input type="hidden" name="buyer_nego_price" value="<?php echo $row->buyer_nego_price;?>"><?php echo $row->buyer_nego_price."/";echo $row->buyer_nego_units;?><input type="hidden" name="buyer_nego_units" value="<?php echo $row->buyer_nego_units;?>"></td>
									
	<td> 
		<a href="<?php echo base_url().'Customer_quotation10/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
			
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]" id ="upload_dd">
					
			
				<input onclick="return upload_po()" type="submit" id="" class="btn btn-info " name="submit" value="Upload">
			</td>

		
 
</tr>   
      <?php $k++;}?>
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
            <h1 class="h3 mb-0 text-gray-800">Upload your Purchdfdase Order</h1>
           
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

	
			<td><input  type="hidden" name="sellerid" value="<?php echo $row->sellerid;?>">
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
      