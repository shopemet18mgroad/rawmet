  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Product List</h1>
           
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
        <th>Product Name</th>
        <th>Category</th>
      
		
		
	    <th>Image</th>

		<th>Status</th>
		<th>options</th>
	</tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
	  <td><?php echo $row->productid;?></td> 
		<td><?php echo $row->productname;?></td> 
		<td><?php  echo $row->category;?></td>
        
	
	
		

		<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="55px"></td>
	

		<td style="color:green;"><b><?php  if($row->poptions == 0) {echo 'Pending';}else if($row->poptions == 2) {echo 'Rejected';}else if($row->poptions == 1) {echo 'Approved';}?></b></td>


		

		<td style="display:inline-flex;">
		
		
		<a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."vendor_uploadedview/index/".$proid;?>"><i class="fa fa-eye"></i></a>
		
		<a style="margin:2px" class="btn btn-primary btn-sm text-white" href="<?php echo base_url()."vendor_editpostproduct/editproduct/".$proid .'/'.urldecode($row->category);?>"><i class="fa fa-edit"></i></a>
	
			<a style="margin:2px" class="btn btn-danger btn-sm text-white" href="<?php echo base_url()."vendor_uploadedproduct/delete_seller/".$proid;?>"><i class="fa fa-trash"></i></a></td>

        
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