<?php
session_start();
require_once "../Functions/bbdd.php";
if(isset($_POST['transfer2'])==true){
   $idusu=$_SESSION['idusuario'];
 $idcon=$_POST['idconcert'];
    deletevotos($idcon,$idusu);
      header("Location: profile.php");
}


function deletevotos($idcon,$idusu){
     $con = conectar();
    $query = "DELETE FROM propuesta WHERE idgrupo='$idusu' and idconcierto='$idcon';";
     $resultado = mysqli_query($con, $query);

      if($resultado == false) { 
    die(mysqli_error($con));
}else{

    desconectar($con);
  
}
}


?>