<?php require_once('../connection.php'); ?>
<?php require_once('../function.php'); ?>
<?php require_once('../define.php'); ?>

<?php
// 建立 session
if (!isset($_SESSION)) {
  	session_start();
}
// 前一個網頁
$_SESSION['PrevPage'] = "index.php";
?>

<?php
// 處理已經登入的使用者又白目想到login.php頁面, 直接轉回Home.php
if (isset($_SESSION['Username']) && isset($_SESSION['Fullname'])) {
    	header("Location: " . HOME_PAGE);
}

//*******************************//
// 登入
//*******************************//
// login_form.php的標題
$_SESSION['login_form_title'] = "請先登入";

// 有帳號與密碼欄位
if (isset($_POST['username']) && isset($_POST['password'])) {
    	// 帳號與密碼欄位
	$username = $_POST['username'];
  	$password = $_POST['password'];
	// 用cookie or session?
	// $stay_sign_in = $_POST['stay_sign_in'];

	// 選擇 MySQL 資料庫ch26
	mysql_select_db('MyClass', $connection) or die('資料庫MyClass不存在'); 
	 
  	// 查詢member資料表的username與password欄位
  	$query = sprintf("SELECT username, password, fullname, sex FROM user WHERE username=%s AND password=%s",
        GetSQLValue($username, "text"), GetSQLValue($password, "text")); 
   	// 傳回結果集
    	$result = mysql_query($query, $connection) or die(mysql_error());
	
	if ($result) {
		// 結果集的記錄筆數
    		$totalRows = mysql_num_rows($result);
		// 使用者輸入的帳號與密碼存在於member資料表
    		if ($totalRows) {    
			// 建立session變數
	    		$_SESSION['Username'] = $username;
			$_SESSION['Fullname'] = mysql_result($result, 0, 'fullname');
		    	$_SESSION['Sex'] = mysql_result($result, 0, 'sex');
			// 用cookie or session?
			// $_SESSION['StaySignIn'] = $stay_sign_in;

			// 成功登入, 前往 main.php
    			header("Location: ". HOME_PAGE);
	  	} else {
		    	// 重新登入, 前往login.php 
    			header("Location: http://localhost/MyClass/User/login.php");
  		}
	}
	else
	{		
		// 無效的帳號或密碼, 重新登入, 前往login.php 
    		header("Location: http://localhost/MyClass/User/login.php");
	}
}
?>

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
		processLogInForm();
        }); // ready
    </script>
</head>
<body>
	<?php 
	/* include top menu bar */ 
	require_once('../menubar.php'); 
	?>
	<div id="log-in-form-wrapper" class="form-wrapper">
		<h1>登入</h1><br/>
		<form action="/MyClass/User/login.php" method="post" name="logIn-form" id="logIn-form">
			<div class="row">
				<label for="account" class="describe-label">帳號</label>
				<input name="username" type="text" id="username" maxlength="32" size="24">
			</div>
			<div class="row">
				<label for="password" class="describe-label">密碼</label>
				<input name="password" type="password" id="password" maxlength="32" size="24">
			</div>
			<div class="row">
				<input type="checkbox" name="stay_sign_in" id="stay_sign_in">
				<label for="stay_sign_in" class="checkbox-label">
					保持登入
				</label>
			</div>
			<div>
				<input type="submit" class="submit-button" name="submitLogInForm" id="submitLogInForm" value="送出">
			</div>
		</form>
		<div><a href="" style="float: right; margin-top: 15px; font-size: 90%;">無法登入</a></div>
	</div>
</body>
</html>
