<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<script defer src="../js/otherService.js"></script>
	<title>Добавить заявочку</title>
</head>
<body>
	<form action="../php/addRequest.php" method="post" id="requestForm">
	<a href="userPage.php">Назад</a>
		<? if (isset($_GET['message']) && !empty($_GET['message'])): ?>
			<script>alert("<?=$_GET['message']?>")</script>
		<? endif; ?>		
		<input type="text" name="address" required placeholder="Введите адрес">
		<input type="text" name="tel" required placeholder="Введите телефон">
		<label for="date">Выберите дату</label>
		<input type="date" id="date" name="date" required>
		<label for="time">Выберите время</label>
		<input type="time" id="time" name="time" required>
		<label for="payment">Выберите тип оплаты</label>
		<select name="payment" id="payment" name="payment" required>
			<option value="Наличные">Наличные</option>
			<option value="Банковская карта">Банковская карта</option>
		</select>
		<label for="service">Выберите услугу обучения</label>
		<select name="service" id="service" name="" required>
			<option value="основы алгоритмизации">основы алгоритмизации</option>
			<option value="основы веб-дизайна">основы веб-дизайна</option>
			<option value="основы проектирования базы данных">основы проектирования базы данных</option>
	
		</select>
		<label for="serviceCheck">Другая услуга</label>		
		<input type="checkbox" id="serviceCheck">
		<textarea name="otherService" id="otherService" class="hidden" placeholder="Введите описание услуги"></textarea>
		<input type="submit" value="Отправить">
	</form>
</body>
</html>