 <head>
 <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 </head>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ongoing Negotiation</h1>
            
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
	        <th>Image</th>
			<th>Buyer Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th>Location</th>
			<th>Supplier base Price</th>
			<th>Supply Ability</th>
			<th style="color:orange;">Buyer Price</th>
			<th style="color:orange;">Buyer Quantity</th>
			<th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid =str_ireplace('/','-',$row->productid);
				?>
			<td data-label="Sl.No."><?php echo $count;?></td>  
			<td data-label="Image"><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="auto" height="55px"></td>
			<td data-label="Buyer Id"><?php echo $row->buyerid;?></td>
			<td data-label="Product Name"><?php echo $row->productname;?></td>
			<td data-label="Product Id"><?php echo $row->productid;?></td>
			<td data-label="Category"><?php echo $row->category;?></td>
			<td data-label="Location"><?php echo $row->pcities;?></td>
			<td data-label="Supplier base Price"><?php echo $row->price."/"; echo $row->punits;?></td>
			<td data-label="Supply Ability"><?php echo $row->quantity." "; echo $row->units;?></td>
		    <td data-label="Buyer Price"><?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
			<td data-label="Buyer Quantity"><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td data-label="Action">	
	
		<!--<a href="<?php // echo base_url()."Vendor_custquoteapproval/approve_quotes/".$proid."/".urldecode($row->buyerid);?>"><button type="button" class="btn btn-success btn-sm" onclick="validate_selnego()">Approve </button></a>-->
					
		<a href="<?php echo base_url()."vendor_custquoteapproval/index/".urldecode($row->sellerpostproduct_id)."/".urldecode($row->buyerid);?>"  class="btn btn-secondary text-white delete-confirm">Negotiate</a>
		
		<!--<a href="<?php//  echo base_url()."Vendor_custquoteapproval/reject/".$proid."/".urldecode($row->buyerid);?>"><button type="button" class="btn btn-danger btn-sm">Reject</button></a></td>-->
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

