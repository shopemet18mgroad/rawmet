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
	  <th>Image</th>
	  <th>ISO Certificate</th>
	  <th>Product Id</th>
	  <th>Vendor Name</th>
       <th>Product Name</th>
	   <th>Payable to Rawmet<br>Status</th>
	   
       <th>options</th>
		
		
      </tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
	 
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
					<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="55px"></td>
					<td><?php $img = unserialize($row->uploadcertificate)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="55px"></td>
	  <td><?php echo $row->productid;?></td> 
	   <td><?php echo $row->vname;?></td>
		<td><?php echo $row->productname;?></td> 
		<td style="color:green;"><b><?php  if($row->comapprove == 0) {echo 'Pending';}else if($row->comapprove == 2) {echo 'Rejected';}else if($row->comapprove == 1) {echo 'Approved';}?></b></td>
	
		

		<td style="display:inline-flex;">
		<a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."admin_uploadedview/index/".$proid;?>"><i class="fa fa-eye">View</i></a>
		
		
			
		
		
		
		
		
		<a href="<?php  echo base_url()."admin_adminvendorproducts/reject/".$prodid."/".urldecode($row->vname);?>"><button type="button" class="btn btn-danger">Reject</button></a>
		
		
		
	
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