
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

	<!-- Content Row -->


	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>

				</div>
				<!-- Card Body -->
				<div class="card-body">
<div class="container">


					<!-- <form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
							Name: <input type="text" name="fname">
							<input type="submit" value="Submit">
							</form>
							-->


					<form name="myForm" action="<?php echo base_url(); ?>vendor_postproduct"   enctype="multipart/form-data"  method="POST">

						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="">Supplier Id</label>
								<input type="text" class="form-control" id="sellerid" name="sellerid" value="<?php echo  $scomp[0]->sellerid; ?>" readonly>
								<input type="hidden" class="form-control" id="sellerid" name="sellerid" value="<?php echo $sessi; ?>">

							</div>
							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="">Company Name</label>
								<input type="text" class="form-control" id="companyname" name="companyname" value="<?php echo  $scomp[0]->vcompanyname; ?>" readonly>

							</div>

							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="">Category</label>
								<select class="form-control" id="category" name="category" >
								<option value="Select" selected>Select</option>
									<option value="Ferrous">Ferrous</option>
						<option value="Non Ferrous">Non Ferrous</option>
						<option value="Minor Metal">Minor Metal</option>
				        <option value="Papers" >Papers</option>
						<option value="Plastic" >Plastic</option>
						<option value="Machineries">Machineries</option>
				        <option value="Construction Raw Material" >Construction Raw Material</option>
						<option value="Scraps" >Scraps</option>
						<option value="Chemicals" >Chemicals</option>
						<option value="Others" >Others</option>
								</select>

							</div>

						
								<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="">Product Name</label>
								<input type="text" class="form-control" id="productname" name="productname"   placeholder="Product Name" onkeyup="product_id()" >

							</div>
							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="">Product Id</label>
								<input type="text" class="form-control" id="productid" name="productid" placeholder="Product Id" readonly>

							</div>



							<div class="col-sm-4">

								<label for="category">Type:</label>
								<select class="form-control" id="types" name="types" >
									<option default>Select Your Type</option>
									<option value="Primary">Primary</option>
									<option value="Secondary">Secondary</option>
									<option value="Scrap">Scrap</option>
								</select>
							</div>

							<div class="col-sm-4">
								<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
								<script type="text/javascript">
									var citiesByState = {
										Odisha: ["Bhubaneswar", "Puri", "Cuttack"],
										Maharashtra: ["Mumbai", "Pune", "Nagpur"],
										Kerala: ["kochi", "Kanpur"],
										Karnataka: ["Bengaluru","Dakshina-Kannada","Hubli-Dharwad", "Mysuru","Kalaburagi", "Mangaluru", "Dakshina Kannada", "Belagavi", "Davanagere", "Ballari", "Vijayapura", "Shivamogga", "Tumakuru", "Raichur", "Bidar", "Hosapete", "Vijayanagara", "Gadag-Betageri", "Gadag", "Robertsonpete", "Kolara", "Hassan", "Bhadravati", "Gokak", "Belagavi", "Udupi", "Mandya", "Chikkamagaluru", "Gangavati", "Koppal", "Bagalkote", "Ranebennuru", "Haveri"],
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
									<select class="form-control" id="pstates" name="pstates" size="1" onchange="makeSubmenu(this.value)">
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

							<div class="col-sm-4">
								<label>City</label>
								<select class="form-control" id="pcities" name="pcities" size="1">
									<option value="" disabled selected>Choose City</option>
									<option></option>
								</select>
							</div>





							<div class="col-sm-12">
								<label for="description">Description:</label>
								<textarea class="form-control" rows="5" name="description" id="description" onkeyup="validate_category()"></textarea>
							</div>
								<div class="col-sm-3 mb-3 mb-sm-0">
								<label for="Pname"> ISO Certificate Number:</label>
								<input type="text" class="form-control" id="uploadcertificate" name="uploadcertificate" placeholder="">

							</div>

						

							<div class="col-sm-2">
								<label for="price">Price:</label>
								<input type="text" class="form-control" onchange="change();" id="price" name="price" placeholder="0">
							</div>/
							<div class="col-sm-2 mb-3 mb-sm-0">
								<label for="quantity">Units:</label>
								<select class="form-control col-sm-0" id="punits" name="punits">
									<option value="KG">KG</option>
									<option value="Metric ton">Metric ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
								
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>

								</select>
							</div>
	                  <div class="col-sm-2">
								<label for="quantity">Supply Ability:</label>
								<input type="text" class="form-control" id="quantity" name="quantity" placeholder>
							</div>


							<div class="col-sm-2 mb-3 mb-sm-0">
								<label for="quantity">Units:</label>
								<select class="form-control col-sm-0" id="units" name="units">
									<option value="KG">KG</option>
									<option value="Metric ton">Metric ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
								
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>

								</select>
								
								
								
								
								<script>

								
							</div>
								<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="Pname">Payable To Rawmet:(%)</label>
								<input type="text" class="form-control" id="payable" name="payable" placeholder="">


							</div>
								<div class="col-sm-2">
								<label for="Pname"> Live Stock:</label>
								<input type="text" class="form-control" id="supplyability" name="supplyability" placeholder="">

							</div>
							<div class="col-sm-2 mb-3 mb-sm-0">
								<label for="quantity">Units:</label>
								<select class="form-control col-sm-0" id="supplyunits" name="supplyunits">
									<option value="KG">KG</option>
									<option value="Metric ton">Metric ton</option>
									<option value="Litre">Litre</option>
									<option value="lot">lot</option>
								
									<option value="Number">Number</option>
									<option value="Meter">Meter</option>
								</select>
							</div>




							<!--<img class="img-fluid" src="<?php// echo base_url() . "web_files/"; ?>img/iron.jpg" alt="Chania" width="150" height="20">-->
							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="Pname">Minimum Order Stock:</label>
								<input type="text" class="form-control" id="minoderquant" name="minoderquant" placeholder="">

							</div>
						
						
							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="Pname">Stock Per Month:</label>
								<input type="text" class="form-control" id="quantpermonth" name="quantpermonth" placeholder="">

							</div>



							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="Pname">Validity </label>
								<label for="Pname">[ From:]</label>
								<input type="datetime-local" class="form-control" id="productvalidityfrom" name="productvalidityfrom" placeholder="">
							</div>


							<div class="col-sm-4 mb-3 mb-sm-0">
							<label for="Pname">Validity </label>
								<label for="Pname"> [To:]</label>
								<input type="datetime-local" class="form-control" id="productvalidityto" name="productvalidityto" placeholder="">
							</div>






							<div class="col-sm-4 mb-3 mb-sm-0">
								<label for="Pname">Estimated Delivery Time:</label>
								<input type="text" class="form-control" id="estdeltime" name="estdeltime" placeholder="">

							</div>
							
									<div class="col-sm-5 mt-4">
							<!--	<label for="exampleInputFile">Upload Product Images:</label>
								<input type="file" class="form-control-file" id="uploadproductimage" name="uploadproductimage">-->
								
								
								<div class="input_fields_wrap">
								<label for="">Upload Image</label>
								<input  type="file" id="uploadproductimage" name="uploadproductimage">
								</div>
								
								
								
								
								
								
								
							</div>
							
							
							
							
							
							
							
							
							
							
							
						

						

							<!-- 		<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
										Name: <input type="text" name="fname">
										<input type="submit" value="Submit">

										var x = document.forms["myForm"]["fname"].value;
										</form>
										-->



							<!--<div class="col-sm-4 mt-4">
												<label for="fobprice">Is Fob Price?</label>
												<label class="radio-inline"><input type="radio" name="fobprice" id="fobprice" checked> Yes</label>
												<label class="radio-inline"><input type="radio" name="fobprice"  id="fobprice">No</label>
											</div>
											<div class="col-sm-4 mt-4">
												<label class="checkbox-inline">
												<input type="checkbox" value="aifeatured" id="aifeatured" name="aifeatured">Add into Featured</label>
											</div>-->



							<!--<input type="submit" name="submit" id="btn1"  value="Submit" class="btn btn-primary btn-sm">-->
							<div class="col-md-12 text-center mt-4">




								<input class="btn btn-primary btn-sm"  type="submit" name="submit" value="submit">
								

								<button class="btn btn-primary btn-sm offset-sm-2 " type="reset" href="<?php echo base_url(); ?>vendor_postproduct" value="Clear" name="Clear" role="button">Clear</a>



							</div>
						</div>
					</form>





					
										


</div>

				</div>
			</div>

			<!-- Pie Chart -->

		</div>

		<!-- Content Row -->


	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
	function change() {
		if (document.getElementById('punits').value == 'KG')
			document.getElementById("payable").value = 'KG';
		    document.getElementById("supplyunits").value = 'KG';
		else if (document.getElementById('punits').value == 'Metric Ton')
			document.getElementById("payable").value = 'Metric Ton';
		document.getElementById("supplyunits").value = 'Metric Ton';
		else if (document.getElementById('punits').value == 'Lot')
			document.getElementById("payable").value = 'Lot';
		document.getElementById("supplyunits").value = 'Lot';
		else if (document.getElementById('punits').value == 'Liter')
			document.getElementById("payable").value = 'Liter';
		document.getElementById("supplyunits").value = 'Liter';
		else if (document.getElementById('punits').value == 'Number')
			document.getElementById("payable").value = 'Number';
		document.getElementById("supplyunits").value = 'Number';
		else if (document.getElementById('punits').value == 'Meter')
			document.getElementById("payable").value = 'Meter';
		document.getElementById("supplyunits").value = 'Meter';
	};
</script>

<script type="text/javascript">    
$(document).ready(function(){     
        
$(".gst").change(function () {      
var inputvalues = $(this).val();      
  var regex = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9A-Z]){1}?$/;    
  if(!regex.test(inputvalues)){      
  $(".gst").val("");    
  swal("Alert!","Invalid gst no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script>
 <script type="text/javascript">
	function validate_Postproduct() {
		var category = document.getElementById("category").value;
		var description = document.getElementById("description").value;
		var productname = document.getElementById("productname").value;
		var price = document.getElementById("price").value;
		var quantity = document.getElementById("quantity").value;
		var units = document.getElementById("units").value;
		var materialname = document.getElementById("materialname").value;
		
		
		var minoderquant = document.getElementById("minoderquant").value;
		var supplyability = document.getElementById("supplyability").value;
		var minoderquant = document.getElementById("minoderquant").value;
		var supplyunits = document.getElementById("supplyunits").value;
		var quantpermonth = document.getElementById("quantpermonth").value;
		var productvalidityfrom = document.getElementById("productvalidityfrom").value;
		var productvalidityto = document.getElementById("productvalidityto").value;
		var estdeltime = document.getElementById("estdeltime").value;
		var pstates = document.getElementById("pstates").value;
		var types = document.getElementById("types").value;
		var pcities = document.getElementById("pcities").value;
		var payable = document.getElementById("payable").value;
		var productid = document.getElementById("productid").value;
		var companyname = document.getElementById("companyname").value;
		var sellerid = document.getElementById("sellerid").value;
		if (category == '' || description == '' || productname == '' || price == '' || quantity == '' || units == '' || materialname == '' ||  minoderquant == '' || supplyability == '' || minoderquant == '' || supplyunits == '' || quantpermonth == '' || productvalidityfrom == '' || productvalidityto == '' || estdeltime == '' || pstates == '' || types == '' || pcities == '' || payable == '' || productid == '' || companyname == '' || vusername == '') {
			swal("Alert!", "Description, Productname, Stock , Minimum Order Stock,Supply Ability, Add into Featured,FOB Price, Stock Per month, cannot leave any field blank!", "error");
			return false;
		}
	}
</script> 

