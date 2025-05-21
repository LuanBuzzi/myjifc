create database myjifc;

use myjifc;

create table inscricao(
id int auto_increment primary key,
nome varchar(250),
cpf varchar(250),
matricula varchar(250),
data_nascimento date,
telefone varchar(250),
email varchar(250),
campus varchar(250),
anexo varchar(250)
);