
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
          <!-- Page Heading -->
         

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-sm-12 ">
          <div class="card shadow">
            <div class="card-body ">
              <div class="table-responsive">
			  
			   <h5 class="offset-sm-12"><b style="text-align:center;color:red";><center><blink>Live Procurements</blink> </center></b></h5>
			                             <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>
			   <script>
function goBack() {
  window.history.back();
}
</script>
                <table class="table table-striped table-bordered table-sm w-auto small" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr> 
	     <th>Sl.No.</th>
	    <th>Images</th>
	    <th>Product Id</th>
	    <th>Product Name</th>
	    <th>Description</th>
        <th>Location</th>
        <th>Quantity</th>
        <th>Action</th>
		
		
      </tr>
    </thead>
    <tbody>
	  <?php  $count = 1;?>  
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <td data-label="Sl.No."><?php echo $count;?></td> 
	
	    <td data-label="Images"><?php $img = unserialize($row->uploadimage)?>
		  <img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="55px"></td>
			<td data-label="Product Id"><?php echo $row->productid;?></td>
			<td data-label="Product Name"><?php echo $row->productname;?></td>
		
			<td data-label="Description"> <?php echo $row->description;?></td>
			<td data-label="Location"><?php echo $row->bcity;?>
			</td>
			<td data-label="Quantity"><?php echo $row->quantity.' '.$row->units;?></td>	
			
			<td data-label="Action">
			<a href="<?php  echo base_url()."home_login/index/"?>"><button style="font-size:10px;" type="button" class="btn btn-info  mt-2">Send Offer</button></a>
			</td>
			
			
			
			
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

 
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

