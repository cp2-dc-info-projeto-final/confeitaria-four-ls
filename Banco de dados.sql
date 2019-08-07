USE confeitariafourls;
DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
CPF VARCHAR(11),
id_usuario 
nome VARCHAR (50),
senha VARCHAR(20),
PRIMARY KEY(CPF)
);
DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(
CPF_cliente VARCHAR (11),
nome VARCHAR (50),
email VARCHAR (50),
sexo VARCHAR (10),
DDD VARCHAR (2),
telefone VARCHAR (10),
endereco VARCHAR (100),
cidade VARCHAR (50),
bairro VARCHAR (20),
senha VARCHAR (20),
PRIMARY KEY(CPF_cliente),
FOREIGN KEY(CPF_cliente)REFERENCES usuario(CPF)
);

DROP TABLE IF EXISTS administrador;
CREATE TABLE administrador(
CPF_admin VARCHAR(11),
nome VARCHAR(50),
senha VARCHAR(50),
PRIMARY KEY(CPF_admin),
FOREIGN KEY(CPF_admin) REFERENCES usuario(CPF)
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
CPF_cliente INT,
id_produto INT,
FOREIGN KEY (CPF_cliente) REFERENCES cliente (CPF_cliente),
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
