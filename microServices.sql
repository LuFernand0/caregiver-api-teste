create database microServices;
use microServices;

create table endereco (
	id int(4) primary key,
	numero varchar(5) not null,
    rua varchar(60) not null,
    cidade varchar(35) not null,
    bairro varchar(35) not null,
    complemento varchar(15),
    cep char(8) not null,
    estado char(2) not null
);

create table cliente (
	id int(4) primary key,
	nome varchar(35) not null,
    sobrenome varchar(35) not null,
    email text not null,
    telefone varchar(10),
    celular varchar(10) not null,
    senha varchar(60) not null,
    descricao text,
    cpf char(11) not null,
    data_nasc date not null,
    id_endereco int(4),
    constraint fk_end_clie foreign key (id_endereco)
		references endereco(id)
);

create table cuidador (
	id int(4) primary key,
	nome varchar(35) not null,
    sobrenome varchar(35) not null,
    senha varchar(60) not null,
    email text not null,
    descricao text,
    celular varchar(11) not null,
    telefone varchar(10),
    formacao varchar(60),
    cpf char(11) not null,
    data_nasc date not null,
    id_endereco int(4),
    constraint fk_end_cuid foreign key (id_endereco)
		references endereco(id)
);

select * from cuidador;
select * from cliente;
select * from endereco;