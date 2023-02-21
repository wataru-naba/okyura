//Main Image
$('.slider').slick({
	fade:false,
	autoplay:true,
	arrows:true,
	autoplaySpeed:6000,
	speed:1000,
	pauseOnFocus:false,
	pauseOnHover:false,
	pauseOnDotsHover:false,
	prevArrow:'.top-prev',
	nextArrow:'.top-next',
	swipe:true,
	cssEase:'ease-out',
	useCSS:true,
	dots:false,
	centerMode:true,
	centerPadding:0
});
$('.slick-dots').prependTo('.dots');

$('.slick-slide.slick-current').removeClass('slick-current').addClass('my');

