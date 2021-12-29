<?php ?>
        <!-- End of Topbar -->
<link href="<?php echo base_url()."web_files2/";?>css/mediaform.css" rel="stylesheet" type="text/css">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
          </div>

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-md-12 col-sm-12">
              <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Personal Info</h3>
               
                </div>
                <!-- Card Body -->
		<form action="<?php echo base_url(); ?>Admin_vendordetail/reference" method="post">
                <div class="card-body">
				
					 <table class="table table-sm table-borderless">
					
						<tbody >
						<tr>
						<td width="50%" ><b>Seller Id</b></td>
								<td><?php echo $sqldata[0]->sellerid;?></td>
								<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
							</tr> 
						
						<tr>
						<td><b>Name</td>
								<td><?php echo $sqldata[0]->vname;?></td>
							</tr> 
							<tr>
								<td><b>Company Name</b></td>
								<td><?php echo $sqldata[0]->vcompanyname;?></td>
							</tr> 
							<tr>
								<td><b>Company Type</b></td>
								<td><?php echo $sqldata[0]->vcompanytype;?></td>
							</tr> 	
							<tr>
								<td><b>Contact Person</b></td>
								<td><?php echo $sqldata[0]->vcontactperson;?></td>
							</tr> 
							<tr>
								<td><b>Contact Number</b></td>
								<td><?php echo $sqldata[0]->vcontactnumber;?></td>
							</tr> 
							<tr>
								<td><b>Pan</b></td>
								<td><?php echo $sqldata[0]->vpan;?></td>
							</tr> 	
							<tr>
								<td><b>GST</b></td>
								<td><?php echo $sqldata[0]->vgst;?></td>
							</tr> 
							<tr>
								<td><b>PCB</b></td>
								<td><?php echo $sqldata[0]->vpcb;?></td>
							</tr> 

						
						
						<tr>
						     <td><b>Email</b></td>
								   <td>
								  <input type="email" value="<?php echo $sqldata[0]->vemail;?>" name="email"  class="form-control-plaintext " readonly placeholder="Enter Email">
					
								</td>
							</tr> 
							<tr>
								<td><b>Username</b></td>
								<td><?php echo $sqldata[0]->vusername;?></td>
							</tr> 
							
							<tr>
								<td><b>Address</b></td>
								<td><?php echo $sqldata[0]->vaddress;?></td>
							</tr> 
							<tr>
								<td><b>City</b></td>
								<td><?php echo $sqldata[0]->vcity;?></td>
							</tr>	
							<tr>
								<td><b>Select State</b></td>
								<td><?php echo $sqldata[0]->vselectstate;?></td>
							</tr>
							<tr>
								<td><b>Pincode</b></td>
								<td><?php echo $sqldata[0]->vpincode;?></td>
							</tr>
							 <tr>
							<td><label><b>Product Description</b></label></td>
							<td><?php echo $sqldata[0]->vproddescrip;?></td>
                            
                           </tr>
							<tr>
							<td><label><b>Reference</b></label></td>
                             <td><input id="add" type="text" id="vrefer" name="vrefer"> <?php echo $sqldata[0]->vrefer;?><br><br></td>
                           </tr>
						  
					</form>	   
							<tr>
								<td><b>Seller</b></td>
								<td>
								 <input hidden type="radio" class="form-check-input" value="Seller_activate" name="optradio" checked>
								
  <button type="submit" id="<?php echo urldecode($sqldata[0]->sellerid);?>" onclick="admin_sellerapprove(this.id)" class="btn btn-primary">Activate</button></td>
  
							</tr>
                             				
						</tbody>
					</table>							
                
              </div>
			   
            </div>

            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
	  
	  
	 
   
 


	
	

      <!-- End of Main Content -->
