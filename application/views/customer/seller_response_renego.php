





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
    	<form action="<?php echo base_url();?>customer_add_sellerResponse_renego" method="POST" enctype="multipart/form-data">
    </thead>
	
       <tbody>
	   <tr  style="text-align:center;">
	   
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata[0]->bname;?>" readonly>
          
			<input type="hidden" class="form-control" id="vusername" name="vusername"  value="<?php echo $sessi;?>">
			<input type="hidden" value="<?php echo  $sqldata[0]->id;?> "  class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" >
			<input type="hidden" value="<?php echo  $sqldata[0]->bsupplyability;?> "  class="form-control" id="buyer_nego_units" name="buyer_nego_units" >
						
						
 		
		<td style="font-size:15px; width:150px;">Seller's Offer <br /><small style="color:orange;"><b><?php echo  $sqldata[0]->sellerprice. " / " .$sqldata[0]->bsupplyability;?></b></small></td>
			
		<td>
			<input required style="width:80px;" type="text" class="form-control" id="buyer_nego_price" name="buyer_nego_price">	
		</td>
		
		
		<td>
 
		<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm"  name="submit" role="submit" onclick="return validate()"><b>Negotiate</b></a></button>	
		
		 
			<button type="button" class="btn btn-outline-primary  btn-sm"><i class="fas fa-check"></i></button>		
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
			</form>
			<small>	  <?php foreach($sqldata as $row){?>
 
	 
									
		<td style="color:orange;" ><b><?php  if($row->status == 0) {echo  $sqldata[0]->buyer_nego_price. " / " .$sqldata[0]->bsupplyability. "</br>  ". "Pending" ;}else if($row->status == 2) {echo 'Rejected';}else if($row->status == 1) {echo 'Approved!';}else if($row->status == 5) {echo 'Approved-check in final Approval!';}?></b></td>
		

		
        
<?php }?>	</small>
			</td>
			 
	</tr>
	
 
	
	
	
	
	 
	
	
	

  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		 			
    
                </tbody>







  </table>
  
   <table style="align:center" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
		   
    <thead class="bg-primary text-white">
    	<form action="<?php echo base_url();?>Customer_add_finalReq_buyer_selResponse" method="POST" enctype="multipart/form-data">
    </thead>
	
       <tbody>
	   <tr  style="text-align:center;">
	   
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata4[0]->bname;?>" readonly>
           	<input hidden  type="text" class="form-control" id="bname" name="bname"  value="<?php echo  $sqldata4[0]->bname;?>" readonly>			 
			<input type="hidden" value="<?php echo  $sqldata4[0]->seller_mbuyreq_id;?> "  class="form-control" id="seller_mbuyreq_id" name="seller_mbuyreq_id" >
			
			<input type="hidden" value="<?php echo  $sqldata4[0]->bsupplyability;?> "  class="form-control" id="buyer_nego_units" name="buyer_nego_units" >
						
						
 		
		<td style="font-size:15px; width:150px;">2nd Seller Negotiate <br /><small style="color:orange;"><b><?php echo  $sqldata4[0]->seller_renego_price. " / " .$sqldata4[0]->bsupplyability;?></b></small></td>
			
		<td>
			<input required style="width:80px;" type="text" class="form-control" id="buyer_final_price" name="buyer_final_price">	
		</td>
		
		
		<td>
 
		<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm"  name="submit" role="submit" onclick="return validate()"><b>Final<br/> Negotiate</b></a></button>	
		
		 
			<button type="button" class="btn btn-outline-primary  btn-sm"><i class="fas fa-check"></i></button>		
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
			</form>
			
			
			
			
			
			
			<small>	  
			<?php foreach($sqldata5 as $seller){?>
 
	 
									
		<td style="color:orange;" ><b><?php  if($seller->sel_status == 0) {echo  $sqldata5[0]->buyer_final_price. " / " .$sqldata5[0]->bsupplyability. "</br>  ". "Pending" ;}else if($seller->sel_status == 2) {echo 'Rejected';}else if($seller->sel_status == 1) {echo  $sqldata5[0]->buyer_final_price. " / " .$sqldata5[0]->bsupplyability. "</br>  ". "Approved " ."</br> "."<a href=''.base_url().'/Customer_quotation12/auc_no/'.$seller->seller_mbuyreq_id.'' target='_blank'><i class='fa fa-download' aria-hidden='true'></i></a>"   ;}?>
		
		
		</b>
	
		</td>
		

		
        
<?php }?>	</small>
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
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
            <?php $img = unserialize($sqldata[0]->uploadimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="60%" height="100%">
            <div class="mask rgba-white-light"></div>
          </div>
		  <br />

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5">

          
          <p><b>Supper Id :</b><?php echo  $sqldata[0]->sellerid;?> </p> 
		  <p><b>Category :</b> <?php echo  $sqldata[0]->category;?></p>
		  <p><b>Stock :</b> <?php echo  $sqldata[0]->quantity. " / " .$sqldata[0]->units;?>"</p> 
		 
		  

        </div>
		
		  <input style="width:10px" class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
          <a href="#" class="btn btn-primary">Upload!</a>
        <!--Grid column-->
	 
	 
	 
     
     
    
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
 
 <script>

 </script>

      