<?php
	session_start();
	if (!isset($_SESSION['reg'])) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['user_login'];?><h1>
	<a href="logout.php">Выйти</a>
	<a href="profile.php">Настройки</a>
</body>
</html>
