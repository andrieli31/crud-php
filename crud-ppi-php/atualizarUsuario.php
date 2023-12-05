<?php
	include_once "conexaoBanco.php";
	include_once "usuario.php";
	session_start();

	if (isset($_POST['id'])) {
		$usuario = getUsuario($_POST['id']);
		$usuarioAtual = isset($_SESSION['usuarioAtual']) ? $_SESSION['usuarioAtual'] : null;

		$nome = empty($_POST['nome']) ? $usuario['nome'] : $_POST['nome'];
		$email = empty($_POST['email']) ? $usuario['email'] : $_POST['email'];
		$senha = empty($_POST['senha']) ? $usuario['senha'] : $_POST['senha'];

		if ($usuarioAtual && $usuarioAtual->getId() == $usuario['id']) {
			if (method_exists($usuarioAtual, 'setNome')) {
				$usuarioAtual->setNome($nome);
			}
			if (method_exists($usuarioAtual, 'setEmail')) {
				$usuarioAtual->setEmail($email);
			}
			if (method_exists($usuarioAtual, 'setSenha')) {
				$usuarioAtual->setSenha($senha);
			}
			$_SESSION['usuarioAtual'] = $usuarioAtual;
		}

		alteraUser($_POST['id'], $nome, $email, $senha);
	}

	header('Location: lista.php');
?>
