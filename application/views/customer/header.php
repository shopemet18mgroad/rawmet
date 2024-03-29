<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Customer Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  

<style>
.carousel{
    margin-top: 20px;
}
.carousel-item{
    text-align: center;
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
</style>

<style type="text/css">
div.clickEffect{
position:fixed;
box-sizing:border-box;
border-style:solid;
border-color:#E8EBEF;
border-radius:50%;
animation:clickEffect 0.4s ease-out;
z-index:99999;
}
@keyframes clickEffect{
0%{
opacity:1;
width:0.5em; height:0.5em;
margin:-0.25em;
border-width:0.5em;
}
100%{
opacity:0.2;
width:6em; height:6em;
margin:-7.5em;
border-width:0.03em;
}
}
</style>


</head>
<script type="text/javascript">
function clickEffect(e){
	var d=document.createElement("div");
	d.className="clickEffect";
	d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";
	document.body.appendChild(d);
	d.addEventListener('animationend',function(){d.parentElement.removeChild(d);}.bind(this));
}
document.addEventListener('click',clickEffect);
</script>
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
        <a class="nav-link" href="<?php echo base_url();?>Customer_index">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span> Customer Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     <!-- <div class="sidebar-heading">
        Interface
      </div>-->

      <!-- Nav Item - Pages Collapse Menu -->

	 <!-- <li class="nav-item">
        <a class="nav-link" href="<?php// echo base_url();?>customer_customerprofile">
          <i class="fas fa-fw fa-user"></i>
          <span>User Profile</span></a>
      </li>-->
	

	  
	  <!-- <li class="nav-item">
        <a class="nav-link" href="<?php// echo base_url();?>customer_getquote">
          <i class="fas fa-fw fa-upload"></i>
          <span>Get Quote</span></a>
      </li>-->
	 
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment10" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-upload"></i>
          <span>Post Buying <br>Requirement</span></a>
		  <div id="payment10" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>customer_postbuyreq">Add Your Requirement</a>
			<a class="collapse-item" href="<?php echo base_url();?>Customer_managebuyrequirements">Edit Requirement List</a>
           
          </div>
        </div>
      </li>
	 
	 
	    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>customer_myrequirements">
          <i class="fas fa-chart-bar"></i>
          <span>Requirement Negotiation</span></a>
      </li>
	  
<!--
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment6" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-upload"></i>
          <span>Requirement<br> Negotiation</span></a>
		  <div id="payment6" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="<?php echo base_url();?>customer_myrequirements">My Requirements</a>
            <a class="collapse-item" href="<?php echo base_url();?>customer_negotiated">Buyer's Negotiated <br>Status</a>
			 <a class="collapse-item" href="<?php echo base_url();?>Customer_cust_final_req_renego">Final Re-Negotiation</a>
			  <a class="collapse-item" href="<?php echo base_url();?>Customer_Buyer_final_renego_status">Buyer's Final <br>Re-Negotiation Status</a>
          </div>
        </div>
      </li>
	  -->
	  
	  
	   <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment8" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Approved Requirements</span></a>
		  <div id="payment8" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>Customer_custapprovedreq">Your 1st Approved <br>Requirements</a>
            
			<a class="collapse-item" href="<?php echo base_url();?>Customer_sellerapprovedreq">Seller's 1st Approved <br>Requirement</a>
			<a class="collapse-item" href="<?php echo base_url();?>Customer_cust2ndApprovedReq">Your 2nd Approved <br> Requirements</a>
			<a class="collapse-item" href="<?php echo base_url();?>Customer_sel2ndApprovedReq">Seller's 2nd Approved <br> Requirements</a>
          </div>
        </div>
      </li>
	  -->
	  
	   <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>#">
          <i class="fas fa-fw fa-upload"></i>
          <span>Online Tenders</span></a>
      </li>
	  
	  
	  
	  
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment3" aria-expanded="true" aria-controls="collapseUtilities">
          <i class='fas fa-envelope-open-text'></i>
          <span>Quotation</span></a>
		  <div id="payment3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>customer_sellernegotiatedquote">Negotiate Here</a>
			
			
			 <a class="collapse-item" href="<?php echo base_url();?>Customer_productnegotation">Ongoing Re-Negotiation</a>
           <!-- <a class="collapse-item" href="<?php echo base_url();?>Customer_renegotiation">Re-Negotiate</a>
			 <a class="collapse-item" href="<?php echo base_url();?>Customer_custrenegovalue">My Re-Negotiated Value</a> 
			 <a class="collapse-item" href="<?php echo base_url();?>Customer_sellerrenegotiatedvalue">Seller's Re-Negotated <br>Value</a> -->
          </div>
        </div>
      </li>
	<!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment" aria-expanded="true" aria-controls="collapseUtilities">
         <i class='fas fa-check'></i>
          <span>Finalized Negotiation</span></a>
		  <div id="payment" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item" href="<?php echo base_url();?>Customer_sellnego">Seller's 1st Approved<br> Negotiation</a>
			<a class="collapse-item" href="<?php echo base_url();?>customer_buynego">My Approved<br> Negotiation</a>
            
			
			 <a class="collapse-item" href="<?php echo base_url();?>Customer_renegovalue">Seller's 2nd Approved<br> Re-Negotiation</a>
			 		 <a class="collapse-item" href="<?php echo base_url();?>Customer_finalrenegotiatedvalue">My Final Approved<br> Re-Negotiation</a>
          </div>
        </div>
  </li>-->
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment5" aria-expanded="true" aria-controls="collapseUtilities">
     <i class="fa fa-list" aria-hidden="true"></i>
          <span>Purchase Order</span></a>
		  <div id="payment5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <!-- <a class="collapse-item" href="<?php //echo base_url();?>customer_approvedquotes">Ongoing Purchase Order</a>-->
            <a class="collapse-item" href="<?php echo base_url();?>customer_myquotes">Ongoing Quotation<br> Purchase Order</a>
			  <a class="collapse-item" href="<?php echo base_url();?>customer_reqpurchaseorder">Ongoing Requirements<br> Purchase Order</a>
			
          </div>
        </div>
      </li>
	  
	  
		<!--<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>customer_contactsupplier">
          <i class="fas fa-fw fa-inbox"></i>
          <span>Products</span></a>
      </li>-->
	  
	<!--  <li class="nav-item">
        <a class="nav-link" href="<?php //echo base_url();?>customer_inquirymsg">
          <i class="fas fa-fw fa-upload"></i>
          <span>Inquiry Message</span></a>
      </li>-->
	  
	  
	  
	<!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-money-bill-alt"></i>
          <span>Quotes</span></a>
		  <div id="payment" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php// echo base_url();?>customer_approvedquotes"> My Approved Quotes</a>
            <a class="collapse-item" href="<?php //echo base_url();?>customer_myquotes">My Pending Quotes</a>
          </div>
        </div>
      </li>-->
	 
	  <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-money-bill-alt"></i>
          <span>My Requriments</span></a>
		  <div id="payment" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php //echo base_url();?>customer_managebuy"> My Approved Quotes</a>
            <a class="collapse-item" href="<?php// echo base_url();?>customer_negotiated">My Pending Quotes</a>
          </div>
        </div>
      </li>-->
	  	<!--<li class="nav-item">
        <a class="nav-link" href="<?php //echo base_url();?>customer_myquotes">
          <i class="fas fa-fw fa-upload"></i>
          <span>My Quotes</span></a>
      </li>
	  
	  	  <!-- Nav Item - Utilities Collapse Menu -->
 <!--    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manage Upload Product</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.php">Colors</a>
            <a class="collapse-item" href="utilities-border.php">Borders</a>
            <a class="collapse-item" href="utilities-animation.php">Animations</a>
            <a class="collapse-item" href="utilities-other.php">Other</a>
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
            <a class="collapse-item" href="utilities-color.php">Colors</a>
            <a class="collapse-item" href="utilities-border.php">Borders</a>
            <a class="collapse-item" href="utilities-animation.php">Animations</a>
            <a class="collapse-item" href="utilities-other.php">Other</a>
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
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="Customer_index">
        <div class="sidebar-brand-img rotate-n-20 ">
         <img src="<?php echo base_url()."web_files/";?>img/Rawmet.png" class="img-fluid" alt="" width="60%;">
        </div>
        
      </a>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

       <!--   <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
=======
        <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
>>>>>>> 4155203e7dd8462bdd830b1bd0cd5b664eb4e05b
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
           <!-- <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="<?php //echo base_url();?>>#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>-->
              <!-- Dropdown - Messages -->
             <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
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
            </li>-->

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <img class="img-profile rounded-circle" src="<?php echo base_url()."web_files/";?>img/manimg.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              
				 <a class="dropdown-item" href="<?php echo base_url();?>customer_customerprofile">
          <i class="fas fa-fw fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
         Profile Setting</a>
				
			
                <a class="dropdown-item" href="<?php echo base_url();?>#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
			  </li>

          </ul>

        </nav>
        <!-- End of Topbar -->