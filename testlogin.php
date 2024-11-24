<?php
session_start();
    //Verificar Login - usuario e senha

    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        //acessa
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //chegada dos dados

        //print_r('usuario: ' . $usuario);
        //print_r('<br>');
        //print_r('senha: ' . $senha);
    
        $sql = "SELECT * FROM autenticacao WHERE usuario = '$usuario' and senha = '$senha'";
        $result = $conexao->query($sql);

        //Teste do que foi inserido e se há aquele registro no banco de dados

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location: login.php');

            //Teste se existe ou não no banco
            //print_r('Não Existe');    
        }else{
            
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location: sistema.php');

            //Teste se existe ou não no banco
            //print_r('Existe');
        }

    }else{
        //Retorna login
        header('location: login.php');
    }
?>