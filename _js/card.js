function processCard() {
	$('.card').hover(
		function() {
			if ($(this).is('.board')) {
				color = $(this).find('.board-name-wrapper').css('background-color');
				$(this).css('border-color', color).find('.board-name-wrapper').css('border-color', color);
			} else {
				$(this).css({'background-color': '#F4F4F4', 'border-color': '#C1C1C1'}).find('.card-image').css('border-color', '#C1C1C1');
			}
		},
		function() {
			if ($(this).is('.board')) {
				$(this).css('border-color', '#E1E1E1').find('.board-name-wrapper').css('border-color', '#E1E1E1');
			} else {
				$(this).css({'background-color': '#FFFFFF', 'border-color': '#E1E1E1'}).find('.card-image').css('border-color', '#E1E1E1');
			}
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