<?php
session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);        
        header('location: login.php');
    }    
        $logado = $_SESSION['usuario'];
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
</head>
<body>
    <nav></nav>
    <H1>Acessou o sistema</H1>
    <br><br>
    <div class="d-flex">
        <a href="sair.php" class="">Sair</a>
    </div>
</body>
</html>
