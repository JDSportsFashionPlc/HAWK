<?php
/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// HTML CODE FOLLOWED BELOW
// -- Paste outside, PHP is accepted.
// -- MVC
?>
<? while($row = mysql_fetch_array($email_list)){?>

<style>
table, table tr, table td{text-align:left;font-size:13px;padding:3px}
table td strong{text-transform:uppercase}
.Hawk_Email_Content table,.Hawk_Email_Content table tr,.Hawk_Email_Content table td{padding:0}
</style>

<h2>Emails Code Viewer - #<?=$eid?><br />[<?=ucfirst($getFaciaName=getFaciaName($row["faciaid"]));?>] <?=$row["name"]?> - <?=$row["launch_date"]?></h2>

<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><strong>YOU MUST READ THIS DISCLAIMER:</strong> HAWK is an email management platform that is currently in Beta. The system of HAWK is solely built to make managing of email structure and code easier for developers and marketing outlets of JD Sports Fashion PLC - the code published by HAWK in anyway or format whatsoever can therefore by responsible for marketing campaign problems such as loss of control, loss of finance, loss of branding adherence; mistakes in appearance, incorrect prices.. The system is human input driven and managed and therefore takes extra care when doing all work in HAWK.
</div>

<div>
	<div class="well">
		<div class="row">
			<div class="col-md-12">
				<div class="builder_body">
					<div class="builder_body_div">
						<input type="hidden" id="eid" name="eid" value="<?=$eid?>"/>
						<input type="hidden" id="uid" name="uid" value="<?=$_SESSION["userID"]?>"/>
						<input type="hidden" id="libraryid" name="libraryid" value="<?=$libraryid?>"/>
						<input type="hidden" id="launch_date" name="launch_date" value="<?=$row["launch_date"]?>"/>
						<input type="hidden" id="name" name="name" value="<?=$row["name"]?>"/>
						<input type="hidden" id="faciaid" name="faciaid" value="<?=$row["faciaid"]?>"/>
						<input type="hidden" id="hawkVersion" name="hawkVersion" value="<?=$appVersion?>"/>						
						<center>
						<textarea name="getHawkEmailCodeForLiveSendWingsv1" id="getHawkEmailCodeForLiveSendWingsv1" cols="30" style="width:95%;height:450px" rows="10"></textarea>
						<br /><br />
						<a href="<?=$cdnDir?>php/controller/pages/emails-HAWKMAKECODE-<?=ucfirst($getFaciaName=getFaciaName($row["faciaid"]));?>.php?eid=<?=$eid?>&libraryid=<?=$libraryid?>&faciaid=<?=$row["faciaid"]?>" class="btn brn-xl btn-success" style="width:99%" type="button" target="_blank" rel="external">VIEW AS HTML</a>
						<br /><br />
						<a href="#" onClick="javascript:();return false;" class="btn brn-xl btn-info" style="width:75%" type="button">COPY CODE (CTRL + C)</a>
						<br /><br />
						<a href="<?=$Emails_link_bybuilderNew?><?=$eid?>&libraryid=<?=$libraryid?>" class="btn btn-primary" style="width:51%" type="button">Back to Email Builder</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	var code_box = $('#getHawkEmailCodeForLiveSendWingsv1');
	$.get("<?=$cdnDir?>php/controller/pages/emails-HAWKMAKECODE-<?=ucfirst($getFaciaName=getFaciaName($row["faciaid"]));?>.php?eid=<?=$eid?>&libraryid=<?=$libraryid?>&faciaid=<?=$row["faciaid"]?>", function(data, status){
		code_box.val(data);
	});
	
</script>
<? } ?>
