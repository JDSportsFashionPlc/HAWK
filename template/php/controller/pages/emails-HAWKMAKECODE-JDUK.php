<?
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// LIBRARY
include("../../../../inc/c.php");

// MVC SYSTEM
// -- Functions and extended classes 
// @param -- c.php and m.php

// VARS
	$eid=mysql_real_escape_string($_GET['eid']);
	$libraryid=mysql_real_escape_string($_GET['libraryid']);		
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];	
	$globalHTML = "";

	// DB
	// -- GLOBAL VARS SUCH AS COREMETRICS ETC
	$email_list = mysql_query("SELECT * FROM `".$dnm."`.`emails` WHERE `eid`='".$eid."'");
		while($row = mysql_fetch_array($email_list)){
			$email_facia				= ucfirst($getFaciaName=getFaciaName($row["faciaid"])); 
			$email_name 				= str_replace(" ", "", $row["name"]);
			$email_launch_date 		= $row["launch_date"];
			$email_coremetrics_tag 	= "".$row["launch_date"]."-".$email_name."-".$email_facia."";
			$email_currency			= getFaciaCurrency($row["faciaid"]);
	}

// SQL MODEL

	// THINGS DO GET UGLY
	// -- Order:
	// Header, Nav and logo
	// Delivery tab if any
	// Content spots and links
	// Footer and brands.
	// Wings v1

	// HEADER HTML
	
		$globalHTML .= '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Latest News From JD</title>
<style type="text/css">

	#outlook a {padding:0; color:white;}
	body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; font-size:14px}
	.ExternalClass {width:100%;}
	.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass span {line-height: 100%; color:#fff;}
	#backgroundTable, #deliveryTable, #headerTable, #footerTable, #brandsTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
	img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
	a img {border:none;}
	.image_fix {display:block;}
	.flexbanner { display:block; width:100%; height:auto; }
	p {margin: 0; color:#FFF; font-family:Helvetica, Arial, sans-serif;}
	h1, h2, h3, h4, h5, h6 {color: black !important;}
	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: white !important;}
	a {color: white !important;}
	h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {color: #fff !important; }
	h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {color: purple !important; }
	table td {border-collapse: collapse;}
	table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
	a {color: white;} 

 @media only screen and (max-width: 640px) {
	a[href^="tel"], a[href^="sms"] {text-decoration: none;color: #fff; pointer-events: none;cursor: default;}
	.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default;color: #fff !important;pointer-events: auto;cursor: default;}
	table[class=devicewidth] {width: 440px !important;text-align:center!important;}
	table[class=devicewidth] a img {   height: auto !important; width: 100% !important;}
	table[class=devicewidthinner] {width: 420px !important;text-align:center!important;}
	img[class=banner] {width: 440px !important;height:267px !important;}
	img[class=colimg2] {width: 440px !important;height:267px !important;}
}

@media only screen and (max-device-width: 480px) {
	a[href^="tel"], a[href^="sms"] {text-decoration: none;color: white;pointer-events: none;cursor: default;}
	.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default;color: white !important;pointer-events: auto;cursor: default;}
	#backgroundTable, #deliveryTable, #headerTable, #footerTable, #brandsTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
	*[class].hide-on-mobile { display:none !important; }		
	table[class=devicewidth]{ display:table !important; width:100% !important; }
	td[class=devicewidth] {  width:100% !important; }
	*[class].stack-on-mobile{ float:none; width:100% !important; display:block !important; }
	*[class].flex-on-mobile{ width:100%; height:auto; }
	*[class].half-on-mobile{  width:50% !important; }
	table[id=socialMediaLogos] td{ width:25%; }
	table[id=socialMediaLogos] img{ width:100% !important; height:auto !important; }
	td[class=full-width-cell]{ display: block !important; width: 100%; }
	table[class=show-on-mobile]{ display:table !important;  }
	.break-on-mobile{ display:inline !important;  }
	td[class=cta] { display: block !important; width: 100%; height:auto; }
	td[class=social]{ display: block !important; width: 100%; }
	*[class].show{display:block !important; width: auto !important; max-height: inherit !important; overflow : visible !important; float : none !important;}
	.email-desc{ display:none; }/*start of new mobile styles*/
	table[class=devicewidth] {width: 280px !important;text-align:center!important;}
	table[class=devicewidth] a img {   height: auto !important; width: 100% !important;}
	table[class=devicewidthinner] {width: 260px !important;text-align:center!important;}
	img[class=banner] {width: 280px !important;height:170px !important;}img[class=colimg2] {width: 280px !important;height:170px !important;}
	td[class=mobile-hide], *[class].mobile-hide, table[class=mobile-hide] {display:none !important;}
	#brandsTable {display:none !important;}
	td[class="padding-bottom25"]{padding-bottom:25px !important;}
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
	a[href^="tel"], a[href^="sms"] {text-decoration: none;color: white; 
	pointer-events: none;cursor: default;}
	.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default;color: orange !important;pointer-events: auto;cursor: default;}
} 

@media (max-width: 768px){ 
	.brandsTable,#brandsTable{display:none}
	.mobilenavmehide, .hideonmobilef{display:none}
	.tablenavme{width:300px !important}
	.width-table-block-fix{width:50% !important}
}

@media (max-width: 800px){ 
	.brandsTable,#brandsTable{display:none}
	.mobilenavmehide, .hideonmobilef{display:none}

}
</style>
<!--[if gte mso 9]>
<style>/* Target Outlook 2007 and 2010 */</style>
<![endif]-->
<!--[if gte mso 15]>
<style type="text/css" media="all">tr { font-size:1px; mso-line-height-alt:0; mso-margin-top-alt:1px; }</style>
<![endif]-->
</head>

<body style="width:100% !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0">

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" bgcolor="#fff" id="headerTable">
<tr>
<td width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" height="5">
</td>
</tr>
</table>
<table width="100%"  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" bgcolor="#fff" id="headerTable">
<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="devicewidth"><tr><td width="100%" style="text-align:center;"><a target="_blank" href="%%view_email_url%%" style="text-align:center;font-family: Arial, Helvetica, sans-serif; color:#999; line-height:16px; font-size: 10px; text-decoration: none;"><span style="text-align:center;font-family: Arial, Helvetica, sans-serif; color:#999; line-height:16px; font-size: 10px; text-decoration: none;">Problems viewing this email?</span></a></td></tr></table>
</td>
</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" bgcolor="#fff" id="headerTable">
<tr>
<td width="600"  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" height="5">
</tr>
</td>
</table>


<!-- START LOGO/NAV TABLE-->
<!-- START LOGO/NAV TABLE-->
<!-- START LOGO/NAV TABLE-->
<!-- START LOGO/NAV TABLE-->
<!-- START LOGO/NAV TABLE-->
<!-- START LOGO/NAV TABLE-->


<table width="100%" height="35" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="#000" id="headerTable">
<tr>
<td align="top" width="100%" class="devicewidth">
<br />
<span style="text-align:center;">
<center>
<a href="http://www.jdsports.co.uk/home/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Header-_-Logo" target ="_blank" title="JD Sports" style="text-decoration: none; text-align:center;" border="0"> <img class="image_fix_new_no_display_block" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/emaillogo.jpg" alt="JD Sports" title="JD Sports" style="max-width:50px; max-height:35px" width="50" height="35" border="0" /> </a>
 
<br />

 <span style="font-family:Helvetica, Arial, sans-serif; font-size:16px; line-height:14px; color:white; margin:0;" class="main-nav">
<a href="http://www.jdsports.co.uk/men/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Header-_-Mens" target ="_blank" title="Men" style="color: #FFF; text-decoration: none; font-weight:100;">Men</a> | 

<a href="http://www.jdsports.co.uk/women/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Header-_-Womens" target ="_blank" title="Men" style="color:#fff;text-decoration:none;font-weight:100;">Women</a> | 

<a href="http://www.jdsports.co.uk/kids/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Header-_-Kids" target ="_blank" title="Men" style="color: white; text-decoration: none; font-weight:100;">Kids</a> <span class="mobile-hide mobilenavmehide devicewidth">|</span>  

<br />

<a class="mobile-hide mobilenavmehide devicewidth" href="http://www.jdsports.co.uk/page/jdpro/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Header-_-SportsFitness" target ="_blank" title="Men" style="color: white; text-decoration: none; font-weight:100;">Sports &amp; Fitness</a> <span class="mobile-hide mobilenavmehide devicewidth">|</span> 

<a class="mobile-hide mobilenavmehide devicewidth" href="http://www.jdsports.co.uk/page/offers/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Header-_-Offers" target ="_blank" title="Men" style="color:#f00 !important; text-decoration: none; font-weight:100;">Clearance</a>
<span class="mobile-hide devicewidth"></span> 
  
</span> 


 <br />
 
 
 
 
 </center>
</span>
 
 </td></tr></tbody></table>

<!-- END LOGO/NAV TABLE-->
<!-- END LOGO/NAV TABLE-->
<!-- END LOGO/NAV TABLE-->
<!-- END LOGO/NAV TABLE-->
<!-- END LOGO/NAV TABLE-->
<!-- END LOGO/NAV TABLE-->




<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#000" id="headerTable">
<tr>
<td width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" height="20">
</td>
</tr>
</table>

';
				
	// DELIVERY HTML
	
		$sql_a_delivery = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='TopDeliveryMessage' ");
			while($rs1_delivery = mysql_fetch_array($sql_a_delivery)){
				$TopDeliveryMessage=$rs1_delivery["type_data"];
			}
		$sql_b_delivery = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='BottomDeliveryMessage' ");
			while($rs2_delivery = mysql_fetch_array($sql_b_delivery)){
				$BottomDeliveryMessage=$rs2_delivery["type_data"];
			}
		$sql_c_delivery = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='BlueHex' ");
			while($rs3_delivery = mysql_fetch_array($sql_c_delivery)){
				$BlueHex=$rs3_delivery["type_data"];
			}
		$sql_d_delivery = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='BlueHexLinkColour' ");
			while($rs4_delivery = mysql_fetch_array($sql_d_delivery)){
				$BlueHexLinkColour=$rs4_delivery["type_data"];
			}
			
	$globalHTML .= '
	
	<!-- DELIVERY TABLE -->
	<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:'.$BlueHex.';color:'.$BlueHexLinkColour.'" bgcolor="'.$BlueHex.'" id="deliveryTable">
	<tr>
	<td align="top">
	
	
	<table  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="'.$BlueHex.'" width="600">
	<tr><td width="100%" style="border-collapse:collapse">
		<table width="600"  height="60" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" bgcolor="'.$BlueHex.'" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;;background:'.$BlueHex.';color:'.$BlueHexLinkColour.'" >
			<tbody>
				<tr>
				
				<td style="border-collapse:collapse;" >
					<table width="600" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" bgcolor="'.$BlueHex.'" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
						<tbody>
							<tr><td width="100%"  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" height="8"></td></tr>
							<tr><td width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;"><a href="http://www.jdsports.co.uk/page/delivery/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Header-_-StandardDelivery" style="text-decoration:none;font-weight:bold;font-size:16px;line-height:22px; font-family:Helvetica, Arial, sans-serif;color:'.$BlueHexLinkColour.'"><span style="font-weight:bold;font-size:16px;line-height:22px;font-family:Helvetica, Arial, sans-serif;color:'.$BlueHexLinkColour.';">'.$TopDeliveryMessage.'<br /><span style="font-size:14px;font-weight:100;color:'.$BlueHexLinkColour.'">'.$BottomDeliveryMessage.'</span></a></td></tr>
							<tr><td width="100%" height="8"  cellpadding="0" cellspacing="0" border="0" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;"align="center"></td></tr>
						</tbody>
					</table>
				</td>
				
				</tr>
			</tbody>
		</table>
		
		
	</td></tr>
	</table>
	
	
	</td>
	</tr>
	</table>
	<!-- END DELIVERY TABLE -->	
	';
	
	// CONTENT HTML
	
		// CONTENT HEADER
		// START CONTENT AND LOOPS
		/////// BUILDER STARTS
		
			$globalHTML .= '

	<!-- BANNERS -->
	<!-- GO -->
	<!-- HERE -->
	<!-- FULL CONTENT TABLE -->
	<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="#fff" id="contentTableBannerSystem">
	<tr>
	<td align="top">			
			
			';
			
		// START LOOPS	
			
			// SQL
			// -- Query to sort by user chosen drag and drop
			$emails_library_rows = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows` WHERE `libraryid`='".$libraryid."' ORDER BY `order` ASC");
			while($rlibr = mysql_fetch_array($emails_library_rows)){ 
								
				// LOOP VARS
				// -- Global vars inside the template
					$exportBuilderEmail_id=$rlibr["id"];
					$exportBuilderEmail_libraryid=$rlibr["libraryid"];
					$exportBuilderEmail_type=$rlibr["type"];
				
				
					// 1_row
					if($exportBuilderEmail_type=="1_row"){
						
							$sql_a_c_1row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='SingleBoxItemURL' ");
							while($rs2_1_row = mysql_fetch_array($sql_a_c_1row)){
								$SingleBoxItemURL=$rs2_1_row["type_data"];
							}
							$sql_b_c_1row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='SingleBoxItemPictureURL' ");
							while($rs2_2_row = mysql_fetch_array($sql_b_c_1row)){
								$SingleBoxItemPictureURL=$rs2_2_row["type_data"];
							}
				
						$globalHTML .= '
						
						
						<!--
						// 1_row
						-->
						<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
							<tr>
								<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
										<tr>
											<td width="100%" style="border-collapse:collapse"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
													<tbody>
														<tr>
															<td style="border-collapse:collapse">
															
															<!--// 1X1 BLOCK-->
																<table width="600" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																	<tbody>
																		<tr>
																			<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse"><a href="'.$SingleBoxItemURL.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-SingleBoxClick" style="border:0px"><img class="image_fix flex-on-mobile"  style="display:block;border:none;width:100%;height:auto" src="'.$SingleBoxItemPictureURL.'"  border="0" /></a></td>
																		</tr>
																	</tbody>
																</table>
																
																
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						
						
						';
						
					}
					
					
					
					
					
					
					// 1_row_CTA
					if($exportBuilderEmail_type=="1_row_CTA"){							
							
							$sql_a1_row_CTA = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data`
								WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='SingleCTAFill' ");
							while($rs11_row_CTA = mysql_fetch_array($sql_a1_row_CTA)){
							$SingleCTAFill=$rs11_row_CTA["type_data"];
							}
							$sql_b1_row_CTA = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data`
								WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='SingleCTAColour' ");
							while($rs21_row_CTA = mysql_fetch_array($sql_b1_row_CTA)){
							$SingleCTAColour=$rs21_row_CTA["type_data"];
							}
							$sql_c1_row_CTA = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data`
								WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='SingleCTATopTxt' ");
							while($rs31_row_CTA = mysql_fetch_array($sql_c1_row_CTA)){
							$SingleCTATopTxt=$rs31_row_CTA["type_data"];
							}
							$sql_d1_row_CTA = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data`
								WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='SingleCTABottomTxt' ");
							while($rs41_row_CTA = mysql_fetch_array($sql_d1_row_CTA)){
							$SingleCTABottomTxt=$rs41_row_CTA["type_data"];
							}
							$sql_e1_row_CTA = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data`
								WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='SingleCTAURL' ");
							while($rs51_row_CTA = mysql_fetch_array($sql_e1_row_CTA)){
							$SingleCTAURL=$rs51_row_CTA["type_data"];
							}
							
				
						$globalHTML .= '
	
						<!--1_row_CTA-->
						<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
							<tr>
								<td align="top"><table height="150" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="background:'.$SingleCTAFill.';border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600">
										<tr>
											<td width="100%" style="border-collapse:collapse"><table height="150" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="background:'.$SingleCTAFill.';border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt">
													<tbody>
														<tr>
															<td style="border-collapse:collapse"><!--// 1X1 CTA BLOCK-->
																<table width="600" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="background:'.$SingleCTAFill.';position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" height="150">
																	<tbody>
																		<!--// IMAGE AND LINK-->
																		<tr>
																		
																			<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse" height="150">
																				<a href="'.$SingleCTAURL.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-SingleBoxClick"
																				style="text-align:left;display:block;width:100%;height:150px;text-decoration:none;color:'.$SingleCTAColour.';font-family:Gotham, Helvetica, Arial, sans-serif">
																					<br /><br /><br /><span style="text-align:left;text-decoration:none;color:'.$SingleCTAColour.';font-family:Gotham, Helvetica, Arial, sans-serif">
																					&nbsp;&nbsp;&nbsp;<span style="color:'.$SingleCTAColour.';font-size:23px;font-weight:bold">'.$SingleCTATopTxt.'</span> <br />
																					&nbsp;&nbsp;&nbsp;<span style="text-decoration:none;color:'.$SingleCTAColour.';font-size:17px">'.$SingleCTABottomTxt.'</span>
																				</span>
																				</a>
																				</td>
																		</tr>
																	</tbody>
																</table></td>
														</tr>
													</tbody>
												</table></td>
										</tr>
									</table></td>
							</tr>
						</table>
						
						';
					}
					
					
					// html_row
					if($exportBuilderEmail_type=="html_row"){							
							
							
								$sql_a_HTML_ROW = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='HTMLBoxEnter' ");
								while($rs1_HTML_Block = mysql_fetch_array($sql_a_HTML_ROW)){
								$HTMLBoxEnter=$rs1_HTML_Block["type_data"];
								$HTMLBoxEnterStrip=$HTMLBoxEnter;
								}
							
				
						$globalHTML .= '
						
								<!--html_row-->
								<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
									<tr>
										<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
												<tr>
													<td width="100%" style="border-collapse:collapse"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
															<tbody>
																<tr>
																	<td style="border-collapse:collapse"><!--// html_row block... full control .. -->
																		<table width="600" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																			<tbody>
																				<!-- HTML OUTPUT RENDERS HERE -->
																				<tr>
																					<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse">
																					
																					<span id="HTMLBoxFill">'.$HTMLBoxEnterStrip.'</span>
																					
																					</td>
																				</tr>
																			</tbody>
																		</table></td>
																</tr>
															</tbody>
														</table></td>
												</tr>
											</table></td>
									</tr>
								</table>
						
						';
					}
					
					
					
					
					
					// 2_row_CTA
					if($exportBuilderEmail_type=="2_row_CTA"){		
					
					
							
							$sql_a_2_row_cta = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='DoubleBoxItemURL1' ");
							while($rs1_2_row_cta = mysql_fetch_array($sql_a_2_row_cta)){
							$DoubleBoxItemURL1=$rs1_2_row_cta["type_data"];
							}
							$sql_b_2_row_cta = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='DoubleBoxItemPictureURL1' ");
							while($rs2_2_row_cta = mysql_fetch_array($sql_b_2_row_cta)){
							$DoubleBoxItemPictureURL1=$rs2_2_row_cta["type_data"];
							}
							
							
							
							
							$sql_a_2_row_cta_a = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='DoubleBoxItemURL2' ");
							while($rs1_2_row_cta_a = mysql_fetch_array($sql_a_2_row_cta_a)){
							$DoubleBoxItemURL2=$rs1_2_row_cta_a["type_data"];
							}
							$sql_b_2_row_cta_b = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='DoubleBoxItemPictureURL2' ");
							while($rs2_2_row_cta_a = mysql_fetch_array($sql_b_2_row_cta_b)){
							$DoubleBoxItemPictureURL2=$rs2_2_row_cta_a["type_data"];
							}
							
							
							
							
								$globalHTML .= '
								
									<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
										<tr>
											<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
													<tr>
														<td width="100%" style="border-collapse:collapse"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																<tbody>
																	<tr>
																		<td style="border-collapse:collapse"><!--// 1X2 BLOCK50x50 block 1 - A-->
																			<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="width-table-block-fix" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																				<tbody>
																					<!--// IMAGE AND LINK-->
																					<tr>
																						<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse"><a href="'.$DoubleBoxItemURL1.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-50-50-Spot-A" style="border:0px"><img class="image_fix flex-on-mobile"  style="display:block;border:none" src="'.$DoubleBoxItemPictureURL1.'"  border="0" /></a></td>
																					</tr>
																				</tbody>
																			</table>
																			<!--// 1X2 BLOCK50x50 block 1 - A-->
																			<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="width-table-block-fix" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																				<tbody>
																					<!--// IMAGE AND LINK-->
																					<tr>
																						<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse"><a href="'.$DoubleBoxItemURL2.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-50-50-Spot-B" style="border:0px"><img class="image_fix flex-on-mobile"  style="display:block;border:none" src="'.$DoubleBoxItemPictureURL2.'"  border="0" /></a></td>
																					</tr>
																				</tbody>
																			</table></td>
																	</tr>
																</tbody>
															</table></td>
													</tr>
												</table></td>
										</tr>
									</table>
								
								';
							
							
					
					}
					
					
					
					
					
					
					
					
					
					
					
					// 2_row_sale
					
					if($exportBuilderEmail_type=="2_row_sale"){		
					
					
							// Row_1_2_by_2_Sale
							
							$sql_a_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_1_PLU' ");
								while($rs1_Sale = mysql_fetch_array($sql_a_Sale)){
								$Sale_a2_row_1_PLU=$rs1_Sale["type_data"];
							}
							$sql_b_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_1_TopTxt' ");
								while($rs2_Sale = mysql_fetch_array($sql_b_Sale)){
								$Sale_a2_row_1_TopTxt=$rs2_Sale["type_data"];
							}
							$sql_c_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_1_BottomTxt' ");
								while($rs3_Sale = mysql_fetch_array($sql_c_Sale)){
								$Sale_a2_row_1_BottomTxt=$rs3_Sale["type_data"];
							}
							$sql_d_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_1_Price' ");
								while($rs4_Sale = mysql_fetch_array($sql_d_Sale)){
								$Sale_a2_row_1_Price=$rs4_Sale["type_data"];
							}
							$sql_dwas_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_1_WasPrice' ");
								while($rs4was_Sale = mysql_fetch_array($sql_dwas_Sale)){
								$Sale_a2_row_1_WasPrice=$rs4was_Sale["type_data"];
							}
							
							// Row_2_2_by_2_Sale
							
							$sql_e_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_2_PLU' ");
								while($rs5_Sale = mysql_fetch_array($sql_e_Sale)){
								$Sale_a2_row_2_PLU=$rs5_Sale["type_data"];
							}
							
							$sql_f_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_2_TopTxt' ");
								while($rs6_Sale = mysql_fetch_array($sql_f_Sale)){
								$Sale_a2_row_2_TopTxt=$rs6_Sale["type_data"];
							}
							
							$sql_g_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_2_BottomTxt' ");
								while($rs7_Sale = mysql_fetch_array($sql_g_Sale)){
								$Sale_a2_row_2_BottomTxt=$rs7_Sale["type_data"];
							}
							
							$sql_h_Sale = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_2_Price' ");
								while($rs8_Sale = mysql_fetch_array($sql_h_Sale)){
								$Sale_a2_row_2_Price=$rs8_Sale["type_data"];
							}
							$sql_dwas_Salee = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale_a2_row_2_WasPrice' ");
								while($rs4was_Salee = mysql_fetch_array($sql_dwas_Salee)){
								$Sale_a2_row_2_WasPrice=$rs4was_Salee["type_data"];
							}	
					
					
					
						$globalHTML .= '
						
							<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
								<tr>
									<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
											<tr>
												<td width="100%" style="border-collapse:collapse"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
														<tbody>
															<tr>
																<td style="border-collapse:collapse"><!--
																// 2X2 BLOCK   
																// 2_row_1-->
																	<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="width-table-block-fix" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																		<tbody>
																			<!--// IMAGE AND LINK-->
																			<tr>
																				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$Sale_a2_row_1_PLU.'/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-OfferRow1" border="0"><img class="image_fix flex-on-mobile" style="display:block;border:none;width:100%;height:auto" src="http://i1.adis.ws/i/jpl/jd_'.$Sale_a2_row_1_PLU.'_a?w=300&h=375&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
																			</tr>
																			<!-- // TEXT AND LINK AND PRICES ETC-->
																			<tr bgcolor="#fff">
																				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>'.$Sale_a2_row_1_TopTxt.'</span></td>
																			</tr>
																			<tr>
																				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>'.$Sale_a2_row_1_BottomTxt.'</span></td>
																			</tr>
																			<tr>
																				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" ><span style="font-size:19px;color:#717171;">Was <del>'.$email_currency.''.$Sale_a2_row_1_WasPrice.'</del></span><br />
																					<span style="font-size:25px;color:#fb3b3c;">Now '.$email_currency.''.$Sale_a2_row_1_Price.'</span><br />
																					<br /></td>
																			</tr>
																		</tbody>
																	</table>
																	<!--
																	// 2X2 BLOCK
																	// 2_row_2-->
																	<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="width-table-block-fix" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																		<tbody>
																			<!--// IMAGE AND LINK-->
																			<tr>
																				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$Sale_a2_row_2_PLU.'/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-OfferRow2" border="0"><img class="image_fix flex-on-mobile" style="display:block;border:none;width:100%;height:auto" src="http://i1.adis.ws/i/jpl/jd_'.$Sale_a2_row_2_PLU.'_a?w=300&h=375&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
																			</tr>
																			<!-- // TEXT AND LINK AND PRICES ETC-->
																			<tr bgcolor="#fff">
																				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>'.$Sale_a2_row_2_TopTxt.'</span></td>
																			</tr>
																			<tr>
																				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>'.$Sale_a2_row_2_BottomTxt.'</span></td>
																			</tr>
																			<tr>
																				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" ><span style="font-size:19px;color:#717171;">Was <del>'.$email_currency.''.$Sale_a2_row_2_WasPrice.'</del></span><br />
																					<span style="font-size:25px;color:#fb3b3c;">Now '.$email_currency.''.$Sale_a2_row_2_Price.'</span><br />
																					<br /></td>
																			</tr>
																		</tbody>
																	</table></td>
															</tr>
														</tbody>
													</table></td>
											</tr>
										</table></td>
								</tr>
							</table>
						
						';
					
					
					
					}
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					// 2_row
					if($exportBuilderEmail_type=="2_row"){							
							
							
								
										$sql_a_2_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_1_PLU' ");
										while($rs12_row = mysql_fetch_array($sql_a_2_row)){
										$a2_row_1_PLU=$rs12_row["type_data"];
										}
										$sql_b2_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_1_TopTxt' ");
										while($rs22_row = mysql_fetch_array($sql_b2_row)){
										$a2_row_1_TopTxt=$rs22_row["type_data"];
										}
										$sql_c2_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_1_BottomTxt' ");
										while($rs32_row = mysql_fetch_array($sql_c2_row)){
										$a2_row_1_BottomTxt=$rs32_row["type_data"];
										}
										$sql_d2_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_1_Price' ");
										while($rs42_row = mysql_fetch_array($sql_d2_row)){
										$a2_row_1_Price=$rs42_row["type_data"];
										}
										
										
										$sql_e2_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_2_PLU' ");
										while($rs52_row = mysql_fetch_array($sql_e2_row)){
										$a2_row_2_PLU=$rs52_row["type_data"];
										}
										
										$sql_f2_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_2_TopTxt' ");
										while($rs62_row = mysql_fetch_array($sql_f2_row)){
										$a2_row_2_TopTxt=$rs62_row["type_data"];
										}
										
										$sql_g2_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_2_BottomTxt' ");
										while($rs72_row = mysql_fetch_array($sql_g2_row)){
										$a2_row_2_BottomTxt=$rs72_row["type_data"];
										}
										
										$sql_h2_row= mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a2_row_2_Price' ");
										while($rs82_row = mysql_fetch_array($sql_h2_row)){
										$a2_row_2_Price=$rs82_row["type_data"];
										}	
													
							
				
						$globalHTML .= '
						
								
						<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
									<tr>
										<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
												<tr>
													<td width="100%" style="border-collapse:collapse"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
															<tbody>
																<tr>
																	<td style="border-collapse:collapse">
																	<!--
																	// 2X2 BLOCK
																	// 2_row_1-->
																		<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="width-table-block-fix" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																			<tbody>
																				<!--// IMAGE AND LINK-->
																				<tr>
																					<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$a2_row_1_PLU.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$a2_row_1_PLU.'" border="0"><img class="image_fix flex-on-mobile" style="display:block;border:none;width:100%;height:auto" src="http://i1.adis.ws/i/jpl/jd_'.$a2_row_1_PLU.'_a?w=300&h=375&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a><!-- EDIT TEXT AND PLU --><!-- START WRAPPER MINI BOX --></td>
																				</tr>
																				<!-- // TEXT AND LINK AND PRICES ETC-->
																				<tr bgcolor="#fff">
																					<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;" ><span>'.$a2_row_1_TopTxt.'</span></td>
																				</tr>
																				<tr>
																					<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;" ><span>'.$a2_row_1_BottomTxt.'</span></td>
																				</tr>
																				<tr>
																					<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:28px;color:#717171;line-height:35px;font-weight:bold;border-collapse:collapse;" >'.$email_currency.'<span>'.$a2_row_1_Price.'</span></td>
																				</tr>
																			</tbody>
																		</table>
																		<!--
																		// 2X2 BLOCK
																		// 2_row_2-->
																		<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="width-table-block-fix" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
																			<tbody>
																				<!--// IMAGE AND LINK-->
																				<tr>
																					<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$a2_row_2_PLU.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$a2_row_2_PLU.'" border="0"><img class="image_fix flex-on-mobile" style="display:block;border:none;width:100%;height:auto" src="http://i1.adis.ws/i/jpl/jd_'.$a2_row_2_PLU.'_a?w=300&h=375&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a><!-- EDIT TEXT AND PLU --><!-- START WRAPPER MINI BOX --></td>
																				</tr>
																				<!-- // TEXT AND LINK AND PRICES ETC-->
																				<tr bgcolor="#fff">
																					<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;" ><span>'.$a2_row_2_TopTxt.'</span></td>
																				</tr>
																				<tr>
																					<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;" ><span>'.$a2_row_2_BottomTxt.'</span></td>
																				</tr>
																				<tr>
																					<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:28px;color:#717171;line-height:35px;font-weight:bold;border-collapse:collapse;" >'.$email_currency.'<span>'.$a2_row_2_Price.'</span></td>
																				</tr>
																			</tbody>
																		</table></td>
																</tr>
															</tbody>
														</table></td>
												</tr>
											</table></td>
									</tr>
								</table>
						
						
						';
					}
					
					
					
					
					
					
					
					
					
					
					
					
					
					// 3_row_sale
					if($exportBuilderEmail_type=="3_row_sale"){		
					
								// Row_1_3_by_2_Sale3Row
									
									$sql_a_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_1_PLU' ");
										while($rs1_Sale3Row = mysql_fetch_array($sql_a_Sale3Row)){
										$Sale3Row_a2_row_1_PLU=$rs1_Sale3Row["type_data"];
									}
									$sql_b_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_1_TopTxt' ");
										while($rs2_Sale3Row = mysql_fetch_array($sql_b_Sale3Row)){
										$Sale3Row_a2_row_1_TopTxt=$rs2_Sale3Row["type_data"];
									}
									$sql_c_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_1_BottomTxt' ");
										while($rs3_Sale3Row = mysql_fetch_array($sql_c_Sale3Row)){
										$Sale3Row_a2_row_1_BottomTxt=$rs3_Sale3Row["type_data"];
									}
									$sql_d_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_1_Price' ");
										while($rs4_Sale3Row = mysql_fetch_array($sql_d_Sale3Row)){
										$Sale3Row_a2_row_1_Price=$rs4_Sale3Row["type_data"];
									}
									$sql_dwas_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_1_WasPrice' ");
										while($rs4was_Sale3Row = mysql_fetch_array($sql_dwas_Sale3Row)){
										$Sale3Row_a2_row_1_WasPrice=$rs4was_Sale3Row["type_data"];
									}
									
									
									
									// Row_2_3_by_2_Sale3Row
									
									$sql_e_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_2_PLU' ");
										while($rs5_Sale3Row = mysql_fetch_array($sql_e_Sale3Row)){
										$Sale3Row_a2_row_2_PLU=$rs5_Sale3Row["type_data"];
									}
									
									$sql_f_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_2_TopTxt' ");
										while($rs6_Sale3Row = mysql_fetch_array($sql_f_Sale3Row)){
										$Sale3Row_a2_row_2_TopTxt=$rs6_Sale3Row["type_data"];
									}
									
									$sql_g_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_2_BottomTxt' ");
										while($rs7_Sale3Row = mysql_fetch_array($sql_g_Sale3Row)){
										$Sale3Row_a2_row_2_BottomTxt=$rs7_Sale3Row["type_data"];
									}
									
									$sql_h_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_2_Price' ");
										while($rs8_Sale3Row = mysql_fetch_array($sql_h_Sale3Row)){
										$Sale3Row_a2_row_2_Price=$rs8_Sale3Row["type_data"];
									}
									$sql_dwas_Sale3Rowe = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_2_WasPrice' ");
										while($rs4was_Sale3Rowe = mysql_fetch_array($sql_dwas_Sale3Rowe)){
										$Sale3Row_a2_row_2_WasPrice=$rs4was_Sale3Rowe["type_data"];
									}	
									
									
									// Row_3_3_by_3_Sale3Row
									
									$sql_e_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_3_PLU' ");
										while($rs5_Sale3Row3 = mysql_fetch_array($sql_e_Sale3Row3)){
										$Sale3Row_a2_row_3_PLU=$rs5_Sale3Row3["type_data"];
									}
									
									$sql_f_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_3_TopTxt' ");
										while($rs6_Sale3Row3 = mysql_fetch_array($sql_f_Sale3Row3)){
										$Sale3Row_a2_row_3_TopTxt=$rs6_Sale3Row3["type_data"];
									}
									
									$sql_g_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_3_BottomTxt' ");
										while($rs7_Sale3Row3 = mysql_fetch_array($sql_g_Sale3Row3)){
										$Sale3Row_a2_row_3_BottomTxt=$rs7_Sale3Row3["type_data"];
									}
									
									$sql_h_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_3_Price' ");
										while($rs8_Sale3Row3 = mysql_fetch_array($sql_h_Sale3Row3)){
										$Sale3Row_a2_row_3_Price=$rs8_Sale3Row3["type_data"];
									}
									$sql_dwas_Sale3Rowe3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='Sale3Row_a2_row_3_WasPrice' ");
										while($rs4was_Sale3Rowe3 = mysql_fetch_array($sql_dwas_Sale3Rowe3)){
										$Sale3Row_a2_row_3_WasPrice=$rs4was_Sale3Rowe3["type_data"];
									}			
									
									
									
									
									
						
						$globalHTML .= '
						
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
	<tr>
		<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
				<tr>
					<td width="100%" style="border-collapse:collapse"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
							<tbody>
								<tr>
									<td style="border-collapse:collapse"><!--
									// 3X3 BLOCK
									// 3_row_1-->
										<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
											<tbody>
												<!--// IMAGE AND LINK-->
												<tr>
													<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$Sale3Row_a2_row_1_PLU.'/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$Sale3Row_a2_row_1_PLU.'" border="0"><img class="image_fix flex-on-mobile"style="display:block;border:none"src="http://i1.adis.ws/i/jpl/jd_'.$Sale3Row_a2_row_1_PLU.'_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
												</tr>
												<!-- // TEXT AND LINK AND PRICES ETC-->
												<tr bgcolor="#fff">
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>'.$Sale3Row_a2_row_1_TopTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>'.$Sale3Row_a2_row_1_BottomTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" ><span style="font-size:19px;color:#717171;">Was <del>'.$email_currency.''.$Sale3Row_a2_row_1_WasPrice.'</del></span><br />
														<span style="font-size:25px;color:#fb3b3c;">Now '.$email_currency.''.$Sale3Row_a2_row_1_Price.'</span><br />
														<br /></td>
												</tr>
											</tbody>
										</table>
										<!--
										// 3X3 BLOCK
										// 3_row_2-->
										<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
											<tbody>
												<!--// IMAGE AND LINK-->
												<tr>
													<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$Sale3Row_a2_row_2_PLU.'/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$Sale3Row_a2_row_2_PLU.'" border="0"><img class="image_fix flex-on-mobile"style="display:block;border:none"src="http://i1.adis.ws/i/jpl/jd_'.$Sale3Row_a2_row_2_PLU.'_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
												</tr>
												<!-- // TEXT AND LINK AND PRICES ETC-->
												<tr bgcolor="#fff">
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>'.$Sale3Row_a2_row_2_TopTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>'.$Sale3Row_a2_row_2_BottomTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" ><span style="font-size:19px;color:#717171;">Was <del>'.$email_currency.''.$Sale3Row_a2_row_2_WasPrice.'</del></span><br />
														<span style="font-size:25px;color:#fb3b3c;">Now '.$email_currency.''.$Sale3Row_a2_row_2_Price.'</span><br />
														<br /></td>
												</tr>
											</tbody>
										</table>
										<!--
										// 3X3 BLOCK
										// 3_row_3-->
										<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
											<tbody>
												<!--// IMAGE AND LINK-->
												<tr>
													<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$Sale3Row_a2_row_3_PLU.'/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$Sale3Row_a2_row_3_PLU.'" border="0"><img class="image_fix flex-on-mobile"style="display:block;border:none"src="http://i1.adis.ws/i/jpl/jd_'.$Sale3Row_a2_row_3_PLU.'_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
												</tr>
												<!-- // TEXT AND LINK AND PRICES ETC-->
												<tr bgcolor="#fff">
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>'.$Sale3Row_a2_row_3_TopTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>'.$Sale3Row_a2_row_3_BottomTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" ><span style="font-size:19px;color:#717171;">Was <del>'.$email_currency.''.$Sale3Row_a2_row_3_WasPrice.'</del></span><br />
														<span style="font-size:25px;color:#fb3b3c;">Now '.$email_currency.''.$Sale3Row_a2_row_3_Price.'</span><br />
														<br /></td>
												</tr>
											</tbody>
										</table></td>
								</tr>
							</tbody>
						</table></td>
				</tr>
			</table></td>
	</tr>
</table>
						
						
						';			
									
									
														
					
					}
					
					
					
					
					
					
					
					
					
					
					
					
					// 3_row
					if($exportBuilderEmail_type=="3_row"){							
							
							

											$sql_a_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_1_PLU' ");
											while($rs1_3_row = mysql_fetch_array($sql_a_3_row)){
											$a3_row_1_PLU=$rs1_3_row["type_data"];
											}
											$sql_b_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_1_TopTxt' ");
											while($rs2_3_row = mysql_fetch_array($sql_b_3_row)){
											$a3_row_1_TopTxt=$rs2_3_row["type_data"];
											}
											$sql_c_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_1_BottomTxt' ");
											while($rs3_3_row = mysql_fetch_array($sql_c_3_row)){
											$a3_row_1_BottomTxt=$rs3_3_row["type_data"];
											}
											$sql_d = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_1_Price' ");
											while($rs4 = mysql_fetch_array($sql_d)){
											$a3_row_1_Price=$rs4["type_data"];
											}
											
											
											$sql_e_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_2_PLU' ");
											while($rs5_3_row = mysql_fetch_array($sql_e_3_row)){
											$a3_row_2_PLU=$rs5_3_row["type_data"];
											}
											
											$sql_f_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_2_TopTxt' ");
											while($rs6_3_row = mysql_fetch_array($sql_f_3_row)){
											$a3_row_2_TopTxt=$rs6_3_row["type_data"];
											}
											
											$sql_g_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_2_BottomTxt' ");
											while($rs7_3_row = mysql_fetch_array($sql_g_3_row)){
											$a3_row_2_BottomTxt=$rs7_3_row["type_data"];
											}
											
											$sql_h_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_2_Price' ");
											while($rs8_3_row = mysql_fetch_array($sql_h_3_row)){
											$a3_row_2_Price=$rs8_3_row["type_data"];
											}	
											
											$sql_i_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_3_PLU' ");
											while($rs10_3_row = mysql_fetch_array($sql_i_3_row)){
											$a3_row_3_PLU=$rs10_3_row["type_data"];
											}
											
											$sql_j_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_3_TopTxt' ");
											while($rs11_3_row = mysql_fetch_array($sql_j_3_row)){
											$a3_row_3_TopTxt=$rs11_3_row["type_data"];
											}
											
											$sql_k_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_3_BottomTxt' ");
											while($rs12_3_row = mysql_fetch_array($sql_k_3_row)){
											$a3_row_3_BottomTxt=$rs12_3_row["type_data"];
											}
											
											$sql_l_3_row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$exportBuilderEmail_id."' AND `type`='".$exportBuilderEmail_type."' AND `type_name`='a3_row_3_Price' ");
											while($rs13_3_row = mysql_fetch_array($sql_l_3_row)){
											$a3_row_3_Price=$rs13_3_row["type_data"];
											}	







								


													
							
				
						$globalHTML .= '
						
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
	<tr>
		<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
				<tr>
					<td width="100%" style="border-collapse:collapse"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
							<tbody>
								<tr>
									<td style="border-collapse:collapse">
									<!--
									// 3X3 BLOCK
									// 3_row_1
									-->
										<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
											<tbody>
												<!--// IMAGE AND LINK-->
												<tr>
													<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$a3_row_1_PLU.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$a3_row_1_PLU.'" border="0"><img class="image_fix flex-on-mobile" style="display:block;border:none;width:100%;height:auto" src="http://i1.adis.ws/i/jpl/jd_'.$a3_row_1_PLU.'_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
												</tr>
												<!-- // TEXT AND LINK AND PRICES ETC-->
												<tr bgcolor="#fff">
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;" ><span>'.$a3_row_1_TopTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;" ><span>'.$a3_row_1_BottomTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:28px;color:#717171;line-height:35px;font-weight:bold;border-collapse:collapse;" >'.$email_currency.'<span>'.$a3_row_1_Price.'</span></td>
												</tr>
											</tbody>
										</table>
										<!--
										// 3X3 BLOCK
										// 3_row_2
										-->
										<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
											<tbody>
												<!--// IMAGE AND LINK-->
												<tr>
													<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$a3_row_2_PLU.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$a3_row_2_PLU.'" border="0"><img class="image_fix flex-on-mobile" style="display:block;border:none;width:100%;height:auto" src="http://i1.adis.ws/i/jpl/jd_'.$a3_row_2_PLU.'_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
												</tr>
												<!-- // TEXT AND LINK AND PRICES ETC-->
												<tr bgcolor="#fff">
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;" ><span>'.$a3_row_2_TopTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;" ><span>'.$a3_row_2_BottomTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:28px;color:#717171;line-height:35px;font-weight:bold;border-collapse:collapse;" >'.$email_currency.'<span>'.$a3_row_2_Price.'</span></td>
												</tr>
											</tbody>
										</table>
										<!--
										// 3X3 BLOCK
										// 3_row_3
										-->
										<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
											<tbody>
												<!--// IMAGE AND LINK-->
												<tr>
													<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/product/'.$a3_row_3_PLU.'?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-CTA-_-PLU-'.$a3_row_3_PLU.'" border="0"><img class="image_fix flex-on-mobile" style="display:block;border:none;width:100%;height:auto" src="http://i1.adis.ws/i/jpl/jd_'.$a3_row_3_PLU.'_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" /></a></td>
												</tr>
												<!-- // TEXT AND LINK AND PRICES ETC-->
												<tr bgcolor="#fff">
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;" ><span>'.$a3_row_3_TopTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;" ><span>'.$a3_row_3_BottomTxt.'</span></td>
												</tr>
												<tr>
													<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:28px;color:#717171;line-height:35px;font-weight:bold;border-collapse:collapse;" >'.$email_currency.'<span>'.$a3_row_3_Price.'</span></td>
												</tr>
											</tbody>
										</table></td>
								</tr>
							</tbody>
						</table></td>
				</tr>
			</table></td>
	</tr>
</table>

						
						';
					}
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				
				
				
				
				
			}	
			
			
			
			
			
			
			
			
			
			
			
		// END LOOPS
		
		// CONTENT FOOTER
			
			$globalHTML .= '
					</tr>
				</td>
			</table>
			<!-- SPACER -->
				<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#fff">
					<tr>
						<td height="15">
						
						</td>
					</tr>
				</table>
			<!-- END SPACER -->';
			
	// FOOTER HTML
	
			$globalHTML .= '
			
			<!----------------------------------------------------------------------------------------->
			<!------------------------------------------ NO ------------------------------------------->
			<!----------------------------------------- MORE ------------------------------------------>
			<!---------------------------------------- BANNERS ---------------------------------------->
			<!----------------------------------------------------------------------------------------->
			
			<!----------------------------------------------------------------------------------------->
			<!----------------------------------------- SOCIAL ---------------------------------------->
			<!------------------------------------------ AND ------------------------------------------>
			<!------------------------------------- STORE LOCATOR ------------------------------------->
			<!----------------------------------------------------------------------------------------->
			
			<!-- FULL CONTENT TABLE --> 
			
			<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth hideonmobilef" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="#FFFFFF" id="contentTable">
				<tr>
					<td align="top"><table  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" width="600">
							<tr>
								<td width="100%" style="border-collapse:collapse;" ><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
										<tbody>
											<tr>
												<td style="border-collapse:collapse;" ><table width="400" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
														<tbody>
															<tr>
																<td align="center"><span style="color:#000; font-family:Helvetica, Arial, sans-serif; font-size:14px; line-height:14px; font-weight:bold;">Social</span></td>
															</tr>
															<tr>
																<td align="center"></td>
															</tr>
															<tr>
																<td  width="100%" align="center" class="devicewidth" style="border-collapse:collapse;"><a href="http://twitter.com/jdsportsfashion" border="0"><img class="image_fix"  style="display:block; border: none; max-width:100px; max-height:66px"  src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/social-twitter.gif" alt="Twitter" title="Twitter" width="100" height="66" border="0" /></a></td>
																<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;"><a href="http://www.facebook.com/JDSportsOfficial" border="0"><img class="image_fix"  style="display:block; border: none; max-width:100px; max-height:66px"  src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/social-facebook.gif" alt="Facebook" title="Facebook" width="100" height="66" border="0" /></a></td>
																<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;"><a href="http://instagram.com/jdsportsofficial" border="0"><img class="image_fix"  style="display:block; border: none; max-width:100px; max-height:66px"  src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/social-instagram.gif" alt="Instagram" title="Instagram" width="100" height="66" border="0" /></a></td>
																<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;"><a href="http://www.youtube.com/jdsportsofficial" border="0"><img class="image_fix"  style="display:block; border: none; max-width:100px; max-height:66px"  src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/social-youtube.gif" alt="YouTube" title="YouTube" width="100" height="66" border="0" /></a></td>
															</tr>
														</tbody>
													</table>
													<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
														<tbody>
															<tr>
																<td align="center"><span style="color:#000; font-family:Helvetica, Arial, sans-serif; font-size:14px; line-height:14px; font-weight:bold;">Find a JD store</span></td>
															</tr>
															<tr>
																<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" ><a href="http://www.jdsports.co.uk/store-finder/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-StoreFinder" border="0"><img class="image_fix"  style="display:block; border: none"  src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/store_locator.gif" alt="Find a JD store" title="Find a JD store" width="200" height="66" border="0" /></a></td>
															</tr>
														</tbody>
													</table></td>
											</tr>
										</tbody>
									</table></td>
							</tr>
						</table></td>
				</tr>
			</table>
		
			<!-- END FULL CONTENT TABLE -->
			
		
		

<!-- ------------------------------------------------------------------------------------- -->
<!-- ------------------------------------- POPULAR --------------------------------------- -->
<!-- ------------------------------------- BRANDS ---------------------------------------- -->
<!-- ------------------------------------------------------------------------------------- -->


<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth mobile-hide" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="#222222" id="brandsTable">
	<tr>
		<td align="top"><table  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth mobile-hide" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="#222" width="600">
				<tr>
					<td width="100%" style="border-collapse:collapse;"><table width="600"  height="35" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth mobile-hide" bgcolor="#222" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
							<tbody>
								<tr>
									<td style="border-collapse:collapse;">
									
									<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth mobile-hide" bgcolor="#222" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
											<tbody>
												<tr>
													<td height="15"></td>
												</tr>
												<tr>
													<td width="100"><a href="http://www.jdsports.co.uk/search/adidas?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-BrandsAdidas" target ="_blank" title="JD Sports" style="text-decoration: none;" border="0"><img class="image_fix mobile-hide" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/brands-adidas.gif" alt="adidas" title="adidas" width="100" height="50" border="0" /></a></td>
													<td width="100"><a href="http://www.jdsports.co.uk/search/adidas+originals?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-BrandsAdidasOriginals" target ="_blank" title="JD Sports" style="text-decoration: none;" border="0"><img class="image_fix mobile-hide" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/brands-adidas_originals.gif" alt="adidas Originals" title="adidas Originals" width="100" height="50" border="0" /></a></td>
													<td width="100"><a href="http://www.jdsports.co.uk/search/Nike?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-BrandsNike" target ="_blank" title="JD Sports" style="text-decoration: none;" border="0"><img class="image_fix mobile-hide" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/brands-nike.gif" alt="Nike" title="Nike" width="100" height="50" border="0" /></a></td>
													<td width="100"><a href="http://www.jdsports.co.uk/page/converse/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-BrandsConverse" target ="_blank" title="JD Sports" style="text-decoration: none;" border="0"><img class="image_fix mobile-hide" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/brands-converse.gif" alt="Converse" title="Converse" width="100" height="50" border="0" /></a></td>
													<td width="100"><a href="http://www.jdsports.co.uk/search/Fred+Perry?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-BrandsFredPerry" target ="_blank" title="JD Sports" style="text-decoration: none;" border="0"><img class="image_fix mobile-hide" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/brands-fred_perry.gif" alt="Fred Perry" title="Fred Perry" width="100" height="50" border="0" /></a></td>
													<td width="100"><a href="http://www.jdsports.co.uk/page/new-era?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-BrandsNewEra" target ="_blank" title="JD Sports" style="text-decoration: none;" border="0"><img class="image_fix mobile-hide" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/brands-new_era.gif" alt="New Era" title="New Era" width="100" height="50" border="0" /></a></td>
												</tr>
												<tr>
													<td height="15"></td>
												</tr>
											</tbody>
										</table></td>
								</tr>
							</tbody>
						</table></td>
				</tr>
			</table></td>
	</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth brandsTable mobile-hide" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="#222">
	<tr>
		<td align="top"><table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth mobile-hide" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" bgcolor="#222" width="600">
				<tr>
					<td width="100%" style="border-collapse:collapse;" ><table width="600"  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth mobile-hide" bgcolor="#222" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
							<tbody>
								<tr>
									<td style="border-collapse:collapse;" ><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth mobile-hide" bgcolor="#222" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
											<tbody>
												<tr>
													<td width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;"><a href="http://www.jdsports.co.uk/page/brands/?aid=150&cm_mmc=Email-_-2014-09-11-KOTcampaign-_-Footer-_-BrandsViewAll" target ="_blank" title="VIEW ALL BRANDS" style="text-decoration: none;">
														<p style="text-align:center; font-family:Helvetica, Arial, sans-serif;"><span style="color:#595959; font-weight:bold;font-family:Helvetica, Arial, sans-serif; font-size:16px; line-height:16px;text-align:center; ">View all Brands</span></p>
														</a></td>
												</tr>
												<tr>
													<td width="100%" height="15" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;"></td>
												</tr>
											</tbody>
										</table></td>
								</tr>
							</tbody>
						</table></td>
				</tr>
			</table></td>
	</tr>
</table>
<!-- //END BRANDS TABLE -->
<!-- x --><!--FOOTER--><!-- COPY --><!-- x -->


<table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#000000" id="footerTable" width="100%">
	<tr>
	
					<td>
					
					
					<br /><span style="padding:5px;text-align:center;font-size:12px;line-height:18px;font-family:Helvetica, Arial, sans-serif; font-weight:normal;color:#fff">
						<br /><center>
					
							
							<a href="http://www.jdsports.co.uk/home/?aid=150&cm_mmc=Email-_-'.$email_coremetrics_tag.'-_-Footer-_-Logo" target ="_blank" title="JD Sports" style="text-decoration: none; text-align:center;" border="0">
							<img height="35" width="50" src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/emaillogo.jpg" alt="JD Sports" title="JD Sports" border="0" />
							</a>
							<br /><br />
							
You are receiving this e-mail because you have signed upto the JD Sports newsletter.<br>
We will not pass your details on to any third parties. JD Sports is a respected high street shop.<br />
If you wish to no longer receive emails from JD Sports please <a href="%%unsub_center_url%%" target ="_blank" title="Unsubscribe" style="color: #fff; font-weight:bold; text-decoration: underline;">unsubscribe</a>.<br/>
<br/>
<span style="color:#666;">JD Sports Fashion Plc, Edinburgh House, Hollinsbrook Way<br>Pilsworth, Bury, Lancashire, BL9 8RR<br/><br/>Copyright &copy; 2014 JD Sports Fashion Plc<br>All rights reserved.</span></span>
						
						<br />
						</center><br />
						
						</span>
						<br />

</td>
</tr>
</table>


<custom name="opencounter" type="tracking">
<style type="text/css">
@media print{ #_t { background-image:url(https://lzqp8nt9.emltrk.com/lzqp8nt9?p&d=$EMAIL_ADDRESS_$); } }
span.OutlookMessageHeader { background-image:url(https://lzqp8nt9.emltrk.com/lzqp8nt9?f&d=$EMAIL_ADDRESS_$) }
table.moz-email-headers-table { background-image:url(https://lzqp8nt9.emltrk.com/lzqp8nt9?f&d=$EMAIL_ADDRESS_$) }
blockquote #_t { background-image:url(https://lzqp8nt9.emltrk.com/lzqp8nt9?f&d=$EMAIL_ADDRESS_$) }
#MailContainerBody #_t { background-image:url(https://lzqp8nt9.emltrk.com/lzqp8nt9?f&d=$EMAIL_ADDRESS_$) }
</style>

<span id="_t"></span>


<img src="https://lzqp8nt9.emltrk.com/lzqp8nt9?d=$EMAIL_ADDRESS_$" width="1" height="1" border="0" />

</body>
</html>
		
';	
	
// RETURN FEED
// -- EOM
echo $globalHTML;

//_____;
//_____>>;
