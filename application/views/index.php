

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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
   <script>
   div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</script>

<Style>
.ml6 {
  position: relative;
  font-weight: 900;
  font-size: 3.3em;
}

.ml6 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml6 .letter {
  display: inline-block;
  line-height: 1em;
}
</style>

</head>
	<body class="" data-spy="scroll" data-target="#myScrollspy">
	<div class="container-fluid top-header">
		<div class="row">
				<div class="col-md-12 contact-header">
				<div class="social pull-left">
						<ul>
						<li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp<span id='ct6' style=""></span></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp Helpline No: +91 9945454505</li>
					 
						</ul>
					</div>

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
				<div class="col-md-6">
					<a href="./home" title="Aucjunction Logo">
			 
				</a>
				
			 	
					
				</div>
				<div class="col-md-6 col-sm-12 p-2">
					<div class="input-feild">
					
							<div class="form-group p-1">
				 <form class="user" action="<?php echo base_url()."home_login";?>" method="post">
								<input type="text" class="form-control" id="exampleInputEmail" name="user" placeholder="User Name" size="25">
							</div>
						  <div class="form-group p-1">
							<input type="password" class="form-control" id="exampleInputPassword" name="pass" placeholder="Password" size="25">
						  </div>
						  <div class="form-group p-1">
							<button name="submit" type="submit" onclick="return userid4()" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</button>	
						  </div>
						  <div class="form-group p-1">
						  <a href="<?php echo base_url();?>home_buyer_register"><button type="button" class="btn btn-warning">Register Here</button></a>

						  </div>
						
						
					 </div>
					 <div class="row ml-4">
						<div class="form-group">
						  <div class="custom-control custom-checkbox small ">
							
							<input type="checkbox" class="custom-control-input" id="customCheck2" name="optradio"  value="Buyer">
							<label class="custom-control-label" for="customCheck2">Buyer</label>
						 
						  </div>
						</div>
					
						<div class="form-group">
						  <div class="custom-control custom-checkbox small">
							<input type="checkbox" class="custom-control-input" id="customCheck" name="optradio" value="Seller">
							<label class="custom-control-label" for="customCheck">Seller</label>
							 </div>
						</div>
							<div class="form-group">
						  <div class="custom-control custom-checkbox small ">
							<input type="checkbox" class="custom-control-input" id="customCheck3" name="optradio"  value="Admin">
							<label class="custom-control-label" for="customCheck3">Admin</label>
						 
						  </div>
						</div>
							<a class="pl-3" href="<?php echo base_url();?>email_send"><b><u>Forgot Password?</u></b></a>
						  </div>
						</div>
						  </form>  
					</div>
				
				</div>
			
		  


		

 <main class="main-section p-5">
 
 <!--<h2 class="ml6">
  <span class="text-wrapper">
    <span style="color:warning" class="letters"></span>
  </span>
</h2>-->

<img style="" alt="Rawmet"  src="<?php echo base_url()."web_files/";?>img/rawmet logo.png">



        <form class="form-custom" autocomplete="off" class="form-control" method="POST"  action="<?php echo base_url()."home/search";?>">
		
		
            <div class="form-group input1">
                <input type="text" class="form-control" name="productname" id="productname" onkeyup="search_product()" placeholder="Enter your raw material">
		  
				<div id="select" class="select"> <ul  id="dp"></ul></div>	  
            </div>
				  
			
            <div class="form-group input2">
                <select class="form-control rounded-0" name="category" id="category">
                <option value="Primary">Primary</option>
				<option value="Seconadry">Secondary</option>
				<option value="Scrap">Scrap</option>
                </select>
            </div>
           


			<div class=""  class="form-control">
			  
			<!--Make sure the form has the autocomplete function switched off:-->

						 <div class="autocomplete" style="width:200px;">
						   <input id="myInput" type="text" name="myCountry" placeholder="&#xf041 All India" value="India" class="form-control">
					
						</div>
			  </div>
			  
				
			
			
				<div class="form-group input4">
					   <a href="<?php echo base_url();?>home_contactsupplier">
						  <button type="submit" value="search" class="btn searchbtn input4"><i class="fa fa-search pr-1"></i>Search</button>
						 
						</a>
				</div>
				
			
</form>

<div class="links mt2">

<a href="<?php echo base_url();?>home_buyerrequriment2">Live Procurement</a>


              
				<a href="http://rawmet24.in/procurementtenders2.php">Tenders</a>			
				<a href="https://www.aucjunction.com/">Upcoming Disposals</a>
				<a href="<?php echo base_url();?>home_feedback">feedback</a>
				
        </div>

	

		
        

	<!--<div class="ajaxrslt mt-5" style="width:100%; height:300px;overflow-y:scroll;" id="ajaxrslt_search">-->
	
    
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		</div>

    </main>
		
   <script>
 function search_product(){
	 $("#dp").hide();
 if(document.getElementById("productname").value.length =1){
	 $("#dp").show();
			var contents = $('#productname').val(); 
			$.get('<?php echo base_url() .'home_contactsupplier/get_product_table/'; ?>'+contents, function(data){
				$('#dp').html(data);
			});

					
 }else{
	 return;
 }
}
</script>

<script>function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getMonth() + 1+ "-" + x.getDate() + "-" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>
 
 

 <script>
 function getPaging(v){
var s = v.split("|");
	document.getElementById("productname").value  = s[0];
	//document.getElementById("vname").value = s[1];
	 $("#dp").hide();
 }
function getPagingnr(){
	$("#dp").hide();
}
 </script>        
  
       <script>

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

	   </script>
	   
	
