/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      $(".menu-link").click(function(){
            $(".autonav.smartheader").toggleClass("nav-active");
            $(".wrap").toggleClass("nav-active");
      });
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      	$.stellar({
			horizontalScrolling: false,
			responsive: true,
			hideDistantElements: true
		});
		
		$('.main').scrollNav({
			sections: 'h5',
			scrollOffset: 100,
			sectionElem: 'section',
		    animated: true,
		    speed: 1000,
		    showHeadline: false,
	        showTopLink: false,
	        topLinkText: 'HOME',
	        arrowKeys: true,
	        insertTarget: $('.autonav'),
	        insertLocation: 'appendTo'
		});
		
		var docElem = document.documentElement,
			smartheader = $(".smartheader"),
			didScroll = false,
			changeHeaderOn = 200;
	
		
		function init() {
			window.addEventListener( 'scroll', function( event ) {
				if( !didScroll ) {
					didScroll = true;
					setTimeout( scrollPage, 0 );
				}
			}, false );
		}
	
		function scrollPage() {
			var sy = scrollY();
			if ( sy >= changeHeaderOn ) {
				$(".smartheader").addClass("shrink");
			}
			else {
				$(".smartheader").removeClass("shrink");
			}
			didScroll = false;
		}
	
		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}
	
		init();
		
		$( window ).resize(function() {
		  	checkWidth();
		});
		
		function checkWidth() {
			if ($(window).width() <= 767) {
			   $(".hero, .about .header, .partnership").addClass("bgfix");
			} else {
			   $(".hero, .about .header, .partnership").removeClass("bgfix");
			}
		}
		
		$(".scroll-nav__link").click(function(){
			$(".menu-link").trigger("click");
		});
		
		checkWidth();
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
