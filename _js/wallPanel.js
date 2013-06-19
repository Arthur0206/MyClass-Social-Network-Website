function processWallPanel()
{
	// 為了支援no js用戶, "編輯"和"刪除"按鈕剛開始要是顯示狀態!
	$('#wall_panel .hidden-button').hide();

	$('.moment_content.user_own').hover(
		function() {
			$(this).find('.hidden-button:not(.is_clicked)').show();
		},
		function() {
			$(this).find('.hidden-button').hide();
		}
	); // end hover

	$('#wall_panel .hidden-button').click(function() {
		if ($(this).val() == "編輯") {
			var pElement = $(this).parent().parent().siblings('p');
			var pText = pElement.text();

			pElement.hide().siblings('textarea').text(pText).hide().fadeIn(200);

			$(this).addClass('is_clicked').hide();
			$(this).next('.hidden-button').addClass('is_clicked').hide().next('.cancel-button').show().next('.submit-button').show();
		}
	}); // end click

	$('#wall_panel .cancel-button').click(function() {
		var pElement = $(this).parent().parent().siblings('p');

		pElement.show().siblings('textarea').text("").hide();

		$(this).siblings(".hidden-button").removeClass('is_clicked');
		$(this).hide().siblings('.submit-button').hide();
	}); // end click
}
/*
<input type="button" class="hidden-button" value="編輯">
<input type="button" class="hidden-button" value="刪除">
<input type="button" class="cancel-button hidden" value="取消">
<input type="submit" class="submit-button hidden" value="提交">
*/

