

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approve Vendor</h1>
          
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
                    <td><?php echo $row->vname; ?></td>
					<td><?php echo $row->vcompanytype; ?></td>
					
					<td><?php echo $row->vcontactperson; ?></td>
					
					<td><?php echo $row->vaddress;?></td>
					<td><?php echo $row->vcity;?></td>
					<td style="display:inline-flex;">
					
					<a class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."admin_vendordetail/index/".urldecode($row->sellerid);?>"><i class="fa fa-eye">View</i></a>
		
		
					<!--<button type="submit" name="submit" id="<?php echo urldecode($row->sellerid);?>" onclick="admin_sellerapprove(this.id)" class="btn btn-info btn-sm">Activate</button>-->	
					
					</td>
					
				
	
				</tr>
					<?php $count++;?>
				<?php }?>

				</tbody>	  
    
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
     
      
</div>

</div>