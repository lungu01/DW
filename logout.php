<?php require_once("config.php"); 
session_destroy(); 
header('Location: ../index.html',true,303); // redirectionare la pagina princimala
?>