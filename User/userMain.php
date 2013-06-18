<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="let people know new friends, create and manage groups and events" />
        <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
        <title>MyClass - 讓妳認識很多新朋友!</title>
        <link href="../css/mainCss.css" type="text/css" rel="stylesheet">
        <link href="../css/about.css" type="text/css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/userBackground.js"></script>
	<script src="../_js/secondBar.js"></script>
	<script src="../_js/settingPanel.js"></script>
        <script>
            $(document).ready(function() {
                // Process Menu Bar
		processMenuBar();

		// Process User Background Area
		preocessUserBackground();

		// Process Second Bar
		processSecondBar();

		// Process Setting Panel
		processSettingPanel();
            }); // ready
        </script>
    </head>
    <body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
        <div id="boy_user_background">
		<div id="user_profile_pics">
		<img class="user_profile_pic_big" src="./Sosoman/head.jpg"></br>
		<img class="user_profile_pic_small" src="./Sosoman/head1.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head2.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head3.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head4.jpg">
		</div>
		<div id="username_text">Sosoman<br/>&nbsp&nbsp陳令堯</div>
	</div>
	<div id="second_bar">
		<ul>
			<li><a href="#about_panel">關於</a></li>
			<li><a href="#wall_panel">動態牆</a></li>
			<li><a href="#album_panel">相簿</a></li>
			<li><a href="#friend_panel">朋友</a></li>
			<li><a href="#group_panel">群組</a></li>
			<li><a href="#event_panel">活動</a></li>
			<li><a href="#article_panel">文章</a></li>
			<li><a href="#board_panel" class="last_tab">討論版</a></li>
		</ul>
	</div>

		<div id="about_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
				<div class="private_list" style="width:394px;top:41px;left:440px"> <!-- 用js來計算並填入width, top, left -->
					<span class="private_title">我的『關於』頁面隱私設定：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span>
				</div>
			</div>
			<div class="about_block">
				<h1>關於我</h1>
				<div style="width:95%">
				<p>我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~</p>
				</div>
				<div style="float:right">編輯</div>
			</div>
			<div class="about_block">
				<h1>基本資料</h1>
				<table>
				<tr><td class="entry_title">生日</td><td>02/06/1984</td></tr>
				<tr><td class="entry_title">性別</td><td>男</td></tr>
				<tr><td class="entry_title">年齡</td><td>29</td></tr>
				<tr><td class="entry_title">感情狀態</td><td>單身</td></tr>
				<tr><td class="entry_title">地區</td><td>台灣, 桃園縣</td></tr>
				</table>
				<div style="float:right">編輯</div>
			</div>
			<div class="about_block">
				<h1>學校班級</h1>
				<table>
				<tr><td class="entry_title">小學</td><td>桃園縣中平國小</td></tr>
				<tr><td class="entry_title">國中</td><td>桃園縣平興國中</td></tr>
				<tr><td class="entry_title">高中</td><td>桃園縣中壢高中</td></tr>
				<tr><td class="entry_title">大學</td><td>台中市中興大學</td></tr>
				<tr><td class="entry_title">研究所</td><td>UCSD, University of California, San Diego</td></tr>
				</table>
			</div>
			<div class="about_block">
				<h1>工作經驗</h1>
				<table>
				<tr><td class="entry_title">從2010年至2013年</td><td>Broadcom Corporation</td></tr>
				<tr><td class="entry_title">從2007年至2008年</td><td>空中特勤隊, Army, Taiwan</td></tr>
				</table>
			</div>
			<div class="about_block">
				<h1>興趣</h1>
				<p>運動 交友 旅遊 音樂 吉他 美食 創業 冒險 聯誼</p>
			</div>
		</div>
		<div id="wall_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
				<div class="private_list" style="width:305px;top:41px;left:630px"> <!-- 用js來計算並填入width, top, left -->
					<span class="private_title">我個人的動態：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span></br>
					<span class="private_title">所有人的動態：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span>
				</div>
			</div>
		動態牆
		</div>
		<div id="album_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
			</div>
		相簿
		</div>
		<div id="friend_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
			</div>
		朋友
		</div>
		<div id="group_panel" class="panel">		
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
			</div>
		群組
		</div>
		<div id="event_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
			</div>
		活動
		</div>
		<div id="article_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
			</div>
		文章
		</div>
		<div id="board_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
			</div>
		討論版
		</div>
 
    </body>
</html>
