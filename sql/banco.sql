CREATE DATABASE banco_pi;

USE banco_pi;

CREATE TABLE usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario VARCHAR(100) NOT NULL,
    --telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    foto_perfil LONGBLOB
    );

USE banco_pi;

CREATE TABLE categoria (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(100) NOT NULL
);

--seeds categoria 

 USE testando;

INSERT INTO categoria (nome_categoria) VALUES ('Mistério'), ('Horror'), ('Fantasia'), ('Romance'), ('Auto Ajuda'), ('Saúde e Bem-Estar');

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

 USE banco_pi;

 INSERT INTO livro (nome_livro, autor, sinopse, foto_livro, id_categoria) VALUES 
 ('Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Um jovem bruxo descobre um mundo mágico.', '', '3'),

 ('O Código Da Vinci', 'Dan Brown', 'O professor Robert Langdon e a criptóloga Sophie Neveu investigam o assassinato de um curador do Louvre, descobrindo uma série de pistas que revelam um segredo histórico escondido em obras de arte.', '', '1'),

 ('O Iluminado', 'Stephen King', 'Jack Torrance, um escritor em busca de uma recomeço, aceita um emprego como zelador de um hotel isolado nas montanhas. Com a chegada do inverno, forças sobrenaturais começam a afetar sua sanidade e a segurança de sua família.', '', '2'),

('Pride and Prejudice" (Orgulho e Preconceito)', 'Jane Austen', 'Elizabeth Bennet enfrenta dilemas sociais e românticos enquanto lida com o orgulhoso Sr. Darcy e outros personagens em uma sociedade regida por normas rígidas.', '', '4'),

('O Poder do Agora', 'Eckhart Tolle', 'Tolle ensina como viver plenamente no presente, abordando como superar a dor emocional e a ansiedade através da consciência e do desapego do ego.', '', '5'),

('A Dieta dos 5 Ingredientes', 'Rachael Ray', 'Ray oferece receitas simples e saudáveis utilizando apenas cinco ingredientes, visando facilitar a alimentação saudável sem comprometer o sabor ou a praticidade.', '', '6');

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
    