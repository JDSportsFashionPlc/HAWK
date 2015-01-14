<?php
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// HTML CODE FOLLOWED BELOW
// -- Paste outside, PHP is accepted.
// -- MVC
?>
<? while($row = mysql_fetch_array($email_list)){?>

<style type="text/css">
table, table tr, table td{text-align:left;font-size:13px;padding:3px}
table td strong{text-transform:uppercase}
.Hawk_Email_Content table,.Hawk_Email_Content table tr,.Hawk_Email_Content table td{padding:0}
</style>

<h2>Emails Builder New - #<?=$eid?><br />[<?=ucfirst($getFaciaName=getFaciaName($row["faciaid"]));?>] <?=$row["name"]?> - <?=$row["launch_date"]?></h2>



	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<strong>INFORMATION:</strong> You must place images in ExactTarget/FTP/JD Api until the builder includes the Hawk Asset uploader.
	</div>

<div>

	<div class="well">
		<div class="row">
			
			<div class="col-md-12">
			
					
						<form id="builder_<?=md5(rand)?>" class="build_form_hawk_wings">
						
						
							<!--
							
							The Builder 1.0
							
							WINGS 1.0 ();
							
							// Khaleel Mughal 1.0.0
							
							// Credit to AngularJS Developers at Google 
							// Credit to Alistair Robson on the ng-controller
							// Praise be to God for the ability to code
							
							/inc/emailframework.php
							
							-- BASIC explanation :: the builder works like this....
							First we get all the variables of our email below in hidden fields to be used later
							
							1 - Then we get a big div. Chuck all the header, and Nav...
							2 - Then we allow people to edit the content area of the email - basically the plu grabber
							3 - Finally chuck that footer with brand images...
							
								Then when they save it, all the tagging, variables, images, and html code is built and spun for our email
								
								We use a mixture of AngularJS and PHP/MYSQL to build the email
								
							4 - Validation; we take all the new information and build the mailer
							
								 - Upload images and save sessions, versions and variables
								 - Assign coremetric tagging
								 - Build all the links and compress code
								 --- FINALLY we add ALL the above to /inc/framework.php wings() function
								 
								 The function emails the developers and notifies of the new email; this is now ready to copy and paste
								 directly into ExactTarget/CampaignMonitor etc... 
							
							5 - Simples!	
							
							-->
							
							<div class="builder_body">
							
								<div class="builder_body_div">
							
									<!--
									// First we get the Header of the email
									// So we need to know the facia of the email
									
										Top Links such MEN, WOMEN, KIDS, SALE RED TEXT OR NOT AND LOGOS
										ALL THE GLOBAL TOP LINKS etc...
									
									-->
									
										<section>
											<div class="Hawk_Email_Header" id="HawkEmailHeader">
												<center><img style="opacity:0.5" src="<?=$cdnDir?>imgs/jduk/header.jpg"/></center>
											</div>
										</section>
									
									<!--
									// Second we get the delivery message we wish to use
									// Now we add the delivery message or leave it as
										Blue Delivery Bar
									-->
									
										<section>
											<div class="Hawk_Email_Delivery" id="HawkEmailDelivery" ng-controller="HawkEmailDeliveryCrl">
												<div ng-include="'<?=$cdnDir?>php/view/pages/delivery_row.php?libraryid=<?=$libraryid?>'"></div>
											</div>
										</section>
									
									<!--
									// Fourth - our content - the most crucial part - the wings
									// Using PLU, JSON, XML, ZIP, Ampliance - WINGS();
									-->
									
										<section>
											<div class="Hawk_Email_Content" id="HawkEmailContent" ng-controller="HawkEmailContentCtrl">
												<div class="ng-draggable" id="HawkRowsContentId">
												<? while($rlibr = mysql_fetch_array($emails_library_rows)){ ?>
													<a name="Row_<?=$rlibr["id"]?>"></a>
													<div id="recordsArray_<?=$rlibr["id"]?>" class="saladin_hash_<?=$rlibr["hash"]?> hawkEmailContentRowBlock">
														<div ng-include="'<?=$cdnDir?>php/view/pages/<?=$rlibr["type"]?>.php?erowid=<?=$rlibr["id"]?>&rowId=<?=$rlibr["hash"]?>&type=<?=$rlibr["type"]?>&faciaid=<?=$row["faciaid"]?>'"></div>
														<a href="#" onclick="javascript:deleteRow(<?=$rlibr["id"]?>);return false;" class="btn btn-xs btn-danger" style="position:absolute;bottom:1%;left:1%;z-index:900005"> Delete Me <i class="fa fa-times"></i></a>
													</div>
												<? } ?>
												</div>
												<div class="hawkFormFeed">
													<input type="hidden" id="eid" name="eid" value="<?=$eid?>" />
													<input type="hidden" id="uid" name="uid" value="<?=$_SESSION["userID"]?>" />
													<input type="hidden" id="launch_date" name="launch_date" value="<?=$row["launch_date"]?>" />
													<input type="hidden" id="name" name="name" value="<?=$row["name"]?>" />
													<input type="hidden" id="faciaid" name="faciaid" value="<?=$row["faciaid"]?>" />
													<input type="hidden" id="hawkVersion" name="hawkVersion" value="<?=$appVersion?>" />
												</div>
												<div class="contentCreatorButton well">
													<center>
														<br />														
														<a href="#" onClick="javascript:addRow('1_row');return false;" class="btn btn-primary" type="button">1 Row <i class="fa fa-plus-square"></i></a>
														<a href="#" onClick="javascript:addRow('1_row_CTA');return false;" class="btn btn-primary" type="button">1 Row CTA <i class="fa fa-plus-square"></i></a>
														<a href="#" onClick="javascript:addRow('2_row_CTA');return false;" class="btn btn-primary" type="button">2 Row CTA <i class="fa fa-plus-square"></i></a>
														<br />
														<a href="#" onClick="javascript:addRow('html_row');return false;" class="btn btn-primary" type="button">HTML <i class="fa fa-plus-square"></i></a>														
														<br />
														<a href="#" onClick="javascript:addRow('2_row');return false;" class="btn btn-primary" type="button">2 Row (plu) <i class="fa fa-plus-square"></i></a>
														<a href="#" onClick="javascript:addRow('3_row');return false;" class="btn btn-primary" type="button">3 Row (plu) <i class="fa fa-plus-square"></i></a>
														<br />
														<a href="#" onClick="javascript:addRow('2_row_sale');return false;" class="btn btn-danger" type="button">2 Row Sale (plu) <i class="fa fa-plus-square"></i></a>
														<a href="#" onClick="javascript:addRow('3_row_sale');return false;" class="btn btn-danger" type="button">3 Row Sale (plu) <i class="fa fa-plus-square"></i></a>													
													</center>
												</div>
											</div>
										</section>
									
									<!--
									// Fifth the bottom churner
									// Our footer content spitter that builds our brands and footer links
									-->
									
										<section>
											<div class="Hawk_Email_Footer" id="HawkEmailFooter">
												<center><img style="opacity:0.5" src="<?=$cdnDir?>imgs/jduk/footer.jpg"/></center>
											</div>
										</section>
								
									</div>
								
							</div>
							
						</form>
						
						<br />
						<a href="#" onClick="javascript:deleteBuild(<?=$libraryid?>);return false;" class="btn btn-danger" type="button">Cancel Build</a>
						<a href="#" onClick="javascript:HawkBuilder_v1();return false;" class="btn btn-success" type="button">Fly - Save Build</a>
					
					</div>
					
					
			</div>
			
		</div>
	</div>
  
</div>

<? } ?>
<script type="text/javascript">
	
	//	CAMPAIGN
	// -- Delete this entire version of the mailer - no going back
	// -- @param tracker_delete_version(); this function records who delete it and the stamp
	// -- no backup however is made and it cannot be restored
	
		function deleteRow(id){	
			
			// VARS
			// -- Using the PHP API get(); REST
			var libraryid = id;
			
			// Prompt confirmation
			// -- Final message before thread execution
			var conf = confirm("WARNING! Are you sure you want to delete this row? - NO GOING BACK!");
			
			if (conf == true) {
				window.location = "<?=$Emails_link_bybuilderDeleteEmailRow?>"+id+"&libraryid=<?=$_GET["libraryid"]?>&gid=<?=$_GET["id"]?>";
			} else {
				
			}
		
		}
	
	// DRAG DROP
	// -- We also update our listings order
	
		jQuery(function() {
			jQuery("#HawkRowsContentId").sortable({ opacity: 0.6, cursor: 'move', update: function()
				{
					$.post("<?=$cdnDir?>php/controller/pages/emails-builder-updaterow-form.php?libraryid=<?=$libraryid?>", $("#HawkRowsContentId").sortable("serialize") + '&action=sort', function(theResponse){
				});								
				} 
			});
		});
	
	// MAKE BOXES
	
		function addRow(type) {
			
			// VARS
			// -- Make unique Ids for our mailing row divs
				var saladin_hash = Math.random().toString(36).substr(2);
				window.location="<?=$cdnDir?>php/controller/pages/emails-builder-newrow-form.php?libraryid=<?=$libraryid?>&eid=<?=$eid?>&hash="+saladin_hash+"&type="+type;
				
		}
	
	// PROCESS
	// -- Build the wings 1 system
	
		function HawkBuilder_v1(){
			fly();
		}
		
		function fly(){
			
			// VARS
			var form = $('.build_form_hawk_wings');
			var preloader = '<h1>Leaving the nest...</h1><div class="progress"><div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"><span class="sr-only">45% Complete</span></div></div>';
			
			// Empty the page and redirect to the code copy system
			// -- Do the Wings Builder row del
			// @ param Phase 1 Wings v1
				$(form).empty();
				$(form).html(preloader);
				setTimeout(function() {
					window.location="<?=$Emails_link_bybuilderNewHAWKv1ProcessSystem?><?=$eid?>&libraryid=<?=$libraryid?>&eid=<?=$eid?>&hawk=<?=sha1(rand)?>&hawkWings=__<?=sha1(rand)?><?=rand()?>";
				}, 100);
				
		}	
		
		<? if($_GET["action"]=="newrow"){ ?>
			// SCROLL TO ELEMENT
			//	-- Move to the newly inserted row
				 $(document).ready(function(){
					var divLoc = $('#recordsArray_<?=$_GET["rowId"]?>').offset();
					$('html, body').animate({scrollTop:divLoc.top}, "slow");
				 });
		<? } ?>
	
</script>