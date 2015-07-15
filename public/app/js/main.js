$(function(){
	$('.bxslider').bxSlider({
		auto: true,
		pagerCustom: '#bx-pager'
	});
	$('.bx-category').bxSlider({
		auto: false,
		pagerCustom: '#bxpager',
		controls: false
	});
	$('[rel="popover"]').popover({
		container: 'body',
		html: true,
		placement: "bottom",
		content: function () {
			var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
			return clone;
		}
	}).click(function(e) {
		e.preventDefault();
	});
	$('.close-popover').on('click', function (e) {
		$('[rel="popover"]').popover('hide');
	});
});