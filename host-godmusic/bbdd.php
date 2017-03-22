<?php

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

function conectar($database) {
    $conexion = mysqli_connect("localhost", "root", "", $database)
            or die("No se ha podido conectar a la BBDD");
    return $conexion;
}
function desconectar($conexion) {
    mysqli_close($conexion);
}
?>