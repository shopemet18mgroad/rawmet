<style>
.button {
  &:hover {
    background-color: lighten(green, 5%);
    cursor: pointer;
    cursor: hand;
  }
  width: 100px;
  height: 50px;
  background-color: green;
  color: white;
  text-align:center;
  line-height:50px;
  border-radius: 30px;
}
</style>
<link href="<?php echo base_url()."web_files/";?>css/buyer_responsive.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Buyer</h1>
                      				 <i class="fas fa-arrow-left text-primary"  onclick="goBack()" style="float:right"></i>                           

<script>
function goBack() {
  window.history.back();
}
</script>
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
		<th>Sl.No.</th>
        <th>Buyer Name</th>
		<th>Company Name</th>
        <th>Company Type</th>
        <th>Contact Person</th>
		<th>Location</th>
		<th>City</th>
		<th>Option</th>
      </tr>
    </thead>
    <tbody>
	
            <?php  $count = 1;?>
      
	   <?php foreach($data as $row){?>
      <tr>
	    <td data-label="Sl.No." ><?php echo $count;?></td>
		<td data-label="Buyer Name" ><?php echo $row->bname;?></td> 
		<td data-label="Company Name" ><?php echo $row->bcompanyname;?></td> 
		<td data-label="Company Type" ><?php  echo $row->bcompanytype;?></td>
		<td data-label="Contact Person" ><?php  echo $row->bcontactperson;?></td>
        <td data-label="Location"><?php echo $row->baddress; ?></td>
		<td data-label="City"><?php echo $row->bcity;?></td>
        <td  data-label="Option" style="form-inline";>
	
				<a class="" href="<?php echo base_url()."admin_vendorprofile/index/".$row->buyerid;?>"> <i class="fa fa-edit"></i></a>
				
				<a href="<?php  echo base_url()."admin_managebuyer/reject/".urldecode($row->buyerid);?>"><i class="fa fa-ban" style="font-size:18px;color:red"></i></a>
				
				<?php if($row->subscription == 0 && $row->subscription_amount != NULL){
				
				echo '<button type="button"  class="btn btn-success btn-xl text-white btn-sm mt-1">paid</button>';
				
				
				 }
				else { ?>
						<a href="<?php  echo base_url()."admin_managebuyer/subscribe/".urldecode($row->buyerid);?>"><button type="button"  class="btn btn-danger btn-xl text-white btn-sm mt-1">subscribe</button></a>
					<?php }
				 ?>
				</td>
				
      </tr>  
	  <?php $count++;?>
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
</div>

<script>

var button = document.querySelector('.button');

button.onclick = function () {
 var red = Math.floor(Math.random() * 256);
 var blue = Math.floor(Math.random() * 256);
 var green = Math.floor(Math.random() * 256);

 this.style.backgroundColor = "rgb(" + red + "," + green + "," + blue + ")";
};
</script>