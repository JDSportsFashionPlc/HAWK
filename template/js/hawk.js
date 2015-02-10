<!DOCTYPE html>
<html lang="en" ng-app="HAWK">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width"/>
<title>JD Sports Resposive Email Template - v2 - 2015</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
<script src="hawk.js"></script>
<style>
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

/*
RESET CSS
*/
#outlook a{padding:0}body{width:100% !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0}.ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}#backgroundTable{margin:0;padding:0;width:100% !important;line-height:100% !important}img{outline:none;text-decoration:none;-ms-interpolation-mode:bicubic}a img{border:none}.image_fix{display:block}p{margin:1em 0}h1, h2, h3, h4, h5, h6{color:black !important}h1 a, h2 a, h3 a, h4 a, h5 a, h6 a{color:blue !important}h1 a:active, h2 a:active, h3 a:active, h4 a:active, h5 a:active, h6 a:active{color:red !important}h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited{color:purple !important}table td{border-collapse:collapse}table{border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;margin:0;padding:0}a{color:#000}

/*
JD CSS
*/
body{background:linear-gradient(to bottom, #999, #eaeaea);width:100%}
body{font-family:Arial}
a{text-decoration:none}
a:hover{text-decoration:underline}
.hidemobile{}

/*
CENTRAL WRAPPER
*/
.container{position:relative;margin:0 auto;width:750px}
@media screen and (max-width:815px){.container{width:700px}}
@media screen and (max-width:725px){.container{width:600px}}
@media screen and (max-width:650px){.container{width:575px}}
@media screen and (max-width:600px){.container{width:565px}}
@media screen and (max-width:575px){.container{width:500px}}
@media screen and (max-width:550px){.container{width:97%}}

/*
CORE GLOBAL CSS
*/
.fullwidthtable{width:100%}
.divider-top{display:block;width:100%;height:15px;border-top-left-radius:13px;border-top-right-radius:13px;background:#000}
.divider-bottom{display:block;width:100%;height:15px;border-bottom-left-radius:13px;border-bottom-right-radius:13px;background:#000}
.hide{display:none}

/*
WEB LINK
*/
.weblink a{text-decoration:none;font-size:11.7px;display:block;margin:9px}
.weblink a:hover, .weblink a span:hover{text-decoration:none}
.weblink a span{text-decoration:underline}

/*
LOGO/NAV
*/
.logonav{background:#000;color:#fff}
.top-nav-link-region{text-align:right;vertical-align:middle}
.top-nav-links{font-weight:normal;margin:0 5px;text-decoration:none;color:#fff;font-size:11.9px;letter-spacing:1.3px}

/*
DELIVERY BAR
*/
.deliverybar{background:#1083C7;color:#fff;line-height:19px;font-size:12.5px}
.deliverybar strong{font-size:17px}
.deliverybar span{display:block;margin:9px 0}
.deliverybar a{display:block;color:#fff}

/*
CONTENT BLOCK 1x1
*/
.contentBlock1x1 img{width:100%;border:0}

/*
CONTENT BLOCK 1x1 WITH CTA
*/
.contentBlock1x1withCTA a{display:block}
.contentBlock1x1withCTA img{width:85%;border:0;text-align:center}
.contentBlock1x1withCTA span{font-size:15px;display:block;margin:15px 0;line-height:25px}
.contentBlock1x1withCTA strong{font-size:19px}

/*
CONTENT BLOCK 2x2
*/
.contentBlock2x2 td{width:50%}
.contentBlock2x2 img{width:100%;border:0}

/*
PLU BLOCK 2x2
*/
.pluBlock2x2 td{width:50%}
.pluBlock2x2 a{display:block;text-align:center}
.pluBlock2x2 img{width:85%;border:0;text-align:center}
.pluBlock2x2 span{font-size:13px;display:block;margin:15px 0;line-height:23px}
.pluBlock2x2 strong{font-size:17px}

/*
FOOTER
*/
.footer{background:#000;color:#fff}
.footer{text-align:center;line-height:17.5px;font-size:11.5px;font-weight:normal;color:#fff}
.footer span{color:#666}
.footercopy, .footercopy span{color:#c1c1c1;font-size:11px;text-align:center}
.footercopy a{color:#c1c1c1;text-decoration:underline}
.footercopy a:hover{text-decoration:none}

</style>

</head>
<body ng-controller="faciaNameCtrl">

	<!--
	ANGULARJS
	-->
	<style>
	.WebFormEditableRegions{margin-top:15px;margin-bottom:15px;background:#fff;min-height:215px;padding:25px;border-radius:9px}
	.graybox{background:#eaeaea;border:1px solid #ccc;padding:9px;margin:7px 0}
	.WebFormEditableRegions input, .WebFormEditableRegions select{width:85%;font-size:1.1em;padding:1px;vertical-align:middle}
	</style>
	<div class="container">
		<div class="WebFormEditableRegions removeFinal">
			
			<h2><span><strong>HAWK v2</strong></span></h2>
			
			<div class="graybox">ENTER FACIA NAME:				
				<select ng-model="myFacia" ng-options="facia.name for facia in facia">
     				<option value="">-- choose facia --</option>
    			</select>			
			</div>
			
			<div class="graybox">ENTER THE NAME OF THE CAMPAIGN:
				<input ng-model="faciaEmailCampaignName" ng-init="faciaEmailCampaignName='sample'" type="text"/>
			</div>			
			<div class="graybox">ENTER THE DATE OF THE CAMPAIGN:
				<input ng-model="DDMMYY" ng-init="DDMMYY='DD-MM-YY'" class="inputDDMMYY" type="text"/>
			</div>

		</div>
	</div>

	<!--
	MAIN WRAPPER
	-->
	<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" class="fullwidthtable">
	<tr>
	<td>

		<!-- 
		CENTRAL WRAPPER 
		-->
		<table cellpadding="0" class="container" cellspacing="0" border="0" align="center">
		<tr>
			<td>

				<!--
				WEB LINK
				-->
				<table class="weblink fullwidthtable">
				<tr>
					<td>
						<a href="{{WEBLINK}}">
							<center>Problems viewing this email? See the <span>web version</span>.</center>
						</a>
					</td>
				</tr>
				</table>
				
				<span class="divider-top hidemobile"></span>

				<!--
				LOGO/NAV
				-->
				<table class="logonav fullwidthtable">
				<tr>
					<td>
						<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Header&utm_term=Logo">
							<img src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/emaillogo.jpg" alt="{{myFacia.name}}" border="0"/>
						</a>
					</td>
					<td align="right" class="top-nav-link-region">
						<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Navigation&utm_term=Men" class="top-nav-links">MEN</a>
						<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Navigation&utm_term=Women" class="top-nav-links">WOMEN</a>
						<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Navigation&utm_term=Kids" class="top-nav-links">KIDS</a>
					</td>
				</tr>
				</table>

				<!--
				DELIVERY BAR
				-->
				<table class="deliverybar fullwidthtable">
					<tr>
						<td>
							<center>
								<span>
									<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Navigation&utm_term=FreeDeliveryBar">
									<strong>FREE DELIVERY</strong>
									<br />ON ALL ORDERS IN THE NEXT 24 HOURS
									</a>
								</span>
							</center>
						</td>
					</tr>
				</table>

				<!--
				CONTENT BLOCK 1x1
				-->
				<table class="contentBlock1x1 fullwidthtable">
					<tr>
						<td>
							<center>
								<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=1x1">
									<img src="http://placehold.it/600x600"/>
								</a>
							</center>
						</td>
					</tr>
				</table>

				<!--
				CONTENT BLOCK 1x1 WITH CTA
				-->
				<table class="contentBlock1x1withCTA fullwidthtable" bgcolor="#e1e1e1">
					<tr>
						<td>
							<center>
								<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=1x1CTA" style="color:#777">
									<br />
									<img src="http://placehold.it/600x600"/>
									<br />
									<span>
										<strong>BRAND HEADER</strong><br />
										NIKE CORPORATION SUB TITLE
									</span>
								</a>
							</center>
						</tr>
					</tr>
				</table>

				<!--
				CONTENT BLOCK 1x1 WIDE CTA
				-->
				<table class="contentBlock1x1 fullwidthtable">
					<tr>
						<td>
							<center>
								<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=1x1wide">
									<img src="http://placehold.it/600x300"/>
								</a>
							</center>
						</td>
					</tr>
				</table>

				<!--
				CONTENT BLOCK 1x1 WIDE WITH CTA
				-->
				<table class="contentBlock1x1withCTA fullwidthtable" bgcolor="#e1e1e1">
					<tr>
						<td>
							<center>
								<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=1x1withCTA" style="color:#777">
									<br />
									<img src="http://placehold.it/600x300"/>
									<br />
									<span>
										<strong>BRAND HEADER</strong><br />
										NIKE CORPORATION SUB TITLE
									</span>
								</a>
							</center>
						</td>
					</tr>
				</table>

				<!--
				CONTENT BLOCK 2x2
				-->
				<table class="contentBlock2x2 fullwidthtable">
					<tr>
						<td width="50%">
							<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=2x2A">
								<img src="http://placehold.it/300x300?v=21"/>
							</a>
						</td>
						<td width="50%">
							<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=2x2B">
								<img src="http://placehold.it/300x300?v=21"/>
							</a>
						</td>
					</tr>
				</table>

				<!--
				PLU BLOCK 2x2
				-->
				<table class="pluBlock2x2 fullwidthtable" bgcolor="#e1e1e1">
					<tr>
						<td width="50%">
							<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=2x2ADetails" style="color:#777">
								<img src="http://placehold.it/300x300?v=23"/>
								<br />
								<span>
									<strong>BRAND PRODUCT</strong><br />
									GARMENT INFORMATION<br />
									&pound;99.99
								</span>
							</a>
						</td>
						<td width="50%">
							<a href="{{myFacia.domain}}?utm_source=ExactTarget&utm_medium=Email&utm_campaign={{DDMMYY}}-{{faciaEmailCampaignName}}&utm_content=Content&utm_term=2x2BDetails" style="color:#777">
								<img src="http://placehold.it/300x300?v=23"/>
								<br />
								<span>
									<strong>BRAND PRODUCT</strong><br />
									GARMENT INFORMATION<br />
									&pound;99.99
								</span>
							</a>
						</td>
					</tr>
				</table>

				<!--
				FOOTER
				-->
				<table class="footer fullwidthtable">
					<tr>
						<td>
							<center>
								<br /><img src="http://www.jdsports.co.uk/images/library/2015/12.01.2015/emaillogo.jpg" alt="JD Sports" border="0"/><br />
								<span>
									JD Sports Fashion Plc, Edinburgh House, Hollinsbrook Way<br />Pilsworth, Bury, Lancashire, BL9 8RR<br />
									Copyright &copy; 2014 JD Sports Fashion Plc<br />All rights reserved.
								</span>
							</center>
						</td>
					</tr>
				</table>

				<span class="divider-bottom hidemobile"></span>			

			</td>
		</tr>
		</table>
		<!-- 
		END WRAPPER 
		-->

		<br />

		<span class="footercopy"><center>If you wish to no longer receive emails from JD Sports please <a href="{{UNSUBSCRIBE}}">unsubscribe</a>.</center></span>

	<!--
	END WRAPPER
	-->
	</td>
	</tr>
	</table>

	<br />

	<!--
	TRACKING
	-->

</body>
</html>