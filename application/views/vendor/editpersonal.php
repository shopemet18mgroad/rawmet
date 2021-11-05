 <head>
 <link href="<?php echo base_url()."web_files/";?>css/responsive.css" rel="stylesheet" type="text/css">

 </head>
<?php 
	//include('./header.php');
?>

        <div class="container-fluid">

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Personal Info</h6>
               			   					                <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="container">
					 <table class="table table-sm table-borderless table-responsive col-md-8">
					 <thead><th width="60%">Profile</th>
					 
					
					 </thead>
						<tbody>
						
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
							
							<form action = "<?php echo base_url();?>vendor_basicinfo_update" method="POST" enctype="multipart/form-data">
							<td>Supplier Id</td>
								<td><input class="form-control w-auto" type="text" id="sellerid" name="sellerid" value="<?php echo $sqldata[0]->sellerid; ?>" readonly></td>
							</tr> 
							<tr>
								<td>Company Name</td>
								<td><input class="form-control w-auto" type="text" id="vcompanyname" name="vcompanyname" value="<?php echo $sqldata[0]->vcompanyname; ?>"></td>
							</tr> 
								<tr>
								<td>Supplier Name</td>
								<td><input class="form-control w-auto" type="text" id="vname" name="vname" value="<?php echo $sqldata[0]->vname; ?>"></td>
							</tr> 
							
							
													<tr>
					
							<td class="btxt">Company Type:</td>
						<td> <select class="form-control w-auto" id="vcompanytype" name="vcompanytype">
								<option default>PVT Ltd.</option>
					 
						<option value="OPC PVT Ltd.">OPC PVT Ltd.</option>
						<option value="Ltd">Ltd</option>
						<option value="LLP">LLP</option>
				        <option value="Partnership">Partnership</option>
						<option value="proprietorship">proprietorship</option>
						<option value="Others">Others</option>
				    </select> </td>
						</tr>  
						
						
						
						
						
					<tr>
							<td class="btxt">Type of Dealer:</td>
							<td>  <select class="form-control w-auto" id="dealer_type" name="dealer_type">
							<option default>Manufacturer</option>
					      
						<option value="Wholesaler">Wholesaler</option>
						<option value="Re-saler">Re-saler</option>
						<option value="Dealer">Dealer</option>
				        <option value="Distributor">Distributor</option>
						<option value="Others">Others</option></td>
						
				    </select> 
						</tr>	
						 	
							<tr>
								<td>Contact Person</td>
								<td><input class="form-control w-auto" type="text" id="vcontactperson" name="vcontactperson" value="<?php echo $sqldata[0]->vcontactperson; ?>"></td>
							</tr> 
							<tr>
								<td>contact number</td>
								<td><input class="form-control w-auto" type="text" id="vcontactnumber" name="vcontactnumber" value="<?php echo $sqldata[0]->vcontactnumber; ?>"></td>
								<td>
			
							</tr>
                          <tr>
								<td>Pan</td>
								<td><input class="form-control w-auto" type="text" id="vpan" name="vpan" value="<?php echo $sqldata[0]->vpan; ?>"></td>
								<td>
			
							</tr> 
							<tr>
								<td>GST</td>
								<td><input class="form-control w-auto" type="text" id="vgst" name="vgst" value="<?php echo $sqldata[0]->vgst; ?>" ></td>
							</tr> 
							<tr>
								<td>Pcb</td>
								<td><input class="form-control w-auto" type="text" id="vpcb" name="vpcb" value="<?php echo $sqldata[0]->vpcb; ?>" ></td>
							</tr>							
							<tr>
								<td>Email</td>
								<td><input class="form-control w-auto" type="text" id="vemail" name="vemail" value="<?php echo $sqldata[0]->vemail; ?>" ></td>
								
							</tr> 
							<tr>
								<td>Username</td>
								<td><input class="form-control w-auto" type="text" id="vusername" name="vusername" value="<?php echo $sqldata[0]->vusername; ?>" ></td>
							</tr>
						
							 	
							<tr>
								<td>Postal Address</td>
								<td><textarea class="form-control w-auto" type="text" id="vaddress" name="vaddress" value="<?php echo $sqldata[0]->vaddress; ?>"><?php echo $sqldata[0]->vaddress; ?></textarea></td>
							</tr> 
							<tr>
								<td>City</td>
								<td><input class="form-control w-auto" type="text" id="vcity" name="vcity" value="<?php echo $sqldata[0]->vcity; ?>"></td>
							</tr>
							<tr>
							<td>State</td>
								<td><input class="form-control w-auto" type="text" id="vselectstate" name="vselectstate" value="<?php echo $sqldata[0]->vselectstate; ?>" ></td>
								
							</tr>
							<tr>
								<td>Pincode</td>
								<td><input class="form-control w-auto" type="text" id="vpincode" name="vpincode" value="<?php echo $sqldata[0]->vpincode; ?>" ></td>
							</tr>
							<tr>
								<td>Product Description</td>
								
      <td><textarea class="form-control" placeholder="Product Description" id="vproddescrip" name="vproddescrip" rows="3" requried value="<?php echo $sqldata[0]->vproddescrip; ?>" ></textarea></td>
	
 
							</tr>

							
							
													
						</tbody>
					</table>			

				<input type="submit" class="btn btn-primary offset-sm-3 mt-2" name="submit" value="Update">
												
				<input type="reset" class="btn btn-primary offset-sm-1 mt-2" value="Reset">
				</form>							
				<a href="buyer_dashboard"><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>
				
				</div>
													
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
    <!--  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
 
 <?php 
	//include('./footer.php');
?>
</body>

</html>
