CREATE DATABASE Estante_Web;

USE Estante_Web;

CREATE TABLE livros (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    nome_livro VARCHAR(255) NOT NULL,
    autor VARCHAR(50) NOT NULL,
    descricao_livro TEXT NOT NULL,
    ano_lancamento INT NOT NULL


)

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario VARCHAR(100) NOT NULL,
    telefone VARCHAR()
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL
    )

    CREATE TABLE categoria (
        id_categoria INT AUTO_INCREMENT PRIMARY KEY,
        nome_categoria VARCHAR(100) NOT NULL,
 
    )
    