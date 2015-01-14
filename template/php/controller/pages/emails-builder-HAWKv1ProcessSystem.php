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
		$libraryid=mysql_escape_string($_GET["libraryid"]);

	// DB
	// -- MAIN LOOP
		$email_list = mysql_query("SELECT * FROM `".$dnm."`.`emails` WHERE `eid`='".$eid."' ");
		$email_list_library = mysql_query("SELECT * FROM `".$dnm."`.`emails_library` WHERE `libraryid`='".$libraryid."' ");
		
		// THE ROWS
		// -- Row Group
		$emails_library_rows = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows` WHERE `libraryid`='".$libraryid."' ORDER BY `order` ASC");
		// -- Row Group Data
		//$emails_library_rows_data = mysql_query("SELECT * FROM `".$dnm."`.`emails_library_rows_data` WHERE `rowdataid`='".$libraryid."' ");