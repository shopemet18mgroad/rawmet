
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Requirements</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
			<th>Product Id</th>
			<th>Product Name</th>			 
			<th>Description</th>
			<th>Quantity</th>
			<th>Required Date</th>
			<th>Last Date</th>
			<th>Email</th>		 
			<th>Response</th>			 
      </tr>
    </thead>
       <tbody>
                                 
         <?php
           $strTable = "";
           foreach($sqldata2 as $seller){                                             
           $strTable .= " 
           <tr>
               <td>".$seller->productid."</td>
               <td>".$seller->productname."</td>
               <td>".$seller->description."</td>
               <td>".$seller->seller_qua." ".$seller->units."</td>
               <td>".$seller->requireddate."</td> 
               <td>".$seller->lastdate."</td> 
               <td>".$seller->lastdate."</td> 
               <td> <a  href='javascript:showUserData(\"".$seller->productid."\")'>".$seller->cnt." Res</a></td>     
           </tr>
			";
            }
		 echo $strTable;
         ?>
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
<!-- Logout Modal-->
<div class="modal fade" id="final_Negotiated1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seller Response</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        Seller Response
		<div class="table-responsive">
         <span id="sellerResponse">Please wait...</span>
         </div>
        
        </div>
      
 
        
        
        <script type="text/javascript">

$baseURL = "<?php echo base_url(); ?>";  
function showreneg_productid(productid) {
	$.ajax({
        type:'post',
        url:$baseURL+'Customer_seller_response_renego/index',
        data:'productid='+productid,
        success:function(msg){
            var tempmsg = JSON.parse(msg);                 
            
        }
    });
	
}

     
function showUserData(productid){
    $.ajax({
        type:'post',
        url:$baseURL+'Customer_myrequirements/getUserData',
        data:'productid='+productid,
        success:function(msg){
            var tempmsg = JSON.parse(msg);
            $('#final_Negotiated1').modal('show');
            var tbleData = "<table class='table table-striped table-bordered table-sm w-auto small' id='dataTable' width='100%' cellspacing='0'><tr><td>Seller name</td><td>Product Id</td><td>Product Name</td><td>Seller Price</td><td>Option</td></tr>";
            for(var i=0; i<tempmsg.length; i++){
                $sellerMBueryReqId = tempmsg[i]['id'];								
                tbleData = tbleData+"<tr><td>"+tempmsg[i]['sellerid']+"</td><td>"+tempmsg[i]['productid']+"</td><td>"+tempmsg[i]['productname']+"</td><td>"+tempmsg[i]['sellerprice']+" / "+tempmsg[i]['bsupplyability']+"</td><td><button  onclick='approveProduct(\""+$sellerMBueryReqId+"\");'>Approve</button> || <button  onclick='rejectproduct(\""+$sellerMBueryReqId+"\");'>Reject</button> || <a href='Customer_seller_response_renego/index/"+tempmsg[i]['id']+ "';>Negotiate</a></td></tr>";	
            }			  
            tbleData = tbleData+"</table>";
            $("#sellerResponse").html(tbleData);
        }
    });
}







function approveProduct(id)
{
  alert(id);
  swal({
  title: "Are you sure?",
  content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_myrequirements/setApproveproduct',
                         data:'id='+id,
                         success:function(msg){
                             if(msg){
                                swal("Information updated success.");
                             }else{
                                swal("Information not updated.");
                             }
                             location.reload();
                         }
                     });


  }else {
    swal("Your imaginary file is safe!");
  }  
});


}



function rejectproduct(id)
{
  alert(id);
  swal({
  title: "Are you sure?",
  content: "<input type='text' />",
  text: "hththt",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 .then((willDelete) => {
  if (willDelete) {   
                     $.ajax({
                         type:'post',
                         url:$baseURL+'Customer_myrequirements/setrejectproduct',
                         data:'id='+id,
                         success:function(msg){
                             if(msg){
                                swal("Information updated success.");
                             }else{
                                swal("Information not updated.");
                             }
                             location.reload();
                         }
                     });


  }else {
    swal("Your imaginary file is safe!");
  }  
});


}
 
</script>