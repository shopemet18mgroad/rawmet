
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
                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Quantity</th>
		<th>Required Date</th>
		<th>Last Date</th>
		 <th>Email</th>
		 <th>Contact Number</th>
		 <th>Images</th>
		 <th>Download</th>
      </tr>
    </thead>
    <tbody>
	 <?php foreach($adac as $row){?>
      <tr>
        <td><?php echo $row->productname;?></td>
        <td><?php echo $row->description;?></td>
        <td><?php echo $row->quantity;?></td>
		<td><?php echo $row->requireddate;?></td>
		<td><?php echo $row->lastdate;?></td>
		<td><?php echo $row->uploadimage;?></td>
		<td><?php echo $row->email;?></td>
		<td>Pending</td>
		<td><button type="submit" class="btn btn-info btn-sm w-75">
					<i class="fa fa-download" aria-hidden="true"></i>
					</button></td>
		
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

