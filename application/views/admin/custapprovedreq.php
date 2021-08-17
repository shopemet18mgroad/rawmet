 
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approved Requirements</h1>
           		               				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			  <form action="<?php echo base_url();?>Customer_buypurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
			  
			<center> <h5 style="color:#f36d5e;font-size:12px"><b> First Negotiated approval by Buyer</h5></b></center>
			  
			  
			  
			  
                <table class="table table-striped table-bordered"  width="100%" cellspacing="0">
    		    <thead style="background:#91d4df; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">First Negotiated approval by Buyer</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>
 <tbody style="font-size:13px" >
	
      <?php $count = 1;?>      	
	<?php $k=0;?>
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>

					<td data-label="Sl.No"><?php echo $count;?></td>
		<td data-label="First Negotiated approval by Buyer">	<b>Seller Id</b><?php echo $row->vusername;?>&nbsp;
		<b>Buyer Company Name</b><?php echo $row->bcompanyname;?>&nbsp;
			<b>Category</b><?php echo $row->category;?>&nbsp;
			<b>Buyer Product Name</b><?php echo $row->productname;?>&nbsp;
		<b>Buyer Product Id</b>	<?php echo $row->productid;?>&nbsp;
		<b>Quantity</b><?php echo $row->quantity.""; echo $row->units;?>&nbsp;
		<b>Buyer Price</b><?php echo $row->price."/"; echo $row->priceperkg;?>&nbsp;<br>
		<b>Seller Price</b><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?>&nbsp;
			<td data-label="PO"> <a href="<?php echo base_url().'Vendor_quotation_seller/auc_no/'.$row->id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
			

		
       <?php $count++;?> 

</tr>   
      <?php $k++;}?>
    </tbody>
	</form>
  </table>
  
  <center> <h5 style="color:#2babc5; font-size:12px"><b>First Negotiated approval by Seller</h5></b></center>
<table class="table table-striped table-bordered" width="100%" cellspacing="0">
		    <thead style="background:#f36d5e; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">First Negotiated approval by Seller</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>
  <tbody style="font-size:13px" >
     <?php $count=1;?> 
      <?php $k=0;?>
	   <?php foreach($sqldata2 as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				
				<td data-label="SL.No"><?php echo $count;?></td>
		<td data-label="First Negotiated approval by Seller"><b>Seller Id</b><?php echo $row->vusername;?>&nbsp;
		<b>Buyer Company Name</b><?php echo $row->bcompanyname;?>&nbsp;
			<b>Category</b><?php echo $row->category;?>&nbsp;
			<b>Buyer Product Name</b><?php echo $row->productname;?>&nbsp;
		<b>Buyer Product Id</b>	<?php echo $row->productid;?>&nbsp;
		<b>Quantity</b><?php echo $row->quantity.""; echo $row->units;?>&nbsp;
		<b>Buyer Price</b><?php echo $row->price."/"; echo $row->priceperkg;?>&nbsp;<br>
		<b>Seller Price</b><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?>&nbsp;
		<b>Buyer Negotiated Price</b><?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?>&nbsp;
									
	<td data-label="PO">
		<a href="<?php echo base_url().'Vendor_quotation10/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
			
			<?php $count++;?>
		
 
</tr>   
      <?php $k++;}?>
    </tbody>

  </table>
  
  
  <center> <h5 style="color:#f6b48d; font-size:12px;"><b>Second Negotiated approval by Buyer</h5></b></center>
  
               <table class="table table-striped table-bordered" cellspacing="0">
			    <thead style="background:#91d4df; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">Second Negotiated approval by Buyer</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>
		
				
				<tbody style="font-size:13px" >
				<?php $count=1;?>
	<?php $k=0;?>
	 <?php foreach($sqldata3 as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
				<td data-label="Sl.No"><?php echo $count;?></td>
		<td data-label="Second Negotiated approval by Buyer">	<b>Seller Id</b><?php echo $row->vusername;?>&nbsp;
		<b>Buyer Company Name</b><?php echo $row->bcompanyname;?>&nbsp;
			<b>Category</b><?php echo $row->category;?>&nbsp;
			<b>Buyer Product Name</b><?php echo $row->productname;?>&nbsp;
		<b>Buyer Product Id</b>	<?php echo $row->productid;?>&nbsp;
		<b>Quantity</b><?php echo $row->quantity.""; echo $row->units;?>&nbsp;
		<b>Buyer Price</b><?php echo $row->price."/"; echo $row->priceperkg;?>&nbsp;<br>
		<b>Seller Price</b><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?>&nbsp;
		<b>Buyer Negotiated Price</b><?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?>&nbsp;
		<b>Seller's Re-Negotiated Price</b><?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?></td>
			
		 <td data-label="PO">
		<a href="<?php echo base_url().'Vendor_quotation11/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
				<?php $count++;?>		
			
			
      </tr>      
    <?php $k++;}?>	
    </tbody>
	</form>			
				
	</table>
 <center> <h5 style="color:#2babc5; font-size:12px;"><b>Second Negotiated approval by Seller</h5></b></center>
 <table class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead style="background:#f36d5e; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">Second Negotiated approval by Seller</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>			
				
				<tbody style="font-size:13px" >
				<?php $count=1;?>
	<?php $k=0;?>
	 <?php foreach($sqldata4 as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
			<td data-label="Sl.No"><?php echo $count;?></td>
			<td data-label="Second Negotiated approval by Seller"><b>Seller ID:</b><?php echo $row->vusername;?>&nbsp;
	<b>Buyer Company Name:</b>	<?php echo $row->bcompanyname;?>&nbsp;
			<b>Category:</b><?php echo $row->category;?><br>&nbsp;
			<b>Buyer Product Name:</b><?php echo $row->productname;?>
			&nbsp; <b>Buyer Product Id:</b><?php echo $row->productid;?>&nbsp;<br>
		<b>Quantity:</b><?php echo $row->quantity.""; echo $row->units;?>&nbsp;
		<b>Seller Price:</b><?php echo $row->price."/"; echo $row->priceperkg;?>&nbsp;
		<b>Buyer Negotiated Price:</b><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?>&nbsp;
		Buyer Negotiated Price<?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?>&nbsp;
		<b>Seller's Re-Negotiated Price</b><?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?>
			&nbsp;
			<b>Buyer's Re-Negotiated Price</b><?php echo $row->buyer_final_price."/"; echo $row->buyer_final_units;?></td>
			
	<td data-label="PO"> 
		<a href="<?php echo base_url().'Vendor_quotation12/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
		<?php $count++;?>
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