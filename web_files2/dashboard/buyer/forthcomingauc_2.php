 <?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Auction Details</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		<table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-info text-white text-center">
					<th colspan="7">Auction Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th>Opening Date/Time</th>
					<th>Closing Date/Time</th>
					<th>EMD Amount</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></</td>
					<td>23-03-2020 23:00:00</td>
					<td>24-11-2019 16:17:00</td>
					<td>2,00,000</td>
				</tr>
				</tbody>
		 </table>
				<table class="table table-striped table-sm table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<th colspan="8">Seller Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Company Id</th>
					<th>Seller / Company Name</th>
					<th>Location</th>
					<th>Street</th>
					<th>City</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Contact Person</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td>010</td>
					<td>OMFED LTD</td>
					<td>Bangalore</td>
					<td>Shashi Nagar</td>
					<td>Bangalore-560013</td>
					<td>2238521</td>
					<td>XYZ@gmail.com</td>
					<td>Shri S.K. Reddy</td>
				</tr>
				</tbody>
		 </table>
		
		<table class="table table-striped table-sm table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th>Lot Description</th>
					<th>Quantity</th>
					<th>GST</th>
					<th>Location</th>
					<th>Add to Mylist</th>
				</tr>
				</thead>

				<tbody>
			<tr>												
				<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
				<td>Machine Description- Horizontal Boring Machine</td>
				<td>1.0 Lot</td>
				<td>18.0</td>
				<td>Bangalore-KA</td>
				<td><center><a href="" data-toggle="modal" data-target="#myModal"><i class="fas fa-heart text-danger" aria-hidden="true"></i></a></center>
				
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						<div class="modal-header">
						  <h4 class="modal-title"><b>My List</b><br></h4>
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						
						<!-- Modal body -->
						<div class="modal-body">
						<center><p class="text-primary"><i class="fa fa-check" aria-hidden="true"></i>Added to My List</p></center>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
				</td>
			</tr>
			<tr>												
				<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
				<td>Machine Description- Horizontal Boring Machine</td>
				<td>1.0 Lot</td>
				<td>18.0</td>
				<td>Bangalore-KA</td>
					<td><center><a href="" data-toggle="modal" data-target="#myModal"><i class="fas fa-heart text-secondary" aria-hidden="true"></i></a></center>
				
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						<div class="modal-header">
						  <h4 class="modal-title"><b>My List</b><br></h4>
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						
						<!-- Modal body -->
						<div class="modal-body">
						<center><p class="text-primary"><i class="fa fa-check" aria-hidden="true"></i>Added to My List</p></center>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
				</td>
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

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <?php 
	include('./footer.php');
?>
</body>

</html>
