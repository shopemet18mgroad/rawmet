 
  <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
 
 
 
 
 <div class="col-md-12 col-sm-12 col-lg-12">
              <div class="card shadow mb-4 ml-5">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Personal Details</h6>
                              				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table  table-borderless">
				
						<tbody style="width:5px;">
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
				  
      
							<tr>
							<form action = "<?php echo base_url();?>admin_buyer_basicinfo_update" method="POST" enctype="multipart/form-data">
							<td>Name</td>
								<td><input class="form-control w-50" type="text" id="bname" name="bname" value="<?php echo $sqldata[0]->bname; ?> "></td>
							</tr> 
							<tr>
								<td>Company Name</td>
								<td><input class="form-control w-50" type="text" id="bcompanyname" name="bcompanyname" value="<?php echo$sqldata[0]->bcompanyname; ?>" readonly></td>
								
							</tr> 
								<tr>
								<td>Buyer Id</td>
								<td><input class="form-control w-50" type="text" id="buyerid" name="buyerid" value="<?php echo $sqldata[0]->buyerid; ?>" readonly></td>
							</tr>
					
							<tr>
								<td>Company Type</td>
								<td><input class="form-control w-50" type="text" id="bcompanytype" name="bcompanytype" value="<?php echo$sqldata[0]->bcompanytype; ?>">
							</tr> 	
							<tr>
								<td>Contact Person</td>
								<td><input class="form-control w-50" type="text" id="bcontactperson" name="bcontactperson" value="<?php echo $sqldata[0]->bcontactperson; ?>"></td>
							</tr> 
							<tr>
								<td>Contact number</td>
								<td><input class="form-control w-50" type="text" id="bcontactnumber" name="bcontactnumber" value="<?php echo $sqldata[0]->bcontactnumber; ?>"></td>
								<td>
			
							</tr> 
							<tr>
								<td>Pan</td>
								<td><input class="form-control w-50" type="text" id="bpan" name="bpan" value="<?php echo $sqldata[0]->bpan; ?>"></td>
							</tr> 
							<tr>
								<td>GST</td>
								<td><input class="form-control w-50" type="text" id="bgst" name="bgst" value="<?php echo $sqldata[0]->bgst; ?>"></td>
								<td>
			
							</tr> 
							<tr>
								<td>Reference Name</td>
								<td><input class="form-control w-50" type="text" id="brefer" name="brefer" value="<?php echo $sqldata[0]->brefer; ?>"></td>
								
								<input class="form-control w-50" type="hidden" id="bpassword" name="bpassword" value="<?php echo $sqldata[0]->bpassword; ?>" readonly>
								
								<input class="form-control w-50" type="hidden" id="brepeatpassword" name="brepeatpassword" value="<?php echo $sqldata[0]->brepeatpassword; ?>" readonly>
								<td>
			
							</tr>

						
						</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="36%">Contact Info</th>
					
					 </thead>
						<tbody>
						<td>Email</td>
								<td> <input class="form-control w-50" type="text" id="bemail" name="bemail" value="<?php echo $sqldata[0]->bemail;?>"></td>
							</tr> 
							<tr>
								<td>Username</td>
								<td> <input class="form-control w-50" type="text" id="busername" name="busername" value="<?php echo $sqldata[0]->busername;?>" ></td>
							</tr> 
						 
							<tr>
								<td>Address</td>
								<td><input class="form-control w-50" type="text" id="baddress" name="baddress" value="<?php echo $sqldata[0]->baddress;?>"></td>
							</tr> 
							<tr>
								<td>City</td>
								<td><input class="form-control w-50" type="text" id="bcity" name="bcity" value="<?php echo $sqldata[0]->bcity;?>"></td>
							</tr>	
							<tr>
								<td>Selectstate</td>
								<td><input class="form-control w-50" type="text" id="bselectstate" name="bselectstate" value="<?php echo $sqldata[0]->bselectstate;?>"></td>
							</tr>
							<tr>
								<td>pincode</td>
								<td><input class="form-control w-50" type="text" id="bpincode" name="bpincode" value="<?php echo $sqldata[0]->bpincode;?>"></td>
							</tr>
                              
							
					   </tbody>
					</table>
					<button type="submit" class="btn btn-info offset-sm-4 mt-2">Update</button>
                	
</form>
              </div>
            </div>

            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    