function processSettingPanel()
{
	$('.private_button').click(function() {
		var selectedList = $(this).next('.private_list');

		if (selectedList.is(':hidden')) {
			selectedList.show();
		} else {
			selectedList.hide();
		}
		return false;
	}); // end click

	$('.private_option').click(function() {
		var selected = $(this);
		var selectedText = $(this).text();
		selected.addClass('selected');

		if (selectedText == "公開") {
			selected.next().removeClass('selected').next().removeClass('selected');
		} else if (selectedText == "限朋友可見") {
			selected.prev().removeClass('selected');
			selected.next().removeClass('selected');	
		} else {
			selected.prev().removeClass('selected').prev().removeClass('selected');
		}
	}); // end click
}
