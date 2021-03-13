
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pending Quotes</h1>
            
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

			   	<th>Supplier Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			
			  <th style ="color:orange";>Supplier Base Quantity</th>
			<th style ="color:orange";>Supplier Base Price</th>
			
		    <th style ="color:pink";>Buyer Quantity</th>
			<th style ="color:pink";>Buyer Price</th>
			
			<th style ="color:orange";>Supplier Price</th>
			
			<th style ="color:pink";>Buyer Re-negotiated Quantity</th>
			<th style ="color:pink";>Buyer Re-negotiated Price</th>
			<th style ="color:orange";>Supplier Re-negotiated Price</th>
			<th>View Purchase Order</th>
      </tr>
    </thead>
    <tbody>
	      <?php  $count = 1;?>
       	 <?php foreach($sqldata as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
		 <td><?php echo $count;?></td>  
		 <td><?php echo $row->id;?></td>
			<td><?php echo $row->sellerid;?></td>
			<td><?php echo $row->productname;?></td>
			<td><?php echo $row->productid;?></td>
			<td><?php echo $row->category;?></td>
			
			
		    <td><?php echo $row->quantity.""; echo $row->units;?></td>
			<td><?php echo $row->price."/"; echo $row->punits;?></td>
			
			<td><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td><?php echo $row->bprice."/"; echo $row->bunits;?></td>
			
		
			<td style="text-align:center;"><?php if($row->selprice == null){echo " - ";}
			else{echo $row->selprice."/"; echo $row->sunits;}?></td>
			<td style="text-align:center;"><?php if($row->brenegoquantity == null){echo " - ";}
			else{echo $row->brenegoquantity."/"; echo $row->brenegoquantityunit;}?></td>
			
				<td style="text-align:center;"><?php if($row->brenegoprice == null){echo " - ";}
			else{echo $row->brenegoprice."/"; echo $row->brenegounit;}?></td>
			
				<td style="text-align:center;"><?php if($row->sellrenegoprice == null){echo " - ";}
			else{echo $row->sellrenegoprice."/"; echo $row->sellrenegounits;}?></td>
			
  <td>
      <?php $aucfl = unserialize($row->uploadporder);?>
    <?php if(isset($aucfl[0])){	?>
    <a href="<?php echo base_url().'web_files/uploads/'. $aucfl[0];?>" target="_blank">
    <?php echo '<i class="fa fa-download"></i>' ; ?>

	 <?php }?>	
</a>
</td>	



<!--<td>


   <a class="dropdown-item" href="<?php echo base_url(); ?>#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>


</td>-->

<td> <a href="<?php echo base_url().$row->id."/". $row->sellerid ; ?>" target="_blank" data-target="#logoutModal"  data-toggle="modal" >sort</a>
														</td>
														
														
														
														
														
														
														
														
														
														
	   

				
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
 
  	
  
  
  
  
  
  
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
 


 <h5 class="modal-title" id="exampleModalLabel">

<u>Details:</u><br>
Buyerid:<?php echo $sql_sort[0]->buyerid;?></br>
Buyer Company Name:<?php echo $sql_sort[0]->bcompanyname;?><br/>
Sellerid:<?php echo $sql_sort[0]->sellerid;?></br>
Seller Company Name:<?php echo $sql_sort[0]->vcompanyname;?>
		  
		  
		  </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
        <div class="modal-body">
		
		
		
		
		
		
		
		
		
		<table class="table table-sm table-borderless table-secondary">
  <thead>
    <tr>
     
      <td style="color: blue;">Supplier Base Quantity: <?php echo $sql_sort[0]->quantity.""; echo $sql_sort[0]->units;?><br/>
	  Supplier Base Price:<?php echo $sql_sort[0]->price."/"; echo $sql_sort[0]->punits;?></td>
    
	
    </tr>
  </thead>
  <tbody>
  </table>
  <table class="table table-sm table-borderless table-light">
    
	 <tr>
     
      <td style="float:right; color: orange;">Buyer Quantity: <?php echo $sql_sort[0]->bquantity.""; echo $sql_sort[0]->bunits;?><br/>
	  Buyer Price:<?php echo $sql_sort[0]->bprice."/"; echo $sql_sort[0]->bunits;?></td>
    
	
    </tr>
	
	</table>
	<table class="table table-sm table-borderless table-secondary">
    <tr class="float:right;">
      <td style="color: blue;">Supplier Price: <?php if($sql_sort[0]->selprice == null){echo " - ";}
			else{echo $sql_sort[0]->selprice."/"; echo $sql_sort[0]->sunits;}?></td>
      
    </tr>
	</table>
	
	<table class="table table-sm table-borderless table-light">
  
    <tr>
     
      <td style="float:right; color: orange;">Buyer Re-negotiated Quantity: <?php if($sql_sort[0]->brenegoquantity == null){echo " - ";}
			else{echo $sql_sort[0]->brenegoquantity.""; echo $sql_sort[0]->brenegoquantityunit;}?><br/>
	  Buyer Re-negotiated Price:<?php if($sql_sort[0]->brenegoprice == null){echo " - ";}
			else{echo $sql_sort[0]->brenegoprice."/"; echo $sql_sort[0]->brenegounit;}?></td>
    
	
    </tr>
</table>
	<table class="table table-sm table-borderless table-secondary">
 <tr>

      <td style="color: blue;">Supplier Re-negotiated Price:<?php if($sql_sort[0]->sellrenegoprice == null){echo " - ";}
			else{echo $sql_sort[0]->sellrenegoprice."/"; echo $sql_sort[0]->sellrenegounits;}?></td>
     
    </tr>
	
	
	
  </tbody>
</table>
	
	</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>
  
  

  
  
  
  
  
  
  
  
  

