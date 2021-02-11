  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
           
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
	  <th>Sl.no.</th>
        <th> Name</th>
        <th>Mobile Number</th>
      
	  <th>Email</th>
	  <th>State|City</th>
	  <th>Mobile Number</th>
	</tr>
    </thead>
    <tbody>
	
      

      <?php  $count = 1;?>
	  

	   <?php foreach($sqldata as $row){?>
      <tr>
	 

		<td><?php echo $count;?></td> 
	  <td><?php echo $row->fname;?></td> 
		<td><?php echo $row->mobilenumber;?></td> 
	
	<td><?php echo $row->emailid;?></td> 
	<td><?php echo $row->pstates."|".$row->pcities;?></td> 
	
        	<td><?php echo $row->commet;?></td> 

		




 
				
				
				
				
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