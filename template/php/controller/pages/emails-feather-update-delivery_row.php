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
	$erowid=mysql_real_escape_string($_GET['erowid']);
	$type="delivery_row";
	$BlueHex=mysql_real_escape_string($_GET['BlueHex']);
	$BlueHexLinkColour=mysql_real_escape_string($_GET['BlueHexLinkColour']);
	$TopDeliveryMessage=mysql_real_escape_string($_GET['TopDeliveryMessage']);
	$BottomDeliveryMessage=mysql_real_escape_string($_GET['BottomDeliveryMessage']);
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
$queryTemp_1 = '
	UPDATE
			`'.$dnm.'`.`emails_library_rows_data`
		SET
			`type_data` = "#'.$BlueHex.'",
			`uid` = "'.$_SESSION["userID"].'",
			`stamp` = "'.$date.'"
		WHERE
			`erowid` = "'.$erowid.'" AND
			`type` = "'.$type.'" AND
			`type_name` = "BlueHex"
	; 
';
mysql_query($queryTemp_1) or die(mysql_error());

$queryTemp_2 = '
	UPDATE
			`'.$dnm.'`.`emails_library_rows_data`
		SET
			`type_data` = "#'.$BlueHexLinkColour.'",
			`uid` = "'.$_SESSION["userID"].'",
			`stamp` = "'.$date.'"
		WHERE
			`erowid` = "'.$erowid.'" AND
			`type` = "'.$type.'" AND
			`type_name` = "BlueHexLinkColour"
	; 
';
mysql_query($queryTemp_2) or die(mysql_error());

$queryTemp_3 = '
	UPDATE
			`'.$dnm.'`.`emails_library_rows_data`
		SET
			`type_data` = "'.$TopDeliveryMessage.'",
			`uid` = "'.$_SESSION["userID"].'",
			`stamp` = "'.$date.'"
		WHERE
			`erowid` = "'.$erowid.'" AND
			`type` = "'.$type.'" AND
			`type_name` = "TopDeliveryMessage"
	; 
';
mysql_query($queryTemp_3) or die(mysql_error());

$queryTemp_4 = '
	UPDATE
			`'.$dnm.'`.`emails_library_rows_data`
		SET
			`type_data` = "'.$BottomDeliveryMessage.'",
			`uid` = "'.$_SESSION["userID"].'",
			`stamp` = "'.$date.'"
		WHERE
			`erowid` = "'.$erowid.'" AND
			`type` = "'.$type.'" AND
			`type_name` = "BottomDeliveryMessage"
	; 
';
mysql_query($queryTemp_4) or die(mysql_error());


