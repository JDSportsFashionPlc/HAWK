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
	$SingleCTAFill= mysql_real_escape_string($_GET['SingleCTAFill']);
	$SingleCTAColour= mysql_real_escape_string($_GET['SingleCTAColour']);
	$SingleCTATopTxt= mysql_real_escape_string($_GET['SingleCTATopTxt']);
	$SingleCTABottomTxt= mysql_real_escape_string($_GET['SingleCTABottomTxt']);
	$SingleCTAURL= mysql_real_escape_string($_GET['SingleCTAURL']);
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
	
	$queryTemp = '
				UPDATE
						`'.$dnm.'`.`emails_library_rows_data`
					SET
						`type_data` = "#'.$SingleCTAFill.'",
						`uid` = "'.$_SESSION["userID"].'",
						`stamp` = "'.$date.'"
					WHERE
						`erowid` = "'.$erowid.'" AND
						`type` = "'.$type.'" AND
						`type_name` = "SingleCTAFill"
				; 
	';
	
	mysql_query($queryTemp) or die(mysql_error());
	
	$queryTemp1 = '
				UPDATE
						`'.$dnm.'`.`emails_library_rows_data`
					SET
						`type_data` = "#'.$SingleCTAColour.'",
						`uid` = "'.$_SESSION["userID"].'",
						`stamp` = "'.$date.'"
					WHERE
						`erowid` = "'.$erowid.'" AND
						`type` = "'.$type.'" AND
						`type_name` = "SingleCTAColour"
				; 
	';
	
	mysql_query($queryTemp1) or die(mysql_error());
	
	$queryTemp2 = '
				UPDATE
						`'.$dnm.'`.`emails_library_rows_data`
					SET
						`type_data` = "'.$SingleCTATopTxt.'",
						`uid` = "'.$_SESSION["userID"].'",
						`stamp` = "'.$date.'"
					WHERE
						`erowid` = "'.$erowid.'" AND
						`type` = "'.$type.'" AND
						`type_name` = "SingleCTATopTxt"
				; 
	';
	
	mysql_query($queryTemp2) or die(mysql_error());
	
	$queryTemp3 = '
				UPDATE
						`'.$dnm.'`.`emails_library_rows_data`
					SET
						`type_data` = "'.$SingleCTABottomTxt.'",
						`uid` = "'.$_SESSION["userID"].'",
						`stamp` = "'.$date.'"
					WHERE
						`erowid` = "'.$erowid.'" AND
						`type` = "'.$type.'" AND
						`type_name` = "SingleCTABottomTxt"
				; 
	';
	
	mysql_query($queryTemp3) or die(mysql_error());
	
	$queryTemp4 = '
				UPDATE
						`'.$dnm.'`.`emails_library_rows_data`
					SET
						`type_data` = "'.$SingleCTAURL.'",
						`uid` = "'.$_SESSION["userID"].'",
						`stamp` = "'.$date.'"
					WHERE
						`erowid` = "'.$erowid.'" AND
						`type` = "'.$type.'" AND
						`type_name` = "SingleCTAURL"
				; 
	';
	
	mysql_query($queryTemp4) or die(mysql_error());