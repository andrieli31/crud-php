<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E5791B;
            color: #fff;
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
            background-color: #F4A460;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            color: black;
            box-sizing: border-box;
            border-radius: 5px;
            text-align: center;
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #1C1C1C;
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

        .error-message {
            color: red;
            margin-top: 5px;
        }

        .success-message {
            color: green;
            margin-top: 5px;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            margin: 0;
            color: #fff;
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="logo">
        <img src="imgs\perfil.png" alt="perfil">
        <h1>Cadastrar usuário</h1>
    </div>  
    <div class="container">
    <form action="veriCad.php" method="post">
    <input type="text" name="id" placeholder="Id">
    <input type="text" name="nome" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="senha" placeholder="Senha" id="senha1">
    <?php if (isset($_GET['c']) && $_GET['c'] == 'true') {
         $c = 'true';
        } else {
    $c = null;
}
 ?>
    <input type="hidden" name="c" value="<?php echo $c; ?>">
    <br>
    <div>
        <button style="<?php if($_GET['c'] == 'true'){ echo " visibility: hidden;"; } ?>"><a href="index.php">Logar</a></button>
        <input type="submit" value="Cadastrar" id="submit">
    </div>
</form>
    </div>
</body>
</html>
