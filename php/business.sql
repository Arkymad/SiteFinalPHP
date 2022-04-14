create database if not exists servicos;

use servicos;

create table servicos(
id serial primary key,
imagem varchar(255) not null,
titulo varchar(255) not null,
descricao text not null);

create table planos(
id serial primary key,
tipo varchar(255) not null,
preco int not null,
info1 varchar(255) not null,
info2 varchar(255) not null,
info3 varchar(255) not null,
info4 varchar(255) not null,
info5 varchar(255) not null,
info6 varchar(255) not null,
info7 varchar(255) not null,
info8 varchar(255) not null);
