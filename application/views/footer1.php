   <!-- Footer -->
      <!-- Footer -->
	  
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
		
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url();?>Logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  
   <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="modal fade" id="new_userlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe" aria-hidden="true">
    <div class="modal-dialog" role="document">
	  
      <div class="modal-content">
	
        <div class="modal-header">
		
		
         <img  src="<?php echo base_url()."web_files/";?>img/Rawmet.png" class="img mx-auto d-block" alt="" width="auto" height="100px">
	
		
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
     
			  <form class="user" action="<?php echo base_url()."home/login";?>" method="post">
			    <div  class="text-center">
          <center><h5 class="modal-title" id="exampleModalLabel">Login</h5></center>
		</div>
                    <div class="form-group">
                      <input type="text" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter ID..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button name="submit" type="submit"  class="btn btn-primary btn-user btn-block" onclick="return userid()">
                      Login
                    </button>
                    <!-- <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                 
				  
				  <div class="text-center">
				  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="hidden" class="form-check-input" value="Buyer" name="optradio" checked>
  </label>
</div>

	</div>			  
		 </form>
        
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		   <a href="<?php echo base_url();?>home_buyer_register"><button type="button" class="btn btn-warning">Register Here</button></a>
		  <!--<button type="submit" href="<?php //echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2"  name="btnsubmit_final" id= "btnsubmit_final" role="submit"  onclick= "return validate_selnego()">Final-Negotiated</a></button>-->
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  <div class="modal fade" id="subscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe" aria-hidden="true">
    <div class="modal-dialog" role="document">
	  
      <div class="modal-content">
	
        <div class="modal-header">
		
		
         <img  src="<?php echo base_url()."web_files/";?>img/Rawmet.png" class="img mx-auto d-block" alt="" width="auto" height="100px">
	
		
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
        <div class="modal-body">
     
			  <form class="user" action="<?php echo base_url()."home/ProcesSubscription";?>" onsubmit="return checkforcheckbox()" method="post">
			   
			   <div class="form-group row">
				<label for="buyerid" class="col-sm-4 col-form-label">Buyerid</label>
				<div class="col-sm-4">
					<input type="text" readonly class="form-control-plaintext" value="<?php echo $sessi['sessi'];?>">
				</div>
			</div>
                
			
			
			
			
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-4 col-form-label">Subscription Amount</label>
				<div class="col-sm-4">
					<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="6000">
				</div>
			</div>


			<div class="form-group row">
				<label for="staticEmail" class="col-sm-4 col-form-label">SGST</label>
				<div class="col-sm-4">
					<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="9%">
				</div>
			</div>
                   
            <div class="form-group row">
				<label for="staticEmail" class="col-sm-4 col-form-label">CGST</label>
				<div class="col-sm-4">
					<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="9%">
				</div>
			</div>      
             
<hr>
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-4 col-form-label">Total</label>
				<div class="col-sm-4">
					<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="8858">
				</div>
			</div>  
<hr>			
			<div class="form-group row">
				
				<div class="col-sm-10 ml-4">
				 <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
				<label class="form-check-label" for="flexCheckChecked">
					Check here to indicate that you have read and agree to the terms of the Rawmet Agreement.
				</label>	
				</div>
			</div>
		
        
        
        </div>
        <div class="modal-footer">

          <button name="submitmodal" type="submitmodal" class="btn btn-success">Pay</button>

		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		
		 
        </div>
		 
      </div>
    </div>
  </div>
  </form>
 <!-- Bootstrap core JavaScript-->
 
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."web_files/";?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url()."web_files/";?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-pie-demo.js"></script>
  
  <!--data table-->
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>

  

  

 
 </body>
 </html>
 
 <script>
function userid(){
var exampleInputEmail = document.getElementById("exampleInputEmail").value;	
var exampleInputPassword = document.getElementById("exampleInputPassword").value;	
 


if(exampleInputEmail == ''  || exampleInputPassword == '' ){
		swal("Alert!",  "ID and Password cannot be blank!", "error");
		return false;
	}
			
} 
function checkforcheckbox(){
	if($("#flexCheckChecked").is(':checked')){
		return true;
	}else{
		swal("Alert!",  "Please Accept Terms and Conditions!", "error");
		//alert("Please Accept Terms and Conditions");
		return false;
	}
}
</script>