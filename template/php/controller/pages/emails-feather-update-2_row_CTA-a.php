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
	
	
	$DoubleBoxItemURL1= mysql_real_escape_string($_GET['DoubleBoxItemURL1']);
	$DoubleBoxItemPictureURL1= mysql_real_escape_string($_GET['DoubleBoxItemPictureURL1']);
	
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
	
$queryTemp_1aaaa2_riw = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$DoubleBoxItemPictureURL1.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "DoubleBoxItemPictureURL1"
			; 
';

mysql_query($queryTemp_1aaaa2_riw) or die(mysql_error());


$queryTemp_2aaaaa_324 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$DoubleBoxItemURL1.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "DoubleBoxItemURL1"
			; 
';
mysql_query($queryTemp_2aaaaa_324) or die(mysql_error());




	