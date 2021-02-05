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
                                        <th>Upload Purchase Order</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="<?php echo base_url(); ?>Customer_repurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">

                                        <?php $k = 0; ?>
                                        <?php foreach ($sqldata as $row) { ?>
                                            <tr>
                                                <?php $proid = str_ireplace('/', '-', $row->productid); ?>

                                                <?php $prodid = str_ireplace('/', '-', $row->productid); ?>

                                                <td>
                                                    <?php echo $row->busername; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->productname; ?></td>
                                                <td>
                                                    <?php echo $row->productid; ?></td>
                                                <td>
                                                    <?php echo $row->category; ?></td>

                                                <td>
                                                    <?php echo $row->price . "/";
                                                    echo $row->units; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->quantity . "/";
                                                    echo $row->units; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->bquantity . "/";
                                                    echo $row->bunits; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->bprice . "/";
                                                    echo $row->bsupplyability; ?>
                                                </td>

                                                <td>
                                                    <?php echo $row->selprice . "/";
                                                    echo $row->sunits; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->brenegoprice . "/";
                                                    echo $row->brenegounit; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->brenegoquantity . "/";
                                                    echo $row->brenegoquantityunit; ?>
                                                <td>
                                                    <?php echo $row->sellrenegoprice . "/";
                                                    echo $row->sellrenegounits; ?>

                                                </td>

                                                <td> <a href="<?php echo base_url() . 'Customer_quotation5/auc_no/' . urldecode($row->busername) . "/" . urldecode($row->vname) . "/" . urldecode($proid); ?>" target="_blank">

                                                        <i class="fa fa-download" aria-hidden="true"></i></a></td>

                                                <td>
                                                </td>



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