<?php 
	include('./headerdata.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Live Auction</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
			
			<form class="user">
				
				<div class="row ">
				<div class="col-sm-5">
					<div class="caption p-3 ml-5">
					<div class="form-group">
					<label>Bid Here</label>
						<input class="form-control col-sm-8" type="number" value="100" min="0" step="100" id="bid" name="bid">
						<a href="#" class="btn btn-info w-auto small mt-2 offset-sm-3" role="button" data-toggle="modal" data-target="#myModal">Bid</a>
				</div>
				</div>
				</div>


				<div class="caption mt-3 col-sm-7">
					<table class="table table-sm text-center table-borderless" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-info text-white">
				<tr>
					<th>Live Status</th>
				</tr>
				</thead>
				<tbody>
				<tr>												
					<td style="color:green"><b>2,30,000</b></td>
				</tr>
				<tr>
					<td style="color:orange">2,00,000</td>
				</tr>  
				<tr>
					<td>1,50,000</td>
				</tr>  
				<tr>												
					<td>1,00,000</td>
				<tr>												
					<td>50,000</td>
				</tr>
				</tbody>
		 </table>
					
				  </div>
				  
                </div>
                </form>	
			
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
	include('./footerdata.php');
?>
</body>

</html>
