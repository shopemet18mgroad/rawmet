<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-9 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-6 d-none d-lg-block "></div>
              <div class="col-md-12 p-4">
                <div class="p-4">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Feedback</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control " id="Mobile Number" aria-describedby="emailHelp" placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control " id="Name" placeholder="Name">
                    </div>
					<div class="form-group">
                      <input type="text" class="form-control " id="Email Id" placeholder="Email Id">
                    </div>
					<div class="form-group">
						<select class="form-control " id="city">
						  <option>Mangalore</option>
						  <option>Mysore</option>
						  <option>Bangalore</option>
						  <option>Mumbai</option>
						  <option>Nagpur</option>
						</select>
					  </div>
					<div class="form-group">
						<select class="form-control " id="Reasons">
						  <option>Mangalore</option>
						  <option>Mysore</option>
						  <option>Bangalore</option>
						  <option>Mumbai</option>
						  <option>Nagpur</option>
						</select>
					  </div>
					  <div class="form-group">
                      <textarea type="text" class="form-control p-4" id="Comment" placeholder="Your Comment"></textarea>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <a href="<?php echo base_url();?>index.php" class="btn btn-primary btn-user btn-block">
                    Submit
                    </a>
                    
                  </form>
                  <hr>
                  <div class="text-center text-dark">
				  <span class="dot">or</span>
                    <h3>Need more help?</h3>
                  </div>
                  <div class="text-center">
                    <h5><a class="small" href="gmail.com"><i class="fa fa-envelope" style="font-size:15px"></i> Care@rawmet.com</a></h5>
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
  <script src="<?php echo base_url()."web_files/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."web_files/";?>js/sb-admin-2.min.js"></script>

</body>

</html>
