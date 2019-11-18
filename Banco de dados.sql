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

INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("Bolo de Cenoura", "Delicioso bolo de cenoura com cobertura de chocolate. Rende 10 porções.", 20.00, "../Imagens_Produtos/1/bolocenoura.jpg");
INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("Bem Casados", "Preço por unidade",1.20, "../Imagens_Produtos/2/bemcasados.jpg");
INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("Bolo de Brigadeiro", "Bolo de chocolate com brigadeiro. Rende 10 porçôes",20.00 , "../Imagens_Produtos/3/bolodebrigadeiro.jpg");
INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("Pavê", "Rende 6 porções", 15.00 ,"../Imagens_Produtos/4/pave.jpg");
INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("Macarons Recheados", "Preço por unidade", 1.50 , "../Imagens_Produtos/5/macaronsrecheados.jpg");
INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("CakePop", "Delicioso bolo no palito. Preço por unidade", 1.00 , "../Imagens_Produtos/6/cakepop.jpg");
INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("Doces Finos", "Doces finos para festas. Preço por unidade",2.00, "../Imagens_Produtos/7/docesfinos.jpg");
INSERT INTO produto (nomepro, descricao, preco, imagem)
VALUES ("Ovo Recheado", "Ovo recheado com chocolate e frutas",30.00 , "../Imagens_Produtos/8/ovorecheado.jpg");

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

