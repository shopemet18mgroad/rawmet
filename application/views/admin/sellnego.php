<!-- End of Topbar -->
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quotation Approved</h1>
		               				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                       

                                
                		<center> <h5 style="color:#f36d5e;font-size:12px"><b> First Negotiated approval by Buyer</h5></b></center>
			  
			  
			  
			  
                <table class="table table-striped table-bordered"  width="100%" cellspacing="0">
    		    <thead style="background:#91d4df; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">First Negotiated approval by Buyer</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>
 <tbody style="font-size:13px" >                
                                
                                
                                
                   

                                    <?php $k = 0; ?>
									  <?php  $count = 1;?>
                                    <?php foreach ($sqldata as $row) { ?>
                                        <tr>
                                            <?php $proid = str_ireplace('/', '-', $row->productid);
                                            ?>
                                            <?php $prodid = str_ireplace('/', '-', $row->productid); ?>
											<td data-label="Sl.No"><?php echo $count;?></td>
                                         <td data-label="First Negotation Approval of buyer "><b>Seller Id</b>  <?php echo $row->sellerid; ?>
										  <b> Buyer Id :</b><?php echo $row->buyerid; ?>
                                         <b>Product Name :</b><?php echo $row->productname; ?>
                                            <b> Product Id :</b><?php echo $row->productid; ?><br>
                                          <b>  Category :</b><?php echo $row->category; ?>
                                           <b>Location  : </b><?php echo $row->pcities; ?>
                                           
                                           <b> Supply Base Quantity :</b><?php echo $row->quantity . " ";
                                            echo $row->units; ?>
                                            
											<b>Supplier Base Price :</b><?php echo $row->price . "/";
                                            echo $row->punits; ?><br>
                                            
                                          <b>Buyer Quantity : </b><?php echo $row->bquantity . " ";
                                            echo $row->bunits; ?>
                                            
                                           <b> Buyer Price : </b><?php echo $row->bprice . "/";
                                            echo $row->bsupplyability; ?>
                                            
                                            <td data-label="PO"><a href="<?php echo base_url() . 'Admin_sellnegoquotation/auc_no/'.($row->id) ."/". urldecode($row->buyerid) . "/" . urldecode($row->sellerid) . "/" . urldecode($proid); ?>" target="_blank">

                                                    <i class="fa fa-download" aria-hidden="true"></i></a></td>
<?php $count++;?>
                                        <?php $k++;
                                    } ?>
                                        </tr>

                                </tbody>
                            </table>
                            
                       <center> <h5 style="color: #91d4df;font-size:12px"><b> First Negotiated approval by seller</h5></b></center>
			  
			  
			  
			  
                <table class="table table-striped table-bordered"  width="100%" cellspacing="0">
    		    <thead style="background:#f36d5e; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">First Negotiated approval by Seller</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>
 <tbody style="font-size:13px" >       
                            

                                    <?php $k = 0; ?>
									  <?php  $count = 1;?>
								
                                    <?php foreach ($sqldata2 as $row) { ?>
                                        <tr>
                                            <?php $proid = str_ireplace('/', '-', $row->productid); ?>
                                            <?php $prodid = str_ireplace('/', '-', $row->productid); ?>
									<td datalabel="Sl.No"><?php echo $count;?></td> 

                                       <td data-label="First Negotiated approval by Seller">
                                                  <b>Buyer ID:</b><?php echo $row->buyerid; ?>
                                               
                                                 <b> Supplier ID :</b> <?php echo $row->sellerid; ?>
                                                
                                                   <b>Product Name :</b><?php echo $row->productname; ?>
                                            
                                                   <b>Product Id :</b><?php echo $row->productid; ?>
                                                
                                                   <b> Category:</b><?php echo $row->category; ?>
                                            
                                                 <b> Supplier Base Quantity : </b><?php echo $row->quantity . " ";
                                                    echo $row->units; ?>
                                             
                                                  <b> Supplier Base Price :</b><?php echo $row->price . "/";
                                                    echo $row->punits; ?>
                                             
                                                <b> Buyer 1st Negotiated Quantity  :</b> <?php echo $row->bquantity . " ";
                                                    echo $row->bunits; ?>
                                            
                                                  <b>Buyer 1st Negotiated Price : </b><?php echo $row->bprice . "/";
                                                    echo $row->bsupplyability; ?>
                                            
                                                   <b>Supplier 1st Negotiated price :</b><?php echo $row->selprice . "/";
                                                    echo $row->sunits; ?>


                                            <td data-label="PO"> <a href="<?php echo base_url() . 'Admin_quotationpur/auc_no/' .$row->id."/". urldecode($row->buyerid) . "/" . urldecode($row->sellerid) . "/" . urldecode($proid); ?>" target="_blank">



                                                    <i class="fa fa-download" aria-hidden="true"></i></a></td>


                                          <?php $count++;?>


                                        </tr>
                                    <?php $k++;
                                    } ?>

                        </form>
                        </tbody>
                        </table>
                      <center> <h5 style="color:#f36d5e;font-size:12px"><b> Second Negotiated approval by Buyer</h5></b></center>
			  
			  
			  
			  
                <table class="table table-striped table-bordered"  width="100%" cellspacing="0">
    		    <thead style="background:#91d4df; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">Second Negotiated approval by Buyer</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>
 <tbody style="font-size:13px" >       
                            
                                    <form action="<?php echo base_url(); ?>Customer_repurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">

                                        <?php $k = 0; ?>
											  <?php  $count = 1;?>
                                        <?php foreach ($sqldata3 as $row) { ?>
            <tr>
               <?php $proid = str_ireplace('/', '-', $row->productid); ?>
                <?php $prodid = str_ireplace('/', '-', $row->productid); ?>
				<td data-label="SL.No."><?php echo $count;?></td> 

                                       <td data-label="Second Negotiated approval by Buyer">
                                                  <b>Buyer ID:</b><?php echo $row->buyerid; ?>
                                               <b>
                                                  Supplier ID :</b> <?php echo $row->sellerid; ?>
                                                
                                                  <b> Product Name :</b><?php echo $row->productname; ?>
                                            
                                                  <b> Product Id :</b><?php echo $row->productid; ?>
                                                
                                                    <b>Category:</b><?php echo $row->category; ?>
                                            
                                                  <b>Supplier Base Quantity : </b><?php echo $row->quantity . " ";
                                                    echo $row->units; ?>
                                             
                                                   <b>Supplier Base Price :</b><?php echo $row->price . "/";
                                                    echo $row->punits; ?>
                                             
                                                 <b>Buyer 1st Negotiated Quantity  : </b><?php echo $row->bquantity . " ";
                                                    echo $row->bunits; ?>
                                            
                                                  <b>Buyer 1st Negotiated Price :</b><?php echo $row->bprice . "/";
                                                    echo $row->bsupplyability; ?>
                                            
                                                   <b>Supplier 1st Negotiated price :</b><?php echo $row->selprice . "/";
                                                    echo $row->sunits; ?>
                                              
                                               <b> Buyer 2nd Re-Negotiated Quantity :</b> <?php echo $row->brenegoquantity . " ";
                                                    echo $row->brenegoquantityunit; ?>
											
                                                <b> Buyer 2nd Re-Negotiated price :</b>  <?php echo $row->brenegoprice . "/";
                                                    echo $row->brenegounit; ?>
                                              
                                    </td>
         <td data-label="PO"> <a href="<?php echo base_url() . 'Admin_renegovaluequotation/auc_no/' . $row->id . "/". urldecode($row->buyerid) . "/" . urldecode($row->sellerid) . "/" . urldecode($proid); ?>" target="_blank">
                                                        <i class="fa fa-download" aria-hidden="true"></i></a></td>
														      <?php $count++;?>
                                                
                                            </tr>
                                        <?php $k++;
                                        } ?>

                                    </form>
                                </tbody>
                            </table>
                            
                            
                            
                     	<center> <h5 style="color:#91d4df;font-size:12px"><b> Second Negotiated approval by Seller</h5></b></center>
			  
			  
			  
			  
                <table class="table table-striped table-bordered"  width="100%" cellspacing="0">
    		    <thead style="background: #f36d5e; color:white; font-size:12px">
      <tr>
	  <th class="col-1">SL.No</th><th class="col-10">Second Negotiated approval by Seller</th>
		
             <th class="col-1">PO</th>
		
                    
             
		
      </tr>
    </thead>
 <tbody style="font-size:13px" >       
                            
                            
      
                
                
                            
                                    <form action="<?php echo base_url(); ?>Customer_repurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">

                                        <?php $k = 0; ?>
											  <?php  $count = 1;?>
                                        <?php foreach ($sqldata4 as $row) { ?>
                                            <tr>
                                                <?php $proid = str_ireplace('/', '-', $row->productid); ?>

                                                <?php $prodid = str_ireplace('/', '-', $row->productid); ?>
												<td data-label="Sl.No"><?php echo $count;?></td> 

                                       <td data-label="Second Negotiated approval by Seller">
                                                  <b>Buyer ID:</b><?php echo $row->buyerid; ?>
                                               <b>
                                                  Supplier ID :</b> <?php echo $row->sellerid; ?>
                                                
                                                  <b> Product Name :</b><?php echo $row->productname; ?>
                                            
                                                  <b> Product Id :</b><?php echo $row->productid; ?>
                                                
                                                    <b>Category:</b><?php echo $row->category; ?>
                                            
                                                  <b>Supplier Base Quantity : </b><?php echo $row->quantity . " ";
                                                    echo $row->units; ?>
                                             
                                                   <b>Supplier Base Price :</b><?php echo $row->price . "/";
                                                    echo $row->punits; ?>
                                             
                                                 <b>Buyer 1st Negotiated Quantity  : </b><?php echo $row->bquantity . " ";
                                                    echo $row->bunits; ?>
                                            
                                                  <b>Buyer 1st Negotiated Price :</b><?php echo $row->bprice . "/";
                                                    echo $row->bsupplyability; ?>
                                            
                                                   <b>Supplier 1st Negotiated price :</b><?php echo $row->selprice . "/";
                                                    echo $row->sunits; ?>
                                              
                                               <b> Buyer 2nd Re-Negotiated Quantity :</b> <?php echo $row->brenegoquantity . " ";
                                                    echo $row->brenegoquantityunit; ?>
											
                                                <b> Buyer 2nd Re-Negotiated price :</b>  <?php echo $row->brenegoprice . "/";
                                                    echo $row->brenegounit; ?>
                                              
                                                <b> Supplier final Re-Negotiated price :</b><?php echo $row->sellrenegoprice . "/";
                                                    echo $row->sellrenegounits; ?>

                                          

                                                <td data-label="PO"> <a href="<?php echo base_url() . 'Admin_quotation5/auc_no/' . $row->id."/". urldecode($row->buyerid) . "/" . urldecode($row->sellerid) . "/" . urldecode($proid); ?>" target="_blank">

                                                        <i class="fa fa-download" aria-hidden="true"></i></a></td>
      <?php $count++;?>



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