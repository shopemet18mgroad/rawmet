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
				<?php $img = unserialize($sqldata[0]->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="25%" height="200px">
				<div class="col-sm-4 mb-3 mb-sm-0 ml-10">
					<h6 class="m-0 font-weight-bold text-primary"><b>Productname</b>&nbsp;:&nbsp&nbsp<?php echo $sqldata[0]->productname;?></h6>
					<p><b>Category</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->category;?></p>
					<p><b>Product Id</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->productid;?></p>
			<p><b>Supplier Id</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->companyname;?></p>
					<!--<h6><b> Material Name&nbsp;:&nbsp;</b>&nbsp;<?php// echo $sqldata[0]->materialname;?><br>-->
					<b>Description&nbsp:&nbsp</b><?php echo $sqldata[0]->description;?></h6>
							<p><b>Price:&nbsp;</b><?php echo $sqldata[0]->price."/";?>&nbsp;<?php echo$sqldata[0]->units;?><br><b>Stock:&nbsp;</b><?php echo $sqldata[0]->quantity;?>&nbsp;<?php echo $sqldata[0]->units;?><br><b>Posted On:</b><?php echo $sqldata[0]->productvalidityfrom;?><br><b>Validity Till:</b><?php echo $sqldata[0]->productvalidityto;?>
							<br><b style="color:green">Payable To Rawmet&nbsp;:</b>&nbsp;&nbsp;&nbsp;<?php echo $sqldata[0]->payable."%";?>
				  </div>
				   <?php $proid = str_ireplace('/','-',$sqldata[0]->productid);
	 
				?>
				  <a href="<?php echo base_url()."admin_editpostproduct/editproduct/".$proid;?>"><button type="button" class="btn btn-info"><i class="fa fa-edit">Edit</i></button></a>
				  
				  <a href="<?php  echo base_url()."admin_adminvendorproducts/approve_product/".$proid."/".urldecode($sqldata[0]->vname);?>"><button type="button" class="btn btn-success">Approve</button></a>
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
								<td><b>Supply Ability:</b><?php echo $sqldata[0]->supplyability;?>&nbsp;<?php echo $sqldata[0]->supplyunits;?></td>
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

  