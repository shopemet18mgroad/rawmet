  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Uploaded Product</h1>
           
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
	
	  <th>Product Id</th>
	  <th>Vendor Name</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Description</th>
		<th>Price</th>
		<th>stock</th>
	    <th>Image</th>
		<th>Supply Ability</th>
		
		
		<th>options</th>
		
		
      </tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
	  <td><?php echo $row->productid;?></td> 
	   <td><?php echo $row->vname;?></td>
		<td><?php echo $row->productname;?></td> 
		<td><?php  echo $row->category;?></td>
         <td><?php echo $row->description?></td>
		<td><?php echo $row->price;?></td>
		<td><?php echo $row->quantity;?></td>

		<td><?php echo $row->uploadproductimage;?></td>
		<td><?php echo $row->supplyability;?></td>
		

		<td style="display:inline-flex;">
		
		<a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."admin_uploadedview/index/".urldecode($row->productname).'/'.urldecode($row->category);?>">view</a>
		
		<button type="submit" name="submit" id="<?php echo $proid;?>" onclick="admin_productapprove(this.id)" class="btn btn-info btn-sm">Approve</button>
		</td>
        
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
</div>