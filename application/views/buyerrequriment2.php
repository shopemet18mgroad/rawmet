
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       

          <!-- Page Heading -->
         

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-sm-12 ">
          <div class="card shadow">
            <div class="card-body ">
              <div class="table-responsive">
			  <center>
			   <h5 class="offset-sm-12"><b style="text-align:center;color:red";><blink>Live Procurements</blink></b></h5>
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
	  <td data-label="Sl.No."><center><?php echo $count;?></center></td> 
	
	    <td data-label="Images"><center><?php $img = unserialize($row->uploadimage)?>
		  <img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="55px"></center></td>
			<td data-label="Product Id"><center><?php echo $row->productid;?></center></td>
			<td data-label="Product Name"><center><?php echo $row->productname;?></center></td>
		
			<td data-label="Description"> <center><?php echo $row->description;?></center></td>
			<td data-label="Location"><center><?php echo $row->bcity;?>
			</center></td>
			<td data-label="Quantity"><center><?php echo $row->quantity.' '.$row->units;?></center></td>	
			
			<td data-label="Action"><center>
			<a href="<?php  echo base_url()."home_login/index/"?>"><button style="font-size:10px;" type="button" class="btn btn-info  mt-2">Send Offer</button></a></center>
			</td>
			
			
			
			
				<?php $count++;?>
			
		
      </tr>      
     <?php }?>	
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

 
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

