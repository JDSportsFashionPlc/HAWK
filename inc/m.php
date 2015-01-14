<?php
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// GLOBAL ANGULAR VARS
	// Hawk Page Session, unique for the page and called through JS, JSON, PHP
	// and mySQL - all application is based on the SHA1() algorithm
	$hawkPageSession = sha1(rand);

// LOGIN VALIDATION
function is_customer_logged_in() {
	if($_SESSION["loggedIn"]=="1"){
		return true;
	}else{
		return false;
	}
}

// LOGIN VALIDATION ACROSS DOMAINS
function is_logged_in() {
	if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]=="1"){
		return true;
	}else{
		return false;
	}	
}

// SHOW ERRORS
if(isset($_GET["debug"]) && $_GET["debug"]=="true")
{
	error_reporting(E_ALL);
	ini_set('display_errors',1);	
}

// LOGIN VALIDATION ACROSS DOMAINS
function clean($string) {
	$string = str_replace(' ', '-', $string);						// Replaces all spaces with hyphens.
	return preg_replace('/[^A-Za-z0-9\-]/', '', $string);		// Removes special chars.
	return preg_replace('/-+/', '-', $string);					// Replaces multiple hyphens with single one.
}

// BEGIN FUNCTION FRAMEWORKS
// -- VARIOUS FUNCTIONS TO PRODUCE THE OUTPUTS AS NEEDED

	function getUserId($uid){
		global $dnm;
		$sql = mysql_query("SELECT * FROM `".$dnm."`.`users` WHERE `id`='".$uid."'");
		$sql_row = mysql_fetch_array($sql);
		$var_user_id = $sql_row["id"];
		return $var_user_id;
	}
	
	function getUserName($uid){
		global $dnm;
		$sql = mysql_query("SELECT * FROM `".$dnm."`.`users` WHERE `id`='".$uid."'");
		$sql_row = mysql_fetch_array($sql);
		$var_username = $sql_row["username"];
		return $var_username;
	}
	
	function getFaciaId($fid){
		global $dnm;
		$sql = mysql_query("SELECT * FROM `".$dnm."`.`facias` WHERE `faciaid`='".$fid."'");
		$sql_row = mysql_fetch_array($sql);
		$var_faciaid = $sql_row["faciaid"];
		return $var_faciaid;
	}
	
	function getFaciaName($fid){
		global $dnm;
		$sql = mysql_query("SELECT * FROM `".$dnm."`.`facias` WHERE `faciaid`='".$fid."'");
		$sql_row = mysql_fetch_array($sql);
		$var_facianame = $sql_row["facianame"];
		return $var_facianame;
	}
	
	function getFaciaCurrency($fid){
		global $dnm;
		$sql = mysql_query("SELECT * FROM `".$dnm."`.`facias` WHERE `faciaid`='".$fid."'");
		$sql_row = mysql_fetch_array($sql);
		$var_symbol = $sql_row["symbol"];
		return $var_symbol;
	}
	
	function tracker_logged_in($uid, $stamp, $ip){
		global $dnm;
		$sql=mysql_query("
			INSERT INTO `".$dnm."`.`emails_log`
			(`logid`, `eid`, `uid`, `action`, `dump`, `stamp_date`, `stamp_datetime`, `ip`)
			VALUES
			(NULL, '', '".$uid."', '1', '', '".$stamp."', '".$stamp."', '".$ip."');
		");	
	}
	
	function tracker_page_clicking($uid, $stamp, $ip, $pageName){
		global $dnm;
		$sql=mysql_query("
			INSERT INTO `".$dnm."`.`emails_log`
			(`logid`, `eid`, `uid`, `action`, `dump`, `stamp_date`, `stamp_datetime`, `ip`)
			VALUES
			(NULL, '', '".$uid."', '2', '".$pageName."', '".$stamp."', '".$stamp."', '".$ip."');
		");	
	}
	
	function tracker_logged_out($uid, $stamp, $ip){
		global $dnm;
		$sql=mysql_query("
			INSERT INTO `".$dnm."`.`emails_log`
			(`logid`, `eid`, `uid`, `action`, `dump`, `stamp_date`, `stamp_datetime`, `ip`)
			VALUES
			(NULL, '', '".$uid."', '3', '', '".$stamp."', '".$stamp."', '".$ip."');
		");	
	}
	
	function tracker_new($uid, $faciaid, $date, $name, $launch_date, $ip, $eid){
		global $dnm;
		$sql=mysql_query("
			INSERT INTO `".$dnm."`.`emails_log`
			(`logid`, `eid`, `uid`, `action`, `dump`, `stamp_date`, `stamp_datetime`, `ip`)
			VALUES
			(NULL, '".$eid."', '".$uid."', '5', 'New Email Created - ".$name."', '".$date."', '".$date."', '".$ip."');
		");	
	}
	
	function tracker_new_version($uid, $date, $name, $eid){
		global $dnm;
		$sql=mysql_query("
			INSERT INTO `".$dnm."`.`emails_log`
			(`logid`, `eid`, `uid`, `action`, `dump`, `stamp_date`, `stamp_datetime`, `ip`)
			VALUES
			(NULL, '".$eid."', '".$uid."', '9', 'New Email Version Made - ".$name."', '".$date."', '".$date."', '');
		");	
	}
	
	function tracker_delete_version($uid, $date, $name, $eid){
		global $dnm;
		$sql=mysql_query("
			INSERT INTO `".$dnm."`.`emails_log`
			(`logid`, `eid`, `uid`, `action`, `dump`, `stamp_date`, `stamp_datetime`, `ip`)
			VALUES
			(NULL, '".$eid."', '".$uid."', '15', 'Delete Email Version - ".$name."', '".$date."', '".$date."', '');
		");	
	}
	
	function getAllFaciasListForm(){
		global $dnm;
		$sql	=	mysql_query("SELECT * FROM `".$dnm."`.`facias`");
		$html = '<select name="faciaId" id="faciaId" required>';
		while($r = mysql_fetch_array($sql)) {
			$html .=	'<option name="'.$r["facianame"].'" value="'.$r["faciaid"].'">'.$r["facianame"].'</option>';
		}
		$html .= '</select>';
		echo $html;
	}

?>