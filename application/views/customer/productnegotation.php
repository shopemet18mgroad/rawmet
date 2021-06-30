<head>
 <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 </head>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
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
	        <th>Image</th>
			<th>Supplier Id</th>
			<th>Buyer Id</th>
			<th>Product Name</th>
			<th>Category</th>
			<th style="color:orange">Supplier Base Price</th>
			<th style="color:orange">Supplier Quantity Price</th>
			<th>Location</th>
			<th style="color:pink">Buyer Quantity</th>
			<th style="color:pink">Buyer Price</th>
			
			<th> Negotiate</th>
		
			
      </tr>
    </thead>
    <tbody>
	       <?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
								<td><?php echo $count;?></td>
				<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="100%" height="55px"></td>
			<td data-label="Supplier Id"><?php echo $row->sellerid;?></td>
			<td data-label="Buyer Id"><?php echo $row->buyerid;?></td>
			<td data-label="Product Name"><?php echo $row->productname;?></td>
			<td data-label="Category"><?php echo $row->category;?></td>
		
			<td data-label="Supplier Base Price"><?php echo $row->price."/"; echo $row->punits;?></td>
			<td data-label="Supplier Quantity Price"><?php echo $row->quantity.""; echo $row->units;?></td>
			<td data-label="Location"><?php echo $row->pcities;?></td>
			<td data-label="Buyer Quantity"><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td data-label="Buyer Price"><?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
		
			<td>
			
			
			
			
			<a href="<?php  echo base_url()."Customer_renegotiation/index/".$row->sellerpostproduct_id."/".urldecode($row->buyerid);?>"><u>Negotiate</u></a>
	
			
			
				</td>	
		
		
		

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

