DROP SCHEMA IF EXISTS `emp` ;
CREATE SCHEMA IF NOT EXISTS `emp` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;

use emp;

CREATE TABLE cliente
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  senha VARCHAR(50) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE funcionario
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  senha VARCHAR(50) NOT NULL,
  cargo VARCHAR(50) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE produtos
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  preco DOUBLE(9,2) NOT NULL,
  quantidade INT NOT NULL,
  categoria ENUM('servico', 'produto'),
  descricao VARCHAR(150),
  PRIMARY KEY(id)
);

CREATE TABLE venda
(
  id INT NOT NULL AUTO_INCREMENT,
  id_cliente INT NOT NULL,
  id_produto INT NOT NULL,
  andamento VARCHAR(150) NOT NULL,
  PRIMARY KEY(id)
);

ALTER TABLE venda ADD CONSTRAINT fk_cliente FOREIGN KEY (id_cliente) REFERENCES cliente(id);
ALTER TABLE venda ADD CONSTRAINT fk_produtos FOREIGN KEY (id_produto) REFERENCES produtos(id);



INSERT INTO funcionario (nome, email, senha, cargo) VALUES ('Seu Zé', 'ze1@gmail.com', '123', 'atendente');
INSERT INTO funcionario (nome, email, senha, cargo) VALUES ('Seu Assis', 'assis@gmail.com', '123', 'atendente');
INSERT INTO funcionario (nome, email, senha, cargo) VALUES ('Seu Alfredo', 'alfredo@gmail.com', '123', 'atendente');

INSERT INTO cliente (nome, email, senha) VALUES ('João da budega', 'joao@gmail.com', '123');
INSERT INTO cliente (nome, email, senha) VALUES ('Zé Soares', 'zeso@gmail.com', '123');
INSERT INTO cliente (nome, email, senha) VALUES ('Maria', 'maria@gmail.com', '123');

INSERT INTO produtos (nome, preco, quantidade, categoria, descricao) VALUES ('Formatacao', 50.00, 10, 'servico', 'formatacao de computador');
INSERT INTO produtos (nome, preco, quantidade, categoria, descricao) VALUES ('HD 500gb', 150.00, 10, 'produto', 'toshiba com garantia');
INSERT INTO produtos (nome, preco, quantidade, categoria, descricao) VALUES ('SSD 240gb', 180.00, 10, 'produto', 'kingston com garantia');
INSERT INTO produtos (nome, preco, quantidade, categoria, descricao) VALUES ('Led de teclado', 60.00, 10, 'produto', 'led de iluminacao de teclado');
INSERT INTO produtos (nome, preco, quantidade, categoria, descricao) VALUES ('Formatacao', 50.00, 10, 'servico', 'formatacao de computador');
INSERT INTO produtos (nome, preco, quantidade, categoria, descricao) VALUES ('Upgrade SSD', 15.00, 10, 'servico', 'agilidade no acesso aos arquivos');
INSERT INTO produtos (nome, preco, quantidade, categoria, descricao) VALUES ('Troca de tela Iphone', 100.00, 10, 'servico', 'tela padrao de mercado');

INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (1, 1, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (1, 2, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (1, 3, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (1, 4, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (1, 5, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (1, 6, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (1, 7, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (2, 1, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (2, 2, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (2, 3, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (2, 4, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (2, 5, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (2, 6, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (2, 7, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 1, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 2, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 3, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 4, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 5, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 6, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 7, 'requerido');
INSERT INTO venda (id_cliente, id_produto, andamento) VALUES (3, 8, 'requerido');
