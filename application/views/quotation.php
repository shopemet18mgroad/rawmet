
<!DOCTYPE html>
<html>
<head>
 
<link href="<?php echo base_url()."web_files/uploads";?> rel="stylesheet">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width:100%;
}

#customers td, #customers th {
  border: 1px solid black;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

#custom {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 37.5%;
}

#custom td, #customers th {
  border: 1px solid black;
  padding: 8px;
}

#custom tr:nth-child(even){background-color: #f2f2f2;}

#custom tr:hover {background-color: #ddd;}

#custom th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: right;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: right;
}
table-border


</style>
</head>
<body>

<p><center><img src="<?php echo base_url()."web_files/";?>img/Rawmet.png"  class="img-fluid" alt="" width="20%;"></center></p>
<table style="float:left; padding:2px">
  <tr>
    <th>DATE</th>
    <td>Lastname</td> 
    
  </tr>
  <tr>
    
    <th>Quote No</th>
    <td>50</td>
  </tr>
  
  
</table> </div>
<p><b> TO:<br/><?php echo  $sqldata3[0]->baddress.""."<br>".$sqldata3[0]->bcity.""."<br>".  $sqldata3[0]->bselectstate.""."<br>". $sqldata3[0]->bpincode;?></b><br></p>

<p><b> TO:<br/><?php echo  $sqldata2[0]->vaddress.""."<br>".  $sqldata2[0]->vcity.""."<br>".  $sqldata2[0]->vselectstate.""."<br>". $sqldata2[0]->vpincode;?></b><br></p>

<p><b>Quotation Prepared By:</b>Shopemet Network Private Limited</p>



<table  class="table-border" id="customers">
  <tr>
    <th>ITEMS</th>
    <th>SPECIFICATION</th> 
    
	<th>QUANTITY</th>
	<th>UNIT PRICE</th>
	<th>AMOUNT</th>
  </tr>
 
  <tr>
    <td><?php echo  $sqldata1[0]->productname;?></td>
    <td><?php echo  $sqldata1[0]->description;?></td>
    
	<td><?php echo $sqldata1[0]->selprice.""; echo $sqldata1[0]->sunits;?></td>
	<td><?php echo$sqldata1[0]->selqan."/"; echo $sqldata1[0]->selunits;?></td>
    <td>3000</td>
  </tr>
  
</table>
<div>
<table  id="custom" style="float:right;">
  <tr>
    <th>SUB TOTAL</th>
    <td>3000</td> 
    
  </tr>
  <tr>
    
    <th>INTERNET HANDLING CHARGES(%)</th>
    <td>21234</td>
  </tr>
  <tr>
    
    <th>CGST 9% </th>
    <td>1234567</td>
  </tr>
  <tr>
    
    <th>SGST 9%</th>
    <td>1234</td>
  </tr>
   <tr>
    
    <th>GRAND TOTAL</th>
    <td>9412455</td>
  </tr>
  
</table>
</div>





<div>
  <p> <b> TERMS AND CONDITIONS</b></p>
<p>1.Customers will be billed after indicating acceptance of this quote. </p> 
<p>2.Payment will be due prior to delivery of service ang goods.</p> 
<p> <b>To accept the quotation ,Please sign here and return:________________________</b></p> <center><p> If you have any questions about this quotation please contact</p>
<p>jhon doe,phn :123456789</p>
<p><b> THANK YOU FOR YOUR BUSINESS!</b></p></center>
</div>
 


</body>
</html>
