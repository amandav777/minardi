<?php

    session_start();
    // print_r($_SESSION);
    
    if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Seja bem vindo, $logado !</h1>"
    ?>
    <a href="sair.php">sair</a>

    <style>
        background: linear-gradient(45deg, #f59797, #99b1ff, #aff7af);
        background-size: 200% 200%;
        height: 100%;
        animation: gradientAnimation 5s infinite;
    </style>



</body>
</html>