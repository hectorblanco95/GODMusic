<?php
session_start(); 
require_once "../Functions/bbdd.php";
if(isset($_POST['alta'])){
	$nomConcert = $_POST['nomConcierto'];
	$state = $_POST['state'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$cost = $_POST['cost'];
	$type = $_POST['tipo'];
	insertConcert($nomConcert, $state, $day, $time, $cost, $_SESSION['idusuario'], $type);
}
?>