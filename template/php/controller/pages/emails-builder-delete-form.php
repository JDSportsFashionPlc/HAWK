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
	$libraryid=mysql_real_escape_string($_GET['libraryid']);
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// VALIDATION
	if($libraryid==""){header("Location: ".$Emails_home."");die;}

// SQL MODEL
$r=mysql_query(
"
	DELETE FROM `".$dnm."`.`emails_library`
	WHERE (
		(`libraryid` = '".$libraryid."')
	);
");

// ADD EMAIL TRACKER
tracker_delete_version($_SESSION["userID"], $date, $libraryid, $libraryid);

// REDIRECTION
echo '<script type="text/javascript">window.location="'.$Emails_home.'"</script>';