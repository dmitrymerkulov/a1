<? session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Страница пользователя</title>
</head>
<body>
	<? if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && $_SESSION['user_role']=='user'): ?>
		<a href="requestPage.php">Оставить заявочку</a>
		<? include '../include/requestList.php'; ?>
		
	<? else: ?>
		<p>Данная страница только для авторизированных пользователей!</p>
		<a href="authPage.php">Войти</a>
	<? endif; ?>
</body>
</html>