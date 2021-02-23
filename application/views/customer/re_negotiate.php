

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Customer Dashboard</h1>
         
          </div>

          
              <!-- Content Row -->

                    <div class="row">

                      <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-5">
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
	<form action="<?php echo base_url();?>customer_add_sellerResponse_renego" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
       <table style="align:center" class="table table-striped table-bordered table-sm w-auto" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
    
    </thead>
       <tbody>
	   <tr  style="text-align:center;">
           
 		   <td style="font-size:15px; width:150px;">1st Negotiate <br /><small style="color:orange;"><b><?php echo  $sqldata[0]->sellerprice. " / " .$sqldata[0]->bsupplyability;?></b></small></td>
			<td><input style="width:80px;" type="number" class="form-control" id="buyer_nego_price" name="buyer_nego_price	"></td>			 
			<td>
 
		<button type="submit" href="<?php echo base_url();?>" class="btn btn-outline-success btn-sm" name="submit" role="submit">Negotiate</button>
			<button type="button" class="btn btn-outline-primary  btn-sm"><i class="fas fa-check"></i></button>		
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button></td>
			<td>
			<small>Pending</small>
		</td> 
	</tr>
	<tr style="text-align:center;">
			<td style="font-size:15px; width:150px;">2nd Negotiate <br /><small>350/KG</small></td>
			<td><input style="width:80px;" type="number" class="form-control" id="bname" name="bname"></td>			 
			<td>		
			<button type="button" class="btn btn-outline-success btn-sm">Negotiate</button>
			<button type="button" class="btn btn-outline-primary  btn-sm"><i class="fas fa-check"></i></button>		
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button></td>
		
			<td style="width:80px;">
			<small>Pending</small>
		</td> 			
	</tr>
	<tr style="text-align:center;">  
			<td style="font-size:15px; width:150px;">3rd Negotiate <br /><small>550/KG</small></td>
			<td><input style="width:80px;" type="number" class="form-control" id="bname" name="bname"></td>			 
			<td>		
			<button type="button" class="btn btn-outline-success btn-sm">Negotiate</button>
			<button type="button" class="btn btn-outline-primary  btn-sm"><i class="fas fa-check"></i></button>		
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button></td>
			<td style="width:80px;">
			<small>Pending</small>
		</td>  			
    </tr> 
	<tr style="text-align:center;">  
			<td style="font-size:15px; width:150px;">4th Negotiate <br /><small>650/KG </small></td>
			<td><input style="width:80px;" type="number" class="form-control" id="bname" name="bname"></td>			 
			<td>		
			<button type="button" class="btn btn-outline-success btn-sm">Negotiate</button>
			<button type="button" class="btn btn-outline-primary  btn-sm"><i class="fas fa-check"></i></button>		
			<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button></td>
			
		<td>
			<small>Pending</small>
		</td> 			
    </tr>	 			
    
                </tbody>







  </table>
                                </div>
                            </div>
                        </div>
						
						<div class="col-xl-6 col-lg-7">
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
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="30%" height="100%">
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
</form>
                                </div>
                            </div>
                        </div>
                    </div>
             

           

        
         

          
         
		  
		  
		 
		 
		 
    
</div>
 
 
 