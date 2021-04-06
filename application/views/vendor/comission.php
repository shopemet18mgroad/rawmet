 <head>
 <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 </head>
 <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Product List</h1>
           
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
			<th>Sl.No.</th>
			<th>Product Id</th>
		    <th>Seller Id</th>
			<th>Product Name</th>
			<th style="color:orange">Commission to Rawmet</th>
			<th>Image</th>
			<th>Payable Status</th>
			<th>Options</th>
	</tr>
    </thead>
    <tbody>
	
    
       <?php  $count = 1;?>
	   <?php foreach($sqldata as $row){?>
      <tr>
	 <?php $proid = urldecode(str_ireplace('/','-',$row->productid));?>
   
			<td data-label="Sl.No."><?php echo $count;?></td> 		
			<td data-label="Product Id"><?php echo $row->sellerid;?></td> 				
			<td data-label="Seller Id"><?php echo $row->productid;?></td> 
			<td data-label="Product Name"><?php echo $row->productname;?></td> 
			<td data-label="Commission to Rawmet"><?php  echo $row->payable."%" ;?></td>
			<td data-label="Image"><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100%" height="55px"></td>
			<td style="color:green;" data-label="Payable Status"><b><?php  if($row->comapprove == 0) {echo 'Pending';}else if($row->comapprove == 2) {echo 'Rejected';}else if($row->comapprove == 1) {echo 'Approved';}?></b></td>
		
			<td data-label="Options"> <a href="<?php  echo base_url()."Vendor_comission/comission_approve/".$proid."/".urldecode($row->sellerid);?>"><button type="button" class="btn btn-success btn-sm">Approve</button></a>
		
			<a href="<?php  echo base_url()."Vendor_comission/comission_reject/".$proid."/".urldecode($row->sellerid);?>"><button type="button" class="btn btn-info btn-sm">Reject</button></a>
		
			<a href="<?php  echo base_url()."Vendor_comission/delete_comission/".$proid."/".urldecode($row->sellerid);?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td>

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