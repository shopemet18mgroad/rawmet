
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approved Quotes</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm w-auto small" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	 
        <tr>
			<th>Supplier Name</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th>Company Name</th>
			<th>Supplier Price</th>
			<th>Available Stocks</th>
			<th>Location</th>
			<th>Buyer Quantity</th>
			<th>Buyer Price</th>
			<th>View Quotation</th>
			<th>Upload Purchase Order</th>
			<th>View Purchase Order</th>
      </tr>
    </thead>
    <tbody>
	<form action="<?php echo base_url();?>customer_approvedquotes_upload_porder" method="POST" id="upload-form" enctype="multipart/form-data">
	<?php $k=0;?>
     	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
	  	$aucfl = unserialize($row->uploadporder);
				?>
			<td><?php echo $row->vname;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
			<td><?php echo $row->companyname;?></td>
			<td><?php echo $row->price;?></td>
			<td><?php echo $row->supplyability;?></td>
			<td><?php echo $row->pcities;?></td>
			<td><?php echo $row->bquantity."/"; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
		<td>
			
				
				<a href="<?php echo base_url().'Customer_quotation/auc_no/'.$proid.'/'.urldecode($row->busername);?>" target="_blank"><i class="fa fa-download"></i></a>
			
					</td>
					
			<td>
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="uploadporder[]">
				<input type="hidden" name="porder[]" value="<?php echo $row->vname.'|'.$proid .'|'.$row->category;?>"> 
				<input type="submit" id="" class="btn btn-primary " name="submit" value="Upload">
			</td>
		
		<td>
				<a href="<?php echo base_url().'web_files/uploads/'.$proid[0]?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a>
			
					
					</td>
      </tr>      
     <?php $k++;}?> 	    
     
    </tbody>
  </table>
   </form>
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

