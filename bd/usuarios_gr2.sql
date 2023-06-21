-- -------------------------------------------------------
-- Crear base de datos
-- -------------------------------------------------------
create database usuarios;
use usuarios;

-- -------------------------------------------------------
-- Crear base de tabla Brand
-- -------------------------------------------------------
create table usuarios(
	idusuario int PRIMARY KEY auto_increment,
	nomusuario varchar(50) Not null,
    pasusuario varchar(50) Not null,
    desusuario varchar(50) Not null
);

insert into usuarios(nomusuario,pasusuario,desusuario)
value("jsuclupe","123","prueba de usuario");

create table productos(
	idproducto int primary key auto_increment,
    nomproducto varchar(50) not null,
    preproducto decimal(8,2) not null,
    stoproducto int not null,
    catproducto int not null
);

insert into productos(nomproducto,preproducto,stoproducto,catproducto)
values("teclado",68.5,20,1);

update productos
SET 
nomcategoria="lapiceros"
WHERE
idproducto=1;

delete from productos where nomproducto="lapiceros";

create table  categorias (
	idcategorias int PRIMARY KEY AUTO_INCREMENT,
    nomcategoria varchar(50) not null,
    descategoria varchar(50) not null
);

insert into categorias (nomcategoria,descategoria)
values("libreria","articulos de libreria");

update categorias
SET 
nomcategoria="computo"
WHERE
idcategoria=1;

delete from categorias where idcategoria=1;

alter table productos
add CONSTRAINT fk_catproducto
FOREIGN key (catproducto)REFERENCES categorias (idcaegoria);

