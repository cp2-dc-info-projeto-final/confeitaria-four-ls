USE confeitariafourls;

CREATE TABLE cliente(

id_cliente int,
CPF varchar(20) ,
nome varchar (50),
email varchar (50),
sexo varchar (10),
DDD varchar (2),
telefone varchar (10),
endereco varchar (100),
cidade varchar(50),
bairro varchar (20),
senha varchar (20),
PRIMARY KEY(id_cliente)

);

CREATE TABLE admnistrador(

id_administrador int,
nome varchar(50),
cod_func varchar(50),
PRIMARY KEY(id_administrador)

);

CREATE TABLE contato(

    id_contato INT,
    num_contato VARCHAR (11),
    endereco_cont VARCHAR (50),
    emanil_cont VARCHAR (50),
    PRIMARY KEY(id_contato)
);

CREATE TABLE produto(

id_produto INT,
cod_produto INT,
sabor VARCHAR (50),
tamanho INT,
preco FLOAT,
PRIMARY KEY(id_produto)

);

CREATE TABLE cardapio(

    id_cardapio INT,
    descricao VARCHAR (1000),
    PRIMARY KEY(id_cardapio)
);

CREATE TABLE promocao(

    id_promo INT,
    data_in DATE,
    data_fim DATE,
    desconto FLOAT,
    PRIMARY KEY(id_promo)

);

CREATE TABLE carrinho(

    id_carrinho INT,
    id_produto INT,
    valor_total FLOAT,
    PRIMARY KEY(id_carrinho),
    FOREIGN KEY(id_produto)
);
