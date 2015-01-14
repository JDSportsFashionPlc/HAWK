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
</style>

<h2>Emails - #<?=$eid?><br />[<?=ucfirst($getFaciaName=getFaciaName($row["faciaid"]));?>] <?=$row["name"]?> - <?=$row["launch_date"]?></h2>

	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<strong>INFORMATION:</strong> You can view all the current versions of this email below. Any developer can create a version using the builder. But you cannot delete a version; you may however delete the entire email and all versions at the bottom of this page. This action will be logged and an admin will approve the request.
	</div>
	
	<a href="<?=$Emails_link_bybuilderDo?>?eid=<?=$eid?>" class="btn btn-success">New Builder</a>
	<br /><br />

<div>

	<div class="well">
		<div class="row">
			
			<div class="col-md-9">
			
					
					<div class="table-responsive">
					
						<h3>Bird Life</h3>
					
						<form id="addEmailForm_<?=md5(rand)?>">
							<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Email LibraryId</th>
								<th>Email Developer</th>
								<th>Email Stamp</th>
								<th>Email Management</th>
								<th>Email Status</th>
							</tr>
							</thead>
							<tbody>
									
							<? while($r = mysql_fetch_array($email_list_library)){
							if (mysql_affected_rows()==0) { ?>
							
								<tr><td colspan="6"><strong><center>No versions exist for this campaign, <a href="<?=$Emails_link_bybuilderDo?>?eid=<?=$eid?>" class="btn btn-xs btn-success">create one</a></center></strong></td></tr>
								
							<? } else {	 ?>
							
							<tr>
								<td><?=$r["libraryid"]?></td>
								<td><?=ucfirst($getUserName=getUserName($row["uid"]));?></td>
								<td><?=$r["stamp"]?></td>
								<td><center><a href="<?=$Emails_link_bybuilderNew?><?=$r["eid"]?>&libraryid=<?=$r["libraryid"]?>" class="btn btn-xs btn-primary">View Builder</a></center></td>
								<td><center><a href="<?=$Emails_link_bybuilderNewHAWKv1ProcessSystem?><?=$r["eid"]?>&libraryid=<?=$r["libraryid"]?>&eid=<?=$r["eid"]?>" class="btn btn-xs btn-success">View Code</a></center></td>
							</tr>
							
							<? } // END OF ELSE				 			
							} ?>
							
							</tbody>
							</table>
						
						</form>
						
						<br />
						<a href="<?=$Emails_home?>" class="btn btn-xs btn-primary" type="button">Back to Emails</a> <button onclick="javascript:deleteEmailCampaign(<?=$eid?>);" class="btn btn-xs btn-danger" type="button">Delete Email</button>
					
					</div>
					
			</div>
			
			<div class="col-md-6"> </div>
			
		</div>
	</div>
  
</div>

<? } ?>
<script type="text/javascript" defer>
//	
function deleteEmailCampaign(id){	
	alert('Please Email your Hawk team leader to delete an email');
	// TODO AngularJS and PHP function to delete campaign in backup format
}

</script>