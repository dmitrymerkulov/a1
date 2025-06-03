<?php
$dbSetup = "mysql:host=localhost;dbname=jihrnzry_m1;charset=utf8";
$dbUser = "jihrnzry";
$dbPass = "yBE4fh";
$dbErrMode = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conn = new PDO($dbSetup, $dbUser, $dbPass, $dbErrMode); 
?>
