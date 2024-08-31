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

USE estante;

CREATE TABLE categoria (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

--seeds categoria 

 USE testando;

INSERT INTO categoria (nome) VALUES ('ação'), ('ficção'), ('aventura'), ('romance');

CREATE TABLE livro (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    nome_livro VARCHAR(255) NOT NULL,
    autor VARCHAR(50) NOT NULL,
    sinopse TEXT NOT NULL,
    foto_livro LONGBLOB,
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

-- seeds livros

 USE testando;

 INSERT INTO livro (nome_livro, autor, sinopse, foto_livro, id_categoria) VALUES ('Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Um jovem bruxo descobre um mundo mágico.', '', '1');

 -- listar todos os livros e suas categorias

SELECT l.nome_livro, c.nome AS categoria
FROM livro l
JOIN categoria c ON l.id_categoria = c.id_categoria;


-- listar livros em uma determinada categoria

SELECT l.nome_livro
FROM livro l
JOIN categoria c ON l.id_categoria = c.id_categoria
WHERE c.nome = 'ficção';




-- tabela intermediária para o caso de relacionamento muitos para muitos

CREATE TABLE livro_categoria (
    livro_categoria_id INT AUTO_INCREMENT PRIMARY KEY,
    id_livro INT,
    id_categoria INT,
    FOREIGN KEY (id_livro) REFERENCES livro(id_livro),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);
    