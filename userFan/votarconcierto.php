<?php

require_once "../Functions/bbdd.php";

if(isset($_POST['votar2'])==true){
    $idconcierto=$_POST['votare'];
    $idfan=$_POST['fany'];
     votarcon($idconcierto,$idfan);
     header("Location: profile.php");
}

function votarcon($idconcierto,$idfan){
     $con = conectar();
    $query = "insert into voto_concierto values ('$idfan', '$idconcierto');";
     $resultado = mysqli_query($con, $query);
      if($resultado == false) { 
    die(mysqli_error($con)); // TODO: better error handling
}else{

    desconectar($con);
  
}
}

?>