

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
					<a href="./home" title="Aucjunction Logo">
			 
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
  <li style="display: inline;  padding: 8px;color:#808080"><a style="color:#808080"  href="#">Terms of Use</a></li>
  <li style="display: inline; float:right ; padding: 8px;color:#808080"><a style="color:#808080" data-toggle="modal" data-target="#privacypolicy" href="#">Privacy Policy</a></li>
  <li style="display: inline; float:right; padding: 8px;color:#808080"><a style="color:#808080" data-toggle="modal" data-target="#paymentpolicy" href="#">Payments Policy</a></li>
   <li style="display: inline; float:right; padding: 8px;color:#808080"><a style="color:#808080" data-toggle="modal" data-target="#termsandcondition"  href="#">Seller Terms and Conditions</a></li>
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
				 -> If you choose to buy on the Website, we collect information about your buying behaviour.<br/>
				 -> If you transact with us, we collect some additional information, such as a billing address, shipping address, GST Details, a credit / debit card number and a credit / debit card expiration date and/ or other payment instrument details and tracking information from Rtgs, Neft  cheques or money orders.<br/>
				 -> If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback.We will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support or seller/buyer support and troubleshoot problems as permitted by law.<br/>
				 -> If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.
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
                    <h5 class="modal-title" id="exampleModalLabel">CONTACT US</h5>
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