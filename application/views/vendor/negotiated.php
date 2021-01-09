  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buyer Requirements Negotiated</h1>
           
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
	  <th>Buyer Name</th>
	  
        <th> Buyer Company Name</th>
	     <th>Category</th>
		<th> Buyer Product Name</th>
		<th> Buyer Product Id</th>
        <th>Quantity</th>
		<th>Units</th>
		<th> Buyer Price</th>
		<th>Seller Price</th>
		<th>Status</th>
		
		
                    
             
		
      </tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
	  <td><?php echo $row->bname;?></td> 
		<td><?php echo $row->bcompanyname;?></td> 
		<td><?php  echo $row->category;?></td>
		 <td><?php echo $row->productname?></td>
		  <td><?php echo $row->productid?></td>
      
		
		<td><?php echo $row->quantity;?></td>
		<td><?php echo $row->units;?></td>
				<td><?php echo $row->price."/";echo $row->priceperkg;?></td>
						
								<td><?php echo $row->sellerprice."/";echo $row->bsupplyability;?></td>
		
	
	<td style="color:orange"><?php  if($row->bapprove == 0) {echo 'Pending to Approve';}else if($row->bapprove == 2) {echo 'Rejected';}else if($row->bapprove == 1) {echo 'Approved';}?></td>
		
        
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