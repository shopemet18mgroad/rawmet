  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller Requirements Negotiated</h1>
           
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
		<th>Buyer Company Name</th>
	    <th>Category</th>
		<th>Buyer Product Name</th>
		<th>Buyer Product Id</th>
        <th>Quantity</th>
		<th style="color:orange">Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>Seller's Re-Negotiated Price</th>
		<th>Buyer's Status</th>
		
		
                    
             
		
      </tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	   
	  <td><?php echo $row->buyerid;?></td> 
		<td><?php echo $row->bcompanyname;?></td> 
		<td><?php  echo $row->category;?></td>
		 <td><?php echo $row->productname?></td>
		  <td><?php echo $row->productid?></td>
      
		

		<td><?php echo $row->quantity."";echo $row->units;?></td>
				
						
								<td><?php echo $row->sellerprice."/";echo $row->bsupplyability;?></td>
		
	<td><?php echo $row->buyer_nego_price."/";echo $row->buyer_nego_units;?></td>
	<td><?php echo $row->seller_renego_price."/";echo $row->seller_renego_units;?></td>
	<td style="color:orange"><b><?php  if($row->buyer_approval == 0) {echo 'Pending to Approve';}else if($row->buyer_approval == 2) {echo 'Rejected';}else if($row->buyer_approval == 1) {echo 'Approved';}else if($row->buyer_approval == 3) {echo 'Pending to Approve';}else if($row->buyer_approval == 5) {echo 'Approved-check in final Approval';}?></b></td>
		
        
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