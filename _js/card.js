function processCard() {
	$('.card').hover(
		function() {
			$(this).css({'background-color': '#F4F4F4', 'border-color': '#C1C1C1'}).find('.album-image').css('border-color', '#C1C1C1');
		},
		function() {
			$(this).css({'background-color': '#FFFFFF', 'border-color': '#E1E1E1'}).find('.album-image').css('border-color', '#E1E1E1');
		}
	); //end hover

	$('.like').hover(
		function() {
			$(this).find('.like-icon').attr('src', '../Pics/icon_like_red.png');
			$(this).find('.like-count').css('color', 'red');
		},
		function() {
			$(this).find('.like-icon').attr('src', '../Pics/icon_like.png');
			$(this).find('.like-count').css('color', '#888888');
		}
	); //end hover
}