

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
              <form action="<?php echo base_url();?>home_seller_register" method="POST">
			  <h3 class="h5 text-gray-700 mb-2">Contact Info</h3> 	
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="vname" name="vname" placeholder="Name">
                  </div>
                  
				   <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="vcompanyname" name="vcompanyname" placeholder="Company Name" 
required>
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="vcompanytype"  name="vcompanytype"  placeholder="Company Type" 
required>
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="vcontactperson"  name="vcontactperson"  placeholder="Contact Person">
                  </div>
				   <div class="col-sm-6 mt-2">
                    <input type="text" class="form-control form-control-user" id="vcontactnumber"  name="vcontactnumber"  placeholder="Contact Number" 
required>
                  </div>
                </div>
				<h3 class="h5 text-gray-700 mb-2">User Info</h3>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user" id="vemail"  name="vemail" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="vusername"  name="vusername"   placeholder="User Name">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="vpassword"  name="vpassword"  placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"  id="vrepeatpassword"  name="vrepeatpassword"  placeholder="Repeat Password">
                  </div>
				  
               </div>
			   <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"id="vpan"  name="vpan"   placeholder="PAN" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="vgst"  name="vgst"   placeholder="GST"
required>
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="vpcb"  name="vpcb"  placeholder="PCB license"
>
                  </div>
                  
				  
               </div>
		 
		     
				
				<h3 class="h5 text-gray-700 mb-2">Location</h3>
                <div class="form-group">
					<input type="text" class="form-control form-control-user" id="vaddress"  name="vaddress"   placeholder="Address">
				</div>
				
                <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="text" class="form-control form-control-user" id="vcity"  name="vcity"  placeholder="City">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-2">
					<input type="text" class="form-control form-control-user" id="vselectstate"  name="vselectstate"   placeholder="State">
                  </div>
				  
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="vpincode"  name="vpincode"   placeholder="Pincode">
                  </div>
                </div>
               <center>
				 <input type="submit" name="submit" id="btn1" value="Register Account" class="btn btn-primary col-3 mt-2 w-100"></center>
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

  