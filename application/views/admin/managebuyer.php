

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Buyer</h1>
           
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
        <th>Buyer Name</th>
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
		<td><?php echo $row->bname;?></td> 
		<td><?php  echo $row->bcompanytype;?></td>
		<td><?php  echo $row->bcontactperson;?></td>
        <td><?php echo $row->baddress; ?></td>
		<td><?php echo $row->bcity;?></td>
        <td style="form-inline";>
	
				<a class="btn btn-primary btn-xl text-white" href="<?php echo base_url()."admin_vendorprofile/index/".urldecode($row->bname).'/'.urldecode($row->bcompanyname);?>"> <i class="fa fa-edit"></i>Edit</a>
				
				<a href="<?php  echo base_url()."admin_managebuyer/reject/".urldecode($row->bname).'/'.urldecode($row->bcompanyname);?>"><button type="button"  class="btn btn-danger btn-xl text-white">Inactive</button></a>
				</td>
				
      </tr> 
	  <?php $count++;?>
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
</div>