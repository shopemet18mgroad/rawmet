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
           
		   
		   <table style="align:center" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
		 <tbody>
	   
	    <tr  style="text-align:center;">
		
		
		
		
<td style="font-size:15px; width:150px;">Buyer's Quantity <br /><small style="color:orange;"><b><?php echo  $sqldata2[0]->bquantity. " / " .$sqldata2[0]->bsupplyability;?></b></small><br/>
		Buyer's price <br /><small style="color:orange;"><b><?php echo  $sqldata2[0]->bprice. " / " .$sqldata2[0]->bunits;?></b></small><br/>
		
		
	<b><?php  if($sqldata2[0]->sellapproval == 0) {echo 'Pending';}else if($sqldata2[0]->sellapproval == 2) {echo 'Rejected';}else if($sqldata2[0]->sellapproval == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_sellnegoquotation/auc_no/'.$sqldata2[0]->id.'/'.$sqldata2[0]->sellerid.'/'.$sqldata2[0]->buyerid." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata2[0]->sellapproval == 0) {echo 'Approved-check in final Approval!';}?></b>	
		

<br/>

	<button type="button" class="btn btn-outline-primary  btn-sm">
			
	<a href="<?php  echo base_url()."Vendor_custquoteapproval/approve_quotes/".$sqldata2[0]->sellerpostproduct_id."/".$sqldata2[0]->buyerid;?>"><i class='fas fa-check'></i></a>
	</button>
			
			<button type="button" class="btn btn-outline-danger btn-sm"><!--<a href="<?php  echo base_url()."Vendor_custquoteapproval/reject_quotes/".$sqldata2[0]->sellerpostproduct_id."/".$sqldata2[0]->buyerid;?>">--><i class="fa fa-times" aria-hidden="true"></i><!--</a>--></button>	
		
</td>	

<td> 

<form class="user" action="<?php echo base_url();?>vendor_add_negotiate" method="POST" enctype="multipart/form-data">
			
				
				
<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $sqldata[0]->productname;?>">
<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">
<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata[0]->id;?>">
<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo $sqldata[0]->category;?>">
<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo $sqldata[0]->productid;?>">
<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo $sqldata[0]->companyname;?>">
<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo $sqldata[0]->price;?>">
<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo $sqldata[0]->punits;?>">
<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo $sqldata[0]->quantity;?>">
<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo $sqldata[0]->units;?>">
<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo $sqldata[0]->pstates;?>">
<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">

<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">

					
<input type="hidden" class="form-control" id="bquantity" name="bquantity"  value="<?php echo $sqldata2[0]->bquantity;?>">
<input type="hidden" class="form-control" id="bsupplyability" name="bsupplyability"  value="<?php echo $sqldata2[0]->bsupplyability;?>">
<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sqldata2[0]->buyerid;?>">
<input type="hidden" class="form-control" id="bprice" name="bprice"  value="<?php echo $sqldata2[0]->bprice;?>">
<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php echo $sqldata2[0]->bunits;?>">

							
<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">




							
<?php
$strDisable = "";
			$sellerprice = "";
			if($selquotenegotate){
				$sellerprice = $selquotenegotate[0]->selprice; 
				if($sellerprice !=""){
					$strDisable= "disabled";
				}				
			}
			
		?>
              <center>
                <input type="text" class="form-control col-sm-8 mt-4" name="selprice" placeholder="price" id="selprice" value='<?php echo $sellerprice;?>' <?php echo $strDisable; ?>/> 
			</center>
			  <button type="submit" href="<?php echo base_url();?>"class="btn btn-outline-info btn-sm mt-2 offset-sm-1" name="submit" id= "submit" role="submit"  onclick= "return validate_selnego()">Negotiate</a>
		

 
						
</form>	

</td>	
		
		<td style="font-size:15px; width:150px;">Seller's Price<br /><small style="color:orange;"><b><?php echo  $sqldata30[0]->selprice. " / " .$sqldata30[0]->bunits;?></b></small><br/>
		
 
		<b><?php  if($sqldata3[0]->buyerapprove == 0) {echo 'Pending';}else if($sqldata3[0]->buyerapprove == 2) {echo 'Rejected';}else if($sqldata3[0]->buyerapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotationpur/auc_no/'.$sqldata3[0]->id.'/'.$sqldata3[0]->sellerid.'/'.$sqldata3[0]->buyerid." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata3[0]->buyerapprove == 0) {echo 'Approved-check in final Approval!';}?></b>
	
		</td>
</div>
	
			

		</tr>
	
	
	   <tr style="text-align:center;">
	   		
<td style="font-size:15px; width:150px;">Buyer's Re-Negotiated Quantity <br /><small style="color:orange;"><b><?php echo  $sqldata4[0]->brenegoquantity. " / " .$sqldata4[0]->brenegoquantityunit;?></b></small><br/>
		Buyer's Re-Negotiated price <br /><small style="color:orange;"><b><?php echo  $sqldata4[0]->brenegoprice. " / " .$sqldata4[0]->brenegounit;?></b></small><br/>	
	

<b><?php  if($approve_buyer[0]->selapprove == 0) {echo 'Pending';}else if($approve_buyer[0]->selapprove == 2) {echo 'Rejected';}else if($approve_buyer[0]->selapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_renegovaluequotation/auc_no/'.$approve_buyer[0]->id.'/'.$approve_buyer[0]->sellerid.'/'.$approve_buyer[0]->buyerid." target='_blank'><i class='fa fa-download'></i></a>";}else if($approve_buyer[0]->selapprove == 0) {echo 'Approved-check in final Approval!';}?></b>	

<br/>
	<button type="button" class="btn btn-outline-primary  btn-sm">
			
	<a href="<?php  echo base_url()."Vendor_custquoteapproval/approve_renegoquotes/".$sqldata4[0]->sellerpostproduct_id."/".$sqldata4[0]->buyerid;?>"><i class='fas fa-check'></i></a>
	</button>
			
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>		
	</td>
		
		
<td> 

<form class="user" action="<?php echo base_url();?>vendor_add_renegotiate" method="POST" enctype="multipart/form-data">
			
				
				
<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $sqldata[0]->productname;?>">
<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">
<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata[0]->id;?>">
<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo $sqldata[0]->category;?>">
<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo $sqldata[0]->productid;?>">
<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo $sqldata[0]->companyname;?>">
<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo $sqldata[0]->price;?>">
<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo $sqldata[0]->punits;?>">
<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo $sqldata[0]->quantity;?>">
<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo $sqldata[0]->units;?>">
<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo $sqldata[0]->pstates;?>">
<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">

<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">

					
<input type="hidden" class="form-control" id="bquantity" name="bquantity"  value="<?php echo $sqldata2[0]->bquantity;?>">
<input type="hidden" class="form-control" id="bsupplyability" name="bsupplyability"  value="<?php echo $sqldata2[0]->bsupplyability;?>">
<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sqldata2[0]->buyerid;?>">
<input type="hidden" class="form-control" id="bprice" name="bprice"  value="<?php echo $sqldata2[0]->bprice;?>">
<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php echo $sqldata2[0]->bunits;?>">
<input type="hidden" class="form-control" id="selprice" name="selprice"  value="<?php echo $sqldata4[0]->selprice;?>">
<input type="hidden" class="form-control" id="sunits" name="sunits"  value="<?php echo $sqldata4[0]->sunits;?>">						
<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">
<input type="hidden" class="form-control" id="brenegoquantity" name="brenegoquantity"  value="<?php echo $sqldata4[0]->brenegoquantity;?>">
<input type="hidden" class="form-control" id="brenegoquantityunit" name="brenegoquantityunit"  value="<?php echo $sqldata4[0]->brenegoquantityunit;?>">

<input type="hidden" class="form-control" id="brenegoprice" name="brenegoprice"  value="<?php echo $sqldata4[0]->brenegoprice;?>">
<input type="hidden" class="form-control" id="brenegounit" name="brenegounit"  value="<?php echo $sqldata4[0]->brenegounit;?>">

<?php
$strDisable2 = "";
			$sellerneprice = "";
			if($vend_renego){
				$sellerneprice = $vend_renego[0]->sellrenegoprice; 
				if($sellerneprice !=""){
					$strDisable2= "disabled";
				}				
			}
			
		?>
			<center>
                <input type="text" class="form-control col-sm-8 mt-4" name="sellrenegoprice" placeholder="price" id="sellrenegoprice" value='<?php echo $sellerneprice;?>' <?php echo $strDisable2; ?>/> 
			</center>
			  <button type="submit" href="<?php echo base_url();?>"class="btn btn-outline-info btn-sm mt-2 offset-sm-1" name="submit" id= "submit" role="submit"  onclick= "return validate_selnego()">Negotiate</a>
		

 
						
</form>	

</td>
<td style="font-size:15px; width:150px;">Seller Final Price<br /><small style="color:orange;"><b><?php echo  $sqldata5[0]->sellrenegoprice. " / ".$sqldata5[0]->bunits;?></b></small><br/>

	<b><?php  if($final_quote[0]->custapprove == 0) {echo 'Pending';}else if($final_quote[0]->custapprove == 2) {echo 'Rejected';}else if($final_quote[0]->custapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_quotation5/auc_no/'.$final_quote[0]->id.'/'.$final_quote[0]->sellerid.'/'.$final_quote[0]->buyerid." target='_blank'><i class='fa fa-download'></i></a>";}else if($final_quote[0]->custapprove == 0) {echo 'Approved-check in final Approval!';}?></b>	
	
		</td>
		
	
		  
		
		
			</tr>  
		  
	</form>
</tr>
<br/>
</td>
			 
	
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
			
        </div>
 <!-- Card Body -->
<div class="card-body">

<div class="form-row align-items-center">
	
											
	


    <div class="col-md-6">


    <div class="view overlay z-depth-1-half">

<?php $img = unserialize($sqldata[0]->uploadproductimage)?>

<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="120" height="100">
					
					
<p class="w-auto small"><h6><b>Description:</b> <?php echo  $sqldata[0]->description;?></h6></p>					
  </div>
	</div>				
			
 <div class="col-md-6">

<h6 style="color:green;"><b>Supply Ability: <?php echo  $sqldata[0]->quantity." "; echo  $sqldata[0]->units;?></b></h6>

<p><b>Supplier Price:</b><?php echo  $sqldata[0]->price."/"; echo $sqldata[0]->punits;?></p>

<h6 style="color:orange;"><b>Live Stock: <?php echo  $sqldata[0]->supplyability." "; echo  $sqldata[0]->supplyunits;?></b></h6>
								
	 </div>							
						
<br />

			
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-6">
			
			
			
		
			
									
<p><b>Buyer Id:</b></br><?php echo  $sqldata2[0]->buyerid;?></p>								
<p><b>Product Id:</b></br><?php echo  $sqldata[0]->productid;?></p>
								
								
							
								
<p><b>Category:</b></br><?php echo  $sqldata[0]->category;?></p>
								
								
								

								
<h6><b>Posted Date:</b></br> <?php echo date('d-m-Y H:i',strtotime($sqldata[0]->datetime)) ;?></h6>
								
<h6><b>Estimated Delivery: </b><br> <?php echo  $sqldata[0]->estdeltime;?></h6>
							
								
<h6 style="color:purple;"><b>Validity Till:</b><br> <?php echo date('d-m-Y H:i',strtotime($sqldata[0]->productvalidityto)) ;?></h6>
</div>
		
		

 </div>
                            </div>
                        </div>
                    </div>
             

           

        
         

          
         
		  
		  
		 
		 
		 
    
</div>
   			
				
							
							
			<script>
	  
	function validatepost(){

		var bquantity = document.getElementById("bquantity").value;
		var bsupplyability = document.getElementById("bsupplyability").value;
		var bprice = document.getElementById("bprice").value;
		var bunits = document.getElementById("bunits").value;


		

	if(bquantity == '' || bsupplyability == '' || bprice == '' || bunits == '' ){
	swal("Alert!","You can negotiate only once and cannot leave any field blank!","error");
			return false;
		}
		else{
			$.ajax({
				type:'submit',
				data: {bquantity:bquantity,bsupplyability:bsupplyability,bprice:bprice,bunits:bunits},
			   success:function(data){
					swal("Success", "Data Saved Successfully", "success");
				},
				error:function(xhr, thrownError, ajaxOptions){

				},
			});
		}

	}
	  </script>						
							
							
							
	