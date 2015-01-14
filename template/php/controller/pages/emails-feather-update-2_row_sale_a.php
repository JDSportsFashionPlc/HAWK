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
	
	
	$Sale_a2_row_1_PLU=mysql_real_escape_string($_GET['Sale_a2_row_1_PLU']);
	$Sale_a2_row_1_TopTxt=mysql_real_escape_string($_GET['Sale_a2_row_1_TopTxt']);
	$Sale_a2_row_1_BottomTxt=mysql_real_escape_string($_GET['Sale_a2_row_1_BottomTxt']);
	$Sale_a2_row_1_WasPrice=mysql_real_escape_string($_GET['Sale_a2_row_1_WasPrice']);
	$Sale_a2_row_1_Price=mysql_real_escape_string($_GET['Sale_a2_row_1_Price']);
	
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
	
$queryTemp_1 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale_a2_row_1_PLU.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale_a2_row_1_PLU"
			; 
';

mysql_query($queryTemp_1) or die(mysql_error());
$queryTemp_2 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale_a2_row_1_TopTxt.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale_a2_row_1_TopTxt"
			; 
';

mysql_query($queryTemp_2) or die(mysql_error());
$queryTemp_3 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale_a2_row_1_BottomTxt.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale_a2_row_1_BottomTxt"
			; 
';
mysql_query($queryTemp_3) or die(mysql_error());
$queryTemp_4 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale_a2_row_1_WasPrice.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale_a2_row_1_WasPrice"
			; 
';
mysql_query($queryTemp_4) or die(mysql_error());

	
	
$queryTemp_55 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale_a2_row_1_Price.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale_a2_row_1_Price"
			; 
';
mysql_query($queryTemp_55) or die(mysql_error());

