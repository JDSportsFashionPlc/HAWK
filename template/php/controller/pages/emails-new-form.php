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
	$name=mysql_real_escape_string($_POST['name']);
	$faciaid=mysql_real_escape_string($_POST['faciaId']);
	$launch_date=mysql_real_escape_string($_POST['launch_date']);
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// VALIDATION
	if($name==""){header("Location: ".$Emails_link_new."&msg=error-name");die;}
	if($launch_date==""){header("Location: ".$Emails_link_new."&msg=error-launch_date");die;}
	if($_SESSION["userID"]==""){header("Location: ".$Link_Logout."&msg=error-uid");die;}

// SQL MODEL
$r=mysql_query(
"
	INSERT INTO `".$dnm."`.`emails` (
		`eid` ,
		`name` ,
		`uid` ,
		`last_mod` ,
		`ip` ,
		`faciaid` ,
		`launch_date` ,
		`stamp`
	)
	VALUES (
		NULL,
		'".$name."',
		'".$_SESSION["userID"]."',
		'".$date."',
		'".$ip."',
		'".$faciaid."',
		'".$launch_date."',
		'".$date."'
	)
");

// LAST ID
$id = mysql_insert_id();

// ADD EMAIL TRACKER
tracker_new($_SESSION["userID"], $faciaid, $date, $name, $launch_date, $ip, $id);

// REDIRECTION
echo '<script type="text/javascript">window.location="'.$Emails_home.'&msg=added-email"</script>';