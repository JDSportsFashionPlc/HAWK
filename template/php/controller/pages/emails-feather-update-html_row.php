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
	$rowId=mysql_real_escape_string($_GET['rowId']);
	$type="html_row";
	
	$html=mysql_real_escape_string($_POST['name']);
	
	/*echo $html;*/
	
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// SQL MODEL
$queryTemp_1 = '
	UPDATE
			`'.$dnm.'`.`emails_library_rows_data`
		SET
			`type_data` = "'.$html.'",
			`uid` = "'.$_SESSION["userID"].'",
			`stamp` = "'.$date.'"
		WHERE
			`erowid` = "'.$erowid.'" AND
			`type` = "'.$type.'" AND
			`type_name` = "HTMLBoxEnter"
	; 
';
mysql_query($queryTemp_1) or die(mysql_error());
