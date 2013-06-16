<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="let people know new friends, create and manage groups and events" />
        <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
        <title>MyClass - 讓妳認識很多新朋友!</title>
        <link href="../css/mainCss.css" type="text/css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/userBackground.js"></script>
        <script>
            $(document).ready(function() {
                // Process Menu Bar
		processMenuBar();

		// Process User Background Area
		preocessUserBackground();
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
		<img class="user_profile_pic_big" src="./Sosoman/head.jpg"><br/>
		<img class="user_profile_pic_small" src="./Sosoman/head1.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head2.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head3.jpg">
		<img class="user_profile_pic_small" src="./Sosoman/head4.jpg">
		</div>
		<div id="username_text">Sosoman<br/>&nbsp&nbsp陳令堯</div>
	</div>
	<div id="main_tabs">
		<ul>
			<li>關於</li>
			<li>動態牆</li>
			<li>相簿</li>
			<li>朋友</li>
			<li>群組</li>
			<li>活動</li>
			<li>文章</li>
			<li>討論版</li>
		</ul>
	</div>
        <div id="home_container">

        </div>
    </body>
</html>
