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
login varchar (20),
senha varchar (20),
PRIMARY KEY(id_cliente)

);

CREATE TABLE admnistrador (
id_administrador int,
nome varchar(50),
cod_func varchar(50),
PRIMARY KEY(id_administrador)

);
