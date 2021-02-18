
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Re-Negotiated Value
			</h1>
            
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
      <tr> 
         <th>Sl.No.</th>
	        <th>Seller Id</th>
			<th>Buyer Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th  style="color:orange;">Seller Base Quantity</th>
			<th  style="color:orange;">Seller Base Price</th>
			
			<th style="color:green;">Buyer Negotiated Quantity</th>
			<th style="color:green;">Buyer Negotiated Price</th>
			<th style="color:orange;">Seller Negotiated price</th>
			<th style="color:green;">Buyer Re-Negotiated price</th>
			<th style="color:green;">Buyer Re-Negotiated Quantity</th>
			<th style="color:orange;">Your Re-Negotiated price</th>
			<th>Action</th>	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	        
     
    </thead>
    <tbody>
	  <?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
		     <td><?php echo $count;?></td>
			 <td><?php echo $row->sellerid;?></td>
			<td><?php echo $row->buyerid;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
				<td><?php echo $row->price."/"; echo $row->punits;?></td>
				<td><?php echo $row->quantity.""; echo $row->units;?></td>
			<td><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
			<td><?php echo $row->selprice."/"; echo $row->sunits;?></td>
			<td><?php echo $row->brenegoprice."/"; echo $row->brenegounit;?></td>
			<td><?php echo $row->brenegoquantity.""; echo $row->brenegoquantityunit;?></td>
			<td><?php echo $row->sellrenegoprice."/"; echo $row->sellrenegounits;?></td>	
			<td style="color:orange;" ><b><?php  if($row->custapprove == 0) {echo 'Pending';}else if($row->custapprove == 2) {echo 'Rejected';}else if($row->custapprove == 1) {echo 'Approved!';}?></b></td>
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

