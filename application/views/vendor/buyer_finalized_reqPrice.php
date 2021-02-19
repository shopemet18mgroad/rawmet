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
		<th>Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>Seller's Re-Negotiated Price</th>
		<th>Buyer's Re-Negotiated Price</th>
		<th>Action</th>
	  </tr>
    </thead>
	 
	
	 <tbody>                              <?php
                                               $strTable = "";
                                             foreach($sqldata3 as $seller){                                             
                                             $strTable .= " 
                                          <tr>
										  <td>".$seller->sellername."</td>
                                          <td>".$seller->bcompanyname."</td>
                                          <td>".$seller->category."</td>
                                          <td>".$seller->productname."</td>
                                          <td>".$seller->productid."</td>
                                          <td>".$seller->description."</td>
                                          <td>".$seller->quantity."/".$seller->units."</td> 
                                          
										   <td>".$seller->sellerprice."/".$seller->bsupplyability."</td>
										    <td>".$seller->buyer_nego_price."/".$seller->buyer_nego_units."</td>
											 <td>".$seller->seller_renego_price."/".$seller->seller_renego_units."</td>
											  <td>".$seller->buyer_final_price."/".$seller->buyer_final_units."</td>
                            <td> <a href='javascript:finalapproveProduct(\"".$seller->seller_mbuyreq_id."\")'>Approve</a>
				|| <a href='javascript:buyerfinalrejectProduct(\"".$seller->seller_mbuyreq_id."\")'>Reject</a></td>     
                                      </tr>
                                     
                                      </tr>
                                 ";
                  }
                  echo $strTable;
                 ?>
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
                         url:$baseURL+'Vendor_buyer_finalized_reqPrice/buyerfinalapproveProduct',
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

function buyerfinalrejectProduct(seller_mbuyreq_id)
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
                         url:$baseURL+'Vendor_buyer_finalized_reqPrice/buyerfinalrejectProduct',
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
 