$( document ).ready(function() {
function onResize(){
	$('.block').height('auto');
	var elementHeights = $('.block').map(function() {
		return $(this).height();
	}).get();
	var maxHeight = Math.max.apply(null, elementHeights);
	$('.block').height(maxHeight);
}

$(window).load(function() {
	if($(window).width() > 800) {
		var elementHeights = $('.block').map(function() {
			return $(this).height();
		}).get();
		var maxHeight = Math.max.apply(null, elementHeights);
		$('.block').height(maxHeight);
	}
});
var timer;
	$(window).bind('resize', function(){
		if($(window).width() > 800) {
			timer && clearTimeout(timer);
			timer = setTimeout(onResize, 100);
		}
	});


$( ".mobile-toggle" ).append( "<span class=\"m-drop\"><i class=\"fa fa-caret-down\"></i></span>" );

$('.pushy .sub-menu').hide(); //Hide children by default

$('#menu-mobile-menu').children().click(function(){
    $(this).children('.pushy .sub-menu').slideToggle('500');     
});




});	