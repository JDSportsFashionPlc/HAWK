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
	
	$sql_a = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$erowid."' AND `type`='".$type."' AND `type_name`='SingleBoxItemURL' ");
	while($rs1 = mysql_fetch_array($sql_a)){
		$SingleBoxItemURL=$rs1["type_data"];
	}
	$sql_b = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$erowid."' AND `type`='".$type."' AND `type_name`='SingleBoxItemPictureURL' ");
	while($rs2 = mysql_fetch_array($sql_b)){
		$SingleBoxItemPictureURL=$rs2["type_data"];
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
	// 1X1 BLOCK
	-->
		<table width="600" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse">
				<a href="{{SingleBoxItemURL<?=$rowId?>}}" style="border:0px">
				<img class="image_fix flex-on-mobile"  style="display:block;border:none" src="{{SingleBoxItemPictureURL<?=$rowId?>}}"  border="0" />
				</a>
				
				<div class="edit_wrapper" style="left:25px;top:25px;z-index:900015">
				
					<a href="#" type="button" class="btn btn-warning btn-xs cog-right"
					style="color:#fff" onClick="javascript:jQuery('#editable_singlebox_1_row_<?=$rowId?>').slideDown();return false;">
					Edit <i class="fa fa-pencil-square-o fa-fw"></i>
					</a>
					
					<div class="wrapper_form" id="editable_singlebox_1_row_<?=$rowId?>">
					
					
							
						<div class="table-responsive">
						
							<table class="table table-bordered table-striped">
								<tr>
									<td><strong>URL:</strong></td>
								</tr>
								<tr>
									<td><input type="text" id="SingleBoxItemURL<?=$rowId?>" ng-model="SingleBoxItemURL<?=$rowId?>" ng-init="SingleBoxItemURL<?=$rowId?>='<?=$SingleBoxItemURL?>'"></td>
								</tr>
								<tr>
									<td><strong>Image URL:</strong></td>
								</tr>
								<tr>
									<td>
									<input type="text" id="SingleBoxItemPictureURL<?=$rowId?>" ng-model="SingleBoxItemPictureURL<?=$rowId?>" ng-init="SingleBoxItemPictureURL<?=$rowId?>='<?=$SingleBoxItemPictureURL?>'">
									</td>
								</tr>
								
								<tr style="background:#a1c2df">
									<td colspan="2" style="background:#a1c2df">
									<a type="button" class="btn btn-primary btn-xs" onclick="javascript:saveRow_1_row_<?=$rowId?>()" href="#">Save</a>
									<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#editable_singlebox_1_row_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>
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

function saveRow_1_row_<?=$rowId?>(){
	
	var SingleBoxItemURL			 	= $('#SingleBoxItemURL<?=$rowId?>').val();
	var SingleBoxItemPictureURL 	= $('#SingleBoxItemPictureURL<?=$rowId?>').val();
	
	// POST SQL UPDATES
	
	$.ajax({
		type: "POST",
		url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-1_row.php?erowid=<?=$erowid?>&type=<?=$type?>&SingleBoxItemURL="+SingleBoxItemURL+"&SingleBoxItemPictureURL="+SingleBoxItemPictureURL+"",
		dataType: "html"
	});
	
	// UI AND UX
	alert('Feather saved');
	$('#editable_singlebox_1_row_<?=$rowId?>').slideUp();
	
}
</script>
