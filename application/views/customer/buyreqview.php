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
				<?php $img = unserialize($sqldata[0]->uploadimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="25%" height="200px">
				<div class="col-sm-4 mb-3 mb-sm-0 ml-10">
				<h6 class="m-0 font-weight-bold text-primary"><b>Buyer Id</b>&nbsp;:&nbsp&nbsp<?php echo $sqldata[0]->buyerid;?></h6>
					<h6 class="m-0 font-weight-bold text-primary"><b>Productname</b>&nbsp;:&nbsp&nbsp<?php echo $sqldata[0]->productname;?></h6>
					<p><b>Category</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->category;?><br>
					<b>Product Id</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->productid;?><br>
					<b>Buyer Id</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->bname;?><br>
					<b>Buyer Company Name</b>&nbsp;&nbsp;:&nbsp;<?php echo $sqldata[0]->bcompanyname;?><br>
					<!--<h6><b> Material Name&nbsp;:&nbsp;</b>&nbsp;<?php// echo $sqldata[0]->materialname;?><br>-->
					<b>Price:&nbsp;</b><?php echo$sqldata[0]->price."/".$sqldata[0]->priceperkg;?></br>
					<b>Stock:</b><?php echo  $sqldata[0]->quantity." ".$sqldata[0]->units;?>
					</br>
					<b>Email Id:</b><?php echo  $sqldata[0]->email;?>
					</br>
					<b>Contact Number:</b><?php echo  $sqldata[0]->contactnumber;?></p>
					
				  </div>

<?php $proid = str_ireplace('/','-',$sqldata[0]->productid);
	 
				?>
				  <a href="<?php echo base_url()."Customer_editbuyerreq/editproduct/".$proid;?>"><button type="button" class="btn btn-info"><i class="fa fa-edit">Edit</i></button></a>
				  
				<table class="table bg-white table-sm table-borderless">
					
						<tbody>
							<tr>
							<td><b>Description&nbsp:&nbsp</b><?php echo $sqldata[0]->description;?></h6></td>
								
							</tr>
							
								<td><b>Requried Rate:</b><?php echo$sqldata[0]->requireddate."</br>"." <b> Last Date</b> ".$sqldata[0]->lastdate;?></td>
							</tr>
							
<td><b>Customer Uploaded PDF:</b>
 <?php $aucfl = unserialize($sqldata[0]->uploadpdf);?>
 <?php if(isset($aucfl[0])){?>
<a href="<?php echo base_url().'web_files/uploads/'. $aucfl[0];?>" target="_blank">
<?php echo '<i class="fa fa-download"></i>' ; ?>

</a></td>
<?php }?>
</td>
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

  