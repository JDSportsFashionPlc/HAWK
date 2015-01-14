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
	
	
	$a3_row_3_PLU= mysql_real_escape_string($_GET['a3_row_3_PLU']);
	$a3_row_3_TopTxt= mysql_real_escape_string($_GET['a3_row_3_TopTxt']);
	$a3_row_3_BottomTxt= mysql_real_escape_string($_GET['a3_row_3_BottomTxt']);
	$a3_row_3_Price= mysql_real_escape_string($_GET['a3_row_3_Price']);
	
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
	
$queryTemp_1 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$a3_row_3_PLU.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "a3_row_3_PLU"
			; 
';

mysql_query($queryTemp_1) or die(mysql_error());
$queryTemp_2 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$a3_row_3_TopTxt.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "a3_row_3_TopTxt"
			; 
';

mysql_query($queryTemp_2) or die(mysql_error());
$queryTemp_3 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$a3_row_3_BottomTxt.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "a3_row_3_BottomTxt"
			; 
';
mysql_query($queryTemp_3) or die(mysql_error());
$queryTemp_4 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$a3_row_3_Price.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "a3_row_3_Price"
			; 
';
mysql_query($queryTemp_4) or die(mysql_error());

	
	
	