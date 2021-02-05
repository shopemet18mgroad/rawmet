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
                        <form action="<?php echo base_url(); ?>Customer_repurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
                            <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Buyer Name</th>
                                        <th>Supplier Name</th>
                                        <th>Product Name</th>
                                        <th>Product Id</th>
                                        <th>Category</th>
                                        <th>Supplier Original Price</th>
                                        <th>Supplier Original Quantity</th>
                                        <th style="color:pink;">Buyer Negotiated Quantity</th>
                                        <th style="color:pink;">Buyer Negotiated Price</th>
                                        <th style="color:yellow;">Seller Re-Negotiated price</th>
                                        <th style="color:orange;">Buyer Re-Negotiated price</th>
                                        <th style="color:orange;">Buyer Re-Negotiated Quantity</th>
                                        <th>status</th>
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
                                                <td><?php echo $row->vname; ?></td>
                                                <td><?php echo $row->busername; ?></td>
                                                <td><?php echo $row->productname; ?></td>
                                                <td><?php echo $row->productid; ?></td>
                                                <td><?php echo $row->category; ?></td>
                                                <td><?php echo $row->price . "/"; ?></td>
                                                <td><?php echo $row->supplyunits; ?></td>
                                                <td><?php echo $row->quantity . "/"; ?></td>
                                                <td><?php echo $row->units; ?></td>
                                                <td><?php echo $row->bquantity . "/"; ?></td>
                                                <td><?php echo $row->bunits; ?></td>
                                                <td><?php echo $row->bprice . "/"; ?></td>
                                                <td><?php echo $row->bsupplyability; ?></td>
                                                <td><?php echo $row->sunits; ?></td>
                                                <td><?php echo $row->brenegoprice . "/"; ?></td>
                                                <td><?php echo $row->brenegounit; ?></td>
                                                <td><?php echo $row->brenegoquantity . "/"; ?></td>
                                                <td><?php echo $row->brenegoquantityunit; ?></td>
                                    
                                                <td> <a href="<?php echo base_url() . 'Customer_renegovaluequotation/auc_no/' . urldecode($row->busername) . "/" . urldecode($row->vname) . "/" . urldecode($proid); ?>" target="_blank">
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