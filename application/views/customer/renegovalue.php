
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
								<th>Buyer Id</th>
								<th>Supplier Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th style="color:orange;">Supplier Base Price</th>
			<th style="color:orange;">Supplier Base Quantity</th>
			<th style="color:green;">Your Negotiated Quantity</th>
			<th style="color:green;">Your Negotiated Price</th>
			<th style="color:orange;">Seller Re-Negotiated price</th>
			<th style="color:green;">Your Re-Negotiated price</th>
			<th style="color:green;">Your Re-Negotiated Quantity</th>
			<th>View Quotation</th>
			<th>Upload Purchase Order</th>


									</tr>
								</thead>
								<tbody>
							
										<?php $k = 0; ?>
										<?php foreach ($sqldata as $row) { ?>
											<tr>
											<form action="<?php echo base_url(); ?>Customer_repurchase_order" method="POST"  enctype="multipart/form-data">
												<?php $proid = str_ireplace('/', '-', $row->productid); ?>

											<?php $prodid = str_ireplace('/', '-', $row->productid); ?>
												
	 
	 <td><input type="hidden" name="sellerid" value="<?php echo $row->sellerid;?>">
							<?php echo $row->sellerid;?>
							<input type="hidden" name="cust_id" value="<?php echo $row->id;?>"></td>

	<td><input type="hidden" name="buyerid" value="<?php echo $row->buyerid;?>">
							<?php echo $row->buyerid;?></td>
							<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>">
							<?php echo $row->productname;?></td>
								<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>">
							<?php echo $row->productid;?></td>
							<td><input type="hidden" name="category" value="<?php echo $row->category;?>">
							<?php echo $row->category;?></td>
	<td><input type="hidden" name="price" value="<?php echo $row->price; ?>">
													<?php echo $row->price . "/";
													echo $row->punits; ?>
		          <input type="hidden" name="punits" value="<?php echo $row->punits; ?>">
												</td>
													<td><input type="hidden" name="quantity" value="<?php echo $row->quantity; ?>">
													<?php echo $row->quantity . "";
													echo $row->units; ?>
		          <input type="hidden" name="units" value="<?php echo $row->units; ?>">
												</td>
							
						
			<td><input type="hidden" name="bquantity" value="<?php echo $row->bquantity; ?>">
													<?php echo $row->bquantity . "";
													echo $row->bunits; ?>
		          <input type="hidden" name="bunits" value="<?php echo $row->bunits; ?>">
												</td>
<td><input type="hidden" name="bprice" value="<?php echo $row->bprice; ?>">
													<?php echo $row->bprice . "/";
													echo $row->bsupplyability; ?>
													<input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability; ?>">
												</td>

	<td><input type="hidden" name="selprice" value="<?php echo $row->selprice; ?>">
													<?php echo $row->selprice . "/";
													echo $row->sunits; ?>
													<input type="hidden" name="sunits" value="<?php echo $row->sunits; ?>">
												</td>
			<td><input type="hidden" name="brenegoprice" value="<?php echo $row->brenegoprice; ?>">
													<?php echo $row->brenegoprice . "/";
													echo $row->brenegounit; ?>
													<input type="hidden" name="brenegounit" value="<?php echo $row->brenegounit; ?>">
												</td>
		<td><input type="hidden" name="brenegoquantity" value="<?php echo $row->brenegoquantity; ?>">
													<?php echo $row->brenegoquantity . "/";
													echo $row->brenegoquantityunit; ?>
													<input type="hidden" name="brenegoquantityunit" value="<?php echo $row->brenegoquantityunit; ?>">
									</td>
										<td> <a href="<?php echo base_url().'Customer_renegovaluequotation/auc_no/'.urldecode($row->id)."/".urldecode($row->buyerid)."/".urldecode($row->sellerid)."/".urldecode($proid);?>" target="_blank">
				<i class="fa fa-download" aria-hidden="true" ></i></a></td>
					<td>

													<input class="form-group w-auto" multiple="multiple" type="file" id="upload_dd" name="upload_dd[]">


								<input type="submit" onclick="return upload_renegovalue()" id="" class="btn btn-info " name="submit" value="Upload">



												</td>


     

											</form>
											
										<?php $k++;
										} ?>
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
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<script>
  
function upload_renegovalue(){

	var upload_dd = document.getElementById("upload_dd").value;
	

if(upload_dd == ''){
swal("Alert!","Upload Purchase Order,cannot be empty!","error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {upload_dd:upload_dd
			},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }

}
  </script>
      