 <head>
 <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 </head>
 <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Commission</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive"><center>
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
									                <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
    <thead class="bg-primary text-white">
      <tr>
	    <th>Sl.No.</th>
		<th>Supplier Id</th>
		<th>Product Id</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Commission to Rawmet</th>
		<th>Image</th>
		<th>Status</th>

      </tr>
    </thead>
    <tbody>
	
      
    <?php  $count = 1;?>
	<?php foreach($sqldata as $row){?>
    <tr>
	 <?php $proid = str_ireplace('/','-',$row->productid);?>
		<td data-label="Sl.No."><?php echo $count;?></td>  
		<td data-label="Supplier Id"><?php echo $row->sellerid;?></td>
		<td data-label="Product Id"><?php echo $row->productid;?></td> 
		<td data-label="Product Name"><?php echo $row->productname;?></td> 
		<td data-label="Category"><?php  echo $row->category;?></td>
        <td data-label="Commission to Rawmet" style="color:green"><?php echo $row->payable."%";?></td>
		<td data-label="Image"><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100%" height="55px"></td>
	
		<td data-label="Status" style="color:orange";><b><?php  if($row->pooptions == 1) {echo 'Paid';}else if($row->pooptions == 2) {echo 'UnPaid';}else if($row->pooptions == 0) {echo 'Pending';}?></b></td>


	<!--	<td data-label="Pay Now"><button type="button" class="btn btn-primary btn-sm"><?php  //if($row->pooptions == 2) {echo 'Pay now';}?></button></td>-->

		

<?php $count++;?>
        
<?php }?>	
</tr>   
      
    </tbody>
  </table>
  </center>

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