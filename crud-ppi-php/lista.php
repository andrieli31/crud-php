<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E5791B;
            color: #fff;
            margin: 0;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #F4A460;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin: 20px auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            background-color: white;
            border-bottom: 1px solid #fff;
            color: black;
            box-sizing: border-box;
            border-radius: 5px;
            text-align: center;
        }

        input[type="text"]::placeholder {
            color: black;
        }

        label {
            display: block;
            /* margin-bottom: 10px; */
            color: #fff;
            /* text-align: left; */
            font-weight: bold;
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

        table {
            width: 100%;
            color: #fff;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid pink;
        }

        th {
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #D2691E;
        }

        tr:hover {
            background-color: #FFDAB9;
        }

        button {
            background-color: #E5791B;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 10px;
        }

        button a {
            color: #fff;
            text-decoration: none;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 60px;
            height: 60px;
            margin-right: 20px;
            border-radius: 50%;
        }



        .logo h1 {
            margin: 0;
            color: #fff;
        }
    </style>
</head>

<body>
    <meta http-equiv="refresh" content="60" />
    <div class="logo">
        <img src="imgs\perfil(2).png" alt="perfil">
        <h1>Usuários</h1>
    </div>
    <div class="container">
        <?php
        include_once "conexaoBanco.php";
        include_once "usuario.php";
        $getUsuarios = pesquisaUsuarios(isset($_GET['p']));
        session_start();
        $usuarioAtual = $_SESSION['usuarioAtual'];

        ?>
       <form method="get" action="pesquisa.php" style="display: flex; align-items: center;">
            <input type="text" name="p" placeholder="Pesquisa" style="flex: 1;">
            <button type="submit" style="margin-left: 10px; margin-top: -11px;">Pesquisar</button>
        </form>

        <label>Usuários:
            <?php echo $usuarioAtual->getNome(); ?>
        </label>
        <fieldset>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($getUsuarios as $usuario) { ?>
                    <tr>
                        <td>
                            <?php echo $usuario['id']; ?>
                        </td>
                        <td>
                            <?php echo $usuario['nome']; ?>
                        </td>
                        <td>
                            <?php echo $usuario['email']; ?>
                        </td>
                        <td><button><a href="editar.php?id=<?php echo $usuario['id']; ?>">Editar</a></button></td>
                    </tr>
                <?php } ?>
            </table>
            <div>
                <button><a href="logout.php">Deslogar</a></button>
                <button><a href="cadastro.php?c=true">Cadastrar</a></button>
            </div>
        </fieldset>
    </div>
</body>

</html>