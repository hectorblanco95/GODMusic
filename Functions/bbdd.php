<?php

 function insertConcert($nomConcert, $state, $day, $time, $cost, $username, $type){
    $con= conectar("godmusic");
    $insert= "insert into concierto (`nombre`, `estado`, `dia`, `hora`, `pago`, `idlocal`, `genero`) values('$nomConcert', '$state', '$day', '$time', $cost, '$username', $type);";
	if (mysqli_query($con, $insert)) {// Si ha ido bien
		echo "Concierto dado de alta!";
		header("refresh:3;url=profile.php");
    } else echo mysqli_error($con); // Sino mostramos el error
    desconectar($con);
}
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
function selectConciertos(){
	$con = conectar("godmusic");
	$select = "SELECT concierto.nombre, concierto.dia, usuario.nombre_artistico, concierto.hora, concierto.pago, genero.nomestilo
            FROM concierto
            INNER JOIN usuario ON concierto.idlocal = usuario.idusuario
            INNER JOIN genero ON concierto.genero = genero.idgenero
            WHERE usuario.perfil =  'l'
            LIMIT 0 , 9";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 
function search(){
        $con= conectar("godmusic");
        $select= "select name from concierto";
        $resultado= mysqli_query($con, $select);
			desconectar($con);
			return $resultado;
		}
// Función que modifica los datos de session en la bbdd.
function setDatosSession($newPass, $nombre, $apellidos, $email, $telef, $ciudad, $genero, $localizacion, $username) {
    $con = conectar("godmusic");
    $update = "update usuario set newPass=$newPass, nombre=$nombre, apellidos=$apellidos, email=$email, telefono=$telef, sexo=$genero, direccion=$localizacion WHERE nombre_usuario = '$username';";
    	// Ejecutamos la consulta
    if (mysqli_query($con, $update)); // Si ha ido bien
        
    else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
function insertarText($text, $id){
	$con = conectar("godmusic");
	$query = "insert into comentaris(`comentari`, `idusuarioqueescribe`) values('$text', '$id');";

	// Ejecutamos la consulta
    if (mysqli_query($con, $query)); // Si ha ido bien

     else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
function sessionUsu($username){
    $con = conectar("godmusic");
    $query = "select nombre, apellidos, telefono, ciudad.nomciudad, sexo, nacimiento, nombre_artistico, genero, componentes, direccion
                FROM usuario
                INNER JOIN ciudad ON ciudad.idciudad = usuario.ciudad
                WHERE nombre_usuario = '$username';";
    $resultado = mysqli_query($con, $query);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);

    if ($fila['nombre'] != NULL && $fila['apellidos'] != NULL && $fila['telefono'] != NULL && $fila['ciudad'] != NULL && $fila['sexo'] != NULL && $fila['nacimiento'] != NULL && $fila['nombre_artistico'] != NULL && $fila['genero'] != NULL && $fila['componentes'] != NULL && $fila['direccion'] != NULL) {
        $con = conectar("godmusic");
        $query = "select idusuario, nombre, apellidos, email, telefono, ciudad.nomciudad, sexo, nacimiento, nombre_artistico, genero, componentes, direccion, perfil
                FROM usuario
                INNER JOIN ciudad ON ciudad.idciudad = usuario.ciudad
                WHERE nombre_usuario = '$username';";
        $resultado = mysqli_query($con, $query);
        $fila = mysqli_fetch_assoc($resultado);
        desconectar($con);
        // devolvemos el resultado
        return $fila;
    } else { 
	    $con = conectar("godmusic");
	    $select = "SELECT idusuario, email, perfil FROM usuario WHERE nombre_usuario = '$username';";
        // Ejecutamos la consulta y recogemos el resultado
        $resultado = mysqli_query($con, $select);
        $fila = mysqli_fetch_assoc($resultado);
        desconectar($con);
        // devolvemos el resultado
        return $fila;
    }
}
// Función que comprueba si un username ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existUser($username) {
    $con = conectar("godmusic");
    $query = "select nombre_usuario from usuario where nombre_usuario='$username';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    // Comprobamos si la consulta ha devuelto algún resultado
    $num_rows = mysqli_num_rows($resultado);
    // Si el nº de filas es 0, no existe el usuario
    if ($num_rows == 0) return false;
}
function loginUsu($username, $pass){
	$con = conectar("godmusic");
	$query = "select nombre_usuario, password from usuario where nombre_usuario='$username' and password='$pass';";
	$resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    // Si hay fila user ok, sino user incorrecto
   // if ($filas > 0) return true;
    return ($filas>0);
}
function insertarUsu($username, $pass, $mail, $usu){
	$con = conectar("godmusic");
	$query = "insert into usuario (`nombre_usuario`, `password`, `email`, `perfil`) values('$username', '$pass', '$mail', '$usu');";
	// Ejecutamos la consulta
    if (mysqli_query($con, $query)); // Si ha ido bien
    
    else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
function ultimcosConciertos() {
    $con = conectar("godmusic");
    $query = "select concierto.dia,u.nombre_artistico, us.nombre_artistico from usuario as u inner join concierto on idusuario=idlocal
inner join usuario as us on us.idusuario!=u.idusuario where us.perfil=('m') order by dia asc;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function rankingHomepage() {
    $con = conectar("godmusic");
    $query = "select usuario.nombre_artistico, genero.nomestilo,sum(idmusico) as 'sumaVotos' from usuario inner join voto_musico as votos on idmusico=idusuario 
inner join genero on genero=idgenero where perfil='m' group by idmusico;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function votarFan() {
    $con = conectar("godmusic");
    $query = "select usuario.nombre_artistico,count(idmusico) as 'sumaVotos' from usuario inner join voto_musico as votos on idmusico=idusuario 
where perfil='m' group by idmusico;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function gruopsAssignadosLocal() {
    $con = conectar("godmusic");
    $query = "select concierto.dia,concierto.hora,u.nombre_artistico, us.nombre_artistico, ciudad.nomciudad, concierto.pago as 'valor economico' from usuario as u inner join concierto on idusuario=idlocal
inner join usuario as us on us.idusuario!=u.idusuario inner join ciudad on idciudad=idlocal  where us.perfil=('m');";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}


function usu(){
    $con = conectar("godmusic");
    $query = "select nombre_usuario from usuario";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}


function rankinggroups(){
    $con = conectar("godmusic");
    $query = "select count(idmusico) as voto, usuario.nombre_artistico,genero.nomestilo from voto_musico inner join usuario on usuario.idusuario=voto_musico.idmusico inner join genero on usuario.genero=genero.idgenero where usuario.perfil='m' group by idmusico; ";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function vergruposquenohasvotado(){
    $con = conectar("godmusic");
    $query = "select count(idmusico) as voto,usuario.idusuario, usuario.nombre_artistico,genero.nomestilo from voto_musico inner join usuario on usuario.idusuario=voto_musico.idmusico inner join genero on usuario.genero=genero.idgenero where usuario.perfil='m' group by idmusico; ";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}


function vergruposyavotados($id){
    $con = conectar("godmusic");
    $query = "select voto_musico.idmusico,voto_musico.idfan,usuario.nombre_artistico from voto_musico inner join usuario on voto_musico.idmusico=usuario.idusuario where usuario.idusuario=voto_musico.idmusico and voto_musico.idfan='$id'
GROUP BY idmusico;";
    $resultado = mysqli_query($con, $query);
    if($resultado == false) { 
    die(mysqli_error($con)); // TODO: better error handling
}else{

    desconectar($con);
    return $resultado;
}

}
function listadodeconsiertos(){
    $con = conectar("godmusic");
    $query = "select concierto.nombre,concierto.dia,concierto.pago,concierto.hora,usuario.nombre_artistico as local from concierto inner join usuario on concierto.idlocal=usuario.idusuario inner join genero on concierto.genero=genero.idgenero where estado='O' and perfil='l';";
    $resultado = mysqli_query($con, $query);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{

    desconectar($con);
    return $resultado;
}

}
function conectar($database) {
    $conexion = mysqli_connect("127.0.0.1", "root", "", $database)
            or die("No se ha podido conectar a la BBDD");
    return $conexion;
}
function desconectar($conexion) {
    mysqli_close($conexion);
}
?>