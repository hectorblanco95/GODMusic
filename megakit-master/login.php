<?php

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
        }else {
        insertarUsu($username, $pass, $mail, $usu);
        }
    } if (isset($_POST['login-submit'])){
        // Recogemos las variables del POST
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if(loginUsu($username, $pass))
        header("Location: HTML/profile.html");
        else{
            header("Location: HTML/index_home2.html");
        }
    } 
    ?>
    