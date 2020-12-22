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
        <th>Product Name</th>
        <th>Category</th>
        <th>Description</th>
		<th>Price</th>
		<th>stock</th>
	    <th>Image</th>
		<th>Supply Ability</th>
		<th>Estimated Delivery Time</th>
		
		<th>options</th>
		
		
      </tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
		<td><?php echo $row->productname;?></td> 
		<td><?php  echo $row->category;?></td>
         <td><?php echo $row->description?></td>
		<td><?php echo $row->price;?></td>
		<td><?php echo $row->quantity;?></td>

		<td><?php echo $row->uploadproductimage;?></td>
		<td><?php echo $row->supplyability;?></td>
		<td><?php echo $row->estdeltime;?></td>

		<td style="display:inline-flex;">
		
		<a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."vendor_uploadedview/index/".urldecode($row->productname).'/'.urldecode($row->category);?>"><i class="fa fa-eye"></i></a>
		<a style="margin:2px" class="btn btn-primary btn-sm text-white" href="<?php echo base_url()."vendor_editpostproduct/index/".urldecode($row->productname).'/'.urldecode($row->category);?>"><i class="fa fa-edit"></i></a>
				
				
		<a style="margin:2px" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></a></td>
        
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