
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customer Quotes</h1>
            
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
			<th>Supplier Name</th>
			<th>Buyer Name</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th>Company Name</th>
			<th>Supplier Price</th>
			<th>Available Stocks</th>
			<th>Location</th>
			<th>Buyer Quantity</th>
			<th>Buyer Price</th>
			<th>Action</th>
      </tr>
    </thead>
    <tbody>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
			<td><?php echo $row->vname;?></td>
			<td><?php echo $row->busername;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
			<td><?php echo $row->companyname;?></td>
			<td><?php echo $row->price;?></td>
			<td><?php echo $row->supplyability;?></td>
			<td><?php echo $row->pcities;?></td>
			<td><?php echo $row->bquantity."/"; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
			
			<td><button type="submit" name="submit" id="<?php echo $proid;?>" onclick="vendor_quotesapproval(this.id)" class="btn btn-info btn-sm">Approve</button>
			
		<center><a href="<?php echo base_url()."vendor_sellerquotenego/index/".$proid."/".urlencode($row->vname);?>"  class="btn btn-warning btn-sm text-white delete-confirm"><i class="fa fa-edit fa-sm"></i></a></center></td>
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

