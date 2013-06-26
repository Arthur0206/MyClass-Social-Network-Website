<?php require_once('../define.php'); ?>

<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<?php
// §R°£sessionÅÜŒÆ
$_SESSION['Username'] = NULL;
$_SESSION['Fullname'] = NULL;
$_SESSION['Sex'] = NULL;

unset($_SESSION['Username']);
unset($_SESSION['Fullname']);
unset($_SESSION['Sex']);
// ­«·s°õŠæindex.php
header("Location: ". HOME_PAGE);
?>
