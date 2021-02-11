  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buyer's Final Re-Negotiated</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
		<th>Seller Name</th>
		<th>Buyer Company Name</th>
	    <th>Category</th>
		<th>Buyer Product Name</th>
		<th>Product Id</th>
		<th>Description</th>
        <th>Quantity</th>
		<th>Buyer Price</th>
		<th>Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>Seller's Re-Negotiated Price</th>
		<th>Buyer's Re-Negotiated Price</th>
		<th>Vendor's Status</th>
	  </tr>
    </thead>
	<tbody>
	
      

	   <?php  $strTable = "";
        foreach($sqldata3 as $seller){ ?>
      <tr>
	  
	 <?php //$proid = str_ireplace('/','-',$row->productid);
				?>
	  <td><?php echo $seller->sellername;?></td> 
		<td><?php echo $seller->bcompanyname;?></td> 
		<td><?php  echo $seller->category;?></td>
		 <td><?php echo $seller->productname?></td>
		  <td><?php echo $seller->productid?></td>
         <td><?php echo $seller->description?></td>
		<td><?php echo $seller->quantity." ";echo $seller->units;?></td>
		<td><?php echo $seller->price."/";echo $seller->priceperkg;?></td>
		<td><?php echo $seller->sellerprice."/";echo $seller->bsupplyability;?></td>
		<td><?php echo $seller->buyer_nego_price."/";echo $seller->buyer_nego_units;?></td>
		<td><?php echo $seller->seller_renego_price."/";echo $seller->seller_renego_units;?></td>					
		
		<td><?php echo $seller->buyer_final_price."/";echo $seller->buyer_final_units;?></td>							
		
		<td style="color:orange;" ><b><?php  if($seller->sel_status == 0) {echo 'Pending';}else if($seller->sel_status == 2) {echo 'Rejected';}else if($seller->sel_status == 1) {echo 'Approved!';}?></b></td>
		

		
        
<?php }?>	
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
</div>

<script type="text/javascript">

$baseURL = "<?php echo base_url(); ?>"; 
function finalapproveProduct(seller_mbuyreq_id)
{
  alert(seller_mbuyreq_id);
  swal({
  title: "Are you sure?",
  //content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_cust_final_req_renego/finalapproveProduct',
                         data:'seller_mbuyreq_id='+seller_mbuyreq_id,
                         success:function(msg){
                             if(msg){
                                swal("Information updated success.");
                             }else{
                                swal("Information not updated.");
                             }
                             location.reload();
                         }
                     });


  }else {
    swal("Approved!");
  }  
});


}

 
</script>
 