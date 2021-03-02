
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Seller Dashboard</h1>
         
          </div>

          
              <!-- Content Row -->

                    <div class="row">

                      <!-- Pie Chart -->
                        <div class="col-xl-7 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"> Negotiated</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->

         <div class="card-body">
           <table style="align:center" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
		   
    <thead class="bg-primary text-white">
    	
    </thead>
	<form action="<?php echo base_url();?>Vendor_add_seller_renego_buyresponse" method="POST" enctype="multipart/form-data">
       <tbody>
	   
	    <tr  style="text-align:center;">
			
			<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo  $sqldata1[0]->buyerid;?>" readonly>
						
			<input type="hidden" class="form-control" id="vusername" name="vusername"  value="<?php echo $sessi;?>">
       		
			<input type="hidden" class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" value="<?php echo  $sqldata1[0]->seller_mbuyreq_id;?> ">
 		
		
			
			<td>Seller's Offer<br /><small style="color:orange;"><b><?php echo  $sqldata1[0]->sellerprice.' / '.$sqldata1[0]->bsupplyability;?></b></small>
			<br/>
			
			
		<b><?php  if($first_approve[0]->status == 0) {echo 'Pending';}else if($first_approve[0]->status == 2) {echo 'Rejected';}else if($first_approve[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation_seller/auc_no/'.$first_approve[0]->id." target='_blank'><i class='fa fa-download'></i></a>";}else if($first_approve[0]->status == 5) {echo 'Approved-check in final Approval!';}?></b>
			</td>
		
		
			<td>Buyer Negotiated Price:<br /><small style="color:orange;"><b>
			<?php echo  $sqldata1[0]->buyer_nego_price.' / '.$sqldata1[0]->buyer_nego_units;?></br>
			
			
	 
			<br/>
			
			
			<button type="button" class="btn btn-outline-primary  btn-sm">
			<?php echo "<a href='javascript:approveProduct(\"".$sqldata1[0]->seller_mbuyreq_id."\")'><i class='fas fa-check'></i></a>";?> 	
			<button type="button" class="btn btn-outline-danger btn-sm">
			<?php echo "<a href='javascript:rejectProduct(\"".$sqldata1[0]->seller_mbuyreq_id."\")'><i class='fa fa-times' aria-hidden='true'></i></a>";?>
			</button>
			
			<br/>
			
				<b><?php  if($sqldata1[0]->status == 0) {echo 'Pending';}else if($sqldata1[0]->status == 2) {echo 'Rejected';}else if($sqldata1[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation10/auc_no/'.$sqldata1[0]->seller_mbuyreq_id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata1[0]->status == 5) {echo 'Approved-check in final Approval!';}?></b>
			
			</td>
			
			<td style="150px">Seller Re_Negotiation Price: <br />
			 <b style="color:orange;"><?php echo  $sqldata4[0]->seller_renego_price.' / '.$sqldata4[0]->bsupplyability;?></b> 
			 <br/>
			 <b><?php  if($sqldata4[0]->buyer_approval == 0) {echo 'Pending';}else if($sqldata4[0]->buyer_approval == 2) {echo 'Rejected';}else if($sqldata4[0]->buyer_approval == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation11/auc_no/'.$sqldata4[0]->seller_mbuyreq_id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata4[0]->buyer_approval == 5) {echo 'Approved-check in final Approval!';}?></b>
		</td>
			 
		</tr>
	
	
	   <tr style="text-align:center;">
	   		
 		
		<td style="font-size:15px; width:290px;">Seller Re Negotiation Price<br /></td>
			
		<td><center><input required style="width:160px;" type="text" class="form-control" id="seller_renego_price" name="seller_renego_price"></center></td>
		
		
		<td colspan="2"><button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm" style="font-size:13px" name="submit" role="submit" onclick="return validate()"><b>Negotiate</b></button>
		
		
		<button type="button" class="btn btn-outline-warning btn-sm" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#final_Negotiated">Final Negotiated</button>
		  
		
		<div class="modal fade" id="final_Negotiated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">This is your final Re_Negotiation?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
							</button>
					</div>
       
					<div class="modal-footer">
						<button class="btn btn-danger btn-sm mt-2" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2"  name="btnsubmit_final" id= "btnsubmit_final" role="submit" >Final-Submit</a></button>
					</div>
				</div>
			</div>
		</div>
		  
		  
	</form>
	
	
	</td>
			 
	</tr>
	
	
		   <tr  style="text-align:center;">
	   		
 		
			<td colspan="3">Buyer's Final Price<br /><small style="color:orange;"><b><?php echo  $sqldata4[0]->buyer_final_price.' / '.$sqldata4[0]->bsupplyability;?></b></small></td>
		
		
		 <br/>
		
		
	
		
		<td><button type="button" class="btn btn-outline-primary  btn-sm">
<?php echo "<a href='javascript:finalapproveProduct(\"".$sqldata4[0]->seller_mbuyreq_id."\")'><i class='fas fa-check'></i></a>";?>		
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
			<br/>
			
			 <b><?php  if($sqldata4[0]->sel_status == 0) {echo 'Pending';}else if($sqldata4[0]->sel_status == 2) {echo 'Rejected';}else if($sqldata4[0]->sel_status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation12/auc_no/'.$sqldata4[0]->seller_mbuyreq_id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata4[0]->sel_status == 5) {echo 'Approved-check in final Approval!';}?></b>
			
			</td>

	
	</td>
			 
 
	</tr>
 </tbody>
</table>
 </div>
 </div>
 </div>
						
<div class="col-xl-5 col-lg-7">
	<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product Name:<?php echo  $sqldata[0]->productname;?></h6>
			<div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Dropdown Header:</div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </div>
        </div>
 <!-- Card Body -->
<div class="card-body">
	<div class="form-row align-items-center">
		<div class="col-md-7">
			<div class="view overlay z-depth-1-half">
           <!-- <?php $img = unserialize($sqldata[0]->uploadimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="60%" height="100%">-->
            <div class="mask rgba-white-light"></div>
			</div>
		  <br />
		</div>
        <!--Grid column-->
<div class="col-md-5">
	<p><b>Supper Id :</b><?php echo  $sqldata1[0]->buyerid;?> </p> 
	<p><b>Category :</b> <?php echo  $sqldata1[0]->category;?></p>
	<p><b>Stock :</b> <?php echo  $sqldata1[0]->quantity. " / " .$sqldata1[0]->units;?>"</p> 
</div>
<input style="width:10px" class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
 <a href="#" class="btn btn-primary">Upload!</a>
</div>

                                </div>
                            </div>
                        </div>
                    </div>
             

           

        
         

          
         
		  
		  
		 
		 
		 
    
</div>
  <script>
  
function validate(){
swal("You have negotiated", {
  submit: ["Oh noez!", "Aww yess!"],
});

}
  </script>
 
 
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



function rejectProduct(seller_mbuyreq_id)
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
                         url:$baseURL+'vendor_buyerResponse_req/rejectProduct',
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
      