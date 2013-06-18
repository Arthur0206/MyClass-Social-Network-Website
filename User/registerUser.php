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
	<script src="../_js/jquery.validate.min.js"></script>
	<script src="../_js/menuBar.js"></script>
	<script src="../_js/form.js"></script>
    <script>
        $(document).ready(function() {
            // Process Menu Bar
			processMenuBar();
			// Process Form
			processForm();
        }); // ready
    </script>
</head>
<body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
	<div class="form-wrapper">
		<br/><h1>建立您的帳號 只需要兩分鐘</h1><br/>
		<form action="/MyClass/User/registerUser.php" method="post" name="register" id="register">
			<div class="row">
				<label for="name" class="describe-label">我的姓名</label>
				<input name="name" class="need-clean has-info" type="text" id="name" maxlength="32" value="ex. 張君雅" size="24">
				<span class="info-msg">請輸入您的真實姓名,以方便您的朋友順利找到您</span>
			</div>
			<div class="row">
				<label for="account" class="describe-label">設定MyClass帳號</label>
				<input name="account" class="has-info" type="text" id="account" maxlength="32" size="24">
				<span class="info-msg">您可以使用大小寫字母和數字</span>
			</div>
			<div class="row">
				<label for="password" class="describe-label">設定密碼</label>
				<input name="password" class="has-info" type="password" id="password" maxlength="16" size="24">
				<span class="info-msg">請用3到16字元,您可以使用大小寫字母,數字,及特殊字元</span>
			</div>
			<div class="row">
				<label for="passwordconfirm" class="describe-label">再次輸入密碼</label>
				<input name="passwordconfirm" type="password" id="passwordconfirm" maxlength="16" size="24">
			</div>
			<div class="row">
				<label for="email" class="describe-label">電子郵件信箱</label>
				<input name="email" class="has-info" type="text" id="email"  maxlength="64" size="24">
				<span class="info-msg">系統將寄送確認信到您的信箱以完成註冊</span>
			</div>
			<div class="row">
				<label for="gender" class="describe-label">性別</label>
				<input name="gender" type="radio" id="male" value="男生">
				<label for="male" class="radio-label">男生</label>
				<input name="gender" type="radio" id="female" value="女生">
				<label for="female" class="radio-label">女生</label>
			</div>
			<div class="row">
				<label for="month" class="describe-label">生日</label>
				<input name="month" class="need-clean has-info" type="text" id="month" maxlength="2" value="月" size="2">
				<input name="day" class="need-clean has-info" type="text" id="day" maxlength="2" value="日" size="2">
				<input name="year" class="need-clean has-info" type="text" id="year" maxlength="4" value="年" size="8">
				<span class="info-msg">ex. 03 27 1994</span>
			</div>
			<div class="row">
				<label for="country" class="describe-label">所在地區</label>
				<select name="country" class="select-country has-info">
					<option value="/tw/">台灣 </option>
				</select>
				<select name="region" class="select-region has-info">
					<option value="0">選擇縣市</option>
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
				<span class="info-msg">為了讓MyClass的服務更完善,請提供您的所在地區</span>
			</div>
			<br/><br/>
			<div class="row">
				<input type="checkbox" name="termOfUse" id="termOfUse">
				<label for="term-of-use" class="checkbox-label">
					我已閱讀並同意遵守<a href="" target="">MyClass使用服務條款</a>
				</label>
			</div>
			<br/>
			<div class="center-text-row">
				<input type="submit" class="submit-button" name="submitUserForm" id="submitUserForm" value="送出">
			</div>
		</form>
	</div>
</body>
</html>