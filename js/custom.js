//<![CDATA[
var MEGAMENU_EFFECT = 0;

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

//<![CDATA[
Mage.Cookies.path = '#';
Mage.Cookies.domain = '#';
//]]>
//<![CDATA[
var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search ...');
searchForm.initAutocomplete('#', 'search_autocomplete');
//]]>

jQuery(document).ready(function($) {

    var _SlideshowTransitions = [{
        $Duration: 1200,
        x: 0.2,
        y: -0.1,
        $Delay: 20,
        $Cols: 8,
        $Rows: 4,
        $Clip: 15
    }, {
        $Duration: 600,
        x: -1,
        $Delay: 50,
        $Cols: 8,
        $Rows: 4,
        $SlideOut: true,
        $Formation: $JssorSlideshowFormations$.$FormationZigZag,
        $Easing: {
            $Left: $JssorEasing$.$EaseInCubic,
            $Opacity: $JssorEasing$.$EaseOutQuad
        },
        $Assembly: 513,
        $Opacity: 2
    }, {
        $Duration: 1200,
        x: 0.2,
        y: -0.1,
        $Delay: 20,
        $Cols: 8,
        $Rows: 4,
        $Clip: 15
    }, {
        $Duration: 1200,
        x: 0.2,
        y: -0.1,
        $Delay: 20,
        $Cols: 8,
        $Rows: 4,
        $Clip: 15
    }];
    var _CaptionTransitions = [{
        $Duration: 900,
        $Clip: 3,
        $Easing: $JssorEasing$.$EaseInOutCubic
    }, {
        $Duration: 900,
        $Clip: 12,
        $Easing: $JssorEasing$.$EaseInOutCubic
    }, {
        $Duration: 600,
        $Zoom: 11,
        $Easing: {
            $Zoom: $JssorEasing$.$EaseInExpo,
            $Opacity: $JssorEasing$.$EaseLinear
        },
        $Opacity: 2
    }, {
        $Duration: 600,
        x: -0.6,
        $Zoom: 11,
        $Easing: {
            $Left: $JssorEasing$.$EaseInCubic,
            $Zoom: $JssorEasing$.$EaseInCubic
        },
        $Opacity: 2
    }, {
        $Duration: 600,
        y: -0.6,
        $Zoom: 11,
        $Easing: {
            $Top: $JssorEasing$.$EaseInCubic,
            $Zoom: $JssorEasing$.$EaseInCubic
        },
        $Opacity: 2
    }, {
        $Duration: 700,
        y: -0.6,
        $Zoom: 1,
        $Easing: {
            $Top: $JssorEasing$.$EaseInCubic,
            $Zoom: $JssorEasing$.$EaseInCubic
        },
        $Opacity: 2
    }, {
        $Duration: 700,
        $Zoom: 11,
        $Rotate: 1,
        $Easing: {
            $Zoom: $JssorEasing$.$EaseInExpo,
            $Opacity: $JssorEasing$.$EaseLinear,
            $Rotate: $JssorEasing$.$EaseInExpo
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 0.8
        }
    }, {
        $Duration: 700,
        x: -0.6,
        $Zoom: 11,
        $Rotate: 1,
        $Easing: {
            $Left: $JssorEasing$.$EaseInCubic,
            $Zoom: $JssorEasing$.$EaseInCubic,
            $Opacity: $JssorEasing$.$EaseLinear,
            $Rotate: $JssorEasing$.$EaseInCubic
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 0.8
        }
    }, {
        $Duration: 700,
        y: -0.6,
        $Zoom: 11,
        $Rotate: 1,
        $Easing: {
            $Top: $JssorEasing$.$EaseInCubic,
            $Zoom: $JssorEasing$.$EaseInCubic,
            $Opacity: $JssorEasing$.$EaseLinear,
            $Rotate: $JssorEasing$.$EaseInCubic
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 0.8
        }
    }, {
        $Duration: 700,
        x: -0.6,
        $Zoom: 1,
        $Rotate: 1,
        $Easing: {
            $Left: $JssorEasing$.$EaseInQuad,
            $Zoom: $JssorEasing$.$EaseInQuad,
            $Rotate: $JssorEasing$.$EaseInQuad,
            $Opacity: $JssorEasing$.$EaseOutQuad
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 1.2
        }
    }, {
        $Duration: 700,
        y: -0.6,
        $Zoom: 1,
        $Rotate: 1,
        $Easing: {
            $Top: $JssorEasing$.$EaseInQuad,
            $Zoom: $JssorEasing$.$EaseInQuad,
            $Rotate: $JssorEasing$.$EaseInQuad,
            $Opacity: $JssorEasing$.$EaseOutQuad
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 1.2
        }
    }, {
        $Duration: 900,
        x: -0.6,
        $Easing: {
            $Left: $JssorEasing$.$EaseInOutBack
        },
        $Opacity: 2
    }, {
        $Duration: 900,
        y: -0.6,
        $Easing: {
            $Top: $JssorEasing$.$EaseInOutBack
        },
        $Opacity: 2
    }];

    var options = {
        $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlaySteps: 1, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
        $AutoPlayInterval: 4000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

        $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideDuration: 600, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
        //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
        //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
        $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
        $DisplayPieces: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
        $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        $SlideshowOptions: { //[Optional] Options to specify and enable slideshow or not
            $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
            $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
            //$TransitionsOrder: 0,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
            $TransitionsOrder: 0,
            $ShowLink: true //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
        },
        $CaptionSliderOptions: { //[Optional] Options which specifies how to animate caption
            $Class: $JssorCaptionSlider$, //[Required] Class to create instance to animate caption
            $CaptionTransitions: _CaptionTransitions, //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
            $PlayInMode: 1, //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
            $PlayOutMode: 3 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
        },
        $BulletNavigatorOptions: { //[Optional] Options to specify and enable navigator or not
            $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
            $ChanceToShow: 0, //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 0, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
            $Lanes: 1, //[Optional] Specify lanes to arrange items, default value is 1
            $SpacingX: 5, //[Optional] Horizontal space between each item in pixel, default value is 0
            $SpacingY: 10, //[Optional] Vertical space between each item in pixel, default value is 0
            $Orientation: 1 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
        },

        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 1, //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1 //[Optional] Steps to go for each navigation request, default value is 1
        }
    };
    var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizes
    function ScaleSlider() {


        //reserve blank width for margin+padding: margin+padding-left (10) + margin+padding-right (10)
        var paddingWidth = 0;

        //minimum width should reserve for text
        var minReserveWidth = 225;

        var parentElement = jssor_slider1.$Elmt.parentNode;

        //evaluate parent container width
        var parentWidth = parentElement.clientWidth;

        if (parentWidth) {

            //exclude blank width
            var availableWidth = parentWidth - paddingWidth;

            //calculate slider width as 70% of available width
            var sliderWidth = availableWidth * 0.7;

            //slider width is maximum 600
            sliderWidth = Math.min(sliderWidth, 600);

            //slider width is minimum 200
            sliderWidth = Math.max(sliderWidth, 1920);
            var clearFix = "none";

            //evaluate free width for text, if the width is less than minReserveWidth then fill parent container
            if (availableWidth - sliderWidth < minReserveWidth) {

                //set slider width to available width
                sliderWidth = availableWidth;

                //slider width is minimum 200
                sliderWidth = Math.max(sliderWidth, 200);

                clearFix = "both";
            }

            //clear fix for safari 3.1, chrome 3
            $('#clearFixDiv').css('clear', clearFix);

            jssor_slider1.$ScaleWidth(sliderWidth);
        } else
            window.setTimeout(ScaleSlider, 30);
    }
    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    //responsive code end

    <!-- Our Product Slider -->	


    (function(selector) {
        $content = $(selector);
        $nav = $('#tabs-title', $content);
        $products = $('.producttabs-products', $content);
        $loading = $(".ajax_loading", $content);
        $items = $('.item', $nav);
        $items.click(function() {
            var type = $(this).data('type');
            if (type != "random" && $(this).hasClass(
                    'active')) return;
            $items.removeClass('active');
            $(this).addClass('active');
            getProduct(type);
        });
        getProduct("random");

        function getProduct(type) {
            $loading.show();
            setTimeout(function() {
                $loading.hide();
                //alert(type);
                $('.producttabs-products.' + type).show()
                    .siblings('.producttabs-products').hide();
                $('.producttabs-products.' + type +
                    ' .products-grid').bxSlider({
                    slideMargin: 20,
                    speed: 600,
                    minSlides: 1,
                    maxSlides: 6,
                    slideWidth: 178,
                    controls: true,
                    pager: false,
                    autoControls: true,
                    autoHover: true,
                    moveSlides: 1,
                    slideMargin: 20,
                });
            }, 1000);
        }

    })('.producttabs-container');

    <!-- caps and hats  Slider -->
    $('.cattab_container .products-grid').bxSlider({
        infiniteLoop: false,
        slideMargin: 20,
        moveSlides: 1,
        auto: 0,
        speed: 600,
        pause: 1800,
        controls: 1,
        pager: 0,
        maxSlides: 3,
        slideWidth: 176,
    });

    $('.cattab_container .products-grid').bxSlider({
        infiniteLoop: false,
        slideMargin: 20,
        moveSlides: 1,
        auto: 0,
        speed: 600,
        pause: 1800,
        controls: 1,
        pager: 0,
        maxSlides: 3,
        slideWidth: 176,

    });
    <!-- Blog Slider -->
    $('.blog-content .bxslider').bxSlider({
        minSlides: 1,
        maxSlides: 2,
        slideWidth: 270,
        slideMargin: 30,
        auto: 0,
        moveSlides: 1,
        pager: false,
        controls: true,
        mode: 'horizontal',
        speed: 450,
        pause: 3000,
        easing: 'jswing',
        autoHover: true,
        infiniteLoop: false,
    });
    <!-- Best Seller  Slider -->
    $('.bestsellerslider .slide-multirows').bxSlider({
        auto: 0,
        speed: 600,
        controls: 1,
        pager: 0,
        maxSlides: 2,
        slideWidth: 270,
        mode: 'vertical', //infiniteLoop: false,
        moveSlides: 1,
        slideMargin: 25,
        autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
    });

    <!-- Feature Product  Slider -->
    $('.featuredproduct .slide-multirows').bxSlider({
        auto: 0,
        speed: 600,
        controls: 1,
        pager: 0,
        maxSlides: 2,
        slideWidth: 270,
        mode: 'vertical', //infiniteLoop: false,
        moveSlides: 1,
        slideMargin: 20,
        autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
    });

    //<![CDATA[
    <!-- Brand Logo  Slider -->
    $('.brandlogo-contain .bxslider').bxSlider({
        speed: 600,
        pause: 3000,
        minSlides: 1,
        //infiniteLoop: false,
        maxSlides: 6,
        slideWidth: 193,
        slideMargin: 1,
        autoHover: true,
        moveSlides: 1,

        pager: false,
        controls: true,
    });

    //]]>


});