create database microServices;
use microServices;

create table cliente (
	id int(4) primary key,
	nome varchar(35) not null,
    sobrenome varchar(35) not null,
    email text not null,
    telefone varchar(10),
    celular varchar(10) not null,
    senha varchar(255) not null,
    descricao text,
    cpf char(11) not null,
    data_nasc date not null
);

create table cuidador (
	id int(4) primary key,
	nome varchar(35) not null,
    sobrenome varchar(35) not null,
    senha varchar(255) not null,
    email text not null,
    descricao text,
    celular varchar(11) not null,
    telefone varchar(10),
    cpf char(11) not null,
    data_nasc date not null
);


create table formacao (
	id int(4) primary key,
    formacao varchar(60),
    id_cuidador int(4),
    constraint fk_cuid_for foreign key (id_cuidador)
		references cuidador(id)
);

create table endereco (
	id int(4) primary key,
	numero varchar(5) not null,
    rua varchar(60) not null,
    cidade varchar(35) not null,
    bairro varchar(35) not null,
    complemento varchar(15),
    cep char(8) not null,
    estado char(2) not null,
    id_clie int(4),
	constraint fk_clie_end foreign key (id_clie)
		references cliente(id),
	id_cuid int(4),
	constraint fk_cuid_end foreign key (id_cuid)
	 	references cuidador(id)
);

select * from cuidador;
select * from cliente;
select * from endereco;
select * from formacao;

-- delete from cliente where id between 0 and 9999;