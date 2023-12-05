DROP DATABASE IF EXISTS avaliacao;

CREATE DATABASE IF NOT EXISTS avaliacao;

USE avaliacao;

CREATE TABLE usuario (
  id INT PRIMARY KEY,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(200) NOT NULL,
  nome VARCHAR(20) NOT NULL
);

-- Inserindo um usuário de exemplo
INSERT INTO usuario (id, email, senha, nome) VALUES
(1, 'andrieli@gmail.com', 'andri123', 'Andrieli Mendes');


SELECT * FROM usuario;
