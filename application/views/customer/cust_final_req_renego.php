  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller Requirements Negotiated</h1>
           
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
		<th>Buyer Product Id</th>
        <th>Quantity</th>
		<th>Buyer Price</th>
		<th style="color:orange">Seller Price</th>
		<th>Buyer Negotiated Price</th>
		<th>Seller's Re-Negotiated Price</th>
		<th>Buyer's Status</th>
		
		
                    
             
		
      </tr>
    </thead>			
				
				<tbody>
	 <?php foreach($sqldata3 as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<?php $prodid = str_ireplace('/','-',$row->productid);?>
			<td><?php echo $row->vusername;?></td>
			<td><?php echo $row->bcompanyname;?></td>
			<td><?php echo $row->category;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->quantity."/"; echo $row->units;?></td>
			<td><?php echo $row->price.""; echo $row->priceperkg;?></td>
			<td><?php echo $row->sellerprice."/"; echo $row->bsupplyability;?></td>
			<td><?php echo $row->buyer_nego_price."/"; echo $row->buyer_nego_units;?></td>
			<td><?php echo $row->seller_renego_price."/"; echo $row->seller_renego_units;?></td>
			 <td> <a href='javascript:finalapproveProduct(<?php echo $row->seller_mbuyreq_id; ?>)'>Approve</a>
			 
			 <?php
		
				$r =	$row->seller_mbuyreq_id;
				$st = 	$row->buyer_approval;
		if($st == 3){
			echo '<b>Finalized by Seller</b>.';
		}
		else
		{
				echo '<a href="'.base_url().'Customer_finalReq_buyer_selResponse/index/'.$r.'">';
				echo '<button class="btn btn-secondary btn-sm text-white delete-confirm">Final Renegotation</button>';
		echo '</a>';}
		
			?>
			
			
			 
			
			
			
			</td>
			 
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




 