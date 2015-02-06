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

// ON LOAD EXECUTE UX AND UI ENVIROMENT
// UI AND UX FORM ON PAGE

	var css = "";
	css += '<style>';
	css += '.WebFormEditableRegions{margin:15px auto;background:#fff;width:750px;height:215px;padding:25px;border-radius:9px}';
	css += '.graybox{background:#eaeaea;border:1px solid #ccc;padding:9px;margin:7px 0;min-width:250px}'
	css += '</style>';
	
	var html = "";
	html += '<div class="WebFormEditableRegions">';
	html += '<span><strong>MAKE ADJUSTMENTS AS YOU NEED:</strong></span><br />';
	html += '<div class="graybox">What Facia?: <input ng-model="brandName" type="text" ng-init="brandName" style="width:255px;height:21px;vertical-align:middle" /></div>';
	html += '<div class="graybox">ENTER THE NAME OF THE CAMPAIGN: <input ng-model="faciaEmailCampaignName" ng-init="faciaEmailCampaignName=\'sample\'" type="text" style="width:255px;height:21px;vertical-align:middle" /></div>';
	html += '<div class="graybox">ENTER THE NAME OF THE DOMAIN: <input ng-model="faciaDomain" ng-init="faciaDomain=\'http://domain.ext/\'" type="text" style="width:255px;height:21px;vertical-align:middle" /></div>';
	
	html += '</div>';

	jQuery(document).ready(function() {

		jQuery('body').prepend(css);
		jQuery('body').prepend(html);

	});
	
// END APPLICATION
// -- EOF and EOM __;