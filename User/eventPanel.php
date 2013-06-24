<!--
javascript 貼 xml 時, 把所有events照 月份 以及"還沒開始""正在進行""已經結束"來分. 如若六月份中有還沒開始, 正在進行, 已經結束的活動, 則會出現3個6月份title.

按到filter按鍵時, 在把對應的wrapper hide
 -->

		<div id="event_panel" class="panel">
			<div class="setting_panel">
				<span class="private_button"><img src="../Pics/pen.png"><span>隱私設定</span></span>
				<div class="private_list" style="width:305px;bottom:-88px;right:0px"> <!-- 用js來計算並填入width, top, left -->
					<span class="private_title">我參加的活動：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span></br>
					<span class="private_title">我發起的活動：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span>
					<span class="private_title">我受邀的活動：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span>
					<span class="private_title">我關切的活動：</span>
					<span class="private_option selected">公開</span>
					<span class="private_option">限朋友可見</span>
					<span class="private_option">隱藏</span>
				</div>
				<a href="../Event/createEvent.php" target="blank"><span id="add_new_moment_button" class="add_search_button unselectable">＋建立新活動</span></a>
				<a href="../Event/findEvent.php" target="blank"><span id="add_new_moment_button" class="add_search_button unselectable">＋搜尋其他有趣的活動</span></a>
			</div>

			<div class="setting_panel_2nd">
				<span id="joined_event_filter" class="filter_button is_clicked unselectable">我參加的活動</span>
				<span id="created_event_filter" class="filter_button unselectable">我發起的活動</span>
				<span id="invited_event_filter" class="filter_button unselectable">我受邀的活動</span>
				<span id="cared_event_filter" class="filter_button unselectable">我關切的活動</span>
			</div>

			<div id="not_yet_event_hr" class="event_timing_hr"><span>還沒開始的活動</span> <hr></div>

			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年7月</div>
			<div class="monthly_events">
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>  
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>  
                        </div>
                        <div class="event_block joined">
                            <a target="" href="Group1.html">
                                <img class="hot-event-pic" width="103" height="103" src="../Event/EventPics/EventPic2.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        東海大學吉他社成果發表會
                                    </h1>
                                    <p>
                                    一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #336699">社團活動</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                                時間: 6月15日(六) - 6月16日(日)<br/>
                                地點: 東海大學大禮堂
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">126</span></span>
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年6月</div>
			<div class="monthly_events">
                        <div class="event_block created">
                            <a target="" href="hotUser.html">
                                <img class="hot-event-pic" width="103" height="103" src="../Event/EventPics/EventPic3.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        成大土木系一年級徵聯誼
                                    </h1>
                                    <p>
                                    我們都是非常有誠意的男生, 希望可以和大學女生聯誼 :)
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #99CC00">聯誼</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                                時間: 6月19(三)<br/>
                                地點: 待定
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 120<br/>已參加人數: <span class="red-text">32</span></span>           
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>     
                        </div>
			</div>
			</div>

			<div id="on_going_event_hr" class="event_timing_hr"><span>正在進行的活動</span><hr></div>

			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年6月</div>
			<div class="monthly_events">
                        <div class="event_block created cared">
                            <a target="" href="hotUser.html">
                                <img class="hot-event-pic" width="103" height="103" src="../Event/EventPics/EventPic3.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        成大土木系一年級徵聯誼
                                    </h1>
                                    <p>
                                    我們都是非常有誠意的男生, 希望可以和大學女生聯誼 :)
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #99CC00">聯誼</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                                時間: 6月19(三)<br/>
                                地點: 待定
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 120<br/>已參加人數: <span class="red-text">32</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>            
                        </div>
			</div>
			</div>

			<div id="end_event_hr" class="event_timing_hr"><span>已經結束的活動</span> <hr></div>

			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年5月</div>
			<div class="monthly_events">
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>			
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block created">
                            <a target="" href="Group1.html">
                                <img class="hot-event-pic" width="103" height="103" src="../Event/EventPics/EventPic2.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        東海大學吉他社成果發表會
                                    </h1>
                                    <p>
                                    一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #336699">社團活動</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                                時間: 6月15日(六) - 6月16日(日)<br/>
                                地點: 東海大學大禮堂
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">126</span></span>
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block created cared">
                            <a target="" href="hotUser.html">
                                <img class="hot-event-pic" width="103" height="103" src="../Event/EventPics/EventPic3.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        成大土木系一年級徵聯誼
                                    </h1>
                                    <p>
                                    我們都是非常有誠意的男生, 希望可以和大學女生聯誼 :)
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #99CC00">聯誼</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                                時間: 6月19(三)<br/>
                                地點: 待定
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 120<br/>已參加人數: <span class="red-text">32</span></span>   
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>             
                        </div>
			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年4月</div>
			<div class="monthly_events">
                        <div class="event_block joined cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block joined cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年3月</div>
			<div class="monthly_events">
                        <div class="event_block joined cared">
                            <a target="" href="Group1.html">
                                <img class="hot-event-pic" width="103" height="103" src="../Event/EventPics/EventPic2.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        東海大學吉他社成果發表會
                                    </h1>
                                    <p>
                                    一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #336699">社團活動</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                                時間: 6月15日(六) - 6月16日(日)<br/>
                                地點: 東海大學大禮堂
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">126</span></span>
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年2月</div>
			<div class="monthly_events">
                        <div class="event_block created">
                            <a target="" href="hotUser.html">
                                <img class="hot-event-pic" width="103" height="103" src="../Event/EventPics/EventPic3.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        成大土木系一年級徵聯誼
                                    </h1>
                                    <p>
                                    我們都是非常有誠意的男生, 希望可以和大學女生聯誼 :)
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #99CC00">聯誼</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                                時間: 6月19(三)<br/>
                                地點: 待定
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 120<br/>已參加人數: <span class="red-text">32</span></span>       
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>         
                        </div>
                        <div class="event_block cared created">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
			</div>
			</div>

			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年1月</div>
			<div class="monthly_events">
                        <div class="event_block cared created joined">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
                        <div class="event_block requested cared">
                            <a target="" href="group1.html">
                                <img class="hot-event-pic" width="103" height="106" src="../Event/EventPics/EventPic1.png">
                            </a>
                            <a target="" href="">
                                <div class="event_title">
                                    <h1>
                                        三對三鬥牛大賽
                                    </h1>
                                    <p>
                               	    來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                                    </p>
                                </div>
                            </a>
                            <span class="hot-event-type" style="background-color: #CC0000">比賽</span>
                            <div class="event_info">
                                <p>
				發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                                時間: 6月16日(日)<br/>
                                地點: 景美橋下球場
                                </p>
                            </div>
                            <span class="event_member_count">人數限制: 不限<br/>已參加人數: <span class="red-text">42</span></span>    
			    <form>
				<input type="button" class="gray_button unselectable" value="編輯/互動">
			    </form>
                        </div>
			</div>
			</div>
		</div>
