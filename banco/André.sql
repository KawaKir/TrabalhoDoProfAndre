create database trabalhoAndre;
use trabalhoandre;

create table users_tb(
id_user int primary key auto_increment,
nome_user varchar(50),
sobrenome_user varchar(50),
email_user varchar(100),
senha_user varchar(50),
DataNasc_user date
)