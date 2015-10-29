$(document).foundation();
$(document).ready(function(){
	
	// Sticky scroll for Header menu
	function sticky_relocate() {
		var window_top = $(window).scrollTop();
		var div_top = $('#footer-anchor-js').offset().top;
		if (window_top > div_top) {
			$('#footer-js').addClass('sticky');
		} else {
			$('#footer-js').removeClass('sticky');
		}
	}
	$(function () {
		$(window).scroll(sticky_relocate);
		sticky_relocate();
	});
	
	$(window).scroll( function(){
		$('.section-1 img.parallax, .section-3 img.parallax').css({ 'top' : +($(this).scrollTop()/2)+'px' });
		$('.section-4 img.parallax').css({ 'top' : ($(this).scrollTop()/5.2)+'px' });
		$('.section-7 img.parallax').css({ 'top' : +($(this).scrollTop()/4.2)+'px' });
		
		// Trigger effects when user scrolls down to specific section
		$('.effects').each( function(i){
			var bottom_of_object = $(this).offset().top + 200;
			var bottom_of_window = $(window).scrollTop() + $(window).height();
			
			if( bottom_of_window > bottom_of_object ){
				if ($(this).hasClass('effects--left')) {
					$(this).addClass('slideLeft');
				}
				else if ($(this).hasClass('effects--right')) {
					$(this).addClass('slideRight');
				}
				else if ($(this).hasClass('effects--down')) {
					$(this).addClass('slideDown');
				}
				else if ($(this).hasClass('effects--fade')) {
					$(this).addClass('fadeIn');
				}
			}
		}); 
	});
	
	// Setting the same height for .common-reasons__item-image and .common-reasons__item-copy
	if ($(window).width() >= 1200){
		$('.common-reasons__item.js').each(function() {
			if($(this).find('.common-reasons__item-image').height() > $(this).find('.common-reasons__item-copy').height()) {
				$(this).find('.common-reasons__item-copy').height($(this).find('.common-reasons__item-image').height());
			}
			else {
				$(this).find('.common-reasons__item-image').height($(this).find('.common-reasons__item-copy').height());
			}
		});
	}
	
});

$(window).load(function() {
	$('#preloaders').fadeOut();
	$('#page-content').fadeIn();
});