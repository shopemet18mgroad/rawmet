  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Product List</h1>
           
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
	  <th>Sl.no.</th>
	  <th>Product Id</th>
        <th>Product Name</th>
        <th>Category</th>
      <th>Image</th>
	  

		<th>Status</th>
		 <th>Update the Quantity and Price</th>
		<th>options</th>
	</tr>
    </thead>
    <tbody>
	
      

      <?php  $count = 1;?>
	  

	   <?php foreach($sqldata as $row){?>
      <tr>
	 
	 <?php $proid =urldecode( str_ireplace('/','-',$row->productid));
				?>
	<td><?php echo $count;?></td> 
	  <td><?php echo $row->productid;?></td> 
		<td><?php echo $row->productname;?></td> 
		<td><?php  echo $row->category;?></td>
        
	
	
		

		<td><?php $img = unserialize($row->uploadproductimage)?>
				<img class="img" src="<?php echo base_url()."web_files/uploads/".$img[0];?>" alt="Chania" width="200px" height="55px"></td>
	

		<td style="color:green;"><b><?php  if($row->poptions == 0) {echo 'Pending';}else if($row->poptions == 2) {echo 'Rejected';}else if($row->poptions == 1) {echo 'Approved';}?></b></td>


<td> <a href="<?php echo base_url() .'Vendor_uploadedproduct/price_update/'.$proid."/". urldecode($row->sellerid) ; ?>" target="_blank" data-target="#new_userlogin-<?php echo $count; ?>"  data-toggle="modal" >update</a>
														</td>



		

		<td style="display:inline-flex;">
		
		
		<a style="margin:2px" class="btn btn-warning btn-sm text-white" href="<?php echo base_url()."vendor_uploadedview/index/".$proid;?>"><i class="fa fa-eye"></i></a>
		
	
			<a style="margin:2px" class="btn btn-danger btn-sm text-white" href="<?php echo base_url()."vendor_uploadedproduct/delete_seller/".$proid;?>"><i class="fa fa-trash"></i></a></td>

			<div class="modal fade" id="new_userlogin-<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update New Price,Quantity and Live stock</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		<form action="<?php echo base_url();?>Vendor_uploadedproduct/price_update/" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
        
		
			  	<div class="col-sm-8">
		
			<label for="Pname"> Product Id:</label>
				<input type="text" class="form-control" id="productid" name="productid"  
					value="<?php echo $row->productid;?>" placeholder="" readonly>
					<input type="hidden" class="form-control" id="productid" name="productid"  
					value="<?php echo $row->productid;?>" placeholder="">
       </div>
	   
	   
	   
	   
	   
	   	 <div class="form-inline">
				<div class="col-sm-4  mr-3">
				<label for="price">Live Stock:</label>
					 <input type="text" class="form-control" id="supplyability" name="supplyability"  placeholder="" value="<?php echo $row->supplyability;?>">
                    
                </div>
				<div class="col-sm-4  offset-sm-3">	
				
			   	<select class="form-control col-sm-0" id="supplyunits" name="supplyunits" value="<?php echo $row->supplyunits;?>" >
						<option  value="KG">KG</option>
						<option value="Metric ton">Metric ton</option>
						<option value="Litre">Litre</option>
						<option value="lot">lot</option>
						<option value="litre">litre</option>
						<option value="Number">Number</option>
						<option value="Meter">Meter</option>
				    </select>
			</div>
	</div>
	
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
				

		
 
	
	 <div class="form-inline">
				<div class="col-sm-4  mr-3">
					 <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="0" value="<?php echo $row->price;?>">
                    
                </div>
				<div class="col-sm-4  offset-sm-3">	
				
			   	<label for="quantity">Units:</label>/
			   	<select class="form-control col-sm-0" id="punits" name="punits" value="<?php echo $row->punits;?>" >
						<option  value="KG">KG</option>
						<option value="Metric ton">Metric ton</option>
						<option value="Litre">Litre</option>
						<option value="lot">lot</option>
						<option value="litre">litre</option>
						<option value="Number">Number</option>
						<option value="Meter">Meter</option>
				    </select>
			</div>
	</div>
	
	
	
	
	
	
 <div class="form-inline">
				<div class="col-sm-4  mr-3">
					<label for="quantity">Supply Ability:</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder value="<?php echo $row->quantity;?>" >
                    
                </div>
				<div class="col-sm-4  offset-sm-3">	
				<label for="quantity">Units:</label>
			   	<select class="form-control col-sm-0" id="units" name="units" value="<?php echo $row->units;?>" >
						<option  value="KG">KG</option>
						<option value="Metric ton">Metric ton</option>
						<option value="Litre">Litre</option>
						<option value="lot">lot</option>
						<option value="litre">litre</option>
						<option value="Number">Number</option>
						<option value="Meter">Meter</option>
				    </select>
			</div>
	</div>
	<br>
	
	
	<div class="modal-footer">
        <button type="submit" name "update" class="btn btn-success">Submit</button>
		  </div>
	
	

 
	</form>        
        </div>
        </div>



        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  </div>
        </div>
      </div>
    </div>

 
				
				
				
				
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

</div>


