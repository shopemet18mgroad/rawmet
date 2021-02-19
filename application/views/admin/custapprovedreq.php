  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Approved Requirements</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			  <form action="<?php echo base_url();?>Customer_buypurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  <th>Supplier name</th>
	  <th>Buyer Name</th>
	  
      <th>companyname</th>
	   <th>Category</th>
		<th>productname</th>
		<th>product Id</th>
		<th>Description</th>
        <th>buyer Quantity</th>
	    <th> Buyer Price</th>
		<th>Seller Price</th>
		<th>View Quotation</th>
      </tr>
    </thead>
    <tbody>
	
      
      	
	<?php $k=0;?>
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>

	
			<td><?php echo $row->vusername;?></td>
			<td><?php echo $row->bname;?></td>
			<td><?php echo $row->bcompanyname;?></td>
			<td><?php echo $row->category;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->description;?></td>
			<td><?php echo $row->quantity.""; echo $row->units;?></td>
			<td><?php echo $row->price."/" ;echo $row->priceperkg;?></td>
			<td><?php echo $row->sellerprice."/" ;echo $row->bsupplyability;?></td>
			<td> <a href="<?php echo base_url().'Vendor_quotation_seller/auc_no/'.$row->id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
			

		
        

</tr>   
      <?php $k++;}?>
    </tbody>
	</form>
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