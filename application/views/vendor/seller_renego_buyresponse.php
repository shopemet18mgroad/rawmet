<?php

	$sellerOfferStatus  = $sqldata1[0]->status;
	$strSellerDisable   = "";
	if($sellerOfferStatus === "1" || $sellerOfferStatus === "2" ){
		$strSellerDisable = "disabled";
	}	
	 
	
	$buyeraprlReqStatus     = $first_approve[0]->status;
	$byerapprvlDisable = "";
	if($buyeraprlReqStatus === "1" || $buyeraprlReqStatus === "2"){
		$byerapprvlDisable = "disabled";
	}
	
		 

?> 


 <head>
 <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 </head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Negotiate Here</h1>
         
          </div>

          
              <!-- Content Row -->

                    <div class="row">

                      <!-- Pie Chart -->
                        <div class="col-xl-7 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"> Negotiate</h6>
                                   
                                </div>
                                <!-- Card Body -->

         <div class="card-body">
           <table style="align:center" class="table table-striped table-bordered" width="100%" cellspacing="0">
		   
    
	<form action="<?php echo base_url();?>Vendor_add_seller_renego_buyresponse" method="POST" enctype="multipart/form-data">
       <tbody>
	   
	    <tr  style="text-align:center; background-color:white;">
			
			<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo  $sqldata1[0]->buyerid;?>" readonly>
						
			<input type="hidden" class="form-control" id="vusername" name="vusername"  value="<?php echo $sessi;?>">
       		
			<input type="hidden" class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" value="<?php echo  $sqldata1[0]->seller_mbuyreq_id;?> ">
 		
		
			
			<td style="font-size:15px;"><b style="text-decoration: underline;">Seller's Offer</b> <br />
			<small style="color:blue; font-size:15px;"><b><?php echo  $sqldata1[0]->sellerprice.' / '.$sqldata1[0]->bsupplyability;?></b></small>
			
			
			<hr>
			<br/>
		<b><?php  if($first_approve[0]->status == 0) {echo 'Pending';}else if($first_approve[0]->status == 2) {echo 'Rejected';}else if($first_approve[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation_seller/auc_no/'.$first_approve[0]->id." target='_blank'><i class='fa fa-download'></i></a>";}else if($first_approve[0]->status == 5) {echo 'Approved-check in final Approval!';}else if($first_approve[0]->status == 6) {echo ' ';}?></b>
			</td>
			
		<?php 
			$strDisable = "";
			$SellerReNegotiation = "";
			if($seller_req_response && $strSellerDisable =="" && $byerapprvlDisable ==""){
				$SellerReNegotiation = $seller_req_response[0]->seller_renego_price; 
				if($SellerReNegotiation !=""){
					$strDisable = "disabled";
				}				
			}			
			else{
				if($strSellerDisable !=""){
					$strDisable = $strSellerDisable;
				}
				if($byerapprvlDisable !=""){
					$strDisable = $byerapprvlDisable;
				}
				 
			}
			
		?>
		
			<td style="font-size:15px;"><b style="text-decoration: underline;">Buyer's Negotiated Price</b> <br />
			<p style="color:blue; font-size:15px;"><b>
			<?php echo  $sqldata1[0]->buyer_nego_price.' / '.$sqldata1[0]->buyer_nego_units;?></b>	 
			<br/>
			</p>
			
			<button type="button" class="btn btn-outline-primary  btn-sm <?php echo $strDisable; ?>">
			
			<?php if($first_approve[0]->status || isset($seller_req_response[0]->seller_renego_price) && $seller_req_response[0]->seller_renego_price){echo  "<a href='#'><i class='fas fa-check'></i></a>";}else{  echo "<a href='javascript:approveProduct(\"".$sqldata1[0]->seller_mbuyreq_id."\")'><i class='fas fa-check'></i></a>";}?> </button>	
			
			<button type="button" class="btn btn-outline-danger btn-sm <?php echo $strDisable; ?>">
			<?php if($first_approve[0]->status || isset($seller_req_response[0]->seller_renego_price) && $seller_req_response[0]->seller_renego_price){echo  "<a href='#'><i class='fa fa-times' aria-hidden='true'></i></a>";}else{  echo "<a href='javascript:rejectProduct(\"".$sqldata1[0]->seller_mbuyreq_id."\")'><i class='fa fa-times' aria-hidden='true'></i></a>";}?>
			</button>
			<hr>
			
				<b><?php  if($sqldata1[0]->status == 0) {echo 'Pending';}else if($sqldata1[0]->status == 2) {echo 'Rejected';}else if($sqldata1[0]->status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation10/auc_no/'.$sqldata1[0]->seller_mbuyreq_id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata1[0]->status == 5) {echo 'Approved-check in final Approval!';}else if($sqldata1[0]->status == 6) {echo ' ';}?></b>
			
			</td>
			
			
			 
		</tr>
	
	
	   <tr style="text-align:center;  background-color:rgb(200, 200, 200);">
	   		
 		
		<td style="font-size:15px; width:290px; color:white;">Seller Re Negotiation Price<br />
		
		
		
		<center><input required style="width:160px;" type="text" class="form-control" id="seller_renego_price" name="seller_renego_price" value='<?php echo $SellerReNegotiation;?>' <?php echo $strDisable; ?>></center>
		
			 
		
		<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success mt-2 " style="font-size:13px" name="submit" role="submit" onclick="return validate()" <?php echo $strDisable; ?> ><b>Negotiate</b></button>
		
		
		<button type="button" class="btn btn-outline-warning btn-sm mt-2 <?php echo $strDisable; ?>" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#final_Negotiated" <?php echo $strDisable; ?>>Final Negotiated</button>
		  
		
		<div class="modal fade" id="final_Negotiated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 style="color:black;" class="modal-title" id="exampleModalLabel">This is your final Re_Negotiation?</h5>
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
		</td>
		
			
		<td style="150px; color:white;">Seller Re_Negotiation Price: <br />
			 <b style="color:orange;"><?php echo  $sqldata4[0]->seller_renego_price.' / '.$sqldata4[0]->bsupplyability;?></b> 
			 <br/>
			 <hr>
			 <b><?php  if($sqldata4[0]->buyer_approval == 0) {echo 'Pending';}else if($sqldata4[0]->buyer_approval == 2) {echo 'Rejected';}else if($sqldata4[0]->buyer_approval == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation11/auc_no/'.$sqldata4[0]->seller_mbuyreq_id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata4[0]->buyer_approval == 5) {echo 'Approved-check in final Approval!';}else if($sqldata4[0]->buyer_approval == 6) {echo ' ';}?></b>
		</td>
		
		
		
		  
		  
	</form>
	
	
	
			 
	</tr>
	
	
		   <tr  style="text-align:center; background-color:white;">
	   		
 		
			<td>Buyer's Final Price<br /><small style="color:orange;"><b><?php echo  $sqldata4[0]->buyer_final_price.' / '.$sqldata4[0]->bsupplyability;?></b></small></td>
		
		
		 <br/>
		
		
	
		
		<td><button type="button" class="btn btn-outline-primary  btn-sm <?php echo $strDisable; ?>">
		<?php if($sqldata4[0]->buyer_approval || $first_approve[0]->status){echo  "<a href='#'><i class='fas fa-check'></i></a>";}else{  echo "<a href='javascript:finalapproveProduct(\"".$sqldata4[0]->seller_mbuyreq_id."\")'><i class='fas fa-check'></i></a>";}?></button>
			
			
			<button type="button" class="btn btn-outline-danger btn-sm <?php echo $strDisable; ?> ">
			<?php  if($sqldata4[0]->buyer_approval || $first_approve[0]->status){echo  "<a href='#'><i class='fa fa-times' aria-hidden='true'></i></a>";}else{  echo "<a href='javascript:rejectProduct4(\"".$sqldata4[0]->seller_mbuyreq_id."\")'><i class='fa fa-times' aria-hidden='true'></i></a>";}?>
			</button>
			
			
			<br/>
			
			 <b><?php  if($sqldata4[0]->sel_status == 0) {echo 'Pending';}else if($sqldata4[0]->sel_status == 2) {echo 'Rejected';}else if($sqldata4[0]->sel_status == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation12/auc_no/'.$sqldata4[0]->seller_mbuyreq_id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata4[0]->sel_status == 5) {echo 'Approved-check in final Approval!';}else if($sqldata4[0]->sel_status == 6) {echo ' ';} ?></b>
			 
		 
			
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
        <h6 class="m-0 font-weight-bold text-primary">Product Name:<?php echo  $sqldata1[0]->productname;?></h6>
			
        </div>
 <!-- Card Body -->
<div class="card-body">
	<div class="form-row align-items-center">
		<div class="col-md-7">
			<div class="view overlay z-depth-1-half">
           <?php $img = unserialize($sqldata[0]->uploadimage)?>
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img;?>" alt="Chania" width="60%" height="100%">
            <div class="mask rgba-white-light"></div>
			</div>
		  <br />
		</div>
        <!--Grid column-->
<div class="col-md-5">
	<p><b>Buyer Id :</b><?php echo  $sqldata1[0]->buyerid;?> </p> 
	<p><b>Category :</b> <?php echo  $sqldata1[0]->category;?></p>
	<p><b>Stock :</b> <?php echo  $sqldata1[0]->quantity. " / " .$sqldata1[0]->buyer_nego_units;?></p> 
</div>
<!-- <input style="width:10px" class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
 <a href="#" class="btn btn-primary">Upload!</a> -->
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
  title: "Are you sure want to?",
  //content: "<input type='text' />",
  text: "Approve",
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
  title: "Are you sure want to?",
  //content: "<input type='text' />",
  text: "Reject",
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
  title: "Are you sure want to?",
  //content: "<input type='text' />",
  text: "Approve",
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
  title: "Are you sure want to?",
  //content: "<input type='text' />",
  text: "Reject",
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
<script>
function rejectProduct4(seller_mbuyreq_id)
{
  alert(seller_mbuyreq_id);
  swal({
  title: "Are you sure want to?",
  //content: "<input type='text' />",
  text: "Reject",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'vendor_buyerResponse_req/rejectProduct4',
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
      