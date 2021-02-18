<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>css/bootstrap.min" rel="stylesheet">
 

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-9 col-md-9">
		
        <div class="card o-hidden border-0 shadow-lg my-4">
		<div class="text-center">
         <img src="<?php echo base_url()."web_files/";?>img/Rawmet.png" class="img-fluid" alt="" width="30%;" height="200px">
        </div>
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
			
			 
		
              <div class="col-md-6 d-none d-lg-block "></div>
              <div class="col-md-12">
                <div class="p-4">
                  <div class="text-center">
                   
                  </div>
				  <form class="user" action="<?php echo base_url()."home_login";?>" method="post">
                    <div class="form-group">
                      <input type="text" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
					 <button name="submit" type="submit"  class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  
                  
                    <!-- <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                 
				  <hr>
				 <div class="text-center">
				  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="Buyer" name="optradio" checked>Buyer
  </label>
</div>

	</div>			  
		 </form>	
                  
                
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url();?>home_forgotpassword">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url();?>home_register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."web_files/";?>js/sb-admin-2.min.js"></script>

</body>

</html>



