Creacion de 4 departamento que son :101,102,201,202 estos son parte del edificio 01
    insert into departamento values (101,'desocupado'),(102,'desocupado'),(201,'desocupado'),(202,'desocupado');

definiendo roles en tabla tipo_usuario
    insert INTO tipo_usuario(cod_usuario,rol_usuario) values(11,'administrador');
    insert INTO tipo_usuario(cod_usuario,rol_usuario) values(22,'arrendatario');

creacion tabla tipo_usuario:
CREATE TABLE tipo_usuario( cod_usuario int, rol_usuario varchar(20), primary key (cod_usuario) );

creacion de tabla usuario:
CREATE TABLE usuario(
nombre varchar(20),
  rut varchar(20),
  pass varchar(20),
  cod_usuario int,
  apellido varchar(20),
  primary key(rut),
   FOREIGN KEY (cod_usuario) REFERENCES tipo_usuario(cod_usuario)
);

creacion tabla departamento
 CREATE table departamento( id_depa integer, estado_depa varchar(20), PRIMARY KEY (id_depa) );

creacion tabla habita:
CREATE table habita( 
id_depa int, rut varchar(20), 
FOREIGN KEY (id_depa) REFERENCES departamento(id_depa), 
FOREIGN Key (rut) REFERENCES usuario(rut) ); 

creacion
