create database crud;
use crud;

create table user(
	id int not null auto_increment primary key,
	name varchar(20) not null,
	lastname varchar(20) not null,
	created_at datetime not null
);