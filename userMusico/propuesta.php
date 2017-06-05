<?php

if(isset($_POST['transfer'])==true){
 require_once "../Functions/bbdd.php";
 $idusu=$_POST['idusi'];
 $idcon=$_POST['idconcert'];
 echo"$idusu,$idcon";
 insertinscripcion($idusu,$idcon);
     header("Location: profile.php");
 
}
function insertinscripcion($idusu,$idcon){
 	$con = conectar();
	$query = "insert into propuesta(`idconcierto`,`idgrupo`,`aceptado`) values('$idcon', '$idusu','P');";

    if (mysqli_query($con, $query)); 
     else echo mysqli_error($con);
    
    desconectar($con);
}
?>