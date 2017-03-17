<?php
session_start();
require_once "Functions/bbdd.php";
    if (isset($_POST['register-submit'])) {
        // Recogemos las variables del POST
        $username = $_POST['username'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $pass2 = $_POST['confirm-password'];
        $usu = $_POST['usu'];
        if($pass!=$pass2){
            echo 'las contraseñas no coiciden';
        } else{
        insertarUsu($username, $pass, $mail, $usu);
        header("Location: HTML/index_home.php");
        }
        
    } if (isset($_POST['login-submit'])){
        // Recogemos las variables del POST
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if(loginUsu($username, $pass)){// funcion que comprueba si existe el usuario i la contra en la bbdd.
           $fila = sessionUsu($username);
           $_SESSION['username'] = $fila['nombre_usuario'];
           $_SESSION['email'] = $fila['email'];
           $_SESSION['perfil'] = $fila['perfil'];
            header("Location: HTML/profile.php");

        } else{
            header("Location: HTML/index_home.php");
        }
    } 
    ?>