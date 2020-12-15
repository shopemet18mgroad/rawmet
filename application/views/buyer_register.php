

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">Create an Account!</h1>
				
              </div>
             
			  <h3 class="h5 text-gray-700 mb-2">Contact Info</h3> 	
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<form action="<?php echo base_url();?>home_buyer_register" method="POST">
				
                    <input type="text" class="form-control form-control-user" id="bname" name="bname"  placeholder="Name">
                  </div>
                  
				   <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="bcompanyname" name="bcompanyname" placeholder="Company Name">
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="bcompanytype" name="bcompanytype"  placeholder="Company Type">
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="bcontactperson" name="bcontactperson" placeholder="Contact Person">
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="bcontactnumber" name="bcontactnumber" placeholder="Contact Number">
                  </div>
                </div>
				<h3 class="h5 text-gray-700 mb-2">User Info</h3>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user"id="bemail" name="bemail" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="busername" name="busername"  placeholder="User Name">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"id="bpassword" name="bpassword"  placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"id="brepeatpassword" name="brepeatpassword"  placeholder="Repeat Password">
                  </div>
                </div>
				
				<h3 class="h5 text-gray-700 mb-2">Location</h3>
                <div class="form-group">
					<input type="text" class="form-control form-control-user"id="baddress" name="baddress"  placeholder="Address">
				</div>
				
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="text" class="form-control form-control-user" id="bcity" name="bcity"  placeholder="City">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-2">
					<input type="text" class="form-control form-control-user" id="bselectstate" name="bselectstate" placeholder="State">
                  </div>
				  
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user"id="bpincode" name="bpincode" placeholder="Pincode">
                  </div>
                </div>
                <center>
				<input type="submit" name="submit" id="btn1" value="Register Account" class="btn btn-primary col-3 mt-2 w-100">
				</center>
                <!-- <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url();?>home_forgotpassword">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url();?>home_login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

