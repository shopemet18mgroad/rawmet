
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller Quote Negotiated Value
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
			<th>Supplier Id</th>
			<th>Buyer Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			
			<th>Supplier Base Price</th>
			<th>Supplier Base Quantity </th>
			
			<th>Buyer 1st Quantity</th>
			<th>Buyer 1st price</th>
			<th>Seller Re-Negotiated price</th>
			<th>View Quotation</th>
			
	
			
      </tr>
    </thead>
    <tbody>
	<form action="<?php echo base_url();?>Customer_purchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
	<?php $k=0;?>
	  <?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
 
		    <td><?php echo $count;?></td> 
			<td><input type="hidden" name="sellerid" value="<?php echo $row->sellerid;?>">
							<?php echo $row->sellerid;?></td>
								<td><input type="hidden" name="buyerid" value="<?php echo $row->buyerid;?>">
							<?php echo $row->buyerid;?></td>
		
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>">
								<?php echo $row->productname;?></td>
			<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>">
								<?php echo $row->productid;?></td>
			<td><input type="hidden" name="category" value="<?php echo $row->category;?>">
								<?php echo $row->category;?></td>
			
		<td><input type="hidden" name="quantity" value="<?php echo $row->quantity;?>">
		     <?php echo $row->quantity."" ;echo $row->units;?>
			 <input type="hidden" name="units" value="<?php echo $row->units;?>">
		</td>
		
		<td><input type="hidden" name="price" value="<?php echo $row->price;?>">
		     <?php echo $row->price."/" ;echo $row->punits;?>
			 <input type="hidden" name="punits" value="<?php echo $row->punits;?>">
		</td>
		
		
												
		
		
			
							
		<td><input type="hidden" name="bquantity" value="<?php echo $row->bquantity;?>">
		     <?php echo $row->bquantity."" ;echo $row->bunits;?>
			 <input type="hidden" name="bunits" value="<?php echo $row->bunits;?>">
		
	</td>
	
		<td><input type="hidden" name="bprice" value="<?php echo $row->bprice;?>">
		     <?php echo $row->bprice."/" ;echo $row->bsupplyability;?>
			 <input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>">
		</td>
			<td><input type="hidden" name="selprice" value="<?php echo $row->selprice; ?>">
													<?php echo $row->selprice . "/";
													echo $row->sunits; ?>
		<input type="hidden" name="sunits" value="<?php echo $row->sunits; ?>">
								</td>


				

							

			
		
		 
		<td> <a href="<?php echo base_url().'Vendor_quotationpur/auc_no/'.($row->id)."/".urldecode($row->sellerid)."/".urldecode($row->buyerid);?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
					<?php $count++;?>
			
			<!--<td>
				
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
					
			
					<input type="submit" id="" class="btn btn-info " name="submit" value="Upload purchase order">
					
			
				
		 </td>-->
		 
				
		 </tr> 
		<?php $k++;}?>
            
      
    </tbody>
  </table>
  </form>
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
<script>
			/*function Addtocart() {
			  //document.getElementById("demo").style.color = "red";
			$(document).ready(function(){
			 
			 $('.add_cart').click(function(){
			  var productid = $(this).data("productid");
			  var busername = $(this).data("busername");
			  var sdescription = $(this).data("vname");
			 
			   $.ajax({
				url:"<?php echo base_url(); ?>Customer_buynego/Addtocart",
				method:"POST",
				data:{productid:productid, busername:busername, vname:vname},
				success:function(data)
				{
				 alert("Order is placed ");
				
				}
			   });
			  }*/

			</script>
