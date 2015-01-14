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
include("inc/c.php");

// LOGIN VALIDATION
if(is_customer_logged_in()){
	header('Location: '.$appURL.'page.php?page=home');
} else {}
?>

<!DOCTYPE html>
<html lang="en" ng-app="HAWK">
<head>
<? include("".$appDir."template/php/view/global/header.php")?>
<title>HAWK - JD Systems</title>
<link href="<?=$cdnDir?>css/signin.css?v=<?=rand()?>" rel="stylesheet">
</head>
<body>

<div class="rx">

<div class="container">

	<div>
		<form class="form-signin" role="form"  method="post"  name="login" id="login" action="<?=$Link_Login?>">
			<h2 class="form-signin-heading HAWKLOGO"><a href="<?=$appURL?>"><img src="<?=$cdnDir?>imgs/hawk.png" alt="HAWK"/></a></h2>
			<input type="username" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
			<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<input type="hidden" name="ref" id="ref" value="<?=$_GET["ref"]?>">
		</form>
	</div>

	<?php if($_GET["msg"]=="failed"){?>
		<div class="alert alert-danger"> Try again! </div>
	<? }?>
	<?php if($_GET["msg"]=="logout"){?>
		<div class="alert alert-danger"> <strong> Logged out!</strong> </div>
	<? }?>
	
</div>

<? include("".$appDir."template/php/view/global/footer_tracker.php")?>
<? include("".$appDir."template/php/view/global/footer.php")?>

</div>

</body>
</html>