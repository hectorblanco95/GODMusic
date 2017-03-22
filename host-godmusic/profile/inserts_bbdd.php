<?php
require_once "selects_bbdd.php";

function insertarText($text, $id){
	$con = conectar("godmusic");
	$query = "insert into comentaris(`comentari`, `idusuarioqueescribe`) values('$text', '$id');";

	// Ejecutamos la consulta
    if (mysqli_query($con, $query)); // Si ha ido bien

     else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
function insertarUsu($username, $pass, $mail, $usu){
	$con = conectar("godmusic");
	$query = "insert into usuario(`nombre_usuario`, `password`, `email`, `perfil`) values('$username', '$pass', '$mail', '$usu');";
	// Ejecutamos la consulta
    if (mysqli_query($con, $query)); // Si ha ido bien
    
    else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
?>