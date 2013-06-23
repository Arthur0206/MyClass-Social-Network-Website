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
	<link href="../fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/userBackground.js"></script>
	<script src="../_js/secondBar.js"></script>
	<script src="../_js/albumPanel.js"></script>
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
        		
				// Process Album Panel
				processAlbumPanel();
        		
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

    </body>
</html>
