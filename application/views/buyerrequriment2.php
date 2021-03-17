
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid bg-primary">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-11 col-lg-6 ml-5">
          <div class="card shadow mb-4">
            <div class="card-body ml-5">
              <div class="table-responsive">
			   <h5 class="offset-sm-5"><b style="text-align:center";>Live Procurements</b></h5>
                <table class="table table-striped table-bordered table-sm w-auto small ml-5" id="dataTable" width="100%" cellspacing="0">
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
	  <td><?php echo $count;?></td> 
	
	<td><?php $img = unserialize($row->uploadimage)?>
		<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="55px"></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->productname;?></td>
		
			<td><?php echo $row->description;?></td>
			<td><?php echo $row->bcity;?></td>
			<td><?php echo $row->quantity.' '.$row->units;?></td>	
			
			<td>
			<a href="<?php  echo base_url()."home_login/index/"?>"><button style="font-size: 10px;" type="button" class="btn btn-info ">Send Offer</button></a>
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

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

