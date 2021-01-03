
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
		function vendor_quotesapproval(varab){
			$.get('<?php echo base_url() .'Vendor_custquoteapproval/approve_quotes/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Vendor_custquoteapproval';?>'
					return true;
				}
			 });
			
		}


 </script>
  <script>
  
function validateb{

	var description = document.getElementById("description").value;

	

	var price = document.getElementById("price").value;
	var quantity = document.getElementById("quantity").value;
	var units = document.getElementById("units").value;
	var aifeatured = document.getElementById("aifeatured").value;
	var fobprice = document.getElementById("fobprice").value;
	var uploadproductimage = document.getElementById("uploadproductimage").value;
	var minoderquat = document.getElementById("minoderquat").value;
	var supplyability = document.getElementById("supplyability").value;
	var supplyunits = document.getElementById("supplyunits").value;
	var quantpermonth = document.getElementById("quantpermonth").value;
	var estdeltime = document.getElementById("estdeltime").value;
	var pstates = document.getElementById("pstates").value;
	var pcities = document.getElementById("pcities").value;
	var types = document.getElementById("types").value;
	var payable = document.getElementById("payable").value;
	
	 
	

if(description == ''|| productname == '' || productid == '' || companyname == '' || category == '' || description == '' || price == '' || quantity == '' || units == '' || aifeatured == '' || fobprice == '' || uploadproductimage == '' || minoderquat == '' || supplyability == '' || supplyunits == ''|| quantpermonth == ''|| estdeltime == ''|| pstates == ''|| pcities == ''|| types == ''|| payable == ''){
		swal("Alert!", Desc, City, State, Pin  cannot leave any field blank!", "error"); 
		

		return false;
}
}
</script>
 <script>
  
function validatebuyer(){

	var payable = document.getElementById("payable").value;
	var productname = document.getElementById("productname").value;

	

if(payable == '' || productname == '')  {
		swal("Alert!",  "Buyer Name, Company Name, Company Type, Contact Person, Contact Number, E-Mail, User Name, Password , Repeat Password, Pan, GST, Address, Street, City, State, Pin  cannot leave any field blank!", "error");
		return false;
	}
	if (description.value.length < 10 || description.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (description.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	
	
	
}
  </script>

	  





 </body>
 </html>