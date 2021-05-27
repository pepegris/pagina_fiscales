CREATE DATABASE fiscal;

-- to use database
use fiscal;

-- creating a new table
CREATE TABLE art (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
  art_nombre VARCHAR(255) NOT NULL,
  art_des VARCHAR(255),
  art_img VARCHAR(255) NOT NULL,
  co_art VARCHAR(200) NOT NULL unique,
  ref_art INT NOT NULL,
  prec_vta1 INT  ,
  prec_vta2 INT  ,
  stock INT NOT NULL,
  fecha datetime NOT NULL DEFAULT CURRENT_TIMESTAMP 
);

/* CREATE TABLE art (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
  art_nombre VARCHAR(255) NOT NULL,
  art_des VARCHAR(255),
  art_img VARCHAR(255) NOT NULL,
  fecha datetime NOT NULL DEFAULT CURRENT_TIMESTAMP 
); */

CREATE TABLE configuracion (
  ref INT(10) UNIQUE,
  empresa VARCHAR(200) ,
  rif varchar (200) ,
  razon_social varchar(240) ,
  numero varchar (200) ,
  direcion varchar(240) ,
  iva int not null,
  tasa_dia INT NOT NULL
);


INSERT INTO  configuracion VALUES (0,'NOMBRE DE LA EMRPESA','j-99999-1','trabajo','+58 0412-2027622','Venezuela',16,3000000);

CREATE TABLE clientes (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nombre VARCHAR (255) NOT NULL,
  ci varchar (200) NOT NULL,
  numero varchar (200),
  email VARCHAR (255),
  direccion VARCHAR (255),
  informe VARCHAR (255),
  deuda VARCHAR (255),
  fecha datetime NOT NULL DEFAULT CURRENT_TIMESTAMP 
);

-- FACTURA
CREATE TABLE facturas(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
  fac_des VARCHAR(255) NOT NULL,
  total_bruto INT NOT NULL,
  total_neto INT NOT NULL,
  total_iva INT NOT NULL,
  fecha datetime NOT NULL DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE reng_fact(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
  reng_art VARCHAR(255) NOT NULL,
  precio_art INT NOT NULL,
  fecha datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
   FOREIGN KEY(id) REFERENCES facturas(id)
)





