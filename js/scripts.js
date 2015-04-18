$(document).ready(function($) {
	$('header nav #mainMenu ').horizontalNav();
});

// $(document).ready(function($) {
// 	$('body').scrollToTop({
// 		distance: 125,
// 		speed: 1000,
// 		easing: 'linear',
// 		animation: 'slide', // fade, slide, none
// 		animationSpeed: 500,

// 		mobile: {
// 		    width: 768,
// 		    distance: 100,
// 		    speed: 1000,
// 		    easing: 'easeInOutElastic',
// 		    animation: 'slide',
// 		    animationSpeed: 200
// 		},

// 		trigger: null, // Set a custom triggering element. Can be an HTML string or jQuery object
// 		target: null, // Set a custom target element for scrolling to. Can be element or number
// 		text: 'Scroll To Top', // Text for element, can contain HTML

// 		skin: 'square',
// 		throttle: 250,

// 		namespace: 'scrollToTop'
// 	});
// });



setInterval(function(){
    var p = $( "#headerr" );
	var m = $( "#logoo" );
	var k = $( "#mainMenu" );
	k.hide();
	k.slideDown( 5000 );

    if($(document).scrollTop()>128){
         p.css('position','fixed');
		for (var i=-400;i<-93;i++){
		p.css('top',i);
	}
		
 		m.html('<img alt="Vative Logo" src="img/logo.jpg" style=" float: left; width: 108px; margin-left: -290px; ">');
	 
    }
 
    if($(document).scrollTop()<128) {
	   p.css('top',-$(document).scrollTop());
	   m.html('');
     }

}, 20);