<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Вход</title>
</head>
<body>
	<h2>МОЙ НЕ САМ</h2>
	<h3>вход</h3>
	<form action="../php/auth.php" method="post">
		<? if (isset($_GET['message']) && !empty($_GET['message'])): ?>
			<script>alert("<?=$_GET['message']?>")</script>
		<? endif; ?>		
		<input type="text" required name="login" placeholder="Введите логин">
		<input type="password" required name="password" placeholder="Введите пароль">
		<input type="submit" value="Войти">
		<a href="../index.php">Регистрация</a>
	</form>
</body>
</html>