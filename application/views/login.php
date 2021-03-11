

<!DOCTYPE html>
<?php //print_r($search);die;?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content=">Aucjunction | Junction For Every auction">
  <meta name="description" content="Junction For Every Auction">
  <meta name="keyword" content="Auction, metal scrapes, Ferrous, Non Ferrous and Minor Metals">
  <meta name="author" content="">
  <title>Rawmet24</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files2/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()."web_files2/";?>css/style.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()."web_files2/";?>js/js.js"></script>

  <!-- Custom styles for this template-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link href="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" rel="stylesheet">
  <!--<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">-->
   <script src=" https://github.com/superRaytin/paginationjs"></script>
   <script src=" http://pagination.js.org"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
   div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</script>
</head>
	<body class="" data-spy="scroll" data-target="#myScrollspy">
	<div class="container-fluid top-header">
		<div class="row">
				<div class="col-md-12 contact-header">
					<div class="social pull-right">
						<ul>
							<li><a href="<?php echo base_url()."login"?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp Dashboard Login</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp Helpline No: +91 9945454505</li>
							<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>		
				</div>
						
		</div>	
	</div>
		<div class="container">
			<div class="row branding">
				<div class="col-md-6 col-sm-12 pt-4">
					<a href="./home" title="Aucjunction Logo">
					<img style="width:250px" class="img-fluid" alt="Aucjunction"  src="<?php echo base_url()."web_files2/";?>images/rawmet.png">
					</a>
				</div>
				<div class="col-md-6 col-sm-12 p-2">
					<div class="input-feild">
					
							<div class="form-group p-1">
				 <form class="user" action="<?php echo base_url()."home_login";?>" method="post">
								<input type="text" class="form-control" id="exampleInputEmail" name="user" placeholder="User Name" size="50">
							</div>
						  <div class="form-group p-1">
							<input type="password" class="form-control" id="exampleInputPassword" name="pass" placeholder="Password" size="50">
						  </div>
						  <div class="form-group p-1">
							<button name="submit" type="submit" onclick="return userid4()" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</button>	
						  </div>
						   
						  
					 </div>
					 <div class="row ml-3">
						<div class="form-group pl-3">
						  <div class="custom-control custom-checkbox small ">
							<input type="checkbox" class="custom-control-input" id="customCheck2" name="optradio"  value="Buyer">
							<label class="custom-control-label" for="customCheck2">Buyer</label>
						 
						  </div>
						</div>
						<div class="form-group pl-3">
						  <div class="custom-control custom-checkbox small">
							<input type="checkbox" class="custom-control-input" id="customCheck" name="optradio" value="Seller">
							<label class="custom-control-label" for="customCheck">Seller</label>
							 
							<a class="pl-3" href="<?php echo base_url();?>email_send""><b><u>Forgot Password?</u></b></a>
						  </div>
						</div>
						  </form>  
					</div>
				
				</div>
				
			</div>
	     </div>
		 <div class="mynav">
			 <nav class="navbar navbar-expand-lg navbar-dark navbarclr" id="myScrollspy">
				  
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url();?>home">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>contact_us">Contact Us</a>
					  </li>
					 <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Registration
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="<?php echo base_url();?>sellers_registeration">Seller's Registration</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>buyers_registeration">Buyer's Registration</a>
						</div>
					  </li>
					   <li class="nav-item">
						<a class="nav-link" href="#">Press Release</a>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Popular Categories
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Ferrous">Ferrous</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Non_ferrous">Non Ferrous</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Machinery_and_Equipments">Machinery &amp; Equipments</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Hazardous">Hazardous</a>
						   <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Electronic_Items">Electronic Items</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Packaging_Items">Packaging Items</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Uncleared_Cargo">Uncleared Cargo</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Spares">Spares</a>
						   <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Vehicles">Vehicles</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/PCB">PCB</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/RA">RA</a>
						   <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Others">Others</a>
						</div>
					  </li>
					 
					</ul>
					<div class="srmfldnav">
						<form method="post" action="<?php echo base_url();?>Search" class="form-inline my-2 my-lg-0">
						  <input class="form-control mr-sm-2" type="search" placeholder="Search For the product here" name="search" aria-label="Search For the product here" size="50" required>
						  <button href="#" class="btn btn-outline-light my-2 my-sm-0" name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
						  				   	
						 
						</form>
					</div>
 				
				  </div>
				</nav>
		</div>
		<div class="container-fluid">
			 <div class="row">
					<img class="imgsize-header" src="<?php echo base_url()."web_files/";?>images/aucjuntionbanner.png"></img>
			 </div>	
		</div>
		<div class="container-fluid noticeboard">
			<div class="noticeboard-icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
			<div class="row marqueebox">
			 
			</div>
		</div>
		
		
		


