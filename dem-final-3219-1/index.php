<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
	<title>Регистрацияя</title>
</head>
<body>
	<h2>Корочки.есть</h2>
	<h3>Регистрация</h3>
	<form action="php/reg.php" method="post">
		<? if (isset($_GET['message']) && !empty($_GET['message'])): ?>
			<p><?=$_GET['message']?></p>
		<? endif; ?>
		<input type="text" required name="login" placeholder="Введите логин">
		<input type="password" required name="password" placeholder="Введите пароль">
		<input type="text" required name="fio" placeholder="Введите ФИО">
		<input type="text" required name="tel" placeholder="Введите телефон">
		<input type="email" required name="email" placeholder="Введите email">
		<input type="submit" value="Зарегистрироваться">
		<a href="public/authPage.php">Вход</a>
	</form>
</body>
</html>