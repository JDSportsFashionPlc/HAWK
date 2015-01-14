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
	$erowid=$_GET["erowid"];
	$type=$_GET["type"];
	
	
	
	
	$sql_a_2_row_cta = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$erowid."' AND `type`='".$type."' AND `type_name`='DoubleBoxItemURL1' ");
	while($rs1_2_row_cta = mysql_fetch_array($sql_a_2_row_cta)){
		$DoubleBoxItemURL1=$rs1_2_row_cta["type_data"];
	}
	$sql_b_2_row_cta = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$erowid."' AND `type`='".$type."' AND `type_name`='DoubleBoxItemPictureURL1' ");
	while($rs2_2_row_cta = mysql_fetch_array($sql_b_2_row_cta)){
		$DoubleBoxItemPictureURL1=$rs2_2_row_cta["type_data"];
	}
	
	
	
	
	$sql_a_2_row_cta_a = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$erowid."' AND `type`='".$type."' AND `type_name`='DoubleBoxItemURL2' ");
	while($rs1_2_row_cta_a = mysql_fetch_array($sql_a_2_row_cta_a)){
		$DoubleBoxItemURL2=$rs1_2_row_cta_a["type_data"];
	}
	$sql_b_2_row_cta_b = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$erowid."' AND `type`='".$type."' AND `type_name`='DoubleBoxItemPictureURL2' ");
	while($rs2_2_row_cta_a = mysql_fetch_array($sql_b_2_row_cta_b)){
		$DoubleBoxItemPictureURL2=$rs2_2_row_cta_a["type_data"];
	}

?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="firstTableWrapper devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
<tr>
<td align="top">
<table cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" width="600" bgcolor="#fff">
<tr>
<td width="100%" style="border-collapse:collapse">
<table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
<tbody>
<tr>
<td style="border-collapse:collapse">

		
		
	
	<!--
	// 1X2 BLOCK
	50x50 block 1 - A
	-->
		<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse">
				<a href="{{DoubleBoxItemURL1<?=$rowId?>}}" style="border:0px">
				<img class="image_fix flex-on-mobile"  style="display:block;border:none" src="{{DoubleBoxItemPictureURL1<?=$rowId?>}}"  border="0" />
				</a>
				
				<div class="edit_wrapper" style="left:25px;top:25px;z-index:900015">
				
					<a href="#" type="button" class="btn btn-warning btn-xs cog-right"
					style="color:#fff" onClick="javascript:jQuery('#editable_doublebox_2_row_a_<?=$rowId?>').slideDown();return false;">
					Edit <i class="fa fa-pencil-square-o fa-fw"></i>
					</a>
					
					<div class="wrapper_form" id="editable_doublebox_2_row_a_<?=$rowId?>">
					
					
							
						<div class="table-responsive">
						
							<table class="table table-bordered table-striped">
								<tr>
									<td><strong>URL:</strong></td>
								</tr>
								<tr>
									<td><input type="text" id="DoubleBoxItemURL1<?=$rowId?>" ng-model="DoubleBoxItemURL1<?=$rowId?>" ng-init="DoubleBoxItemURL1<?=$rowId?>='<?=$DoubleBoxItemURL1?>'"></td>
								</tr>
								<tr>
									<td><strong>Image URL:</strong></td>
								</tr>
								<tr>
									<td>
									<input type="text" id="DoubleBoxItemPictureURL1<?=$rowId?>" ng-model="DoubleBoxItemPictureURL1<?=$rowId?>" ng-init="DoubleBoxItemPictureURL1<?=$rowId?>='<?=$DoubleBoxItemPictureURL1?>'">
									</td>
								</tr>
								
								<tr style="background:#a1c2df">
									<td colspan="2" style="background:#a1c2df">
									<a type="button" class="btn btn-primary btn-xs" onclick="javascript:saveRow_2_row_a_<?=$rowId?>()" href="#">Save</a>
									<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#editable_doublebox_2_row_a_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>
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
		
		
		
		
		
		
		
		
		
		<!--
	// 1X2 BLOCK
	50x50 block 2 - B
	-->
		<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse">
				<a href="{{DoubleBoxItemURL2<?=$rowId?>}}" style="border:0px">
				<img class="image_fix flex-on-mobile"  style="display:block;border:none" src="{{DoubleBoxItemPictureURL2<?=$rowId?>}}"  border="0" />
				</a>
				
				<div class="edit_wrapper" style="left:25px;top:25px;z-index:900015">
				
					<a href="#" type="button" class="btn btn-warning btn-xs cog-right"
					style="color:#fff" onClick="javascript:jQuery('#editable_doublebox_2_row_b_<?=$rowId?>').slideDown();return false;">
					Edit <i class="fa fa-pencil-square-o fa-fw"></i>
					</a>
					
					<div class="wrapper_form" id="editable_doublebox_2_row_b_<?=$rowId?>">
					
					
							
						<div class="table-responsive">
						
							<table class="table table-bordered table-striped">
								<tr>
									<td><strong>URL:</strong></td>
								</tr>
								<tr>
									<td><input type="text" id="DoubleBoxItemURL2<?=$rowId?>" ng-model="DoubleBoxItemURL2<?=$rowId?>" ng-init="DoubleBoxItemURL2<?=$rowId?>='<?=$DoubleBoxItemURL2?>'"></td>
								</tr>
								<tr>
									<td><strong>Image URL:</strong></td>
								</tr>
								<tr>
									<td>
									<input type="text" id="DoubleBoxItemPictureURL2<?=$rowId?>" ng-model="DoubleBoxItemPictureURL2<?=$rowId?>" ng-init="DoubleBoxItemPictureURL2<?=$rowId?>='<?=$DoubleBoxItemPictureURL2?>'">
									</td>
								</tr>
								
								<tr style="background:#a1c2df">
									<td colspan="2" style="background:#a1c2df">
									<a type="button" class="btn btn-primary btn-xs" onclick="javascript:saveRow_2_row_b_<?=$rowId?>()" href="#">Save</a>
									<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#editable_doublebox_2_row_b_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>
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

function saveRow_2_row_a_<?=$rowId?>(){
	
	var DoubleBoxItemURL1			 	= $('#DoubleBoxItemURL1<?=$rowId?>').val();
	var DoubleBoxItemPictureURL1 	= $('#DoubleBoxItemPictureURL1<?=$rowId?>').val();
	
	// POST SQL UPDATES
	
	$.ajax({
		type: "POST",
		url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-2_row_CTA-a.php?erowid=<?=$erowid?>&type=<?=$type?>&DoubleBoxItemPictureURL1="+DoubleBoxItemPictureURL1+"&DoubleBoxItemURL1="+DoubleBoxItemURL1+"",
		dataType: "html"
	});
	
	// UI AND UX
	alert('Feather saved');
	$('#editable_doublebox_2_row_a_<?=$rowId?>').slideUp();
	
}

function saveRow_2_row_b_<?=$rowId?>(){
	
	var DoubleBoxItemURL2			 	= $('#DoubleBoxItemURL2<?=$rowId?>').val();
	var DoubleBoxItemPictureURL2 	= $('#DoubleBoxItemPictureURL2<?=$rowId?>').val();
	
	// POST SQL UPDATES
	
	$.ajax({
		type: "POST",
		url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-2_row_CTA-b.php?erowid=<?=$erowid?>&type=<?=$type?>&DoubleBoxItemPictureURL2="+DoubleBoxItemPictureURL2+"&DoubleBoxItemURL2="+DoubleBoxItemURL2+"",
		dataType: "html"
	});
	
	// UI AND UX
	alert('Feather saved');
	$('#editable_doublebox_2_row_b_<?=$rowId?>').slideUp();
	
}
</script>
