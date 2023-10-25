function restaurant_zone_openNav() {
  jQuery(".sidenav").addClass('show');
}
function restaurant_zone_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function restaurant_zone_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const restaurant_zone_nav = document.querySelector( '.sidenav' );

      if ( ! restaurant_zone_nav || ! restaurant_zone_nav.classList.contains( 'show' ) ) {
        return;
      }

      const elements = [...restaurant_zone_nav.querySelectorAll( 'input, a, button' )],
        restaurant_zone_lastEl = elements[ elements.length - 1 ],
        restaurant_zone_firstEl = elements[0],
        restaurant_zone_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && restaurant_zone_lastEl === restaurant_zone_activeEl ) {
        e.preventDefault();
        restaurant_zone_firstEl.focus();
      }

      if ( shiftKey && tabKey && restaurant_zone_firstEl === restaurant_zone_activeEl ) {
        e.preventDefault();
        restaurant_zone_lastEl.focus();
      }
    } );
  }

  restaurant_zone_keepFocusInMenu();
} )( window, document );

jQuery(document).ready(function() {
	var owl = jQuery('#top-slider .owl-carousel');
		owl.owlCarousel({
			margin: 25,
			nav: true,
			autoplay:true,
			autoplayTimeout:500,
			autoplayHoverPause:true,
			loop: true,
      rtl:true,
			navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
			responsive: {
			  0: {
			    items: 1
			  },
			  600: {
			    items: 1
			  },
			  1024: {
			    items: 1
			}
		}
	})

  window.addEventListener('load', (event) => {
    jQuery(".loading").delay(2000).fadeOut("slow");
  });
})

var btn = jQuery('#button');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

jQuery(window).scroll(function() {
  var data_sticky = jQuery('.head-menu').attr('data-sticky');

  if (data_sticky == "true") {
    if (jQuery(this).scrollTop() > 1){
      jQuery('.head-menu').addClass("stick_header");
    } else {
      jQuery('.head-menu').removeClass("stick_header");
    }
  }
});
