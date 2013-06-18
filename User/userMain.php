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
				<div class="private_list" style="width:395px;top:41px;left:440px"> <!-- 用js來計算並填入width, top, left -->
					<span class="private_title">我的『關於』頁面隱私設定：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span>
				</div>
			</div>
			<div class="about_block">
				<h1>關於我</h1>
				<p>我喜歡認識新朋友</p>
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
