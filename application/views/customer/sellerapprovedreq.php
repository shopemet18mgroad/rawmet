
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller's Approved Requirements</h1>
            
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
			<th>Product Id</th>
			<th>Seller Name</th>
			<th>Product Name</th>
			<th>Description</th>
			<th>Quantity</th>
			<th>Units</th>
			<th>Price/</th>
			<th>Units</th>
			<th>Required Date</th>
			<th>Last Date</th>
			<th>Status</th>
			<th>Images</th>
			
      </tr>
    </thead>
    <tbody>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->vname;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->description;?></td>
			<td><?php echo $row->quantity;?></td>
			<td><?php echo $row->units;?></td>
			<td><?php echo $row->price;?></td>
			<td><?php echo $row->priceperkg;?></td>
			<td><?php echo $row->requireddate;?></td>
			<td><?php echo $row->lastdate;?></td>
				<td style="color:orange;"><b><?php if($row->selapprove == 1){echo 'Approved';} elseif($row->selapprove==0){echo 'Pending';}?></b></td>
				<td><?php $img = unserialize($row->uploadimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="85px"></td>
				
		
				
			
		
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

