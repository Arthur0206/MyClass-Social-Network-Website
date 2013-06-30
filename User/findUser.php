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
        <link href="../css/main.css" type="text/css" rel="stylesheet"/>
        <link href="../css/user.css" type="text/css" rel="stylesheet"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
	<script src="../_js/menuBar.js"></script> 
	<script src="../_js/collapsableList.js"></script> 
	<script src="../_js/searchBar.js"></script> 
    <script src="../_js/card.js"></script> 
        <script>
            $(document).ready(function() {
                //Process Menu Bar
		processMenuBar();

                // Process Collapsable List
		processCollapsableList();

		// Process Search Bar
		processSearchBar();
        
        processCard();
            }); // ready
        </script>
    </head>
    <body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
        <!-- <div id="container_frame"> -->
            <div class="search_side_area">
                <!-- Collapse List -->
                <div id="title_text"> 搜尋用戶 - 結果列表 </div>
                <ul id="collapse_list">
                    <li>
                    台北市
                    <ul>
                        <li>淡江大學</li>
                        <li>輔仁大學</li>
                        <li>
                        台灣大學
                        <ul>
                            <li>電機系1年級</li>
                            <li>電機系2年級</li>
                            <li>資工系1年級</li>
                            <li>法律系1年級</li>
                            <li>法律系2年級</li>
                            <li>法律系3年級</li>
                            <li>法律系4年級</li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li>
                    台北縣
                    <ul>
                        <li>政治大學</li>
                        <li>
                        台北師範大學
                        <ul>
                            <li>幼教系2年級</li>
                            <li>特教系3年級</li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li>
                    桃園縣
                    <ul>
                        <li>中央大學</li>
                        <li>青雲科技大學</li>
                        <li>
                        中壢高中
                        <ul>
                            <li>中壢高中3年16班-2002畢業年級</li>
                            <li>中壢高中3年7班</li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li>
                    新竹縣
                    <ul>
                        <li>交通大學</li>
                        <li>
                        新竹女中
                        <ul>
                            <li>新竹女中3年2班</li>
                            <li>新竹女中3年5班</li>
                        </ul>
                        </li>	
                    </ul>
                    </li>
                    <li>
                    苗栗縣
                    <ul>
                        <li>苗栗高中</li>
                    </ul>
                    </li>
                    <li>
                    台中市
                    <ul>
                        <li>台中第一女子高中</li>
                    </ul>
                    </li>
                    <li>
                    台中縣
                    <ul>
                        <li>台中第一男子高中</li>
                    </ul>
                    </li>
                    <li>
                    彰化縣
                    <ul>
                        <li>彰化第一高中</li>
                    </ul>
                    </li>
                    <li>
                    雲林縣
                    <ul>
                        <li>雲林台客天團</li>
                    </ul>
                    </li>
                    <li>
                    嘉義縣
                    <ul>
                        <li>中正大學</li>
                    </ul>
                    </li>
                    <li>
                    高雄市
                    <ul>
                        <li>中山大學</li>
                    </ul>
                    </li>
                    <li>
                    高雄縣
                    <ul>
                        <li>高雄第一男子中學</li>
                    </ul>
                    </li>
                    <li>
                    屏東縣
                    <ul>
                        <li>屏東可愛女孩群組</li>
                    </ul>
                    </li>
                    <li>
                    台東縣
                    <ul>
                        <li>台東白皙女孩團</li>
                    </ul>
                    </li>
                    <li>
                    花蓮縣
                    <ul>
                        <li>阿美族部落群組</li>
                    </ul>
                    </li>
                    <li>
                    宜蘭縣
                    <ul>
                        <li>宜蘭第一女子中學</li>
                    </ul>
                    </li>
                    <li>
                    南投縣
                    <ul>
                        <li>南投師範大學</li>
                    </ul>
                    </li>
                    <li>
                    不分地區群組
                    <ul>
                        <li>Sosomen創業群組</li>
                        <li>華航空姐團</li>
                        <li>乳夫海賊團</li>
                    </ul>
                    </li>
                </ul>

                <!-- End Collapse List -->
            </div>
            <div class="search_center_area">
                <!-- 紅色搜尋bar -->
                <div id="search_list_wrapper">
                    <ul id="search_list">
                        <li class="search_bar_title">群組類別</li>
                        <li><div class="search_bar_dropdown_list_wrapper" style="width:105px">
				<div class="search_bar_dropdown_list_div">
					<ul id="group_class_list" style="width:105px;height:170px;padding:5px">
						<li>不拘</li>
						<li>大學班版</li>
						<li>大學社團</li>
						<li>高中班版</li>
						<li>高中社團</li>
						<li>國中班版</li>
						<li>國中社團</li>
						<li>國小班版</li>
						<li>國小社團</li>
						<li>非學校群組</li>
					</ul>
				</div>
				<h8>不拘</h8><img src="../Pics/triangle.png" height="12" style="float:right;margin-top:2px;margin-right:1px;z-index:1200">
			    </div>
			</li>
                        <li class="search_bar_title">群組性質</li>
                        <li><div class="search_bar_dropdown_list_wrapper" style="width:116px">
				<div class="search_bar_dropdown_list_div">
					<ul id="group_type_list" style="width:116px;height:339px;padding:5px">
						<li>不拘</li>
						<li>家庭</li>
						<li>運動</li>
						<li>時尚</li>
						<li>美容＆美妝</li>
						<li>學習＆研究</li>
						<li>藝術</li>
						<li>旅遊</li>
						<li>玩樂</li>
						<li>電影</li>
						<li>遊戲</li>
						<li>科技</li>
						<li>美食</li>
						<li>交友</li>
						<li>公司＆商務</li>
						<li>音樂</li>
						<li>車＆重機</li>
						<li>創業＆賺錢</li>
						<li>寵物</li>
						<li>冒險</li>
					</ul>
				</div>
				<h8>不拘</h8><img src="../Pics/triangle.png" height="12" style="float:right;margin-top:2px;margin-right:1px">
			    </div>
			</li>
                        <li class="search_bar_title">地區</li>
                        <li><div class="search_bar_dropdown_list_wrapper" style="width:80px">
				<div class="search_bar_dropdown_list_div">
					<ul id="group_area_list" style="width:80px;height:322px;padding:5px">
						<li>不拘</li>
						<li>台北市</li>
						<li>台北縣</li>
						<li>桃園縣</li>
						<li>新竹縣</li>
						<li>苗栗縣</li>
						<li>台中市</li>
						<li>台中縣</li>
						<li>彰化縣</li>
						<li>雲林縣</li>
						<li>嘉義縣</li>
						<li>台南縣</li>
						<li>高雄市</li>
						<li>高雄縣</li>
						<li>屏東縣</li>
						<li>台東縣</li>
						<li>花蓮縣</li>
						<li>宜蘭縣</li>
						<li>南投縣</li>
					</ul>
				</div>
				<h8>不拘</h8><img src="../Pics/triangle.png" height="12" style="float:right;margin-top:2px;margin-right:1px">
			    </div>
			</li>
                        <div id="keyword_submit_button"><img src="../Pics/button.png" height="40"></div>
                        <input type="text" name="fname" id="keyword_input" value="請輸入關鍵字">
                        <li class="search_bar_title" id="keyword_title">關鍵字</li>
                    </ul>
                </div>
                <!-- End of 紅色搜尋bar -->
                <div id="search_result_wrapper">
                    <div id="search_result_div">
                        <div id="sort_list_wrapper">
                            <ul id="sort_list">
                                <li id="sort_bar_dropdown_list">人氣<li>
                                <li id="sort_bar_title">排序</li>
                            </ul>
                        </div>

                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl1.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">郭雪芙</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">18<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">128</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl2.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">徐若瑄</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">43<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">98</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl3.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">陳妍希</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">29<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">128</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl4.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">侯佩岑</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">35<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">278</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl5.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">隋棠</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">36<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">73</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl6.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">李豫芬</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">29<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">209</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl7.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">馮媛甄</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">28<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">38</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    	<div class="user_continer">
                    		<div class="user card">
                    			<a class="user-link" href="albumPage.php">
                    				<img class="user-image card-image" alt="" src="../Pics/girl8.jpg">
                    				<div class="user-name-wrapper"> 
                    					<h1 class="user-name">邵庭</h1>
                    				</div>
                    				<div class="user-info"> 
                    					<span class="user-age">26<img class="gender-icon" alt="女" src="../Pics/Female.png"></span>
                    					<span class="user-location">新北市</span>
                    					<span class="like">
                    						<span class="like-count">35</span>
                    						<img class="like-icon" alt="讚" src="../Pics/icon_like.png">
                    					</span>
                                        <img class="action" src="../Pics/list-plus.png">
                    				</div>
                    			</a>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
    </body>
</html>
