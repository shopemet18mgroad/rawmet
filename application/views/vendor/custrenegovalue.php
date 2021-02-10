
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buyer's Re-Negotiated Value
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
	        <th>Seller Name</th>
			<th>Buyer Name</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th>Your Base Price</th>
			<th style="color:pink;">Buyer Negotiated Quantity</th>
			<th style="color:pink;">Buyer Negotiated Price</th>
			<th style="color:yellow;">Your Negotiated price</th>
			<th style="color:orange;">Buyer Re-Negotiated price</th>
			<th style="color:orange;">Buyer Re-Negotiated Quantity</th>
			<th>Action</th>
     
    </thead>
    <tbody>
	   <?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
					<td><?php echo $count;?></td>
			<td><?php echo $row->vname;?></td>
			<td><?php echo $row->busername;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
				<td><?php echo $row->price."/"; echo $row->supplyunits;?></td>
			<td><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bsupplyability;?></td>
			<td><?php echo $row->selprice."/"; echo $row->sunits;?></td>
			<td><?php echo $row->brenegoprice."/"; echo $row->brenegounit;?></td>
			<td><?php echo $row->brenegoquantity.""; echo $row->brenegoquantityunit;?></td>
				
		<td>	
	
		<a href="<?php  echo base_url()."Vendor_custrenegovalue/approve_requote/".$proid."/".urldecode($row->vname)."/".urldecode($row->busername);?>"><button type="button" class="btn btn-success btn-sm">Approve</button></a>
		<br><br>			
		<center><?php
		/* <a href="<?php echo base_url()."Vendor_sellrenegotiate/index/".$proid."/".urldecode($row->vname)."/".urldecode($row->busername);?>"  class="btn btn-secondary btn-sm text-white delete-confirm">Final Renegotation</a> */
					
				$st = 	$row->status;
		if($st == true){
				echo '<a href="'.base_url().'Vendor_sellrenegotiate/index/'.$proid."/".urldecode($row->vname)."/".urldecode($row->busername).'">';
				echo '<button class="btn btn-secondary btn-sm text-white delete-confirm">Final Renegotation</button>';
		echo '</a>';}
		else{
			echo '<b>Finalized by Buyer</b>.';
		}
		
			?>
		</center>
		<br>
		<a href="<?php  echo base_url()."Vendor_custquoteapproval/reject/".$proid."/".urldecode($row->busername);?>"><button type="button" class="btn btn-danger btn-sm">Reject</button></a></td>
      </tr> 
	    <?php $count++;?>	  
	  
     <?php }?>	
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

