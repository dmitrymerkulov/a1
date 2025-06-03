<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
 	require_once '../db/connection.php';
 	$conn -> query("update requests set status = '$_POST[newStat]', reject = '$_POST[reject]' where id = $_GET[id]");
 	header('location:../public/adminPage.php');
 } 
?>