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
                  <h6 class="m-0 font-weight-bold text-primary">Uploaded Product</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<form action = "<?php echo base_url();?>" method="POST" enctype="multipart/form-data">
					
				<!--<form class="user" method="POST">-->
			 	<div class="form-group row">
				<img class="img" src="<?php echo base_url()."web_files/";?>img/iron.jpg" alt="Chania" width="25%" height="1%">
				<div class="col-sm-4 mb-3 mb-sm-0 ml-10">
					<h6 class="m-0 font-weight-bold text-primary"><b>Productname</b>&nbsp;:&nbsp&nbsp<?php echo $sqldata[0]->productname;?></h6>
					<p><b>Category</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->category;?></p>
					<h6><b> Material Name&nbsp;:&nbsp;</b>&nbsp;<?php echo $sqldata[0]->materialname;?><br>
					<b>Description&nbsp:&nbsp</b><?php echo $sqldata[0]->description;?></h6>
					<p><?php echo $sqldata[0]->price;?><br><?php echo $sqldata[0]->quantity;?> Is it a FOB? Yes<br> 2020-Aug-07
					</p>
				  </div>

				<table class="table bg-white table-sm table-borderless">
					<thead class="bg-primary text-white">
						<tr>
							<th colspan="5">Trade Information</th>
						</tr>
					</thead>
						<tbody> 
							<tr>
								<td><b>Minimum Order Quantity:&nbsp;</b><?php echo $sqldata[0]->minoderquant;?></td>
							</tr>
							<tr>
								<td><b>Supply Ability:</b><?php echo $sqldata[0]->supplyability;?></td>
							</tr>
							<tr>
								<td><b>quantity Per Month:&nbsp;&nbsp;</b><?php echo $sqldata[0]->quantpermonth;?></td>
							</tr>
							<tr>
								<td><b>Estimated Delivery Time:</b>&nbsp;&nbsp;<?php echo $sqldata[0]->estdeltime;?></td>
							</tr> 
						</tbody>	
					</table>
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

  