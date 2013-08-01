<!--
javascript 貼 xml 時, 把所有events照 月份 以及"還沒開始""正在進行""已經結束"來分. 如若六月份中有還沒開始, 正在進行, 已經結束的活動, 則會出現3個6月份title.

按到filter按鍵時, 在把對應的wrapper hide
 -->

		<div id="event_panel" class="panel">
			<div class="control_panel">
				<a href="../Event/createEvent.php" target="blank"><span class="red_button unselectable" style="margin: 18px 20px 8px 0px;">建立新活動</span></a>
				<a href="../Event/findEvent.php" target="blank"><span class="silver_button unselectable" style="margin: 18px 15px 8px 0px;">搜尋其他活動</span></a>
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
                <div class="event_block card cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl3.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #CC0000">
									比賽
								</span>
                                <span class="event-headline"> 
									三對三鬥牛大賽
								</span>
                            </h1>
                            <p>
                       	    	來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                        	時間: 6月16日(日)<br/>
                        	地點: 景美橋下球場<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>
                <div class="event_block card cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl3.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #CC0000">
									比賽
								</span>
                                <span class="event-headline"> 
									三對三鬥牛大賽
								</span>
                            </h1>
                            <p>
                       	    	來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                        	時間: 6月16日(日)<br/>
                        	地點: 景美橋下球場<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>
                <div class="event_block card joined">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl3.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #336699">
									社團活動
								</span>
                                <span class="event-headline"> 
									東海大學吉他社成果發表會
								</span>
                            </h1>
                            <p>
                       	    	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                        	時間: 6月16日(日)<br/>
                        	地點: 景美橋下球場<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>
			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年6月</div>
			<div class="monthly_events">
                <div class="event_block card created">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl1.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #336699">
									社團活動
								</span>
                                <span class="event-headline"> 
									東海大學吉他社成果發表會
								</span>
                            </h1>
                            <p>
                            	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                        	時間: 6月15日(六) 16:30pm<br/>
                       	 	地點: 東海大學大禮堂<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已受邀</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>
			</div>
			</div>

			<div id="on_going_event_hr" class="event_timing_hr"><span>正在進行的活動</span><hr></div>

			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年6月</div>
			<div class="monthly_events">
                <div class="event_block card created cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl2.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #99CC00">
									聯誼
								</span>
                                <span class="event-headline"> 
									成大土木系一年級徵聯誼
								</span>
                            </h1>
                            <p>
                            	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                        	時間: 6月19(三)<br/>
                        	地點: 待定<br/>
                        	已參加: <span class="red-text">4223</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已報名,等待回應</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

			</div>
			</div>

			<div id="end_event_hr" class="event_timing_hr"><span>已經結束的活動</span> <hr></div>

			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年5月</div>
			<div class="monthly_events">
                <div class="event_block card cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl3.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #CC0000">
									比賽
								</span>
                                <span class="event-headline"> 
									三對三鬥牛大賽
								</span>
                            </h1>
                            <p>
                       	    	來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                        	時間: 6月16日(日)<br/>
                        	地點: 景美橋下球場<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>
                <div class="event_block card requested cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl3.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #CC0000">
									比賽
								</span>
                                <span class="event-headline"> 
									三對三鬥牛大賽
								</span>
                            </h1>
                            <p>
                       	    	來鬥牛吧! 贏的隊可以得到景美區最強的名號!
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="boy-user-link" href="#">sosoman</a><br/>
                        	時間: 6月16日(日)<br/>
                        	地點: 景美橋下球場<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

                <div class="event_block card created">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl1.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #336699">
									社團活動
								</span>
                                <span class="event-headline"> 
									東海大學吉他社成果發表會
								</span>
                            </h1>
                            <p>
                            	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                        	時間: 6月15日(六) 16:30pm<br/>
                       	 	地點: 東海大學大禮堂<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已受邀</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

                <div class="event_block card created cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl1.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #336699">
									社團活動
								</span>
                                <span class="event-headline"> 
									東海大學吉他社成果發表會
								</span>
                            </h1>
                            <p>
                            	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                        	時間: 6月15日(六) 16:30pm<br/>
                       	 	地點: 東海大學大禮堂<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已受邀</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年4月</div>
			<div class="monthly_events">
                <div class="event_block card joined cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl2.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #99CC00">
									聯誼
								</span>
                                <span class="event-headline"> 
									成大土木系一年級徵聯誼
								</span>
                            </h1>
                            <p>
                            	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                        	時間: 6月19(三)<br/>
                        	地點: 待定<br/>
                        	已參加: <span class="red-text">4223</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已報名,等待回應</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

                <div class="event_block card joined cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl2.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #99CC00">
									聯誼
								</span>
                                <span class="event-headline"> 
									成大土木系一年級徵聯誼
								</span>
                            </h1>
                            <p>
                            	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                        	時間: 6月19(三)<br/>
                        	地點: 待定<br/>
                        	已參加: <span class="red-text">4223</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已報名,等待回應</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年3月</div>
			<div class="monthly_events">
                <div class="event_block card joined">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl2.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #99CC00">
									聯誼
								</span>
                                <span class="event-headline"> 
									成大土木系一年級徵聯誼
								</span>
                            </h1>
                            <p>
                            	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                        	時間: 6月19(三)<br/>
                        	地點: 待定<br/>
                        	已參加: <span class="red-text">4223</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已報名,等待回應</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>
			</div>
			</div>


			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年2月</div>
			<div class="monthly_events">
                <div class="event_block card created">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl2.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #99CC00">
									聯誼
								</span>
                                <span class="event-headline"> 
									成大土木系一年級徵聯誼
								</span>
                            </h1>
                            <p>
                            	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                        	時間: 6月19(三)<br/>
                        	地點: 待定<br/>
                        	已參加: <span class="red-text">4223</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已報名,等待回應</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

                <div class="event_block card cated created">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl2.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #99CC00">
									聯誼
								</span>
                                <span class="event-headline"> 
									成大土木系一年級徵聯誼
								</span>
                            </h1>
                            <p>
                            	我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼. 我們都是非常有誠意的男生, 希望可以和大學女生聯誼.
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">成大土木系一年級</a><br/>
                        	時間: 6月19(三)<br/>
                        	地點: 待定<br/>
                        	已參加: <span class="red-text">4223</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已報名,等待回應</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

                <div class="event_block card requested cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl1.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #336699">
									社團活動
								</span>
                                <span class="event-headline"> 
									東海大學吉他社成果發表會
								</span>
                            </h1>
                            <p>
                            	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                        	時間: 6月15日(六) 16:30pm<br/>
                       	 	地點: 東海大學大禮堂<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已受邀</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>

			</div>
			</div>

			<div class="monthly_event_wrapper">
			<div class="monthly_event_title">2013年1月</div>
			<div class="monthly_events">
                <div class="event_block card requested cared">
                    <a target="" href="hotUser.html">
                        <img class="event-pic" src="../Pics/girl1.jpg">
                    </a>
                    <a target="" href="">
                        <div class="event_title">
                            <h1>
								<span class="event-type" style="background-color: #336699">
									社團活動
								</span>
                                <span class="event-headline"> 
									東海大學吉他社成果發表會
								</span>
                            </h1>
                            <p>
                            	一年一度的成果發表又開始囉, 歡迎外校的朋友一起來參加 :)
                            </p>
                        </div>
                    </a>
                    <div class="event_info">
                        <p>
							發起人: <a class="group-link" href="#">東海大學吉他社</a><br/>
                        	時間: 6月15日(六) 16:30pm<br/>
                       	 	地點: 東海大學大禮堂<br/>
							已參加: <span class="red-text">42</span>人
						</p>
                    </div>    
					<div class="event-action-bar">
						<a href="">
							<span class="status">已受邀</span>
						</a>
                        <img class="action" src="../Pics/list-plus.png">
						<a href="">
							<img class="bookmark" src="../Pics/pin.png">
						</a>
						<a href="">
							<img class="facebook-like" src="../Pics/facebook-like.png">
						</a>
					</div>
                </div>
			</div>
			</div>
		</div>
