<script src="<?php echo base_url()."web_files/";?>js/jquery.min.js"></script> 
<script src="<?php echo base_url()."web_files/";?>js/popper.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/jquery.easy-ticker.js"></script> 
 <script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>
 
 
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var countries =["Karnataka","Andaman and Nicobar Islands",
					"Arunachal Pradesh","Assam","Bihar","Chandigarh","Chhattisgarh"
					 ,"Dadar and Nagar Haveli","Daman and Diu","Delhi","Lakshadweep","Puducherry","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand"
					,"Andhra Pradesh","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland"," Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttarakhand","West Bengal","Mumbai","Dehli","Bangalore","Hyderabad","Chennai","Kolkata","Surat","Pune","Jaipur","Lucknow","Kanpur","Nagpur","Indore","Thane","Bhopal","Visakhapatnam","Patna","Vadodara","Ghaziabad","Ludhiana","Agra","Nashik","Faridabad","Meerut","Kalyan","Vasai Virar","Varanasi","Srinagar","Aurangabad","Dhanbad","Amritsar","Navi Mumbai","Allahabad","Ranchi","Haora","Coimbatore","Jabalpur","Gwalior","Vijayawada","Jodhpur","Madurai","Raipur","Kota","Guwahati","Chandigarh","Solapur","Hubli","Dharward","Bareilly","Moradabad","Mysore","Gurgaon","Aligarh","Jalandhar","Tiruchirappalli","Bhubaneswar","Salem","Mira","Thiruvananthapuram","Bhiwandi","Saharanpur","Gorakhpur","Guntur","Amritsar","Bikaner","Noida","Amravati","Jamshedpur","Bhilai Nagar","Warangal","Cuttack","Orissa","Kochi","Bhavnagar","Dehradun","Durgapur","Asansol","Nanded","Waghala","Kolapur","Ajmer","Gulbarga","Jamnagar","Ujjain","Loni","Siligri","Jhansi","Ulhasnagar","Nellore","Jammu","Sangli Miraj","Kupwad","Belgaum","Mangalore","Ambattur","Tirunelveli","Malegoan","Gaya","Udaipur","Maheshtala","Jalgaon"];
	

/*An array containing all the country names in the world:*/

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

  <script>
		$('#productname').on('keyup', function(){
			var contents = $('#productname').val(); 
			$.get('<?php echo base_url() .'home_contactsupplier/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_search').html(data);
			});
		});
	
 </script>


<div class="modal fade" id="new_userlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">finel?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
     
<form action="<?php echo base_url();?>price_postproduct_update" method="POST" enctype="multipart/form-data">	 
     
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2"  name="btnsubmit_final" id= "btnsubmit_final" role="submit"  onclick= "return validate_selnego()">Final-Negotiated</a></button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
