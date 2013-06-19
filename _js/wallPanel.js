function processWallPanel()
{
	// 為了支援no js用戶, "編輯"按鈕剛開始要是顯示狀態!
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
		}
	}); // end click

	$('#wall_panel .cancel-button').click(function() {
		var selectedBlock = $(this).parent().parent();

		switch (selectedBlock.attr('id')) {
			case "description_block":
			case "hobbit_block":
				processTextAreaCancel(selectedBlock);
				break;
			case "info_block":
			case "education_block":
			case "work_block":
				processEntryCancel(selectedBlock);
				break;
		}
	}); // end click
}

/* 處理textarea類的表單修改: 關於我, 興趣 */
function processTextAreaEdit(selectedBlock)
{
	var pText = selectedBlock.find('p').text();

	selectedBlock.find('p').hide();
	selectedBlock.find('textarea').text(pText).hide().fadeIn(200);
	selectedBlock.find('.hidden-button').addClass('is_clicked').hide();
	selectedBlock.find('input:not(.hidden-button)').show();
}

function processTextAreaCancel(selectedBlock)
{
	var pText = selectedBlock.find('p').text();

	selectedBlock.find('textarea').text(pText).hide();
	selectedBlock.find('p').show();
	selectedBlock.find('.hidden-button').removeClass('is_clicked');
	selectedBlock.find('input').hide();
}

/* 處理input entry類的表單修改: 基本資料, 學校經歷, 工作 */
function processEntryEdit(selectedBlock)
{
	// input entry類的表單裡, 一個td裡面有一個input後面連接著其相對的span, ex. <td><input class="hidden"><span>02/06/1984</span></td>
	selectedBlock.find('span').each(function() {
		var spanText = $(this).text();
		$(this).hide();
		$(this).prev().val(spanText).show();
	}); // each

	selectedBlock.find('.hidden-button').addClass('is_clicked').hide();
	selectedBlock.find('input:not(.hidden-button)').show();
}

function processEntryCancel(selectedBlock)
{
	// input entry類的表單裡, 一個td裡面有一個input後面連接著其相對的span, ex. <td><input class="hidden"><span>02/06/1984</span></td>
	selectedBlock.find('span').each(function() {
		var spanText = $(this).text();
		$(this).prev().val("").hide();
		$(this).show();
	}); // each

	selectedBlock.find('.hidden-button').removeClass('is_clicked');
	selectedBlock.find('input').hide();
}







