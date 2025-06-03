<?php
if (
	isset($_POST['address']) && !empty($_POST['address']) &&
	isset($_POST['tel']) && !empty($_POST['tel']) &&
	isset($_POST['date']) && !empty($_POST['date']) &&
	isset($_POST['time']) && !empty($_POST['time'])
){
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/db/connection.php';
		if (isset($_POST['otherService']) && !empty($_POST['otherService']))
			$_POST['service'] = $_POST['otherService'];
		$conn -> prepare("insert into requests (user_id, address, tel, date, time, service, payment) values (?, ?, ?, ?, ?, ?, ?)") -> 
		execute([$_SESSION['user_id'], $_POST['address'], $_POST['tel'], $_POST['date'], $_POST['time'], $_POST['service'], $_POST['payment']]);
		$location = '../public/requestPage.php?message=Заявка добавлена!';
} 
header('location:'.$location);
?> 