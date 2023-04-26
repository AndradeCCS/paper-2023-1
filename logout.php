<?php 
    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["permissao"]);
    session_destroy();
    header("location: index.php");
    exit;

?>