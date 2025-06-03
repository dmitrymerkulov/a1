<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<script defer src="../js/newStat.js"></script>
	<title>Страница администратора</title>
</head>
<body>
	<? if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && $_SESSION['user_role']=='admin'): ?>
		<h2>Управление заявками</h2>
		<? include '../include/requestList.php'; ?>
	<? else: ?>
		<p>Данная страница только для авторизированных администраторов!</p>
		<a href="authPage.php">Войти</a>
	<? endif; ?>
</body>
</html>