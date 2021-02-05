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
                        <form action="<?php echo base_url(); ?>Customer_purchase_order" method="POST" id="upload-form" enctype="multipart/form-data">
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
                                        <th>buyer price</th>
                                        <th>Seller price</th>
                                        <th>View Quotation</th>



                                    </tr>
                                </thead>
                                <tbody>


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
                                            <td><?php echo $row->pcities; ?></td>
                                            <?php echo $row->price . "/";
                                            echo $row->units; ?>
                                            </td>
                                            <td>
                                                <?php echo $row->quantity . "/";
                                                echo $row->supplyunits; ?>
                                                <input type="hidden" name="supplyunits" value="<?php echo $row->supplyunits; ?>">
                                            </td>
                                            <td>
                                                <?php echo $row->bquantity . "/";
                                                echo $row->bunits; ?>
                                                <input type="hidden" name="bunits" value="<?php echo $row->bunits; ?>">

                                            </td>
                                            <td>
                                                <?php echo $row->bprice . "/";
                                                echo $row->bsupplyability; ?>
                                                <input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability; ?>">
                                            </td>
                                            <td>
                                                <?php echo $row->selprice . "/";
                                                echo $row->sunits; ?>
                                            </td>
                                            <td> <a href="<?php echo base_url() . 'Admin_quotationpur/auc_no/' . urldecode($row->busername) . "/" . urldecode($row->vname) . "/" . urldecode($proid); ?>" target="_blank">



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