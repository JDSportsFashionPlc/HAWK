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
	
	$sql_a = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$erowid."' AND `type`='html_row' AND `type_name`='HTMLBoxEnter' ");
	while($rs1 = mysql_fetch_array($sql_a)){
		$HTMLBoxEnter=$rs1["type_data"];
		$HTMLBoxEnterStrip=$HTMLBoxEnter;
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
				
				
				<span id="HTMLBoxFill<?=$rowId?>">
					<?=$HTMLBoxEnterStrip?>
				</span>
				
				
				<div class="edit_wrapper" style="left:25px;top:25px">
					<a href="#" type="button" class="btn btn-warning btn-xs cog-right" style="color:#fff" onClick="javascript:jQuery('#editable_singleboxHTML<?=$rowId?>').slideDown();return false;">Edit <i class="fa fa-pencil-square-o fa-fw"></i></a>
					<div class="wrapper_form" id="editable_singleboxHTML<?=$rowId?>">
							
						<div class="table-responsive">
						
							<table class="table table-bordered table-striped">
								<tr>
									<td><strong>HTML:</strong></td>
								</tr>
								<tr>
									<td><textarea id="HTMLBoxEnter<?=$rowId?>" style="width:100%;height:300px"><?=$HTMLBoxEnterStrip?></textarea></td>
								</tr>
								
								<tr style="background:#a1c2df">
									<td colspan="2" style="background:#a1c2df">
									<a type="button" class="btn btn-primary btn-xs" onclick="javascript:saveRow_html_row_<?=$rowId?>()" href="#">Save</a>
									<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#editable_singleboxHTML<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>
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
function saveRow_html_row_<?=$rowId?>(){
	
	$('#HTMLBoxFill<?=$rowId?>').empty();
	
	// POST SQL UPDATES
	// -- SQL updates into the database
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-html_row.php?erowid=<?=$erowid?>&rowId=<?=$rowId?>", // Get response from this file
			data:{name:$('#HTMLBoxEnter<?=$rowId?>').val()},
			success: function (response) {
				// $("textarea#wstxt").val(response); // Send response to textarea
			}
		});
	
	// UI AND UX
		alert('Feather saved');
		$('#HTMLBoxFill<?=$rowId?>').html($('#HTMLBoxEnter<?=$rowId?>').val());
		$('#editable_singleboxHTML<?=$rowId?>').slideUp();
	
}
</script>