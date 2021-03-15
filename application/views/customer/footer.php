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
          <a class="btn btn-primary" href="<?php echo base_url();?>Home">Logout</a>
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
 function validate_user_password(){
	 
	var user = document.getElementById('boldpassword').value;
	var user2 = document.getElementById('bnewpassword').value;
	var user3 = document.getElementById('bconfirmpassword').value;
	
	if(user == "" || user2 == "" || user3 == ""){
			 swal("Alert!", "Old Password, New Password and Confirm Password Cannot Be Left Blank","error");
		 return false; 
	 }
	 
	if (user2 != user3) {
		swal("Both the Password Should Match");
		return false;
  } 
 }

function validate_password(){
	var user = document.getElementById('boldpassword').value;
	$.get('<?php echo base_url() .'registration/passwordverify_buyer/'; ?>'+user, function(data2){						
				 if($.trim(data2) == "HI"){
					return true;
				}else{
					swal("Alert!", "Old Password Doesnt Match","error");
					//alert("Hi");
					return false;
				}
			 }); 
 }
 </script>
 
  <script>
 function product_id(){
	 var cat = document.getElementById('category').value;
	  var cat2 = document.getElementById('productname').value;
	   var d = new Date();
	   var m = d.getHours();
	   var n = d.getMinutes();
	   var s = d.getSeconds();
	 if(cat == 'Select'){
		 swal("Alert!", "Please Select Categoery First", "error");
		 return false;
	 }
	 if(cat2.length<6){
		  document.getElementById('productid').value = "RAW/"+cat2+"/"+cat+"/"+m+"/"+n+"/"+s;
	 }
 }
 </script>
 
  <script>
 function validate_prodid(){
	 var vname = document.getElementById('vname').value;
	 var productid = document.getElementById('productid').value;
	 var productname = document.getElementById('productname').value;
	 var bquantity = document.getElementById('bquantity').value;
	 var bprice = document.getElementById('bprice').value;
	  var bunits = document.getElementById('bunits').value;
	   var bsupplyability = document.getElementById('bsupplyability').value;
	 if(vname == ""||productid=="" || productname=="" ||bquantity =="" || bprice=="" ||bunits=="" ||bsupplyability==""){
		 swal("Alert!", "Company Name Cannot Be Left Blank","error");
		 return false;
		 
		 
	 }
	  $.get('<?php echo base_url() ."customer_add_contactsupplier/index/"; ?>'+productname+'/'+vname+'/'+productid+'/'+bquantity+'/'+bprice+'/'+bunits+'/'+bsupplyability, function(data2){						
				 if($.trim(data2) == "HI"){
					return true;
				}else{
					swal("Alert!", "Product Name Already Exists", "error");
					return false;
				}
			 });
 }
 </script>
 
 
  
 <script>
		$('#gettable_quotenegotiation').on('keyup', function(){
			var contents = $('#gettable_quotenegotiation').val(); 
			$.get('<?php echo base_url() .'customer_sellernegotiatedquote/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_quotenegotiation').html(data);
			});
		});
	
 </script>
 
 <script>
		function cust_quoteapprove(varab){
			$.get('<?php echo base_url() .'Customer_renegotiation/approve_quote/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Customer_renegotiation';?>'
					return true;
				}
			 });
			
		}


 </script>
 
 <script>
		function cust_reqapprove(varab){
			$.get('<?php echo base_url() .'Customer_negotiated/approve_requ/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Customer_negotiated';?>'
					return true;
				}
			 });
			
		}


 </script>
 <script>
  
function validate_neg(){

	var bprice = document.getElementById("bprice").value;
	var bunits = document.getElementById("bunits").value;


if(bprice == '' || bunits == ''){
		swal("Alert!",  "Buyer Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin  cannot leave any field blank!", "error");
		return false;
	}

	
}
  </script>
  

  

 
 </body>
 </html>