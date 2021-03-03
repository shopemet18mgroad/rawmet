
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Negotiate Here...
			</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
   <!----<form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<!--<label for="gettable"></label>
								<input type="text" class="form-control gettable" id="gettable_quotenegotiation" placeholder="Enter Product Name To Fetch Result"  size="70" name="search">
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					<!--</td>
				</div>
			</form>---->
		<!---<div class="ajaxrslt" id="ajaxrslt_quotenegotiation">
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		<!--</div>--->
		
		
		 <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	   <th>Sl.No.</th>
	  <th>Image</th>
	 <th>Product Name</th>
	  <th>Category</th>
	 <th>Price</th>
      <th>Quantity</th> 
		<th>Action</th> 
		
      </tr>
    </thead>
    <tbody>
	      <?php  $count = 1;?>
	
	<?php foreach($sqldata as $row){?>
     <tr>
	 
	<td><?php echo $count;?></td>
				
	<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="55px"></td>
				   
	<td><?php echo $row->category;?></td> 
	<td><?php echo $row->productname;?></td>
	<td><?php echo $row->price."/". $row->punits;?></td>
	  <td><?php echo $row->quantity." ". $row->units;?></td> 
      	<td>
	
<a href="<?php  echo base_url()."customer_contactsupplier/index/".$row->id."/".$row->buyerid;?>"><button type="button" class="btn btn-info btn-sm">Negotiate</button></a></td>


<?php $count++;?>		  
<?php }?>
 
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

