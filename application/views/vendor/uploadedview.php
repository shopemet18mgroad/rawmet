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
				  	<?php $proid = str_ireplace('/','-',$sqldata[0]->productid);
				?>
               <a style="float:right;" class="btn btn-primary btn-sm text-white" href="<?php echo base_url()."vendor_editpostproduct/editproduct/".$proid .'/'.urldecode($sqldata[0]->category);?>"><i class="fa fa-edit">Edit</i> </a>
			  <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:left"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<form action = "<?php echo base_url();?>" method="POST" enctype="multipart/form-data">
					
				<!--<form class="user" method="POST">-->
			
		
			 
			 
			 	<div class="form-group row col-sm-12">
				
				<?php $img = unserialize($sqldata[0]->uploadproductimage)?>
				<img class="img-thumbnail" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania"> <br />
				<div class="col-sm-4 mb-3 mb-sm-0 ml-10">
				
				
				
				
				<table class="table bg-white table-sm col-sm-12 table-borderless mt-2">
					<thead class="bg-primary text-white">
						
					</thead>
						<tbody> 
						<tr>
					<td><h5 class="m-0 font-weight-bold text-primary"><b>PRODUCTNAME</b>&nbsp;:&nbsp&nbsp<?php echo $sqldata[0]->productname;?></h5></td>
					</tr>
							<tr>
								<td><b>Category</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->category;?></td>
							</tr>
							
							<tr>
								<td><b>Product Id</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->productid;?></td>
							</tr>
							<tr>
								<td><b>Company Name</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->companyname;?></td>
							</tr> 
							<tr>
								<td><b>Seller Id</b>&nbsp;:&nbsp&nbsp<?php echo $sqldata[0]->sellerid;?></td>
							</tr>
							<tr>
								<td><b>Description&nbsp:&nbsp</b><?php echo $sqldata[0]->description;?></h6></td>
							</tr>
							<tr>
							
							
								<td><b>Price:&nbsp;</b><?php echo $sqldata[0]->price."/";?>&nbsp;<?php echo$sqldata[0]->punits;?></td>
								</tr>
								<tr>
					<td><b>Supply Ability:</b><?php echo $sqldata[0]->quantity;?>&nbsp;<?php echo $sqldata[0]->units;?></td>
					</tr>
					<tr>
					<td><b>Live Stock:&nbsp;</b><?php echo $sqldata[0]->supplyability;?>&nbsp;<?php echo $sqldata[0]->supplyunits;?></td>
					<tr>
					<tr>
					<td><b style="color:green">Payable To Rawmet&nbsp;:</b>&nbsp;&nbsp;&nbsp;<?php echo $sqldata[0]->payable."%";?></td>
					</tr>
					<tr>
					<td><b>ISO Certificate Number</b>&nbsp;:&nbsp&nbsp<?php echo $sqldata[0]->uploadcertificate;?></td>
							 
						</tbody>	
					</table>
				
				
				
					
					
					
					
					
					
					
					
					<br>
					
					<br>
					
					
					<!--<h6><b> Material Name&nbsp;:&nbsp;</b>&nbsp;<?php// echo $sqldata[0]->materialname;?><br>-->
					
				
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
								<td><b>Quantity Per Month:&nbsp;&nbsp;</b><?php echo $sqldata[0]->quantpermonth;?></td>
							</tr>
							<tr>
								<td><b>Estimated Delivery Time:</b>&nbsp;&nbsp;<?php echo $sqldata[0]->estdeltime;?></td>
							</tr> 
							<tr>
								<td><b>Posted On:&nbsp;&nbsp;</b><?php echo  date('d-m-Y H:i',strtotime($sqldata[0]->productvalidityfrom))
								;?></td>
							</tr>
							<tr>
								<td><b>Validity Till:</b>&nbsp;&nbsp;<?php echo date('d-m-Y H:i',strtotime($sqldata[0]->productvalidityto)) 
								;?></td>
							</tr>
							<tr>
								<td><b>City:&nbsp;&nbsp;</b><?php echo $sqldata[0]->pcities;?></td>
							</tr>
							<tr>
								<td><b>State:</b>&nbsp;&nbsp;<?php echo $sqldata[0]->pstates;?></td>
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

  