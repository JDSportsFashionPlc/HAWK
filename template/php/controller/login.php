<?php
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// LIBRARY
include("../../../inc/c.php");

// VARS
$username=$_POST['username'];
$password=$_POST['password'];
$referURL=$_POST['ref'];

// MYSQL
// -- Apply SQL Injection security
$r=mysql_query("SELECT * FROM `".$dnm."`.`users` WHERE `username`='".mysql_escape_string($username)."' AND `password`='".mysql_escape_string($password)."'");

// IF NOT A USER
// -- Validation against logins
if (mysql_affected_rows()==0) {
	
		// BLANK THE SESSION
		// -- Remove settings below are same as logout.php
			$_SESSION["loggedIn"]="0";
			$_SESSION["userEmail"]="";
			$_SESSION["userPerms"]="0";
			$_SESSION["userID"]="";
		
		// NOT LOGGED IN
		// -- echo(); or print(); are used to prevent the errors normally fired by using header();
			echo '<script type="text/javascript">window.location="'.$appURL.'?msg=failed&ref='.$referURL.'"</script>';
		
	} else {
	
		// LOGGED IN
		// -- Setup session of admin
			$row = mysql_fetch_array($r);
			$_SESSION["loggedIn"]="1";
			$_SESSION["userEmail"]=$row["email"];
			$_SESSION["userPerms"]=$row["type"];
			$_SESSION["userID"]=$row["id"];
			$date=date("Y-m-d H:i:s");
			$ip=$_SERVER['REMOTE_ADDR'];
			tracker_logged_in($row["id"], $date, $ip);
		
		// LOGGED IN
		// -- Redirect to application home, friendly slug /home, /dashboard etc
		// Normal login, no refer URL jump
		if($referURL==""){
			echo '<script type="text/javascript">window.location="'.$Link_Home.'"</script>';
		} else {
			// -- If the refer URL exists
			echo '<script type="text/javascript">window.location="'.$referURL.'&loginFrom=ReferURL"</script>';
		}
}
?>