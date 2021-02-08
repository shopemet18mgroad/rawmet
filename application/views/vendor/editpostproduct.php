

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
                  <h6 class="m-0 font-weight-bold text-primary">Edit Products</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					
			
			<form action="<?php echo base_url();?>vendor_postproduct_update" onsubmit="return validate_Postproduct()" method="POST" enctype="multipart/form-data">
			 	
                <div class="form-group row">
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Supplier Name</label>
					<input type="text" class="form-control" id="vname" name="vname"  value="<?php echo  $sqldata[0]->vname;?>" readonly>
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Supplier Id</label>
					<input type="text" class="form-control" id="companyname" name="companyname"  placeholder="Company Name" value="<?php echo  $sqldata[0]->companyname;?>"readonly>
                    
                </div>
				
				<div class="col-sm-4 mb-3 mb-sm-0">
				
					<label for="">Category</label>
					
					<select class="form-control" id="category" name="category">
					       <option value="<?php echo  $sqldata[0]->category;?>"><?php echo  $sqldata[0]->category;?></option>
						<option value="Non Metal">Non Metal</option>
						<option value="Ferrous">Ferrous</option>
						<option value="Non Ferrous">Non Ferrous</option>
				        <option value="Scrap" >Scrap</option>
						<option value="Metal" >Metal</option>
				    </select> 
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Product Name</label>
					<input type="text" class="form-control" id="productname" name="productname"  placeholder="Product Name" value="<?php echo  $sqldata[0]->productname;?>" onkeyup="product_id()" >
                    
                </div>

				
				
				
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="">Product Id</label>
					<input type="text" class="form-control" id="productid" name="productid"  placeholder="Product Id" value="<?php echo  $sqldata[0]->productid;?>" readonly>
                    
                </div>
				
				
				
              
			
				<div class="col-sm-4">  
				
			   	<label for="category">Types:</label>
					<select class="form-control" id="types" name="types" value="">
					<option value="<?php echo  $sqldata[0]->types;?>"><?php echo  $sqldata[0]->types;?></option>
					
						<option value="Primary">Primary</option>
						<option value="Secondary">Secondary</option>
				        <option value="Scrap" >Scrap</option>
				    </select>  
				</div>
				<div class="col-sm-4"> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">

var citiesByState = {
Odisha: ["Bhubaneswar","Puri","Cuttack"],
Maharashtra: ["Mumbai","Pune","Nagpur"],
Kerala: ["kochi","Kanpur"],
Karnataka: ["Bengaluru","Hubli-Dharwad","Mysuru","Kalaburagi","Mangaluru","Dakshina Kannada","Belagavi","Davanagere","Ballari","Vijayapura","Shivamogga","Tumakuru","Raichur","Bidar","Hosapete","Vijayanagara","Gadag-Betageri","Gadag","Robertsonpete","Kolara","Hassan","Bhadravati","Gokak","Belagavi","Udupi","Mandya","Chikkamagaluru","Gangavati","Koppal","Bagalkote","Ranebennuru","Haveri"],
ArunachalPradesh: ["Itanagar"],
AndhraPradesh: ["Visakhapatnam"],
Assam: ["Dispur"],
Bihar: ["Patna"],
Chhattisgarh:["Naya Raipur"],
Goa: ["Panaji"],
Gujarat:	["Gandhinagar"],
Haryana:	["Chandigarh"],
HimchalaPradesh: ["Shimla"],
Jharkhand: ["Ranchi"],	
Kerala:	["Thiruvananthapuram"],		
MadhyaPradesh: ["Bhopal"],		
Maharashtra: ["Mumbai"],
Manipur: ["Imphal"],	
Meghalaya: ["Shillong"],	
Mizoram: ["Aizawl"],	
Nagaland:	["Kohima"],	
Odisha: ["Bhubaneswar"],	
Punjab:	["Chandigarh"],	
Rajasthan:	["Jaipur"],	
Sikkim: ["Gangtok"],
TamilNadu:	["Chennai"],
Telangana:	["Hyderabad"],	
Tripura:	["Agartala"],	
UttarPradesh: ["Lucknow"],	
Uttarakhand:	["Dehradun"],	
WestBengal: ["Kolkata"],
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("pcities").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("pcities").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("pstates").value;
var city = document.getElementById("pcities").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("pstates").selectedIndex = 0;
document.getElementById("pcities").selectedIndex = 0;
}
</script>

<label>State</label>
<body onload="resetSelection()">
<select class="form-control" id="pstates" name="pstates" size="1" onchange="makeSubmenu(this.value)">
<option value="<?php echo  $sqldata[0]->pstates;?>"><?php echo  $sqldata[0]->pstates;?></option>

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
	<select class="form-control" id="pcities" name="pcities" size="1" >
	<option value="<?php echo  $sqldata[0]->pcities;?>"><?php echo  $sqldata[0]->pcities;?></option>

<option></option>
</select>
</div>

				  <div class="col-sm-12">
					<label for="description">Description:</label>
					<textarea class="form-control" rows="5" name="description" id="description"  value="<?php echo  $sqldata[0]->description;?>"><?php echo  $sqldata[0]->description;?></textarea>
					</div>
				
				   <div class="col-sm-4">
				   <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="0"  value="<?php echo  $sqldata[0]->price;?>">
                  </div>
                
				
                <div class="col-sm-2">
					<label for="quantity">Stock:</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder  value="<?php echo  $sqldata[0]->quantity;?>">
				  </div>
				  <div class="col-sm-2 mb-3 mb-sm-0">	
				<label for="quantity">Units:</label>
			   	<select class="form-control col-sm-0" id="units" name="units" value="">
				<option value="<?php echo  $sqldata[0]->units;?>"><?php echo  $sqldata[0]->units;?></option>
						<option  value="KG">KG</option>
						<option value="Metric ton">Metric ton</option>
						<option value="Litre">Litre</option>
						<option value="lot">lot</option>
						<option value="litre">litre</option>
						<option value="Number">Number</option>
						<option value="Meter">Meter</option>
					
				    </select> 
			</div>
				
				
				
				
				<!--<img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/iron.jpg" alt="Chania" width="150" height="20">-->
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Minimum Order Stock:</label>
					<input type="text" class="form-control" id="minoderquant" name="minoderquant"  placeholder="" value="<?php echo  $sqldata[0]->minoderquant;?>" >
                    
                </div>
				<div class="col-sm-2 mb-3 mb-sm-0">
					<label for="Pname">supply Ability:</label>
					<input type="text" class="form-control" id="supplyability" name="supplyability"  placeholder="" value="<?php echo  $sqldata[0]->supplyability;?>">
                    
                </div>
				<div class="col-sm-2 mb-3 mb-sm-0">	
				<label for="quantity">Units:</label>
			   	<select class="form-control col-sm-0" id="supplyunits" name="supplyunits">
				<option value="<?php echo  $sqldata[0]->supplyunits;?>"><?php echo  $sqldata[0]->supplyunits;?></option>
						<option>KG</option>
						<option>Metric ton</option>
						<option>Litre</option>
						<option>lot</option>
						<option>litre</option>
						<option>Number</option>
						<option>Meter</option>
					
				    </select>
			</div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Payable To Rawmet:(%)</label>
					<input type="text" class="form-control" id="payable" name="payable"  placeholder="" value="<?php echo  $sqldata[0]->payable;?>" >
					
                    
                </div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Stock Per Month:</label>
					<input type="text" class="form-control" id="quantpermonth" name="quantpermonth" value="<?php echo  $sqldata[0]->quantpermonth;?>"placeholder="">
                    
                </div>
					<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Validity From Date:</label>
					<input type="datetime-local" class="form-control" id="productvalidityfrom" name="productvalidityfrom"  placeholder="" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->productvalidityfrom)); ?>">               
				</div>
				
				
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Validity To Date:</label>
					<input type="datetime-local" class="form-control" id="productvalidityto" name="productvalidityto"  placeholder="" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->productvalidityto)); ?>">
				</div>
				<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">Estimated Delivery Time:</label>
					<input type="text" class="form-control" id="estdeltime" name="estdeltime"  placeholder="" value="<?php echo  $sqldata[0]->estdeltime;?>">
                    
                </div>
				 
		
					<div class="col-sm-4 mt-4">
					
								<img src="<?php if(unserialize($sqldata[0]->uploadproductimage) != NULL){
									$img = unserialize($sqldata[0]->uploadproductimage);
									echo base_url()."/web_files/uploads/".$img[0];}else{echo base_url()."#";} ?>" width="100%" height="100px">
									<?php 
									if(unserialize($sqldata[0]->uploadproductimage) != NULL){?>
								<input type="hidden" name="profileimage" id="profileimage" value="<?php echo $img[0];?>">
								<?php
									}
								?>
							
							
						
								
							<label for="">Update Image</label>
								<div class="input_fields_wrap">
								
								<input  type="file" id="uploadproductimage" name="uploadproductimage">
								</div>
							</div>
							<div class="col-sm-4 mb-3 mb-sm-0">
					<label for="Pname">ISO Certificate Number</label>
					<input type="text" class="form-control" id="uploadcertificate" name="uploadcertificate"  placeholder="" value="<?php echo  $sqldata[0]->uploadcertificate;?>">
                    
                </div>
				
					<div class="col-md-12 text-center mt-4">
						<?php $proid = str_ireplace('/','-',$sqldata[0]->productid);
				?>
						
						<center>	
			<!--	<input class="btn btn-primary btn-sm" onclick="return validate_Postproduct()" type="submit" value=" Submit">-->			
                <input type="submit" id="submitBtn" a style="margin:2px" class="btn btn-primary btn-sm text-white" href="<?php echo base_url()."vendor_postproduct_update/approve_product/".$proid;?>" class="btn btn-primary" name="submit" value="Update">	</center>
					</div>	
					
				</div>
                </form>	
					
			
              </div>
            </div>

            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


