<!--
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/
-->


<?
// LIBRARY
include("../../../../inc/c.php");

// VARS
	$rowId=$_GET["rowId"];
	$libraryid=$_GET["erowid"];
	$type=$_GET["type"];
	
	$sql_a = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='1_row_CTA' AND `type_name`='SingleCTAFill' ");
	while($rs1 = mysql_fetch_array($sql_a)){
		$SingleCTAFill=$rs1["type_data"];
	}
	$sql_b = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='1_row_CTA' AND `type_name`='SingleCTAColour' ");
	while($rs2 = mysql_fetch_array($sql_b)){
		$SingleCTAColour=$rs2["type_data"];
	}
	$sql_c = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='1_row_CTA' AND `type_name`='SingleCTATopTxt' ");
	while($rs3 = mysql_fetch_array($sql_c)){
		$SingleCTATopTxt=$rs3["type_data"];
	}
	$sql_d = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='1_row_CTA' AND `type_name`='SingleCTABottomTxt' ");
	while($rs4 = mysql_fetch_array($sql_d)){
		$SingleCTABottomTxt=$rs4["type_data"];
	}
	$sql_e = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='1_row_CTA' AND `type_name`='SingleCTAURL' ");
	while($rs5 = mysql_fetch_array($sql_e)){
		$SingleCTAURL=$rs5["type_data"];
	}
	

?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
<tr>
<td align="top">
<table height="150" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="background:{{SingleCTAFill<?=$rowId?>}};border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600">
<tr>
<td width="100%" style="border-collapse:collapse">
<table height="150" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="background:{{SingleCTAFill<?=$rowId?>}};border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt">
<tbody>
<tr>
<td style="border-collapse:collapse">

		
		
		
		
		
		
		
		
		
		
		
		
	<!--
	// 1X1 CTA BLOCK
	-->
		<table width="600" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="background:{{SingleCTAFill<?=$rowId?>}};position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" height="150">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse" height="150">
				<span style="color:{{SingleCTAColour<?=$rowId?>}};line-height:15px;display:block;margin-left:15px;font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
					<a href="{{SingleCTAURL<?=$rowId?>}}" style="color:{{SingleCTAColour<?=$rowId?>}};font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
						<span style="color:{{SingleCTAColour<?=$rowId?>}};font-size:23px;font-weight:bold">{{SingleCTATopTxt<?=$rowId?>}}</span><br />
						<span style="color:{{SingleCTAColour<?=$rowId?>}};font-size:17px">{{SingleCTABottomTxt<?=$rowId?>}}</span>
					</a>
				</span>
				<div class="edit_wrapper" style="left:25px;top:25px;z-index:900015">
					
					<a href="#" type="button" class="btn btn-warning btn-xs cog-right" style="color:#fff"
						onClick="javascript:jQuery('#editable_singlebox_1_row_CTA_<?=$rowId?>').slideDown();return false;">Edit <i class="fa fa-pencil-square-o fa-fw"></i>
					</a>
					
					<div class="wrapper_form" id="editable_singlebox_1_row_CTA_<?=$rowId?>">
							
						<div class="table-responsive">
						
							<table class="table table-bordered table-striped">
							
								<tr>
									<td>URL:</td>
								</tr>
								<tr>
									<td><input type="text" id="SingleCTAURL<?=$rowId?>"  ng-model="SingleCTAURL<?=$rowId?>" ng-init="SingleCTAURL<?=$rowId?>='<?=$SingleCTAURL?>'"/></td>
								</tr>
								
								<tr>
									<td>TOP TEXT:</td>
								</tr>
								<tr>
									<td><input type="text" id="SingleCTATopTxt<?=$rowId?>"  ng-model="SingleCTATopTxt<?=$rowId?>" ng-init="SingleCTATopTxt<?=$rowId?>='<?=$SingleCTATopTxt?>'"/></td>
								</tr>
								
								<tr>
									<td>BOTTOM TEXT:</td>
								</tr>
								<tr>
									<td><input type="text" id="SingleCTABottomTxt<?=$rowId?>"  ng-model="SingleCTABottomTxt<?=$rowId?>" ng-init="SingleCTABottomTxt<?=$rowId?>='<?=$SingleCTABottomTxt?>'"/></td>
								</tr>
								<tr>
									<td>BG HEX #:</td>
								</tr>
								<tr>
									<td><input type="text" id="SingleCTAFill<?=$rowId?>"  ng-model="SingleCTAFill<?=$rowId?>" ng-init="SingleCTAFill<?=$rowId?>='<?=$SingleCTAFill?>'"/></td>
								</tr>
								<tr>
									<td>COLOR HEX #:</td>
								</tr>
								<tr>
									<td><input type="text" id="SingleCTAColour<?=$rowId?>"  ng-model="SingleCTAColour<?=$rowId?>" ng-init="SingleCTAColour<?=$rowId?>='<?=$SingleCTAColour?>'"/></td>
								</tr>
								<tr style="background:#a1c2df">
									<td colspan="2" style="background:#a1c2df">
									
									<a type="button" class="btn btn-primary btn-xs" onclick="javascript:saveRow_1_row_CTA_<?=$rowId?>()" href="#">Save</a>
									<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#editable_singlebox_1_row_CTA_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>				
									
									</td>
								</tr>
							</table>
							
						</div>
					</div>
				</div><!-- END WRAPPER MINI BOX -->
				
				</td>
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

<script>

function saveRow_1_row_CTA_<?=$rowId?>(){	
	
	// VARS
		var SingleCTAFill= $('#SingleCTAFill<?=$rowId?>').val();
		var SingleCTAColour= $('#SingleCTAColour<?=$rowId?>').val();
		var SingleCTATopTxt= $('#SingleCTATopTxt<?=$rowId?>').val();
		var SingleCTABottomTxt= $('#SingleCTABottomTxt<?=$rowId?>').val();
		var SingleCTAURL= $('#SingleCTAURL<?=$rowId?>').val();		
		
		SingleCTAFill = SingleCTAFill.replace('#', '');
		SingleCTAColour = SingleCTAColour.replace('#', '');
	
	// POST SQL UPDATES
	
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-1_row_CTA.php?erowid=<?=$libraryid?>&type=1_row_CTA&SingleCTAFill="+SingleCTAFill+"&SingleCTAColour="+SingleCTAColour+"&SingleCTATopTxt="+SingleCTATopTxt+"&SingleCTABottomTxt="+SingleCTABottomTxt+"&SingleCTAURL="+SingleCTAURL+"",
			dataType: "html"
		});
	
	// UI AND UX
	
		alert('Feather saved');
		$('#editable_singlebox_1_row_CTA_<?=$rowId?>').slideUp();
	
}


</script>