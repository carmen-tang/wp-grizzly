// ==========================================================================
// Instagram & Slick Inits
// ========================================================================== 

// critical to call slick only after the instagram images have been dynamically
// generated so that they get put into the slider instead of outside it

var feed = new Instafeed({
	get: 'user',
	userId: '4649474377',
	accessToken: '4649474377.c169bf3.5ed54bad0a474891a8170a7ddc62d2c2',
	clientId: '	2e0489305539494f808de6f7e0de460c',
	resolution: 'standard_resolution',
	target: 'instafeed',
	template: '<div class="box"><a href="{{link}}"><img src="{{image}}" /><div class="caption">{{caption}}</div></a></div>',
	after: function () {
		$('.carousel').slick({
			infinite: true,
			slidesToShow: 5,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
			prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
		});
	}
});

feed.run();

// sliderInit();

console.log('Initalized'); 


// ==========================================================================
// Smooth Anchor Scroll
// ========================================================================== 


$('a[href*="#"]:not([href="#"])').click(function() {
	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
			return false;
		}
	}
});

// forces pointer on hovers (added due to animation scroll)
$('selector').css( 'cursor', 'pointer' );
