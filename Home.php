<?php
// 建立 session
if (!isset($_SESSION)) {
  	session_start();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="let people know new friends, create and manage groups and events" />
        <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
        <title>MyClass - 讓妳認識很多新朋友!</title>
        <link href="./css/main.css" type="text/css" rel="stylesheet">
        <link href="./css/board.css" type="text/css" rel="stylesheet">
        <link href="./css/user.css" type="text/css" rel="stylesheet">
        <link href="./css/event.css" type="text/css" rel="stylesheet">
        <link href="./css/group.css" type="text/css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="./_js/menuBar.js"></script>
    <script src="./_js/card.js"></script>
        <script>
            $(document).ready(function() {
                /* ------------------------------------ Process Menu Bar ----------------------------------- */
		        processMenuBar();
                processCard();
            }); // ready
        </script> 
    </head>
    <body>
	<?php 
	/* include top menu bar */ 
	require_once('./menubar.php'); 
	?>
    <div id="HomeAd">
        <img id="HomeAd_pic" src="./Pics/Ad.png">
    </div>
    <div id="home_content_wrapper">
        <div class="recommend_wrapper" id="recommend_wrapper_1">
            <div class="recommend_title_block">
                <img src="./Pics/like.png" height=18px> 
                <span class="recommend_title"> 
                    附近的使用者 
                </span>
            </div>
            <div id="recommend_block_1" class="recommend_block">
            	<div class="user_continer">
            		<div class="user card">
            			<a class="user-link" href="albumPage.php">
            				<img class="user-image card-image" alt="" src="./Pics/girl2.jpg">
            				<div class="user-name-wrapper"> 
            					<h1 class="user-name">徐若瑄</h1>
            				</div>
            				<div class="user-info"> 
            					<span class="user-age">18<img class="gender-icon" alt="女" src="./Pics/Female.png"></span>
            					<span class="user-location">新北市</span>
                            </div>
                            <div class="user-action-bar">
            					<img class="bookmark" alt="讚" src="./Pics/pin.png">
                                <img class="action" src="./Pics/friend-icon-2.png">
                                <span class="status">我關注了她</span>
            				</div>
            
            			</a>
            		</div>
            	</div>
            	<div class="user_continer">
            		<div class="user card">
            			<a class="user-link" href="albumPage.php">
            				<img class="user-image card-image" alt="" src="./Pics/girl3.jpg">
            				<div class="user-name-wrapper"> 
            					<h1 class="user-name">陳妍希</h1>
            				</div>
            				<div class="user-info"> 
            					<span class="user-age">18<img class="gender-icon" alt="女" src="./Pics/Female.png"></span>
            					<span class="user-location">新北市</span>
                            </div>
                            <div class="user-action-bar">
            					<img class="bookmark" alt="讚" src="./Pics/pin.png">
                                <img class="action" src="./Pics/friend-icon-2.png">
                                <span class="status">我關注了她</span>
            				</div>
            
            			</a>
            		</div>
            	</div>
            	<div class="user_continer">
            		<div class="user card">
            			<a class="user-link" href="albumPage.php">
            				<img class="user-image card-image" alt="" src="./Pics/girl1.jpg">
            				<div class="user-name-wrapper"> 
            					<h1 class="user-name">郭雪芙</h1>
            				</div>
            				<div class="user-info"> 
            					<span class="user-age">18<img class="gender-icon" alt="女" src="./Pics/Female.png"></span>
            					<span class="user-location">新北市</span>
                            </div>
                            <div class="user-action-bar">
            					<img class="bookmark" alt="讚" src="./Pics/pin.png">
                                <img class="action" src="./Pics/friend-icon-2.png">
                                <span class="status">我關注了她</span>
            				</div>
            
            			</a>
            		</div>
            	</div>
            	<div class="user_continer">
            		<div class="user card">
            			<a class="user-link" href="albumPage.php">
            				<img class="user-image card-image" alt="" src="./Pics/girl2.jpg">
            				<div class="user-name-wrapper"> 
            					<h1 class="user-name">徐若瑄</h1>
            				</div>
            				<div class="user-info"> 
            					<span class="user-age">18<img class="gender-icon" alt="女" src="./Pics/Female.png"></span>
            					<span class="user-location">新北市</span>
                            </div>
                            <div class="user-action-bar">
            					<img class="bookmark" alt="讚" src="./Pics/pin.png">
                                <img class="action" src="./Pics/friend-icon-2.png">
                                <span class="status">我關注了她</span>
            				</div>
            
            			</a>
            		</div>
            	</div>
            	<div class="user_continer">
            		<div class="user card">
            			<a class="user-link" href="albumPage.php">
            				<img class="user-image card-image" alt="" src="./Pics/girl3.jpg">
            				<div class="user-name-wrapper"> 
            					<h1 class="user-name">陳妍希</h1>
            				</div>
            				<div class="user-info"> 
            					<span class="user-age">18<img class="gender-icon" alt="女" src="./Pics/Female.png"></span>
            					<span class="user-location">新北市</span>
                            </div>
                            <div class="user-action-bar">
            					<img class="bookmark" alt="讚" src="./Pics/pin.png">
                                <img class="action" src="./Pics/friend-icon-2.png">
                                <span class="status">我關注了她</span>
            				</div>
            
            			</a>
            		</div>
            	</div>
            	<div class="user_continer">
            		<div class="user card">
            			<a class="user-link" href="albumPage.php">
            				<img class="user-image card-image" alt="" src="./Pics/girl4.jpg">
            				<div class="user-name-wrapper"> 
            					<h1 class="user-name">侯佩岑</h1>
            				</div>
            				<div class="user-info"> 
            					<span class="user-age">18<img class="gender-icon" alt="女" src="./Pics/Female.png"></span>
            					<span class="user-location">新北市</span>
                            </div>
                            <div class="user-action-bar">
            					<img class="bookmark" alt="讚" src="./Pics/pin.png">
                                <img class="action" src="./Pics/friend-icon-2.png">
                                <span class="status">我關注了她</span>
            				</div>
            
            			</a>
            		</div>
            	</div>
            </div>
        </div>
        <div class="recommend_wrapper" id="recommend_wrapper_2">
            <div class="recommend_title_block">
                <img src="./Pics/like.png" height=18px> 
                <span class="recommend_title"> 
                    您有興趣參加這個聯誼嗎? 
                </span>
            </div>
            <div id="recommend_block_2" class="recommend_block">
                <div>
    			<div class="group card">
    				<a class="group-image-link" href="groupPage.php">
    					<img class="group-image card-image" alt="" src="./Pics/girl-group-2.jpeg">
    					<div class="group-describe-wrapper"> 
    						<h1 class="group-headline">
        						<span class="group-type" style="background-color: #99CC00">
        							班版
        						</span>
                                中山女中三年五班
                            </h1>
    						<p class="group-description">
                                3年5班請加入 不是本班的請勿加入, 嚴禁男生加入, 若再犯會被檢舉的, 謝謝合作！
                            </p>
    					</div>
    					<div class="group-info-wrapper"> 
                            <div class="group-location"> 
                                地點: 台北市
                            </div>
                            <div class="group-member-count">
                                42人
                            </div>
    						<div class="group-action-bar">
                				<span class="status">已報名</span>
                                <img class="action" src="./Pics/list-plus.png">
                				<img class="bookmark" src="./Pics/pin.png">
                				<img class="facebook-like" src="./Pics/facebook-like.png">
    						</div>
    					</div>
    				</a>
    			</div>
                <div style="float: left; line-height: 250px; padding-left: 10px; padding-right: 5px; font-size: 20px;"> 
                    vs
                </div>
    			<div class="group card">
    				<a class="group-image-link" href="groupPage.php">
    					<img class="group-image card-image" alt="" src="./Pics/date-club.jpg">
    					<div class="group-describe-wrapper"> 
    						<h1 class="group-headline">
        						<span class="group-type" style="background-color: #99CC00">
        							班版
        						</span>
                                文化大學外文系三年級 (2006已畢業)
                            </h1>

    						<p class="group-description">
                                快期末考了, 大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧
                            </p>
    					</div>
    					<div class="group-info-wrapper"> 
                            <div class="group-location"> 
                                地點: 台北市
                            </div>
                            <div class="group-member-count">
                                42人
                            </div>
    						<div class="group-action-bar">
                				<span class="status">已加入</span>
                                <img class="action" src="./Pics/list-plus.png">
                				<img class="bookmark" src="./Pics/pin.png">
                				<img class="facebook-like" src="./Pics/facebook-like.png">
    						</div>
    					</div>
    				</a>
    			</div>
                <div style="float: right; margin-top: 6px; margin-right: 6px;">
                    <div style=" margin-top: 0px; line-height: 30px;font-size: 17px; background: linear-gradient(#FFFFFF, #E4E4E4) repeat scroll 0 0 #FFFFFF; color: #000000; border-radius: 3px;border: 1px solid #CCCCCC; width: 187px; padding: 10px; height: 88px;"> 
                        如果這兩個群組舉辦聯誼, 您會有興趣嗎?
                    </div>
                    <div style=" margin-top: 6px; line-height: 19px;font-size: 17px; background-image: linear-gradient(#E3262E, #AB171E); color: #FFFFFF; border-radius: 3px;border: 1px solid #990A0F; width: 187px; padding: 10px; text-align: center; cursor: pointer;"> 
                        有興趣
                    </div>
                    <div style=" margin-top: 6px; line-height: 19px;font-size: 17px; background: linear-gradient(#FFFFFF, #E4E4E4) repeat scroll 0 0 #FFFFFF; color: #000000; border-radius: 3px;border: 1px solid #CCCCCC; width: 187px; padding: 10px; text-align: center; cursor: pointer;"> 
                        沒興趣
                    </div>
                    <div style=" margin-top: 6px; line-height: 19px;font-size: 17px; background: linear-gradient(#FFFFFF, #E4E4E4) repeat scroll 0 0 #FFFFFF; color: #000000; border-radius: 3px;border: 1px solid #CCCCCC; width: 187px; padding: 10px; text-align: center; cursor: pointer;"> 
                        不確定
                    </div>
                </div>
            </div>
            <div>
    			<div class="group card">
    				<a class="group-image-link" href="groupPage.php">
    					<img class="group-image card-image" alt="" src="./Pics/girl-group-2.jpeg">
    					<div class="group-describe-wrapper"> 
    						<h1 class="group-headline">
        						<span class="group-type" style="background-color: #99CC00">
        							班版
        						</span>
                                中山女中三年五班
                            </h1>
    						<p class="group-description">
                                3年5班請加入 不是本班的請勿加入, 嚴禁男生加入, 若再犯會被檢舉的, 謝謝合作！
                            </p>
    					</div>
    					<div class="group-info-wrapper"> 
                            <div class="group-location"> 
                                地點: 台北市
                            </div>
                            <div class="group-member-count">
                                42人
                            </div>
    						<div class="group-action-bar">
                				<span class="status">已報名</span>
                                <img class="action" src="./Pics/list-plus.png">
                				<img class="bookmark" src="./Pics/pin.png">
                				<img class="facebook-like" src="./Pics/facebook-like.png">
    						</div>
    					</div>
    				</a>
    			</div>
                <div style="float: left; line-height: 250px; padding-left: 10px; padding-right: 5px; font-size: 20px;"> 
                    vs
                </div>
    			<div class="group card">
    				<a class="group-image-link" href="groupPage.php">
    					<img class="group-image card-image" alt="" src="./Pics/date-club.jpg">
    					<div class="group-describe-wrapper"> 
    						<h1 class="group-headline">
        						<span class="group-type" style="background-color: #99CC00">
        							班版
        						</span>
                                文化大學外文系三年級 (2006已畢業)
                            </h1>

    						<p class="group-description">
                                快期末考了, 大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧大家一起來唸書吧
                            </p>
    					</div>
    					<div class="group-info-wrapper"> 
                            <div class="group-location"> 
                                地點: 台北市
                            </div>
                            <div class="group-member-count">
                                42人
                            </div>
    						<div class="group-action-bar">
                				<span class="status">已加入</span>
                                <img class="action" src="./Pics/list-plus.png">
                				<img class="bookmark" src="./Pics/pin.png">
                				<img class="facebook-like" src="./Pics/facebook-like.png">
    						</div>
    					</div>
    				</a>
    			</div>
                <div style="float: right; margin-top: 6px; margin-right: 6px;">
                    <div style=" margin-top: 0px; line-height: 30px;font-size: 17px; background: linear-gradient(#FFFFFF, #E4E4E4) repeat scroll 0 0 #FFFFFF; color: #000000; border-radius: 3px;border: 1px solid #CCCCCC; width: 187px; padding: 10px; height: 88px;"> 
                        如果這兩個群組舉辦聯誼, 您會有興趣嗎?
                    </div>
                    <div style=" margin-top: 6px; line-height: 19px;font-size: 17px; background-image: linear-gradient(#E3262E, #AB171E); color: #FFFFFF; border-radius: 3px;border: 1px solid #990A0F; width: 187px; padding: 10px; text-align: center; cursor: pointer;"> 
                        有興趣
                    </div>
                    <div style=" margin-top: 6px; line-height: 19px;font-size: 17px; background: linear-gradient(#FFFFFF, #E4E4E4) repeat scroll 0 0 #FFFFFF; color: #000000; border-radius: 3px;border: 1px solid #CCCCCC; width: 187px; padding: 10px; text-align: center; cursor: pointer;"> 
                        沒興趣
                    </div>
                    <div style=" margin-top: 6px; line-height: 19px;font-size: 17px; background: linear-gradient(#FFFFFF, #E4E4E4) repeat scroll 0 0 #FFFFFF; color: #000000; border-radius: 3px;border: 1px solid #CCCCCC; width: 187px; padding: 10px; text-align: center; cursor: pointer;"> 
                        不確定
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </body>
</html>
