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
	$eid=mysql_real_escape_string($_GET['eid']);
	$libraryid=mysql_real_escape_string($_GET['libraryid']);
	$hash=mysql_real_escape_string($_GET['hash']);
	$type=mysql_real_escape_string($_GET['type']);	
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// VALIDATION

// SQL MODEL
$r=mysql_query(
"
	INSERT INTO `".$dnm."`.`emails_library_rows` (	
		`id`,
		`libraryid`,
		`hash`,
		`order`,
		`stamp`,
		`type`
	)
	VALUES (
		NULL,
		'".$libraryid."',
		'".$hash."',
		'10',
		'".$date."',
		'".$type."'
	)
");

// LAST ID
$id = mysql_insert_id();

create_blank_data($id, $type);

// ADD EMAIL TRACKER -- tracker_new_version($_SESSION["userID"], $date, $eid, $eid);

// REDIRECTION
echo '<script type="text/javascript">window.location="'.$Emails_link_bybuilderNew.''.$eid.'&libraryid='.$libraryid.'&action=newrow&hash='.$hash.'&rowId='.$id.'&type='.$type.'"</script>';