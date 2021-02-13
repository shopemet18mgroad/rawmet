  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller Requirements Negotiated</h1>
           
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
		<th>Seller Name</th>
		<th>Buyer Company Name</th>
	    <th>Category</th>
		<th>Buyer Product Name</th>
		<th>Buyer Product Id</th>
        <th>Quantity</th>
		<th>Buyer Price</th>
		<th style="color:orange">Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>Seller's Re-Negotiated Price</th>
		<th>View Quotation</th>
		<th>Upload Purchase Order</th>
		
                    
             
		
      </tr>
    </thead>			
				
				<tbody>
	<?php $k=0;?>
	 <?php foreach($sqldata3 as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
			<td><input type="hidden" name="vusername" value="<?php echo $row->vusername;?>"><?php echo $row->vusername;?></td>
			<td><input type="hidden" name="bcompanyname" value="<?php echo $row->bcompanyname;?>"><?php echo $row->bcompanyname;?></td>
			<td><input type="hidden" name="category" value="<?php echo $row->category;?>"><?php echo $row->category;?></td>
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>"><?php echo $row->productname;?></td>
			<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>"><?php echo $row->productid;?></td>
			<td><input type="hidden" name="quantity" value="<?php echo $row->quantity;?>"><?php echo $row->quantity."/"; echo $row->units;?><input type="hidden" name="units" value="<?php echo $row->units;?>"></td>
			<td><input type="hidden" name="price" value="<?php echo $row->price;?>"><?php echo $row->price.""; echo $row->priceperkg;?><input type="hidden" name="priceperkg" value="<?php echo $row->priceperkg;?>"></td>
			<td><input type="hidden" name="sellerprice" value="<?php echo $row->sellerprice;?>"><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?><input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>"></td>
			<td><input type="hidden" name="buyer_nego_price" value="<?php echo $row->buyer_nego_price;?>"><?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?><input type="hidden" name="buyer_nego_units" value="<?php echo $row->buyer_nego_units;?>"></td>
			<td><input type="hidden" name="seller_renego_price" value="<?php echo $row->seller_renego_price;?>"><?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?><input type="hidden" name="seller_renego_units" value="<?php echo $row->seller_renego_units;?>"></td>
			
			<td> 
		<a href="<?php echo base_url().'Customer_quotation10/auc_no/'.urldecode($row->bname)."/".urldecode($row->vusername)."/".urldecode($proid);?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
				<input type="submit" id="" class="btn btn-info " name="submit" value="Upload">
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






 