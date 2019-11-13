USE confeitariafourls;
DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (50),
senha VARCHAR(255),
email VARCHAR (50) NOT NULL
);
DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(
id_cliente INT NOT NULL PRIMARY KEY,
nome VARCHAR (50),
sexo VARCHAR (10),
DDD VARCHAR (2),
telefone VARCHAR (11),
endereco VARCHAR (100),
cidade VARCHAR (50),
bairro VARCHAR (20),
FOREIGN KEY(id_cliente)REFERENCES usuario(id)
);

DROP TABLE IF EXISTS administrador;
CREATE TABLE administrador(
id_admin INT NOT NULL PRIMARY KEY,
nome VARCHAR(50),
FOREIGN KEY(id_admin) REFERENCES usuario(id)
);


DROP TABLE IF EXISTS produto;
CREATE TABLE produto(
id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nomepro VARCHAR (50),
descricao VARCHAR(300),
preco FLOAT,
imagem VARCHAR(250)
);

INSERT INTO produto (nomepro, descricao, preco) VALUES
('Bolo de Cenoura', 'Aquele gostoso com calda de chocolate', 10.0),
('Bolo de abacaxi', 'Aquele gostoso com calda de abacaxi', 10.0),
('Bolo de baunilha', 'Aquele gostoso sem calda', 10.0),
('Bolo de chocolate', 'Aquele gostoso com calda de chocolate', 10.0),
('Bolo de fubá', 'Aquele gostoso com calda de coco', 10.0),
('Bolo de banana', 'Aquele gostoso com calda de banana', 10.0);

DROP TABLE IF EXISTS cliente_produto;
CREATE TABLE cliente_produto(
id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_produto INT,
FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
);

DROP TABLE IF EXISTS promocao;
CREATE TABLE promocao(
id_promo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
data_in DATE,
data_fim DATE,
desconto FLOAT
);
DROP TABLE IF EXISTS produto_promo;
CREATE TABLE produto_promo(
id_promo INT ,
id_produto INT,
FOREIGN KEY (id_promo) REFERENCES promocao (id_promo),
FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
);
DROP TABLE IF EXISTS carrinho;
CREATE TABLE carrinho(
id_carrinho INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_produto INT,
valor_total FLOAT
);
DROP TABLE IF EXISTS produto_carrinho;
CREATE TABLE produto_carrinho(
id_carrinho INT,
id_produto INT,
FOREIGN KEY(id_produto) REFERENCES produto(id_produto),
FOREIGN KEY(id_carrinho) REFERENCES carrinho (id_carrinho)
);
DROP TABLE IF EXISTS venda;
CREATE TABLE venda(
id_venda INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_produto INT,
data_venda DATE,
hora_venda TIME,
FOREIGN KEY(id_produto) REFERENCES produto(id_produto)
);
DROP TABLE IF EXISTS produto_venda;
CREATE TABLE produto_venda(
id_venda INT,
id_produto INT,
qtd INT,
FOREIGN KEY(id_produto) REFERENCES produto(id_produto),
FOREIGN KEY(id_venda) REFERENCES venda(id_venda)
);

