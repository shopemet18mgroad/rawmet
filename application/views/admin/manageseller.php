
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
		<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Vendor</h1>
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
			<br><a id="mylink" style="float:right" href="" type="button" class="btn btn-info btn-sm mr-5 mylink display"><b>Download Excel</b></a><br><br>
			<center> <div class="form-group">
      <label class="control-label col-sm-2">SPOC:</label>
	  
      <div class="col-sm-4"> 
	  
	 
	  <select class="form-control"  id="myInput" name="myInput">

		<option  value="">SELECT</option>
	   <?php foreach( $data1 as $row){?>
	     
		
	   <option value="<?php echo $row->vrefer;?>"><?php echo $row->spoc;}?></option>
	  
		
	   <option  value="">ALL</option>


     </select>
		
    </div>
    </div></center>
         
              <div class="table-responsive">
                <table class="table table-striped  table-bordered" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
    	
	
	
	      <tr>
		  <th>Sl.No.</th>
        <th>Vendor Name</th>
        <th>Company Type</th>
        <th>Company Name</th>
        <th>Contact Person</th>
		<th>Location</th>
		<th>City</th>
        <th>Refer</th>
		<th>verify</th>
		<th>Option</th>
      </tr>
    </thead>
  <tbody id = "myTable">
	
      
      <?php  $count = 1;?>
	   <?php foreach($data as $row){?>
      <tr>
	           <td data-label="Sl.No." ><?php echo $count;?></td> 
	                 <td data-label="Vendor Name"><?php echo $row->vname;?></td>
					<td data-label="Company Type"><?php  echo $row->vcompanytype; ?></td>
                    <td data-label="Company Name"><?php  echo $row->vcompanyname; ?></td>
					<td data-label="Contact Person"><?php  echo $row->vcontactperson; ?></td>
					<td data-label="Location"><?php echo $row->vaddress; ?></td>
					<td data-label="Refer"><?php echo $row->vcity;?></td>
                    <td data-label="Option"><?php echo $row->vrefer;?></td>
					<!--<td data-label="Option"><?php echo $row->vverify;?></td>-->
					<?php if($row->vverify == 0 )   { ?>
					<td> <a href="<?php  echo base_url()."Admin_manageseller/verify/".urldecode($row->sellerid);?>"><i class="fa fa-check-circle" style="font-size:18px;color: red"></i></a></td>
					
<?php } else {?>
<td> <a href="<?php  echo base_url()."Admin_manageseller/unverify/".urldecode($row->sellerid);?>"><i class="fa fa-check-circle" style="font-size:18px;color:green "></i></a></td>



<?php } ?>
		

     <td>
		
		<a href="<?php  echo base_url()."Admin_manageseller/reject/".urldecode($row->sellerid);?>"><i class="fa fa-ban" style="font-size:18px;color:red"></i></a>

				<a class="" href="<?php echo base_url()."admin_sellerprofile/index/".urldecode($row->sellerid);?>"><i class="fa fa-edit"></a></td>
				

    
<?php $count++;?>
      </tr> 
	  
<?php }?>	  
      
    </tbody>
      
  </table>
  <script>

$(document).ready(function(){
  $("#myInput").on("change", function() {
    var value = $(this).val().toLowerCase();
	$("a.mylink").attr("href", "<?php echo base_url();?>admin_manageseller/export_csvenquiry/" +value);
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
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

  