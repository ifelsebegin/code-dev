<?php
	if ($_SERVER['REMOTE_ADDR']=="127.0.0.1") {
		$db_host =		"localhost";		// -- имя хоста с MySQL
		$db_user =		"root";				// -- имя пользователя
		$db_password =	"";					// -- пароль
		$db_name =		"salo";
	}
	if (!$MySQL = mysql_connect($db_host,$db_user,$db_password)) { PRINT "Ошибка: Не возможно подключиться к серверу MySQL<br>"; }
	if (!mysql_select_db($db_name, $MySQL)) { PRINT "Ошибка: База данных недоступна<br>";}
?>
<?php include('engine.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<meta http-equiv=content-type content="text/html; charset=UTF-8">
<head>
	<title>Photo-cuter</title>
	<link rel="stylesheet" type="text/css" media="all" href="/style/style.css" />
</head>

<body>