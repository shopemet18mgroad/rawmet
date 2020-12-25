

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
               <!--  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
               
                </div> -->
                <!-- Card Body -->
                <div class="card-body">
				<center>
				<div class="form-check m-4 ">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								
								<button type="button" class="btn btn-primary">Negotiate All</button></a>
							</div>
							</center>
	<!--Form1-->			
				<form class="user">
				<div class="row  bg-light">
				<div class="col-sm-2">
				<div class="col-sm-4">
				<div class="thumbnail mt-5">
					<img class="img" src="<?php echo base_url()."web_files/";?>img/pigiron.jpg" alt="Chania" width="120" height="120">
				</div>	
				</div>
				</div>
			

				<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
							<?php foreach($sqldata as $row){?>						
							<p><b>Supplier Name:</b><?php echo $row->productid;?></p>
							<p><b>Category:</b><?php echo $row->category;?></p>
							<p><b>Product Id:</b><?php echo $row->productid;?></p>
							<p><b>Supplier Price:</b><?php echo $row->price."/"; echo $row->units;?></p>
							
							<p class="mt-3">Stock Available at : <?php echo $row->pstates;?></p>
					</div>
					</div>
				  </div>


					<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
							<h4 style="color:purple;"><b><?php echo $row->productname;?></b></h4>
						
							<p class="w-auto small"><?php echo $row->description;?></p>
							
					</div>
					</div>
				  </div>
				  <?php }?>
				  
				  <div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							<h6 class="text-center" style="color:orange;"><b>Live Stock : 5 Tons</b></h6>
							<div class="form-check mt-3 text-left">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Negotiate</label>
							</div>
  
					<form class="col-12">
							<div class="form-row">
								<label class="col-sm-6 col-form-label"  for="name">Quantity</label>
								<input type="text" class="form-control col-sm-2 mr-2" name="name" placeholder="Quantity" id="name" [(ngModel)]="person.name" />
								<div class="col-sm-3">  
			   	<select class="form-control col-sm-0" id="type">
						<option>KG</option>
						<option>Metric Ton</option>
						<option>Litre</option>
						<option>lot</option>
						<option>litre</option>
						<option>Number</option>
						<option>Meter</option>
					
				    </select>
				</div>
								
							</div>
							<div class="form-row mt-2">
								<label class="col-sm-6 col-form-label"  for="name">Your Price Per KG</label>
								<input type="text" class="form-control col-sm-2 mr-2" name="name" placeholder="price" id="name" [(ngModel)]="person.name" />
								<div class="col-sm-3">  
			   	<select class="form-control col-sm-0" id="type">
						<option>KG</option>
						<option>Metric ton</option>
						<option>Litre</option>
						<option>lot</option>
						<option>litre</option>
						<option>Number</option>
						<option>Meter</option>
					
				    </select>
				</div>
								<a href=""><button type="button" class="btn btn-primary btn-sm mt-2 offset-sm-5">submit</button></a>
							</div>
					</form>
							
					</div>
					</div>
				  </div>
				  
                </div>
                </form>	
	<!--Form2-->
							<form class="user mt-2">
				<div class="row  bg-light">
				<div class="col-sm-2 ">
				<div class="col-sm-4 ">
				<div class="thumbnail mt-5">
					<img class="img" src="<?php echo base_url()."web_files/";?>img/pigiron.jpg" alt="Chania" width="120" height="120">
				</div>	
				</div>
				</div>

				<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
													
							<p><b>Supplier:</b> SM/RM/19/07/345</p>
							<p><b>Supplier Price:</b> 80 / KG</p>
							
							<p class="mt-5">Stock Available at : Bangalore | Karnataka | INDIA </p>
					</div>
					</div>
				  </div>


					<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
							<h4 style="color:purple;"><b>Copper Pipes</b></h4>
						
							<p class="w-auto small">The Supplier details with Primary Copper Pipes, Copper Sheets, Copper Blocks
and other copper related Raw Materials. We Supply across India.</p>
							
					</div>
					</div>
				  </div>
				  
							  <div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							<h6 class="text-center" style="color:orange;"><b>Live Stock : 5 Tons</b></h6>
							<div class="form-check mt-3 text-left">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Negotiate</label>
							</div>
  
					<form class="col-12">
							<div class="form-row">
								<label class="col-sm-6 col-form-label"  for="name">Quantity</label>
								<input type="text" class="form-control col-sm-2 mr-2" name="name" id="name" [(ngModel)]="person.name" />
								<div class="col-sm-3">  
			   	<select class="form-control col-sm-0" id="type">
						<option>KG</option>
						<option>Metric ton</option>
					
				    </select>
				</div>
								
							</div>
							<div class="form-row mt-2">
								<label class="col-sm-6 col-form-label"  for="name">Your Price Per KG</label>
								<input type="text" class="form-control col-sm-2 mr-2" name="name" id="name" [(ngModel)]="person.name" />
								<div class="col-sm-3">  
			   	<select class="form-control col-sm-0" id="type">
						<option>KG</option>
						<option>Metric ton</option>
					
				    </select>
				</div>
								<a href=""><button type="button" class="btn btn-primary btn-sm mt-2 offset-sm-5">submit</button></a>
							</div>
					</form>
							
					</div>
					</div>
				  </div>
				  
                </div>
                </form>	
	<!--form3-->			
					<form class="user mt-2">
				<div class="row  bg-light">
				<div class="col-sm-2 ">
				<div class="col-sm-4 ">
				<div class="thumbnail mt-5">
					<img class="img" src="<?php echo base_url()."web_files/";?>img/pigiron.jpg" alt="Chania" width="120" height="120">
				</div>	
				</div>
				</div>

				<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
													
							<p><b>Supplier:</b> SM/RM/19/07/345</p>
							<p><b>Supplier Price:</b> 80 / KG</p>
							
							<p class="mt-5">Stock Available at : Bangalore | Karnataka | INDIA </p>
					</div>
					</div>
				  </div>


					<div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
							<h4 style="color:purple;"><b>Copper Pipes</b></h4>
						
							<p class="w-auto small">The Supplier details with Primary Copper Pipes, Copper Sheets, Copper Blocks
and other copper related Raw Materials. We Supply across India.</p>
							
					</div>
					</div>
				  </div>
				  
				  
				  <div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							<h6 class="text-center" style="color:orange;"><b>Live Stock : 5 Tons</b></h6>
							<div class="form-check mt-5 text-left">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Negotiate</label>
							</div>
  
					<form class="col-12">
							<div class="form-row">
								<label class="col-sm-8 col-form-label"  for="name">Your Price Per KG</label>
								<input type="text" class="form-control col-sm-4" name="name" id="name" [(ngModel)]="person.name" disabled/>
								<button type="submit" form="form1" value="Submit">Submit</button>
							</div>
					</form>
							
					</div>
					</div>
				  </div>
				  
                </div>
                </form>	
				<!--Form4-->		
			<form class="user mt-2">
				<div class="row  bg-light">
				<div class="col-sm-2 ">
				<div class="col-sm-4 ">
				<div class="thumbnail mt-5">
					<img class="img" src="<?php echo base_url()."web_files/";?>img/pigiron.jpg" alt="Chania" width="120" height="120">
				</div>	
				</div>
				</div>

				<div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
													
							<p><b>Supplier:</b> SM/RM/19/07/345</p>
							<p><b>Supplier Price:</b> 80 / KG</p>
							
							<p class="mt-5">Stock Available at : Bangalore | Karnataka | INDIA </p>
					</div>
					</div>
				  </div>


					<div class="col-sm-4 p-2">
					<div class="row p-2">
					<div class="col-sm-12">
							<h4 style="color:purple;"><b>Copper Pipes</b></h4>
						
							<p class="w-auto small">The Supplier details with Primary Copper Pipes, Copper Sheets, Copper Blocks
and other copper related Raw Materials. We Supply across India.</p>
							
					</div>
					</div>
				  </div>
				  
				  
				  <div class="col-sm-3 p-2">
					<div class="row p-2">
					<div class="col-sm-10">
							<h6 class="text-center" style="color:orange;"><b>Live Stock : 5 Tons</b></h6>
							<div class="form-check mt-5 text-left">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Negotiate</label>
							</div>
  
					<form class="col-12">
							<div class="form-row">
								<label class="col-sm-8 col-form-label"  for="name">Your Price Per KG</label>
								<input type="text" class="form-control col-sm-4" name="name" id="name" [(ngModel)]="person.name"/>
							</div>
					</form>
							
					</div>
					</div>
				  </div>
				  
                </div>
                </form>
				<a href="<?php echo base_url();?>admin_approvebuyer" class="btn btn-info btn-lg mt-4 offset-sm-5" style="font-size:13px text-align:center" role="button"><b>Submit</b></a>
			
	
			
			

            </div>
			
			 <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->

            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

   