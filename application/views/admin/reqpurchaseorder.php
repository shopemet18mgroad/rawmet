
        <!-- End of Topbar -->
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pending Quotes</h1>
                                                                          <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>
			   <script>
function goBack() {
  window.history.back();
}
</script> 
       
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
			<th>Supplier Id</th>
			<th>Buyer Id</th>
			<th>Company Name</th>
			<th>Category</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th style="color:pink;">Buyer Quantity</th>
			<th style="color:pink;">Buyer Price</th>
			<th style="color:orange;">Suplier Price</th>
			<th style="color:pink;">Buyer Re-Negotiated Price</th>
			<th style="color:orange;">Suplier Re-Negotiated Price</th>
			<th> View Purchase Order</th>
			<th>Action</th>
      </tr>
    </thead>
    <tbody>
	    <?php  $count = 1;?>
       	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<td data-label="Sl.No."><?php echo $count;?></td> 
			<td data-label="Supplier Id"><?php echo $row->sellerid;?></td>
			<td data-label="Buyer Id"><?php echo $row->buyerid;?></td>
			<td data-label="Company Name"><?php echo $row->bcompanyname;?></td>
			<td data-label="Category"><?php echo $row->category;?></td>
			<td data-label="Product Name"><?php echo $row->productname;?></td>
			
			<td data-label="Product Id"><?php echo $row->productid;?></td>
		
			<td data-label="Buyer Quantity"><?php echo $row->quantity.""; echo $row->units;?></td>
			<td data-label="Buyer Price"><?php echo $row->price."/"; echo $row->priceperkg;?></td>
		
			<td data-label="Suplier Price"><?php if($row->sellerprice == null){ echo '-';}
			else{
				
			echo $row->sellerprice."/"; echo $row->bsupplyability;}
			?>
			</td>
			<td data-label="Buyer Re-Negotiated Price"><?php if($row->buyer_nego_price == null){ echo '-';}
			else{
				
			echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;}
			?></td>
			<td data-label="Suplier Re-Negotiated Price"><?php if($row->seller_renego_price == null){ echo '-';}
			else{
				
			echo $row->seller_renego_price."/"; echo $row->buyer_nego_units;}
			?></td>
		<td data-label=" View Purchase Order">
 <?php $aucfl = unserialize($row->uploadporder);?>
 <?php if(isset($aucfl[0])){	?>
<a href="<?php echo base_url().'web_files/uploads/'. $aucfl[0];?>" target="_blank">
<?php echo '<i class="fa fa-download"></i>' ; ?>

 
</a></td>

 
<td data-label="Action"><a href="<?php  echo base_url()."Admin_reqpurchaseorder/approve_product/".$proid."/".$row->sellerid."/".$row->buyerid;?>"><button type="button" class="btn btn-success btn-sm">Approve</button></a>
</td>
<?php $count++;?>
<?php }?>	

    

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

