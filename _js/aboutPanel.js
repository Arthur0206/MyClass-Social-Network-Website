function processAboutPanel()
{
	$('.about_block').hover(
		function() {
			$(this).find('.hidden-button').show();
		},
		function() {
			$(this).find('.hidden-button').hide();
		}
	); // end hover
}
