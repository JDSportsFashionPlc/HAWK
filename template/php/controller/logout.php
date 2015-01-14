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

$datecc=date("Y-m-d H:i:s");
$ipcc=$_SERVER['REMOTE_ADDR'];
tracker_logged_out($_SESSION["userId"], $datecc, $ipcc);

// DESTROY USER SESSION
$_SESSION["loggedIn"]="0";
$_SESSION["userEmail"]="";
$_SESSION["userID"]="";
$_SESSION["userPerms"]="0";
session_destroy();
session_unset();

// REDIRECT VIA ECHO
// -- URL of redirected logout
echo '<script type="text/javascript">window.location="'.$appURL.'?msg=logout&clear_bird='.rand().'&hash='.sha1(rand).'"</script>'

?>