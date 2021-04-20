

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
 
<style>
      img {
        max-width: 100%;
        height: auto;
      }
    </style>


</head>
	<body  class="scrollbar" data-spy="scroll" data-target="#myScrollspy">
	<div class="container-fluid top-header">
		<div class="row">
				<div class="col-md-12 contact-header">
				<div class="social pull-right">
						<ul>
						<li><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp<span id='ct6' style=""></span></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp Helpline No: +91 9945454505</li>
					 
						</ul>
					</div>

					<!--<div class="social pull-right">
						<ul>
							<li><a href="<?php echo base_url()."login"?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp Dashboard Login</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp Helpline No: +91 9945454505</li>
							<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>-->		
				</div>
						
		</div>	
	</div>
		<div class="container">
			<div class="row branding">
				<div class="col-md-6">
					<a href="./home" title="Rawmet Logo">
			 
				</a>
				
			 	
					
				</div>
				<div class="col-md-6 col-sm-12 p-2">
					<div class="input-feild">
					
							<div class="form-group p-1">
				 <form class="user" action="<?php echo base_url()."Home_login";?>" method="post">
								<input type="text" class="form-control" id="exampleInputEmail" name="user" placeholder="User ID" size="25">
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
					
					 

<center>
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="customCheck2" name="optradio" value="Buyer">
  <label class="form-check-label" for="customCheck2">Buyer</label>
</div>
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="customCheck" name="optradio" value="Seller">
  <label class="form-check-label" for="customCheck">Seller</label>
</div>
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="customCheck3"name="optradio" value="Admin">
  <label class="form-check-label" for="customCheck3">Admin</label>
  <a class="pl-3" href="<?php echo base_url()."email_send";?>"><b><u>Forgot Password?</u></b></a>
</div>
</center>

						  </form>  
					</div>
				
				</div>
			
		  


		

 <main class="main-section p-5 ">
 
 <!--<h2 class="ml6">
  <span class="text-wrapper">
    <span style="color:warning" class="letters"></span>
  </span>
</h2>-->

<img class="responsive" src="<?php echo base_url()."web_files/";?>img/rawmet logo.png" >



        <form class="form-custom" autocomplete="off" class="form-control" method="POST"  action="<?php echo base_url()."home/search";?>">
		
		
            <div class="form-group input1 ">
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

<a href="<?php echo base_url();?>Home_buyerrequriment2">Live Procurement</a>


              
				<a href="http://rawmet24.in/procurementtenders2.php">Tenders</a>			
				<a href="https://www.aucjunction.com/">Upcoming Disposals</a>
				<a href="<?php echo base_url();?>home_feedback">feedback</a>
				
        </div>
		
        

	 
		</div>
<div style="background-color: #f2f2f2" class="" >

 

<ul style="padding:10px; color:#808080">
India
<hr>
  <li style="display: inline;  padding: 8px;color:#808080">  <a href="#"  data-toggle="modal" data-target="#aboutus" style="color:#808080">About Us</a></li>
  <li style="display: inline;  padding: 8px;color:#808080"><a style="color:#808080" data-toggle="modal" data-target="#termsandcondition"  href="#">Terms of Use</a></li>
  <li style="display: inline; float:right ; padding: 8px;color:#808080"><a style="color:#808080" data-toggle="modal" data-target="#privacypolicy" href="#">Privacy Policy</a></li>
  <li style="display: inline; float:right; padding: 8px;color:#808080"><a style="color:#808080" data-toggle="modal" data-target="#paymentpolicy" href="#">Payments Policy</a></li>
   <li style="display: inline; float:right; padding: 8px;color:#808080"><a style="color:#808080"  href="#">Seller Terms and Conditions</a></li>
    <li style="display: inline; float:right; padding: 8px;color:#808080"><a style="color:#808080" data-toggle="modal" data-target="#contactus" href="#">Contact Us</a></li>
</ul> 
 

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

<script>
function display_ct6() {
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
	   
<script>
function userid4(){
var exampleInputEmail = document.getElementById("exampleInputEmail").value;	
var exampleInputPassword = document.getElementById("exampleInputPassword").value;	
 
if( $('input[name="optradio"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Please select at least one option Buyer Or Seller", "error");
				return false;
			}

if(exampleInputEmail == ''  || exampleInputPassword == '' ){
		swal("Alert!",  "ID and Password cannot be blank!", "error");
		return false;
	}
	
			
} </script>


 <div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">About US</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-window-close"></i>
                    </button>
                </div>
				<div class="modal-body">WWW.RAWMET24.COM a brand/subsidiary of Shopemet Networks Pvt Ltd</div>
                <div class="modal-body">Rawmet24 (Brand/Subsidiary)was Founded in March 2020 in Silicon City Of India.</div>
				
				 <div class="modal-body">Rawmet24 ie Shopemet Networks Pvt Ltd boasts of its people-friendly environment, with a  team  for new challenges, and constantly innovating.   we continuously strive to provide the best raw materials experience to our Industrial and other customers. Our core team has over years of combined experience in Smelting, Manufacturing, Internet, Technology, Operations Management and Retail, primarily in Silicon City.</div>
				 
				 <div class="modal-body">Here at Rawmet24, our customers/buyers, Sellers/Suppliers and their interest is our topmost priority. We consistently strive to deliver the best-in class trusted New Rawmaterials and other manufacturing material procurement experience by providing a wide selection of products across diverse categories Like –1.Metals New, 2.Metals Secondary, 3.Ferrous,  4.Non Ferrous, 5.Minor Metals, 6.Industrial Supplies, 8.Construction materials, 9.Plastics, 10.Papers and other Raw Materials  - at the best price with seller and buyer negotiations!</div>
				 
				  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Our Mission @ Rawmet24</h5>
                  </div>
				
				 <div class="modal-body">To Provide the Best Supply and raw material procurement Solutions for all Industries; To build the largest network of Industrial Raw materials buyers at all levels; to build a platform where we can assimilate & process the world's Raw materials inventory and sync it with our customer and associates.</div>
				 
				 <div class="modal-body">
				 <h6>Our vision</h6>Our vision is to participate consistently in extending generation limits and expanding our Raw material supplying, Auctioning and Multi business capacities with specific goals to meet the developing world wide demand and therefore hold our position at the front of Industrial and Service Business.
To Be industry leader in delivering quality products and quality services and innovative solutions that address our partner suppliers and customers most challenging Raw material and supply needs and Disposal needs for the future. Our efforts is our belief we must operate as a company committed to BCOC and Principle Values.
</div>
				 
				 <div class="modal-body">
				 Our vision is about more than Metals it is about reinforcing the economic and social benefits associated with strong Indian and Global Manufacturing Capabilities of which metals is a foundational industry.
We are committed to finding ways to innovate, grow, and overcome obstacles in order to create value and benefit the long-term interests of all Rawmet24 / Shopemet Networks Pvt Ltd stakeholders, employees, suppliers, customers, industries and the communities where we do business.
</div>

			<div class="modal-body">Rawmet24’s biggest assets are our people, and we treasure what they have to say about their experience.

Rawmet24 is defined by its fun, collegial, and high energy environment. At Rawmet24, one can finds opportunities to grow professionally and personally, meet goals, and set higher benchmarks for oneself, We Love Encouraging Our Employees.</div>

				<div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DEPARTMENTS</h5>
                  </div>
				  
				  <div class="modal-body">1- MARKETING<br/>
											2-OPERATIONS<br/>
											3-TECHNOLOGY<br/>
											4-FINANCE<br/>
											5-DIGITAL<br/>
											6-ADMIN<br/>
				</div>

<div class="modal-body">If you’re looking for a career-defining moment and not just another job opportunity, apply today: admin@rawmet24.com / hr@shopemet.com Jobs you may be interested in:

Get to know us better by connecting with us on our Facebook, Twitter, Google , Youtube channels.

</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
	
	
	
	<div class="modal fade" id="contactus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CONTACT US</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-window-close"></i>
                    </button>
                </div>
				<div class="modal-body">RAWMET24 Brand/Subsidiary of Shopemet Networks Pvt Ltd. </div>
                <div class="modal-body">Corp Off - Plot No 179, Second floor C.D Street, Opp. N T Pet, Mysore road cross, Bengaluru, Bengaluru District, Karnataka, India, 560 002.</div>
				
				 <div class="modal-body">General Support
				 <br/>Customer Support<br/>
				 Vendor/seller Support</div>
				 
				 <div class="modal-body">
				 Or To know more :
				
</div>
				 
				 <div class="modal-body">
				  Ph No : 080-42332722 / +91-9945454505<br/>
				 Email : admin@rawmet24.com / admin@shopemet.com
</div>

		
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
	

<div class="modal fade" id="privacypolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-window-close"></i>
                    </button>
                </div>
				<div class="modal-body">We value the trust you place in us. we insist upon the highest standards for secure transactions and customer information privacy. </div>
                <div class="modal-body"><h6>Please read the following statement about our information gathering and dissemination practices.</h6>
				<h6 style="color:blue">Note: Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically.</h6>By visiting this Website www.rawmet24.com you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Website.<br/>
				 This Privacy Policy is incorporated into and subject to the Terms of Use.</div>
				 
				 <div class="modal-body">
				 <h6>A. Collection of Personally Identifiable Information and other Information</h6>When you use our Website www.rawmet24.com, we collect and store your personal/official information which is provided by you from time to time. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.<br/><br/>
				 This information is compiled and analyzed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address.<br/><br/>
				We use data collection devices such as "cookies" on certain pages of the Website to help analyze our web page flow, measure promotional effectiveness, and promote trust and safety. "Cookies" are small files placed on your hard drive that assist us in providing our services. We offer certain features that are only available through the use of a "cookie". We also use cookies to allow you to enter your password less frequently during a session. Cookies can also help us provide information that is targeted to your interests. Most cookies are "session cookies," meaning that they are automatically deleted from your hard drive at the end of a session. You are always free to decline our cookies if your browser permits, although in that case you may not be able to use certain features on the Website and you may be required to re-enter your password more frequently during a session.<br/><br/>
				 Additionally, you may encounter "cookies" or other similar devices on certain pages of the Website that are placed by third parties. We do not control the use of cookies by third parties.<br/><br/>
				 • If you choose to buy on the Website, we collect information about your buying behaviour.<br/>
				 • If you transact with us, we collect some additional information, such as a billing address, shipping address, GST Details, a credit / debit card number and a credit / debit card expiration date and/ or other payment instrument details and tracking information from Rtgs, Neft  cheques or money orders.<br/>
				 • If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback.We will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support or seller/buyer support and troubleshoot problems as permitted by law.<br/>
				 • If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.
				 </div>
				 
				 <div class="modal-body">
				<h6>B.Use of Demographic / Profile Data / Your Information</h6>
				We use personal information to provide the services you request. To the extent we use your personal information to market to you, we will provide you the ability to opt-out of such uses. We use your personal information to resolve disputes; troubleshoot problems; help promote a safe service; collect money; measure consumer interest in our products and services, inform you about online and offline offers, products, services, and updates; customize your experience; detect and protect us against error, fraud and other criminal activity; enforce our terms and conditions; and as otherwise described to you at the time of collection.<br/><br/>
				 With your consent, we will have access to your SMS, contacts in your directory, call history, location and device information and we may request you to provide your PAN and Aadhaar details to check your eligibility for certain products/services including but not limited to providing credit) being offered by us, sellers, our affiliates or our lending partners. We may share this data with our affiliates or our lending partners for the same purposes as mentioned above, however, we will not store any Aadhaar data ourselves. In the event that consent to this such use of data is withdrawn in the future, we will stop collection of such data but continue to store the data (save for Aadhaar data) and use it for internal purposes to further improve our services.<br/><br/>
				 In our efforts to continually improve our product and service offerings, we collect and analyze demographic and profile data about our users' activity on our Website www.rawmet24.com.<br/>
				 We identify and use your IP address to help diagnose problems with our server, and to administer our Website. Your IP address is also used to help identify you and to gather broad demographic information.<br/><br/>
				 We will occasionally ask you to complete optional online surveys. These surveys may ask you for contact information and demographic information (like zip code, age, or income level). We use this data to tailor your experience at our Website, providing you with content that we think you might be interested in and to display content according to your preferences.</div>
				 
				 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cookies</h5>
                </div>
				
				<div class="modal-body">
				 A. "cookie" is a small piece of information stored by a web server on a web browser so it can be later read back from that browser. Cookies are useful for enabling the browser to remember information specific to a given user. We place both permanent and temporary cookies in your computer's hard drive. The cookies do not contain any of your personally identifiable information.</div>
				
				<div class="modal-body">
				B. Sharing of personal information
				We may share personal information with our other corporate entities and affiliates. These entities and affiliates may market to you as a result of such sharing unless you explicitly opt-out.<br/>
				We may disclose personal information to third parties. This disclosure may be required for us to provide you access to our Services, to comply with our legal obligations, to enforce our User Agreement, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our Services. We do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.<br/>
				We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public.<br/>
				We and our affiliates will share / sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.
				</div>

				<div class="modal-body">
				C. Links to Other Sites<br/>
				Our Website links to other websites that may collect personally identifiable information about you. www.rawmet24.com is not responsible for the privacy practices or the content of those linked websites.
				</div>

				<div class="modal-body">
				D. Security Precautions<br/>
				Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure third party server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access.
				</div>

				<div class="modal-body">
				E. Choice/Opt-Out<br/>
				We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account.<br/>If you want to remove your contact information from all www.rawmet24.com lists and newsletters, please visit unsubscribe/ mail us at admin@rawmet24.com
				</div>

				<div class="modal-body">
				F. Advertisements on www.rawmet24.com<br/>
				We use third-party advertising companies to serve ads when you visit our Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods, raw materials and services of interest to you.
				</div>

				<div class="modal-body">
				G. Your Consents<br/>
					By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to Your consent for sharing your information as per this privacy policy.<br/>If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.
				</div>

				<div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Officer For Grievance</h5>
                </div>
				
				<div class="modal-body">
				In accordance with Information Technology Act 2000 and rules made there under, the name and contact details of the Grievance Officer are provided below:<br/>
					WWW.RAWMET24.COM<br/>
					Shopemet Networks Pvt Ltd.<br/><br/>
					Corp Off – Plo No 23, 3rd Floor, Hari Prem Complex
					Binnamangala, Indiranagar 1st Stage, Bangalore<br/>
					Karnataka, India, 560 038.<br/>
					Ph No:080-42332722 / +91-9945454505 <br/>
					Email: admin@rawmet24.com / admin@shopemet.com<br/>
					Time: Mon - Sat (10:00 - 18:00)
				</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="paymentpolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payments Policy</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-window-close"></i>
                    </button>
                </div>
				<div class="modal-body"><h6>How can I pay for a Rawmet24 purchase?</h6>Rawmet24 Supplier/Sellers offers you multiple payment methods. Whatever your online mode of payment, you can rest assured. You may use Your own Bank Internet Banking, RTGS, NEFT, Demand draft Or PDC (Post Dated Cheque) in the name of Seller if the terms are for credit period to make your purchase applicable on sellers acceptance.<br/>Rawmet24 accepts its Subscription Payment and Service Charge payments through its trusted payment gateway, Neft, Rtgs, DD in India. </div>
                <div class="modal-body"><h6>Are there any hidden charges when I make a purchase on Rawmet24?</h6>There are NO hidden charges when you make a purchase on Rawmet24. The prices listed for all the items are Basic final and all <mark>exclusive of taxes</mark>. The price you see on the product page is basic price, (Basic price + Applicable Taxes) is what you shall in Purchase Order and Pay to Seller. Kindly ensure the prices before paying.</div>
				
				 <div class="modal-body"><h6>What is Cash on Delivery?</h6>
				 If you are not comfortable making an online payment on www.rawmet24.com, you can pay Cash on Delivery (C.o.D) payment method instead. With C.o.D you can pay in cash at the time of actual delivery of the material/product at your doorstep, without requiring you to make any advance payment <br/>
				 The maximum order value for a Cash on Delivery (C-o-D) payment is Rs 50,000. It is strictly a cash-only payment method. Gift Cards or store credit cannot be used for C-o-D orders. Foreign currency cannot be used to make a C-o-D payment. Only Indian Rupees Is accepted.</div>
				 
				 <div class="modal-body"><h6>Can I use my bank's Internet Banking feature to make a payment?</h6>
				 Yes. Rawmet24 offers you the convenience of using your bank's Internet Banking service to make a payment towards your order, Rawmet24 uses thirt party payment gateway With this you can directly transfer funds from your bank account, while conducting a highly secure transaction.
				We accept payment through Internet Banking 

				
					</div>
				 
				 <div class="modal-body">
				 <h6> Can I make a credit/debit card or Internet Banking payment on Rawmet24 through my mobile?</h6>
				Yes, you can make credit / Debit card payments through the Rawmet24 mobile site and application. Rawmet24 uses thirt party payment gateway which has high encryption technology to protect your card information while securely transmitting it to the secure and trusted payment gateways managed by leading banks.

					</div>

				<div class="modal-body">
				 Add the item(s), material(s) to your negotiation dashboard, negotiate with seller on price and if you feel ok with the price and quality process for approval which will be followed by uploading Purchase Order by buyer on seller’s name/company name. <br/>
					Once verified and confirmed, your order will be processed for shipment in the time specified, from the date of confirmation. You will be required to make a cash-only payment to our courier/delivery partner at the time of delivery of your order to complete the payment.<br/><br/>
				<h6>Terms & Conditions:</h6>
			•	The maximum order value for C.o.D is Rs 50,000<br/>
			•	Gift Cards or Store Credit cannot be used for C.o.D orders<br/>
			•	Cash-only payment at the time of delivery.<br/>


			</div>
			
			<div class="modal-body">
				 Rawmet24 does not take any responsibility of payments made or received by buyer or seller prior to delivery of after delivery
				Rawmet24 is an e-commerce search engine marketplace service provider mandated by the seller/buyer to facilitate raw materials procurement by the seller/buyer through negotiation. The website is an online search engine platform, a virtual marketplace/venue for sellers/buyers to conduct sale/purchase of assets, rawmaterial and for buyers to negotiate with sellers for required materials. Rawmet24 is considered as third party not particularly interested in the item/s being sold/bought on behalf of the seller/buyer.

			</div>

		
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>	
	
	
	<div class="modal fade" id="termsandcondition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-window-close"></i>
                    </button>
                </div>
				<div class="modal-body"><div id="accordion">
	<div class="card">
    <div class="" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Terms of Use / Conditions
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       Welcome to Rawmet24.com website (herein referred to as the website) Brand / Subsidiary of Shopemet Networks Pvt Ltd.<br/><br/>
	   
	   This document is an electronic record in terms of Information Technology Act, 2000 and rules there under as applicable and the amended provisions pertaining to electronic records in various statutes as amended by the Information Technology Act, 2000. This electronic record is generated by a computer system and does not require any physical or digital signatures.
This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and Terms of Use for access or usage of www.rawmet24.com website.
<br/><br/>
The domain name www.rawmet24.com (hereinafter referred to as "Website") is owned by Shopemet Networks Private Limited a company incorporated under the Companies Act, 2019 with its registered office at Plot No.179, Second Floor C.D.Street Opp N.T.Pet, Mysore Road Cross, Bangalore -560002, Karnataka, India, Corp Off – Plot No 23, 3rd floor, Hari Prem Complex, Indiranagar 1st stage Bangalore- 560038(hereinafter referred to as "Rawmet24").
Your use of the Website and services and tools are governed by the following terms and conditions ( "Terms of Use" ) as applicable to the Website including the applicable policies which are incorporated herein by way of reference. If You transact on the Website, You shall be subject to the policies that are applicable to the Website for such transaction. By mere use of the Website, You shall be contracting with Shopemet Networks Private Limited and these terms and conditions including the policies constitute Your binding obligations, with Rawmet24.
For the purpose of these Terms of Use, wherever the context so requires "You" or "User" shall mean any natural or legal person who has agreed to become a buyer on the Website by providing Registration Data while registering on the Website as Registered User using the computer systems. Rawmet24 allows the User to surf the Website or making purchases without registering on the Website. The term "We" , "Us" , "Our" shall mean Shopemet Networks Private Limited.
<br/><br/>
When You use any of the services provided by Us through the Website, including but not limited to, (e.g. Product Reviews, Seller Reviews), You will be subject to the rules, guidelines, policies, terms, and conditions applicable to such service, and they shall be deemed to be incorporated into this Terms of Use and shall be considered as part and parcel of this Terms of Use. We reserve the right, at Our sole discretion, to change, modify, add or remove portions of these Terms of Use, at any time without any prior written notice to You. It is Your responsibility to review these Terms of Use periodically for updates / changes. Your continued use of the Website following the posting of changes will mean that You accept and agree to the revisions. As long as You comply with these Terms of Use, We grant You a personal, non-exclusive, non-transferable, limited privilege to enter and use the Website.<br/><br/>
ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESE TERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING. By impliedly or expressly accepting these Terms of Use, You also accept and agree to be bound by Rawmet24 Policies ((including but not limited to Privacy Policy available at Privacy) as amended from time to time.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Membership Eligibility
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Use of the Website is available only to persons who can form legally binding contracts under Indian Contract Act, 1872. Persons who are "incompetent to contract" within the meaning of the Indian Contract Act, 1872 including minors, un-discharged insolvents etc. are not eligible to use the Website. If you are a minor i.e. under the age of 18 years, you shall not register as a User of the Rawmet24 website and shall not transact on or use the website. As a minor if you wish to use or transact on website, such use or transaction may be made by your legal guardian or parents on the Website. Rawmet24 reserves the right to terminate your membership and / or refuse to provide you with access to the Website if it is brought to Rawmet24's notice or if it is discovered that you are under the age of 18 years.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Your Account and Registration Obligations
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
     If You use the Website www.rawmet24.com, You shall be responsible for maintaining the confidentiality of your Display Name and Password and You shall be responsible for all activities that occur under your Display Name and Password. You agree that if You provide any information that is untrue, inaccurate, not current or incomplete or We have reasonable grounds to suspect that such information is untrue, inaccurate, not current or incomplete, or not in accordance with the this Terms of Use, We shall have the right to indefinitely suspend or terminate or block access of your membership on the Website and refuse to provide You with access to the Website.<br/><br/>
	 Your mobile phone number and/or e-mail address is treated as Your primary identifier on the Website. It is your responsibility to ensure that Your mobile phone number and your email address is up to date on the Website at all times. You agree to notify Us promptly if your mobile phone number or e-mail address changes by updating the same on the Website through a onetime password verification.<br/><br/>
	 You agree that Rawmet24 or Shopemet Networks Pvt Ltd shall not be liable or responsible for the activities or consequences of use or misuse of any information that occurs under your display name in cases where You have failed to update Your revised mobile phone number and/or e-mail address on the Website.
	 
      </div>
    </div>
	
	
  </div>
  
   <div class="card">
    <div class="" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Communications
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
    When You use the Website or send emails or other data, information or communication to us, You agree and understand that You are communicating with Us through electronic records and You consent to receive communications via electronic records from Us periodically and as and when required. We may communicate with you by email or by such other mode of communication, electronic or otherwise.<br/><br/>
	<h6>Platform for Transaction and Communication</h6>
	 The Website is a platform that Users utilize to meet and interact with one another for their transactions. Rawmet24 is not and cannot be a party to or control in any manner any transaction between the Website's Users.<br/><br/>
	 Henceforward:<br/>
	 1.	All commercial/contractual terms are offered by and agreed to between Buyers and Sellers alone. The commercial/contractual terms include without limitation price, shipping costs, payment methods, payment terms, date, period and mode of delivery, warranties related to products and services and after sales services related to products and services. Rawmet24 does not have any control or does not determine or advise or in any way involve itself in the offering or acceptance of such commercial/contractual terms between the Buyers and Sellers. All discounts, offers (including exchange offers) are by the Seller/Brand and not by Rawmet24.<br/><br/>
	 2.	Placement of order by a Buyer with Seller on the Website is an offer to buy the product(s), material(s) in the order by the Buyer to the Seller and it shall not be construed as Seller's acceptance of Buyer's offer to buy the product(s) ordered. The Seller retains the right to cancel any such order placed by the Buyer, at its sole discretion and the Buyer shall be intimated of the same by way of an email/SMS. Any transaction price paid by Buyer in case of such cancellation by Seller, shall be refunded to the Buyer. Further, the Seller / buyer may cancel an negotiated offer or offers order wherein the quantities exceed the typical individual consumption. This applies both to the number of products ordered within a single order and the placing of several orders for the same product where the individual orders comprise a quantity that exceeds the typical individual consumption. What comprises a typical individual's consumption quantity limit shall be based on various factors and at the sole discretion of the Seller and may vary from individual to individual.<br/>
	 <br/>
	 3.	Rawmet24 does not make any representation or Warranty as to specifics (such as quality, quantity, Specifications, Certifications, value, salability, etc) of the products, materials or services proposed to be sold or offered to be sold or purchased on the Website. Rawmet24 does not implicitly or explicitly support or endorse the sale or purchase of any products or services on the Website. Rawmet24 accepts no liability for any errors or omissions, whether on behalf of itself or third parties.<br/><br/>
	 
	 4.	Rawmet24 is not responsible for any non-performance or breach of any contract entered into between Buyers and Sellers. Rawmet24 cannot and does not guarantee that the concerned Buyers and/or Sellers will perform any transaction concluded on the Website. Rawmet24 shall not and is not required to mediate or resolve any dispute or disagreement between Buyers and Sellers.<br/><br/>
	 
	 5.	Rawmet24 does not make any representation or warranty as to the item-specifics (such as legal title, creditworthiness, identity, etc) of any of its Users. You are advised to independently verify the bona fides of any particular User that You choose to deal with on the Website and use Your best judgment in that behalf.<br/><br/>
	 
	 6.	Rawmet24 does not at any point of time during any transaction between Buyer and Seller on the Website come into or take possession of any of the products or services offered by Seller nor does it at any point gain title to or have any rights or claims over the products or services offered by Seller to Buyer.<br/><br/>
	 
	 7.	At no time shall Rawmet24 hold any right, title or interest over the products nor shall Rawmet24 have any obligations or liabilities in respect of such contract entered into between Buyers and Sellers. Rawmet24 is not responsible for unsatisfactory or delayed performance of services or damages or delays as a result of products which are out of stock, unavailable or back ordered.<br/><br/>
	 
	 8.	The Website www.rawmet24.com is only a platform that can be utilized by Users to reach a larger base to buy and sell products, goods or services. Rawmet24 is only providing a search engine platform for communication and it is agreed that the contract for sale of any of the products or services shall be a strictly bipartite contract between the Seller and the Buyer.
	 <br/><br/>
	 At no time shall Rawmet24 hold any any right, title or interest over the products nor shall Rawmet24 have any obligations or liabilities in respect of such contract.
	 <br/>
	 Rawmet24 is not responsible for unsatisfactory or delayed performance of services or damages or delays as a result of products which are out of stock, unavailable or back ordered.
	 <br/><br/>
		1.	You shall independently agree upon the manner and terms and conditions of delivery, 	payment, insurance etc. with the seller(s) that You transact with.<br/>
		Disclaimer: Pricing on any product(s) as is reflected on the Website may due to some technical issue, typographical error or product information published by seller may be incorrectly reflected and in such an event seller may cancel such your order(s).
		<br/><br/>
		2.	You release and indemnify Rawmet24, Shopemet Networks Pvt Ltd and/or any of its officers and representatives from any cost, damage, liability or other consequence of any of the actions of the Users of the Website and specifically waive any claims that you may have in this behalf under any applicable law. Notwithstanding its reasonable efforts in that behalf, Rawmet24 cannot take responsibility or control the information provided by other Users which is made available on the Website. You may find other User's information to be offensive, harmful, inconsistent, inaccurate, or deceptive. Please use caution and practice safe trading when using the Website.
		<br/>
		Please note that there could be risks in dealing with underage persons or people acting under false pretence.
	 
	 
      </div>
    </div>
	
	
  </div>
  
   <div class="card">
    <div class="" id="headingfive">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
          Charges
        </button>
      </h5>
    </div>
    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
      <div class="card-body">
     Membership on the Website is free for buyers. Rawmet24 does not charge any fee for browsing and buying on the Website.  PAID SELLER - Any Seller who pays the annual membership fee 5000/-( Inclusive of Service Tax) as prescribed by rawmet24 is a paid Seller. Rawmet24 reserves the right to change its Fee Policy from time to time. In particular, Rawmet24 may at its sole discretion introduce new services and modify some or all of the existing services offered on the Website. In such an event Rawmet24 reserves the right to introduce fees for the new services offered or amend/introduce fees for existing services, as the case may be. Changes to the Fee Policy shall be posted on the Website and such changes shall automatically become effective immediately after they are posted on the Website. Unless otherwise stated, all fees shall be quoted in Indian Rupees. You shall be solely responsible for compliance of all applicable laws including those in India for making payments to Shopemet Networks Private Limited.
	 
      </div>
    </div>
	
	
  </div>
  
  <div class="card">
    <div class="" id="headingsix">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
          Use of the Website
        </button>
      </h5>
    </div>
    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
      <div class="card-body">
    You agree, undertake and confirm that Your use of Website shall be strictly governed by the following binding principles:<br/><br/>
	1.	You shall not host, display, upload, modify, publish, transmit, update or share any information which:<br/><br/>
	(a) belongs to another person and to which You does not have any right to;<br/>
	(b) is grossly harmful, harassing, blasphemous, defamatory, obscene, pornographic, paedophilic, libellous, invasive of another's privacy, hateful, or racially, ethnically objectionable, disparaging, relating or encouraging money laundering or gambling, or otherwise unlawful in any manner whatever; or unlawfully threatening or unlawfully harassing including but not limited to "indecent representation of women" within the meaning of the Indecent Representation of Women (Prohibition) Act, 1986;<br/>
	(c) is misleading in any way;<br/>
	(d) is patently offensive to the online community, such as sexually explicit content, or content that promotes obscenity, paedophilia, racism, bigotry, hatred or physical harm of any kind against any group or individual;</br>
	(e) harasses or advocates harassment of another person;</br>
	(f) involves the transmission of "junk mail", "chain letters", or unsolicited mass mailing or "spamming";<br/>
	(g) promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libellous;<br/>
	(h) infringes upon or violates any third party's rights [including, but not limited to, intellectual property rights, rights of privacy (including without limitation unauthorized disclosure of a person's name, email address, physical address or phone number) or rights of publicity];<br/>
	(i) promotes an illegal or unauthorized copy of another person's copyrighted work (see "Copyright complaint" below for instructions on how to lodge a complaint about uploaded copyrighted material), such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;<br/>
	(j) contains restricted or password-only access pages, or hidden pages or images (those not linked to or from another accessible page);<br/>
	(k) provides material that exploits people in a sexual, violent or otherwise inappropriate manner or solicits personal information from anyone;<br/>
	(l) provides instructional information about illegal activities such as making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;<br/>
	(m) contains video, photographs, or images of another person (with a minor or an adult).<br/>
	(n) tries to gain unauthorized access or exceeds the scope of authorized access to the Website or to profiles, blogs, communities, account information, bulletins, friend request, or other areas of the Website or solicits passwords or personal identifying information for commercial or unlawful purposes from other users;<br/>
	(o) engages in commercial activities and/or sales without Our prior written consent such as contests, sweepstakes, barter, advertising and pyramid schemes, or the buying or selling of "virtual" products related to the Website. Throughout this Terms of Use, Rawmet24's prior written consent means a communication coming from Rawmet24's Legal Department, specifically in response to Your request, and specifically addressing the activity or conduct for which You seek authorization;
	<br/>
	(p) solicits gambling or engages in any gambling activity which We, in Our sole discretion, believes is or could be construed as being illegal;
	<br/>
	(q) interferes with another USER's use and enjoyment of the Website or any other individual's User and enjoyment of similar services;
	<br/>
	(r) refers to any website or URL that, in Our sole discretion, contains material that is inappropriate for the Website or any other website, contains content that would be prohibited or violates the letter or spirit of these Terms of Use.
	<br/>
	(s) harm minors in any way;<br/>
	(t) infringes any patent, trademark, copyright or other proprietary rights or third party's trade secrets or rights of publicity or privacy or shall not be fraudulent or involve the sale of counterfeit or stolen products;<br/>
	(u) violates any law for the time being in force;</br>
	(v) deceives or misleads the addressee/ users about the origin of such messages or communicates any information which is grossly offensive or menacing in nature;<br/>
	(w) impersonate another person;<br/>
	(x) contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer resource; or contains any trojan horses, worms, time bombs, cancelbots, easter eggs or other computer programming routines that may damage, detrimentally interfere with, diminish value of, surreptitiously intercept or expropriate any system, data or personal information;<br/>
	(y) threatens the unity, integrity, defence, security or sovereignty of India, friendly relations with foreign states, or public order or causes incitement to the commission of any cognizable offence or prevents investigation of any offence or is insulting any other nation.<br/>
	(z) shall not be false, inaccurate or misleading;<br/>
	(aa) shall not, directly or indirectly, offer, attempt to offer, trade or attempt to trade in any item, the dealing of which is prohibited or restricted in any manner under the provisions of any applicable law, rule, regulation or guideline for the time being in force.<br/>
	(ab) shall not create liability for Us or cause Us to lose (in whole or in part) the services of Our internet service provider ("ISPs") or other suppliers;<br/><br/>
	2.	Your correspondence or business dealings with, or participation in promotions of, advertisers found on or through the Website, including payment and delivery of related products or services, and any other terms, conditions, warranties or representations associated with such dealings, are solely between You and such advertiser. We shall not be responsible or liable for any loss or damage of any sort incurred as the result of any such dealings or as the result of the presence of such advertisers on the Website.
	<br/><br/>
	3.	It is possible that other users (including unauthorized users or "hackers") may post or transmit offensive or obscene materials on the Website and that You may be involuntarily exposed to such offensive and obscene materials. It also is possible for others to obtain personal information about You due to your use of the Website, and that the recipient may use such information to harass or injure You. We does not approve of such unauthorized uses, but by using the Website You acknowledge and agree that We are not responsible for the use of any personal information that You publicly disclose or share with others on the Website. Please carefully select the type of information that You publicly disclose or share with others on the Website.<br/><br/>
	4.	Rawmet24  shall have all the rights to take necessary action and claim damages that may occur due to your involvement/participation in any way on your own or through group/s of people, intentionally or unintentionally in DoS/DDoS (Distributed Denial of Services).
	 
      </div>
    </div>
  </div>
  
   <div class="card">
    <div class="" id="headingseven">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
          Contents Posted on Site
        </button>
      </h5>
    </div>
    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
      <div class="card-body">
    All text, graphics, user interfaces, visual interfaces, photographs, trademarks, logos, sounds, music and artwork (collectively, "Content"), is a third party user generated content and Rawmet24 has no control over such third party user generated content as Rawmet24 is merely an intermediary for the purposes of this Terms of Use.<br/><br/>
	Except as expressly provided in these Terms of Use, no part of the Website and no Content may be copied, reproduced, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted or distributed in any way (including "mirroring") to any other computer, server, Website or other medium for publication or distribution or for any commercial enterprise, without Rawmet24's express prior written consent.<br/><br/>You may use information on the products and services purposely made available on the Website for downloading, provided that You (1) do not remove any proprietary notice language in all copies of such documents, (2) use such information only for your personal, non-commercial informational purpose and do not copy or post such information on any networked computer or broadcast it in any media, (3) make no modifications to any such information, and (4) do not make any additional representations or warranties relating to such documents.<br/><br/>You shall be responsible for any notes, messages, emails, billboard postings, photos, drawings, profiles, opinions, ideas, images, videos, audio files or other materials or information posted or transmitted to the Website (collectively, "Content"). Such Content will become Our property and You grant Us the worldwide, perpetual and transferable rights in such Content. We shall be entitled to, consistent with Our Privacy Policy as adopted in accordance with applicable law, use the Content or any of its elements for any type of use forever, including but not limited to promotional and advertising purposes and in any media whether now known or hereafter devised, including the creation of derivative works that may include the Content You provide. You agree that any Content You post may be used by us, consistent with Our Privacy Policy and Rules of Conduct on Site as mentioned herein, and You are not entitled to any payment or other compensation for such use.<br/><br/>
	1.	You shall not use any "deep-link", "page-scrape", "robot", "spider" or other automatic device, program, algorithm or methodology, or any similar or equivalent manual process, to access, acquire, copy or monitor any portion of the Website or any Content, or in any way reproduce or circumvent the navigational structure or presentation of the Website or any Content, to obtain or attempt to obtain any materials, documents or information through any means not purposely made available through the Website. We reserve Our right to bar any such activity.<br/>
	2.	You shall not attempt to gain unauthorized access to any portion or feature of the Website, or any other systems or networks connected to the Website or to any server, computer, network, or to any of the services offered on or through the Website, by hacking, password "mining" or any other illegitimate means.<br/>
	3.	You shall not probe, scan or test the vulnerability of the Website or any network connected to the Website nor breach the security or authentication measures on the Website or any network connected to the Website. You may not reverse look-up, trace or seek to trace any information on any other User of or visitor to Website, or any other customer, including any account on the Website not owned by You, to its source, or exploit the Website or any service or information made available or offered by or through the Website, in any way where the purpose is to reveal any information, including but not limited to personal identification or information, other than Your own information, as provided for by the Website.<br/>
	4.	You shall not make any negative, denigrating or defamatory statement(s) or comment(s) about Us or the brand name or domain name used by Us including the terms Rawmet24, AucJunction, Shopemet Networks Pvt Ltd, or otherwise engage in any conduct or action that might tarnish the image or reputation, of Rawmet24 or sellers on platform or otherwise tarnish or dilute any Rawmet24's trade or service marks, trade name and/or goodwill associated with such trade or service marks, trade name as may be owned or used by us. You agree that You will not take any action that imposes an unreasonable or disproportionately large load on the infrastructure of the Website or Rawmet24's systems or networks, or any systems or networks connected to Rawmet24.<br/>
	5.	You agree not to use any device, software or routine to interfere or attempt to interfere with the proper working of the Website or any transaction being conducted on the Website, or with any other person's use of the Website.<br/>
	6.	You may not forge headers or otherwise manipulate identifiers in order to disguise the origin of any message or transmittal You send to Us on or through the Website or any service offered on or through the Website. You may not pretend that You are, or that You represent, someone else, or impersonate any other individual or entity.<br/>
	7.	You may not use the Website or any content for any purpose that is unlawful or prohibited by these Terms of Use, or to solicit the performance of any illegal activity or other activity which infringes the rights of Rawmet24 and / or others.<br/>
	8.	You shall at all times ensure full compliance with the applicable provisions of the Information Technology Act, 2000 and rules thereunder as applicable and as amended from time to time and also all applicable Domestic laws, rules and regulations (including the provisions of any applicable Exchange Control Laws or Regulations in Force) and International Laws, Foreign Exchange Laws, Statutes, Ordinances and Regulations (including, but not limited to Sales Tax/VAT, Income Tax, Octroi, Service Tax, Central Excise, Custom Duty, Local Levies) regarding Your use of Our service and Your listing, purchase, solicitation of offers to purchase, and sale of products or services. You shall not engage in any transaction in an item or service, which is prohibited by the provisions of any applicable law including exchange control laws or regulations for the time being in force.<br/>
	9.	Solely to enable Us to use the information You supply Us with, so that we are not violating any rights You might have in Your Information, You agree to grant Us a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sub-licensable (through multiple tiers) right to exercise the copyright, publicity, database rights or any other rights You have in Your Information, in any media now known or not currently known, with respect to Your Information. We will only use Your information in accordance with the Terms of Use and Privacy Policy applicable to use of the Website.<br/>
	10.	From time to time, You shall be responsible for providing information relating to the products or services proposed to be sold by You. In this connection, You undertake that all such information shall be accurate in all respects. You shall not exaggerate or over emphasize the attributes of such products or services so as to mislead other Users in any manner.<br/>
	11.	You shall not engage in advertising to, or solicitation of, other Users of the Website to buy or sell any products or services, including, but not limited to, products or services related to that being displayed on the Website or related to us. You may not transmit any chain letters or unsolicited commercial or junk email to other Users via the Website. It shall be a violation of these Terms of Use to use any information obtained from the Website in order to harass, abuse, or harm another person, or in order to contact, advertise to, solicit, or sell to another person other than Us without Our prior explicit consent. In order to protect Our Users from such advertising or solicitation, We reserve the right to restrict the number of messages or emails which a user may send to other Users in any 24-hour period which We deems appropriate in its sole discretion. You understand that We have the right at all times to disclose any information (including the identity of the persons providing information or materials on the Website) as necessary to satisfy any law, regulation or valid governmental request. This may include, without limitation, disclosure of the information in connection with investigation of alleged illegal activity or solicitation of illegal activity or in response to a lawful court order or subpoena. In addition, We can (and You hereby expressly authorize Us to) disclose any information about You to law enforcement or other government officials, as we, in Our sole discretion, believe necessary or appropriate in connection with the investigation and/or resolution of possible crimes, especially those that may involve personal injury.<br/><br/>
	We reserve the right, but has no obligation, to monitor the materials posted on the Website. Rawmet24 shall have the right to remove or edit any content that in its sole discretion violates, or is alleged to violate, any applicable law or either the spirit or letter of these Terms of Use. Notwithstanding this right, YOU REMAIN SOLELY RESPONSIBLE FOR THE CONTENT OF THE MATERIALS YOU POST ON THE WEBSITE AND IN YOUR PRIVATE MESSAGES. Please be advised that such Content posted does not necessarily reflect Rawmet24 views. In no event shall Rawmet24 assume or have any responsibility or liability for any Content posted or for any claims, damages or losses resulting from use of Content and/or appearance of Content on the Website. You hereby represent and warrant that You have all necessary rights in and to all Content which You provide and all information it contains and that such Content shall not infringe any proprietary or other rights of third parties or contain any libellous, tortious, or otherwise unlawful information.
	 
      </div>
    </div>
	</div>
	
	<div class="card">
    <div class="" id="headingeight">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
          Privacy
        </button>
      </h5>
    </div>
    <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
      <div class="card-body">
     We view protection of Your privacy as a very important principle. We understand clearly that You and Your Personal Information is one of Our most important assets. We store and process Your Information including any sensitive financial information collected (as defined under the Information Technology Act, 2000), if any, on computers that may be protected by physical as well as reasonable technological security measures and procedures in accordance with Information Technology Act 2000 and Rules there under. Our current Privacy Policy is available at Privacy. If You object to Your Information being transferred or used in this way please do not use Website.<br/><br/>
We may share personal information with our other corporate entities and affiliates. These entities and affiliates may market to you as a result of such sharing unless you explicitly opt-out.<br/><br/>
We may disclose personal information to third parties. This disclosure may be required for us to provide you access to our Services, to comply with our legal obligations, to enforce our User Agreement, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our Services. We do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.
<br/><br/>
We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public.
We and our affiliates will share / sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.

	<h6>Disclaimer of Warranties and Liability</h6> 
	This Website, all the materials and products (including but not limited to software) and services, included on or otherwise made available to You through this site are provided on "as is" and "as available" basis without any representation or warranties, express or implied except otherwise specified in writing. Without prejudice to the forgoing paragraph, Rawmet24 does not warrant that:<br/>
	This Website will be constantly available, or available at all; or The information on this Website is complete, true, accurate or non-misleading.<br/><br/>
	
	Rawmet24 will not be liable to You in any way or in relation to the Contents of, or use of, or otherwise in connection with, the Website. Rawmet24 does not warrant that this site; information, Content, materials, product (including software) or services included on or otherwise made available to You through the Website; their servers; or electronic communication sent from Us are free of viruses or other harmful components.<br/><br/>
	Nothing on Website constitutes, or is meant to constitute, advice of any kind. All the Products sold on Website are governed by different state laws and if Seller is unable to deliver such Products due to implications of different state laws, Seller will return or will give credit for the amount (if any) received in advance by Seller from the sale of such Product that could not be delivered to You.<br/><br/>
	You will be required to enter a valid phone number while placing an order on the Website. By registering Your phone number with us, You consent to be contacted by Us via phone calls, SMS notifications, mobile applications and/or any other electronic mode of communication in case of any order or shipment or delivery related updates. We will not use your personal information to initiate any promotional phone calls or SMS.
	
	<h6>Selling</h6>
	As a registered seller, you are allowed to list item(s), raw materials for sale on the Website in accordance with the Policies which are incorporated by way of reference in this Terms of Use. You must be legally able to sell the item(s) you list for sale on our Website. You must ensure that the listed items do not infringe upon the intellectual property, trade secret or other proprietary rights or rights of publicity or privacy rights of third parties. Listings may only include text descriptions, graphics and pictures that describe your item for sale. All listed items must be listed in an appropriate category on the Website. All listed items must be kept in stock for successful fulfilment of sales.<br/><br/>
	The listing description of the item must not be misleading and must describe actual condition of the product. If the item description does not match the actual condition of the item, you agree to refund any amounts that you may have received from the Buyer. You agree not to list a single product in multiple quantities across various categories on the Website. Rawmet24 reserves the right to delete such multiple listings of the same product listed by you in various categories.
	
	
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="" id="headingnine">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
          Services Payment
        </button>
      </h5>
    </div>
    <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordion">
      <div class="card-body">
     While availing any of the payment method/s available on the Website, we will not be responsible or assume any liability, whatsoever in respect of any loss or damage arising directly or indirectly to You due to:<br/><br/>
1.	Lack of authorization for any transaction/s, or<br/>
2.	Exceeding the preset limit mutually agreed by You and between "Bank/s", or<br/>
3.	Any payment issues arising out of the transaction, or<br/>
4.	Decline of transaction for any other reason/s
<br/><br/>
All payments made against the purchases/services on Website by you shall be compulsorily in Indian Rupees acceptable in the Republic of India. Website will not facilitate transaction with respect to any other form of currency with respect to the purchases made on Website.
Before shipping / delivering your order/purchase order to you, Seller may request you to provide supporting documents (including but not limited to Govt. issued ID and address proof) to establish the ownership of the payment instrument used by you for your purchase. This is done in the interest of providing a safe online business buying environment to Our Users.

<br/><br/>
Further:<br/>

	1.	Transactions, Transaction Price and all commercial terms such as Delivery, Dispatch of products and/or services are as per principal to principal bipartite contractual obligations between Buyer and Seller and payment facility is merely used by the Buyer and Seller to facilitate the completion of the Transaction. Use of the payment facility shall not render Rawmet24 liable or responsible for the non-delivery, non-receipt, non-payment, damage, breach of representations and warranties, non-provision of after sales or warranty services or fraud as regards the products and /or services listed on Rawmet24's Website.<br/>
	2.	You have specifically authorized Rawmet24 or its service providers to collect, process, facilitate and remit payments and / or the Transaction Price electronically or through Cash on Delivery to and from other Users in respect of transactions through Payment Facility. Your relationship with Rawmet24 is on a principal to principal basis and by accepting these Terms of Use you agree that Rawmet24 is an independent contractor for all purposes, and does not have control of or liability for the products or services that are listed on Rawmet24's Website that are paid for by using the Payment Facility. Rawmet24 does not guarantee the identity of any User nor does it ensure that a Buyer or a Seller will complete a transaction.<br/>
	3.	You understand, accept and agree that the payment facility provided by Rawmet24 is neither a banking nor financial service but is merely a facilitator providing an electronic, automated online electronic payment, receiving payment through Cash On Delivery, collection and remittance facility for the Transactions on the Rawmet24 Website using the existing authorized banking infrastructure and Credit Card payment gateway networks. Further, by providing Payment Facility, Rawmet24 is neither acting as trustees nor acting in a fiduciary capacity with respect to the Transaction or the Transaction Price.<br/>
<h6>Payment Facility for Buyers:</h6>
	You, as a Buyer, understand that upon initiating a Transaction You are entering into a legally binding and enforceable contract with the Seller to purchase the products and /or services from the Seller using the Payment Facility, and You shall pay the Transaction Price through Your Issuing Bank to the Seller using Payment Facility.<br/><br/><br/>
	You, as a Buyer, may agree with the Seller through electronic communication and electronic records and using the automated features as may be provided by Payment Facility on any extension / increase in the Dispatch and/or Delivery time and the Transaction shall stand amended to such extent. Any such extension / increase of Dispatch / Delivery time or subsequent novation / variation of the Transaction should be in compliance with Payment Facility Rules and Policies.<br/><br/>
	You, as a Buyer, shall electronically notify Payment Facility using the appropriate Rawmet24 Website features immediately upon Delivery or non Delivery within the time period as provided in Policies. Non notification by You of Delivery or non Delivery within the time period specified in the Policies shall be construed as a deemed Delivery in respect of that Transaction. In case of Cash On Delivery transactions, Buyer is not required to confirm the receipt of products or services.<br/><br/>
	You, as a Buyer, shall be entitled to claim a refund of the Transaction Price (as Your sole and exclusive remedy) in case You do not receive the Delivery within the time period agreed in the Transaction or within the time period as provided in the Policies, whichever is earlier. In case you do not raise a refund claim using Website features within the stipulated time than this would make You ineligible for a refund.<br/><br/>
	You, as a Buyer, understand that the Payment Facility may not be available in full or in part for certain category of products and/or services and/or Transactions as mentioned in the Policies and hence You may not be entitled to a refund in respect of the Transactions for those products and /or services.<br/><br/>
	
You, as a Buyer, understand that the Payment Facility may not be available in full or in part for certain category of products and/or services and/or Transactions as mentioned in the Policies and hence You may not be entitled to a refund in respect of the Transactions for those products and /or services<br/><br/>
	For Cash On Delivery transactions, refunds, if any, will be made via electronic payment transfers.<br/>
Refund shall be made in Indian Rupees only and shall be equivalent to the Transaction Price received in Indian Rupees.<br/>
For electronics payments, refund shall be made through payment facility using NEFT / RTGS or any other online banking / electronic funds transfer system approved by Reserve Bank India (RBI).<br/>
Refunds may be supported for select banks. Where a bank is not supported for processing refunds, You will be required to share alternate bank account details with us for processing the refund.<br/>
Refund shall be conditional and shall be with recourse available to Rawmet24 in case of any misuse by Buyer.<br/>
We may also request you for additional documents for verification.
Refund shall be subject to Buyer complying with Policies.<br/><br/>
1.	Rawmet24 reserves the right to impose limits on the number of Transactions or Transaction Price which Rawmet24 may receive from on an individual Valid Credit/Debit/ Cash Card / Valid Bank Account/ and such other infrastructure or any other financial instrument directly or indirectly through payment aggregator or through any such facility authorized by Reserve Bank of India to provide enabling support facility for collection and remittance of payment or by an individual Buyer during any time period, and reserves the right to refuse to process Transactions exceeding such limit.<br/>
2.	Rawmet24 reserves the right to refuse to process Transactions by Buyers with a prior history of questionable charges including without limitation breach of any agreements by Buyer with Rawmet24 or breach/violation of any law or any charges imposed by Issuing Bank or breach of any policy.<br/>
3.	Rawmet24 may do such checks as it deems fit before approving the receipt of/Buyers commitment to pay (for Cash On Delivery transactions) Transaction Price from the Buyer for security or other reasons at the discretion of Rawmet24. As a result of such check if Rawmet24 is not satisfied with the creditability of the Buyer or genuineness of the Transaction or other reasons at its sole discretion, Rawmet24 shall have the right to reject the receipt of / Buyers commitment to pay Transaction Price. For avoidance of doubt, it is hereby clarified that the ‘Cash on Delivery’ feature for payment, may be disabled for certain account users, at the sole discretion of Rawmet24.<br/>
4.	Rawmet24 may delay notifying the payment confirmation i.e. informing Seller to Dispatch, if Rawmet24 deems suspicious or for Buyers conducting high transaction volumes to ensure safety of the Transaction and Transaction Price. In addition, Rawmet24 may hold Transaction Price and Rawmet24 may not inform Seller to Dispatch or remit Transaction Price to law enforcement officials (instead of refunding the same to Buyer) at the request of law enforcement officials or in the event the Buyer is engaged in any form of illegal activity.<br/>
5.	The Buyer and Seller acknowledge that Rawmet24 will not be liable for any damages, interests or claims etc. resulting from not processing a Transaction/Transaction Price or any delay in processing a Transaction/Transaction Price which is beyond control of Rawmet24.<br/>
<h6>Compliance with Laws:</h6>
1.	As required by applicable law, if the Customer makes a purchase of an amount equal to or above INR 2 00 000.00, the Customer will be required to upload a scanned copy of his/her PAN card on the Platform, within 4 days of making the purchase order, failing which, the purchase made by the Customer will be cancelled. The requirement to submit the PAN card arises only once and if it has been submitted once by the Customer, it need not be submitted again. The order of the Customer shall stand cancelled if there is a discrepancy between the name of the Customer and the name on the PAN Card.<br/>

2.	Buyer and Seller shall comply with all the applicable laws (including without limitation Foreign Exchange Management Act, 1999 and the rules made and notifications issued there under and the Exchange Control Manual as may be issued by Reserve Bank of India from time to time, Customs Act, Information and Technology Act, 2000 as amended by the Information Technology (Amendment) Act 2008, Prevention of Money Laundering Act, 2002 and the rules made there under, Foreign Contribution Regulation Act, 1976 and the rules made there under, Income Tax Act, 1961 and the rules made there under, Export Import Policy of government of India) applicable to them respectively for using Payment Facility and Rawmet24 Website.<br/>
<h6>Buyer's arrangement with Issuing Bank:</h6>

1.	All Valid Credit / Debit/ Cash Card/ and other payment instruments are processed using a Credit Card payment gateway or appropriate payment system infrastructure and the same will also be governed by the terms and conditions agreed to between the Buyer and the respective Issuing Bank and payment instrument issuing company.<br/>
2.	All Online Bank Transfers from Valid Bank Accounts are processed using the gateway provided by the respective Issuing Bank which support Payment Facility to provide these services to the Users. All such Online Bank Transfers on Payment Facility are also governed by the terms and conditions agreed to between Buyer and the respective Issuing Bank.



	
	
      </div>
    </div>
  </div>
  
  
  
   <div class="card">
    <div class="" id="headingten">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
          Rawmet24's Replacement Guarantee*
        </button>
      </h5>
    </div>
    <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordion">
      <div class="card-body">
    Rawmet24's Replacement Guarantee seeks to assist Buyers who have been defrauded by qualified sellers on the Website. The return policy period (Rawmet24's Replacement Guarantee) depends on the product category and the seller. Kindly click here to know the return policy period applicable for different categories. If at the time of delivery and/or within the applicable return policy period, if any defect is found, then the buyer of the product/s can ask for replacement of the product/s from the seller subject to the following terms and conditions:<br/><br/>
	1.	Notify seller of any defects in the product/s at the time of delivery of the product/s and/or within the applicable return policy period and the same product/s will be replaced in return of the defective product/s.<br/>
2.	Replacement can be for the entire product/s or part/s of the product subject to availability of the same with the seller<br/><br/>
Following products shall not be eligible for return or replacement:<br/><br/>
a. Damages due to misuse of product/raw materials;<br/>
b. Incidental damage due to malfunctioning of product;<br/>
c. Any consumable item which has been used/installed;<br/>
d. Products with tampered or missing serial/UPC numbers;<br/>
f. Any damage/defect which are not covered under the manufacturer's warranty<br/>
g. Any product that is returned without all original packaging and accessories, including the box, manufacturer's packaging if any, and all other items originally included with the product/s delivered;<br/><br/>

If Rawmet24 has any suspicion or knowledge that any of its buyers and sellers are involved in any activity that is intended to provide claims or information that is false or not genuine, Rawmet24 may also, while reserving its rights to initiate civil and/or criminal proceedings against such member buyers and sellers, at its sole discretion, suspend, block, restrict, cancel the Display Name of such buyers and sellers and/or disqualify that user and any related users from availing protection through this program. Customers who have been blocked for any suspicious or fraudulent activity on Rawmet24 will not be allowed to return their products.<br/><br/>
Rawmet24 reserves its right to initiate civil and/or criminal proceedings against a user who, files a invalid and/or false claims or provides false, incomplete, or misleading information. In addition to the legal proceedings as aforesaid, Rawmet24 may at its sole discretion suspend, block, restrict, cancel the Display Name [and its related Display Names] of such user and/or disqualify that user and any related users from availing protection through this program. Any person who, knowingly and with intent to injure, defraud or deceive, files a Fraudulent Complaint containing false, incomplete, or misleading information may be guilty of a criminal offence and will be prosecuted to the fullest extent of the law.<br/><br/>
You agree to indemnity and keep indemnifying Rawmet24.com and any future buyer of the device against all or any third party claims, demand, cost, expenses including attorney fees which may be suffered, incurred, undergone and / or sustained by Rawmet24.com, its affiliates or any future buyer due to usage of the device by you till date and you undertake to make good the same.<br/><br/>
I confirm that all the data in the said device will be erased before handing it over under buy back program. I also confirm that in spite of erasing the data manually/electronically, if any data still accessible due any technical reason, Rawmet24.com, Seller or the Manufacturer shall not be responsible for the same and I will not approach Rawmet24.com for any retrieval of the data.<br/><br/>
I hereby give my consent that my personal information that I have provided in connection with this buyback program might be processed, transferred and retained by the retailer and other entities involved in managing the program for the purposes of validating the information that I provided herein and for the administration of the program.<br/><br/>
I agree to indemnity and keep indemnifying the Rawmet24.com and any future buyer of the old device against all or any third party claims, demand, cost, expenses including attorney fees which may be suffered, incurred, undergone and / or sustained by Rawmet24.com, its affiliates or any future buyer due to usage of the device by me till date and I undertake to make good the same.<br/><br/>
I understand once a device is sent by me to Rawmet24, in no scenario can this device be returned back to me.<br/><br/>
I understand that the new device delivery and the old device pickup will happen simultaneously (hand in hand) and I shall keep the old device ready to be given for exchange.<br/><br/>
Products distributed as gifts from state sponsored or NGO funded distribution programs are not accepted for exchange under exchange offers.<br/>
<h6>Indemnity</h6>
You shall indemnify and hold harmless Rawmet24, its owner, licensee, affiliates, subsidiaries, group companies (as applicable) and their respective officers, directors, agents, and employees, from any claim or demand, or actions including reasonable attorneys' fees, made by any third party or penalty imposed due to or arising out of Your breach of this Terms of Use, privacy Policy and other Policies, or Your violation of any law, rules or regulations or the rights (including infringement of intellectual property rights) of a third party.<br/>
<h6>Applicable Law</h6>
Terms of Use shall be governed by and interpreted and construed in accordance with the laws of India. The place of jurisdiction shall be exclusively in Bangalore.<br/>
<h6>Jurisdictional Issues/Sale in India Only</h6>
Unless otherwise specified, the material on the Website is presented solely for the purpose of sale in India. Rawmet24 make no representation that materials in the Website are appropriate or available for use in other locations/Countries other than India. Those who choose to access this site from other locations/Countries other than India do so on their own initiative and Rawmet24 is not responsible for supply of products/refund for the products ordered from other locations/Countries other than India, compliance with local laws, if and to the extent local laws are applicable.<br/>
<h6>Trademark, Copyright and Restriction</h6>
This site is controlled and operated by Shopemet Networks Pvt Ltd and products are sold by respective Sellers. All material on this site, including images, illustrations, audio clips, and video clips, are protected by copyrights, trademarks, and other intellectual property rights. Material on Website is solely for Your personal, non-commercial, commercial, industrial use. You must not copy, reproduce, republish, upload, post, transmit or distribute such material in any way, including by email or other electronic means and whether directly or indirectly and You must not assist any other person to do so. Without the prior written consent of the owner, modification of the materials, use of the materials on any other website or networked computer environment or use of the materials for any purpose other than personal, non-commercial use is a violation of the copyrights, trademarks and other proprietary rights, and is prohibited. Any use for which You receive any remuneration, whether in money or otherwise, is a commercial use for the purposes of this clause.
Trademark complaint
<br/><br/>
Rawmet24 respects the intellectual property of others. In case You feel that Your Trademark has been infringed, You can write to Rawmet24 at admin@rawmet24.com<br/>
<h6>Product Description</h6>
Rawmet24 we do not warrant that Product description or other content of this Website is accurate, <br/>
<h6>Limitation of Liability</h6>
IN NO EVENT SHALL RAWMET24 BE LIABLE FOR ANY SPECIAL, INCIDENTAL, INDIRECT OR CONSEQUENTIAL DAMAGES OF ANY KIND IN CONNECTION WITH THESE TERMS OF USE, EVEN IF USER HAS BEEN INFORMED IN ADVANCE OF THE POSSIBILITY OF SUCH DAMAGES.



	 
      </div>
    </div>
	
	
  </div>
  
  
  
   <div class="card">
    <div class="" id="headingeleven">
      <h5 class="mb-0">
        <button class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
         POLICIES(Profanity Policy)
        </button>
      </h5>
    </div>
    <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordion">
      <div class="card-body">
    Rawmet24 prohibits the use of language that is racist, hateful, sexual or obscene in nature in a public area.<br/><br/>
	This policy extends to text within listings, on Seller pages and all other areas of the site that another User may view. If the profane words are part of a title for the item being sold, we allow Sellers to 'blur' out the bulk of the offending word with asterisks (i.e., s*** or f***).<br/><br/>
Please report any violations of this policy to the correct area for review:<br/>
•	Report offensive Display Names<br/>
•	Report offensive language in a listing or otherwise<br/>
<br/>
	If a feedback comment; or any communication made between Users on the Website; or email communication between Users in relation to transactions conducted on Website contain profanity, please review Our feedback removal policy and submit a request for action/removal.<br/>
	Disciplinary action may result in the indefinite suspension of a User's account, temporary suspension, or a formal warning.</br>
	Rawmet24 will consider the circumstances of an alleged policy violation and the user's trading records before taking action.</br>
	Violations of this policy may result in a range of actions, including:<br/>
1.	Limits placed on account privileges;<br/>
2.	Loss of special status;<br/>
3.	Account suspension.
<br/><h6>Replacement Guarantee*</h6>
	The Replacement Guarantee seeks to assist Buyers who have been defrauded by qualified sellers on the Website. If at the time of delivery and/or within specified days from the date of delivery of the product/s, if any defect is found, then the buyer of the product/s can ask for replacement of the product/s from the seller.<br/>
	If Rawmet24 has suspicion or knowledge, that any of its buyers and sellers are involved in any activity that is intended to provide claims or information that is false, misleading or not genuine, then Rawmet24 may while reserving its rights to initiate civil and/or criminal proceedings against User may also at its sole discretion suspend, block, restrict, cancel the Display Name of such buyer and seller and /or disqualify that User and any related Users from availing protection through this program.<br/>
	Rawmet24 reserves its right to initiate civil and/or criminal proceedings against a User who, files a invalid and/or false claims or provides false, incomplete, or misleading information. In addition to the legal proceedings as aforesaid, Rawmet24 may at its sole discretion suspend, block, restrict, cancel the Display Name [and its related Display Names] of such User and/or disqualify that User and any related Users from availing protection through this program. Any person who, knowingly and with intent to injure, defraud or deceive, files a Fraudulent Complaint containing false, incomplete, or misleading information may be guilty of a criminal offence and will be prosecuted to the fullest extent of the law.<br/>
	For more details related to Replacement Policy, refer to s/help/cancellation-returns<br/>
<h6>Returns Policy</h6>

	Definition: 'Return' is defined as the action of giving back the item purchased by the Buyer to the Seller on the Rawmet24 website. Following situations may arise:<br/>
1.	Item / raw material was defective<br/>
2.	Item / raw material was damaged during the Shipping<br/>
3.	Products was / were missing<br/>
4.	Wrong item was sent by the Seller<br/>
5.	Return could also result in refund of money in most of the cases.
<br/>
<h6>Points to be noted:</h6>
	1.	Seller can always accept the return irrespective of the policy.<br/>
2.	If Seller disagrees a return request, Buyer can file a dispute under the rawmet24 customer protect
<br/>
	We encourage the Buyer to review the listing before making the purchase decision. In case Buyer orders a wrong item, Buyer shall not be entitled to any return/refund.<br/><br/>
Buyer needs to raise the return request within the return period applicable to the respective product.Once Buyer has raised a return request by contacting Us on Our Toll Free Number, Seller while closing the return ticket can select one of the following:
<br/>
	1.	Replace after shipment collection - Seller has agreed to wait for the logistics team to collect the shipment from the buyer before replacing it)<br/>
2.	Refund after shipment collection - Seller has agreed to wait for the logistics team to collect the shipment from the buyer before refunding)<br/>
3.	Refund without shipment collection - Seller has agreed to refund the buyer without expecting the original shipment back)<br/>
4.	Replace without shipment collection - Seller has agreed to replace the order without expecting the original shipment back)<br/>
5. In the event the Seller accepts the return request raised by the Buyer, Buyer will have to return the product and then the refund shall be credited to the Buyers account.<br/><br/>
	In case the Seller doesn't close the ticket in 3 days from the date of intimation to the Seller about the refund request, the refund request shall be settled in favor of the Buyer.<br/>
Further for returns being made by Buyer to the Seller of the product, the following parameters needs to be ensured by the Buyer:<br/>


<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Condition</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Metals (New)</td>
      <td>Should be New Un Used And return as recieved</td>
      
    </tr>
    <tr>
      <td>Metals (Secondary)</td>
      <td>Should be Un Used and return as recieved</td>
     </tr>
    <tr>
      <td>Ferrous, Non Ferrous, Minor Metals</td>
      <td>Should be Un Used and return as recieved</td>
    </tr>
	 <tr>
      <td>Parts, Accessories, Machineries</td>
      <td>Should be Un Installed and return as recieved</td>
    </tr>
	 <tr>
      <td>Raw Materials (Others)</td>
      <td>Should be Un Used and return as recieved</td>
    </tr> 
	<tr>
      <td>Industrial Supplies</td>
      <td>Should be Un Used, Un installed and return as recieved</td>
    </tr>
	<tr>
      <td>RConstructions</td>
      <td>Should be returned as received</td>
    </tr> 
  </tbody>
</table>
If the product being returned is not in accordance with the above parameters, then Buyer shall not be entitled to any refund.
Shipping / Delivery cost for returning the product shall be borne and incurred by the Seller.<br/>
<h6>Replacement</h6>
Definition: Replacement is the action or process of replacing something in place of another. A Buyer can request for replacement whenever he is not happy with the item/materials, reason being Damaged in shipping, Defective item, Item(s) missing, wrong item shipped and the like.<br/><br/>
Points to be noted:<br/>
1.	Seller can always accept the return irrespective of the policy.<br/>
2.	If Seller disagrees for a return request, Buyer can file a dispute under Rawmet24 Buyer/Customer Support<br/><br/>
Buyer needs to raise the replacement request within the specified return period applicable to the respective product. Once Buyer has raised a replacement request by contacting Us on the contact provided on the Website. Once the replacement request has been raised, the following steps shall be followed:<br/>
1.	Buyer is asked for "Reason for Return". Among others, the following are the leading reasons:<br/>
2.	Shipping was damaged<br/>
3.	Item was defective<br/>
4.	Item Dead / expired on Arrival<br/>
5.	Item(s) were missing<br/>
6.	Wrong item sent<br/>
7.	An intimation shall be provided to Seller seeking either "approval" or "rejection" of the replacement request.<br/>
8.	In case the Seller accepts the replacement request, Buyer shall be required to return the product to the Seller and only after return of the product, Seller shall be obliged to provide the replacement product to the Buyer.<br/>
9.	Incase Seller rejects the replacement request, Buyer can choose to raise a dispute by writing to admin@rawmet24.com<br/>

In case the Seller doesn't have the product at all, Seller can provide the refund to the Buyer and Buyer shall be obligated to accept the refund in lieu of replacement. All the product parameters shall be required to be complied with in cases of replacement.<br/>
If the Seller doesn't respond to the Buyer's replacement request, within specified period of days from the date of replacement request placed by the Buyer, refund shall be processed in favour of Buyer if it is available with rawmet24 and Seller shall be liable to refund amount paid to the Seller.<br/>
All shipping and other replacement charges shall be borne and incurred by the Seller.<br/>
<h6>Overview</h6>

Generally, transactions are conducted smoothly on Rawmet24. However there may be some cases where both the Buyers and Sellers may face issues. At Rawmet24, we have a Dispute Resolution process in order to resolve disputes between Buyers and Sellers.<br/>

<h6>What is a 'dispute'?</h6>
A 'Dispute' can be defined as a disagreement between a Buyer and a Seller in connection with a transaction on the Website.<br/><br/>

How does a 'dispute' occur in the rawmet24 search engine Marketplace?
Disputes are filed as a result of a disagreement between the Buyer and the Seller. Disputes arise out of an issue that is raised by either party not being completely satisfied with the resolution of their complaint/issue.<br/>
It is important that before a Buyer/Seller raises a dispute, they should attempt to solve the issue. Please note that whenever a Buyer raises a dispute, the Seller's payment for that order/material is put on hold immediately until the issue is resolved.<br/>

<h6>How is a 'dispute' created?</h6>
Whenever there is a disagreement, the Buyer can write to admin@rawmet24.com, while the Seller can also write to admin@rawmet24.com, in order to raise a dispute. Disputes can be raised at a particular transaction level.<br/>

What are the various types of 'disputes'?<br/>
Following are the indicative examples of potential disputes:<br/>
1.	Wrong item received<br/>
2.	Item Not as described, specified, quality<br/>
3.	Damaged or Seal broken on Product<br/>
4.	Part/Accessory missing<br/>
5.	Item not Compatible<br/>
6.	Seller Description/Specification Wrong<br/>
7.	Defective (Functional issues)<br/>
8.	Product not working and Manufacturer claims invalid Invoice<br/>
<br/>
In case the Seller rejects the return request of the Buyer, and Buyer raises a dispute, then Rawmet24 will try to mediate and resolve the dispute between both the parties. If the dispute is resolved in favour of the Buyer, a refund is provided once the product is returned to the Seller. If the dispute is settled in favour of the Seller, Buyer is not entitled to any refund.<br/>

<h6>Rawmet24 customer/Buyer protect support</h6>
In case of a dispute where the Seller is unable to provide a refund or a replacement, Rawmet24 will actively work towards reaching a resolution.
The Buyer Protection Support covers Buyers who are unable to successfully resolve their dispute with the Seller or are not satisfied the resolution provided by the Seller.<br/>
The Buyer can write to admin@rawmet24.com if the issue with the Seller is not resolved. Rawmet24's Support team will look into the case to check for possible fraud and if the Buyer has been blacklisted/blocked from making purchases on the Website. Only after verifying these facts, a dispute can be registered.<br/>
In due course of resolution, Rawmet24's Support Team will facilitate a conference call including the Seller and the Buyer.<br/>
When a dispute has been raised, Rawmet24 may provide both the parties access to each others Display Names, contact details including email addresses and other details pertaining to the dispute. Buyers and Sellers are subject to final consent from Rawmet24 for settling the dispute.<br/>
<h6>Buyer Eligibility and Restrictions</h6>
Only the Buyers who have purchased the product on Rawmet24 are eligible for the Buyer Protection Program.<br/>
Buyers can file a dispute within 10 days from the date of delivery of the product
Any damage or loss to the product after delivery will not be covered under this program and will completely be the Buyer's responsibility. Buyers should refuse to accept delivery if the item is damaged.<br/>
To be able to take advantage of the Buyer Protection Program, Buyers should first contact the Seller and attempt to resolve the issue. If the Buyer doesn't hear from the Seller or is unable to resolve the issue with the Seller even after contact, a dispute can be raised with rawmet24 by writing an email to admin@rawmet24.com<br/>
Fraudulent charges and claims are not covered under Rawmet24 customer protect / support
Blacklisted and Blocked Buyers are not covered by the Buyer Protection Program.<br/>
Rawmet24 does not provide any guarantee/warranty to Buyers for products sold on Rawmet24 against analytical/specification/technical/manufacturing defects.<br/>
Raising disputes against Sellers does not automatically entitle the Buyer to a refund or replacement for the product purchased. Rawmet24 shall verify the disputes so raised and may process only such claims that are valid and genuine.<br/>
Rawmet24 shall at no point be responsible for any direct or indirect losses, expenses, costs of any nature whatsoever that may be incurred by any Buyer/Seller.<br/>
Claims of the nature of 'Buyer remorse' (i.e. instances where products are bought by the Buyer by mistake or where the Buyer chooses to change his/her mind with regard to the product purchased by him) will not be entertained through this program.<br/>
Rawmet24 reserves its right to initiate civil and/or criminal proceedings against a User who, files an invalid and/or false claims or provides false, incomplete, or misleading information. In addition to the legal proceedings as aforesaid, Rawmet24 may at its sole discretion suspend, block, restrict, cancel the Display Name [and its related Display Names] of such User and/or disqualify that user and any related users from availing protection through this program.<br/>
Decisions made by Rawmet24 under the Rawmet24 Customer Protect shall be final and binding on its Users.<br/>
Rawmet24 / Shopemet Networks Pvt Ltd reserves the right to modify / discontinue Rawmet24 customer protect / support without any prior notice period to its Users.<br/>
Through this support program, Rawmet24 shall not entertain claims of Buyers who have incurred loss due to delayed shipment or delivery of the item by the Seller.<br/>
Rawmet24 Customer Support Team may seek additional information / clarification from Buyer to facilitate resolution of the dispute. In the event Buyer does not respond with information / clarification sought within 10 days of such request, the dispute shall be auto-closed in favour of the Seller.<br/>
Whenever a chargeback comes from a payment gateway/bank, following situations may arise:<br/>
1.	Item not received - Buyer hasn't received the item. Refund will be created in accordance with the applicable policies<br/>
2.	Unauthorized - Buyer hasn't made this particular transaction. Refund will be created in accordance with the applicable policies.<br/>
Seller expressly agrees that issuing the correct and complete invoice is the sole and primary responsibility of the Seller. Furthermore, Seller shall ensure that invoices state "Powered by Rawmet24" and failing to do so Seller will be liable for charge backs (as applicable).<br/>
1.	Item not as described - meaning item is not what Buyer expected. Dispute will be decided in accordance with the applicable policies.<br/>

<h6>Email Abuse & Threat Policy</h6>
Private communication, including email correspondence, is not regulated by Rawmet24. Rawmet24, encourages its Users to be professional, courteous and respectful when communicating by email.<br/>
However, Rawmet24 will investigate and can take action on certain types of unwanted emails that violate Rawmet24 policies.<br/>
Such instances:<br/>
Threats of Bodily Harm - Rawmet24 does not permit Users to send explicit threats of bodily harm.<br/>
Misuse of Rawmet24 System - Rawmet24 allows Users to facilitate transactions through the Rawmet24 system, but will investigate any misuse of this service.<br/>
Spoof (Fake) email - Rawmet24 will never ask you to provide sensitive information through email. In case you receive any spoof (fake) email, you are requested to report the same to Us through 'Contact Us' tab.<br/>
Spam (Unsolicited Commercial email) - Rawmet24's spam policy applies only to unsolicited commercial messages sent by Rawmet24 Users. Rawmet24 Users are not allowed to send spam messages to other Users.<br/>
Offers to Buy or Sell Outside of Rawmet24 – Rawmet24 prohibits email offers to buy or sell listed products outside of the Rawmet24 Website. Offers of this nature are a potential fraud risk for both Buyers and Sellers.<br/>
Rawmet24 policy prohibits user-to-user threats of physical harm via any method including, phone, email and on Our public message boards.<br/>
Violations of this policy may result in a range of actions, including:<br/>
•	Limits on account privileges<br/>
•	Account suspension<br/>
•	Cancellation of listings<br/>
•	Loss of special status<br/>
•	Inactivation of buyer/seller<br/>
•	Inactivation of listed products<br/>
<h6>Other Businesses</h6>
Rawmet24 does not take responsibility or liability for the actions, products, content and services on the Website, which are linked to Affiliates and / or third party websites using Website's APIs or otherwise. In addition, the Website may provide links to the third party websites of Our affiliated companies and certain other businesses for which, Rawmet24 assumes no responsibility for examining or evaluating the products and services offered by them. Rawmet24 do not warrant the offerings of, any of these businesses or individuals or the content of such third party website(s). Rawmet24 does not endorse, in any way, any third party website(s) or content thereof.<br/>

Rawmet24 Infringement Verification (RIV) - Reporting Listing Violations<br/>
Rawmet24 has put in place Rawmet24 Infringement Verification process so that intellectual property owners could easily report listings that infringe their rights. It is in Rawmet24's interest to ensure that infringing products are removed from the site, as they erode Buyer and good Seller trust.<br/>
•	If you are a Verified Rights Owner and want to report a listing issue, see Rawmet24's RIV. Note: Only the intellectual property rights owner can report potentially infringing products or listings through RIV. If you are not the intellectual property rights owner, you can still help by getting in touch with the rights owner and encouraging them to Contact Us.<br/>
•	If your listing was removed through RIV, and you believe that your listing was removed in error, please Contact Us 
Rawmet24 does not and cannot verify that Sellers have the right or ability to sell or distribute their listed products. However, Rawmet24 is committed to removing infringing or unlicensed products once an authorized representative of the rights owner properly reports them to Rawmet24.<br/>
RIV works to ensure that item listings do not infringe upon the copyright, trademark or other intellectual property rights of third parties. RIV participants have the ability to identify and request removal of allegedly infringing products and materials.<br/>
Any person or company who holds intellectual property rights (such as a copyright, trademark or patent) which may be infringed upon by products listed on Rawmet24 is encouraged to become a RIV member.<br/><br/>
Program membership entitles you (Verified Rights Owner) to the following benefits:<br/>
•	Rapid response by Rawmet24 in ending listings reported by you (as the Verified Rights Owner) as allegedly infringing<br/>
•	Dedicated priority email queues for reporting alleged infringements<br/>
•	The ability to obtain identifying information about Rawmet24's users'<br/>

<h6>How to Become a RIV Member</h6>
To join the RIV, we require only that you fully complete and email Us a Notice of Infringement application form specifying the allegedly infringing listings and the infringed work, complete with an original authorized signature. The information requested by the Notice of Infringement is designed to ensure that parties reporting products are authorized by the rights owners, and to enable Rawmet24 to easily identify the material or listing to be ended.<br/><br/>
In the interest of keeping the process easy and simple, after we receive your first Notice of Infringement in hard copy, future notices can be sent to Us by email at admin@rawmet24.com.<br/><br/>
Note: In your notice of infringement, you shall be required to identify the individual listing which is infringing your intellectual property. General notices shall not be accepted.<br/>
We are happy to receive such information, but must advise that we may be limited in Our ability to respond to your request absent formal notice from an authorized rights owner.
Notice of Infringement


      </div>
    </div>
  </div>
  
  
</div></div>
               
		
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>