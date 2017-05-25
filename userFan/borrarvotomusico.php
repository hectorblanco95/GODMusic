<?php

require_once "../Functions/bbdd.php";
if(isset($_POST['quitar'])==true){
    $idmusicos=$_POST['quitare'];
    $idfans=$_POST['fans'];
    deletevoto($idmusicos,$idfans);
      header("Location: profile.php");
}


function deletevoto($idmusicos,$idfans){
     $con = conectar("godmusic");
    $query = "DELETE FROM voto_musico WHERE idfan='$idmusicos' and idmusico='$idfans';";
     $resultado = mysqli_query($con, $query);

      if($resultado == false) { 
    die(mysqli_error($con)); // TODO: better error handling
}else{

    desconectar($con);
  
}
}


?>