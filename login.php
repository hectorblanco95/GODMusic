<?php
session_start();
ob_start();
require_once "Functions/bbdd.php";
    if (isset($_POST['register-submit'])) {
        // Recogemos las variables del POST
        $username = $_POST['username'];
        // Comprobamos si existe un usuario con el mismo username
    if (existUser($username)) { // es lo mismo que existUser($username)==true
        echo "<p>Ya existe un usuario con ese username.</p>";
        header("refresh:3;url=index.php");
    } else {
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $pass2 = $_POST['confirm-password'];
        $usu = $_POST['usu'];
       
        if($pass!=$pass2){ 
            echo "<p>Las contraseñas no coinciden. </p>";
            header("refresh:3;url=index.php");
        } else{
        insertarUsu($username, $pass, $mail, $usu);
        
        if(loginUsu($username, $pass)){// funcion que comprueba si existe el usuario i la contra en la bbdd.
           $_SESSION['username']=$username;
           $fila = sessionLogin($_SESSION['username']);
           $_SESSION['idusuario'] = $fila['idusuario'];
           $_SESSION['perfil'] = $fila['perfil'];
            echo $_SESSION['perfil'];
           if ($_SESSION['perfil']=='l'){
               header("Location: userLocal/profile.php");
           } else if ($_SESSION['perfil']=='m'){
               header("Location: userMusico/profile.php");
           } else if ($_SESSION['perfil']=='f'){
               header("Location: userFan/profile.php");
           }
        } else 
            header("Location: index.php");
        }
    }
    } 
    if (isset($_POST['login-submit'])){
        // Recogemos las variables del POST
        if(loginUsu($_POST['username'], $_POST['password'])){// funcion que comprueba si existe el usuario i la contra en la bbdd.
           $_SESSION['username']=$_POST['username'];
           $fila = sessionLogin($_SESSION['username']);
           $_SESSION['idusuario'] = $fila['idusuario'];
           $_SESSION['perfil'] = $fila['perfil'];

           if ($_SESSION['perfil']=='l'){
               header("Location: userLocal/profile.php");
           } else if ($_SESSION['perfil']=='m'){
               header("Location: userMusico/profile.php");
           } else if ($_SESSION['perfil']=='f'){
               header("Location: userFan/profile.php");
           }
        } else 
            header("Location: index.php");
    } 
ob_end_flush();    
?>