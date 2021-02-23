
 <main class="main-section">
        <img src="<?php echo base_url()."web_files/";?>img/rawmet logo.png">
        <form class="form-custom" autocomplete="off" class="form-control" method="POST"  action="<?php echo base_url()."home/search";?>">
		
		
            <div class="form-group input1">
                <input type="text" class="form-control" name="productname" id="productname" onkeyup="search_product()" placeholder="Enter your raw material">
		  
				<div id="select" class="select"> <ul  id="dp"></ul></div>	  
            </div>
				
			

			
			
            <div class="form-group input2">
                <select class="form-control rounded-0" name="category" id="category">
                <option value="Primary">Primary</option>
				<option value="Seconadry">Secondary</option>
				<option value="Scrap">Scrap</option>
                </select>
            </div>
           


			<div class=""  class="form-control">
			  
			<!--Make sure the form has the autocomplete function switched off:-->

						 <div class="autocomplete" style="width:200px;">
						   <input id="myInput" type="text" name="myCountry" placeholder="&#xf041 All India" value="India" class="form-control">
					
						</div>
			  </div>
			  
				
			
			
				<div class="form-group input4">
					   <a href="<?php echo base_url();?>home_contactsupplier">
						  <button type="submit" value="search" class="btn searchbtn input4"><i class="fa fa-search pr-1"></i>Search</button>
						 
						</a>
				</div>
				
			
</form>

<div class="links mt2">
               <a href="http://rawmet24.in/procurementtenders2.php">Live Procurement</a>
				<a href="<?php echo base_url();?>#Upcoming Procurement">Tenders</a>			
				<a href="https://www.aucjunction.com/">Upcoming Disposals</a>
				<a href="<?php echo base_url();?>home_feedback">feedback</a>
				
        </div>

	

		
        

	<!--<div class="ajaxrslt mt-5" style="width:100%; height:300px;overflow-y:scroll;" id="ajaxrslt_search">-->
	
    
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		</div>

    </main>
		
   <script>
 function search_product(){
	 $("#dp").hide();
 if(document.getElementById("productname").value.length =1){
	 $("#dp").show();
			var contents = $('#productname').val(); 
			$.get('<?php echo base_url() .'home_contactsupplier/get_product_table/'; ?>'+contents, function(data){
				$('#dp').html(data);
			});

					
 }else{
	 return;
 }
}
</script> 
 <script>
 function getPaging(v){
var s = v.split("|");
	document.getElementById("productname").value  = s[0];
	//document.getElementById("vname").value = s[1];
	 $("#dp").hide();
 }
function getPagingnr(){
	$("#dp").hide();
}
 </script>        
  
       
	   
	
