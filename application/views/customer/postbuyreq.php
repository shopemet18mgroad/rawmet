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
              <!--   Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                  <h5 class="m-0 font-weight-bold text-primary">Post Bulk Requirement</h5>
               
                </div>
                <!-- Card Body -->
            <div class="card-body">		
			 
				
				<div class="row">
				<div class="col-sm-4 bg-warning">
        <div class="thumbnail">
        <div class="container">
				<h3 style="text-align:center; padding:15px" class="m-0 font-weight-bold text-primary">How to get Quotation Quickly?</h3>
				
					<div class="col p-3 m-5">
						<i class="fas fa-file-image fa-3x mt-5"></i> Submit RFQ</p>
						<p><i class="fas fa-sort fa-3x mt-5"></i> Compare Quote</p>
						<p><i class="fas fa-handshake fa-3x mt-5" aria-hidden="true"></i> Contact </p>

					</div>
				</div>
        </div>




				</div>

				<div style="padding:15px" class="col-sm-8">
			 	
        <form  action="<?php echo base_url();?>customer_postbuyreq" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Customer ID</label>
      <input type="text"   class="form-control" id="bname" name="bname"  value="<?php echo  $scomp[0]->buyerid;?>" readonly>
      <input hidden type="text" class="form-control" id="buyerid" name="buyerid"  value="<?php echo  $scomp[0]->buyerid;?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Company Name</label>
      <input type="text" class="form-control" id="bcompanyname" name="bcompanyname"  value="<?php echo  $scomp[0]->bcompanyname;?>" readonly>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control"  id="email" name="email" value="<?php echo  $scomp[0]->bemail;?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact Number</label>
      <input type="number" class="form-control"  id="contactnumber" name="contactnumber" aria-describedby="inputGroup-sizing-sm" value="<?php echo  $scomp[0]->bcontactnumber;?>" readonly>
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2">Category</label>
    <select class="form-control" id="category" name="category">
					    <option value="Category">--Category--</option>
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
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Product Name</label>
      <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter product name.." onkeyup="product_id()" ></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Product Id</label>
      <input type="text" class="form-control" id="productid" name="productid"  placeholder="Product Id">
    </div>
  </div>
  <h6 class="mt-2"><b>&nbsp;&nbsp;Describe your Buying requirement</b></h6>

    <div class="form-group">     
     <textarea class="form-control" rows="4" class="form-control" id="description" name="description" placeholder="Describe your buying requirement.."></textarea>
    </div>

      

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Expected Price:</label>
      <input type="text" class="form-control" id="price" name="price">
      
    </div>
    <div class="form-group col-md-6">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
								<script type="text/javascript">
									var citiesByState = {
										KG: ["KG"],
										Litre: ["Litre"],
										Metric_Ton: ["Metric_Ton"],
										Number: ["Number"],
										Meter: ["Meter"],
										lot: ["lot"],
										
									}

									function makeSubmenu(value) {
										if (value.length == 0) document.getElementById("units").innerHTML = "<option></option>";
										else {
											var citiesOptions = "";
											for (cityId in citiesByState[value]) {
												citiesOptions += "<option>" + citiesByState[value][cityId] + "</option>";
											}
											document.getElementById("units").innerHTML = citiesOptions;
										}
									}

									function displaySelected() {
										var country = document.getElementById("priceperkg").value;
										var city = document.getElementById("units").value;
										alert(country + "\n" + city);
									}

									function resetSelection() {
										document.getElementById("priceperkg").selectedIndex = 0;
										document.getElementById("units").selectedIndex = 0;
									}
								</script>
      <label for="inputZip">Units</label>
      <body onload="resetSelection()">
									<select class="form-control" id="priceperkg" name="priceperkg" size="1" onchange="makeSubmenu(this.value)">
										<option value="" disabled selected>Choose Units</option>
										<option>KG</option>
										<option>Litre</option>
										<option>Metric_Ton</option>
	                                    <option>Number</option>
									<option>Meter</option>
									<option>lot</option>
										
									</select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label>Quantity:</label>
      <input type="text" class="form-control" id="quantity" name="quantity">
      
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Units</label>
      <select class="form-control" id="units" name="units" size="1">
									<option value="" disabled selected>Choose Units</option>
									<option></option>
								</select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label>Required Date:</label>
      <input  class="form-control" type="datetime-local" id="requireddate" name="requireddate">
      
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Last Date</label>
      <input  class="form-control" type="datetime-local" id="lastdate" name="lastdate">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label>Upload Images:</label>
    <input type="file" class="form-control-file" id="uploadimage" name="uploadimage[]" multiple>
      
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Upload PDF</label>
      <input type="file" class="form-control-file" id="uploadpdf"  name="uploadpdf[]">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="iagreee" name="iagreee">
      <label class="form-check-label" for="exampleCheck1">
								I agree to the <a href="">Terms & Conditions</a></label>
    </div>
  </div>
  
  <input type="submit" name="submit"  role="submit" onclick="return validatepostreq()" value="Post Buying Requirement" class="btn btn-info mt-4" style="font-size:13px">
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
  
function validatepostreq(){

	var category = document.getElementById("category").value;
	var productname = document.getElementById("productname").value;
	var description = document.getElementById("description").value;
	//var price = document.getElementById("price").value;
	var priceperkg = document.getElementById("priceperkg").value;
	var quantity = document.getElementById("quantity").value;
	var units = document.getElementById("units").value;
	//var requireddate = document.getElementById("requireddate").value;
	//var lastdate = document.getElementById("lastdate").value;
	var email = document.getElementById("email").value;
	var contactnumber = document.getElementById("contactnumber").value;
	//var uploadimage = document.getElementById("uploadimage").value;
	//var uploadpdf = document.getElementById("uploadpdf").value;
	var iagreee = document.getElementById("iagreee").value;
	

if(category == '' || productname == '' || description == '' || quantity == ''  || units == '' || email == '' || contactnumber == '' || iagreee == ''){
swal("Alert!","Category, Product Name, Description, Quantity, Units , Email, Contact Number, Terms and condition cannot leave any field blank!","error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {category:category,productname:productname,description:description,quantity:quantity,units:units,email:email,contactnumber:contactnumber,iagreee:iagreee},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }

}
  </script>
      
	<script>  
	  var category = document.getElementById('category');
document.getElementById('elements').onchange = function() {
  var optionSelected = this.options[this.selectedIndex];
  if (optionSelected.textContent != '-') {
    if (optionSelected.dataset.val === 'category') {
      category.value = 'KG';
    } else {
      category.value = 'KG';
    }
  } else {
    category.value = '';
  }
}





function clickEffect(e){
var d=document.createElement("div");
d.className="clickEffect";
d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";
document.body.appendChild(d);
d.addEventListener('animationend',function(){d.parentElement.removeChild(d);}.bind(this));
}
document.addEventListener('click',clickEffect);


</script>


<script>
  function validate_bcompany11(){
	  var val = document.getElementById("category").value;
		if(val != ''){

			swal("Alert!",  "Please Enter Buyer Company Name!", "error");
			return false;
		}
		
  }

   </script>