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
    idade int;
    castrado BOOL,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id)
);