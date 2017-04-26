<?php
session_start();
require_once "/constantes.php";

// Destruir todas las variables de sesión.
$_SESSION = array();

// Finalmente, destruir la sesión.
session_destroy();
header("Location: $index");

?>

