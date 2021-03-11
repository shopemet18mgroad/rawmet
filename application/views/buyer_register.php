<?php $this->load->view('header_nw.php');?>

<form class="user" name="registerForm" id="registerForm" action="<?php echo base_url().'index.php/Buyer/register'?>" method="POST"></form>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
              <img style="width:150px" src="<?php echo base_url()."web_files/";?>img/2rawmet-logo.png" class="img-fluid" alt=""  >
                        <h3>Welcome</h3>
                        <p style="text-align:left; font-size:14px;"><b>*
						Search for Required Raw Materials.<br/>*
						Find List of Suppliers with Stock Availability, Pricing & Payments Terms.<br/>*
						Ask For Quote, Negotiate Price and Send PO.<br/>*
						Materials will be Dispatched as per TAT.</b></p>
						
  <a href="<?php echo base_url();?>home_login">
         <button style="width:150px" type="button" class="btn btn-light">Login</button></a>                       
					  
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">                                
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Buyers" role="tab" aria-controls="home" aria-selected="true">Buyers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Seller" role="tab" aria-controls="profile" aria-selected="false">Seller</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Buyers" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Buyers Registration</h3>

                           	<form action="<?php echo base_url();?>home_buyer_register"  method="POST">
                                <div class="row register-form">
 <div class="col-md-6">
          <div class="form-group">
		  
	
                                            <input type="text" id="bcompanyname" name="bcompanyname" class="form-control" placeholder="Company Name*" value="" />
    </div>





<div class="form-group">
           <select id="bcompanytype" name="bcompanytype" class="form-control" onkeyup="validate_buyer_companyname()">
			 <option class="hidden"  selected disabled>Company Type</option>
             <option value="Govt Regd Company">Govt Regd Company</option>
              <option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
              <option value="Partnership, Proprietorship, OPC" >Partnership, Proprietorship, OPC</option>
             <option value="Other">Other</option>
            </select>
                                              
  </div>	  
								  
 <div class="form-group">
 
 
  <input type="text" id="buyerid"  value="B<?php echo(rand(1,1000000));?>" name="buyerid" class="form-control" placeholder="User Id*" readonly value="" />
 </div>
         
 
 
 
  <div class="form-group">
                     
                    <input type="password" class="form-control form-control-user"id="bpassword" name="bpassword" placeholder="Password"><span id = "message1" style="color:red"> </span>
     </div>
  
 
 
 
 
<div class="form-group">

<!-- -->

 <input type="email" class="form-control form-control-user semail" onkeyup="return validate_password1()" id="bemail" name="bemail" placeholder="Email">
 
 
 
</div>
				   
				   
				   
				   
				   
  <div class="form-group">
  
   <input type="text" class="form-control form-control-user pan" id="bpan" name="bpan"  placeholder="PAN">
  </div>


  <div class="form-group">




<body onload="resetSelection1()">

<select class="form-control" id="bselectstate" name="bselectstate" size="1" onchange="makeSubmenu1(this.value)">
										<option value="" disabled selected>Choose State</option>
										<option>Odisha</option>
										<option>Maharashtra</option>
										<option>Kerala</option>
										<option>ArunachalPradesh</option>
										<option>AndhraPradesh</option>
										<option>Assam</option>
										<option>Chhattisgarh</option>
										<option>Goa</option>
										<option>Gujarat</option>
										<option>Haryana</option>
										<option>HimchalaPradesh</option>
										<option>Jharkhand</option>
										<option>Karnataka</option>
										<option>Kerala</option>
										<option>MadhyaPradesh</option>
										<option>Manipur</option>
										<option>Meghalaya</option>
										<option>Mizoram</option>
										<option>Nagaland</option>
										<option>Odisha</option>
										<option>Punjab</option>
										<option>Rajasthan</option>
										<option>Sikkim</option>
										<option>TamilNadu</option>
										<option>Telangana</option>
										<option>Tripura</option>
										<option>UttarKhand </option>
										<option>UttarPradesh</option>
										<option>WestBengal</option>
										<option>Andaman and nicobar</option>
										<option>Chandigarh</option>
										<option>Dadra and Nagar Haveli and Daman & Diu</option>
										<option>Jammu and kashmir</option>
										<option>ladakh</option>
										<option>puduchery</option>
									</select>


							</div>

			<div class="form-group">
                                        <input type="text" id="bpincode" name="bpincode"  class="form-control " placeholder="Pin Code *" onkeyup=" return validate_buyergst()" value="" />
             </div>

                               
								 
								 
								 
								 
								 
              </div>
            <div class="col-md-6">
			
			                                 <div class="form-group">
                                             <input type="text" onkeyup="validate_bcompany11()"  id="bcontactperson" name="bcontactperson" class="form-control" placeholder="Contact Person*"    value="" />
                                 </div>
			
					
			
		 
			
			
			
			
			
			
    

		   
		   
		   
		   
              <div class="form-group">
                                            <input type="text" id="bcontactnumber" name="bcontactnumber"    onkeyup="validate_buyerid()" class="form-control form-control-user bphn"  placeholder="Phone*" value="" />
         </div>

		 
		 
		 
		 
  <div class="form-group">
      <input type="text" class="form-control form-control-user" id="busername" name="busername" onkeyup="validate_bname()"  placeholder="Name">
                    
                    <input hidden type="text" class="form-control form-control-user" id="bname" name="bname"  placeholder="" readonly>
  </div>

  
  
  
  
  
  
  <div class="form-group">
  
  <input type="password" class="form-control form-control-user"id="brepeatpassword" name="brepeatpassword"   placeholder="Confirm Password"><span id = "message2" style="color:red"> </span>
                                            
        </div>
		
		
		
		
		

 <div class="form-group">
                                           <input type="text" class="form-control form-control-user gst" id="bgst" name="bgst" placeholder="GST">
  </div>

                                        <div class="form-group">
											
                                           
                                        </div>
										
									

                                        
                    <div class="form-group">
                                            <input type="text" id="baddress" name="baddress" class="form-control" placeholder="Address*" value="" />
                                        </div>
										
										
										
										
	
								<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
								<script type="text/javascript">
									var citiesByState1 = {
										Odisha: ["Bhubaneswar", "Puri", "Cuttack"],
										Maharashtra: ["Mumbai", "Pune", "Nagpur"],
										Kerala: ["kochi", "Kanpur"],
										Karnataka: ["Bengaluru","Dakshina-Kannada", "Hubli-Dharwad", "Mysuru", "Kalaburagi", "Mangaluru", "Dakshina Kannada", "Belagavi", "Davanagere", "Ballari", "Vijayapura", "Shivamogga", "Tumakuru", "Raichur", "Bidar", "Hosapete", "Vijayanagara", "Gadag-Betageri", "Gadag", "Robertsonpete", "Kolara", "Hassan", "Bhadravati", "Gokak", "Belagavi", "Udupi", "Mandya", "Chikkamagaluru", "Gangavati", "Koppal", "Bagalkote", "Ranebennuru", "Haveri"],
										ArunachalPradesh: ["Itanagar"],
										AndhraPradesh: ["Visakhapatnam"],
										Assam: ["Dispur"],
										Bihar: ["Patna"],
										Chhattisgarh: ["Naya Raipur"],
										Goa: ["Panaji"],
										Gujarat: ["Gandhinagar"],
										Haryana: ["Chandigarh"],
										HimchalaPradesh: ["Shimla"],
										Jharkhand: ["Ranchi"],
										Kerala: ["Thiruvananthapuram"],
										MadhyaPradesh: ["Bhopal"],
										Maharashtra: ["Mumbai"],
										Manipur: ["Imphal"],
										Meghalaya: ["Shillong"],
										Mizoram: ["Aizawl"],
										Nagaland: ["Kohima"],
										Odisha: ["Bhubaneswar"],
										Punjab: ["Chandigarh"],
										Rajasthan: ["Jaipur"],
										Sikkim: ["Gangtok"],
										TamilNadu: ["Chennai"],
										Telangana: ["Hyderabad"],
										Tripura: ["Agartala"],
										UttarPradesh: ["Lucknow"],
										Uttarakhand: ["Dehradun"],
										WestBengal: ["Kolkata"],
									}

									function makeSubmenu1(value) {
										if (value.length == 0) document.getElementById("bcity").innerHTML = "<option></option>";
										else {
											var citiesOptions = "";
											for (cityId in citiesByState[value]) {
												citiesOptions += "<option>" + citiesByState[value][cityId] + "</option>";
											}
											document.getElementById("bcity").innerHTML = citiesOptions;
										}
									}

									function displaySelected1() {
										var country = document.getElementById("bselectstate").value;
										var city = document.getElementById("bcity").value;
										alert(country + "\n" + city);
									}

									function resetSelection1() {
										document.getElementById("bselectstate").selectedIndex = 0;
										document.getElementById("bcity").selectedIndex = 0;
									}
								</script>
								
										
										
										
										
										
										
										
										
										
										
										
										
                                        

                          
				<div class="form-group">
							
								<select class="form-control" id="bcity" name="bcity" size="1">
									<option value="" disabled selected>Choose City</option>
									<option></option>
								</select>
							</div>					
										
										
										
										
										
										
										
										
										
									
										  <div class="form-group">
									     <input type="checkbox" class="form-check-input" id="iagreee" name="iagreee">
								<label class="form-check-label" for="exampleCheck1">
								I agree to the <a href="">Terms & Conditions</a></label>
                                        </div>
<!-- -->
                                                                                
                       <input type="submit" name="submit" id="btn1" onclick="return validatebuyer()"   value="Register" class="btn btn-primary">
                                    </div>                              

                                    </form>
                                     
                         
						        
                                </div>
                            </div>
							
												
							
							
							
							
							
							
							
							
							

 <div class="tab-pane fade show" id="Seller" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Seller Registration</h3>
								
	
			
<form action="<?php echo base_url();?>home_seller_register"  method="POST">

	


                 <div class="row register-form">
				 
                       <div class="col-md-6">
					   
					   	
					   
					   
					   

 <div class="form-group">
 
    <input type="text" id="vcompanyname" name="vcompanyname" class="form-control" placeholder="Company Name*" value="" />

 </div>
							   
 
 
 <div class="form-group">

 <input type="text" class="form-control" id="vpcb"  name="vpcb"   onkeyup = "return   ()"  placeholder="PCB license">

</div>	
  
  <div class="form-group">
 

 <input type="text" id="sellerid" readonly  value="S<?php echo(rand(1,1000000));?>" name="sellerid" class="form-control" placeholder="User Id*" value="" />
  
  </div>
		
		
		
                                       
        <div class="form-group">
		
		<input type="password" class="form-control form-control-user"id="vpassword" name="vpassword"  placeholder="Password"><span id = "message11" style="color:red"> </span>

		
		
		
		
		
            <!-- <input type="password" class="form-control form-control-user"id="vpassword" name="vpassword"  placeholder="Password" onkeyup="validate_username()"><span id = "message11" style="color:red"> </span>-->
			
			
         </div>
		  
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 

		 
 
	
	
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   
		 
           <div class="form-group">
		   
		   
		   <input type="email" class="form-control form-control-user bemail" onkeyup="return validateForm()" id="vemail"  name="vemail" placeholder="Email">
		   
		   
		
			  
			   
           </div>
		   
		   
		   
	
 
		   
		   
		   
		   
		   
	
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   

          <div class="form-group">
              <input type="text" id="vpan"  name="vpan"  class="form-control form-control-user span"   placeholder="PAN"  class="form-control Pan" placeholder="Pan No *" value="" />
          </div>
		  
		  
		  
			   <div class="form-group">
     <input type="text" class="form-control form-control-user"   id="vaddress"  name="vaddress"   placeholder="Address">
       </div>  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		<div class="form-group">
								<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
								
						

								<body onload="resetSelection()">
									<select class="form-control" id="vselectstate" name="vselectstate" size="1" onchange="makeSubmenu(this.value)">
										<option value="" disabled selected>Choose State</option>
										<option>Odisha</option>
										<option>Maharashtra</option>
										<option>Kerala</option>
										<option>ArunachalPradesh</option>
										<option>AndhraPradesh</option>
										<option>Assam</option>
										<option>Chhattisgarh</option>
										<option>Goa</option>
										<option>Gujarat</option>
										<option>Haryana</option>
										<option>HimchalaPradesh</option>
										<option>Jharkhand</option>
										<option>Karnataka</option>
										<option>Kerala</option>
										<option>MadhyaPradesh</option>
										<option>Manipur</option>
										<option>Meghalaya</option>
										<option>Mizoram</option>
										<option>Nagaland</option>
										<option>Odisha</option>
										<option>Punjab</option>
										<option>Rajasthan</option>
										<option>Sikkim</option>
										<option>TamilNadu</option>
										<option>Telangana</option>
										<option>Tripura</option>
										<option>UttarKhand </option>
										<option>UttarPradesh</option>
										<option>WestBengal</option>
										<option>Andaman and nicobar</option>
										<option>Chandigarh</option>
										<option>Dadra and Nagar Haveli and Daman & Diu</option>
										<option>Jammu and kashmir</option>
										<option>ladakh</option>
										<option>puduchery</option>
									</select>


					
							
							
			 

</div>  
		  
		  
		  
		  
		
<div class="form-group">
              <input type="text" id="vpincode"  name="vpincode"  class="form-control" placeholder="Pin Code *" value=""  onkeyup="validate_sellergst()" />
       </div>   
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		
         
	   
	   
	   
	  				
                 
							
			</div>	
										
		<div class="col-md-6">
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <div class="form-group" >
		 
		 
		
		 
		 
	
	<input type="text" onkeyup="validate_bcompany1L1()"  id="vcontactperson" name="vcontactperson" class="form-control" placeholder="Contact Person*"    value="" />
	
	
	
 </div>
 
 
 
 
 
 
 
 
  <div class="form-group">
          <select id="vcompanytype" name="vcompanytype" class="form-control">
             <option class="hidden"  selected disabled>Company Type</option>
                  <option value="Govt Regd Company">Govt Regd Company</option>
                  <option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
                  <option value="Partnership, Proprietorship, OPC" >Partnership, Proprietorship, OPC</option>
                      <option value="Other">Other</option>
                  </select>
              </div>
			  
			  
			  
		
		<div class="form-group">
       		   
			  
               
					
					
					
					 <input type="text" class="form-control form-control-user" id="vusername"  name="vusername" onkeyup="validate_name()"  placeholder="User Name" >
                   <input hidden type="text" class="form-control form-control-user" id="vname" name="vname"  readonly>
					
					
					
					
					
					
					
					
					
					
					
                                        </div>
										
										
										
										
										
										
		
		
		
		    <div class="form-group">
			
		       
                    <input type="password" class="form-control form-control-user"id="vrepeatpassword" name="vrepeatpassword"  placeholder="Confirm Password"><span id = "message22" style="color:red"> </span>	
			
			
	 
	 
	<!-- <input type="password" class="form-control form-control-user"id="vrepeatpassword" name="vrepeatpassword"  placeholder="Confirm Password"><span id = "message22" style="color:red"> </span>-->
                                            
                                                                                    </div>
		
		
		
		
		
		
		
		
		
		
		
		
          

         <div class="form-group">
		 
		 
		 
		 

		 
		 
		 
       <input type="text" id="vcontactnumber" onkeyup="validate_selid()"  class="form-control form-control-user sphn"  name="vcontactnumber" placeholder="Phone*" value="" />
	   
	
	   
	   
  </div>

     <div class="form-group">
      <select class="form-control" id="dealer_type" name="dealer_type">
				  <option default>--Type of Dealer--</option>
					       <option value="Manufacturer">Manufacturer</option>
						<option value="Wholesaler">Wholesaler</option>
						<option value="Re-saler">Re-saler</option>
						<option value="Dealer">Dealer</option>
				        <option value="Distributor">Distributor</option>
						<option value="Others">Others</option>
						
				    </select> 
                  </div>
 
	 
	 
	 

	 

 

     <div class="form-group">
   	 <input type="text" class="form-control form-control-user sgst" id="vgst"  name="vgst"   placeholder="GST">
       </div>


       
	   
	   
	   
	   
	   <div class="form-group">
	   				<select class="form-control" id="vcity" name="vcity" size="1">
									<option class="form-control" value="" disabled selected>Choose City</option>
									<option></option>
								</select>
						
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
</div>
                                        







	


                                        
										 <div class="form-group">
									     <input type="checkbox" class="form-check-input" id="iagreee" name="iagreee">
								<label class="form-check-label" for="exampleCheck1">
								I agree to the <a href="">Terms & Conditions</a></label>
                                        </div>
										
				<!-- -->						
										
                       <input type="submit" name="submit" id="btn1" onclick="return validate_seller()" value="Register" class="btn btn-primary">
					   
					   

	  
	<script type="text/javascript">
									var citiesByState = {
										Odisha: ["Bhubaneswar", "Puri", "Cuttack"],
										Maharashtra: ["Mumbai", "Pune", "Nagpur"],
										Kerala: ["kochi", "Kanpur"],
										Karnataka: ["Bengaluru","Dakshina-Kannada","Hubli-Dharwad", "Mysuru", "Kalaburagi", "Mangaluru", "Dakshina Kannada", "Belagavi", "Davanagere", "Ballari", "Vijayapura", "Shivamogga", "Tumakuru", "Raichur", "Bidar", "Hosapete", "Vijayanagara", "Gadag-Betageri", "Gadag", "Robertsonpete", "Kolara", "Hassan", "Bhadravati", "Gokak", "Belagavi", "Udupi", "Mandya", "Chikkamagaluru", "Gangavati", "Koppal", "Bagalkote", "Ranebennuru", "Haveri"],
										ArunachalPradesh: ["Itanagar"],
										AndhraPradesh: ["Visakhapatnam"],
										Assam: ["Dispur"],
										Bihar: ["Patna"],
										Chhattisgarh: ["Naya Raipur"],
										Goa: ["Panaji"],
										Gujarat: ["Gandhinagar"],
										Haryana: ["Chandigarh"],
										HimchalaPradesh: ["Shimla"],
										Jharkhand: ["Ranchi"],
										Kerala: ["Thiruvananthapuram"],
										MadhyaPradesh: ["Bhopal"],
										Maharashtra: ["Mumbai"],
										Manipur: ["Imphal"],
										Meghalaya: ["Shillong"],
										Mizoram: ["Aizawl"],
										Nagaland: ["Kohima"],
										Odisha: ["Bhubaneswar"],
										Punjab: ["Chandigarh"],
										Rajasthan: ["Jaipur"],
										Sikkim: ["Gangtok"],
										TamilNadu: ["Chennai"],
										Telangana: ["Hyderabad"],
										Tripura: ["Agartala"],
										UttarPradesh: ["Lucknow"],
										Uttarakhand: ["Dehradun"],
										WestBengal: ["Kolkata"],
									}

									function makeSubmenu(value) {
										if (value.length == 0) document.getElementById("vcity").innerHTML = "<option></option>";
										else {
											var citiesOptions = "";
											for (cityId in citiesByState[value]) {
												citiesOptions += "<option>" + citiesByState[value][cityId] + "</option>";
											}
											document.getElementById("vcity").innerHTML = citiesOptions;
										}
									}

									function displaySelected() {
										var country = document.getElementById("vselectstate").value;
										var city = document.getElementById("vcity").value;
										alert(country + "\n" + city);
									}

									function resetSelection() {
										document.getElementById("vselectstate").selectedIndex = 0;
										document.getElementById("vcity").selectedIndex = 0;
									}
								</script>
  
	 </div>                              

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <?php $this->load->view('script_nw.php');?>

<script type="text/javascript">   
document.addEventListener('contextmenu',function (e){
e.preventDefault();


});
</script>

	






	

