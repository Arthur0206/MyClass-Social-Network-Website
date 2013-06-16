function preocessUserBackground() 
{
	$('.user_profile_pic_small').click(function() {
		var big_pic = $('.user_profile_pic_big');
		var big_pic_src = big_pic.attr('src');

		big_pic.attr('src', $(this).attr('src'));
		$(this).attr('src', big_pic_src);

		// 如果要改成roller式的, 用以下的code. 還有bug.
		/*
		$('.user_profile_pic_small').each(function() {
			if ($(this) != $("#user_profile_pic_small:last")) {
				$(this).attr('src', $(this).next().attr('src'));
			} 
		}); // end each;
		$('.user_profile_pic_small:last').attr('src', big_pic_src);
		*/
	}); // end click
}
