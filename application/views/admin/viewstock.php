 
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Uploaded Product</h1>
                          <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>
			   <script>
function goBack() {
  window.history.back();
}
</script>
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
	 <th>Seller ID</th>
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
	<td data-label="Sl.No."><?php echo $count;?></td>
				
	<td data-label="Image"><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="55px"></td>
				   
	<td data-label="Product Id"><?php echo $row->productid;?></td> 
	<td data-label="Product Name"><?php echo $row->productname;?></td>
	   <td data-label="Seller ID"><?php echo $row->sellerid;?></td>
<td data-label="Company Name"><?php echo $row->companyname;?></td> 
<td data-label="Description"><?php echo $row->description;?></td>
	<td data-label="Price"> <?php echo $row->price."/". $row->punits;?></td>
	  <td data-label="Quantity"><?php echo $row->quantity." ". $row->units;?></td> 
      <td data-label="Location"> <?php echo $row->pcities."/". $row->pstates;?></td>  
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