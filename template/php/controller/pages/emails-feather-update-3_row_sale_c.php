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
	// SALE 3 ROW	
	$Sale3Row_a2_row_3_PLU=mysql_real_escape_string($_GET['Sale3Row_a2_row_3_PLU']);
	$Sale3Row_a2_row_3_TopTxt=mysql_real_escape_string($_GET['Sale3Row_a2_row_3_TopTxt']);
	$Sale3Row_a2_row_3_BottomTxt=mysql_real_escape_string($_GET['Sale3Row_a2_row_3_BottomTxt']);
	$Sale3Row_a2_row_3_WasPrice=mysql_real_escape_string($_GET['Sale3Row_a2_row_3_WasPrice']);
	$Sale3Row_a2_row_3_Price=mysql_real_escape_string($_GET['Sale3Row_a2_row_3_Price']);
	
	
	
	// 
	// config sale_price
	//
	
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
	
$queryTemp_1_saleRow3 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale3Row_a2_row_3_PLU.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale3Row_a2_row_3_PLU"
			; 
';

mysql_query($queryTemp_1_saleRow3) or die(mysql_error());
$queryTemp_2_saleRow3 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale3Row_a2_row_3_TopTxt.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale3Row_a2_row_3_TopTxt"
			; 
';

mysql_query($queryTemp_2_saleRow3) or die(mysql_error());
$queryTemp_3_saleRow3 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale3Row_a2_row_3_BottomTxt.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale3Row_a2_row_3_BottomTxt"
			; 
';
mysql_query($queryTemp_3_saleRow3) or die(mysql_error());
$queryTemp_4_saleRow3 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale3Row_a2_row_3_WasPrice.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale3Row_a2_row_3_WasPrice"
			; 
';
mysql_query($queryTemp_4_saleRow3) or die(mysql_error());

	
	
$queryTemp_55_saleRow3 = '
			UPDATE
					`'.$dnm.'`.`emails_library_rows_data`
				SET
					`type_data` = "'.$Sale3Row_a2_row_3_Price.'",
					`uid` = "'.$_SESSION["userID"].'",
					`stamp` = "'.$date.'"
				WHERE
					`erowid` = "'.$erowid.'" AND
					`type` = "'.$type.'" AND
					`type_name` = "Sale3Row_a2_row_3_Price"
			; 
';
mysql_query($queryTemp_55_saleRow3) or die(mysql_error());

