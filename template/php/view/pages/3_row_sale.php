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
	
	// Row_1_3_by_2_Sale3Row
	
	$sql_a_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_1_PLU' ");
		while($rs1_Sale3Row = mysql_fetch_array($sql_a_Sale3Row)){
		$Sale3Row_a2_row_1_PLU=$rs1_Sale3Row["type_data"];
	}
	$sql_b_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_1_TopTxt' ");
		while($rs2_Sale3Row = mysql_fetch_array($sql_b_Sale3Row)){
		$Sale3Row_a2_row_1_TopTxt=$rs2_Sale3Row["type_data"];
	}
	$sql_c_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_1_BottomTxt' ");
		while($rs3_Sale3Row = mysql_fetch_array($sql_c_Sale3Row)){
		$Sale3Row_a2_row_1_BottomTxt=$rs3_Sale3Row["type_data"];
	}
	$sql_d_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_1_Price' ");
		while($rs4_Sale3Row = mysql_fetch_array($sql_d_Sale3Row)){
		$Sale3Row_a2_row_1_Price=$rs4_Sale3Row["type_data"];
	}
	$sql_dwas_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_1_WasPrice' ");
		while($rs4was_Sale3Row = mysql_fetch_array($sql_dwas_Sale3Row)){
		$Sale3Row_a2_row_1_WasPrice=$rs4was_Sale3Row["type_data"];
	}
	
	
	
	// Row_2_3_by_2_Sale3Row
	
	$sql_e_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_2_PLU' ");
		while($rs5_Sale3Row = mysql_fetch_array($sql_e_Sale3Row)){
		$Sale3Row_a2_row_2_PLU=$rs5_Sale3Row["type_data"];
	}
	
	$sql_f_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_2_TopTxt' ");
		while($rs6_Sale3Row = mysql_fetch_array($sql_f_Sale3Row)){
		$Sale3Row_a2_row_2_TopTxt=$rs6_Sale3Row["type_data"];
	}
	
	$sql_g_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_2_BottomTxt' ");
		while($rs7_Sale3Row = mysql_fetch_array($sql_g_Sale3Row)){
		$Sale3Row_a2_row_2_BottomTxt=$rs7_Sale3Row["type_data"];
	}
	
	$sql_h_Sale3Row = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_2_Price' ");
		while($rs8_Sale3Row = mysql_fetch_array($sql_h_Sale3Row)){
		$Sale3Row_a2_row_2_Price=$rs8_Sale3Row["type_data"];
	}
	$sql_dwas_Sale3Rowe = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_2_WasPrice' ");
		while($rs4was_Sale3Rowe = mysql_fetch_array($sql_dwas_Sale3Rowe)){
		$Sale3Row_a2_row_2_WasPrice=$rs4was_Sale3Rowe["type_data"];
	}	
	
	
	// Row_3_3_by_3_Sale3Row
	
	$sql_e_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_3_PLU' ");
		while($rs5_Sale3Row3 = mysql_fetch_array($sql_e_Sale3Row3)){
		$Sale3Row_a2_row_3_PLU=$rs5_Sale3Row3["type_data"];
	}
	
	$sql_f_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_3_TopTxt' ");
		while($rs6_Sale3Row3 = mysql_fetch_array($sql_f_Sale3Row3)){
		$Sale3Row_a2_row_3_TopTxt=$rs6_Sale3Row3["type_data"];
	}
	
	$sql_g_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_3_BottomTxt' ");
		while($rs7_Sale3Row3 = mysql_fetch_array($sql_g_Sale3Row3)){
		$Sale3Row_a2_row_3_BottomTxt=$rs7_Sale3Row3["type_data"];
	}
	
	$sql_h_Sale3Row3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_3_Price' ");
		while($rs8_Sale3Row3 = mysql_fetch_array($sql_h_Sale3Row3)){
		$Sale3Row_a2_row_3_Price=$rs8_Sale3Row3["type_data"];
	}
	$sql_dwas_Sale3Rowe3 = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='".$type."' AND `type_name`='Sale3Row_a2_row_3_WasPrice' ");
		while($rs4was_Sale3Rowe3 = mysql_fetch_array($sql_dwas_Sale3Rowe3)){
		$Sale3Row_a2_row_3_WasPrice=$rs4was_Sale3Rowe3["type_data"];
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
	// 3X3 BLOCK
	// 3_row_1
	-->
		<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" >
				
				
				
				<a
				href="http://www.jdsports.co.uk/product/{{Sale3Row_a2_row_1_PLU<?=$rowId?>}}" border="0">
				<img class="image_fix flex-on-mobile"
				style="display:block;border:none"
				src="http://i1.adis.ws/i/jpl/jd_{{Sale3Row_a2_row_1_PLU<?=$rowId?>}}_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" />
				</a><!-- EDIT TEXT AND PLU --><!-- START WRAPPER MINI BOX -->
					



<div class="edit_wrapper" style="left:25px;top:25px;z-index:900010">
<a href="#" type="button" class="btn btn-warning btn-xs cog-right" style="color:#fff"
onClick="javascript:jQuery('#Edit_Region_2_row_Sale3Row_1_<?=$rowId?>').slideDown();return false;">Edit <i class="fa fa-pencil-square-o fa-fw"></i></a>
<div class="wrapper_form" id="Edit_Region_2_row_Sale3Row_1_<?=$rowId?>">
<div class="table-responsive">
<table class="table table-bordered table-striped">
<tr>
<td><strong>PLU:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_1_PLU<?=$rowId?>"  ng-model="Sale3Row_a2_row_1_PLU<?=$rowId?>" ng-init="Sale3Row_a2_row_1_PLU<?=$rowId?>='<?=$Sale3Row_a2_row_1_PLU?>'" ></td>
</tr>
<tr>
<td><strong>Top Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_1_TopTxt<?=$rowId?>"  ng-model="Sale3Row_a2_row_1_TopTxt<?=$rowId?>" ng-init="Sale3Row_a2_row_1_TopTxt<?=$rowId?>='<?=$Sale3Row_a2_row_1_TopTxt?>'" ></td>
</tr>
<tr>
<td><strong>Bottom Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_1_BottomTxt<?=$rowId?>"  ng-model="Sale3Row_a2_row_1_BottomTxt<?=$rowId?>" ng-init="Sale3Row_a2_row_1_BottomTxt<?=$rowId?>='<?=$Sale3Row_a2_row_1_BottomTxt?>'" ></td>
</tr>


<td><strong>Was Price: <small><em>(DO NOT ENTER HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_1_WasPrice<?=$rowId?>"  ng-model="Sale3Row_a2_row_1_WasPrice<?=$rowId?>" ng-init="Sale3Row_a2_row_1_WasPrice<?=$rowId?>='<?=$Sale3Row_a2_row_1_WasPrice?>'" ></td>
</tr>

<tr>
<td><strong>Price: <small><em>(DO NOT ENTER HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_1_Price<?=$rowId?>"  ng-model="Sale3Row_a2_row_1_Price<?=$rowId?>" ng-init="Sale3Row_a2_row_1_Price<?=$rowId?>='<?=$Sale3Row_a2_row_1_Price?>'" ></td>
</tr>



<tr style="background:#a1c2df">
<td colspan="2" style="background:#a1c2df">
<a type="button" class="btn btn-primary btn-xs" onclick="javascript:Save_Row_2_row_Sale3Row_1_<?=$rowId?>()" href="#">Save</a>
<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#Edit_Region_2_row_Sale3Row_1_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>				
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
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>{{Sale3Row_a2_row_1_TopTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>{{Sale3Row_a2_row_1_BottomTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" >
					<span style="font-size:19px;color:#717171;">Was <del><?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?>{{Sale3Row_a2_row_1_WasPrice<?=$rowId?>}}</del></span><br />
					<span style="font-size:25px;color:#fb3b3c;">Now <?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?>{{Sale3Row_a2_row_1_Price<?=$rowId?>}}</span><br /><br />
				
				</td>
			</tr>
			</tbody>
		</table>
	
	
		
		
		
		
		
		
		
		
		
		
		
	<!--
	// 3X3 BLOCK
	// 3_row_2
	-->
		<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" >
				
				
				<a
				href="http://www.jdsports.co.uk/product/{{Sale3Row_a2_row_2_PLU<?=$rowId?>}}" border="0">
				<img class="image_fix flex-on-mobile"
				style="display:block;border:none"
				src="http://i1.adis.ws/i/jpl/jd_{{Sale3Row_a2_row_2_PLU<?=$rowId?>}}_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" />
				</a><!-- EDIT TEXT AND PLU --><!-- START WRAPPER MINI BOX -->
					



<div class="edit_wrapper" style="left:25px;top:25px;z-index:900015">
<a href="#" type="button" class="btn btn-warning btn-xs cog-right" style="color:#fff"
onClick="javascript:jQuery('#Edit_Region_2_row_Sale3Row_2_<?=$rowId?>').slideDown();return false;">Edit <i class="fa fa-pencil-square-o fa-fw"></i></a>
<div class="wrapper_form" id="Edit_Region_2_row_Sale3Row_2_<?=$rowId?>">
<div class="table-responsive">
<table class="table table-bordered table-striped">
<tr>
<td><strong>PLU:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_2_PLU<?=$rowId?>"  ng-model="Sale3Row_a2_row_2_PLU<?=$rowId?>" ng-init="Sale3Row_a2_row_2_PLU<?=$rowId?>='<?=$Sale3Row_a2_row_2_PLU?>'" ></td>
</tr>
<tr>
<td><strong>Top Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_2_TopTxt<?=$rowId?>"  ng-model="Sale3Row_a2_row_2_TopTxt<?=$rowId?>" ng-init="Sale3Row_a2_row_2_TopTxt<?=$rowId?>='<?=$Sale3Row_a2_row_2_TopTxt?>'" ></td>
</tr>
<tr>
<td><strong>Bottom Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_2_BottomTxt<?=$rowId?>"  ng-model="Sale3Row_a2_row_2_BottomTxt<?=$rowId?>" ng-init="Sale3Row_a2_row_2_BottomTxt<?=$rowId?>='<?=$Sale3Row_a2_row_2_BottomTxt?>'" ></td>
</tr>


<td><strong>Was Price: <small><em>(DO NOT ENTER HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_2_WasPrice<?=$rowId?>"  ng-model="Sale3Row_a2_row_2_WasPrice<?=$rowId?>" ng-init="Sale3Row_a2_row_2_WasPrice<?=$rowId?>='<?=$Sale3Row_a2_row_2_WasPrice?>'" ></td>
</tr>

<tr>
<td><strong>Price: <small><em>(DO NOT ENTER HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_2_Price<?=$rowId?>"  ng-model="Sale3Row_a2_row_2_Price<?=$rowId?>" ng-init="Sale3Row_a2_row_2_Price<?=$rowId?>='<?=$Sale3Row_a2_row_2_Price?>'" ></td>
</tr>



<tr style="background:#a1c2df">
<td colspan="2" style="background:#a1c2df">
<a type="button" class="btn btn-primary btn-xs" onclick="javascript:Save_Row_2_row_Sale3Row_2_<?=$rowId?>()" href="#">Save</a>
<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#Edit_Region_2_row_Sale3Row_2_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>				
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
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>{{Sale3Row_a2_row_2_TopTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>{{Sale3Row_a2_row_2_BottomTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" >
					<span style="font-size:19px;color:#717171;">Was <del><?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?>{{Sale3Row_a2_row_2_WasPrice<?=$rowId?>}}</del></span><br />
					<span style="font-size:25px;color:#fb3b3c;">Now <?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?>{{Sale3Row_a2_row_2_Price<?=$rowId?>}}</span><br /><br /> 
				
				</td>
			</tr>
			</tbody>
		</table>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
		
		
		
		
		
		
		
		
		
		
	<!--
	// 3X3 BLOCK
	// 3_row_3
	-->
		<table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="position:relative;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt" bgcolor="#fff">
			<tbody>
			<!--
			// IMAGE AND LINK
			-->
			<tr>
				<td width="100%" align="center" class="devicewidth" style="border-collapse:collapse;" >
				
				
				<a
				href="http://www.jdsports.co.uk/product/{{Sale3Row_a2_row_3_PLU<?=$rowId?>}}" border="0">
				<img class="image_fix flex-on-mobile"
				style="display:block;border:none"
				src="http://i1.adis.ws/i/jpl/jd_{{Sale3Row_a2_row_3_PLU<?=$rowId?>}}_a?w=200&h=220&qlt=80&unsharp=0,1,1,7&img404=jd_imagemissing"  border="0" />
				</a><!-- EDIT TEXT AND PLU --><!-- START WRAPPER MINI BOX -->
					



<div class="edit_wrapper" style="left:25px;top:25px;z-index:900020">
<a href="#" type="button" class="btn btn-warning btn-xs cog-right" style="color:#fff"
onClick="javascript:jQuery('#Edit_Region_2_row_Sale3Row_3_<?=$rowId?>').slideDown();return false;">Edit <i class="fa fa-pencil-square-o fa-fw"></i></a>
<div class="wrapper_form" id="Edit_Region_2_row_Sale3Row_3_<?=$rowId?>">
<div class="table-responsive">
<table class="table table-bordered table-striped">
<tr>
<td><strong>PLU:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_3_PLU<?=$rowId?>"  ng-model="Sale3Row_a2_row_3_PLU<?=$rowId?>" ng-init="Sale3Row_a2_row_3_PLU<?=$rowId?>='<?=$Sale3Row_a2_row_3_PLU?>'" ></td>
</tr>
<tr>
<td><strong>Top Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_3_TopTxt<?=$rowId?>"  ng-model="Sale3Row_a2_row_3_TopTxt<?=$rowId?>" ng-init="Sale3Row_a2_row_3_TopTxt<?=$rowId?>='<?=$Sale3Row_a2_row_3_TopTxt?>'" ></td>
</tr>
<tr>
<td><strong>Bottom Text:</strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_3_BottomTxt<?=$rowId?>"  ng-model="Sale3Row_a2_row_3_BottomTxt<?=$rowId?>" ng-init="Sale3Row_a2_row_3_BottomTxt<?=$rowId?>='<?=$Sale3Row_a2_row_3_BottomTxt?>'" ></td>
</tr>


<td><strong>Was Price: <small><em>(DO NOT ENTER HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_3_WasPrice<?=$rowId?>"  ng-model="Sale3Row_a2_row_3_WasPrice<?=$rowId?>" ng-init="Sale3Row_a2_row_3_WasPrice<?=$rowId?>='<?=$Sale3Row_a2_row_3_WasPrice?>'" ></td>
</tr>

<tr>
<td><strong>Price: <small><em>(DO NOT ENTER HTML - currency is automatic)</em></small></strong></td>
</tr>
<tr>
<td><input type="text" id="Sale3Row_a2_row_3_Price<?=$rowId?>"  ng-model="Sale3Row_a2_row_3_Price<?=$rowId?>" ng-init="Sale3Row_a2_row_3_Price<?=$rowId?>='<?=$Sale3Row_a2_row_3_Price?>'" ></td>
</tr>



<tr style="background:#a1c2df">
<td colspan="2" style="background:#a1c2df">
<a type="button" class="btn btn-primary btn-xs" onclick="javascript:Save_Row_2_row_Sale3Row_3_<?=$rowId?>()" href="#">Save</a>
<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#Edit_Region_2_row_Sale3Row_3_<?=$rowId?>').slideUp();return false;" href="#">Cancel</a>				
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
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:400;border-collapse:collapse;"><span>{{Sale3Row_a2_row_3_TopTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;font-size:18px;color:#717171;line-height:35px;font-weight:100;border-collapse:collapse;"><span>{{Sale3Row_a2_row_3_BottomTxt<?=$rowId?>}}</span></td>
				</tr>
				<tr>
				<td bgcolor="#fff" align="center" st-title="fulltext-heading" style="text-align:center;font-family:Helvetica, arial, sans-serif;line-height:23px;font-weight:bold;border-collapse:collapse;" >
					<span style="font-size:19px;color:#717171;">Was <del><?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?>{{Sale3Row_a2_row_3_WasPrice<?=$rowId?>}}</del></span><br />
					<span style="font-size:25px;color:#fb3b3c;">Now <?=$getCurrency=getFaciaCurrency($_GET["faciaid"])?>{{Sale3Row_a2_row_3_Price<?=$rowId?>}}</span><br /><br /> 
				
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


<script type="text/javascript">

function Save_Row_2_row_Sale3Row_1_<?=$rowId?>(){	
	
	// VARS
		var Sale3Row_a2_row_1_PLU=$('#Sale3Row_a2_row_1_PLU<?=$rowId?>').val();
		var Sale3Row_a2_row_1_TopTxt=$('#Sale3Row_a2_row_1_TopTxt<?=$rowId?>').val();
		var Sale3Row_a2_row_1_BottomTxt=$('#Sale3Row_a2_row_1_BottomTxt<?=$rowId?>').val();
		var Sale3Row_a2_row_1_WasPrice=$('#Sale3Row_a2_row_1_WasPrice<?=$rowId?>').val();
		var Sale3Row_a2_row_1_Price=$('#Sale3Row_a2_row_1_Price<?=$rowId?>').val();
		
	
	// POST SQL UPDATES
	
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-3_row_sale_a.php?erowid=<?=$libraryid?>&type=3_row_sale&Sale3Row_a2_row_1_PLU="+Sale3Row_a2_row_1_PLU+"&Sale3Row_a2_row_1_TopTxt="+Sale3Row_a2_row_1_TopTxt+"&Sale3Row_a2_row_1_BottomTxt="+Sale3Row_a2_row_1_BottomTxt+"&Sale3Row_a2_row_1_WasPrice="+Sale3Row_a2_row_1_WasPrice+"&Sale3Row_a2_row_1_Price="+Sale3Row_a2_row_1_Price+"",			
			dataType: "html"
		});
	
	// UI AND UX
	
		alert('Feather saved');
		$('#Edit_Region_2_row_Sale3Row_1_<?=$rowId?>').slideUp();
	
}


function Save_Row_2_row_Sale3Row_2_<?=$rowId?>(){	
	
	// VARS
		var Sale3Row_a2_row_2_PLU= $('#Sale3Row_a2_row_2_PLU<?=$rowId?>').val();
		var Sale3Row_a2_row_2_TopTxt= $('#Sale3Row_a2_row_2_TopTxt<?=$rowId?>').val();
		var Sale3Row_a2_row_2_BottomTxt= $('#Sale3Row_a2_row_2_BottomTxt<?=$rowId?>').val();
		var Sale3Row_a2_row_2_WasPrice= $('#Sale3Row_a2_row_2_WasPrice<?=$rowId?>').val();
		var Sale3Row_a2_row_2_Price= $('#Sale3Row_a2_row_2_Price<?=$rowId?>').val();
		
	
	// POST SQL UPDATES
	
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-3_row_sale_b.php?erowid=<?=$libraryid?>&type=3_row_sale&Sale3Row_a2_row_2_PLU="+Sale3Row_a2_row_2_PLU+"&Sale3Row_a2_row_2_TopTxt="+Sale3Row_a2_row_2_TopTxt+"&Sale3Row_a2_row_2_BottomTxt="+Sale3Row_a2_row_2_BottomTxt+"&Sale3Row_a2_row_2_WasPrice="+Sale3Row_a2_row_2_WasPrice+"&Sale3Row_a2_row_2_Price="+Sale3Row_a2_row_2_Price+"",			
			dataType: "html"
		});
	
	// UI AND UX
	
		alert('Feather saved');
		$('#Edit_Region_2_row_Sale3Row_2_<?=$rowId?>').slideUp();
	
}


function Save_Row_2_row_Sale3Row_3_<?=$rowId?>(){	
	
	// VARS
		var Sale3Row_a2_row_3_PLU= $('#Sale3Row_a2_row_3_PLU<?=$rowId?>').val();
		var Sale3Row_a2_row_3_TopTxt= $('#Sale3Row_a2_row_3_TopTxt<?=$rowId?>').val();
		var Sale3Row_a2_row_3_BottomTxt= $('#Sale3Row_a2_row_3_BottomTxt<?=$rowId?>').val();
		var Sale3Row_a2_row_3_WasPrice= $('#Sale3Row_a2_row_3_WasPrice<?=$rowId?>').val();
		var Sale3Row_a2_row_3_Price= $('#Sale3Row_a2_row_3_Price<?=$rowId?>').val();
		
	
	// POST SQL UPDATES
	
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-3_row_sale_c.php?erowid=<?=$libraryid?>&type=3_row_sale&Sale3Row_a2_row_3_PLU="+Sale3Row_a2_row_3_PLU+"&Sale3Row_a2_row_3_TopTxt="+Sale3Row_a2_row_3_TopTxt+"&Sale3Row_a2_row_3_BottomTxt="+Sale3Row_a2_row_3_BottomTxt+"&Sale3Row_a2_row_3_WasPrice="+Sale3Row_a2_row_3_WasPrice+"&Sale3Row_a2_row_3_Price="+Sale3Row_a2_row_3_Price+"",			
			dataType: "html"
		});
	
	// UI AND UX
	
		alert('Feather saved');
		$('#Edit_Region_2_row_Sale3Row_3_<?=$rowId?>').slideUp();
	
}
	
			
			
</script>