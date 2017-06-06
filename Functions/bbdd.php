<?php

 function insertConcert($nomConcert, $state, $day, $time, $cost, $username, $type){
    $con= conectar();
    $insert= "insert into concierto (`nombre`, `estado`, `dia`, `hora`, `pago`, `idlocal`, `genero`) values('$nomConcert', '$state', '$day', '$time', $cost, '$username', $type);";
	if (mysqli_query($con, $insert)) {// Si ha ido bien
		echo "Concierto dado de alta!";
		header("refresh:3;url=profile.php");
    } else echo mysqli_error($con); // Sino mostramos el error
    desconectar($con);
}
function selectcomentario(){
	$con = conectar();
	$select = "select idconcierto, nombre, dia, hora, pago, genero, ciudad, sexo, nacimiento, nombre_artistico, genero from concierto;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);
    // devolvemos el resultado
    return $fila;
}
function updateApuntado($propuesta, $idconcert, $idgrupo) { 
    $con = conectar();
    $update = "update propuesta set aceptado='$propuesta' WHERE idconcierto = '$idconcert' and idgrupo = '$idgrupo';";
    	// Ejecutamos la consulta
    if (mysqli_query($con, $update)) // Si ha ido bien
        header("Location: profile.php#js__scroll-to-section1");
    else echo mysqli_error($con); // Sino mostramos el error
    desconectar($con);
}
function selectVotosFans($idConcert){
	$con = conectar();
	$select = "select usuario.nombre_usuario from usuario inner join voto_concierto on voto_concierto.idfan=usuario.idusuario where perfil='f' and idconcierto='$idConcert';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}
function selectGruopsApuntados($idConcert){
	$con = conectar();
	$select = "Select idgrupo, usuario.nombre_artistico, aceptado from propuesta inner join usuario on propuesta.idgrupo=usuario.idusuario where idconcierto='$idConcert';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 
function selectConciertosCreados($idUsu){
	$con = conectar();
	$select = "SELECT concierto.idconcierto, concierto.nombre, concierto.dia, usuario.nombre_artistico, concierto.hora, concierto.pago, genero.nomestilo, concierto.imagen
            FROM concierto
            INNER JOIN usuario ON concierto.idlocal = usuario.idusuario
            INNER JOIN genero ON concierto.genero = genero.idgenero
            WHERE concierto.idlocal =  $idUsu
            LIMIT 0 , 9;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 
function selectConciertos(){
	$con = conectar();
	$select = "SELECT concierto.idconcierto, concierto.nombre, concierto.dia, usuario.nombre_artistico, concierto.hora, concierto.pago, genero.nomestilo, concierto.imagen
            FROM concierto
            INNER JOIN usuario ON concierto.idlocal = usuario.idusuario
            INNER JOIN genero ON concierto.genero = genero.idgenero
            WHERE usuario.perfil =  'l'
            LIMIT 0 , 9;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 
function search(){
    $con= conectar();
    $select= "select name from concierto";
    $resultado= mysqli_query($con, $select);
	desconectar($con);
	return $resultado;
}
		
// Función que modifica los datos de session en la bbdd.
function setDatosSession($newPass, $nombre, $apellidos, $email, $telef, $ciudad, $genero, $localizacion, $username) { 
    $con = conectar();
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $update = "update usuario set password='$passCif', nombre='$nombre', apellidos='$apellidos', email='$email', telefono='$telef', sexo='$genero', direccion='$localizacion' WHERE nombre_usuario = '$username';";
    	// Ejecutamos la consulta
    if (mysqli_query($con, $update)){ // Si ha ido bien
        echo "settt";
        header("refresh:10;url=my_profile.php");
    }else echo mysqli_error($con); // Sino mostramos el error
    desconectar($con);
}
function insertarText($text, $id){
	$con = conectar();
	$query = "insert into comentaris(`comentari`, `idusuarioqueescribe`) values('$text', '$id');";

	// Ejecutamos la consulta
    if (mysqli_query($con, $query)); // Si ha ido bien

     else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
function sessionUsu($username){
   

        $con = conectar();
        $query = "select nombre, apellidos, email, telefono, ciudad.nomciudad, sexo, nacimiento, nombre_artistico, genero, componentes, direccion
                FROM usuario
                INNER JOIN ciudad ON ciudad.idciudad = usuario.ciudad
                WHERE nombre_usuario = '$username';";
        $resultado = mysqli_query($con, $query);
        $fila = mysqli_fetch_array($resultado, MYSQLI_NUM);
        //extract($fila);
        desconectar($con);
        
        $usu=array();
        
        for($i=0;$i<count($fila);$i++){
            if($fila[$i]!=NULL){
                array_push($usu,$fila[$i]);
            }
        }
        // devolvemos el resultado
        return $usu;
        
    
}
function sessionLogin($username){
    $con = conectar();
	$select = "SELECT idusuario, perfil FROM usuario WHERE nombre_usuario = '$username';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);
    // devolvemos el resultado
    return $fila;
}
// Función que comprueba si un username ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existUser($username) {
    $con = conectar();
    $query = "select nombre_usuario from usuario where nombre_usuario='$username';";
    $resultado = mysqli_query($con, $query);
    $num_rows = mysqli_num_rows($resultado);
    desconectar($con);
    // Si el nº de filas es 0, no existe el usuario
    return ($num_rows > 0);
}
function loginUsu($username, $pass){
	$con = conectar();
	$query = "select password from usuario where nombre_usuario='$username';";
	$resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    // Si hay fila user ok, sino user incorrecto
    if ($filas > 0) {
        // comprobamos si la contraseña es correcta
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        return password_verify($pass, $password);
    }
}
function insertarUsu($username, $pass, $mail, $usu){
	$con = conectar();
	$passCif = password_hash($pass, PASSWORD_DEFAULT);
	$query = "insert into usuario (`nombre_usuario`, `password`, `email`, `perfil`) values('$username', '$passCif', '$mail', '$usu');";
	// Ejecutamos la consulta
    if (mysqli_query($con, $query)); // Si ha ido bien
    
    else echo mysqli_error($con); // Sino mostramos el error
    
    desconectar($con);
}
function ultimcosConciertos() {
    $con = conectar();
    $query = "select concierto.dia,u.nombre_artistico, us.nombre_artistico from usuario as u inner join concierto on idusuario=idlocal
inner join usuario as us on us.idusuario!=u.idusuario where us.perfil=('m') order by dia asc;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function rankingHomepage() {
    $con = conectar();
    $query = "select usuario.nombre_artistico, genero.nomestilo,sum(idmusico) as 'sumaVotos' from usuario inner join voto_musico as votos on idmusico=idusuario 
inner join genero on genero=idgenero where perfil='m' group by idmusico;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function votarFan() {
    $con = conectar();
    $query = "select usuario.nombre_artistico,count(idmusico) as 'sumaVotos' from usuario inner join voto_musico as votos on idmusico=idusuario 
where perfil='m' group by idmusico;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function gruopsAssignadosLocal() {
    $con = conectar();
    $query = "select concierto.dia,concierto.hora,u.nombre_artistico, us.nombre_artistico, ciudad.nomciudad, concierto.pago as 'valor economico' from usuario as u inner join concierto on idusuario=idlocal
inner join usuario as us on us.idusuario!=u.idusuario inner join ciudad on idciudad=idlocal  where us.perfil=('m');";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}

function rankinggroups(){
    $con = conectar();
    $query = "select count(idmusico) as voto, usuario.nombre_artistico,genero.nomestilo from voto_musico inner join usuario on usuario.idusuario=voto_musico.idmusico inner join genero on usuario.genero=genero.idgenero where usuario.perfil='m' group by idmusico; ";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function vergruposquenohasvotado(){
    $con = conectar();
    $query = "select count(idmusico) as voto,usuario.idusuario, usuario.nombre_artistico,genero.nomestilo from voto_musico inner join usuario on usuario.idusuario=voto_musico.idmusico inner join genero on usuario.genero=genero.idgenero where usuario.perfil='m' group by idmusico; ";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}


function vergruposyavotados($id){
    $con = conectar();
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
    $con = conectar();
    $query = "select concierto.idconcierto,concierto.nombre,concierto.dia,concierto.pago,concierto.hora,usuario.nombre_artistico as local from concierto inner join usuario on concierto.idlocal=usuario.idusuario inner join genero on concierto.genero=genero.idgenero where estado='O' and perfil='l';";
    $resultado = mysqli_query($con, $query);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{

    desconectar($con);
    return $resultado;
}

}
function listadodemusicos(){
    $con = conectar();
    $query = "SELECT nombre_artistico,genero.nomestilo,idusuario from usuario inner join genero on genero.idgenero=usuario.genero where perfil='m';";
    $resultado = mysqli_query($con, $query);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{

    desconectar($con);
    return $resultado;
}
}

function listadodeconciertos(){
    $con = conectar();
    $query = "SELECT concierto.idconcierto, concierto.nombre, usuario.nombre_artistico as local, genero.nomestilo
FROM concierto
INNER JOIN usuario ON concierto.idlocal = usuario.idusuario
INNER JOIN genero ON concierto.genero = genero.idgenero
WHERE perfil =  'l';";
    $resultado = mysqli_query($con, $query);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{

    desconectar($con);
    return $resultado;
}
}
function listadodeconciertosabierto(){
    $con = conectar();
    $query = "SELECT concierto.idconcierto, concierto.nombre, usuario.nombre_artistico as local, genero.nomestilo
FROM concierto
INNER JOIN usuario ON concierto.idlocal = usuario.idusuario
INNER JOIN genero ON concierto.genero = genero.idgenero
WHERE perfil =  'l' and estado='O';";
    $resultado = mysqli_query($con, $query);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{

    desconectar($con);
    return $resultado;
}
}
function validar($id,$idusuario){
    $con = conectar();
    $query = " SELECT idfan, idmusico
FROM voto_musico
WHERE idfan ='$id'
AND idmusico ='$idusuario';";
    $resultado = mysqli_query($con, $query);
      $filas = mysqli_num_rows($resultado);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{
 
    return ($filas > 0);

}
}
function validarconcierto($id,$idconcierto){
    $con = conectar();
    $query = " SELECT idfan, idconcierto
FROM voto_concierto
WHERE idfan ='$id'
AND idconcierto ='$idconcierto';";
    $resultado = mysqli_query($con, $query);
      $filas = mysqli_num_rows($resultado);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{
 
    return ($filas > 0);

}


}
function validarpropuesta($idusu,$idconcierto){
    $con = conectar();
    $query = " SELECT idgrupo, idconcierto
FROM propuesta
WHERE idgrupo ='$idusu'
AND idconcierto ='$idconcierto';";
    $resultado = mysqli_query($con, $query);
      $filas = mysqli_num_rows($resultado);
    if($resultado == false) { 
    die(mysqli_error($con)); 
}else{
 
    return ($filas > 0);

}


}
function conectar() {
    $conexion = mysqli_connect("127.0.0.1", "root", "", "godmusic")
            or die("No se ha podido conectar a la BBDD");
    return $conexion;
}
function desconectar($conexion) {
    mysqli_close($conexion);
}
?>