

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
         
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href=""><div class="text-md font-weight-bold text-primary text-uppercase mb-1">Finalized Quotation</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
					   <div class="inner">
<?php echo $sql;?>
   
</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-success text-uppercase mb-1">Purchase Order</div>
					  					   <div class="inner">
         <?php echo $sql3;?>
   
</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-envelope fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-danger text-uppercase mb-1">Total Business</div>
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
			  </div>
         

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-warning text-uppercase mb-1">Payable to Rawmet</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
		  
		  <!-- Pending Requests Card Example -->
            <!--<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Sub category</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-list-alt fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
		  
		  <!-- Pending Requests Card Example -->
          <!--  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Country</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-globe-asia fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
		  <!-- Pending Requests Card Example -->
            <!--<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">State</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-list fa-2x text-secondary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
		  
		  <!-- Pending Requests Card Example -->
          <!--  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">City</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-city fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
		  
		  <!-- Pending Requests Card Example -->
          <!--  <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buying Requirments</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-bag fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
		  
		  <!-- Pending Requests Card Example -->
           <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Reported Products</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-chart-bar fa-2x text-secondary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
		  
		  <!-- Pending Requests Card Example -->
          <!--  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Reported Buying Requirements</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
		  
		  <!-- Pending Requests Card Example -->
          <!--  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="managehomeimage.php"><div class="text-xs font-weight-bold text-info text-uppercase mb-1">Home Images</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-info"></i>
                    </div>
                  </div>
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

    </div>
    <!-- End of Content Wrapper -->
</div>
  </div>
  <!-- End of Page Wrapper -->

 