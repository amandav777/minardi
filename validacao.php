<?php

session_start();

if (isset($_POST['email']) && isset($_POST['senha'])) {
    include_once("config.php");
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM clientes WHERE email = '$email' LIMIT 1";
    $sql_exec = $conexao->query($sql) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: pag.php');
        exit();
    } else {
        $_SESSION['mensagem'] = 'Login falhou. Verifique suas credenciais.';
        header('Location: login.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}

?>