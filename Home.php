<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="let people know new friends, create and manage groups and events" />
        <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
        <title>MyClass - 讓妳認識很多新朋友!</title>
        <link href="./css/mainCss.css" type="text/css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="./_js/menuBar.js"></script>
        <script>
            $(document).ready(function() {
                /* ------------------------------------ Process Menu Bar ----------------------------------- */
		processMenuBar();

                /* ---------------------------------- Process Hot User Block --------------------------------- */
                $('.hot-user').hover(
                function() {
                    $(this).css('background-color', '#eef2e0');
                }, // mouseover
                function() {
                    $(this).css('background-color', '#FFFFF2');
                } // mouseout
                ); // hover
            }); // ready
        </script> 
    </head>
    <body>
	<?php 
	/* include top menu bar */ 
	require_once('./menubar.php'); 
	?>
        <div id="homeAd">
            <div id="myclass-definition">
                <p>MyClass是一個專門為學生 (包括已經畢業的學生) 打造的網站.<br/>
                MyClass能幫妳輕鬆認識新朋友 , 與老朋友聯繫感情 , 建立班版及其它群組 , 談天說地 , 發起各種活動 , 以及聯誼 .</p>
                以下是MyClass的四大功能 :<br/>
                <span id="button-1">群組</span>
                <span id="button-2">活動</span>
                <span id="button-3">討論版</span>
                <span id="button-4">用戶互動</span>
                <p style="clear:left">想要認識更多新朋友,讓生活更加多采多姿嗎?趕快註冊,並建立自己的班版和群組吧!</p>
            </div>        
        </div>

            <div id="home_container">
                <div class="hot-title-div">
                    <span id="hot-title-span-1"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">熱門群組</span>
                    <span id="hot-title-span-2"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">熱門活動</span>
                </div>
                <!-- 熱門群組 -->
                <div class="hot-block">
                        <div class="hot-group">
			    <a href=""> <img src="./User/Mini157/head.jpg" width="160px" height="104px"></a>
                            <a href="">
                            <h1>政治大學</h1>
			    </a>
                            <span class="hot-group-count">人數 8567人</span>
                        </div>
                        <div class="hot-group">
			    <a href=""> <img src="./User/Sosoman/head.jpg" width="160px" height="104px"></a>
                            <a href="">
                            <div><h1 class="long_title">中壢高中3年13班-2002畢</h1></div>
			    </a>
                            <span class="hot-group-count">人數 7人</span>
                        </div>
                        <div class="hot-group">
			    <a href=""> <img src="./User/NancyLin/head.jpg" width="160px" height="104px"></a>
                            <a href="">
                            <h1>台灣大學醫學系4年級</h1>
			    </a>
                            <span class="hot-group-count">人數 45人</span>
                        </div>
                        <div class="hot-group">
			    <a href=""> <img src="./User/KobeIsGod/head.jpg" width="160px" height="104px"></a>
                            <a href="">
                            <h1>成功大學土木系1年級</h1>
			    </a>
                            <span class="hot-group-count">人數 64人</span>
                        </div>

                        <div class="hot-group">
			    <a href=""> <img src="./User/Annie/head.jpg" width="160px" height="104px"></a>
                            <a href="">
			    <h1>輔仁大學法律系1年級</h1>
			    </a>
                            <span class="hot-group-count">人數 39人</span>
                        </div>

                        <div class="hot-group">
			    <a href=""> <img src="./User/NinaPrincess/head.jpg" width="160px" height="104px"></a>
                            <a href="">
                            <h1>中興大學歷史系-2006畢</h1>
			    </a>
                            <span class="hot-group-count">人數 58人</span>
                        </div>
                </div>

                <!-- 熱門活動 -->
                <div class="hot-block">
                    <div class="hot-event">
                        <a target="" href="hotUser.html">
                            <img class="hot-event-pic" width="93" height="93" src="./Group/GroupPics/groupPic1.png">
                        </a>
                        <a target="" href="">
                            <div class="hot-event-words">
                                <h1>
                                    三對三鬥牛比賽
                                </h1>
                                <p>
                                來鬥牛吧!贏的隊可以得到景美區最強的名號.打11分.三分球算兩分.男生女混合賽.
                                </p>
                            </div>
                        </a>
                        <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                        <div class="hot-event-info">
                            <p>
                            時間: 5月24日(六) 18:30pm  - 22:30pm<br/>
                            地點: 景美橋下球場
                            </p>
                        </div>
                        <span class="hot-event-count">53人已參加</span>     

                    </div>
                    <div class="hot-event">
                        <a target="" href="hotUser.html">
                            <img class="hot-event-pic" width="91" height="91" src="./Group/GroupPics/GroupPic2.png">
                        </a>
                        <a target="" href="">
                            <div class="hot-event-words">
                                <h1>
                                    成大土木系一年級徵聯誼
                                </h1>
                                <p>
                                大家好!我們是成功踏學土木系的新生.我們都是非常有誠意的男生,希望能夠和妳們聯誼! 
                                </p>
                            </div>
                        </a>
                        <span class="hot-event-type" style="background-color: #336699">社團&活動</span>
                        <div class="hot-event-info">
                            <p>
                            時間: 5月24日(六) 18:30pm  - 22:30pm<br/>
                            地點: 成功大學校門口
                            </p>

                        </div>
                        <span class="hot-event-count">53人已參加</span>

                    </div>
                    <div class="hot-event">
                        <a target="" href="hotUser.html">
                            <img class="hot-event-pic" width="91" height="91" src="./Group/GroupPics/GroupPic3.png">
                        </a>
                        <a target="" href="">
                            <div class="hot-event-words">
                                <h1>
                                    東海大學吉他社成果發表會
                                </h1>
                                <p>
                                一年一度的成果發表會來囉.希望大家踴躍參加.也歡迎飛社員參觀.我們會準備pizza和其他小點心喔～
                                </p>
                            </div>
                        </a>
                        <span class="hot-event-type" style="background-color: #99CC00">聯誼</span>
                        <div class="hot-event-info">
                            <p>
                            時間: 5月24日(六) 18:30pm  - 22:30pm<br/>
                            地點: 東海大學大禮堂
                            </p>
                        </div>
                        <span class="hot-event-count">53人已參加</span>                
                    </div>
                </div>

                <div class="hot-title-div">
                    <span id="hot-title-span-3"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">熱門討論版＆文章</span>
                    <span id="hot-title-span-4"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">人氣用戶</span>
                </div>

                <!-- 熱門討論版＆文章 -->
                <div class="hot-block">
                        <div class="hot-board">
<link rel="stylesheet" href="css/mainCss.css" type="text/css" media="screen" title="no title" charset="utf-8">
				<a href=""><h1 style="background-color: #819351; color: #FFFFFF">
					 八卦版
				</h1></a>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[問卦]最近毒澱粉事件鬧得很兇, 請問有沒有相關的八卦？</span>
					</a>
                            		<span class="hot-article-info">
						<a class="girl-user-link" href="articleUser.html">IloveBlack2</a> 發表 &nbsp
                                		<span class="hot-article-good">35推</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[問卦]馬英九到底是不是Gay?&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
					</a>
                            		<span class="hot-article-info">
						<a class="boy-user-link" href="articleUser.html">ricky0214</a> 發表 &nbsp
                                		<span class="hot-article-bad">298噓</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[新聞]最強混血女神莉亞上圍暴漲 鬆肚皮曝光嚇人</span>
					</a>
                            		<span class="hot-article-info">
						<a class="boy-user-link" href="articleUser.html">jackytien</a> 發表 &nbsp
                                		<span class="hot-article-good">35推</span>
                            		</span>
                            	</div>
                        </div>

                        <div class="hot-board">
				<a href=""><h1 style="background-color: #E28035; color: #FFFFFF">
					 帥哥美女版
				</h1></a>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[神人]今天路過西門町 發現一位身材還不錯喝醉酒的正妹</span>
					</a>
                            		<span class="hot-article-info">
						<a class="boy-user-link" href="articleUser.html">sky13795</a> 發表 &nbsp
                                		<span class="hot-article-good">35推</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[正妹]常腿正妹 第153彈&nbsp&nbsp&nbsp&nbsp&nbsp</span>
					</a>
                            		<span class="hot-article-info">
						<a class="boy-user-link" href="articleUser.html">GT125</a> 發表 &nbsp
                                		<span class="hot-article-good">96推</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[新聞]輕便學士服這樣好犯規!Candice秀美腿</span>
					</a>
                            		<span class="hot-article-info">
						<a class="boy-user-link" href="articleUser.html">Reich</a> 發表 &nbsp
                                		<span class="hot-article-good">107推</span>
                            		</span>
                            	</div>
                        </div>

                        <div class="hot-board">
				<a href=""><h1 style="background-color: #E5737D; color: #FFFFFF">
					 彩妝版
				</h1></a>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[心得]挺鼻小臉尖下巴!!修容打亮 步驟教學文</span>
					</a>
                            		<span class="hot-article-info">
						<a class="girl-user-link" href="articleUser.html">annasofi</a> 發表 &nbsp
                                		<span class="hot-article-good">59推</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[問題]請問Lavshuca的蜜粉哪邊還買得到？</span>
					</a>
                            		<span class="hot-article-info">
						<a class="girl-user-link" href="articleUser.html">fuliiioops</a> 發表 &nbsp
                                		<span class="hot-article-good">19推</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[心得]日本藥妝必買 visee四色腮紅盤</span>
					</a>
                            		<span class="hot-article-info">
						<a class="girl-user-link" href="articleUser.html">fino0127</a> 發表 &nbsp
                                		<span class="hot-article-good">17推</span>
                            		</span>
                            	</div>
                        </div>

                        <div class="hot-board">
				<a href=""><h1 style="background-color: #E51937; color: #FFFFFF">
					 NBA版
				</h1></a>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[討論]大家渭河這麼討厭熱火?？&nbsp&nbsp&nbsp&nbsp</span>
					</a>
                            		<span class="hot-article-info">
						<a class="girl-user-link" href="articleUser.html">bee12</a> 發表 &nbsp
                                		<span class="hot-article-good">77推</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[討論]波波比萊里偉大?&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
					</a>
                            		<span class="hot-article-info">
						<a class="boy-user-link" href="articleUser.html">oldeight2009</a> 發表 &nbsp
                                		<span class="hot-article-good">167推</span>
                            		</span>
                            	</div>
                        	<div class="hot-article-words">
                                	<a href="articleUser.html"><span class="hot-article-title">
                                    		[情報]Green打破冠軍賽的三分球紀錄</span>
					</a>
                            		<span class="hot-article-info">
						<a class="boy-user-link" href="articleUser.html">chanon</a> 發表 &nbsp
                                		<span class="hot-article-good">201推</span>
                            		</span>
                            	</div>
                        </div>
                </div>

                <!-- 人氣用戶 -->
                <div class="hot-block">
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/NancyLin/head.jpg">
                        </a>
                        <a class="girl-user-link" href="hotUser.html">NancyLin</a>
                        <a class="black-link" href="hotUserGroup.html">台灣大學生科系</a>
                    </div>
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/Mini157/head.jpg">
                        </a>
                        <a class="girl-user-link" href="hotUser.html">Mini157</a>
                        <a class="black-link" href="hotUserGroup.html">淡江大學外文系</a>
                    </div>
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/NinaPrincess/head.jpg">
                        </a>
                        <a class="girl-user-link" href="hotUser.html">NinaPrincess</a>
                        <a class="black-link" href="hotUserGroup.html">中興大學歷史系</a>
                    </div>
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/Ruby0627/head.jpg">
                        </a>
                        <a class="girl-user-link" href="hotUser.html">Ruby0627</a>
                        <a class="black-link" href="hotUserGroup.html">輔仁大學日文系</a>
                    </div>
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/NamiChang1987/head.jpg">
                        </a>
                        <a class="girl-user-link" href="hotUser.html">NamiChang1987</a>
                        <a class="black-link" href="hotUserGroup.html">東華大學財經系</a>
                    </div>
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/Sosoman/head.jpg">
                        </a>
                        <a class="boy-user-link" href="hotUser.html">Sosoman</a>
                        <a class="black-link" href="hotUserGroup.html">中興大學電機系</a>
                    </div>
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/Annie/head.jpg">
                        </a>
                        <a class="girl-user-link" href="hotUser.html">Annie</a>
                        <a class="black-link" href="hotUserGroup.html">世新大學廣電系</a>
                    </div>
                    <div class="hot-user">
                        <a target="" href="hotUser.html">
                            <img class="hot-user-pic" width="113" height="110" src="User/KobeIsGod/head.jpg">
                        </a>
                        <a class="boy-user-link" href="hotUser.html">KobeIsGod</a>
                        <a class="black-link" href="hotUserGroup.html">台灣大學動物系</a>
                    </div>
                </div>
            </div>

    </body>
</html>
