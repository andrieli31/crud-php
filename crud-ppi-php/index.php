<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E5791B;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        .container {
            width: 300px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            background-color: white;
            border-bottom: 2px solid black;
            color: black;
            box-sizing: border-box;
            border-radius: 5px;
            text-align: center;
        }

        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: black;
        }

        button {
            background-color: #E5791B;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
        }

        button a {
            color: #fff;
            text-decoration: none;
        }

        input[type="submit"] {
            background-color: #E5791B;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
        }

        .profile-image {
            width: 85px;
            height: 85px;
            background-image: url('imgs\perfil(2).png');
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .page-title {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .page-title img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="page-title">
        <img src="imgs\perfil(2).png" alt="perfil">
        <h1>Login </h1>
    </div>
    <div class="container">
        <?php
            session_start();
            if($_SESSION != null){
                if($_SESSION['usuarioAtual'] != null){
                    header('Location: lista.php');
                    exit();
                }
            }
        ?>
        <form action="veriLogin.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br>
            <div>
                <button><a href="cadastro.php?c=false">Cadastrar</a></button>
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>
</body>
</html>
