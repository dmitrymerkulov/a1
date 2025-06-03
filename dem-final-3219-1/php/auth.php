<?php
if (
	isset($_POST['login']) && !empty($_POST['login']) &&
	isset($_POST['password']) && !empty($_POST['password']) 
){
	require_once '../db/connection.php';
	$checkUser = $conn -> query("select * from user where login = $_POST[login] && password = $_POST[password]");
	$checkUser = $checkUser -> fetch();
	if ($checkUser){
		session_start();
		$_SESSION['user_id'] = $checkUser['id'];
		$_SESSION['user_login'] = $checkUser['login'];
		$_SESSION['user_role'] = $checkUser['role'];
		if ($checkUser['role'] == 'user'){		
			$location = '../public/userPage.php';
		} else if ($checkUser['role'] == 'admin'){
			$location = '../public/adminPage.php';
		}
	} else {
		$location = '../public/authPage.php?message=Неверные логин или пароль!';		
	}
} 
header('location:'.$location);
?>