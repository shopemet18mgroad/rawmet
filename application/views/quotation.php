
<!--<!DOCTYPE html>-->
<html>
 

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
<!--
<center><img class="img-fluid" src="<?php //echo base_url()."web_files/img/";?>img/Rawmet.png"   alt="" width="20%;"></center>-->

<center><h2 style="color:orange;">RAWMET24</h2></center>

<table style="padding-left:70% ">
  <tr>
    <th>Seller ID</th>
    <td><?php echo $sqldata1[0]->buyerid; ?></td> 
    
  </tr>
 <tr>
    <th>Buyer ID</th>
    <td><?php echo $sqldata1[0]->sellerid; ?></td> 
    
  </tr>
  <tr>
    <th style="text-align:left;">DATE</th>
    <td><?php echo date('Y-m-d'); ?></td> 
    
  </tr>
  <tr>
    
    <th>Quote No</th>
    <td>50</td>
  </tr>
  
</table>
<!--
<p><b>ADDRESS:<br/>
<p><b> From:<br/><?php// echo $sqldata3[0]->buyerid.""."<br>"?></b><br></p>

<p><b>  To:<br/><?php //echo $sqldata2[0]->sellerid.""."<br>"?></b><br></p>
-->
<p><b>Quotation Prepared By:</b>&nbsp;Shopemet Network Private Limited</p>



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
	<td><?php echo $sqldata1[0]->bquantity."/"; echo $sqldata1[0]->bunits;?></td>
    <td><?php echo $a = $sqldata1[0]->selprice*$sqldata1[0]->bquantity;?></td>
  </tr>
  
</table>

<div style="position: relative;">
        <div style="width: 50%;">
            <p> <b> TERMS AND CONDITIONS</b></p>
            <p>1.Customers will be billed after indicating acceptance of this quote. </p>
            <p>2.Payment will be due prior to delivery of service ang goods.</p>
            <p> <b>To accept the quotation ,Please sign here and return:____</b></p>
        </div>
        <div class="table-border" style="width:50%;position:absolute;right:0;top:0">
            <table id="custom mt-5" style="width: 100%">
                <tr>
                    <th>SUB TOTAL</th>
                    <td><?php echo $a = $sqldata1[0]->selprice*$sqldata1[0]->bquantity;?></td>

                </tr>
                <tr>

                    <th>INTERNET HANDLING CHARGES</th>
                    <td><?php echo $b = 6.47;?></td>
                </tr>
                <tr>

                    <th>GST 18% </th>
                    <td><?php echo $tot_price =  ($a * 0.18);?></td>
                </tr>
               
                <tr>
<?php $total = $a +$b + $tot_price;?>
                    <th>GRAND TOTAL</th>
                    <td><?php echo $total ?></td>
                </tr>

            </table>
        </div>
    </div>
<br>
<br>	
	<div>
		<center>
			<p> If you have any questions about this quotation please contact</p>
			<p>jhon doe,phone No. :123456789</p>
			<p><b> THANK YOU FOR YOUR BUSINESS!</b></p>
		</center>
	</div>
   
</body>
</html>
