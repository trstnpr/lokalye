// START Attribute for background images
$('.data-img').each(function() {
	var attr = $(this).attr('data-bg');
	if (typeof attr !== typeof undefined && attr !== false) {
		$(this).css('background-image', 'url('+attr+')');
	}
});
// END Attribute for background images

// START Init Parallax.js
$('.parallax').parallax();
// END Init Parallax.js