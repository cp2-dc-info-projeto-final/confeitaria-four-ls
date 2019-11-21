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
cpf VARCHAR (11),
sexo VARCHAR (10),
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
imagem VARCHAR(250),
visible BOOLEAN NOT NULL
);

INSERT INTO produto (nomepro, descricao, preco, imagem, visible)
VALUES ("Bolo de Cenoura", "Delicioso bolo de cenoura com cobertura de chocolate. Rende 10 porções.", 20.00, "bolocenoura.jpg", 1),
 ("Bem Casados", "Preço por unidade",1.20, "bemcasados.jpg", 1),
 ("Bolo de Brigadeiro", "Bolo de chocolate com brigadeiro. Rende 10 porçôes",20.00 , "bolodebrigadeiro.jpg", 1),
 ("Pavê", "Rende 6 porções", 15.00 ,"pave.jpg", 1),
 ("Macarons Recheados", "Preço por unidade", 1.50 , "macaronsrecheados.jpg", 1),
 ("CakePop", "Delicioso bolo no palito. Preço por unidade", 1.00 , "cakepop.jpg", 1),
 ("Doces Finos", "Doces finos para festas. Preço por unidade",2.00, "docesfinos.jpg", 1),
 ("Ovo Recheado", "Ovo recheado com chocolate e frutas",30.00 , "ovorecheado.jpg", 1);
DROP TABLE IF EXISTS cliente_produto;
CREATE TABLE cliente_produto(
id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_produto INT,
FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
);
DROP TABLE IF EXISTS carrinho;
DROP TABLE IF EXISTS produto_carrinho;
DROP TABLE IF EXISTS venda;
CREATE TABLE venda(
id_venda INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_produto INT,
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



