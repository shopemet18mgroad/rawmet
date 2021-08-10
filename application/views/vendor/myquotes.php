 <head>
 <link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">

 </head>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Quotation Purchase Order</h1>
            
          </div>

          <!-- Content Row -->
          <center>

            <!-- Earnings (Monthly) Card Example -->
			
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
									                <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
    <thead class="bg-primary text-white">
    <th >Sl.No.</th>
			<th>Supplier Id</th>
			<th>Product Name</th>
			<th>Product Id</th>
			<th>Category</th>
			<th style ="color:orange";>Supplier Base Quantity</th>
			<th style ="color:orange";>Supplier Base Price</th>
			<th style ="color:pink";>Buyer Quantity</th>
			<th style ="color:pink";>Buyer Price</th>
			<th style ="color:orange";>Supplier Price</th>
			<th  >Buyer Re-negotiated Quantity</th>
			<th style ="">Buyer Re-negotiated Price</th>
			<th style ="color:orange";>Supplier Re-negotiated Price</th>
			<th>View Purchase Order</th>
			<th>Sort</th>
    </thead>
    <tbody>
	     <?php  $count = 1;?>
       	 <?php foreach($sql_data as $row){?>
      <tr>
	  <?php $proid = str_ireplace('/','-',$row->productid);
				?>
			<td data-label="Sl.No."><?php echo $count;?></td>  
			<td data-label="Supplier Id"><?php echo $row->sellerid;?></td>
			<td data-label="Product Name"><?php echo $row->productname;?></td>
			<td data-label="Product Id"><?php echo $row->productid;?></td>
			<td data-label="Category"><?php echo $row->category;?></td>
			<td data-label="Supplier Base Quantity"><?php echo $row->quantity.""; echo $row->units;?></td>
			<td data-label="Supplier Base Price"><?php echo $row->price."/"; echo $row->punits;?></td>
			<td data-label="Buyer Quantity"><?php echo $row->bquantity.""; echo $row->bunits;?></td>
			<td data-label="Buyer Price"><?php echo $row->bprice."/"; echo $row->bunits;?></td>
			<td style="text-align:center;" data-label="Supplier Price"><?php if($row->selprice == null){echo " - ";}
			else{echo $row->selprice."/"; echo $row->bunits;}?></td>
			<td style="text-align:center;" data-label="Buyer Re-negotiated Quantity"><?php if($row->brenegoquantity == null){echo " - ";}
			else{echo $row->brenegoquantity."/"; echo $row->brenegoquantityunit;}?></td>
			<td style="text-align:center;" data-label="Buyer Re-negotiated Price"><?php if($row->brenegoprice == null){echo " - ";}
			else{echo $row->brenegoprice."/"; echo $row->brenegounit;}?></td>
			
			<td style="text-align:center;" data-label="Supplier Re-negotiated Price"><?php if($row->sellrenegoprice == null){echo " - ";}
			else{echo $row->sellrenegoprice."/"; echo $row->bunits;}?></td>
			
			<td data-label="View Purchase Order"><?php $aucfl = unserialize($row->uploadporder);?>
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


<?php $proid = urldecode( str_ireplace('/','-',$row->productid));?>



<!-- <a href="<?php// echo base_url().'Vendor_myquotes'.$proid."/".$row->sellerid."/".$row->buyerid; ?>" target="_blank" data-target="#logoutModal "  data-toggle="modal" >sort</a>-->
											
														
														<!--separate division for view-->			
	<td data-label="Sort"><a href="<?php echo base_url() .'Vendor_myquotes/'.$proid."/". urldecode($row->sellerid) ; ?>" target="_blank" data-target="#logoutModal-<?php echo $count?>"  data-toggle="modal" ><i class="fa fa-sort"></i></a>											
						
		
	<div class="modal fade" id="logoutModal-<?php echo $count?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
 


 <h6 class="modal-title" id="exampleModalLabel">

<b><u>Details:</u></b></br> <button class="close"  style="float:right" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
<b>Buyerid:</b><?php echo $row->buyerid;?></br>
<b>Buyer Company Name:</b><?php echo $row->bcompanyname;?></br>
<b>Sellerid:</b><?php echo $row->sellerid;?></br>
<b>Product Id:</b><?php echo $row->productid;?></br>
<b>Seller Company Name:</b><?php echo $row->vcompanyname;?>
		  
		  
		 
         
        </div>
		
        <div class="modal-body">
		
		
		
		
		
		
		
		
		
		<table class="table table-sm table-borderless table-secondary">
  <thead>
    <tr>
     
      <td style="color: blue;">Supplier Base Quantity: <?php echo $row->quantity.""; echo $row->units;?><br/>
	  Supplier Base Price:<?php echo $row->price."/"; echo $row->punits;?></td>
    
	
    </tr>
  </thead>
  <tbody>
  </table>
  
  <table class="table table-sm table-borderless table-light">
    <?php if($row->bprice != null && $row->bunits != null){?>
	 <tr>
     
      <td style="float:right; color: orange;">Buyer Quantity: <?php echo $row->bquantity.""; echo $row->bunits;?><br/>
	  Buyer Price:<?php echo $row->bprice."/"; echo $row->bunits;?></td>
	  
	
	
    </tr>
	
	
	
	<?php }?>
	</table>
	
	<table class="table table-sm table-borderless table-secondary">
	<?php if($row->selprice != null && $row->bunits != null){?>
    <tr class="float:right;">
      <td style="color: blue;">Supplier Price: <?php if($row->selprice == null){echo " - ";}
			else{echo $row->selprice."/"; echo $row->bunits;}?></td>
      
    </tr>
		<?php }?>
	</table>
	
	<table class="table table-sm table-borderless table-light">
  
   
	
	<?php if($row->brenegoquantity != null && $row->brenegoquantityunit != null){?>
	 <tr>
     
      <td style="float:right; color: orange;">Buyer Re-negotiated Quantity: <?php if($row->brenegoquantity == null){echo " - ";}
			else{echo $row->brenegoquantity.""; echo $row->brenegoquantityunit;}?><br/>
	  Buyer Re-negotiated Price:<?php if($row->brenegoprice == null){echo " - ";}
			else{echo $row->brenegoprice."/"; echo $row->brenegounit;}?></td>
    
				
				   </tr>
	<?php }?>
 
</table>
	<table class="table table-sm table-borderless table-secondary">
	
	
	<?php if($row->sellrenegoprice != null && $row->sellrenegounits != null){?>
 <tr>

      <td style="color: blue;">Supplier Re-negotiated Price:<?php if($row->sellrenegoprice == null){echo " - ";}
			else{echo $row->sellrenegoprice."/"; echo $row->sellrenegounits;}?></td>
     
    </tr>
	<?php }?>
	
	
	
  </tbody>
</table>
	
	</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>
 </td>									
														
														
	<!---ending of this division-->   

				
 <?php $count++;?>
<?php }?>



      </tr>      
       
	
    </tbody>
  </table>
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
 
  	
  

    
  
  

  
  
  
  
  
  
  
  
  

