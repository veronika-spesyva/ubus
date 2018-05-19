
var swiper = new Swiper('.swiper-container', {
	pagination: {
		el: '.swiper-pagination',
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});


jQuery(document).ready(function() {
jQuery('.post').addClass("hidden").viewportChecker({
classToAdd: 'visible animated slideInUp',
offset: 100
});
});
