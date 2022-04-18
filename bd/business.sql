drop table if exists categoria cascade;
create table if not exists categoria(
    id serial primary key,
    nome varchar(50) unique not null,
    criado_em timestamp not null default current_timestamp
);

drop table if exists servico cascade;
create table if not exists servico(
    id serial primary key,
    imagem varchar(255) not null,
    titulo varchar(255) not null,
    descricao text not null,
	categoria_id int not null,
    criado_em timestamp not null default current_timestamp,
	foreign key(categoria_id) references categoria(id)
);

drop table if exists plano cascade;
create table if not exists plano(
    id serial primary key,
    tipo varchar(255) not null,
    preco float not null,
    info1 varchar(255) not null,
    info2 varchar(255) not null,
    info3 varchar(255) not null,
    info4 varchar(255) not null,
    info5 varchar(255) not null,
    info6 varchar(255) not null,
    info7 varchar(255) not null,
    info8 varchar(255) not null,
    categoria_id int not null,
    criado_em timestamp not null default current_timestamp,
	foreign key(categoria_id) references categoria(id)
);

drop table if exists usuario cascade;
create table if not exists usuario(
    id serial primary key,
    nome varchar(150) not null,
    email varchar(150) not null,
    senha varchar(150) not null
);
