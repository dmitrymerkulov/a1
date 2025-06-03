<?php
if (
	isset($_POST['login']) && !empty($_POST['login']) &&
	isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['fio']) && !empty($_POST['fio']) &&
	isset($_POST['tel']) && !empty($_POST['tel']) &&
	isset($_POST['email']) && !empty($_POST['email'])
){
	require_once '../db/connection.php';
	$checkLogin = $conn -> query("select login from user where login = $_POST[login]");
	$checkLogin = $checkLogin -> fetch();
	if (!$checkLogin){
		$conn -> prepare("insert into user (login, password, fio, tel, email) values (?, ?, ?, ?, ?)") -> 
		execute([$_POST['login'], $_POST['password'], $_POST['fio'], $_POST['tel'], $_POST['email']]);
		$location = '../public/authPage.php?message=Регистрация успешна, можете войти';
	} else {
		$location = '../index.php?message=Данный логин занят!';		
	}
} 
header('location:'.$location);
?>