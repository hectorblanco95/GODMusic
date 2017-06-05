<?php

require_once "../Functions/bbdd.php";
if(isset($_POST['quitar'])==true){
    $idcon=$_POST['quitare'];
    $idfans=$_POST['fans'];
    deletevotos($idcon,$idfans);
      header("Location: profile.php");
}


function deletevotos($idcon,$idfans){
     $con = conectar();
    $query = "DELETE FROM voto_concierto WHERE idfan='$idcon' and idconcierto='$idfans';";
     $resultado = mysqli_query($con, $query);

      if($resultado == false) { 
    die(mysqli_error($con));
}else{

    desconectar($con);
  
}
}


?>