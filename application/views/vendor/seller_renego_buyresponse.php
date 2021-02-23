



<!---------------------------------------------------------------------->












        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customer Dashboard</h1>
         
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
 		
			<td style="font-size:15px; width:150px;">Buyer Base Quantity:<br /><small style="color:orange;"><b><?php echo  $sqldata1[0]->quantity.' '.$sqldata1[0]->units;?></b></small></td>
			
			<td>Seller Negotiated Price<br /><small style="color:orange;"><b><?php echo  $sqldata1[0]->sellerprice.' / '.$sqldata1[0]->bsupplyability;?></b></small></td>
		
		
			<td>Buyer Negotiated Price:<br /><small style="color:orange;"><b><?php echo  $sqldata1[0]->buyer_nego_price.' / '.$sqldata1[0]->buyer_nego_units;?></td>
			
			<td></td>
			 
		</tr>
	
	
	   <tr style="text-align:center;">
	   		
 		
		<td style="font-size:15px; width:150px;">Seller Re_Negotiation Price<br /></td>
			
		<td><center><input required style="width:100px;" type="text" class="form-control" id="seller_renego_price" name="seller_renego_price"></center></td>
		
		
		<td><button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm" style="font-size:13px" name="submit" role="submit" onclick="return validate()"><b>Negotiate</b></button>
		<br/>
		
		<button type="button" class="btn btn-outline-warning btn-sm mt-1" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#final_Negotiated">Final Negotiated</button>
		
		
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
	<small>	  <?php foreach($sqldata as $row){?>
		<td style="color:orange;" ><b><?php  if($row->buyer_approval == 0) {echo $sqldata[0]->seller_renego_price.' / '.$sqldata[0]->bsupplyability ."</br>"."Pending";}else if($row->buyer_approval == 2) {echo 'Rejected';}else if($row->buyer_approval == 1) {echo 'Approved';}else if($row->buyer_approval == 3) {echo 'Pending to Approve';}else if($row->buyer_approval == 5) {echo 'Approved-check in final Approval';}?></b></td>
		
		
		
		
		
		
		
		
		
		<?php }?>	
	</small>
	
	</td>
			 
	</tr>
	
	
		   <tr  style="text-align:center;">
	   		
 		
			<td>Buyer's Final Price<br /><small style="color:orange;"><b><?php echo  $sqldata1[0]->buyer_final_price.' / '.$sqldata1[0]->bsupplyability;?></b></small></td>
		
		
		 <br/>
		

	<small>	  <?php foreach($sqldata1 as $row){?>
		<td style="color:orange;" ><b><?php  if($row->sel_status == 0) {echo "Pending";}else if($row->sel_status == 2) {echo 'Rejected';}else if($row->sel_status == 1) {echo 'Approved';}else if($row->sel_status == 3) {echo 'Pending to Approve';}else if($row->sel_status == 5) {echo 'Approved-check in final Approval';}?></b></td>
		
	<?php }?>	
	</small>
	
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
	<p><b>Category :</b> <?php echo  $sqldata[0]->category;?></p>
	<p><b>Stock :</b> <?php echo  $sqldata[0]->quantity. " / " .$sqldata[0]->units;?>"</p> 
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
 
      