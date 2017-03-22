<?php
session_start();
require_once "inserts_bbdd.php";
    if (isset($_POST['register-submit'])) {
        // Recogemos las variables del POST
        $username = $_POST['username'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $pass2 = $_POST['confirm-password'];
        $usu = $_POST['usu'];
       
        if($pass!=$pass2) echo 'las contraseñas no coinciden';
         header("Location: html/index.php");
        else{
        insertarUsu($username, $pass, $mail, $usu);
        echo "$username , $mail , $pass , $usu";
        }
    } if (isset($_POST['login-submit'])){
        // Recogemos las variables del POST
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if(loginUsu($username, $pass)){// funcion que comprueba si existe el usuario i la contra en la bbdd.
           $fila = sessionUsu($username);
           $_SESSION['idusuario'] = $fila['idusuario'];
           $_SESSION['username'] = $fila['nombre_usuario'];
           $_SESSION['nombre'] = $fila['nombre'];
           $_SESSION['apellidos'] = $fila['apellidos'];
           $_SESSION['email'] = $fila['email'];
           $_SESSION['telefono'] = $fila['telefono'];
           $_SESSION['ciudad'] = $fila['ciudad'];
           $_SESSION['sexo'] = $fila['sexo'];
           $_SESSION['nacimiento'] = $fila['nacimiento'];
           $_SESSION['nombre_artistico'] = $fila['nombre_artistico'];
           $_SESSION['genero'] = $fila['genero'];
           $_SESSION['componentes'] = $fila['componentes'];
           $_SESSION['direccion'] = $fila['direccion'];
           $_SESSION['perfil'] = $fila['perfil'];
            header("Location: html/profile.php");
        } else header("Location: html/index.php");
    } 
    ?>