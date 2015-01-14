<div class="navbar navbar-default navbar-fixed-top" ng-controller="hawkNavigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="<?=$appURL?>" class="navbar-brand main_login_hawk">HAWK</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
	<li ng-repeat="menuLink in menu">
		<a href="{{menuLink.link}}">{{menuLink.name}}</a>
	</li>
</ul>
</div>
</div>
</div>