
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Vendor</h1>
         
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped  table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
	      <tr>
		  <th>Sl.No.</th>
        <th>Vendor Name</th>
        <th>Company Type</th>
        <th>Contact Person</th>
		<th>Location</th>
		<th>City</th>
		<th>Option</th>
      </tr>
    </thead>
    <tbody>
	
      
            <?php  $count = 1;?>
	   <?php foreach($data as $row){?>
      <tr>
	        <td><?php echo $count;?></td>
	                  <td><?php echo $row->vname;?></td>
					<td><?php  echo $row->vcompanytype; ?></td>
					<td><?php  echo $row->vcontactperson; ?></td>
					<td><?php echo $row->vaddress; ?></td>
					<td><?php echo $row->vcity;?></td>
		

     <td>
	 <a class="btn btn-primary btn-sm text-white" href="<?php echo base_url()."admin_sellerprofile/index/".urldecode($row->sellerid);?>"><i class="fa fa-edit"></i>Edit</a>
				
		
		<a href="<?php  echo base_url()."Admin_manageseller/reject/".urldecode($row->sellerid);?>"><button type="button" class="btn btn-danger">Inactive</button></a>

				
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

  