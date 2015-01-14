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
	$id=mysql_real_escape_string($_GET['id']);
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// VALIDATION

// SQL MODEL
$r=mysql_query(
"
	DELETE FROM `".$dnm."`.`emails_library_rows`
	WHERE (
		(`id` = '".$id."')
	);
");

// ADD EMAIL TRACKER  tracker_delete_version($_SESSION["userID"], $date, $libraryid, $libraryid);

// REDIRECTION
echo '<script type="text/javascript">window.location="'.$Emails_link_bybuilderNew.''.$_GET["gid"].'&libraryid='.$_GET["libraryid"].'"</script>';