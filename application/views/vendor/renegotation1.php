
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ongoing Negotiation</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>   <th>Sl.No.</th>
	        
			<th>Buyer Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			
			
			<th>Category</th>
			<th>Location</th>
		
			<th>Supplier Price</th>
			<th>Supply Ability</th>
			<th style="color:orange;">Buyer Price</th>
			<th style="color:orange;">Buyer Quantity</th>
			
			<th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid =str_ireplace('/','-',$row->productid);
				?>
				<td><?php echo $count;?></td>  
		
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
				<td><?php echo $row->pcities;?></td>
			
	
		  
			
						
			
		<td>	
		<center><a href="<?php echo base_url()."vendor_custquoteapproval/index/".$row->id;?>" class="btn btn-secondary btn-sm text-white delete-confirm">Negotiate</a></center>
		
	
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
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

