//<![CDATA[
Mage.Cookies.path     = '';
Mage.Cookies.domain   = '';
//]]>

jQuery(document).ready(function($) {
    $('.nav-inner').hover(
        function() {
            $(this).addClass('hover')
        },
        function() {
            $(this).removeClass('hover')
        }
    )
});
jQuery(document).ready(function($) {
    $('.nav_vmegamenu li').hover(
        function() {
            $(this).addClass('hover')
        },
        function() {
            $(this).removeClass('hover')
        }
    )
});
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 150) {
        jQuery('.header-menu-bar').addClass("fix-nav");
    } else {
        jQuery('.header-menu-bar').removeClass("fix-nav");
    }
});

jQuery(document).ready(function($){
	
var ajaxCartCfg = {
        'removeConfirm' : 'Are you sure you would like to remove this item ?',
    };

//<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search ...');
            searchForm.initAutocomplete('', 'search_autocomplete');
        //]]>
		
//<![CDATA[

		$('.thumbnail-container .bxslider').bxSlider({
			slideWidth: 78,
			slideMargin: 11,
			mode: 'horizontal',
			minSlides: 1,
			maxSlides:4,
			pager: false,
			speed: 500,
			pause: 3000,
			moveSlides:1,
		});	
//]]>

decorateGeneric($$('#product-options-wrapper dl'), ['last']);

            $('.upsellslider .products-grid').bxSlider({
                auto: 0, speed: 600, controls: 1, pager: 0, maxSlides: 4, slideWidth: 202,                 //infiniteLoop: false,
                moveSlides:1,
                slideMargin: 20,
                autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
            });


 		$('.relatedslider .products-grid').bxSlider({
                auto: 0, speed: 600, controls: 1, pager: 0, maxSlides: 1, slideWidth: 270,                 //infiniteLoop: false,
                moveSlides:1,
                slideMargin: 0,
                autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
            });
			
			//<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
    //]]>

    });

    //]]>

function initLightbox(){
        new Lightbox({
            fileLoadingImage: 'images/cloudzoom/loading.gif',
            fileBottomNavCloseImage: 'images/cloudzoom/closelabel.gif',
            overlayOpacity: 0.8,   // controls transparency of shadow overlay
            animate: true,         // toggles resizing animations
            resizeSpeed: 7,        // controls the speed of the image resizing animations (1=slowest and 10=fastest)
            borderSize: 10,
            // When grouping images this is used to write: Image # of #.
            // Change it for non-english localization
            labelImage: "Image",
            labelOf: "of"
        });
    }


    if (Prototype.Browser.IE) {
        Event.observe(window, 'load', function(){ //KB927917 fix
            initLightbox();
        });
    } else {
        document.observe("dom:loaded", function(){
            initLightbox();
        });
    }
	
//<![CDATA[
        var productAddToCartForm = new VarienForm('product_addtocart_form');
        productAddToCartForm.submit = function(button, url) {
            if (this.validator.validate()) {
                var form = this.form;
                var oldUrl = form.action;

                if (url) {
                   form.action = url;
                }
                var e = null;
                try {
                    this.form.submit();
                } catch (e) {
                }
                this.form.action = oldUrl;
                if (e) {
                    throw e;
                }

                if (button && button != 'undefined') {
                    button.disabled = true;
                }
            }
        }.bind(productAddToCartForm);

        productAddToCartForm.submitLight = function(button, url){
            if(this.validator) {
                var nv = Validation.methods;
                delete Validation.methods['required-entry'];
                delete Validation.methods['validate-one-required'];
                delete Validation.methods['validate-one-required-by-name'];
                // Remove custom datetime validators
                for (var methodName in Validation.methods) {
                    if (methodName.match(/^validate-datetime-.*/i)) {
                        delete Validation.methods[methodName];
                    }
                }

                if (this.validator.validate()) {
                    if (url) {
                        this.form.action = url;
                    }
                    this.form.submit();
                }
                Object.extend(Validation.methods, nv);
            }
        }.bind(productAddToCartForm);
    //]]>

decorateTable('product-review-table')


//<![CDATA[
Varien.Tabs = Class.create();
Varien.Tabs.prototype = {
  initialize: function(selector) {
    var self=this;
    $$(selector+' a').each(this.initTab.bind(this));
  },

  initTab: function(el) {
      el.href = 'javascript:void(0)';
      if ($(el.parentNode).hasClassName('active')) {
        this.showContent(el);
      }
      el.observe('click', this.showContent.bind(this, el));
  },

  showContent: function(a) {
    var li = $(a.parentNode), ul = $(li.parentNode);
    ul.select('li').each(function(el){
      var contents = $(el.id+'_contents');
      if (el==li) {
        el.addClassName('active');
        contents.show();
      } else {
        el.removeClassName('active');
        contents.hide();
      }
    });
  }
}
new Varien.Tabs('.product-tabs');
//]]>



