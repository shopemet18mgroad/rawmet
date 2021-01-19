  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Approved Requirements</h1>
           
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
	  <th>Supplier name</th>
	  
        <th>companyname</th>
	   <th>Category</th>
		<th>productname</th>
		<th>product Id</th>
        <th>Description</th>
		
		<th>Stock</th>
	    <th>Units</th>
		<th>Price</th>
		<th>Seller Price</th>
	
      </tr>
    </thead>
    <tbody>
	
      
      
	   <?php foreach($sqldata as $row){?>
      <tr>
	  
	 <?php $proid = str_ireplace('/','-',$row->productid);
				?>
	  <td><?php echo $row->vusername;?></td> 
		<td><?php echo $row->bcompanyname;?></td> 
		<td><?php  echo $row->category;?></td>
		 <td><?php echo $row->productname?></td>
		  <td><?php echo $row->productid?></td>
         <td><?php echo $row->description?></td>
		<td><?php echo $row->quantity;?></td>
		<td><?php echo $row->units;?></td>
	<td><?php echo $row->price."/";echo $row->priceperkg;?></td>
	<td><?php echo $row->sellerprice."/";echo $row->bsupplyability;?></td>
<div class="thumbnail">
					<td><?php $img = unserialize( $sqldata[0]->uploadimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="100%"></td>
				<input type="hidden" class="form-control" id="uploadimage" name="uploadimage" value="<?php echo $img[0];?>">
				
					
					</div>	
		

		
        
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