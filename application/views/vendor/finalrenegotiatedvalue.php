
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
						<form action="<?php echo base_url(); ?>Customer_respurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
							<table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
								<thead class="bg-primary text-white">
									<tr>
			<th>Buyer Name</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th>Seller's Base Price</th>
			<th>Seller's Base Quantity</th>
			<th style="color:pink;">Your 1st Negotiated Quantity</th>
			<th style="color:pink;">Your 1st Negotiated Price</th>
			<th style="color:yellow;">Seller 1st Negotiated price</th>
			<th style="color:orange;">Your 2nd Re-Negotiated price</th>
			<th style="color:orange;">Your 2nd Re-Negotiated Quantity</th>
			<th style="color:yellow;">Seller final Re-Negotiated price</th>
			<th>Status</th>


									</tr>
								</thead>
								<tbody>
								<form action="<?php echo base_url(); ?>Customer_repurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
	
										<?php $k = 0; ?>
										<?php foreach ($sqldata as $row) { ?>
											<tr>
												<?php $proid = str_ireplace('/', '-', $row->productid); ?>

												<?php $prodid = str_ireplace('/', '-', $row->productid); ?>

	<td><input type="hidden" name="busername" value="<?php echo $row->busername;?>">
							<?php echo $row->busername;?></td>
							<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>">
							<?php echo $row->productname;?></td>
								<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>">
							<?php echo $row->productid;?></td>
							<td><input type="hidden" name="category" value="<?php echo $row->category;?>">
							<?php echo $row->category;?></td>
						
					<td><input type="hidden" name="price" value="<?php echo $row->price; ?>">
													<?php echo $row->price . "/";
													echo $row->units; ?>
		          <input type="hidden" name="units" value="<?php echo $row->units; ?>">
												</td>
							<td><input type="hidden" name="quantity" value="<?php echo $row->quantity; ?>">
													<?php echo $row->quantity . "/";
													echo $row->units; ?>
		          <input type="hidden" name="units" value="<?php echo $row->units; ?>">
												</td>
			<td><input type="hidden" name="bquantity" value="<?php echo $row->bquantity; ?>">
													<?php echo $row->bquantity . "/";
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
		<td><input type="hidden" name="sellrenegoprice" value="<?php echo $row->sellrenegoprice; ?>">
													<?php echo $row->sellrenegoprice . "/";
													echo $row->sellrenegounits; ?>
													<input type="hidden" name="sellrenegounits" value="<?php echo $row->sellrenegounits; ?>">
													
									</td>
			
									<td> <a href="<?php echo base_url() . 'Customer_quotation5/auc_no/' . urldecode($row->busername) . "/" . urldecode($row->vname) . "/" . urldecode($proid); ?>" target="_blank">



														<i class="fa fa-download" aria-hidden="true"></i></a></td>

     
											

											</tr>
										
										<?php $k++;
										} ?>

									</form>
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



