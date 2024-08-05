CREATE DATABASE carrocinha;

USE carrocinha;

CREATE TABLE Cidade (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomecidade VARCHAR(100),
    estado CHAR(2)
); 

CREATE TABLE Pessoa(
    id int primary key AUTO_INCREMENT,
    nome varchar(50),
    email varchar(100),
    endereco varchar(30),
    bairro varchar(20),
    CEP varchar(9),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES Cidade(id)
);

CREATE TABLE Animal(
    id int primary key AUTO_INCREMENT,
    nome varchar(50),
    especie varchar(20),
    raca varchar(20),
    dt_nascimento date,
    idade int,
    castrado BOOL,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id)
);

INSERT INTO Cidade (nome, estado) VALUES
('São Paulo', 'SP'),
('Campinas', 'SP'),
('Bilac', 'SP'),
('Clementina', 'SP'),
('Birigui', 'SP');

INSERT INTO Cliente (nome, email, endereco, bairro, cep, cidade_id) VALUES
('João Silva', 'joao@gmail.com', 'Rua A, 123', 'Centro', '01000-000', 1),     -- Cidade com id = 1 é São Paulo
('Maria Souza', 'maria@gmail.com', 'Avenida B, 321', 'Jardim', '13000-000', 2),    -- Cidade com id = 2 é Campinas
('Carlos Oliveira', 'carlos@gmail.com', 'Rua C, 432', 'Vila Nova', '12200-000', 3), -- Cidade com id = 3 é São José dos Campos
('Ana Pereira', 'ana@gmail.com', 'Praça D, 234', 'Zona Leste', '01000-000', 1),    -- Cidade com id = 1 é São Paulo
('Pedro Santos', 'pedro@gmail.com', 'Rua E, 213', 'Praia', '11000-000', 5);   -- Cidade com id = 5 é Santos

INSERT INTO Animal (nome, especie, raca, dt_nascimento, idade, castrado, id_pessoa) VALUES
('Rex', 'Cachorro', 'Labrador', '2018-05-12', 6, 1, 1),   
('Mia', 'Gato', 'Siamês', '2020-08-19', 3, 0, 2),       
('Polly', 'Pássaro', 'Periquito', '2019-11-22', 4, 1, 3),
('Bidu', 'Cachorro', 'Poodle', '2017-01-30', 7, 1, 4),   
('Luna', 'Gato', 'Persa', '2021-03-15', 3, 0, 5);       
