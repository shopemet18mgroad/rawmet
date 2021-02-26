
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller's Quote Negotiated Value
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
			<th>Supplier Id</th>
			<th>Buyer Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			
			<th>Location</th>
			<th style="color:Orange">Supplier Base Price</th>
			<th style="color:Orange">Supplier base Quantity</th>
			
			<th  style="color:green">Buyer Quantity</th>
			<th style="color:green">Buyer Price</th>
			<th  style="color:Orange"> Re-Seller price</th>
			<th>Action</th>
			
     
    </thead>
    <tbody>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
			<td><?php echo $row->sellerid;?></td>
			<td><?php echo $row->buyerid;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
			
				<td><?php echo $row->pcities;?></td>
			<td><?php echo $row->price."/"; echo $row->punits;?></td>
			<td><?php echo $row->quantity.""; echo $row->units;?></td>
		
			<td><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
			<td><?php echo $row->selprice."/"; echo $row->sunits;?></td>
			<td>
		
		<button type="submit" name="submit" id="<?php echo $row->sellerid.'|'.$proid;?>" onclick="cust_quoteapprove(this.id)" class="btn btn-success btn-sm">Approve</button>
		
		<center><a href="<?php echo base_url()."Customer_buyerrengo/index/".urldecode($proid)."/".urldecode($row->buyerid)."/".urldecode($row->sellerid);?>"  class="btn btn-secondary btn-sm text-white delete-confirm">Renegotation</a></center>
		
		<a href="<?php  echo base_url()."customer_renegotiation/reject/".$row->sellerid.'|'.$prodid;?>"><button type="button" class="btn btn-warning">Reject</button></a></td>
      </tr>      
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

