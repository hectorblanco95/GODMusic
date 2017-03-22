<?php
require_once "/bbdd.php";

function selectcomentario(){
	$con = conectar("godmusic");
	$select = "select idconcierto, nombre, dia, hora, pago, genero, ciudad, sexo, nacimiento, nombre_artistico, genero from concierto;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);
    // devolvemos el resultado
    return $fila;
} 
function sessionUsu($username){
	$con = conectar("godmusic");
	$select = "SELECT idusuario, nombre_usuario, nombre, apellidos, email, telefono, ciudad.nomciudad, sexo, nacimiento, nombre_artistico, genero, componentes, direccion, perfil
            FROM usuario
            INNER JOIN ciudad ON ciudad.idciudad = usuario.ciudad
            WHERE nombre_usuario = '$username';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);
    // devolvemos el resultado
    return $fila;
} 
function loginUsu($username, $pass){
	$con = conectar("godmusic");
	$query = "select nombre_usuario, password from usuario where nombre_usuario='$username' and password='$pass';";
	// Ejecutamos la consulta
    if ($res = mysqli_query($con, $query)) {
        // Si ha ido bien
        if(mysqli_num_rows($res)){
            desconectar($con);
            return 1;
        }
    } else echo mysqli_error($con); // Sino mostramos el error
        
    desconectar($con);
    return 0;
}
function usu(){
    $con = conectar("godmusic");
    $query = "select nombre_usuario from usuario";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
?>