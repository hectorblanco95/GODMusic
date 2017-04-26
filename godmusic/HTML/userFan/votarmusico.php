<?php

require_once "../../Functions/bbdd.php";
if(isset($_POST['quitar'])==true){
    $idmusico=$_POST['quitare'];
    $idfan=$_POST['fans'];
    deletevoto($idmusico,$idfan);
     header("Location: profile.php");
}

function deletevoto($idmusico,$idfan){
     $con = conectar("godmusic");
    $query = "DELETE FROM voto_musico WHERE idfan=$idfan and idmusico=$idmusico;";
     $resultado = mysqli_query($con, $query);
      if($resultado == false) { 
    die(mysqli_error($con)); // TODO: better error handling
}else{

    desconectar($con);
  
}
}
?>