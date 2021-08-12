<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Buying Requirements</h1>
                                                  <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>
			   <script>
function goBack() {
  window.history.back();
}
</script> 
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
	  <th>Sl.No.</th>
	  <th>Images</th>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Buyer Name</th>
			<th>company Name</th>
			<th>Description</th>
		<th>Location</th>
		<th>Price</th>
		<th>Quantity</th>
      </tr>
    </thead>
    <tbody>
	  <?php  $count = 1;?>  
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <td data-label="Sl.No."><?php echo $count;?></td> 
	
	<td data-label=""><?php $img = unserialize($row->uploadimage)?>
		<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="55px"></td>
			<td data-label="Images"><?php echo $row->productid;?></td>
			<td data-label="Product Id"><?php echo $row->productname;?></td>
			<td data-label="Product Name"><?php echo $row->buyerid;?></td>
			<td data-label="Buyer Name"><?php echo $row->bcompanyname;?></td>
		
			<td data-label="Description"><?php echo $row->description;?></td>
			<td data-label="Location"><?php echo $row->bcity;?></td>
			<td data-label="Price"><?php echo $row->price.'/'.$row->priceperkg;?></td>
			<td data-label="Quantity"><?php echo $row->quantity.' '.$row->units;?></td>	
				<?php $count++;?>
			
		
      </tr>      
     <?php }?>	
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

