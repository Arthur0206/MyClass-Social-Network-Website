<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="let people know new friends, create and manage groups and events" />
        <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
        <title>MyClass - 讓妳認識很多新朋友!</title>
        <link href="../css/mainCss.css" type="text/css" rel="stylesheet">
        <link href="../css/about.css" type="text/css" rel="stylesheet">
        <link href="../css/form.css" type="text/css" rel="stylesheet">
	<link href="../fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/userBackground.js"></script>
	<script src="../_js/secondBar.js"></script>
	<script src="../_js/settingPanel.js"></script>
	<script src="../_js/aboutPanel.js"></script>
	<script src="../_js/wallPanel.js"></script>
	<!--<script src="../_js/jquery.easing.1.3.js"></script> 先disable, 省去不必須的下載-->
	<script src="../fancybox/jquery.fancybox-1.3.4.min.js"></script>
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

		// Process About Panel
		processAboutPanel();

		// Process Wall Panel
		processWallPanel();

		// Process Fancybox
		$('#gallery a').fancybox({
			overlayColor: '#666',
			overlayOpacity: .05,
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			//easingIn: 'easeInSine', 省去不必須的下載(easing.js)
			//easingOut: 'easeOutSine',
			titlePosition: 'inside' ,		
			cyclic: true
		});
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
			<div id="description_block" class="about_block">
				<form>
				<h1>關於我</h1>
				<div class="p_wrapper">
				<textarea rows="5" class="hidden"></textarea>
				<p>我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~</p>
				</div>
				<input type="button" class="hidden-button" value="編輯">
				<input type="button" class="cancel-button hidden" value="取消">
				<input type="submit" class="submit-button hidden" value="提交">
				</form>
			</div>
			<div id="info_block" class="about_block">
				<form>
				<h1>基本資料</h1>
				<table>
				<tr><td class="entry_title">生日</td><td><input class="hidden"><span>02/06/1984</span></td></tr>
				<tr><td class="entry_title">性別</td><td><input class="hidden"><span>男</span></td></tr>
				<tr><td class="entry_title">年齡</td><td><input class="hidden"><span>29</span></td></tr>
				<tr><td class="entry_title">感情狀態</td><td><input class="hidden"><span>單身</span></td></tr>
				<tr><td class="entry_title">地區</td><td><input class="hidden"><span>台灣, 桃園縣</span></td></tr>
				</table>
				<input type="button" class="hidden-button" value="編輯">
				<input type="button" class="cancel-button hidden" value="取消">
				<input type="submit" class="submit-button hidden" value="提交">
				</form>
			</div>
			<div id="education_block" class="about_block">
				<form>
				<h1>學校班級</h1>
				<table>
				<tr><td class="entry_title">小學</td><td>桃園縣中平國小</td></tr>
				<tr><td class="entry_title">國中</td><td>桃園縣平興國中</td></tr>
				<tr><td class="entry_title">高中</td><td>桃園縣中壢高中</td></tr>
				<tr><td class="entry_title">大學</td><td>台中市中興大學</td></tr>
				<tr><td class="entry_title">研究所</td><td>UCSD, University of California, San Diego</td></tr>
				</table>
				<input type="button" class="hidden-button" value="編輯">
				<input type="button" class="cancel-button hidden" value="取消">
				<input type="submit" class="submit-button hidden" value="提交">
				</form>
			</div>
			<div id="work_block" class="about_block">
				<form>
				<h1>工作經驗</h1>
				<table>
				<tr><td class="entry_title">從2010年至2013年</td><td>Broadcom Corporation</td></tr>
				<tr><td class="entry_title">從2007年至2008年</td><td>空中特勤隊, Army, Taiwan</td></tr>
				</table>
				<input type="button" class="hidden-button" value="編輯">
				<input type="button" class="cancel-button hidden" value="取消">
				<input type="submit" class="submit-button hidden" value="提交">
				</form>
			</div>
			<div id="hobbit_block" class="about_block">
				<form>
				<h1>興趣</h1>
				<div class="p_wrapper">
				<textarea rows="3" class="hidden"></textarea>
				<p>運動 交友 旅遊 音樂 吉他 美食 創業 冒險 聯誼</p>
				</div>
				<input type="button" class="hidden-button" value="編輯">
				<input type="button" class="cancel-button hidden" value="取消">
				<input type="submit" class="submit-button hidden" value="提交">
				</form>
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
		<div class="timeline_wrapper"><div class="date_line_title">現在</div> <hr></div>
		<div class="moment_wrapper">
			<div class="time_title">02:35pm</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
				<a href="hotUser.html" class="wall_poster_username boy-user-link">Sosoman</a>
			</div>
			<div class="moment_content user_own"> <!--  Sosoman自己的moment: user_own class -->
				<textarea rows="30" class="hidden"></textarea>
				<p>我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~
我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~~~
				</p>
				<div id="gallery">
					<a href="./Sosoman/Album/Moment/7_b.jpg" rel="gallery" title="一堆高爾夫球"><img src="./Sosoman/Album/Moment/7_s.jpg" width="70" height="70" alt="golf balls"></a>
					<a href="./Sosoman/Album/Moment/8_b.jpg" rel="gallery" title="古老城牆"><img src="./Sosoman/Album/Moment/8_s.jpg" width="70" height="70" alt="rock wall"></a>
					<form> <!--  只有自己的moment有這些button -->
					<input type="button" class="hidden-button" value="編輯">
					<input type="button" class="hidden-button" value="刪除">
					<input type="button" class="cancel-button hidden" value="取消">
					<input type="submit" class="submit-button hidden" value="提交">
					</form>
				</div>
			</div>
		</div>
		<div class="moment_wrapper">
			<div class="time_title">11:35am</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
				<a href="Home.php" class="wall_poster_username girl-user-link">NancyLin</a>
			</div>
			<div class="moment_content">
				<p>熱火贏了 我愛君子劍 ! Ray Gun~~~</p>
			</div>
		</div>
		<div class="moment_wrapper">
			<div class="time_title">02:35am</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
				<a href="Home.php" class="wall_poster_username girl-user-link">NancyLin</a>
			</div>
			<div class="moment_content">
				<p>今天的活動太好完了 ! 認識很多新朋友～ 希望改天還能一起出去玩 !</p>
				<div id="gallery">
					<a href="./NancyLin/Album/Moment/slide1.jpg" rel="gallery" title="一堆高爾夫球"><img src="./NancyLin/Album/Moment/slide1_h.jpg" width="70" height="70" alt="golf balls"></a>
					<a href="./NancyLin/Album/Moment/slide2.jpg" rel="gallery" title="古老城牆"><img src="./NancyLin/Album/Moment/slide2_h.jpg" width="70" height="70" alt="rock wall"></a>
					<a href="./NancyLin/Album/Moment/slide3.jpg" rel="gallery" title="美麗的城堡"><img src="./NancyLin/Album/Moment/slide3_h.jpg" width="70" height="70" alt="old course"></a>
					<a href="./NancyLin/Album/Moment/slide4.jpg" rel="gallery" title="城堡裡的怪東西"><img src="./NancyLin/Album/Moment/slide4_h.jpg" width="70" height="70" alt="tees"></a>
					<a href="./NancyLin/Album/Moment/slide5.jpg" rel="gallery" title="湖與樹"><img src="./NancyLin/Album/Moment/slide5_h.jpg" width="70" height="70" alt="tree"></a>
					<a href="./NancyLin/Album/Moment/slide6.jpg" rel="gallery" title="旁邊打球的老人們..."><img src="./NancyLin/Album/Moment/slide6_h.jpg" width="70" height="70" alt="ocean course"></a>
				</div>
			</div>
		</div>
		<div class="timeline_wrapper"><div class="date_line_title">6/18 (二)</div> <hr></div>
		<div class="moment_wrapper">
			<div class="time_title">11:35am</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/Mini157/head.jpg"></a>
				<a href="Home.php" class="wall_poster_username girl-user-link">Mini157</a>
			</div>
			<div class="moment_content">
				<p>今天看到帥哥 超爽的~</p>
			</div>
		</div>
		<div class="moment_wrapper">
			<div class="time_title">03:35am</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/KobeIsGod/head.jpg"></a>
				<a href="Home.php" class="wall_poster_username boy-user-link">KobeIsGod</a>
			</div>
			<div class="moment_content">
				<p>幹 剛剛在捷運上遇到Kobe 他好像被抓了 不知道為什麼 QQ~</p>
				<div id="gallery">
					<a href="./KobeIsGod/Album/Moment/1_b.jpg" rel="gallery" title="一堆高爾夫球"><img src="./KobeIsGod/Album/Moment/1_s.jpg" width="70" height="70" alt="golf balls"></a>
				</div>
			</div>
		</div>
		<div class="timeline_wrapper"><div class="date_line_title">6/17 (一)</div> <hr></div>

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
