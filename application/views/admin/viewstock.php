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
	   <th>Sl.No.</th>
	  <th>Image</th>
	 <th>Product Id</th>
	 <th>Product Name</th>
	 <th>Vendor Name</th>
     <th>Company Name</th>
	 <th>Description</th>
	 <th>Price</th>
      <th>Quantity</th> 
		<th>Location</th> 
		
      </tr>
    </thead>
    <tbody>
	      <?php  $count = 1;?>
	
	<?php foreach($sqldata as $row){?>
     <tr>
	 <?php $proid = str_ireplace('/','-',$row->productid);?>
	<?php $prodid = str_ireplace('/','-',$row->productid);?>
	<td><?php echo $count;?></td>
				
	<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="55px"></td>
				   
	<td><?php echo $row->productid;?></td> 
	<td><?php echo $row->productname;?></td>
	   <td><?php echo $row->vname;?></td>
<td><?php echo $row->companyname;?></td> 
<td><?php echo $row->description;?></td>
	<td><?php echo $row->price."/". $row->supplyunits;?></td>
	  <td><?php echo $row->quantity."/". $row->units;?></td> 
      <td><?php echo $row->pcities."/". $row->pstates;?></td>  
<?php $count++;?>		  
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