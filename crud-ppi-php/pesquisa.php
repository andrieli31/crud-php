<?php
include_once "conexaoBanco.php";
include_once "usuario.php";

// Verifica se o parâmetro 'p' está definido na URL
if (isset($_GET['p'])) {
    // Realiza a pesquisa de usuários com base no parâmetro 'p'
    $getUsuarios = pesquisaUsuarios($_GET['p']);
    echo "teste";
} else {
    // Se 'p' não estiver definido, lista todos os usuários
    $getUsuarios = pesquisaUsuarios('');
}
?>

