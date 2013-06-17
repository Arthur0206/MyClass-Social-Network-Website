<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="let people know new friends, create and manage groups and events" />
    <meta name="keywords" content="group,club,blog,meetup,event,board,friends,social,chat,news,student,class,版,群組,朋友,交友,班級,班版,討論版,活動,學生,聯誼,同學,同學會,社團" />
    <title>MyClass - 讓妳認識很多新朋友!</title>
    <link href="../css/mainCss.css" type="text/css" rel="stylesheet">
    <link href="../css/form.css" type="text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> 
	<script src="../_js/menuBar.js"></script>
    <script>
        $(document).ready(function() {
            // Process Menu Bar
			processMenuBar();
        }); // ready
    </script>
</head>
<body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
	<div id="user-registration-form" class="form-wrapper">
		<h1>建立您的帳號,只需要兩分鐘</h1>
		<form action="/MyClass/User/registerUser.php" method="post">
			<div>
				<label for="name" class="label">我的姓名</label>
				<input name="name" type="text" id="name" maxlength="32" size="36">
			</div>
			<div>
				<label for="account" class="label">設定MyClass帳號</label>
				<input name="account" type="text" id="account" maxlength="32" size="36">
			</div>
			<div>
				<label for="password" class="label">設定密碼</label>
				<input name="password" type="password" id="password" maxlength="16" size="36">
			</div>
			<div>
				<label for="passwordconfirm" class="label">再次輸入密碼</label>
				<input name="passwordconfirm" type="password" id="passwordconfirm" maxlength="16" size="36">
			</div>
			<div>
				<label for="email" class="label">電子郵件信箱</label>
				<input name="email" type="text" id="email"  maxlength="64" size="36">
			</div>
			<div>
				<label for="gender" class="label">性別</label>
				<input name="gender" type="radio" id="male" value="男生">
				<label for="male">男生</label>
				<input name="gender" type="radio" id="female" value="女生">
				<label for="male">女生</label>
			</div>
			<div>
				<label for="month" class="label">生日</label>
				<input name="month" type="text" id="month" maxlength="2" value="月" size="2">
				<input name="day" type="text" id="day" maxlength="2" value="日" size="2">
				<input name="year" type="text" id="year" maxlength="4" value="年" size="8">
			</div>
			<div>
				<label for="country" class="label">所在地區</label>
				<select name="country">
					<option value="/tw/">台灣 </option>
				</select>
				<select name="region">
					<option value="1">台北市</option>
					<option value="2">基隆市</option>
					<option value="3">新北市</option>
					<option value="4">宜蘭縣</option>
					<option value="5">新竹市</option>
					<option value="6">新竹縣</option>
					<option value="7">桃園縣</option>
					<option value="8">苗栗縣</option>
					<option value="9">台中市</option>
					<option value="10">彰化縣</option>
					<option value="11">南投縣</option>
					<option value="12">嘉義市</option>
					<option value="13">嘉義縣</option>
					<option value="14">雲林縣</option>
					<option value="15">台南市</option>
					<option value="16">高雄市</option>
					<option value="17">澎湖縣</option>
					<option value="18">屏東縣</option>
					<option value="19">臺東縣</option>
					<option value="20">花蓮縣</option>
					<option value="21">金門縣</option>
					<option value="22">連江縣</option>
					<option value="23">南海諸島</option>
				</select>
			</div>
			<div>

			</div>
			<div>
				<input type="checkbox" name="term-of-use" id="term-of-use">
				<label for="term-of-use">我已閱讀並同意遵守<a href="" target="">MyClass使用服務條款</a></label>
			</div>
			<div style="text-align:center">
				<input type="submit" class="submit-button" name="submit-user-form" id="submit-user-form" value="送出">
			</div>
		</form>
	</div>
</body>
</html>