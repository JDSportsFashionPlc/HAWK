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
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// VALIDATION
	if($eid==""){header("Location: ".$Emails_home."");die;}

// SQL MODEL
$r=mysql_query(
"
	INSERT INTO `".$dnm."`.`emails_library` (	
		`libraryid`,
		`eid`,
		`uid`,
		`stamp`
	)
	VALUES (
		NULL,
		'".$eid."',
		'".$_SESSION["userID"]."',
		'".$date."'
	)
");

// LAST ID
$id = mysql_insert_id();

// ADD EMAIL TRACKER
tracker_new_version($_SESSION["userID"], $date, $eid, $eid);
// MAKE EMPTY DELIVERY MESSAGE
create_blank_data_delivery($id);

// REDIRECTION
echo '<script type="text/javascript">window.location="'.$Emails_link_bybuilderNew.''.$eid.'&libraryid='.$id.'"</script>';