<?php ?>
        <!-- End of Topbar -->
<link href="<?php echo base_url()."web_files2/";?>css/mediaform.css" rel="stylesheet" type="text/css">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
                       				                           

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
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
				  
                <a  href="<?php echo base_url()."admin_editsellerprofile/index/".urldecode($sqldata[0]->sellerid).'/'.urldecode($sqldata[0]->vcompanyname);?>"><i class="fas fa-edit"></i></a>
				<i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i> 
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
				
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td>
						</tr>
						<tr>
						<td><b>Name</b></td>
								<td><?php echo $sqldata[0]->vname;?></td>
							</tr> 
								<tr>
						<td><b>Seller id</b></td>
								<td><?php echo $sqldata[0]->sellerid;?></td>
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
								<td><b>Type of Dealer</b></td>
								<td><?php echo $sqldata[0]->dealer_type;?></td>
							</tr>
							<tr>
							
								<td><b>Contact Number</b></td>
								<td><?php echo $sqldata[0]->vcontactnumber;?></td>
							</tr> 
							<tr>
								<td><b>Pan</td>
								<td><?php echo $sqldata[0]->vpan;?></td>
							</tr> 	
							<tr>
								<td><b>GST</td>
								<td><?php echo $sqldata[0]->vgst;?></td>
							</tr> 
							<tr>
								<td><b>PCB</b></td>
								<td><?php echo $sqldata[0]->vpcb;?></td>
							</tr> 
                            <b><tr>
								<td><b>Reference Name</b></td>
								<td><?php echo $sqldata[0]->vrefer;?></td>
							</tr> 
						
				
						<tr>
								<td><b>Email</b></td>
								<td><?php echo $sqldata[0]->vemail;?></td>
							</tr> 
							<tr>
								<td><b>Username</b></td>
								<td><?php echo $sqldata[0]->vusername;?></td>
							</tr> 
							<tr>
								<td><b>Password</b></td>
								<td>********</td>
							</tr> 	
							<tr>
								<td><b>Repeat Password</b></td>
								<td>********</td>
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
