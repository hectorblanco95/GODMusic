<?php
require_once 'bbdd.php';
session_start();
$_SESSION["nom"] = $nom;
$_SESSION["pass"] = $pass;
$_SESSION["pass2"] = $pass2;
$_SESSION["mail"] = $mail;
$_SESSION["mail2"] = $mail2;
$_SESSION["usu"] = $usu;
echo $usu;
    
    
        ?>
   
