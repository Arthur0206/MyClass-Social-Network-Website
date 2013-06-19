function processAboutPanel()
{
	$('.about_block').hover(
		function() {
			$(this).find('.hidden-button:not(.is_clicked)').show();
		},
		function() {
			$(this).find('.hidden-button').hide();
		}
	); // end hover

	$('.hidden-button').click(function() {
		var selectedBlock = $(this).parent().parent();

		switch (selectedBlock.attr('id')) {
			case "description_block":
			case "hobbit_block":
				processTextAreaEdit(selectedBlock);
				break;
			case "info_block":
				break;
			case "education_block":
				break;
			case "work_block":			
				break;
		}
	}); // end click

	$('.cancel-button').click(function() {
		var selectedBlock = $(this).parent().parent();

		switch (selectedBlock.attr('id')) {
			case "description_block":
			case "hobbit_block":
				processTextAreaCancel(selectedBlock);
				break;
			case "info_block":
				break;
			case "education_block":
				break;
			case "work_block":			
				break;
		}
	}); // end click
}

function processTextAreaEdit(selectedBlock)
{
	var pText = selectedBlock.find('p').text();

	selectedBlock.find('p').hide();
	selectedBlock.find('textarea').text(pText).hide().fadeIn(200);
	selectedBlock.find('.hidden-button').addClass('is_clicked').hide();
	selectedBlock.find('input').show();
}

function processTextAreaCancel(selectedBlock)
{
	var pText = selectedBlock.find('p').text();

	selectedBlock.find('textarea').text(pText).hide();
	selectedBlock.find('p').show();
	selectedBlock.find('.hidden-button').removeClass('is_clicked').show();
	selectedBlock.find('input').hide();
}
