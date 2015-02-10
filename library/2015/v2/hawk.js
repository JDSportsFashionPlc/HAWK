/***

* --- --- --- --- ---
* JD Sports Fashion plc
* Khaleel Mughal
* --- --- --- --- ---
* #HAWK
* --- --- --- --- ---

***/

// START APP
var hawkApp = angular.module('HAWK', []);
	
	// GLOBAL VARS
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; // Jan is 0!
		var yyyy = today.getFullYear();
		if(dd<10){dd='0'+dd} 
		if(mm<10){mm='0'+mm} 
		var today = dd+'-'+mm+'-'+yyyy;	

	// DATE INPUT
		jQuery(document).ready(function() {
			$('.inputDDMMYY').val(today)
		});

	// DATE PICKER
		jQuery(function(){$(".inputDDMMYY").datepicker({changeMonth:true,dateFormat:'dd-mm-yy',changeYear:true,yearRange:'2013:2019'});});

	// BRAND SETTINGS
	hawkApp.controller('faciaNameCtrl', ['$scope', function($scope) {
		$scope.facia = [
			{name:'JDUK', domain:'http://www.jdsports.co.uk/'},
			{name:'JDIE', domain:'http://www.jdsports.ie/'},
			{name:'JDFR', domain:'http://www.jdsports.fr/'},
			{name:'JDNL', domain:'http://www.jdsports.nl/'},
			{name:'JDES', domain:'http://www.jdsports.es/'}
		];
		// $scope.myFacia = $scope.facia[2];
	}]);

// END APPLICATION
// -- EOF and EOM __;