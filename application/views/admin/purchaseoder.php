  <div class="container-fluid">
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Commission To Rawmet</h1>
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
	  	<th>Supplier Id</th>
	  <th>Product Id</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Commission to Rawmet</th>
		<th>Image</th>
		<th>Action</th>

		
		
      </tr>
    </thead>
    <tbody>
	
       
      <?php  $count = 1;?>
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				
				  <td data-label="Sl.No." ><?php echo $count;?></td> 
				<td data-label="Supplier Id" ><?php echo $row->sellerid;?></td>
	  <td data-label="Product Id" ><?php echo $row->productid;?></td> 
		<td data-label="Product Name" ><?php echo $row->productname;?></td> 
		<td data-label="Category" ><?php  echo $row->category;?></td>
         <td data-label="Commission to Rawmet" ><?php echo $row->payable."%"?></td>
		
		
		

		<td data-label="Image" ><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100%" height="55px"></td>
	

		<td data-label="Action" ><a href="<?php  echo base_url()."admin_purchaseoder/approve_paid/".$proid."/".urldecode($row->sellerid);?>"><button type="button" class="btn btn-warning btn-sm mt-1">Paid</button></a>
		
		<a href="<?php  echo base_url()."admin_purchaseoder/reject_unpaid/".$proid."/".urldecode($row->sellerid);?>"><button type="button" class="btn btn-danger btn-sm mt-1">Unpaid</button></a>
		
		</td>
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