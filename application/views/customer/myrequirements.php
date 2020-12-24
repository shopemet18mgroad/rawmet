
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Requirements</h1>
            
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
			<th>Product Name</th>
			<th>Description</th>
			<th>Quantity</th>
			<th>Units</th>
			<th>Required Date</th>
			<th>Last Date</th>
			<th>Email</th>
			<th>Images</th>
			<th>Download</th>
			<th>Action</th>
      </tr>
    </thead>
    <tbody>
	 <?php foreach($sqldata as $row){?>
      <tr> <?php $proid = str_ireplace('/','-',$row->productid);
				?>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->description;?></td>
			<td><?php echo $row->quantity;?></td>
			<td><?php echo $row->units;?></td>
			<td><?php echo $row->requireddate;?></td>
			<td><?php echo $row->lastdate;?></td>
			<td><?php echo $row->email;?></td>
			<td><?php echo $row->uploadimage;?></td>
			<td><button type="submit" class="btn btn-info btn-sm w-75">
					<i class="fa fa-download" aria-hidden="true"></i>
					</button></td>
								
			<td><a href="<?php echo base_url()."Customer_myrequirements/delete_buyingrequ_cust/".$proid;?>"  class="btn btn-danger btn-sm text-white delete-confirm"><i class="fa fa-trash fa-sm"></i></a></td>
		
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

