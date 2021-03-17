echo '<td><a href="'.base_url().'admin_forthcomingauc_2/forthcomingauc_2/'.($dat['sname']).'/'.$passaucid2.
				'">';


$data2 .='<b>Description:</b><div>'.$dat['description'].'</div></p>';	







<?php
echo '<form class="user" action="'. base_url().'Customer_add_contactsupplier/index/'.($dat['bname']).'" method="POST" enctype="multipart/form-data">';
echo '';
echo '';
echo '<input type="hidden" class="form-control" id="productname" name="productname"  value="'.$dat['productname'].'">';
echo '';
echo '<input type="hidden" class="form-control" id="description" name="description"  value="'.  $dat['description'].'">';
echo '';
echo '<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo  $sqldata[0]->productid;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata[0]->id;?>">';
echo '<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sessi;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo  $sqldata[0]->category;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo  $sqldata[0]->companyname;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo  $sqldata[0]->price;?>">';
echo '<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo  $sqldata[0]->punits;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo  $sqldata[0]->quantity;?>">';
echo '<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo  $sqldata[0]->units;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="supplyability" name="supplyability"  value="<?php echo  $sqldata[0]->supplyability;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo  $sqldata[0]->pstates;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">';
echo '';
echo '<input type="hidden" class="form-control" id="supplyunits" name="supplyunits"  value="<?php echo  $sqldata[0]->supplyunits;?>">';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '</form>';
?>
				
				
			

        