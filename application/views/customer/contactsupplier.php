
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
		   
  
	<form action="<?php echo base_url();?>Customer_add_contactsupplier" method="POST" enctype="multipart/form-data">
       <tbody>
	   
	    <tr  style="text-align:center;">
		
		
		


				</div>
	<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo  $sqldata[0]->productname;?>">					
<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata[0]->id;?>">			
  <input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata[0]->productid;?>">
								
 <input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
				
	<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sessi;?>">
								
								
	<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo  $sqldata[0]->category;?>">
								
								
<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo  $sqldata[0]->companyname;?>">
								
								
									
<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">
								
<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">
<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">
					
<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo  $sqldata[0]->price;?>">
<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo  $sqldata[0]->punits;?>">
<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo  $sqldata[0]->supplyability;?>">
<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">
<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo  $sqldata[0]->pstates;?>">
								
								
								
<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo  $sqldata[0]->quantity;?>">
<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo  $sqldata[0]->units;?>">
<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">
 		
		
			
			<td style="width:290px"> 
			<label> <b>Buyer can Negotiate here</b></label>
			
			<div class="form-row m-2">
									
									<input type="text" class="form-control col-sm-4 mr-2" name="bquantity" placeholder="Quantity" id="bquantity" [(ngModel)]="person.name" />
								<div class="col-sm-4">  
							<select class="form-control col-sm-0" id="bsupplyability" name="bsupplyability">
									<option value="KG">KG</option>
									<option value="Metric Ton">Metric Ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>
							</select>
					</div>
									
								</div>
							<div class="form-row m-2">
									
									<input type="text" class="form-control col-sm-4 mr-2" name="bprice" placeholder="price" id="bprice" [(ngModel)]="person.name"/>/
							<div class="col-sm-4">  
							<select class="form-control col-sm-0" id="bunits" name="bunits">
							<option value="KG">KG</option>
									<option value="Metric Ton">Metric Ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>
						
							</select>
						
							</div>
								
								</div>		
									<center><input type="submit" name="submit" onclick="return validatepost()" role="submit" value="Negotiate" class="btn btn-info btn-sm  offset-sm-0" style="font-size:13px" ></center>
							
								</td>
		
		
		<td style="font-size:15px; width:150px;">Buyer's Quantity <br /><small style="color:orange;"><b><?php echo  $sqldata2[0]->bquantity. " / " .$sqldata2[0]->bsupplyability;?></b></small><br/>
		Buyer's price <br /><small style="color:orange;"><b><?php echo  $sqldata2[0]->bprice. " / " .$sqldata2[0]->bunits;?></b></small><br/>

		<b><?php  if($sqldata2[0]->sellapproval == 0) {echo 'Pending';}else if($sqldata2[0]->sellapproval == 2) {echo 'Rejected';}else if($sqldata2[0]->sellapproval == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_sellnegoquotation/auc_no/'.$sqldata[0]->id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata2[0]->sellapproval == 0) {echo 'Approved-check in final Approval!';}?></b>	
	
		
		
		</td>
			

			 
		</tr>
	
	
	   <tr style="text-align:center;">
	   		
 		
	
		
			
		<td style="font-size:15px; width:150px;"><b>Seller Re_Negotiation Price</b><br/>
		
		Seller Price</br>
		<small style="color:orange;"><b><?php echo  $sqldata3[0]->selprice. " / " .$sqldata3[0]->sunits;?></b></small><br/>
		
		
		<b><?php  if($sqldata3[0]->buyerapprove == 0) {echo 'Pending';}else if($sqldata3[0]->buyerapprove == 2) {echo 'Rejected';}else if($sqldata3[0]->buyerapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_sellnegoquotation/auc_no/'.$sqldata[0]->id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata3[0]->buyerapprove == 0) {echo 'Approved-check in final Approval!';}?></b>
		
		
		
		
		
		
		
		
		
		
		
		
		
	<td>  <?php echo "<a href='javascript:approveProduct(\"".$sqldata3[0]->sellerpostproduct_id."\")'><i class='fas fa-check'></i></a>";?> 
 </td>












		
	
		  
		
		
		  
		  
	</form>
	
	<form action="<?php echo base_url();?>Customer_add_renegotiate" method="POST" enctype="multipart/form-data">
       <tbody>
	   
	    <tr  style="text-align:center;">
		
		
		


				</div>
				
				
				
	
	
	<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo  $sqldata[0]->productname;?>">					
			
	<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata[0]->id;?>">	
  <input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata[0]->productid;?>">
								
 <input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
				
	<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sessi;?>">
								
								
	<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo  $sqldata[0]->category;?>">
								
								
<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo  $sqldata[0]->companyname;?>">
								
								
									
<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">
								
<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">
<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">
					
<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo  $sqldata[0]->price;?>">
<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo  $sqldata[0]->punits;?>">
<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo  $sqldata[0]->supplyability;?>">
<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">
<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo  $sqldata[0]->pstates;?>">
								
								
								
<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo  $sqldata[0]->quantity;?>">
<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo  $sqldata[0]->units;?>">
<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">

<input type="hidden" class="form-control" id="selprice" name="selprice"  value="<?php echo $sqldata3[0]->selprice;?>">
<input type="hidden" class="form-control" id="sunits" name="sunits"  value="<?php echo $sqldata3[0]->sunits;?>">
<input type="hidden" class="form-control" id="sellerpostproduct_id" name="sellerpostproduct_id"  value="<?php echo  $sqldata3[0]->sellerpostproduct_id;?>">

<input type="hidden" class="form-control" id="bquantity" name="bquantity"  value="<?php echo  $sqldata2[0]->bquantity;?>">

<input type="hidden" class="form-control" id="bsupplyability" name="bsupplyability"  value="<?php echo $sqldata2[0]->bsupplyability;?>">
<input type="hidden" class="form-control" id="bprice" name="bprice"  value="<?php echo $sqldata2[0]->bprice;?>">
<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php echo  $sqldata2[0]->bunits;?>">




 		
		
			
			<td style="width:290px"> 
			
			
			<div class="form-row m-2"> 
			
									
									<input type="text" class="form-control col-sm-4 mr-2" name="brenegoquantity" placeholder="Quantity" id="brenegoquantity" [(ngModel)]="person.name" />
								<div class="col-sm-3">  
							<select class="form-control col-sm-0" id="brenegoquantityunit" name="brenegoquantityunit">
									<option value="KG">KG</option>
									<option value="Metric Ton">Metric Ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>
							</select>
					</div>
									
								</div>
							<div class="form-row m-2">
									
									<input type="text" class="form-control col-sm-4 mr-2" name="brenegoprice" placeholder="brenegoprice" id="bprice" [(ngModel)]="person.name"/>/
							<div class="col-sm-3">  
							<select class="form-control col-sm-0" id="brenegounit" name="brenegounit">
							<option value="KG">KG</option>
									<option value="Metric Ton">Metric Ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>
						
							</select>
						
							</div>
								
								</div>	
								
									<a href="#" class="neg"> </a>
								<button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2" name="btnsubmit_rengo" id= "btnsubmit_rengo" role="submit"  onclick= "return validate_selnego()">Re-Negotiated</a></button>								
							 
								 
								 <button style="background-color:orange" type="button" class="btn btn-info btn-sm mt-2 offset-sm-2" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#final_Negotiated">Final Negotiation</button>
								 
								 
				  <div class="modal fade" id="final_Negotiated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">finel?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Final</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2"  name="btnsubmit_final" id= "btnsubmit_final" role="submit"  onclick= "return validate_selnego()">Final-Negotiated</a></button>
        </div>
      </div>
    </div>
  </div>				 
								 
								 
								 
								 
								 
								 
								 
								 
								 
								 
								 
								 
								 
							
								</td>
		
		
		<td style="font-size:15px; width:150px;">Buyer's Quantity <br /><small style="color:orange;"><b><?php echo  $sqldata4[0]->brenegoquantity. " / " .$sqldata4[0]->brenegoquantityunit;?></b></small><br/>
		Buyer's price <br /><small style="color:orange;"><b><?php echo  $sqldata4[0]->brenegoprice. " / " .$sqldata4[0]->brenegounit;?></b></small><br/>
		
		
		<b><?php  if($sqldata4[0]->selapprove == 0) {echo 'Pending';}else if($sqldata4[0]->selapprove == 2) {echo 'Rejected';}else if($sqldata4[0]->selapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_sellnegoquotation/auc_no/'.$sqldata[0]->id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata4[0]->selapprove == 0) {echo 'Approved-check in final Approval!';}?></b>
	
	 
	
		
		
		</td>
 
		</tr>
	
	
	   <tr style="text-align:center;">
	   		
 		
	
		
			
		<td style="font-size:15px; width:150px;">Seller Re_Negotiation Price<br /><small style="color:orange;"><b><?php echo  $sqldata5[0]->sellrenegoprice. " / " .$sqldata5[0]->sellrenegounits;?></b></small><br/>
		
		
		
		
		
		
		
		
		
	<b><?php  if($sqldata5[0]->custapprove == 0) {echo 'Pending';}else if($sqldata5[0]->custapprove == 2) {echo 'Rejected';}else if($sqldata5[0]->custapprove == 1) {echo 'Approved!' ."</br> "."<a href=".base_url().'/Vendor_sellnegoquotation/auc_no/'.$sqldata[0]->id." target='_blank'><i class='fa fa-download'></i></a>";}else if($sqldata5[0]->custapprove == 0) {echo 'Approved-check in final Approval!';}?></b>	
	
		
		
	</td>
		  
		
		
		  
		  
	</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</td>
			 
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
	
											
	
		 
		 <div class="form-inline">
		 <div class="col-md-6">

			  <div class="view overlay z-depth-1-half">
				<?php $img = unserialize($sqldata[0]->uploadproductimage)?>
					<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="120" height="100">
				<div class="mask rgba-white-light"></div>
									
<p class="w-auto small"><h6><b>Description:</b> <?php echo  $sqldata[0]->description;?></h6></p>					
					
			


<h6 style="color:green;"><b>Supply Ability: <?php echo  $sqldata[0]->quantity." "; echo  $sqldata[0]->units;?></b></h6>

<p><b>Supplier Price:</b><?php echo  $sqldata[0]->price."/"; echo $sqldata[0]->punits;?></p>

<h6 style="color:orange;"><b>Live Stock: <?php echo  $sqldata[0]->supplyability." "; echo  $sqldata[0]->supplyunits;?></b></h6>
				
								
								
								
								
			  </div>

			  <br />

			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-6">
			
			
			
		
			
									
								
								<p><b>Product Id:</b></br><?php echo  $sqldata[0]->productid;?></p>
								
								
							
								
<p><b>Category:</b></br><?php echo  $sqldata[0]->category;?></p>
								
								
								

								
<h6><b>Posted Date:</b></br> <?php echo  $sqldata[0]->datetime;?></h6>
								
<h6><b>Estimated Delivery: </b><br> <?php echo  $sqldata[0]->estdeltime;?></h6>
							
								
<h6 style="color:purple;"><b>Validity Till:</b><br> <?php echo  $sqldata[0]->productvalidityto;?></h6>
								
			
			
			
			
					 
			 
			  

			</div>
		
		
							
								
			</div>
		
	
	
	
	
	
	
	
	
	
	

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
							
							
					
<script>

function approveProduct(sellerpostproduct_id)
{
  alert(sellerpostproduct_id);
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
                         url:$baseURL+'customer_contactsupplier/approveProduct',
                         data:'sellerpostproduct_id='+sellerpostproduct_id,
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
			
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							

