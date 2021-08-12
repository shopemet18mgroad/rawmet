  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approved Requirements</h1>
           
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
	  <th class="col-12">First Negotiated approval by Buyer </th>
	  
      </tr>
    </thead>
    <tbody>
	
      <?php $count = 1;?>      	
	<?php $k=0;?>
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>

			<td><?php echo $count;?></td>
			<td><?php echo $row->sellerid;?></td>
			<td><?php echo $row->buyerid;?></td>
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
			

		
       <?php $count++;?> 

</tr>   
      <?php $k++;}?>
    </tbody>
	</form>
  </table>
<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr><th class="col-11">First Negotiated approval by Seller</th>
	
                    
             
		
      </tr>
    </thead>
    <tbody>
	
     <?php $count=1;?> 
      <?php $k=0;?>
	   <?php foreach($sqldata2 as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				
				 <td><?php echo $count;?>|
	  <?php echo $row->vusername;?>
		
		<?php echo $row->bcompanyname;?>|<?php  echo $row->category;?>
		
		<?php echo $row->productname?>|
		 
		<?php echo $row->productid?>|
         
		 <?php echo $row->description?>|
		
		<?php echo $row->quantity." ";echo $row->units;?>|
	
		<?php echo $row->price."/";echo $row->priceperkg;?>|
		
		<?php echo $row->sellerprice."/";echo $row->bsupplyability;?>|
										
		<?php echo $row->buyer_nego_price."/";echo $row->buyer_nego_units;?>|
									
	<td>
		<a href="<?php echo base_url().'Vendor_quotation10/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
			
			<?php $count++;?>
		
 
</tr>   
      <?php $k++;}?>
    </tbody>

  </table>
               <table class="table table-striped table-bordered" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	   <th class="col-11">Second Negotiated approval by Buyer</th>
		
             <th class="col-1">PO</th>         
             
		
      </tr>
    </thead>			
				
				<tbody>
				<?php $count=1;?>
	<?php $k=0;?>
	 <?php foreach($sqldata3 as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
				<td><?php echo $count;?>|
			<?php echo $row->vusername;?>|
		<?php echo $row->bcompanyname;?>|
			<?php echo $row->category;?>|
			<?php echo $row->productname;?><?php echo $row->productid;?>|
		<?php echo $row->quantity."/"; echo $row->units;?>|
		<?php echo $row->price.""; echo $row->priceperkg;?>|
		<?php echo $row->sellerprice."/"; echo $row->bsupplyability;?>|
		<?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?>|
		<?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?></td>
			
		 <td>
		<a href="<?php echo base_url().'Vendor_quotation11/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
				<?php $count++;?>		
			
			
      </tr>      
    <?php $k++;}?>	
    </tbody>
	</form>			
				
	</table>

 <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr><th class="col-11">Second Negotiated approval by Seller</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>			
				
				<tbody>
				<?php $count=1;?>
	<?php $k=0;?>
	 <?php foreach($sqldata4 as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
			<td><?php echo $count;?>|
			<?php echo $row->vusername;?>|
		<?php echo $row->bcompanyname;?>|
			<?php echo $row->category;?>|
			<?php echo $row->productname;?><?php echo $row->productid;?>|
		<?php echo $row->quantity."/"; echo $row->units;?>|
		<?php echo $row->price.""; echo $row->priceperkg;?>|
		<?php echo $row->sellerprice."/"; echo $row->bsupplyability;?>|
		<?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?>|
		<?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?>|
			
			<?php echo $row->buyer_final_price."/"; echo $row->buyer_final_units;?></td>
			
	<td> 
		<a href="<?php echo base_url().'Vendor_quotation12/auc_no/'.$row->seller_mbuyreq_id;?>" target="_blank">.
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