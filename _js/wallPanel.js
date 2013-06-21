function processWallPanel()
{
	// 為了支援no js用戶, "編輯"和"刪除"按鈕剛開始要是顯示狀態! 使用visibility而非hide, 所以有占位置, 故leave-msg 和 like buttons位置不會變
	$('#wall_panel .hidden-button').css('visibility','hidden');

	// hover moment_post 區塊時, 顯示"編輯"和"刪除"按鍵
	$('.moment_content.user_own .moment_post').hover(
		function() {
			// aboutPanel.js 裡還是用show(), hide(), 為了consistency 有機會要改 
			$(this).find('.hidden-button:not(.is_clicked)').css('visibility','visible').hide().fadeIn(150);
		},
		function() {
			// aboutPanel.js 裡還是用show(), hide(), 為了consistency 有機會要改 
			$(this).find('.hidden-button').css('visibility','hidden');
		}
	); // end hover

	// hover moment_response 區塊時, 顯示"編輯"和"刪除"按鍵
	$('.moment_content .moment_response').hover(
		function() {
			$(this).find('.hidden-button:not(.is_clicked)').css('visibility','visible').hide().fadeIn(150);
		},
		function() {
			$(this).find('.hidden-button').css('visibility','hidden');
		}
	); // end hover

	// 按"編輯"鍵
	$('#wall_panel .hidden-button').click(function() {
		cancelAllOtherEditor();

		// 另一種'#wall_panel .hidden-button'是"刪除"鍵
		if ($(this).val() == "編輯") {
			// 這種寫法可以用在both moment_post和moment_response上. 
			// 但是每次修改html structure要再次確認沒問題.
			var pElement = $(this).parent().parent().parent().find('p:first');
			var textareaRows;
			var textareaWidth;

			// 如果是moment_response裡面生出textarea
			if ($(this).parent().parent().parent().is('.moment_response')) {
				textareaRows = 2;
			} else { // 如果是moment_post裡面生出textarea
				textareaRows = 10;		
			}
			var pText = pElement.text();

			pElement.before('<textarea rows="' + textareaRows + '"></textarea>');
			
			pElement.siblings('textarea').val(pText).hide().fadeIn(200).focus();
			pElement.hide();

			// 把 編輯 刪除 按鍵hide來清出位置給 取消 提交
			$(this).addClass('is_clicked').hide();
			// 把 取消 提交 按鍵show出來佔位置, 因此leave-msg 和 like buttons位置不會變
			$(this).next('.hidden-button').addClass('is_clicked').hide().next('.cancel-button').show().next('.submit-button').show();
		}
	}); // end click

	// 按"取消"鍵 - 不包括為了輸入新回覆而做出來的臨時button
	$('#wall_panel .cancel-button:not(newly_added)').click(function() {
		// 這種寫法可以用在both moment_post和moment_response上.
		var pElement = $(this).parent().parent().parent().find('p');

		pElement.show();
		pElement.siblings('textarea').remove();

		// 把 編輯 刪除 按鍵show出來佔位置, 但visibility也許還是hidden(hover控制)
		$(this).siblings(".hidden-button").removeClass('is_clicked').show().css('visibility','hidden');
		// 把 取消 提交 按鍵hide來清出位置給 編輯 刪除, 因此leave-msg 和 like buttons位置不會變
		$(this).hide().siblings('.submit-button').hide();
	}); // end click

/* 新增留言部份 */
	$('.respond-button').click(function() {
		if ($(this).hasClass('is_clicked')) {
			$(this).closest('.moment_content').find('.moment_response.newly_added textarea').focus();
		} else {
			cancelAllOtherEditor();

			var selectedMomentContent = $(this).closest('.moment_content');
			var currentUser = $('#username_button').text(); // 從header bar拿到username
			var currentUserImgPath = $('#user_img img').attr('src');
			var newMomentResponse = 
			'<div class="moment_response newly_added"> \
				<a href="hotUser.html"><img src="' + currentUserImgPath + '"></a> \
				<div><a href="hotUser.html" class="boy-user-link">' + currentUser + '</a> \
				<textarea rows="2">請輸入您的留言</textarea> \
					<form> <!--  只有自己的moment有這些button --> \
					<input type="button" class="newly_added cancel-button" value="取消"> \
					<input type="submit" class="newly_added submit-button" value="提交"> \
			 		</form> \
				</div> \
			</div>'

			if (selectedMomentContent.find('.moment_response').length > 0) {
				selectedMomentContent.append(newMomentResponse);
				selectedMomentContent.find('.newly_added').css(
				{'border-top':'1px solid #D8D5D0','border-bottom':'none','margin-top':'4px'}).hide().fadeIn(150);
			} else {
				selectedMomentContent.append('<hr>' + newMomentResponse);
				selectedMomentContent.find('.newly_added').css('border','none').hide().fadeIn(150);
			}
			selectedMomentContent.find('.newly_added textarea').focus();

			// 標記為is_clicked
			$(this).addClass('is_clicked');



			/********************** 在這裡註冊剛剛新生出來的.newly_added.cancel-button的click() event function **********************/
			$('.newly_added.cancel-button').click(function() {
				// 把之前標記成is_clicked(所以被disabled)的respond-button再度enable(移除is_clicked)
				$(this).closest('.moment_content').find('.respond-button.is_clicked').removeClass('is_clicked');

				// 找到要被刪除的moment_response.newly_added
				var newlyAddedMomentResponse = $(this).closest('.moment_response.newly_added');

				// 查看是否前面有一個<hr>也要被刪除
				if (newlyAddedMomentResponse.prev('hr').length == 1) {
					newlyAddedMomentResponse.prev('hr').remove();
				}

				// 最後刪除moment_response.newly_added
				newlyAddedMomentResponse.remove();
			}); // end click
		}
		return false;
	}); // end click
}

function cancelAllOtherEditor()
{
	// 把其他現在被打開的textarea關起來, 用'.hidden-button.is_clicked'來找到這些block, 再按他的'.cancel-button'來關起對應的textarea
	$('#wall_panel .hidden-button.is_clicked').siblings('.cancel-button').click();
	// 包括 新增留言 的button
	$('.newly_added.cancel-button').click();
}
/*
<input type="button" class="hidden-button" value="編輯">
<input type="button" class="hidden-button" value="刪除">
<input type="button" class="cancel-button hidden" value="取消">
<input type="submit" class="submit-button hidden" value="提交">
*/

