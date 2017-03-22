<?php
require_once "/bbdd.php";
// Función que modifica los datos de session en la bbdd.
function setDatosSession($username, $nombre, $apellidos, $newPass, $descripcion, $localizacion, $genero) {
    $con = conectar("godmusic");
    $update = "update usuario set nombre_usuario=$username, password=$newPass, nombre=$nombre, apellidos=$apellidos, email, telefono, ciudad.nomciudad, sexo=$genero, nacimiento, nombre_artistico, genero, componentes, direccion=$localizacion, perfil FROM usuario
            INNER JOIN ciudad ON ciudad.idciudad = usuario.ciudad
            WHERE nombre_usuario = '$username';";
    	// Ejecutamos la consulta
    if (mysqli_query($con, $query)); // Si ha ido bien
        
    else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
?>