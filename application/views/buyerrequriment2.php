
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
          <!-- Page Heading -->
         

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-sm-12 ">
          <div class="card shadow">
            <div class="card-body ">
              <div class="table-responsive">
			  
			   <h5 class="offset-sm-12"><b style="text-align:center;color:red";><center><blink>Live Procurements</blink> </center></b></h5>
			                             <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>
			   <script>
function goBack() {
  window.history.back();
}
</script>
                <table class="table table-striped table-bordered table-sm w-auto small" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr> 
	     <th>Sl.No.</th>
	    <th>Images</th>
	    <th>Product Id</th>
	    <th>Product Name</th>
	    <th>Description</th>
        <th>Location</th>
        <th>Quantity</th>
        <th>Action</th>
		
		
      </tr>
    </thead>
    <tbody>
	  <?php  $count = 1;?>  
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <td data-label="Sl.No."><?php echo $count;?></td> 
	
	    <td data-label="Images"><?php $img = unserialize($row->uploadimage)?>
		  <img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="55px"></td>
			<td data-label="Product Id"><?php echo $row->productid;?></td>
			<td data-label="Product Name"><?php echo $row->productname;?></td>
		
			<td data-label="Description"> <?php echo $row->description;?></td>
			<td data-label="Location"><?php echo $row->bcity;?>
			</td>
			<td data-label="Quantity"><?php echo $row->quantity.' '.$row->units;?></td>	
			
			<td data-label="Action">
			<!--<a href="<?php // echo base_url()."home_login/index/"?>"><button style="font-size:10px;" type="button" class="btn btn-info  mt-2">Send Offer</button></a>-->
			
			 <button name="submit" type="submit" onclick="return userid4()"  data-toggle="modal" data-target="#basicModal"class="btn btn-primary"><i class="fa fa-sign-in"></i>Send Offer</button>

			
			</td>
			
				<?php $count++;?>
			
		
      </tr>      
     <?php }?>	
    </tbody>
  </table>
  
		</div>
		</div>
		</div>
		</div>
		</div>
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

 
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
						 
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

 
		
		
         <img  src="<?php echo base_url()."web_files/";?>img/Rawmet.png" class="img mx-auto d-block" alt="" width="auto"  >
	
		
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        
</div>
<div class="modal-body">
<center>


<div class="form-group p-1">
							<form class="user" action="<?php echo base_url()."Home_login";?>" method="post">
								<input type="text" class="form-control" id="exampleInputEmail" name="user" placeholder="User ID" size="25" >
							
							</div>
						  
						  <div class="form-group p-1">
							<input type="password" class="form-control" id="exampleInputPassword" name="pass" placeholder="Password" size="25">
							 
 
     <div style="float:left; font-size:12px" class="m-2">  
      <input type="checkbox" onclick="Toggle()">
   <i> Show Password </i>

</div>
 
   </div>
 
  
    <script>
    // Change the type of input to password or text
        function Toggle() {
            var temp = document.getElementById("exampleInputPassword");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
</script>

  
						
						
						  
 <div class="container d-flex justify-content-center">

 						  <div class="form-check-inline">
  <input type="radio" class="form-check-input" id="customCheck2" name="optradio" value="Buyer">
  <label class="form-check-label" for="customCheck2"><b><i>Buyer</i></b></label>
</div>
<div class="form-check-inline">
  <input type="radio" class="form-check-input" id="customCheck" name="optradio" value="Seller">
  <label class="form-check-label" for="customCheck"><b><i>Seller</i></b></label>
</div>
<div class="form-check-inline">
  <input type="radio" class="form-check-input" id="customCheck3"name="optradio" value="Admin">
  <label class="form-check-label" for="customCheck3"><b><i>Admin</i></b></label>
  
</div>
</div>


<button name="submit" type="submit" onclick="return userid4()" class="btn btn-info col-lg-12 mt-3"><i class="fa fa-sign-in"></i><b> Login</b></button>

  </form> 
</center>
</div>
<div class="modal-footer">
<div>
<a class="pl-3 mr-4" href="<?php echo base_url()."email_send";?>"><b><u>Forgot Password?</u></b></a>

<button type="button" class="btn btn-dark" data-dismiss="modal"><b>Close</b></button>
</div>
</div>
</div>
</div>
</div>
