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
include("inc/c.php");
if(is_customer_logged_in()){} else {header('Location: '.$appURL.'?ref='.$_SERVER['REQUEST_URI'].'');}

// VARS
$pageNameStripped = mysql_real_escape_string($_GET["page"]);
$pageName = clean($pageNameStripped);
include("".$appDir."template/php/controller/pages/".$pageName.".php");

// FUNCTIONS
tracker_page_clicking($_SESSION["userID"], $datec, $ipc, ucfirst($pageName));
?>

<!DOCTYPE html>
<html lang="en" ng-app="HAWK" ng-controller="AppCtrl">
<head>
<? include("".$appDir."template/php/view/global/header.php")?>
<title><?=ucfirst($pageName)?> - Dashboard - HAWK - JD Systems</title>
<link href="<?=$cdnDir?>css/hawk.css" rel="stylesheet">
</head>
<body class="ng-cloak">

<div class="rx">

<? include("".$appDir."template/php/view/global/header_navigation.php")?>

<div class="container">
	<div class="row">
		<div class="hawkPage" data-page="<?=$pageName?>" id="HawkPage-<?=$hawkPageSession?>-Off" ng-view>
		<? include("".$appDir."template/php/view/pages/".$pageName.".php"); ?>
		</div>
	</div>
</div>

<? include("".$appDir."template/php/view/global/footer_tracker.php")?>
<? include("".$appDir."template/php/view/global/footer.php")?>

</div>

</body>
</html>