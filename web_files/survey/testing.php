<?php
		include "header.php";
		
		?>
<?php
					echo "<div class=\"container dealsbox\">\n";
					echo "			 <div class=\"row\">\n";
					echo "				<div class=\"col-md-12\">\n";
					echo "						<div class=\"deals-header\">\n";
					echo "							<h4><i class=\"icon-dashboard\"></i><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>&nbsp; Dashboard</h4>\n";
					echo "						</div>\n";
					echo "				</div>\n";
					echo "			 </div>	\n";
					echo "			 <div class=\"row\">\n";
					echo "				\n";
					echo "				<div class=\"col-md-12\">\n";
					echo "					<div class=\"deals-tab-table\">\n";
					echo "							<ul class=\"nav nav-tabs border-0\" id=\"myTab\" role=\"tablist\">\n";
					echo "							\n";
					echo "								<li class=\"nav-item\">\n";
					echo "									<a class=\"nav-link active border border-primary border-bottom-0\" id=\"hvd-tab\" data-toggle=\"tab\" href=\"#hvd\" role=\"tab\" aria-controls=\"hvd\" aria-selected=\"true\"><b>E-Auctions/Bidder Survey Form</b></a>\n";
					echo "								</li>\n";
					echo "								\n";
					echo "								\n";
					echo "							</ul>\n";
					echo "\n";
					echo "							<div class=\"tab-content w-100\">\n";
					echo "								<div class=\"tab-pane h-100 p-3 fade show active border border-primary\" id=\"hvd\" role=\"tabpanel\" aria-labelledby=\"hvd-tab\">\n";
					echo "									<div class=\"table-holder\"> \n";
					echo "										<div class=\"tab-content\">\n";
					echo "											<table class=\"table table-bordered table-sm text-center\">\n";
					echo "												<thead class=\"thead-auc\">\n";
					echo "												\n";
					echo "												\n";
					echo "												</thead>\n";
					echo "												<tbody>\n";
					echo "									\n";
					echo "												<tr><td colspan=\"10\" style=\"background-color:#b2bdc3;\"><strong>Bidder Survey Form</strong></td></tr>\n";
					echo "												<form action=\"../weblib/postformsurvey.php\" method=\"POST\" id=\"bidder\">\n";
					echo "												<input class=\"inpt\" type=\"hidden\" id=\"type\" name=\"type\" value=\"Bidder\" size=\"10\">\n";
					echo "												<tr class=\"cinpt w-100\">\n";
					echo "												<td colspan=\"10\">\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p><strong>Namaste,</strong></p>\n";
					echo "											\n";
					echo "												<p>I am <input class=\"inpt\" type=\"text\" id=\"heading\" name=\"heading\" size=\"10\"> from <a href=\"“www.aucjunction.com”\">www.aucjunction.com</a>, we are coming up with a new E- auction website to dispose\n";
					echo "												of Industrial Scrap/waste<br>(Bi-Product), through which you can get more bidders from Pan India.</p>\n";
					echo "												<p><small>So in this regard can you please spare few minutes of your’s valuable time 3-5mins to understand and cater to your needs in a better way.</small></p>\n";
					echo "												<p><b>Note:</b> All the information provided by you will be used only for office purposes R&D, We assure you\n";
					echo "												confidentially at all levels, and<br> will never be shared outside Shopemet Networks Pvt Ltd.</p>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt w-100\">\n";
					echo "												<td colspan=\"10\">\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Name of the Company/Firm: \n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"company\" name=\"company\" size=\"80\"></p>\n";
					echo "												<p>Corporate Office Address:\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"address\" name=\"address\" size=\"83\"></p>\n";
					echo "												<p>Website/Telephone/Mobile/Email ID:\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"companywebsite\" name=\"companywebsite\" size=\"75\" placeholder=\"Website\">\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"companytelephone\" name=\"companytelephone\" size=\"75\" placeholder=\"Telephone\">\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"companymobile\" name=\"companymobile\" size=\"75\" placeholder=\"Mobile\">\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"companyemail\" name=\"companyemail\" size=\"75\" placeholder=\"Email ID\">\n";
					echo "													</p>\n";
					echo "												<p>Contact person’s Name/Designation/Number/Email:\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"concernperson\" name=\"concernperson\" size=\"62\" placeholder=\"Contact Person's Name\">\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"concernpersondesignation\" name=\"concernpersondesignation\" size=\"62\" placeholder=\"Designation\">\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"concernpersonnumber\" name=\"concernpersonnumber\" size=\"62\" placeholder=\"concernpersonnumber\">\n";
					echo "													<input class=\"inpt w-100\" type=\"text\" id=\"concernpersonemail\" name=\"concernpersonemail\" size=\"62\" placeholder=\"Email ID\">\n";
					echo "													</p>\n";
					echo "													</div>\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p><b>Current Status:</b><br></p>\n";
					echo "												<div class=\"form-check form-check-inline \">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\" name=\"companystatus\" value=\"Proprietorship\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"proprietor\">Proprietorship</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"companystatus\" value=\"Partnership\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"partnership\">Partnership</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"companystatus\" value=\"Corporation\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"corporation\">Corporation</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\" name=\"companystatus\" value=\"Pvt Ltd\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"pvt ltd\">Pvt Ltd</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"companystatus\" value=\"Public sector\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"publicsector\">Public sector</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"companystatus\" value=\"Small business\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"smallbusi\">Small business</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"companystatus\" value=\"limited\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"limited\">Limited</label>\n";
					echo "												</div>\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p><b>Type of Business:</b><br></p>\n";
					echo "												<div class=\"form-check form-check-inline \">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"tboptions\" value=\"Manufacture\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"manuf\">Manufacture</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"tboptions\" value=\"Distributer\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"distributer\">Distributer</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"tboptions\" value=\"Trader\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"trader\">Trader</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"tboptions\" value=\"Importer\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"importer\">Importer</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"tboptions\" value=\"Secondary Manufacturer\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"secondmenuf\">Secondary Manufacturer</label>\n";
					echo "												</div>\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Is your company PCB certified,\n";
					echo "												<input class=\"inpt\" type=\"text\" id=\"pcba\" name=\"pcba\" size=\"10\">\n";
					echo "												do you participate in online auctions\n";
					echo "												<input class=\"inpt\" type=\"text\" id=\"pcbb\" name=\"pcbb\" size=\"10\">\n";
					echo "												, is it in\n";
					echo "												Tons, KGs, Lots,<br>Quantity/numbers, Meters or depends on the product which is been disposed?\n";
					echo "												<textarea class=\"inpt w-100\" type=\"text\" id=\"pcbc\" name=\"pcbc\" size=\"40\"></textarea>\n";
					echo "												</p></div>\n";
					echo "												\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>If you were to participate in an online auction what are the products would you likely to bid(Sell or Buy)\n";
					echo "												on?</p>\n";
					echo "												<div class=\"form-check form-check-inline \">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"partaucasopt\" value=\"Electronics Products(eg.E-Waste)\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"electronicproduct\">Electronics Products(eg.E-Waste)</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"partaucasopt\" value=\"Metals(e.g Iron/Steel)\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"metal\">Metals(e.g Iron/Steel)</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"partaucasopt\" value=\"Plastic\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"plastic\">Plastic</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"partaucasopt\" value=\"Wood\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"wood\">Wood</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"partaucasopt\" value=\"Hazardous Industrial waste(PCB certification)\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"hazinduswaste\">Hazardous Industrial waste(PCB certification)</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"partaucasopt\" value=\"Non-Hazardous\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"nonhazinduswaste\">Non-Hazardous</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"partaucasopt\" value=\"Miscelleneous\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"miscelleneous\">Miscelleneous</label>\n";
					echo "												</div>\n";
					echo "												<p>others please specify:\n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"partaucascon\" name=\"partaucascon\" size=\"80\"></p>\n";
					echo "												\n";
					echo "											</div>\n";
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "											<div class=\"cinpt\">\n";
					echo "												<p>When was the last time you participated in Auctions to Sell or Buy be it any category product? How many\n";
					echo "												auctions in a year?<input class=\"inpt w-100\" type=\"text\" id=\"wenlastauccon\" name=\"wenlastauccon\" size=\"80\"><br></p>\n";
					echo "\n";
					echo "												<div class=\"form-check form-check-inline \">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"wenlastaucopt\" value=\"In the last one week\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"lastweek\">In the last one week</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"wenlastaucopt\" value=\"In the last one month\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"lastm\">In the last one month</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"wenlastaucopt\" value=\"In the last three months\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"lastthreem\">In the last three months</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"wenlastaucopt\" value=\"In the last six months\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"lastsixm\">In the last six months</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"wenlastaucopt\" value=\"In the last 12 months\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"last12m\">In the last 12 months</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"wenlastaucopt\" value=\"More than 12 months ago\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"morethan12mago\">More than 12 months ago</label>\n";
					echo "												</div>\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>What is the approximate quantity of Industrial scrap(Bi-Product) waste generated\n";
					echo "												by your firm in a year?\n";
					echo "												\n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"quanofscrap\" name=\"quanofscrap\" size=\"70\"></p>\n";
					echo "												<p>Material category value of “ Lot” each time when you Dispose/Auction:\n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"metcatoflot\" name=\"metcatoflot\" size=\"70\"></p>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Bidding locations you can participate, only Bangalore, with in Karnataka, only in South states\n";
					echo "												or Pan India.\n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"bidlocpart\" name=\"bidlocpart\" size=\"80\"></p>\n";
					echo "												</div>\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>What all Auction websites you have visited/parcipated for bidding in the recent past years?\n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"wayallauc\" name=\"wayallauc\" size=\"80\"></p>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>When you are buying or selling through the auction websites who influenced are you with following ?<br></p>\n";
					echo "												\n";
					echo "												<div class=\"form-check form-check-inline \">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"description\">Description</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"extremelyinfluenced\">Extremely influenced</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"somewhatinfluenced\">Somewhat influenced</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"veryinfluenced\">Very influenced</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"feedback\">Feedback</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"cseller\">Company/Shop Seller</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"price\">Price</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"itemlocation\">Location of item</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"cseller\">Company/Shop Seller</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"notsoinfluenced\">Not so influenced</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"notatallinfluenced\">Not at all influenced</label>\n";
					echo "												</div>\n";
					echo "												<div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"checkbox\" class=\"form-check-input\"  name=\"influenced\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"picture\">Picture</label>\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Are you primary user decision maker in your Company/Firm regarding disposal of above mentiioned\n";
					echo "												Product category:<br></p>\n";
					echo "												\n";
					echo "												Yes <div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"radio\" class=\"form-check-input\"  name=\"decisionmaker\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"yes\"></label>\n";
					echo "											   </div>\n";
					echo "												No <div class=\"form-check form-check-inline\">\n";
					echo "                                                <input type=\"radio\" class=\"form-check-input\" name=\"decisionmaker\">\n";
					echo "                                                <label class=\"form-check-label\" for=\"no\"></label>\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												If No please specify the contact person:\n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"decisionmakercon\" name=\"decisionmakercon\" size=\"50\">\n";
					echo "												</div>\n";
					echo "												</td></tr>\n";
					echo "												 \n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Finally thanking you for your valuable feedback, Please free to share any suggestions, to improve our\n";
					echo "												services pertaining to<br> disposals of Industrial waste(Bi-Products) through our website\n";
					echo "												<a href=\"www.aucjunction.com\"><u>www.aucjunction.com</u></a>?<br>\n";
					echo "												<input class=\"inpt w-100\" type=\"text\" id=\"valfeed\" name=\"valfeed\" size=\"90\"></p>\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												<td colspan=\"10\">\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>We are going to launch <a href=\"www.aucjunction.com \">www.aucjunction.com </a>as you can get competitors and target all bidders across\n";
					echo "												India, were in you can get the<br> best price each time you bid, very soon my Manager will get in touch with\n";
					echo "												you, once again thank you so much for your time.</p>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												</tbody>\n";
					echo "												</table>\n";
					echo "												\n";
					echo "											<a href=\"#\"><button type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" onclick=\"return validateformb()\">Submit</button></a>\n";
					echo "											</form>\n";
					echo "\n";
					echo "								\n";
					echo "							</div>\n";
					echo "						</div>\n";
					echo "				</div>\n";
					echo "			</div>	\n";
					echo "		</div>\n";
					echo "		</div>\n";
					echo "		</div>\n";
					echo "		</div>\n";
					?>
					<?php
		include "footer.php";
		
		?>