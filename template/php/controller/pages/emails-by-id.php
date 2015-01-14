<?
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// MVC SYSTEM
// -- Functions and extended classes 
// @param -- c.php and m.php

	// VARS
	$eid=mysql_escape_string($_GET["id"]);

	// DB
	// -- MAIN LOOP
	$email_list = mysql_query("SELECT * FROM `".$dnm."`.`emails` WHERE `eid`='".$eid."' ");
	$email_list_library = mysql_query("SELECT * FROM `".$dnm."`.`emails_library` WHERE `eid`='".$eid."' ");
	