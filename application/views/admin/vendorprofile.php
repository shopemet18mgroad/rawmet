
        <!-- End of Topbar -->
			<link href="<?php echo base_url()."web_files2/";?>css/mediaform.css" rel="stylesheet" type="text/css">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
			

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
               <a  href="<?php echo base_url()."admin_editcustprofile/index/".urldecode($sqldata[0]->buyerid).'/'.urldecode($sqldata[0]->bcompanyname);?>"><i class="fas fa-edit"></i><a>
			                             				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td>
						</tr>
						<tr>
						<td><b>Name</b></td>
								<td><?php echo $sqldata[0]->bname; ?></td>
							</tr> 
							<tr>
						<td><b>Buyer Id</b></td>
								<td><?php echo $sqldata[0]->buyerid; ?></td>
							</tr>
							<tr>
								<td><b>Company Name</b></td>
								<td><?php echo $sqldata[0]->bcompanyname;?></td>
							</tr> 
							<tr>
								<td><b>Company Type</b></td>
								<td><?php echo $sqldata[0]->bcompanytype;?></td>
							</tr> 	
							<tr>
								<td><b>Contact Person</b></td>
								<td><?php echo $sqldata[0]->bcontactperson;?></td>
							</tr> 
							<tr>
								<td><b>Contact Number</b></td>
								<td><?php echo $sqldata[0]->bcontactnumber;?></td>
							</tr> 
							<tr>
								<td><b>Pan</b></td>
								<td><?php echo $sqldata[0]->bpan;?></td>
							</tr> 
							<tr>
								<td><b>GST</b></td>
								<td><?php echo $sqldata[0]->bgst;?></td>
							</tr> 
								<tr>
								<td><b>Reference Name</b></td>
								<td><?php echo $sqldata[0]->brefer;?></td>
							</tr> 

						
			
						<tr>
								<td><b>Mail</b></td>
								<td><?php echo $sqldata[0]->bemail;?></td>
							</tr> 
							<tr>
								<td><b><b>Username</b></td>
								<td><?php echo $sqldata[0]->busername;?></td>
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
								<td><b>Address</b></b></td>
								<td><?php echo $sqldata[0]->baddress;?></td>
							</tr> 
							<tr>
								<td><b>City</b></td>
								<td><?php echo $sqldata[0]->bcity;?></td>
							</tr>	
							<tr>
								<td><b>Select State</b></td>
								<td><?php echo $sqldata[0]->bselectstate;?></td>
							</tr>
							<tr>
								<td><b>pincode</b></td>
								<td><?php echo $sqldata[0]->bpincode;?></td>
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

     

