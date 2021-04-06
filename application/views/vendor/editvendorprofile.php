<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="container">  
			<div class="row">
	
    <div class="col-sm-6" style="">
		<td><b>Supplier Id</b></td>
	</div>
    <div class="col-sm-6" style=" ">
		<a style="float:right" href="<?php echo base_url();?>vendor_editpersonal"><i class="fa fa-edit">Edit</i></a>
		<td><?php echo $sqldata[0]->sellerid; ?> </td>
	</div>
	
	 <div class="col-sm-6" style="">
		<td><b>Supplier Name</b></td>
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vname; ?> </td>
		
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Company Name</b></td>	  
	</div>
     <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vcompanyname;?></td> 
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Company Type</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vcompanytype;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Contact Person</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vcontactperson;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Contact Number</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vcontactnumber;?></td>
	</div>
	
	
	<div class="col-sm-6" style=" ">
	 <td><b>Email</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vemail;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Type of Dealer</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->dealer_type;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Pan</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vpan;?></td>
	</div>
		
	<div class="col-sm-6" style=" ">
	 <td><b>GST</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vgst;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Pcb</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vpcb;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Username</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vusername;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Address</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vaddress;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>City</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vcity;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Select State</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vselectstate;?></td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Pin Code</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td><?php echo $sqldata[0]->vpincode;?></td>
	</div>
	
	
  </div>
 </div>	

	<br/>
	<br />			
	
<div class="row">
    <div class="col-sm-6" style="">
		<td><b>Old Password</b></td>
	</div>
    <div class="col-sm-6" style=" ">
	<a style="float:right" href="<?php echo base_url();?>vendor_editpassword"><i class="fa fa-edit">Edit</i></a>
		<td>******</td>
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>New Password</b></td>	  
	</div>
     <div class="col-sm-6" style=" ">
		<td>******</td> 
	</div>
	
	<div class="col-sm-6" style=" ">
	 <td><b>Confirm Password</b></td>	  
	</div>
    <div class="col-sm-6" style=" ">
		<td>******</td>
	</div>
</div>
</div>
</div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
   <!--   <footer class="sticky-footer bg-white">
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








      