USE confeitariafourls;
DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
id INT,
<<<<<<< HEAD
id_usuario 
=======
>>>>>>> 64cfd535fee3bdef95bf1327333e973cf4f31ebc
nome VARCHAR (50),
senha VARCHAR(20),
PRIMARY KEY(id)
);
DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(
id_cliente INT,
nome VARCHAR (50),
email VARCHAR (50),
sexo VARCHAR (10),
DDD VARCHAR (2),
telefone VARCHAR (10),
endereco VARCHAR (100),
cidade VARCHAR (50),
bairro VARCHAR (20),
senha VARCHAR (20),
PRIMARY KEY(id_cliente),
FOREIGN KEY(id_cliente)REFERENCES usuario(id)
);

DROP TABLE IF EXISTS administrador;
CREATE TABLE administrador(
id_admin INT,
nome VARCHAR(50),
senha VARCHAR(50),
PRIMARY KEY(id_admin),
FOREIGN KEY(id_admin) REFERENCES usuario(id)
);


DROP TABLE IF EXISTS produto;
CREATE TABLE produto(
id_produto INT,
cod_produto INT,
sabor VARCHAR (50),
tamanho INT,
preco FLOAT,
PRIMARY KEY(id_produto)
);

DROP TABLE IF EXISTS cliente_produto;
CREATE TABLE cliente_produto(
id_cliente INT,
id_produto INT,
FOREIGN KEY (id_cliente) REFERENCES cliente (id_cliente),
FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
);

DROP TABLE IF EXISTS promocao;
CREATE TABLE promocao(
id_promo INT,
data_in DATE,
data_fim DATE,
desconto FLOAT,
PRIMARY KEY(id_promo)
);
DROP TABLE IF EXISTS produto_promo;
CREATE TABLE produto_promo(
id_promo INT,
id_produto INT,
FOREIGN KEY (id_promo) REFERENCES promocao (id_promo),
FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
);
DROP TABLE IF EXISTS carrinho;
CREATE TABLE carrinho(
id_carrinho INT,
id_produto INT,
valor_total FLOAT,
PRIMARY KEY(id_carrinho)
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
id_venda INT,
id_produto INT,
data_venda DATE,
hora_venda TIME,
PRIMARY KEY(id_venda),
FOREIGN KEY(id_produto) REFERENCES produto(id_produto)
);