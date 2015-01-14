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
	$libraryid=$_GET["libraryid"];
	
	$sql_a = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='TopDeliveryMessage' ");
	while($rs1 = mysql_fetch_array($sql_a)){
		$TopDeliveryMessage=$rs1["type_data"];
	}
	$sql_b = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='BottomDeliveryMessage' ");
	while($rs2 = mysql_fetch_array($sql_b)){
		$BottomDeliveryMessage=$rs2["type_data"];
	}
	$sql_c = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='BlueHex' ");
	while($rs3 = mysql_fetch_array($sql_c)){
		$BlueHex=$rs3["type_data"];
	}
	$sql_d = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `erowid`='".$libraryid."' AND `type`='delivery_row' AND `type_name`='BlueHexLinkColour' ");
	while($rs4 = mysql_fetch_array($sql_d)){
		$BlueHexLinkColour=$rs4["type_data"];
	}
?>

<div style="clear:both;background:{{BlueHex}};color:{{BlueHexLinkColour}};height:60px;text-align:center;position:relative">
	<div style="text-decoration:none;display:block;padding-bottom:6px;padding-top:9px;text-decoration:none">
	<span style="font-weight:bold;font-size:16px;line-height:22px;font-family:Helvetica,Arial,sans-serif;color:{{BlueHexLinkColour}}">{{TopDeliveryMessage}}<br />
	<span style="font-size:14px;font-weight:100;color:{{$BlueHexLinkColour}}">{{BottomDeliveryMessage}}</span>
</div>
														
<!-- COLOUR --><!-- START WRAPPER MINI BOX -->
<div class="edit_wrapper-top" style="left:25px;top:25px;z-index:999999">
<a href="#" type="button" class="btn btn-warning btn-xs cog-left" style="color:#fff" onClick="javascript:jQuery('#deliv_msg_color').slideDown();return false;">Edit <i class="fa fa-paint-brush fa-fw"></i></a>
<div class="wrapper_form" id="deliv_msg_color">
<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<td><strong>Background hex#:</strong></td>
		</tr>
		<tr>
			<td><input type="text" ng-model="BlueHex" value="<?=$BlueHex?>" id="BlueHex" ng-init="BlueHex='<?=$BlueHex?>'" /></td>
		</tr>
		<tr>
			<td><strong>Link hex#:</strong></td>
		</tr>
		<tr>
			<td><input type="text" ng-model="BlueHexLinkColour" value="<?=$BlueHexLinkColour?>" id="BlueHexLinkColour"  ng-init="BlueHexLinkColour='<?=$BlueHexLinkColour?>'"  /></td>
		</tr>
		<tr>
			<td><strong>Top Message:</strong></td>
		</tr>
		<tr>
			<td><input type="text" ng-model="TopDeliveryMessage" value="<?=$TopDeliveryMessage?>" id="TopDeliveryMessage" ng-init="TopDeliveryMessage='<?=$TopDeliveryMessage?>'" /></td>
		</tr>
		<tr>
			<td><strong>Bottom Message:</strong></td>
		</tr>
		<tr>
			<td><input type="text" ng-model="BottomDeliveryMessage" value="<?=$BottomDeliveryMessage?>" id="BottomDeliveryMessage"  ng-init="BottomDeliveryMessage='<?=$BottomDeliveryMessage?>'" /></td>
		</tr>
		<tr style="background:#a1c2df">
			<td colspan="2" style="background:#a1c2df">
			<a type="button" class="btn btn-primary btn-xs" onclick="javascript:saveRow_delivery_row_()" href="#">Save</a>
			<a type="button" class="btn btn-danger btn-xs" onclick="javascript:jQuery('#deliv_msg_color').slideUp();return false;" href="#">Cancel</a>
			</td>
		</tr>
	</table>
</div>
</div>
</div><!-- END WRAPPER MINI BOX -->

<script>

function saveRow_delivery_row_(){
	
	
	// VARS
		var BlueHex= $('#BlueHex').val();
		var BlueHexLinkColour=$('#BlueHexLinkColour').val();
		var TopDeliveryMessage=$('#TopDeliveryMessage').val();
		var BottomDeliveryMessage= $('#BottomDeliveryMessage').val();
		
		BlueHex = BlueHex.replace('#', '');
		BlueHexLinkColour = BlueHexLinkColour.replace('#', '');
	
	// POST SQL UPDATES
	
		$.ajax({
			type: "POST",
			url: "<?=$cdnDir?>php/controller/pages/emails-feather-update-delivery_row.php?erowid=<?=$libraryid?>&type=delivery_row&BlueHex="+BlueHex+"&BlueHexLinkColour="+BlueHexLinkColour+"&TopDeliveryMessage="+TopDeliveryMessage+"&BottomDeliveryMessage="+BottomDeliveryMessage+"",
			dataType: "html"
		});
	
	// UI AND UX
	
		alert('Feather saved');
		$('#deliv_msg_color').slideUp();
	
}
</script>
