  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buyer's Negotiated Price</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                
  
  
  
  
  
  
  
  
  <table class="table table-striped table-bordered table-sm w-auto small" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
		<th>Buyer Name</th>
	  <th>Buyer Company Name</th>
	  <th>Category</th>
	  <th>Buyer Product Name</th>
	  <th>Buyer Product Id</th>
      <th>Buyer Base Quantity</th>
	  <th>Buyer Base Price</th>
	  <th>Seller Name</th>
	  <th style="color:orange">Seller Price</th>
	  <th style="color:orange">Buyer Negotiated Price</th>
	  <th> Buyer's Status</th>			 
      </tr>
    </thead>
       <tbody>
                                 
                                               <?php
                                               $strTable = "";
                                             foreach($sqldata as $seller){                                             
                                             $strTable .= " 
                                          <tr>
                                          <td>".$seller->bname."</td>
                                          <td>".$seller->bcompanyname."</td>
                                          <td>".$seller->category."</td>
                                          <td>".$seller->productname."</td>
                                          <td>".$seller->productid."</td>
                                          <td>".$seller->quantity."</td> 
                                          <td>".$seller->price."</td> 
                                          <td>".$seller->sellername."</td>
										  <td>".$seller->sellerprice."</td> 
										  <td>".$seller->buyer_nego_price."</td> 
                                          <td> <a href='javascript:approveProduct(\"".$seller->seller_mbuyreq_id."\")'>Approve</a>
				|| <a href='Vendor_seller_renego_buyresponse/index/".$seller->bname."/".$seller->sellername."/".$seller->productid."'>Renegotiate</a></td>     
                                      </tr>
                                     
                                      </tr>
                                 ";
                  }
                  echo $strTable;
                 ?>
                </tbody>
  
   

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

<script type="text/javascript">

$baseURL = "<?php echo base_url(); ?>"; 
function approveProduct(seller_mbuyreq_id)
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
                         url:$baseURL+'vendor_buyerResponse_req/approveProduct',
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
 