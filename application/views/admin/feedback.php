 
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
           
			
			 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>
			   <script>
function goBack() {
  window.history.back();
}
</script> 
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
        <th> Name</th>
        <th>Mobile Number</th>
      
	  <th>Email</th>
	  <th>State|City</th>
	  <th>Message</th>
	</tr>
    </thead>
    <tbody>
	
      

      <?php  $count = 1;?>
	  

	   <?php foreach($sqldata as $row){?>
      <tr>
	 

		<td data-label="Sl.No."><?php echo $count;?></td> 
	  <td data-label="Name"><?php echo $row->fname;?></td> 
		<td data-label="Mobile Number"><?php echo $row->mobilenumber;?></td> 
	
	<td data-label="Email"><?php echo $row->emailid;?></td> 
	<td data-label="State|City"><?php echo $row->pstates."|".$row->pcities;?></td> 
	
        	<td data-label="Message"><?php echo $row->commet;?></td> 

		




 
				
				
				
				
<?php $count++;?>


        
<?php }?>	
</tr>   
      
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