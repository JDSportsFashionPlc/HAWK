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

<h2>Emails</h2>

<div>

	<div class="well">
		<div class="row">
			
			<div class="col-md-6">
					Sort by <select class="form-group-sm">
						<option value="">Latest</option>
						<option value="">Oldest</option>
						<option value="">By Author</option>
						<option value="">By Facia</option>
					</select> <input class="form-group-sm" type="search" class="form-control" placeholder="Search for Email">
				
			</div>
		
			<div class="col-md-6" style="text-align:right">
				<a href="<?=$Emails_link_new?>" class="btn btn-xs btn-success">New Email</a>
			</div>
			
		</div>
	</div>
  
	<div class="table-responsive"> 
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Email Id</th>
					<th>Email Name</th>
					<th>Email Developer</th>
					<th>Email Management</th>
				</tr>
			</thead>
			<tbody>
			<? while($row = mysql_fetch_array($email_list)){?>
			<?
			// VARS
			$dateLaunch = new DateTime($row["launch_date"]);
			$campaignDate = str_replace('-', '.', $dateLaunch->format('Y-m-d'));
			?>
				<tr>
					<td><?=$row["eid"]?></td>
					<td>
						[<?=ucfirst($getFaciaName=getFaciaName($row["faciaid"]));?>] <?=$row["name"]?> - <?=$campaignDate?><br />
						<small>Last modified: <?=$row["last_mod"]?></small>
					</td>
					<td><?=ucfirst($getUserName=getUserName($row["uid"]));?><br />
						<small><a href="<?=$Emails_link_byauthor?><?=$getUserId=getUserId($row["uid"]);?>">List all <?=ucfirst($getUserName=getUserName($row["uid"]));?>s emails</a></small></td>
					<td><a href="<?=$Emails_link_byid?><?=$row["eid"]?>" class="btn btn-xs btn-primary">View</a></td>
				</tr>
			<? } ?>
			</tbody>
		</table>
	</div>
  
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul>

</div>