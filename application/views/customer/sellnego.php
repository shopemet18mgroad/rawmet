
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
			 <!-- <form action="<?php //echo base_url();?>Customer_spurchase_order" method="POST" id="upload-form" enctype="multipart/form-data">-->
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
		
			<th>Supplier Base Price</th>
			<th>Supplier Base Quantity</th>
			<th style="color:orange;">Buyer Price</th>
			<th style="color:orange;">Buyer Quantity</th>
			<th>View Quotation</th>
		<th>Upload Purchase Order</th>
		
      </tr>
    </thead>
    <tbody>
	<?php $k=0;?>
	  <?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
	
      <tr>
	   <form action="<?php echo base_url();?>Customer_spurchase_order" method="POST"  enctype="multipart/form-data">
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
		
			<td><?php echo $count ?></td> 
		
	<td><input type="hidden" name="buyerid" value="<?php echo $row->buyerid;?>">
							<?php echo $row->buyerid;?>
							
							<input type="hidden" name="q_id" value="<?php echo $row->id;?>">
							</td>
						
			<td><input type="hidden" name="sellerid" value="<?php echo $row->sellerid;?>">
							<?php echo $row->sellerid;?></td>
		
			<td><input type="hidden" name="productname" value="<?php echo $row->productname;?>">
								<?php echo $row->productname;?></td>
			<td><input type="hidden" name="productid" value="<?php echo $row->productid;?>">
								<?php echo $row->productid;?></td>
			<td><input type="hidden" name="category" value="<?php echo $row->category;?>">
								<?php echo $row->category;?></td>
			<td><input type="hidden" name="pcities" value="<?php echo $row->pcities;?>">
								<?php echo $row->pcities;?></td>
		
		
		<td><input type="hidden" name="price" value="<?php echo $row->price;?>">
		     <?php echo $row->price."/" ;echo $row->punits;?>
			 <input type="hidden" name="punits" value="<?php echo $row->punits;?>">
		</td>
		
		
												
		<td><input type="hidden" name="quantity" value="<?php echo $row->quantity;?>">
		     <?php echo $row->quantity."" ;echo $row->units;?>
			 <input type="hidden" name="units" value="<?php echo $row->units;?>">
		</td>
		
			
							
		<td><input type="hidden" name="bquantity" value="<?php echo $row->bquantity;?>">
		     <?php echo $row->bquantity."" ;echo $row->bunits;?>
			 <input type="hidden" name="bunits" value="<?php echo $row->bunits;?>">
		
	</td>
	
		<td><input type="hidden" name="bprice" value="<?php echo $row->bprice;?>">
		     <?php echo $row->bprice."/" ;echo $row->bsupplyability;?>
			 <input type="hidden" name="bsupplyability" value="<?php echo $row->bsupplyability;?>">
		</td>
		
			<td> <a href="<?php echo base_url().'Customer_sellnegoquotation/auc_no/'.$row->id."/".urldecode($row->buyerid)."/".urldecode($row->sellerid);?>" target="_blank">
				
		<i class="fa fa-download" aria-hidden="true"></i></a></td>
					
			
			<td>
				
				<input class="form-group w-auto"  multiple="multiple" id ="upload_dd"  type="file" name="upload_dd[]">
				<input class="form-group w-auto" value="<?php echo urldecode($row->buyerid);?>"  type="hidden" name="buyerid_hidden">	
			
			 	<input type="submit" onclick="return upload_selnegoapprovedpo()" id="<?php echo $row->id;?>" class="btn btn-info " name="submit" value="Upload">
					
			
				
		  </td>
		 <?php $count++;?>	
		 </form>
		<?php $k++;}?>
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
  
function upload_selnegoapprovedpo(){

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