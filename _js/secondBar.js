function processSecondBar() 
{
	$('#second_bar a').click(function() {
		// hide all panels first
		$('.panel').hide();
		
		// 改變被選到的tab的顏色
		$('#second_bar a.active').removeClass('active');
		$(this).addClass('active').blur();

		// retrieve href from link (is id of panel to display)
		var selectedPanel = $(this).attr('href');
		// show panel
		$(selectedPanel).show();

		// 把本來打開的隱私選單關起來
		$(selectedPanel).siblings().find('.private_list').hide();

		return false;
	}); // end click

	// 點動態牆tab, 讓一進個人首頁就看到動態牆
	$('#second_bar a').eq(4).click();
}
