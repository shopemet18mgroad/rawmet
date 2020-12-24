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
          <a class="btn btn-primary" href="<?php echo base_url();?>home_login">Logout</a>
        </div>
      </div>
    </div>
  </div>
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
  <script>
		function admin_buyerapprove(varab){
			$.get('<?php echo base_url() .'Admin_approvebuyer/approve_buyer/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_approvebuyer';?>'
					return true;
				}else{
					swal("Alert!", "Company Name Already Exists", "error");
					return false;
				}
			 });
			
		}


 </script>
  <script>
		function admin_sellerapprove(varab){
			$.get('<?php echo base_url() .'Admin_approvevendor/approve_seller/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_approvevendor';?>'
					return true;
				}else{
					swal("Alert!", "Company Name Already Exists", "error");
					return false;
				}
			 });
			
		}
</script>
<script>
 function validatearry2(){
	   var company = document.getElementById('bcompanyname').value;
	   var user = document.getElementById('busername').value;
	   if(company == '' || user == ''){
		   swal("Alert!", "Company Name or UserName Cannot Be Left Blank", "error");
					return false;
			}
			
	 
		var signeddoc = document.getElementsByName('bsigneddocument[]');

		
		for(var ab = 0; ab<signeddoc.length; ab++){
			if(signeddoc[ab].value == ""){
				swal("Alert!", "Please Select File to Upload!", "error")
				//alert("Please Select Files To Upload");
				return false;
			}
		}
 }
 
 </script>
  <script>
 function validatearry(){
	   var company = document.getElementById('vcompanyname').value;
	   var user = document.getElementById('vusername').value;
	   if(company == '' || user == ''){
		   swal("Alert!", "Company Name or UserName Cannot Be Left Blank", "error");
					return false;
			}
			
	 
		var signeddoc = document.getElementsByName('bsigneddocument[]');

		
		for(var ab = 0; ab<signeddoc.length; ab++){
			if(signeddoc[ab].value == ""){
				swal("Alert!", "Please Select File to Upload!", "error")
				//alert("Please Select Files To Upload");
				return false;
			}
		}
 }
 
 </script>

  <script>
		function admin_buyingreq(varab){
			$.get('<?php echo base_url() .'Admin_managebuyrequirements/approve_buyingrequ/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_managebuyrequirements';?>'
					return true;
				}
			 });
			
		}
</script>

</body>

</html>