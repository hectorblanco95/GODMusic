<?php
require_once "constantes.php";
    if (isset($_POST['submit-text'])) {
        // Recogemos las variables del POST
        $text = $_POST['text'];
        $id=$_POST['idusu'];
        insertarText($text, $id);
        header("Location: $myprofile");
        
    } 
    ?>