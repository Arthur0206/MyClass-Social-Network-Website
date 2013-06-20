function processWallPanel()
{
	// 為了支援no js用戶, "編輯"和"刪除"按鈕剛開始要是顯示狀態!
	$('#wall_panel .hidden-button').hide();

	// hover moment_post 區塊時, 顯示"編輯"和"刪除"按鍵
	$('.moment_content .moment_post').hover(
		function() {
			$(this).find('.hidden-button:not(.is_clicked)').show();
		},
		function() {
			$(this).find('.hidden-button').hide();
		}
	); // end hover

	// hover moment_response 區塊時, 顯示"編輯"和"刪除"按鍵
	$('.moment_content .moment_response').hover(
		function() {
			$(this).find('.hidden-button:not(.is_clicked)').show();
		},
		function() {
			$(this).find('.hidden-button').hide();
		}
	); // end hover

	// 按"刪除"鍵
	$('#wall_panel .hidden-button').click(function() {
		// 把其他現在被打開的textarea關起來, 用'.hidden-button.is_clicked'來找到這些block, 再按他的'.cancel-button'來關起對應的textarea
		$('#wall_panel .hidden-button.is_clicked').siblings('.cancel-button').click();

		// 另一種'#wall_panel .hidden-button'是"刪除"鍵
		if ($(this).val() == "編輯") {
			// 這種寫法可以用在both moment_post和moment_response上. 
			// 但是每次修改html structure要再次確認沒問題.
			var pElement = $(this).parent().parent().parent().find('p:first');
			var textareaRows;
			var textareaWidth;

			// 如果是moment_response裡面生出textarea
			if ($(this).parent().parent().parent().is('.moment_response')) {
				textareaRows = 4;
			} else { // 如果是moment_post裡面生出textarea
				textareaRows = 12;		
			}
			var pText = pElement.text();

			pElement.before('<textarea rows="' + textareaRows + '"></textarea>');
			
			pElement.siblings('textarea').val(pText).hide().fadeIn(200);
			pElement.hide();

			$(this).addClass('is_clicked').hide();
			$(this).next('.hidden-button').addClass('is_clicked').hide().next('.cancel-button').show().next('.submit-button').show();
		}
	}); // end click

	// 按"取消"鍵
	$('#wall_panel .cancel-button').click(function() {
		// 這種寫法可以用在both moment_post和moment_response上.
		var pElement = $(this).parent().parent().parent().find('p');

		pElement.show();
		pElement.siblings('textarea').remove();

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

