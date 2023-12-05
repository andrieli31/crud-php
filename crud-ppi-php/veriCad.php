<?php
include_once "conexaoBanco.php";
include_once "usuario.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($id == null || $nome == null || $email == null || $senha == null || verificarCadastro($email) != null) {
    if ($_POST['c'] == 'true') {
        header("Location: cadastro.php?c=true");
    } else {
        header("Location: cadastro.php?c=false");
    }
} else {
    $usuario = new Usuario();
    $usuario->construtor($nome, $email, $senha, $id);
    inserirUser($nome, $email, $senha, $id);

    if ($_POST['c'] != 'true') {
        session_start();
        $_SESSION['usuarioAtual'] = $usuario;
    }
    header('Location: lista.php');
}
?>
