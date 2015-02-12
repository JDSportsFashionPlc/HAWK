/***
 
* --- --- --- --- ---
* JD Sports Fashion plc
* Monetate, Inc.
* Khaleel Mughal
* --- --- --- --- ---
* #JDSEARCHVALIDATIONHEADER
* --- --- --- --- ---
 
**/


    // REMOVE SEARCH
    // -- First we should completely delete the search bar
    jQuery("#search").remove();
 
    // VARS
    // -- Lets build the new search bar in a variable for immediate rendering
    var valhtml ='';
   
        // THE FORM HTML
       
            valhtml += '<form action="/webapp/wcs/stores/servlet/CategoryDisplay" method="post" id="search" name="headerSearchm" onsubmit="return submitSearchm();">';
            valhtml += '<input style="width:220px" name="cm_re" value="Global-_-Header-_-Search" type="hidden">';
            valhtml += '<input style="width:220px" name="storeId" value="10151" type="hidden">';
            valhtml += '<input style="width:220px" name="catalogId" value="10551" type="hidden">';
            valhtml += '<input style="width:220px" name="langId" value="-1" type="hidden">';
            valhtml += '<input style="width:220px" name="mfpartNumber" value="" type="hidden">';
            valhtml += '<input style="width:220px" name="langId" value="search" type="hidden">';
            valhtml += '<input style="width:220px" name="categoryId" value="12203" type="hidden">';
            valhtml += '<label>Search site</label>';
            valhtml += '<input style="width:440px;left:0 !important;border:1px solid #fff;font-style:italic;" class="searchQParameter" id="searchQuery" name="freeText" value="E.g Nike" type="text"> ';
            valhtml += '<a class="submitSearchButton" href="#" onclick="javascript:submitSearchm(\'document.headerSearchm\')" title="Search" accesskey="]"><span>search</span></a>';
            valhtml += '</form> ';
       
        // SOME CSS
       
			valhtml += '<style type="text/css">';
			valhtml += '.errorformapps{border:3px solid #E6191D !important;height:30px !important;color:#E6191D !important}';
			valhtml += '#header #search{left:111px !important}';
			valhtml += '#header #search a span{color: #fff;font-size:13px;font-weight:bold;left:13px;line-height:35px;position:relative;text-align: center;text-decoration:none}';
			valhtml += '.errorborder{border-top:3px solid #E6191D !important;border-bottom:3px solid #E6191D !important;border-right:3px solid #E6191D !important;border-left:none !important;height:32px !important}';
			valhtml += '#header #search a{text-decoration:none;background:#419c41 !important;border:1px solid #fff;cursor:pointer !important;height:36px;margin:0 !important;color:#023e04;padding:0 !important;text-indent:0 !important;position:absolute;right:0;text-transform:uppercase !important;width:80px !important}';
			valhtml += '</style>';
   
    // SPIT THE FORM
    // -- Immediatley build the form into place
        jQuery("#header").prepend(valhtml);
   
    // SUBMIT THE FORM
    // -- Now we create the form submission
        function submitSearchm(){
           
            var flag = 0;
            var q = jQuery(".searchQParameter");
           
            if(
            	q.val() == ""||
            	q.val() == "Enter your search here"||
            	q.val() == "test"||
            	q.val() == " "||
            	q.val() == "search"||
            	q.val() == "E.g Nike" ||
            	q.val() == "  "
            ){
                jQuery("#searchQuery").addClass("errorformapps");
            	jQuery(".submitSearchButton").addClass("errorborder");
                flag = 1;
            } else {
                jQuery("#searchQuery").removeClass("errorformapps");
                jQuery(".submitSearchButton").removeClass("errorborder");
            }
                                                               
            if (flag == 1){
            } else {
               submitSearchAlistar(document.headerSearchm);   
            }
                                                               
        }

     // ALISTAR SUPERFUNCTION
     // -- Better search function
	function trimmer(str) { 
		str = str.replace( /^\s+/g, "" );
		str = str.replace( /\s+$/g, "" ); 
		return str; 
	} 

	function submitSearchAlistar(formName){
		var pluForCm ="";
		var form = eval(formName);
		var RegularExpression = /^[Ss]*[0-9]{5,6}$/;
		var cssExpression1 = /</;
		var cssExpression2 = />/;
		var searchCriteria = trimmer(form.freeText.value);
		var cssAttack1 = cssExpression1.test(searchCriteria);

		if(cssAttack1 || cssExpression2.test(searchCriteria)){
			searchCriteria = encodeURIComponent(searchCriteria);
		}

		// IF THIS IS A PLU
		if(RegularExpression.test(searchCriteria))
		{
			if(searchCriteria.length == 5) {
				searchCriteria = "0" + searchCriteria;
			}
		
			form.action ='/webapp/wcs/stores/servlet/ExtProductDisplayCmd';
			form.mfpartNumber.value = searchCriteria.replace("S","").replace("s","");
			pluForCm  = form.mfpartNumber.value;

		// OTHERWISE
		} else {

			form.action='/search/'+searchCriteria;
			return false;
		}

		form.freeText.value = searchCriteria.replace(new RegExp( "\'", "g" ),'%27');
		var searchTag ="Global-_-Header-_-search";
		var targetUrl = form.action+'?cm_re='+searchTag+'&storeId='+10151+'&catalogId='+10551+'&langId='+-1+'&mfpartNumber='+pluForCm +'&freeText='+searchCriteria; 
		cmCreateManualLinkClickTag(targetUrl,null,null);
		form.submit()	

	}


