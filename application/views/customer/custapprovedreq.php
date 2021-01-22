  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Approved Requirements</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  <th>Supplier name</th>
	  <th>Buyer Name</th>
	  
      <th>companyname</th>
	   <th>Category</th>
		<th>productname</th>
		<th>product Id</th>
        <th>buyer Quantity</th>
	    <th> Buyer Price</th>
		<th>Seller Price</th>
		<!--<th>Image</th>-->
		<th>View Quotation</th>
	
      </tr>
    </thead>
    <tbody>
	
      
      	<form action="<?php echo base_url();?>Customer_buypurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
	<?php $k=0;?>
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>

	
			<td><input type="hidden" name="vusername" value="<?php echo $row->vusername;?>">
							<?php echo $row->vusername;?></td>
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
			 
		<td> <a href="<?php echo base_url().'customer_quotation2/auc_no/'.urldecode($row->bname)."/".urldecode($row->vusername)."/".urldecode($proid);?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
					
			
				<input type="submit" id="" class="btn btn-info " name="submit" value="Upload purchase order">
					
			
				
		 </td>

		
        

</tr>   
      <?php $k++;}?>
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
</div>