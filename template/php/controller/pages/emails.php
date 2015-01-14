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

	// DB
	// -- MAIN LOOP
	$email_list = mysql_query("SELECT * FROM `".$dnm."`.`emails` ORDER BY `eid` DESC");
	