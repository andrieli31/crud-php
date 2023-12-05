<?php
   function conectaBD()
   {
       try {
           $con = new PDO("mysql:host=localhost;dbname=avaliacao", "root", "andri123");
           return $con;
       } catch (PDOException $e) {
           echo "Falha na conexão com o banco de dados: " . $e->getMessage();
           return null;
       }
   }   

    function inserirUser($nome, $email, $senha, $id){
        try{
            $con=conectaBD();
            $sql = "INSERT INTO usuario (nome, email, senha, id) VALUES (?, ?, ?, ?)";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $nome);
            $stm->bindParam(2, $email);
            $stm->bindParam(3, $senha);
            $stm->bindParam(4, $id);
            $stm->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function alteraUser($id, $nome, $email, $senha){
        try{
            $con=conectaBD();
            $sql = "UPDATE usuario SET email = ?, senha = ?, nome = ? WHERE id = ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $email);
            $stm->bindParam(2, $senha);
            $stm->bindParam(3, $nome);
            $stm->bindParam(4, $id);
            $stm->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function deletaUser($id){
        try{
            $con=conectaBD();
            $sql = "DELETE FROM usuario WHERE id = ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $id);
            $stm->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }  

 

    function getUsuario($id){
        try{
            $con=conectaBD();
            $sql="SELECT * FROM usuario WHERE id=?";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $id);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    // pesquisar / listar usuario 
    function pesquisaUsuarios($nome){
        try{
            $con=conectaBD();
            $sql="SELECT * FROM usuario WHERE nome LIKE ?;";
            $stm=$con->prepare($sql);
            $name="%".$nome."%";
            $stm->bindParam(1, $name);
            $stm->execute();
            $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function logar($email, $senha){
        try{
            $con=conectaBD();
            $sql="SELECT * FROM usuario WHERE email LIKE ? AND senha LIKE ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $email);
            $stm->bindParam(2, $senha);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function verificarCadastro($email){
    try{
            $con=conectaBD();
            $sql="SELECT * FROM usuario WHERE email LIKE ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $email);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function verificarUsuario(){
        session_start();
        if($_SESSION['usuarioAtual']==null){
            $result = 'false';
        } else {
            $result = 'true';
        }
        return $result;
    }
?>