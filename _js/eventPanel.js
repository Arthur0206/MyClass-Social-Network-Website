function processEventPanel()
{
	// 藍灰按鍵
	// Moment Filter

	// when clicked: 
	// show all monthly_event_wrapper and br => hide all event_block => filtering => show some event_block => hide some monthly_event_wrapper and br
	$('#joined_event_filter, #created_event_filter, #invited_event_filter, #cared_event_filter').click(function() {
		// 改變filter button的顏色
		$(this).siblings('.filter_button').removeClass('is_clicked');
		$(this).addClass('is_clicked');

		// 把所有之前插入的no_event_title
		$('.no_event_title').remove();
		// 先把所有event_wrapper都show出來, 因為之後要把達成某些條件的hide起來
		$('.monthly_event_wrapper, .event_timing_hr').show();
		// 先把所有event_block都hide起來, 因為之後要把達成某些條件的show出來
		$('.event_block').hide();

		// 查看是哪個按鍵, 並show出對應的
		if ($(this).is('#joined_event_filter')) {
			$('.event_block.joined').show();
		} else if ($(this).is('#created_event_filter')) {
			$('.event_block.created').show();
		} else if ($(this).is('#invited_event_filter')) {
			$('.event_block.invited').show();
		} else if ($(this).is('#cared_event_filter')) {
			$('.event_block.cared').show();
		}

		// hide空掉的monthly_event_wrapper和hr
		$('.monthly_event_wrapper').each(function() {
			if ($(this).find('.event_block:visible').length == 0) {
				$(this).hide();
			}
		}); // each

		if ($('#not_yet_event_hr').nextUntil('#on_going_event_hr','.monthly_event_wrapper:visible').length == 0) {
			$('#not_yet_event_hr').hide();
		} 		
		if ($('#on_going_event_hr').nextUntil('#end_event_hr','.monthly_event_wrapper:visible').length == 0) {
			$('#on_going_event_hr').hide();	
		} 
		if ($('#end_event_hr').nextAll('.monthly_event_wrapper:visible').length == 0) {
			$('#end_event_hr').hide();
		} 
		
		// 印出"尚未有XXX event"的文字
		if ($('.monthly_event_wrapper:visible').length == 0) {
			if ($(this).is('#joined_event_filter')) {
				$('.setting_panel_2nd').after('<p class="no_event_title" style="margin-left:110px">您尚未加入任何活動</p>');
			} else if ($(this).is('#created_event_filter')) {
				$('.setting_panel_2nd').after('<p class="no_event_title" style="margin-left:110px">您尚未建立任何活動</p>');
			} else if ($(this).is('#invited_event_filter')) {
				$('.setting_panel_2nd').after('<p class="no_event_title" style="margin-left:110px">您尚未受邀於任何活動</p>');
			} else if ($(this).is('#cared_event_filter')) {
				$('.setting_panel_2nd').after('<p class="no_event_title" style="margin-left:110px">您尚未關注任何活動</p>');
			}
		}
	}); // click

	// default是選擇"我參加的event"
	$('#joined_event_filter').click();
}
