


------
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

			   	<th>Supplier Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			
			  <th style ="color:orange";>Supplier Base Quantity</th>
			<th style ="color:orange";>Supplier Base Price</th>
			
		    <th style ="color:pink";>Buyer Quantity</th>
			<th style ="color:pink";>Buyer Price</th>
			
			<th style ="color:orange";>Supplier Price</th>
			
			<th style ="color:pink";>Buyer Re-negotiated Quantity</th>
			<th style ="color:pink";>Buyer Re-negotiated Price</th>
			<th style ="color:orange";>Supplier Re-negotiated Price</th>
			<th>View Purchase Order</th>
	
	
      

     


</tr>
    </thead>
    <tbody>
	      <?php  $count = 1;?>
       	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
		 <td><?php echo $count;?></td>  
			<td><?php echo $row->sellerid;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
		    <td><?php echo $row->quantity.""; echo $row->units;?></td>
			<td><?php echo $row->price."/"; echo $row->punits;?></td>
			
			<td><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bunits;?></td>
			
		
			<td style="text-align:center;"><?php if($row->selprice == null){echo " - ";}
			else{echo $row->selprice."/"; echo $row->sunits;}?></td>
			<td style="text-align:center;"><?php if($row->brenegoquantity == null){echo " - ";}
			else{echo $row->brenegoquantity."/"; echo $row->brenegoquantityunit;}?></td>
			
				<td style="text-align:center;"><?php if($row->brenegoprice == null){echo " - ";}
			else{echo $row->brenegoprice."/"; echo $row->brenegounit;}?></td>
			
				<td style="text-align:center;"><?php if($row->sellrenegoprice == null){echo " - ";}
			else{echo $row->sellrenegoprice."/"; echo $row->sellrenegounits;}?></td>
			
  <td>
      <?php $aucfl = unserialize($row->uploadporder);?>
    <?php if(isset($aucfl[0])){	?>
    <a href="<?php echo base_url().'web_files/uploads/'. $aucfl[0];?>" target="_blank">
    <?php echo '<i class="fa fa-download"></i>' ; ?>

	 <?php }?>	
</a>
</td>	
<td> <a href="<?php echo base_url() .'Vendor_uploadedproduct/price_update/'.$proid."/". urldecode($row->sellerid) ; ?>" target="_blank" data-target="#new_userlogin-<?php echo $count; ?>"  data-toggle="modal" >update</a>
														</td>








		<div class="modal fade" id="new_userlogin-<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update New Price,Quantity and Live stock</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		<form action="<?php echo base_url();?>Vendor_uploadedproduct/price_update/" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
        
		
			  	<div class="col-sm-8">
		
			
					<label for="Pname">	Supplier Base Quantity 
		||Supplier Base Price</th> </label>
			
			
       <?php echo $row->quantity.""; echo $row->units;?>||
		<?php echo $row->price."/"; echo $row->punits;?>
			
		
		<label for="Pname">	Buyer Quantity 
		||Buyer Price</th> </label>
		
		
		
		
		
		
			<?php echo $row->bquantity.""; echo $row->bunits;?>
		<?php echo $row->bprice."/"; echo $row->bunits;?>
       </div>
	   <th>Sl.No.</th>

			   	<th>Supplier Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			
			  <th style ="color:orange";>Supplier Base Quantity</th>
			<th style ="color:orange";>Supplier Base Price</th>
			
		    <th style ="color:pink";>Buyer Quantity</th>
			<th style ="color:pink";>Buyer Price</th>
			
			<th style ="color:orange";>Supplier Price</th>
			
			<th style ="color:pink";>Buyer Re-negotiated Quantity</th>
			<th style ="color:pink";>Buyer Re-negotiated Price</th>
			<th style ="color:orange";>Supplier Re-negotiated Price</th>
			<th>View Purchase Order</th>
	   
	   
	   
	   
	   	 <div class="form-inline">
				<div class="col-sm-4  mr-3">
				<label for="price">Supplier Price:</label>
					 <td style="text-align:center;"><?php if($row->selprice == null){echo " - ";}
			else{echo $row->selprice."/"; echo $row->sunits;}?></td>
                    
                </div>
				<div class="col-sm-4  offset-sm-3">	
					<label for="quantity">Buyer Re-negotiated Quantity||:</label>
				
			   <td style="text-align:center;"><?php if($row->brenegoquantity == null){echo " - ";}
			else{echo $row->brenegoquantity."/"; echo $row->brenegoquantityunit;}?></td>
			</div>
	</div>
	
	   
	   
	
	 <div class="form-inline">
				<div class="col-sm-4  mr-3">
					 <label for="price">Buyer Re-negotiated Price:</label>
                    <td style="text-align:center;"><?php if($row->brenegoprice == null){echo " - ";}
			else{echo $row->brenegoprice."/"; echo $row->brenegounit;}?></td>
                    
                </div>
				<div class="col-sm-4  offset-sm-3">	
				
			   	<label for="quantity">>Supplier Re-negotiated Price:</label>/
			   	<td style="text-align:center;"><?php if($row->sellrenegoprice == null){echo " - ";}
			else{echo $row->sellrenegoprice."/"; echo $row->sellrenegounits;}?></td>
			</div>
	</div>
	
	
	
	
	
	

	<br>
	
	
	<div class="modal-footer">
        <button type="submit" name "update" class="btn btn-success">Submit</button>
		  </div>
	
	

 
	</form>        
        </div>
        </div>



        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  </div>
        </div>
      </div>
	  </div>
	   </div>

				
 <?php $count++;?>
<?php }?>



      </tr>  





































--
      
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


---