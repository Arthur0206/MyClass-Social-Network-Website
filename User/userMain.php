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
				<div class="moment_post" style="position:relative"> <!-- Case#1 : 是user_own且有gallery的case --> <!--  發的文是moment_post, 回文是moment_response -->
				<p>我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~
我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~我喜歡認識新朋友~~~
				</p>
				<div id="gallery">
					<a href="./Sosoman/Album/Moment/7_b.jpg" rel="gallery" title="一堆高爾夫球"><img src="./Sosoman/Album/Moment/7_s.jpg" width="70" height="70" alt="golf balls"></a>
					<a href="./Sosoman/Album/Moment/8_b.jpg" rel="gallery" title="古老城牆"><img src="./Sosoman/Album/Moment/8_s.jpg" width="70" height="70" alt="rock wall"></a>
					<form> <!--  只有自己的moment有這些button -->
					<input type="button" class="hidden-button" value="編輯">
					<input type="button" class="hidden-button delete-button" value="刪除">
					<input type="button" class="cancel-button hidden" value="取消">
					<input type="submit" class="submit-button hidden" value="提交">
					</form>
				</div>
				<a href="hotUser.html" class="like-button"><img src="../Pics/heart.png">6</a>
				<a href="hotUser.html" class="respond-button"><img src="../Pics/comment.png">23</a>
				</div>
				<hr>
				<div class="moment_response user_own"> <!--  Sosoman自己的moment: user_own class -->
					<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
					<div>
					<a href="hotUser.html" class="boy-user-link">Sosoman</a>
					<p>我不知道我的想法對不對，但有部分跟整個社會鼓勵的東西有關，過去人人口中的科技新貴都是硬體業出來的，所以所有的資源與人才都往硬體跑，而這幾年幾乎電視上不斷放送的都是哪個賣小吃的超賺，公務員福利超好，所以大家的目標不是考公務員就是去做小吃(在台灣做吃的應該比軟體容易賺)，當整個社會與媒體推廣甚麼社會的資源就會往哪裡跑，從過去到現在很少很少有報導作軟體而成功的，大概比較有名的就無名跟地圖日記和愛情公寓吧，其他就算成功也鮮少被報導，更不要說對於國外軟體的報導了，沒有個典範資源就不會到那個領域去。
而且台灣人不喜歡投資軟體，賣硬體的今天賣出去就有錢進來，賣幾個就可以損益兩平，這是比較容易算得出來的，但軟體就算今天有一千萬人用這個軟體也不一定賺錢，LINE都已經破千萬人用了，前不久也還沒賺錢，這很難估算，而且軟體業變動很快，DrawSomething風光也不過三個月就沒了，當整個投資氛圍都沒有對軟體業有個樣板及估計方法，就不會有人願意將資源投資進來，而美國等先進國家都已經有很好的模版了，他們都可以去將軟體公司估值出來且有成功案例可循，這樣的制度或環境沒建立起來應該很難有好的投資環境吧
					</p>	<div class="date">6月18日 6:48m</div>
						<form> <!--  只有自己的moment有這些button -->
						<input type="button" class="hidden-button" value="編輯">
						<input type="button" class="hidden-button delete-button" value="刪除">
						<input type="button" class="cancel-button hidden" value="取消">
						<input type="submit" class="submit-button hidden" value="提交">
						</form>
					</div>
				</div>

				<div class="moment_response user_own">
					<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
					<div><a href="hotUser.html" class="boy-user-link">Sosoman</a>
					<p>想吃大便嗎?
					</p><div class="date">6月18日 7:20pm</div>
						<form> <!--  只有自己的moment有這些button -->
						<input type="button" class="hidden-button" value="編輯">
						<input type="button" class="hidden-button delete-button" value="刪除">
						<input type="button" class="cancel-button hidden" value="取消">
						<input type="submit" class="submit-button hidden" value="提交">
						</form>
					</div>
				</div>

				<div class="moment_response user_own">
					<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
					<div><a href="hotUser.html" class="boy-user-link">Sosoman</a>
					<p>想吃啊
					</p><div class="date">6月18日 7:22pm</div>
						<form> <!--  只有自己的moment有這些button -->
						<input type="button" class="hidden-button" value="編輯">
						<input type="button" class="hidden-button delete-button" value="刪除">
						<input type="button" class="cancel-button hidden" value="取消">
						<input type="submit" class="submit-button hidden" value="提交">
						</form>
					</div>
				</div>

				<div class="moment_response user_own">
					<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
					<div><a href="hotUser.html" class="boy-user-link">Sosoman</a>
					<p>明天再吃好了
					</p><div class="date">6月18日 7:26pm</div>
						<form> <!--  只有自己的moment有這些button -->
						<input type="button" class="gray_button hidden-button" value="編輯">
						<input type="button" class="gray_button hidden-button delete-button" value="刪除">
						<input type="button" class="gray_button cancel-button hidden" value="取消">
						<input type="submit" class="gray_button submit-button hidden" value="提交">
						</form>
					</div>
				</div>

				<div class="moment_response">
					<a href="hotUser.html"><img src="/MyClass/User/KobeIsGod/head.jpg"></a>
					<div><a href="hotUser.html" class="boy-user-link">KobeIsGod</a>
					<p>幹 樓上被到帳號喔
					</p><div class="date">6月19日 9:15am</div>
						<form> <!--  只有自己的moment有這些button -->
						<input type="button" class="hidden-button" value="刪除">
						</form>
					</div>
				</div>

				<div class="moment_response last user_own"> <!-- 最後一個留言必須是"last" class -->
					<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
					<div><a href="hotUser.html" class="boy-user-link">Sosoman</a>
					<p>嘻嘻
					</p><div class="date">6月19日 11:38m</div>
						<form> <!--  只有自己的moment有這些button -->
						<input type="button" class="hidden-button" value="編輯">
						<input type="button" class="hidden-button delete-button" value="刪除">
						<input type="button" class="cancel-button hidden" value="取消">
						<input type="submit" class="submit-button hidden" value="提交">
						</form>
					</div>
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
				<div class="moment_post"> <!-- Case#2 : 不是user_own且沒有gallery的case -->
				<p>熱火贏了 我愛君子劍 ! Ray Gun~~~</p>
				<a href="hotUser.html" class="like-button"><img src="../Pics/heart.png">28</a>
				<a href="hotUser.html" class="respond-button"><img src="../Pics/comment.png">2</a>
				</div>
				<hr>
				<div class="moment_response">
					<a href="hotUser.html"><img src="/MyClass/User/KobeIsGod/head.jpg"></a>
					<div><a href="hotUser.html" class="boy-user-link">KobeIsGod</a>
					<p>不懂偽君子有什麼好...
					</p><div class="date">6月18日 3:20pm</div></div>
				</div>
				<div class="moment_response last">
					<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
					<div><a href="hotUser.html" class="girl-user-link">NancyLin</a>
					<p>靠邀! 我就是喜歡你管我啦~
					</p><div class="date">6月18日 3:55pm</div></div>
				</div>
			</div>
		</div>
		<div class="moment_wrapper">
			<div class="time_title">02:35am</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
				<a href="Home.php" class="wall_poster_username girl-user-link">NancyLin</a>
			</div>
			<div class="moment_content">
				<div class="moment_post"> <!-- Case#3 : 不是user_own但有gallery的case -->
				<p>今天的活動太好完了 ! 認識很多新朋友～ 希望改天還能一起出去玩 !</p>
				<div id="gallery">   <!-- 照片若超過6or7張, 就把後面的照片display:none, 再在第一張和最後一張各加上左右選擇按鍵, 按到之後用js修改display:none(一次把最前面shown picture改成hide, 再把後面第一張的hidden picture改成show)-->
					<a href="./NancyLin/Album/Moment/slide1.jpg" rel="gallery" title="一堆高爾夫球"><img src="./NancyLin/Album/Moment/slide1_h.jpg" width="70" height="70" alt="golf balls"></a>
					<a href="./NancyLin/Album/Moment/slide2.jpg" rel="gallery" title="古老城牆"><img src="./NancyLin/Album/Moment/slide2_h.jpg" width="70" height="70" alt="rock wall"></a>
					<a href="./NancyLin/Album/Moment/slide3.jpg" rel="gallery" title="美麗的城堡"><img src="./NancyLin/Album/Moment/slide3_h.jpg" width="70" height="70" alt="old course"></a>
					<a href="./NancyLin/Album/Moment/slide4.jpg" rel="gallery" title="城堡裡的怪東西"><img src="./NancyLin/Album/Moment/slide4_h.jpg" width="70" height="70" alt="tees"></a>
					<a href="./NancyLin/Album/Moment/slide5.jpg" rel="gallery" title="湖與樹"><img src="./NancyLin/Album/Moment/slide5_h.jpg" width="70" height="70" alt="tree"></a>
					<a href="./NancyLin/Album/Moment/slide6.jpg" rel="gallery" title="旁邊打球的老人們..."><img src="./NancyLin/Album/Moment/slide6_h.jpg" width="70" height="70" alt="ocean course"></a>

				</div>
				<a href="hotUser.html" class="like-button"><img src="../Pics/heart.png">6</a>
				<a href="hotUser.html" class="respond-button"><img src="../Pics/comment.png">23</a>
				</div>
				<hr>
				<div class="moment_response user_own">
					<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
					<div><a href="hotUser.html" class="boy-user-link">Sosoman</a>
					<p>很高興認識妳^^
					</p><div class="date">6月18日 11:38m</div>
						<form> <!--  只有自己的moment有這些button -->
						<input type="button" class="hidden-button" value="編輯">
						<input type="button" class="hidden-button delete-button" value="刪除">
						<input type="button" class="cancel-button hidden" value="取消">
						<input type="submit" class="submit-button hidden" value="提交">
						</form>
					</div>
				</div>
				<div class="moment_response last">
					<a href="hotUser.html"><img src="/MyClass/User/NancyLin/head.jpg"></a>
					<div><a href="hotUser.html" class="girl-user-link">NancyLin</a>
					<p>我也是~ 改天再一起出去玩吧 : )
					</p><div class="date">6月18日 11:38m</div></div>
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
				<div class="moment_post">
				<p>今天看到帥哥 超爽的~</p>
				<a href="hotUser.html" class="like-button"><img src="../Pics/heart.png">2</a>
				<a href="hotUser.html" class="respond-button"><img src="../Pics/comment.png">5</a>
				</div>
			</div>
		</div>
		<div class="moment_wrapper">
			<div class="time_title">03:35am</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/KobeIsGod/head.jpg"></a>
				<a href="Home.php" class="wall_poster_username boy-user-link">KobeIsGod</a>
			</div>
			<div class="moment_content">
				<div class="moment_post">
				<p>幹 剛剛在捷運上遇到Kobe 他好像被抓了 不知道為什麼 QQ~</p>
				<div id="gallery">
					<a href="./KobeIsGod/Album/Moment/1_b.jpg" rel="gallery" title="一堆高爾夫球"><img src="./KobeIsGod/Album/Moment/1_s.jpg" width="70" height="70" alt="golf balls"></a>
				</div>
				<a href="hotUser.html" class="like-button"><img src="../Pics/heart.png">0</a>
				<a href="hotUser.html" class="respond-button"><img src="../Pics/comment.png">0</a>
				</div>
			</div>
		</div>
		<div class="moment_wrapper">
			<div class="time_title">01:17am</div>
			<div class="wall_poster_pic">
				<a href="hotUser.html"><img src="/MyClass/User/Sosoman/head.jpg"></a>
				<a href="Home.php" class="wall_poster_username boy-user-link">Sosoman</a>
			</div>
			<div class="moment_content user_own">
				<div class="moment_post"> <!-- Case#4 : user_own但沒有gallery的case-->
				<p>睡不著覺啊~</p>
				<form> <!--  只有自己的moment有這些button -->
					<input type="button" class="hidden-button" value="編輯">
					<input type="button" class="hidden-button delete-button" value="刪除">
					<input type="button" class="cancel-button hidden" value="取消">
					<input type="submit" class="submit-button hidden" value="提交">
				</form>
				<a href="hotUser.html" class="like-button"><img src="../Pics/heart.png">0</a>
				<a href="hotUser.html" class="respond-button"><img src="../Pics/comment.png">1241</a>
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
