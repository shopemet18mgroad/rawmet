
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <script src="<?php echo base_url()."web_files/";?>js/js.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">
 
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src=" https://github.com/superRaytin/paginationjs"></script>
   <script src=" http://pagination.js.org"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  
 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>vendor_indexm">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Seller Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     <!-- <div class="sidebar-heading">
        Interface
      </div>-->

      <!-- Nav Item - Pages Collapse Menu -->
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment8" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-upload"></i>
          <span>My Products</span></a>
		 <div id="payment8" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>vendor_postproduct">New  Product</a>
            <a class="collapse-item" href="<?php echo base_url();?>vendor_uploadedproduct">Product List</a>
			<a class="collapse-item" href="<?php echo base_url();?>vendor_comission">Commission Approval </a>
          </div>
        </div>
	</li>
	
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment3" aria-expanded="true" aria-controls="collapseUtilities">
      
	         <i class="fas fa-fw fa-shopping-cart"></i>
	    
          <span>Requirements Negotiate</span></a>
		 <div id="payment3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>vendor_managebuyreq">Ongoing Requirement</a>
         <!--   <a class="collapse-item" href="<?php echo base_url();?>vendor_negotiated">Approved Requriement</a>-->
			<a class="collapse-item" href="<?php echo base_url();?>vendor_buyerResponse_req">Ongoing Re-Negotiation</a>
			<!--<a class="collapse-item" href="<?php echo base_url();?>vendor_req_renego_status">Approved Re-Negotiation</a>
			<a class="collapse-item" href="<?php echo base_url();?>Vendor_buyer_finalized_reqPrice">Buyer's Finalized Price</a>-->
          </div>
        </div>
      </li>
	 

<!------	 
	    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment9" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Approved Requirements</span></a>
		  <div id="payment9" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>Vendor_custapprovedreq">Your 1st Approved <br>Requirements</a>
            
			<a class="collapse-item" href="<?php echo base_url();?>Vendor_sellerapprovedreq">Seller's 1st Approved <br>Requirement</a>
			<a class="collapse-item" href="<?php echo base_url();?>Vendor_cust2ndApprovedReq">Your 2nd Approved <br> Requirements</a>
			<a class="collapse-item" href="<?php echo base_url();?>Vendor_sel2ndApprovedReq">Seller's 2nd Approved <br> Requirements</a>
          </div>
        </div>
      </li>
	  
-->	  
		   <li class="nav-item">
        <a class="nav-link collapsed" href="vendor_custquoteapproval" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseUtilities">
    <i class='fas fa-envelope-open-text'></i>
          <span>Quotes Negotiation</span></a>
		 <div id="collapseProduct" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>vendor_custquoteapproval">Ongoing Negotiation</a>
           
			<a class="collapse-item" href="<?php echo base_url();?>vendor_sellernegotiatedquote">My Negotiated <br>Value</a>
			
			 <a class="collapse-item" href="<?php echo base_url();?>Vendor_custrenegovalue">Ongoing Re-Negotiation</a>
           <a class="collapse-item" href="<?php echo base_url();?>vendor_sellrenegovalue">My Re-Negotiated <br>Value</a>
          </div>
        </div>
      </li>
      


	
	
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment" aria-expanded="true" aria-controls="collapseUtilities">
         <i class='fas fa-check'></i>
          <span>Finalized Negotiation</span></a>
		  <div id="payment" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
		   <a class="collapse-item" href="<?php echo base_url();?>vendor_sellnego">Buyer 1st Approved<br> Negotiation</a>
             <a class="collapse-item" href="<?php echo base_url();?>vendor_buynego">My Approved<br> Negotiation</a>
            
			
			 <a class="collapse-item" href="<?php echo base_url();?>vendor_renegovalue">
			 My Approved<br> Negotiation</a>
			<a class="collapse-item" href="<?php echo base_url();?>Vendor_finalrenegotiatedvalue">
			Buyer 2nd Approved<br> Negotiation</a>
          </div>
        </div>
  </li>
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment5" aria-expanded="true" aria-controls="collapseUtilities">
     <i class="fa fa-list" aria-hidden="true"></i>
          <span>Purchase Order</span></a>
		  <div id="payment5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <!-- <a class="collapse-item" href="<?php //echo base_url();?>customer_approvedquotes">Ongoing Purchase Order</a>-->
            <a class="collapse-item" href="<?php echo base_url();?>vendor_myquotes">Ongoing Purchase Order</a>
			  <a class="collapse-item" href="<?php echo base_url();?>vendor_reqpurchaseorder">Ongoing Requirements<br/>Purchase Order</a>
			
          </div>
        </div>
      </li>
	  	  <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="vendor_custquoteapproval" data-toggle="collapse" data-target="#collapseProduct4" aria-expanded="true" aria-controls="collapseUtilities">
       <i class="fa fa-list" aria-hidden="true"></i>
          <span>Purchase Order</span></a>
		 <div id="collapseProduct4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php //echo base_url();?>">Accepted PO</a>
            <a class="collapse-item" href="<?php //echo base_url();?>">closed PO</a>
          </div>
        </div>
      </li>-->
	  	   <li class="nav-item">
        <a class="nav-link collapsed" href="vendor_custquoteapproval" data-toggle="collapse" data-target="#collapseProduct3" aria-expanded="true" aria-controls="collapseUtilities">
   <i class='fas fa-rupee-sign'></i>
          <span>Finance</span></a>
		 <div id="collapseProduct3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>">Total Bussiness</a>
            <a class="collapse-item" href="<?php echo base_url();?>Vendor_purchaseoder">Commission To Rawmet</a>
          </div>
        </div>
      </li>
	 
	 
	  
	  
	   <!--<li class="nav-item">
        <a class="nav-link" href="<?php// echo base_url();?>vendor_postproduct">
          <i class="fas fa-fw fa-upload"></i>
          <span>Post Product</span></a>
      </li>
	  
	   
	  
	    <li class="nav-item">
        <a class="nav-link" href="<?php// echo base_url();?>vendor_uploadedproduct">
          
          <span>Manage My Product</span></a>
      </li>-->
	  
	
	

	  <!-- Nav Item - Utilities Collapse Menu -->
 <!--    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manage Upload Product</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>
	  
	  
	  
	        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRequirement" aria-expanded="true" aria-controls="collapseRequirement">
          <i class="fas fa-fw fa-wrench"></i>
          <span>My Favorite Buying Requirements</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->
	   <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
		 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-img rotate-n-20 ">
         <img src="<?php echo base_url()."web_files/";?>img/Rawmet.png" class="img-fluid" alt="" width="60%;">
        </div>
        
      </a>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
         <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url();?>#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                    <span class="font-weight-bold">No Alert</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url();?>#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                   No Alert
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url();?>#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                   No Alert
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url();?>#">Show All Alerts</a>
              </div>
            </li>
 <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
             <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $sessi;?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                
             
        <a class="dropdown-item" href="<?php echo base_url();?>vendor_editvendorprofile">
		
           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          profile Settings </a>
      
				 <a class="dropdown-item" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->