function processSecondBar() 
{
	$('#second_bar a').click(function() {
		// hide all panels first
		$('.panel').hide();
		$('#second_bar a.active').removeClass('active');
		$(this).addClass('active').blur();
	}); // end click
}
