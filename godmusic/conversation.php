<?php
require_once "Functions/bbdd.php";
    if (isset($_POST['submit-text'])) {
        // Recogemos las variables del POST
        $text = $_POST['text'];
        
        insertarText($text);
        
    } 
    ?>