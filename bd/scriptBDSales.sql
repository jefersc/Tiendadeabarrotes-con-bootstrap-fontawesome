-- -------------------------------------------------------
-- Crear base de datos
-- -------------------------------------------------------
create database Sales;

use Sales;


-- -------------------------------------------------------
-- Crear base de tabla Brand
-- -------------------------------------------------------
create table Brand (
	cod_brand char(5) not null primary key,
    brand varchar(30) not null
);

-- -------------------------------------------------------
-- Crear base de tabla Product
-- -------------------------------------------------------
create table Product (
	cod_product char(5) not null primary key,
    product varchar(40) not null,
    price float,
    mesure char(1),
    cod_brand char(5) not null,
    foreign key (cod_brand) references Brand (cod_brand)
);
-- -------------------------------------------------------
-- Tabla UserM
-- -------------------------------------------------------
create table UserM (
	cod_userm char(5) not null primary key,
    userm varchar(30) not null,
    passw varchar(30) not null
);
-- ---------------------------------------
-- insertar valores a la tabla de usuarios
-- ---------------------------------------
insert into UserM values
("U0001","jsuclupe","123"),
("U0002","jluque","456"),
("U0003","dnuñez","789");

select * from UserM;
-- ---------------------------------------
-- insertar datos a la tabla productos  --
-- ---------------------------------------
insert into Product values
("P0001", "Aceite de oliva extra virgen ",24.00, "250 ML", "giussepe cremonini"),
("P0002", "Aceite vegetal",7.50, "1Lt", "Ideal"),
("P0003", "Aceituna verdes con pimiento",6.00, "240gr", "Cale"),
("P0004", "Salsa Bolognesa", 11.20, "370Gr", "Amo"),
("P0005", "Arroz", 22.00, "5Kg", "Costeño"),
("P0006", "Avena", 1.50, "80kg", "Grano de oro"),
("P0007", "Avena", 2.00, "130Gr", "Quaquer"),
("P0008", "Azucar blanca", 4.50, "1Kg", "Costeño"),
("P0009", "Crunchy  Flamin Hot", 3.00, "60Gr", "CHEETOS"),
("P0010", "COCKTAIL DE FRUTAS", 8.50, "822Gr", "ACONCAGUA");

select * from product;
-- -------------------------------------------------------
-- Procedimiento almacenado
-- -------------------------------------------------------
delimiter $$
create procedure BrandList()
begin
	select * from Brand order by Brand;
end; $$