
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
    	
	<center> <div class="form-group">
      <label class="control-label col-sm-2">SPOC:</label>
	  
      <div class="col-sm-4"> 
	  
	 
	  <select class="form-control"  id="myInput" name="myInput">

		<option  value="">SELECT</option>
	   <?php foreach( $data1 as $row){?>
	     
		
	   <option value="<?php echo $row->vrefer;?>"><?php echo $row->spoc;}?></option>
	  
		
	   <option  value="">ALL</option>


     </select>
		<br><a id="mylink" href="" type="button" class="btn btn-info btn-sm ml-3 mylink display"><b>Download Excel</b></a><br><br>
    </div>
    </div></center>
	      <tr>
        <th>Vendor Name</th>
        <th>Company Type</th>
        <th>Company Name</th>
        <th>Contact Person</th>
		<th>Location</th>
		<th>City</th>
        <th>Refer</th>
		<th>Option</th>
      </tr>
    </thead>
  <tbody id = "myTable">
	
      
      
	   <?php foreach($data as $row){?>
      <tr>
	                  <td><?php echo $row->vname;?></td>
					<td><?php  echo $row->vcompanytype; ?></td>
                    <td><?php  echo $row->vcompanyname; ?></td>
					<td><?php  echo $row->vcontactperson; ?></td>
					<td><?php echo $row->vaddress; ?></td>
					<td><?php echo $row->vcity;?></td>
                    <td><?php echo $row->vrefer;?></td>
		

     <td>
		
		<a href="<?php  echo base_url()."Admin_manageseller/reject/".urldecode($row->vname);?>"><i class="fa fa-ban" style="font-size:18px;color:red"></i></a>

				<a class="" href="<?php echo base_url()."admin_sellerprofile/index/".urldecode($row->vname).'/'.urldecode($row->vcompanyname);?>"><i class="fa fa-edit"></a></td>
				

    

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

  