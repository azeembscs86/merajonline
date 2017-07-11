    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 200) {
       jQuery('nav').addClass("fix-nav");
      } else {
       jQuery('nav').removeClass("fix-nav");
      }
    });
 
	    jQuery(window).scroll(function () {
	      if (jQuery(this).scrollTop() > 150) {
	       jQuery('.header-wrapper').addClass("fix-nav");
	      } else {
	       jQuery('.header-wrapper').removeClass("fix-nav");
	      }
	    });

//<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search ...');
            searchForm.initAutocomplete('#', 'search_autocomplete');
        //]]>