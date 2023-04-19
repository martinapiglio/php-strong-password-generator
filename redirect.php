<?php 

    session_start();
    $_SESSION['passwordLength'] = $_GET['password-length'] ?? false;
    header('Location: ./password.php');

?>