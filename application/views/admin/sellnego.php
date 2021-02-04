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
                                        <th>Seller Name</th>

                                        <th>Product Name</th>
                                        <th>Product Id</th>
                                        <th>Category</th>
                                        <th>Location</th>
                                        <th>Supplier Price</th>
                                        <th>Supplier Quantity</th>

                                        <th style="color:orange" ;>Buyer Quantity</th>
                                        <th style="color:orange" ;>Buyer Price</th>
                                        <th>View Quotation</th>
                                        <th>View Purchase Order</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $k = 0; ?>
                                    <?php foreach ($sqldata as $row) { ?>
                                        <tr>
                                            <?php $proid = str_ireplace('/', '-', $row->productid);
                                            ?>
                                            <?php $prodid = str_ireplace('/', '-', $row->productid); ?>
                                            <?php echo $row->vname; ?></td>
                                            <?php echo $row->productname; ?></td>
                                            <?php echo $row->productid; ?></td>
                                            <?php echo $row->category; ?></td>
                                            <?php echo $row->pcities; ?></td>
                                            <?php echo $row->price . "/";
                                            echo $row->units; ?>
                                            </td>
                                            <?php echo $row->quantity . "/";
                                            echo $row->supplyunits; ?>
                                            </td>
                                            <?php echo $row->bquantity . "/";
                                            echo $row->bunits; ?>
                                            </td>
                                            <?php echo $row->bprice . "/";
                                            echo $row->bsupplyability; ?>
                                            </td>
                                            <td> <a href="<?php echo base_url() . 'Admin_sellnegoquotation/auc_no/' . urldecode($row->busername) . "/" . urldecode($row->vname) . "/" . urldecode($proid); ?>" target="_blank">

                                                    <i class="fa fa-download" aria-hidden="true"></i></a></td>

                                            <td>
                                            </td>
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