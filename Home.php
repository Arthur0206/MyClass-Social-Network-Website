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
                    <span id="hot-title-span-1"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">人氣用戶</span>
                    <span id="hot-title-span-2"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">熱門文章</span>
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

                <!-- 熱門文章 -->
                <div class="hot-block">
                    <a href="">
                        <div class="hot-article">
<link rel="stylesheet" href="css/mainCss.css" type="text/css" media="screen" title="no title" charset="utf-8">

                            <div class="hot-article-words">
								<h1 style="color: #632F34">
									Joke版
								</h1>
                                <h2>
                                    [神人]台北捷運站清純白衣正妹?
                                </h2>
                                <p>
                                今天下午三點半左右在台北捷運站看到一個穿白色T-shirt + 小短褲的女生.驚為天人~
                                </p>
                            </div>
                            <div class="hot-article-info">
                                <a class="boy-user-link" href="articleUser.html">ricky0214</a> 發表
                                <span class="hot-article-good">35推</span>
                            </div>

                        </div>
                    </a>
                    <a href="">
                        <div class="hot-article">

                            <div class="hot-article-words">
								<h1 style="color: #E28035">
									帥哥美女版
								</h1>
                                <h2>
                                    [神人]台北捷運站清純白衣正妹?
                                </h2>
                                <p>
                                今天下午三點半左右在台北捷運站看到一個穿白色T-shirt + 小短褲的女生.驚為天人~
                                </p>
                            </div>
                            <div class="hot-article-info">
                                <a class="boy-user-link" href="articleUser.html">ricky0214</a> 發表
                                <span class="hot-article-bad">35噓</span>
                            </div>

                        </div>
                    </a>
                    <a href="">
                        <div class="hot-article">

                            <div class="hot-article-words">
								<h1 style="color: #E5737D">
									彩妝版
								</h1>
                                <h2>
                                    [神人]台北捷運站清純白衣正妹?
                                </h2>
                                <p>
                                今天下午三點半左右在台北捷運站看到一個穿白色T-shirt + 小短褲的女生.驚為天人~
                                </p>
                            </div>
                            <div class="hot-article-info">
                                <a class="girl-user-link" href="articleUser.html">mini158</a> 發表
                                <span class="hot-article-good">35推</span>
                            </div>

                        </div>
                    </a>
                    <a href="">
                        <div class="hot-article">

                            <div class="hot-article-words">
								<h1 style="color: #E51937">
									NBA版
								</h1>
                                <h2>
                                    [神人]台北捷運站清純白衣正妹?
                                </h2>
                                <p>
                                今天下午三點半左右在台北捷運站看到一個穿白色T-shirt + 小短褲的女生.驚為天人~
                                </p>
                            </div>
                            <div class="hot-article-info">
                                <a class="girl-user-link" href="articleUser.html">mini158</a> 發表
                                <span class="hot-article-bad">35噓</span>
                            </div>

                        </div>
                    </a>
                    <a href="">
                        <div class="hot-article">

                            <div class="hot-article-words">
								<h1 style="color: #819351">
									八卦版
								</h1>
                                <h2>
                                    [神人]台北捷運站清純白衣正妹?
                                </h2>
                                <p>
                                今天下午三點半左右在台北捷運站看到一個穿白色T-shirt + 小短褲的女生.驚為天人~
                                </p>
                            </div>
                            <div class="hot-article-info">
                                <a class="boy-user-link" href="articleUser.html">booth</a> 發表
                                <span class="hot-article-good">35推</span>
                            </div>

                        </div>
                    </a>
                    <a href="">
                        <div class="hot-article">

                            <div class="hot-article-words">
								<h1 style="color: #E28035">
									帥哥美女版
								</h1>
                                <h2>
                                    [神人]台北捷運站清純白衣正妹?
                                </h2>
                                <p>
                                今天下午三點半左右在台北捷運站看到一個穿白色T-shirt + 小短褲的女生.驚為天人~
                                </p>
                            </div>
                            <div class="hot-article-info">
                                <a class="boy-user-link" href="articleUser.html">booth</a> 發表
                                <span class="hot-article-good">35推</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="hot-title-div">
                    <span id="hot-title-span-3"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">熱門討論版</span>
                    <span id="hot-title-span-4"><img src="Pics/onfire.gif" alt="onfire" class="fire-pic">熱門群組＆活動</span>
                </div>

                <!-- 熱門討論版 -->
                <div class="hot-block">
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                八卦版
                            </h1>
                            <p>
                            分享討論各種八卦 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                八卦版
                            </h1>
                            <p>
                            分享討論各種八卦 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                帥哥美女版
                            </h1>
                            <p>
                            神人,分享,討論美女 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                遊戲版
                            </h1>
                            <p>
                            遊戲討論,組團,... <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                Hate版
                            </h1>
                            <p>
                            有不爽的是就來這裡吧 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                Sex版
                            </h1>
                            <p>
                            18禁 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                Joke版
                            </h1>
                            <p>
                            輕鬆一下 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                美食版
                            </h1>
                            <p>
                            晚餐該吃什麼呢？ <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                旅遊版
                            </h1>
                            <p>
                            國內外旅遊 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                旅遊版
                            </h1>
                            <p>
                            國內外旅遊 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                旅遊版
                            </h1>
                            <p>
                            國內外旅遊 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                    <a href="">
                        <div class="hot-board">
                            <h1>
                                旅遊版
                            </h1>
                            <p>
                            國內外旅遊 <span class="hot-board-count">爆 2013</span>
                            </p>
                        </div>
                    </a>
                </div>

                <!-- 熱門群組&活動 -->
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
            </div>

    </body>
</html>
