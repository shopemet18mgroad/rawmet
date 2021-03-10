 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 
  
    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?> "></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?> "></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?> "></script>
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js'); ?> "></script>
    
     <!-- Bootstrap core JavaScript-->
     <script src=" <?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?> "></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?> "></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?> "></script> 
   <script>
  function validate_buyer_companyname(){
	  var val = document.getElementById("bcompanyname").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Home_buyer_register/validate_buyer_companyname/'; ?>'+val, function(data2){
alert(data2); die;				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Username Already Exists", "error");
					document.getElementById("bcompanyname").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Name!", "error");
			return false;
		}
  }
  </script>	
  
  
    <script>
  function validate_buyer_companyname(){
	  var val = document.getElementById("bcompanyname").value;
		if(val != ''){
			 $.get('<?php echo base_url().'Home_buyer_register/validate_buyer_companyname/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Seller Company Name Already Exists", "error");
					document.getElementById("bcompanyname").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter Seller Company Name!", "error");
			return false;
		}
  }
  </script>