 <head>
 <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 </head>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ongoing Requirements</h1>
            
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
			<th>Product Id</th>
			<th>Buyer ID</th>
			<th>Product Name</th>
			<th>Description</th>
			<th>Quantity</th>	          
			<th>Required Date</th>
			<th>Last Date</th>
			<th>Images</th>
			<th>Action</th>
      </tr>
    </thead>
    <tbody>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);?>
	 
			<td data-label="Product Id"><?php echo $row->productid;?></td>
			<td data-label="Buyer ID"><?php echo $row->buyerid;?></td>
			<td data-label="Product Name"><?php echo $row->productname;?></td>
			<td data-label="Description"><?php echo $row->description;?></td>
			<td data-label="Quantity"><?php echo $row->quantity."";echo $row->units;?></td>
			<td data-label="Required Date"><?php echo date('d-m-Y H:i',strtotime($row->requireddate));?></td>
			<td data-label="Last Date"><?php echo date('d-m-Y H:i',strtotime($row->lastdate));?></td>
			
			<td data-label="Images"><?php $img = unserialize($row->uploadimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="auto" height="55px"></td>
			<td data-label="Action"><!--<a href="<?php // echo base_url()."Vendor_managebuyreq/approve_requirement/".$proid."/".urldecode($row->bname);?>"><button type="button" class="btn btn-success">Approve</button></a>-->
				
			<a href="<?php echo base_url()."vendor_managebuy/index/".$proid."/".urldecode($row->buyerid);?>"  class="btn btn-secondary btn-sm text-white delete-confirm">Send Offer</a>

			<a href="<?php echo base_url()."vendor_managebuyreq/product_reject/".$proid;?>"  class="btn btn-danger btn-sm text-white delete-confirm">Reject</a></td>	
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

