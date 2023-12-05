<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .logo h1 {
            margin: 0;
            color: #fff;
            font-size: 24px;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #E5791B;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            background-color: white;
            border-bottom: 1px solid #fff;
            color: gray;
            box-sizing: border-box;
            border-radius: 5px;
            text-align: center;
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: gray;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
            font-weight: bold;
            text-align: left;
        }

        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        legend {
            color: #fff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        button, input[type="submit"] {
            background-color: #F4A460;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        button a, input[type="submit"] {
            color: #fff;
            text-decoration: none;
        }

        button:first-child, input[type="submit"] {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="imgs\perfil-laranj2.png" alt="perfil">
        <h1>Editar usuário</h1>
    </div>    
    <div class="container">
        <?php
        include_once "conexaoBanco.php"; 
        include_once "usuario.php";
        $id = $_GET['id'];
        $usuario = getUsuario($id);
        ?>
        <form method="post" action="atualizarUsuario.php">
            <fieldset>
                <input name="id" type="hidden" value="<?php echo $usuario['id']; ?>" />
                <label>Nome:</label>
                <input name="nome" type="text" value="<?php echo $usuario['nome']; ?>"/>
                <label>Email:</label>
                <input name="email" type="email" value="<?php echo $usuario['email']; ?>" />
                <label>Senha:</label>
                <input name="senha" type="password" placeholder="Senha" />
                <div>
                    <button><a href="lista.php">Voltar</a></button>
                    <input type="submit" value="Atualizar" class="button" />
                    <button><a href="deletarUsuario.php?id=<?php echo $id; ?>">Deletar</a></button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
