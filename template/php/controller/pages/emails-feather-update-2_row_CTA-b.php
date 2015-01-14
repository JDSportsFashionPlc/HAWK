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
	$type=mysql_real_escape_string($_GET['type']);		
	
	
	$DoubleBoxItemURL2= mysql_real_escape_string($_GET['DoubleBoxItemURL2']);
	$DoubleBoxItemPictureURL2= mysql_real_escape_string($_GET['DoubleBoxItemPictureURL2']);
	
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
	
$queryTemp_1aaaa2_riw = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$DoubleBoxItemURL2.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "DoubleBoxItemURL2"
			; 
';

mysql_query($queryTemp_1aaaa2_riw) or die(mysql_error());


$queryTemp_2aaaaa_324 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$DoubleBoxItemPictureURL2.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "DoubleBoxItemPictureURL2"
			; 
';
mysql_query($queryTemp_2aaaaa_324) or die(mysql_error());




	