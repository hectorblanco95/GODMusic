<?php

require_once "../Functions/bbdd.php";

if(isset($_POST['votar'])==true){
    $idmusico=$_POST['votare'];
    $idfan=$_POST['fany'];
     votar($idmusico,$idfan);
     header("Location: profile.php");
}

function votar($idmusico,$idfan){
     $con = conectar("godmusic");
    $query = "insert into voto_musico values ('$idfan', '$idmusico');";
     $resultado = mysqli_query($con, $query);
      if($resultado == false) { 
    die(mysqli_error($con)); // TODO: better error handling
}else{

    desconectar($con);
  
}
}

?>