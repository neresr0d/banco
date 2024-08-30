CREATE DATABASE estante;

USE estante;

CREATE TABLE usuario(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    foto_perfil LONGBLOB
    );


CREATE TABLE livros (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    nome_livro VARCHAR(255) NOT NULL,
    autor VARCHAR(50) NOT NULL,
    descricao_livro TEXT NOT NULL,
    ano_lancamento INT NOT NULL,
    foto_livro LONGBLOB,
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES livros(id_categoria) 



);
    -- INSERT INTO usuario (nome_usuario, telefone, email, senha) VALUES ('rodrigo', '30421881', 'rodrigommm@gmail.com', "")

    CREATE TABLE categoria (
        id_categoria INT AUTO_INCREMENT PRIMARY KEY,
        nome_categoria VARCHAR(100) NOT NULL,
        
 
    )

    CREATE TABLE livro_categoria(
        livro_categoria_id INT AUTO_INCREMENT PRIMARY KEY,
        id livro INT,
        id_categoria INT,
        FOREIGN KEY ($id_livro) REFERENCES livros ($id_livro),
        FOREIGN KEY ($id_categoria) REFERENCES categoria($id_categoria)
    )
    