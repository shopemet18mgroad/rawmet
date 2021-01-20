
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pending Quotes</h1>
            
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
			<th>Company Name</th>
			<th>Category</th>
			<th>Product Name</th>
			<th>Product Id</th>
			
			<th>Buyer Quantity</th>
			<th>Buyer Price</th>
			<th>Suplier Price</th>
			
			<th> View Quotation</th>
			<th> Action</th>
      </tr>
    </thead>
    <tbody>
       	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
			<td><?php echo $row->vusername;?></td>
			<td><?php echo $row->bcompanyname;?></td>
			<td><?php echo $row->category;?></td>
			<td><?php echo $row->productname;?></td>
			
			<td><?php echo $row->productid;?></td>
		
			<td><?php echo $row->quantity.""; echo $row->units;?></td>
			<td><?php echo $row->price."/"; echo $row->priceperkg;?></td>
			<td><?php echo$row->sellerprice."/"; echo $row->bsupplyability;?></td>
			
	
			
			
		<td><a href="" data-toggle="modal" data-target="#myModal">
					<button type="submit" class="btn btn-info btn-sm w-75">
					<i class="fa fa-eye" aria-hidden="true"></i>
					</button>
					</a>
				
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-lg">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">

						<img src="<?php $im = unserialize($row->uploadporder); 
						if($im){
						echo base_url().'web_files/uploads/'.$im[0];?>" class="img-fluid" alt="<?php echo $im[0];}?>">

						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
					</td>
					
		<td><a href="<?php  echo base_url()."admin_reqpurchaseorder/approve_product/".$proid."/".urldecode($row->vusername);?>"><button type="button" class="btn btn-success">Approve</button></a></td>
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

