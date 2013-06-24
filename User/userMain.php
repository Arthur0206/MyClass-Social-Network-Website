<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="let people know new friends, create and manage groups and events" />
        <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
        <title>MyClass - 讓妳認識很多新朋友!</title>
        <link href="../css/form.css" type="text/css" rel="stylesheet">
        <link href="../css/mainCss.css" type="text/css" rel="stylesheet">
        <link href="../css/about.css" type="text/css" rel="stylesheet">
        <link href="../css/album.css" type="text/css" rel="stylesheet">
        <link href="../css/friend.css" type="text/css" rel="stylesheet">
	<link href="../fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/userBackground.js"></script>
	<script src="../_js/secondBar.js"></script>
	<script src="../_js/settingPanel.js"></script>
	<script src="../_js/aboutPanel.js"></script>
	<script src="../_js/wallPanel.js"></script>
	<script src="../_js/eventPanel.js"></script>
	<script src="../_js/albumPanel.js"></script>
	<script src="../_js/friendPanel.js"></script>
	<script src="../_js/blockEditButton.js"></script>

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
				
				// Process Event Panel
				processEventPanel();
				
				// Process Album Panel
				processAlbumPanel();
        		
				// Process Friend Panel
				processFriendPanel();

				// Process Block Edit Button (group_block, user_block, board_block, event_block 右下角gray_button)
				processBlockEditButton();

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
        <div id="user_background" class="boy_user_background" style="position:relative">
		<div id="user_profile_pics">
		<img class="user_profile_pic_big" src="./Sosoman/head.jpg"></br>
		<img class="user_profile_pic_small" src="./Sosoman/head1.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head2.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head3.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head4.jpg">
		</div>
		<div id="username_text">Sosoman<br/>&nbsp&nbsp陳令堯</div>
		<!--<span id="hide_background_button" style="position:absolute;left:46%;bottom:1px;color:#333333;background-color:#edebe2;padding:5px 10px;border-radius:10px 10px 0 0;box-shadow:0px 0px 2px 1px #acacac;cursor:pointer">最小化背景圖片</span>-->
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
	<?php 
	require_once('aboutPanel.php'); 
	require_once('wallPanel.php'); 
	require_once('albumPanel.php'); 
	require_once('friendPanel.php'); 
	require_once('groupPanel.php'); 
	require_once('eventPanel.php'); 
	require_once('articlePanel.php'); 
	require_once('boardPanel.php'); 
	?> 
    </body>
</html>
