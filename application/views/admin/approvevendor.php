

        <!-- End of Topbar -->
<link href="<?php echo base_url()."web_files2/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approve Vendor</h1>
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
                <table class="table table-striped  table-bordered" style="font-size:13px;" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  <th>Sl.No.</th>
       <!-- <th>Vendor Name</th>-->
        <th>Company Type</th>
		<th>Company Name</th>
		
        <th>Contact Person</th>
		<th>Location</th>
		<th>Product Description</th>
		
		<th>City</th>
		<th>Option</th>
      </tr>
    </thead>
    <tbody>
	      <?php  $count = 1;?>
       
<?php foreach($data as $row){?>
				<tr>
				    <td data-label="Sl.No."><?php echo $count;?></td>
                    <!--<td data-label="Vendor Name"><?php //echo $row->vname; ?></td>-->
					<td data-label="Company Type"><?php echo $row->vcompanytype; ?></td>
					<td data-label="Company Name"><?php echo $row->vcompanyname; ?></td>
					
					<td data-label="Contact Person"><?php echo $row->vcontactperson; ?></td>
					
					<td data-label="Location"><?php echo $row->vaddress;?></td>
					<td data-label="Product Description"><?php echo $row->vproddescrip;?></td>
					<td data-label="City"><?php echo $row->vcity;?></td>
					<td data-label="Option" style="display:inline-flex;">
					
					<a class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."admin_vendordetail/index/".urldecode($row->sellerid);?>"><i class="fa fa-eye">View</i></a>
		
		         </td>
			
					
					
					
				
		<?php $count++;?>
				<?php }?>
				</tr>
				

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

