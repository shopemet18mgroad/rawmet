  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Commission To Rawmet</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
		  <div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
	  	<th>Supplier Name</th>
	  <th>Product Id</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Commission to Rawmet</th>
		
	    
	
		
		<th>Image</th>
	
		<th>Action</th>

		
		
      </tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
				<td><?php echo $row->vname;?></td>
	  <td><?php echo $row->productid;?></td> 
		<td><?php echo $row->productname;?></td> 
		<td><?php  echo $row->category;?></td>
         <td><?php echo $row->payable?></td>
		
		
		

		<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="100%" height="55px">
	

		<td><a href="<?php  echo base_url()."admin_purchaseoder/approve_paid/".$proid."/".urldecode($row->vname);?>"><button type="button" class="btn btn-primary">Paid</button></a></td>


        
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
</div>