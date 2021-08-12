
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approve Buyer</h1>
           				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
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
    <td data-label="Sl.No."><?php echo $count;?></td>				
					<td data-label="Buyer Name"><?php echo $row->bname;?></td>
					<td data-label="Company Type"><?php  echo $row->bcompanytype; ?></td>
					<td data-label="Contact Person"><?php echo $row->bcontactperson; ?></td>
					
					<td data-label="Location"><?php echo $row->baddress; ?></td>
					<td data-label="City"><?php echo $row->bcity;?></td>
					
					<td data-label="Option"><a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."admin_buyerdetail/index/".urldecode($row->buyerid);?>"><i class="fa fa-eye"></i>View</a>
					
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
 
 

