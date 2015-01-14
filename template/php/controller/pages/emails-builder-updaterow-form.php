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
	$date=date("Y-m-d H:i:s");
	$ip=$_SERVER['REMOTE_ADDR'];

// @param -- c.php and m.php

	// VARS
		$libraryid=mysql_escape_string($_GET["libraryid"]);
		$action=mysql_real_escape_string($_POST['action']);
		$updateRecordsArray=$_POST['recordsArray'];
	
	// UPDATE ORDER
	// -- Update the emails_library_rows records below
			$listingCounter = 1;
			foreach ($updateRecordsArray as $recordIDValue) {
				
				$query = "UPDATE `".$dnm."`.`emails_library_rows` SET `order` = '" . $listingCounter . "' WHERE `id` = '" . $recordIDValue ."' AND `libraryid`='".$libraryid."'";
				mysql_query($query) or die('Error, insert query failed');
				$listingCounter = $listingCounter + 1;
			
			}

// ADD EMAIL TRACKERtracker_new_version($_SESSION["userID"], $date, $eid, $eid);
