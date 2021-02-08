
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pending Quotes</h1>
            
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
			    <th>Supplier Name</th>
			     <th>Product Name</th>
			<th>Product Id</th>
			 <th>Category</th>
		    <th style ="color:pink";>Buyer Quantity</th>
			<th style ="color:pink";>Buyer Price</th>
			
			<th style ="color:orange";>Supplier Price</th>
			
			<th style ="color:pink";>Buyer Re-negotiated Quantity</th>
			<th style ="color:pink";>Buyer Re-negotiated Price</th>
			<th style ="color:orange";>Supplier Re-negotiated Price</th>
			<th>View Purchase Order</th>
      </tr>
    </thead>
    <tbody>
	      <?php  $count = 1;?>
       	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
		 <td><?php echo $count;?></td>  
			<td><?php echo $row->vname;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
			
			
			<td><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bunits;?></td>
			
			<!--<td><?php //echo $row->selqan.""; echo $row->sunits;?></td>-->
			<td><?php echo $row->selprice."/"; echo $row->sunits;?></td>
			
			<td><?php echo $row->brenegoquantity.""; echo $row->brenegoquantityunit;?></td>
			<td><?php echo $row->brenegoprice."/"; echo $row->brenegounit;?></td>
			
			<td><?php echo $row->sellrenegoprice."/"; echo $row->sellrenegounits;?></td>
			
			
	

				
<td>
 <?php $aucfl = unserialize($row->uploadporder);?>
 <?php if(isset($aucfl[0])){	?>
<a href="<?php echo base_url().'web_files/uploads/'. $aucfl[0];?>" target="_blank">
<?php echo '<i class="fa fa-download"></i>' ; ?>

 
</a></td>
<?php $count++;?>
<?php }?>	


      </tr>      
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

