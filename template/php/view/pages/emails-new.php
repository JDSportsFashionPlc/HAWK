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

<style>
table, table tr, table td{text-align:left;font-size:13px;padding:3px}
table td strong{text-transform:uppercase}
</style>

<h2>Emails - New</h2>

<div>

	<div class="well">
		<div class="row">
			
			<div class="col-md-6">
					
					
					<div class="table-responsive"> 
					
						<form action="<?=$appURL?>template/php/controller/pages/emails-new-form.php" id="addEmailForm" name="addEmailForm" method="post" onsubmit="return addEmail()" >
						<table class="table table-striped table-bordered">
						
							<tr>
								<td><strong>Facia</strong> </td><td>
								<? getAllFaciasListForm(); ?> <small>Select Facia first</small></td>
							</tr>
							
							<tr>
								<td><strong>Name</strong></td><td><input ng-model="name" ng type="text" id="name" name="name" class="form-control" placeholder="Enter Email Name" required autofocus></td>
							</tr>
							
							<tr>
								<td><strong>Date</strong></td><td><input ng-model="launch_date" type="text" id="launch_date" name="launch_date" class="form-control calendarLaunch" placeholder="Enter Date" required autofocus></td>
							</tr>
							
						</table>
						</form>
						
						<br />
						<a href="<?=$Emails_home?>" class="btn btn-xs btn-primary" type="button">Cancel</a> <button onclick="javascript:addEmail();" class="btn btn-xs btn-success" type="button">Save Email</button>
					
					</div>
					
					
			</div>
			
			<div class="col-md-6">
			
					<h3>Preview Title</h3>
					<h4><em><span ng-bind-template="{{name}} - {{launch_date}}"></span></em></h4>
			
			</div>
			
		</div>
	</div>
  
</div>


<script type="text/javascript" defer>

function addEmail() {
	
	// VARS
	var flag = 0;
	
	// EMAIL NAME
	if($('#name').val()==""){
		flag=1;
		$('#name').addClass("errorformapps");
	} else {
		$('#name').removeClass("errorformapps")
	}
	if($('#launch_date').val()==""){
		flag=1;
		$('#launch_date').addClass("errorformapps");
	} else {
		$('#launch_date').removeClass("errorformapps")
	}
	
	if(flag==1){
	} else {
		
		var custForm;
		custForm = document.getElementById("addEmailForm");
		custForm.submit();
	}
	
}
</script>