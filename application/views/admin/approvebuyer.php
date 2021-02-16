

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approve Buyer</h1>
           
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
					<td><?php  echo $row->bcompanytype; ?></td>
					<td><?php echo $row->bcontactperson; ?></td>
					
					<td><?php echo $row->baddress; ?></td>
					<td><?php echo $row->bcity;?></td>
					
					<td><a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."admin_buyerdetail/index/".urldecode($row->buyerid)."/".urldecode($row->bcompanyname);;?>"><i class="fa fa-eye"></i>View</a>
					
					<button type="submit" name="submit" id="<?php echo $row->buyerid;?>" onclick="admin_buyerapprove(this.id)" class="btn btn-success btn-sm">Activate</button></td>	
					
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
		
	  </div>
      </div>	
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->
 
 

