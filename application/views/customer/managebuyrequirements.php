
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Buying Requirements</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
 <th>Sl.No.</th>
 <th>Images</th>
			<th>Product Id</th>
			<th>Product Name</th>
			
			<th>company Name</th>
			<th>Description</th>
		
	
			
			<th>Action</th>
      </tr>
    </thead>
    <tbody>
	     <?php  $count = 1;?>
	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
					<td><?php echo $count;?></td> 
	<td><?php $img = unserialize($row->uploadimage)?>
		<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100px" height="55px"></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->productname;?></td>
			
			<td><?php echo $row->bcompanyname;?></td>
		
			<td><?php echo $row->description;?></td>
			
			
				
			<td>
			<a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."customer_buyreqview/index/".$proid."/".urldecode($row->buyerid);?>"><i class="fa fa-eye"></i></a>
			
			<!--<button type="submit" name="submit" id="<?php // echo urldecode($row->bname).'|'.$proid;?>" onclick="admin_buyingreq(this.id)" class="btn btn-success btn-sm">Approve</button></td>-->
			<?php $count++;?>
		
      </tr>      
     <?php }?>	
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

