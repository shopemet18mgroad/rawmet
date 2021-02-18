<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Seller's Approved Negotiation</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="<?php echo base_url(); ?>Customer_spurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
                            <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr>
									   <th>Sl.No.</th>
	       
			<th>Buyer Id</th>
			<th>Supplier Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			
			
			<th>Category</th>
			<th>Location</th>
		
			<th>Supplier Price</th>
			<th>Supplier Quantity</th>
			<th style="color:orange;">Buyer Price</th>
			<th style="color:orange;">Buyer Quantity</th>
			<th>View Quotation</th>
		<th>Upload Purchase Order</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $k = 0; ?>
									  <?php  $count = 1;?>
                                    <?php foreach ($sqldata as $row) { ?>
                                        <tr>
                                            <?php $proid = str_ireplace('/', '-', $row->productid);
                                            ?>
                                            <?php $prodid = str_ireplace('/', '-', $row->productid); ?>
												<td><?php echo $count;?></td>
                                           <td> <?php echo $row->sellerid; ?></td>
										   <td> <?php echo $row->buyerid; ?></td>
                                             <td> <?php echo $row->productname; ?></td>
                                             <td> <?php echo $row->productid; ?></td>
                                            <td>  <?php echo $row->category; ?></td>
                                           <td>   <?php echo $row->pcities; ?></td>
                                           <td>   <?php echo $row->price . "/";
                                            echo $row->punits; ?>
                                            </td>
                                            <td>  <?php echo $row->quantity . "/";
                                            echo $row->units; ?>
                                            </td>
                                           <td>   <?php echo $row->bquantity . "/";
                                            echo $row->bunits; ?>
                                            </td>
                                             <td> <?php echo $row->bprice . "/";
                                            echo $row->bsupplyability; ?>
                                            </td>
                                            <td> <a href="<?php echo base_url() . 'Admin_sellnegoquotation/auc_no/' . urldecode($row->buyerid) . "/" . urldecode($row->sellerid) . "/" . urldecode($proid); ?>" target="_blank">

                                                    <i class="fa fa-download" aria-hidden="true"></i></a></td>
<?php $count++;?>
                                        <?php $k++;
                                    } ?>
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