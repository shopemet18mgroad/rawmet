<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Feedback</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-9 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-6 d-none d-lg-block "></div>
              <div class="col-md-12 p-4">
                <div class="p-4">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Feedback</h1>
                  </div>
	<form name="myForm" action="<?php echo base_url(); ?>home_feedback"  method="POST">
                    <div class="form-group">
					 <div class="form-group">
                      <input type="text" class="form-control " id="fname" name="fname" placeholder="Name">
                    </div>
                      <input type="text" class="form-control " id="mobilenumber"  name="mobilenumber" aria-describedby="emailHelp" placeholder="Mobile Number">
                    </div>
                   
					<div class="form-group">
                     <input type="email" class="form-control form-control-user"  id="emailid" name="emailid" placeholder="Email">
                    </div>
					<div class="form-group">
								<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
										if (value.length == 0) document.getElementById("pcities").innerHTML = "<option></option>";
										else {
											var citiesOptions = "";
											for (cityId in citiesByState[value]) {
												citiesOptions += "<option>" + citiesByState[value][cityId] + "</option>";
											}
											document.getElementById("pcities").innerHTML = citiesOptions;
										}
									}

									function displaySelected() {
										var country = document.getElementById("pstates").value;
										var city = document.getElementById("pcities").value;
										alert(country + "\n" + city);
									}

									function resetSelection() {
										document.getElementById("pstates").selectedIndex = 0;
										document.getElementById("pcities").selectedIndex = 0;
									}
								</script>

								<label>State</label>

								<body onload="resetSelection()">
									<select class="form-control  " id="pstates" name="pstates" size="1" onchange="makeSubmenu(this.value)">
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
								<label>City</label>
								<select class="form-control  " id="pcities" name="pcities" size="1">
									<option value="" disabled selected>Choose City</option>
									<option></option>
								</select>
							</div>

					  <div class="form-group">
					  <label>Commet</label>
                      <textarea type="text" class="form-control p-4" id="commet"  name ="commet"  placeholder="Your Comment"></textarea>
                    </div>
                    <div class="form-group">
                    <!-- <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>--->
					<center>
					<input type="submit" name="submit" id="btn1"  onclick="return validatefeedback()" value="Submit" class="btn btn-primary col-3 mt-2 w-100">
					</center>
	
                    
                  </form>
                  <hr>
                  <div class="text-center text-dark">
				  <span class="dot">or</span>
                    <h3>Need more help?</h3>
                  </div>
                  <div class="text-center">
                    <h5><a class="small" href="gmail.com"><i class="fa fa-envelope" style="font-size:15px"></i> Care@rawmet.com</a></h5>
                  </div>
		        </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."web_files/";?>js/sb-admin-2.min.js"></script>

</body>

</html>
 <script>
  
function validatefeedback(){

	var mobilenumber = document.getElementById("mobilenumber").value;
	var fname = document.getElementById("fname").value;
	var emailid = document.getElementById("emailid").value;
	var pstates = document.getElementById("pstates").value;
	var pcities = document.getElementById("pcities").value;
	var commet = document.getElementById("commet").value;
	

if(mobilenumber == '' || fname == '' || emailid == '' || pstates == '' || pcities == '' || commet == ''){
		swal("Alert!",  "Mobile Number, Name, E-Mail, City, State, Comment  cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {mobilenumber:mobilenumber,fname:fname,emailid:emailid,pstates:pstates,pcities:pcities,commet:commet},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }
	


	
	
	
}
  </script>
