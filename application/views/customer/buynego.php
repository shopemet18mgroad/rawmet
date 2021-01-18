
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
			<th>Supplier Name</th>
			<th>Buyer Name</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th>Company Name</th>
			<th>Supplier Price</th>
			<th>Location</th>
			<th>Buyer Quantity</th>
			<th>Buyer Price</th>
			<th>Seller price</th>
			<th>View Quotation</th>
			<th>Send Purchase Order</th>
			
      </tr>
    </thead>
    <tbody>
	<form action="<?php echo base_url();?>Customer_purchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
	<?php $k=0;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
		
			
			<td><input type="hidden" name="vname" value="<?php echo $row->vname;?>">
							<?php echo $row->vname;?></td>
			<td><input type="hidden" name="busername" value="<?php echo $row->busername;?>">
							<?php echo $row->busername;?></td>
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>">
								<?php echo $row->productname;?></td>
			<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>">
								<?php echo $row->productid;?></td>
			<td><input type="hidden" name="category" value="<?php echo $row->category;?>">
								<?php echo $row->category;?></td>
			<td><input type="hidden" name="companyname" value="<?php echo $row->companyname;?>">
							<?php echo $row->companyname;?></td>
			<td><input type="hidden" name="price" value="<?php echo $row->price;?>">
							<?php echo $row->price;?></td>
			<td><input type="hidden" name="pcities" value="<?php echo $row->pcities;?>">
							<?php echo $row->pcities;?></td>
			<td><input type="hidden" name="bquantity" value="<?php echo $row->bquantity;?>">
				<input type="hidden" name="bunits" value="<?php echo $row->bunits;?>">
						<?php echo $row->bquantity."/"; echo $row->bunits;?></td>
			<td><input type="hidden" name="bprice" value="<?php echo $row->bprice;?>">
				<input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>">

			         <?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
			<td><input type="hidden" name="selprice" value="<?php echo $row->selprice;?>">
				<input type="hidden" name="sunits" value="<?php echo $row->sunits;?>">
			<?php echo $row->selprice."/"; echo $row->sunits;?></td>
			
			<td><a href="<?php echo base_url().'web_files/uploads/'.$proid[0]?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
			<td>
			<a href="<?php echo base_url().'Customer_quotationpur/auc_no/'.urldecode($row->vname)."/".urldecode($row->busername);?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true"></i></a></td>
				<!--<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
				<!--<input type="hidden" name="pro[]" value="<?php echo $proid[0];?>">-->
				<!--<input type="submit" id="" class="btn btn-primary " name="submit" value="Upload">-->
				
				<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
					
			
					<input type="submit" id="" class="btn btn-primary " name="submit" value="Upload">
					
			
				
		 </td>
		<?php $k++;}?>
      </tr>      
      
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
