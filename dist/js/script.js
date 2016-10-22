/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function() {
	var container, button, menu, links, subMenus, i, len, siteContent;
	siteContent = document.getElementById( 'content' );
	container = document.getElementById( 'site-navigation' );
	button = document.getElementById( 'main-toggle' );
	if ( ! container ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}
	
	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			button.className = button.className.replace( ' menu-toggle--fixed', '' );
			menu.setAttribute( 'aria-expanded', 'false' );
			siteContent.className = siteContent.className.replace( ' menu-toggle--move', '' );
		} else {
			siteContent.className += ' menu-toggle--move';
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			button.className += ' menu-toggle--fixed';
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}
} )();

//jQuery
jQuery(document).ready(function($) {
	
/*
============ To top link ===========
*/
//Check to see if the window is top if not then display button
	$( window ).scroll( function (){
		if ($( this ).scrollTop() > 1000) {
			$( '#toTopLink' ).fadeIn();
		} else {
			$( '#toTopLink' ).fadeOut();
		}
	});

	//Click event to scroll to top
	$( '#toTopLink' ).click( function(){
		$( 'html, body' ).animate({
			scrollTop : 0
		},800);
		return false;
	});
	/*
	============ Click event to scroll to point ===========
	*/
	
	function scrollToPoint(){
		$( 'html, body' ).animate({
				scrollTop: $( $.attr( this, 'href' ) ).offset().top
			}, 500 );
			return false;
	}
	$( '.contactBtn' ).click( scrollToPoint );
	$( '.scrollTo a' ).click( scrollToPoint );
	
	/*
	============ CV skills set ===========
	*/
	var tableCells = $( '.skill-bullet' ),
		tableCellsData;
	tableCells.each( function () {
		tableCellsData = $( this ).data( 'skillset' );
		
		for ( var i = 0; i < tableCellsData; i++ ){
			var new_item = $( '<span class="skill-bullet-full"></span>' ).hide();
			$( this ).prepend( new_item );
			new_item.slideDown( 'slow' );
		}
		if ( tableCellsData < 5 ){
			for ( var i = 0; i < ( 5 - tableCellsData ); i++ ){
				$( this ).append( '<span class="skill-bullet-empty"></span>' );
			}
		}
	});		
});
/*
============ Portfolio ( on both portfolio and home page ) ===========
*/
//var portfolioItems = document.querySelectorAll('.projects-container figure'),
//	portfolioAnchor = document.querySelectorAll('.projects-container figure a'),
//	aReadMore,
//	portfolioAnchorHref,
//	readMoreTxt = document.createTextNode('Dowiedz się więcej');
//	for( var i = 0; i < portfolioItems.length; i++){
//		aReadMore = document.createElement('a');
//		portfolioAnchorHref = portfolioAnchor[i].getAttribute('href');
//		
//		
//		aReadMore.setAttribute("href", portfolioAnchorHref);
//		aReadMore.appendChild(readMoreTxt);
//		
//		portfolioItems[i].appendChild(aReadMore);
//		console.log(aReadMore);
//	}


/*
============ Rellax parallax effects initialize ===========
*/
var rellax = new Rellax( '.rellax', { speed: -4 } )
/*
============ Parallax effect on blog page initialize ===========
*/
var scene = document.getElementById( 'scene' );
if( scene != null ){
	var parallax = new Parallax(scene, {
	  calibrateX: false,
	  calibrateY: true,
	  invertX: false,
	  invertY: true,
	  limitX: false,
	  limitY: 10,
	  scalarX: 2,
	  scalarY: 8,
	  frictionX: 0.2,
	  frictionY: 0.8,
	  originX: 0.0,
	  originY: 1.0
	});
}
/*
============ Google Maps ===========
*/
//function initMap() {
//	var local = {lat: 49.6174535, lng: 20.71533260000001};
//	
//	 var customMapType = new google.maps.StyledMapType([
//    {
//        "featureType": "landscape",
//        "stylers": [
//            {
//                "saturation": -100
//            },
//            {
//                "lightness": 65
//            },
//            {
//                "visibility": "on"
//            }
//        ]
//    },
//    {
//        "featureType": "poi",
//        "stylers": [
//            {
//                "saturation": -100
//            },
//            {
//                "lightness": 51
//            },
//            {
//                "visibility": "simplified"
//            }
//        ]
//    },
//    {
//        "featureType": "road.highway",
//        "stylers": [
//            {
//                "saturation": -100
//            },
//            {
//                "visibility": "simplified"
//            }
//        ]
//    },
//    {
//        "featureType": "road.arterial",
//        "stylers": [
//            {
//                "saturation": -100
//            },
//            {
//                "lightness": 30
//            },
//            {
//                "visibility": "on"
//            }
//        ]
//    },
//    {
//        "featureType": "road.local",
//        "stylers": [
//            {
//                "saturation": -100
//            },
//            {
//                "lightness": 40
//            },
//            {
//                "visibility": "on"
//            }
//        ]
//    },
//    {
//        "featureType": "transit",
//        "stylers": [
//            {
//                "saturation": -100
//            },
//            {
//                "visibility": "simplified"
//            }
//        ]
//    },
//    {
//        "featureType": "administrative.province",
//        "stylers": [
//            {
//                "visibility": "off"
//            }
//        ]
//    },
//    {
//        "featureType": "water",
//        "elementType": "labels",
//        "stylers": [
//            {
//                "visibility": "on"
//            },
//            {
//                "lightness": -25
//            },
//            {
//                "saturation": -100
//            }
//        ]
//    },
//    {
//        "featureType": "water",
//        "elementType": "geometry",
//        "stylers": [
//            {
//                "hue": "#ffff00"
//            },
//            {
//                "lightness": -25
//            },
//            {
//                "saturation": -97
//            }
//        ]
//    }
//], {
//      name: 'Custom Style'
//  });
//  var customMapTypeId = 'custom_style';
//
// var map = new google.maps.Map(document.getElementById('map'), {
//			center: local,
//			scrollwheel: false,
//	 		draggable: false,
//			zoom: 15,
//			mapTypeControlOptions: {
//			  mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
//			}
//  });
// // Create a marker and set its position.
//
//  var iconSrc = {
//	  path: 'M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16.125c-3.383 0-6.125-2.742-6.125-6.125s2.742-6.125 6.125-6.125 6.125 2.742 6.125 6.125-2.742 6.125-6.125 6.125zM12.125 10c0-2.14 1.735-3.875 3.875-3.875s3.875 1.735 3.875 3.875c0 2.14-1.735 3.875-3.875 3.875s-3.875-1.735-3.875-3.875z',
//	  fillColor: 'black',
//	  fillOpacity: 0.7,
//	  scale: 1,
//  };
//  var marker = new google.maps.Marker({
//	map: map,
//	draggable: false,
//	animation: google.maps.Animation.DROP,
//	position: local,
//	title: 'Nowy Sacz, Poland',
//	icon: iconSrc
//  });
// 
//		
//  map.mapTypes.set(customMapTypeId, customMapType);
//  map.setMapTypeId(customMapTypeId);
//
//}
