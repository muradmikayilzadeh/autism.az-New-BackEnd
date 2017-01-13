$(document).ready(function() {
	$('.accordionItem')
	.on('click', function(event) {
		$('.panel .text').slideUp(400)
		var panel = $(this).next('.panel')
		panel.find('.text').slideDown(400)
	});
});