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
	
$sql_a = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_1_PLU' ");
while($rs1 = mysql_fetch_array($sql_a)){
$a2_row_1_PLU=$rs1["type_data"];
}
$sql_b = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_1_TopTxt' ");
while($rs2 = mysql_fetch_array($sql_b)){
$a2_row_1_TopTxt=$rs2["type_data"];
}
$sql_c = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_1_BottomTxt' ");
while($rs3 = mysql_fetch_array($sql_c)){
$a2_row_1_BottomTxt=$rs3["type_data"];
}
$sql_d = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_1_Price' ");
while($rs4 = mysql_fetch_array($sql_d)){
$a2_row_1_Price=$rs4["type_data"];
}
	




$sql_e = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_2_PLU' ");
while($rs5 = mysql_fetch_array($sql_e)){
$a2_row_2_PLU=$rs5["type_data"];
}

$sql_f = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_2_TopTxt' ");
while($rs6 = mysql_fetch_array($sql_f)){
$a2_row_2_TopTxt=$rs6["type_data"];
}

$sql_g = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_2_BottomTxt' ");
while($rs7 = mysql_fetch_array($sql_g)){
$a2_row_2_BottomTxt=$rs7["type_data"];
}

$sql_h= mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='2_row' AND `type_name`='a2_row_2_Price' ");
while($rs8 = mysql_fetch_array($sql_h)){
$a2_row_2_Price=$rs8["type_data"];
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
	// 2X2 BLOCK
	// 2_row_1
	-->
		<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" >
				
				
				
				<a
				href="http://www.jdsports.co.uk/product/{{a2_row_1_PLU<?=$rowId?>}}" border="0">
				<img class="image_fix flex-on-mobile"
				style="display:block;border:none"
				src="http://i1.adis.ws/i/jpl/jd_{{a2_row_1_PLU<?=$rowId?>}}_a?w=300&h=375&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" />
				</a><!-- EDIT TEXT AND PLU --><!-- START WRAPPER MINI BOX -->
					







<div class="edit_wrapper" style="left:25px;top:25px;z-index:900010">
<a href="#" type="button" class="btn btn-warning btn-xs cog-right" style="color:#fff"
onClick="javascript:jQuery('#Edit_Region_2_row_1_<?=$rowId?>').slideDown();return false;">Edit <i class="fa fa-pencil-square-o fa-fw"></i></a>
<div class="wrapper_form" id="Edit_Region_2_row_1_<?=$rowId?>">
<div class="table-responsive">

<table class="table table-bordered table-striped">
<tr>
<td><strong>PLU:</strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_1_PLU<?=$rowId?>"  ng-model="a2_row_1_PLU<?=$rowId?>" ng-init="a2_row_1_PLU<?=$rowId?>='<?=$a2_row_1_PLU?>'" ></td>
</tr>
<tr>
<td><strong>Top Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_1_TopTxt<?=$rowId?>"  ng-model="a2_row_1_TopTxt<?=$rowId?>" ng-init="a2_row_1_TopTxt<?=$rowId?>='<?=$a2_row_1_TopTxt?>'" ></td>
</tr>
<tr>
<td><strong>Bottom Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_1_BottomTxt<?=$rowId?>"  ng-model="a2_row_1_BottomTxt<?=$rowId?>" ng-init="a2_row_1_BottomTxt<?=$rowId?>='<?=$a2_row_1_BottomTxt?>'" ></td>
</tr>
<tr>
<td><strong>Price: <small><em>(DO NOT HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_1_Price<?=$rowId?>"  ng-model="a2_row_1_Price<?=$rowId?>" ng-init="a2_row_1_Price<?=$rowId?>='<?=$a2_row_1_Price?>'" ></td>
</tr>

<tr style="background:#a1c2df">
<td colspan="2" style="background:#a1c2df">

<a type="button" class="btn btn-primary btn-xs" onclick="javascript:Save_Row_2_row_1_<?=$rowId?>()" href="#">Save</a>
<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#Edit_Region_2_row_1_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>				



</td>
</tr>
</table>

</div>
</div>
</div><!-- END WRAPPER MINI BOX -->
				</td>
			</tr>
			<!-- 
			// TEXT AND LINK AND PRICES ETC
			-->
			<tr bgcolor="#fff">
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;" ><span>{{a2_row_1_TopTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;" ><span>{{a2_row_1_BottomTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:28px;color:#717171;line-height:35px;font-weight:bold;border-collapse:collapse;" ><?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?><span>{{a2_row_1_Price<?=$rowId?>}}</span></td>
			</tr>
			</tbody>
		</table>
	
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<!--
	// 2X2 BLOCK
	// 2_row_2
	-->
		<table width="300" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" >
				
				
				
				<a
				href="http://www.jdsports.co.uk/product/{{a2_row_2_PLU<?=$rowId?>}}" border="0">
				<img class="image_fix flex-on-mobile"
				style="display:block;border:none"
				src="http://i1.adis.ws/i/jpl/jd_{{a2_row_2_PLU<?=$rowId?>}}_a?w=300&h=375&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" />
				</a><!-- EDIT TEXT AND PLU --><!-- START WRAPPER MINI BOX -->
					







<div class="edit_wrapper" style="left:25px;top:25px;z-index:900015">
<a href="#" type="button" class="btn btn-warning btn-xs cog-right" style="color:#fff"
onClick="javascript:jQuery('#Edit_Region_2_row_2_<?=$rowId?>').slideDown();return false;">Edit <i class="fa fa-pencil-square-o fa-fw"></i></a>
<div class="wrapper_form" id="Edit_Region_2_row_2_<?=$rowId?>">
<div class="table-responsive">

<table class="table table-bordered table-striped">
<tr>
<td><strong>PLU:</strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_2_PLU<?=$rowId?>"  ng-model="a2_row_2_PLU<?=$rowId?>" ng-init="a2_row_2_PLU<?=$rowId?>='<?=$a2_row_2_PLU?>'" ></td>
</tr>
<tr>
<td><strong>Top Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_2_TopTxt<?=$rowId?>"  ng-model="a2_row_2_TopTxt<?=$rowId?>" ng-init="a2_row_2_TopTxt<?=$rowId?>='<?=$a2_row_2_TopTxt?>'" ></td>
</tr>
<tr>
<td><strong>Bottom Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_2_BottomTxt<?=$rowId?>"  ng-model="a2_row_2_BottomTxt<?=$rowId?>" ng-init="a2_row_2_BottomTxt<?=$rowId?>='<?=$a2_row_2_BottomTxt?>'" ></td>
</tr>
<tr>
<td><strong>Price: <small><em>(DO NOT HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="a2_row_2_Price<?=$rowId?>"  ng-model="a2_row_2_Price<?=$rowId?>" ng-init="a2_row_2_Price<?=$rowId?>='<?=$a2_row_2_Price?>'" ></td>
</tr>

<tr style="background:#a1c2df">
<td colspan="2" style="background:#a1c2df">

<a type="button" class="btn btn-primary btn-xs" onclick="javascript:Save_Row_2_row_2_<?=$rowId?>()" href="#">Save</a>
<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#Edit_Region_2_row_2_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>				



</td>
</tr>
</table>

</div>
</div>
</div><!-- END WRAPPER MINI BOX -->
				</td>
			</tr>
			<!-- 
			// TEXT AND LINK AND PRICES ETC
			-->
			<tr bgcolor="#fff">
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;" ><span>{{a2_row_2_TopTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;" ><span>{{a2_row_2_BottomTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:28px;color:#717171;line-height:35px;font-weight:bold;border-collapse:collapse;" ><?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?><span>{{a2_row_2_Price<?=$rowId?>}}</span></td>
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


<script type="text/javascript">

function Save_Row_2_row_1_<?=$rowId?>(){	
	
	// VARS
		var a2_row_1_PLU= $('#a2_row_1_PLU<?=$rowId?>').val();
		var a2_row_1_TopTxt= $('#a2_row_1_TopTxt<?=$rowId?>').val();
		var a2_row_1_BottomTxt= $('#a2_row_1_BottomTxt<?=$rowId?>').val();
		var a2_row_1_Price= $('#a2_row_1_Price<?=$rowId?>').val();
		
	
	// POST SQL UPDATES
	
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-2_row_a.php?erowid=<?=$libraryid?>&type=2_row&a2_row_1_PLU="+a2_row_1_PLU+"&a2_row_1_TopTxt="+a2_row_1_TopTxt+"&a2_row_1_BottomTxt="+a2_row_1_BottomTxt+"&a2_row_1_Price="+a2_row_1_Price+"",			
			dataType: "html"
		});
	
	// UI AND UX
	
		alert('Feather saved');
		$('#Edit_Region_2_row_1_<?=$rowId?>').slideUp();
	
}


function Save_Row_2_row_2_<?=$rowId?>(){	
	
	// VARS
		var a2_row_2_PLU= $('#a2_row_2_PLU<?=$rowId?>').val();
		var a2_row_2_TopTxt= $('#a2_row_2_TopTxt<?=$rowId?>').val();
		var a2_row_2_BottomTxt= $('#a2_row_2_BottomTxt<?=$rowId?>').val();
		var a2_row_2_Price= $('#a2_row_2_Price<?=$rowId?>').val();
		
	
	// POST SQL UPDATES
	
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-2_row_b.php?erowid=<?=$libraryid?>&type=2_row&a2_row_2_PLU="+a2_row_2_PLU+"&a2_row_2_TopTxt="+a2_row_2_TopTxt+"&a2_row_2_BottomTxt="+a2_row_2_BottomTxt+"&a2_row_2_Price="+a2_row_2_Price+"",			
			dataType: "html"
		});
	
	// UI AND UX
	
		alert('Feather saved');
		$('#Edit_Region_2_row_2_<?=$rowId?>').slideUp();
	
}


	
			
			
</script>