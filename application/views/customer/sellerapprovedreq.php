
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller's Approved Requirements</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm w-auto small" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
			<th>Product Id</th>
			<th>Seller Name</th>
			<th>Product Name</th>
			<th>Description</th>
			<th>Quantity</th>
			<th>Price</th>
		
		
			<th>Status</th>
			
			<th>Images</th>
			<th>View Quotation</th>
		
			
      </tr>
    </thead>
    <tbody>
	    
      	<form action="<?php echo base_url();?>Customer_selpurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
	<?php $k=0;?>
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>

		
			<td><input type="hidden"  name="productid" value="<?php echo $row->productid;?>">
							<?php echo $row->productid;?></td>
			
			<td><input type="hidden" id="vname" name="vname" value="<?php echo $row->vname;?>">
							<?php echo $row->vname;?></td>
			<td><input type="hidden"  name="bcompanyname" value="<?php echo $row->bcompanyname;?>">
							<?php echo $row->bcompanyname;?></td>
			<td><input type="hidden"  name="category" value="<?php echo $row->category;?>">
							<?php echo $row->category;?></td>
			
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>">
							<?php echo $row->productname;?></td>
			
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
			
		
				<td style="color:orange;"><b><?php if($row->selapprove == 1){echo 'Approved';} elseif($row->selapprove==0){echo 'Pending';}?></b></td>
				<td><?php $img = unserialize($row->uploadimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="85px"></td>
						<td> <a href="<?php echo base_url().'customer_quotation2/auc_no/'.urldecode($row->bname)."/".urldecode($row->vname)."/".urldecode($proid);?>" target="_blank">
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
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

