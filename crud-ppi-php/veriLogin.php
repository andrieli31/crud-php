<?php
    include_once "conexaoBanco.php";
    include_once "usuario.php";

    $usuario = logar($_POST['email'], $_POST['senha']);
    if($usuario==null){
        header('Location: index.php');
    } else {
        $usuario = new Usuario();
        $usuario->construtor($nome, $email, $senha, $id);
        session_start();
        $_SESSION['usuarioAtual']=$usuario;
        header('Location: lista.php');
    }
?>