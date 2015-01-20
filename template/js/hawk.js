/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// START APP
var hawkApp = angular.module('HAWK', ['ngSanitize']);

	// LIBRARY AND MODULES
	
	// GLOBAL VARIABLES
	
	// FUNCTION APPCTRL
	// -- Apply to <body>
	hawkApp.controller('AppCtrl', function ($scope) {});
		
	// DIRECTIVE HTML RULES
	// -- Append HTML listening
	hawkApp.directive('dynamic', function ($compile) {
		return {
			restrict: 'A',
			replace: true,
			link: function (scope, ele, attrs) {
				scope.$watch(attrs.dynamic, function(html) {
				ele.html(html);
				$compile(ele.contents())(scope);
			});
		}};
	});
	
	// HAWK NAVIGATION
	// -- Apply to <nav> 
	// -- Main navigation for the builder, JSON future
	hawkApp.controller('hawkNavigation', function ($scope) {
	$scope.menu=[
		{'name':'Home',		'link':Link_Home },
		{'name':'Emails',		'link':Emails_home },
		{'name':'BillBoard',		'link':BillBoard_home },
		{'name':'Pages',		'link':Pages_home },
		{'name':'Stats',		'link':Stats_home },
		{'name':'Settings',	'link':Settings_home },
		{'name':'Logout',		'link':Link_Logout }
	  ];
	});
			
	// EMAIL BUILDER
	//	-- V1 THE WINGS SYSTEM
	
		// Builder -- Header Region -- //	
			// HEADER OF THE BUILDER
			
				// -- Blue Delivery Message bar
				var HawkEmailDeliveryCrl = function($scope) {};
								
				// -- Builder
				hawkApp.controller('HawkEmailContentCtrl', function($scope, $sce, $compile) {
				//var HawkEmailContentCtrl = function($scope, $sce) {
					
					// VARS
					$scope.rowId = "";
					
				});
				
				
				// HAWK FORM GENERATOR
				// -- Make code selectable
				$("#getHawkEmailCodeForLiveSendWingsv1").focus(function() {
					
					var $this = $(this);
					$this.select();
				
					// Work around Chrome's little problem
						$this.mouseup(function() {
					// Prevent further mouseup intervention
						$this.unbind("mouseup");
						return false;
					});
				});
		
	
// END APPLICATION
// -- EOF and EOM __;