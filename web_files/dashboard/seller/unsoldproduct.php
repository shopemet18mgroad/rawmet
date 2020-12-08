<?php
    include('./header.php');
	?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Unsold Data History</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<form class="form-inline">
			  
			  <div class="form-group mr-4 offset-sm-2">
			  <td colspan="5">
			  <form action="/action_page.php">
			  <div class="form-group">
			  <label>Date</label>
			
					<input class="form-control col-sm-5 m-2" type="Date" id="sdate" name="sdate">
					<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
				</div>
				
				 <div class="form-group col-sm-5 mr-4">
				<label>Category:</label>

					<select class="form-control col-sm-5 ml-2" id="scategory" name="scategory">
					<option value="one" selected>Ferrous</option>
					<option value="two">Non Ferrous</option>
					<option value="three" >Minor Metals</option>
					<option value="four">Plain paper</option>
					<option value="five">Granules</option>
					<option value="six">All Construction Materials</option>
					</select>
					
					<a href="#"><button type="button" class="btn btn-primary btn-sm ml-4 mt-2 mb-2">Search</button></a>
				</div>
			</form>
			</td>
			</div>
			</form>
			
         <table class="table table-striped text-center table-sm table-bordered w-auto small" id="dataTable" width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
      <tr>
	<th colspan="15" class="bg-info text-center">Unsold Products</th>
	</tr>
	<tr>
	<th>Auction Id</th>
	<th>Company Name</th>
	<th>Location</th>
	<th>Lot No.</th>
	<th>Lot Name</th>
	<th>Qty</th>
	<th>Purity</th>
	<th>Final Bid price</th>
	<th>Description</th>
	<th>Auction Date/Time</th>
	<th>Amount</th>
	<th>Option</th>
	<th>Download</th>
	</tr>

	</thead>
	<tbody>
		<tr>
        <td style="color:blue;">AJ256458/BHEL/IRON/102</td>
		<td style="color:blue;">XYZ Ltd</td>
		<td>BHUBANESWAR</td>
		<td>M-9</td>
		<td>Paper</td>
		<td>50</td>
		<td>80%</td>
		<td>35,000</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc</u></a></td>
		<td>15-7-2020</td>
		<td>2,00,000</td>
		<td><a href="#"><button type="button" class="btn btn-primary btn-sm"><strong>Reauction</strong></button></a></td>
		<td><a href=""><i class="fa fa-download"></i></a></td>	
		</tr>
		<tr>
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
		<td style="color:blue;">XYZ Ltd</td>
		<td>BHUBANESWAR</td>
		<td>M-9</td>
		<td>Paper</td>
		<td>50</td>
		<td>80%</td>
		<td>35,000</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc</u></a></td>
		<td>15-7-2020</td>
		<td>2,00,000</td>
		<td><a href="#"><button type="button" class="btn btn-primary btn-sm "><strong>Reauction</strong></button></a></td>
		<td><a href=""><i class="fa fa-download"></i></a></td>	
		</tr>
		<tr>
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
		<td style="color:blue;">XYZ Ltd</td>
		<td>BHUBANESWAR</td>
		<td>M-9</td>
		<td>Paper</td>
		<td>50</td>
		<td>80%</td>
		<td>35,000</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc</u></a></td>
		<td>15-7-2020</td>
		<td>2,00,000</td>
		<td><a href="#"><button type="button" class="btn btn-primary btn-sm "><strong>Reauction</strong></button></a></td>
		<td><a href=""><i class="fa fa-download"></i></a></td>	
		</tr>
		<tr>
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
		<td style="color:blue;">XYZ Ltd</td>
		<td>BHUBANESWAR</td>
		<td>M-9</td>
		<td>Paper</td>
		<td>50</td>
		<td>80%</td>
		<td>35,000</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc</u></a></td>
		<td>15-7-2020</td>
		<td>2,00,000</td>
		<td><a href="#"><button type="button" class="btn btn-primary btn-sm"><strong>Reauction</strong></button></a></td>
		<td><a href=""><i class="fa fa-download"></i></a></td>	
		</tr>
			
      
    </tbody>
  </table>

		  </div>
            </div>
          </div>
		</div>
        </div>
	
          <!-- Content Row -->
    
        <!-- /.container-fluid -->

    
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

  
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php
    include('./footer.php');
	?>
