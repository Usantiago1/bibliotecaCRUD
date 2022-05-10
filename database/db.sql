create database bibliotecaVirtual;


show databases;

use bibliotecaVitual;

create table libros 
    (id_libro int AUTO_INCREMENT,
    nombre_libro varchar(50) NOT NULL,
    categoria_libro varchar(50), 
    editorial varchar(50), 
    autor varchar(50), 
    PRIMARY KEY (id_libro));

