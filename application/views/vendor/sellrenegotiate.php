<form class="user" action="<?php echo base_url();?>vendor_add_renegotiate" method="POST" enctype="multipart/form-data">
			
				
				
<input type="hidden" class="form-control" id="productname" name="productname"  value="<?php echo $sqldata[0]->productname;?>">
<input type="hidden" class="form-control" id="description" name="description"  value="<?php echo  $sqldata[0]->description;?>">
<input type="hidden" class="form-control" id="id" name="id"  value="<?php echo  $sqldata[0]->id;?>">
<input type="hidden" class="form-control" id="sellerid" name="sellerid"  value="<?php echo $sqldata[0]->sellerid;?>">
<input type="hidden" class="form-control" id="category" name="category"  value="<?php echo $sqldata[0]->category;?>">
<input type="hidden" class="form-control" id="productid" name="productid"  value="<?php echo $sqldata[0]->productid;?>">
<input type="hidden" class="form-control" id="companyname" name="companyname"  value="<?php echo $sqldata[0]->companyname;?>">
<input type="hidden" class="form-control" id="price" name="price"  value="<?php echo $sqldata[0]->price;?>">
<input type="hidden" class="form-control" id="punits" name="punits"  value="<?php echo $sqldata[0]->punits;?>">
<input type="hidden" class="form-control" id="quantity" name="quantity"  value="<?php echo $sqldata[0]->quantity;?>">
<input type="hidden" class="form-control" id="units" name="units"  value="<?php echo $sqldata[0]->units;?>">
<input type="hidden" class="form-control" id="pcities" name="pcities"  value="<?php echo $sqldata[0]->pcities;?>">
<input type="hidden" class="form-control" id="pstates" name="pstates"  value="<?php echo $sqldata[0]->pstates;?>">
<input type="hidden" class="form-control" id="datetime" name="datetime"  value="<?php echo  $sqldata[0]->datetime;?>">
<input type="hidden" class="form-control" id="estdeltime" name="estdeltime"  value="<?php echo  $sqldata[0]->estdeltime;?>">
							
<input type="hidden" class="form-control" id="buyerid" name="buyerid"  value="<?php echo $sqldata[0]->buyerid;?>">
					
<input type="hidden" class="form-control" id="bquantity" name="bquantity"  value="<?php echo $sqldata2[0]->bquantity;?>">
<input type="hidden" class="form-control" id="bsupplyability" name="bsupplyability"  value="<?php echo $sqldata2[0]->bsupplyability;?>">
<input type="hidden" class="form-control" id="bprice" name="bprice"  value="<?php echo $sqldata2[0]->bprice;?>">
<input type="hidden" class="form-control" id="bunits" name="bunits"  value="<?php echo $sqldata2[0]->bunits;?>">
<input type="hidden" class="form-control" id="selprice" name="selprice"  value="<?php echo $sqldata3[0]->selprice;?>">
<input type="hidden" class="form-control" id="sunits" name="sunits"  value="<?php echo $sqldata3[0]->sunits;?>">
							
<input type="hidden" class="form-control" id="productvalidityto" name="productvalidityto"  value="<?php echo  $sqldata[0]->productvalidityto;?>">
<input type="hidden" class="form-control" id="brenegoquantity" name="brenegoquantity"  value="<?php echo $sqldata4[0]->brenegoquantity;?>">
<input type="hidden" class="form-control" id="brenegoquantityunit" name="brenegoquantityunit"  value="<?php echo $sqldata4[0]->brenegoquantityunit;?>">
							
<input type="hidden" class="form-control" id="brenegoprice" name="brenegoprice"  value="<?php echo $sqldata4[0]->brenegoprice;?>">
<input type="hidden" class="form-control" id="brenegounit" name="brenegounit"  value="<?php echo $sqldata4[0]->brenegounit;?>">
							
             <div class="form-row mt-2">
              <label class="col-sm-6 col-form-label"  for="name"><b>Your Price </b></label>
                <input type="text" class="form-control col-sm-2 mr-2" name="sellrenegoprice" placeholder="price" id="sellrenegoprice" [(ngModel)]="person.name"/>/
                   <div class="col-sm-3">  
						<select class="form-control col-sm-0" id="sellrenegounits" name="sellrenegounits">
						          <option value="KG">KG</option>
								<option value="Metric Ton">Metric Ton</option>
								<option value="Litre">Litre</option>
								<option value="lot">lot</option>
								<option value="Number">Number</option>
								<option value="Meter">Meter</option>
					
				            </select>
					
						
					
					             </div>
			</div>
<button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2" name="submit" id= "submit" role="submit"  onclick= "return validate_selnego()">Submit</a>
<button type="submit" href="<?php echo base_url();?>"class="btn btn-info btn-sm mt-2 offset-sm-2" name="submit" id= "submit" role="submit">Cancel</a>
						
						

							
							      
							
				
					
					
				  	
						
						
							  
         
						
                </form>	

				
				
			

	  
	 

   