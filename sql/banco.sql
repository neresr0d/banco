CREATE DATABASE estante_web;

USE estante_web;

CREATE TABLE livros (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    nome_livro VARCHAR(255) NOT NULL,
    descricao_livro TEXT NOT NULL,
    ano_lancamento INT NOT NULL,


)

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL
    )
    