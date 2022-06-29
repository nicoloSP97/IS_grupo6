
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

creacion..
Creacion de 4 departamento que son :101,102,201,202 estos son parte del edificio 01
    insert into departamento values (101,'desocupado'),(102,'desocupado'),(201,'desocupado'),(202,'desocupado');

definiendo roles en tabla tipo_usuario
    insert INTO tipo_usuario(cod_usuario,rol_usuario) values(11,'administrador');
    insert INTO tipo_usuario(cod_usuario,rol_usuario) values(22,'arrendatario');

creacion de condominio:
CREATE TABLE condominio( id_condominio int, PRIMARY KEY (id_condominio) );

extras:
ALTER TABLE departamento add id_condominio int;
ALTER TABLE departamento ADD FOREIGN KEY (id_condominio) REFERENCES condominio(id_condominio);
INSERT INTO condominio values('01');
UPDATE departamento set id_condominio=1 where estado_depa='ocupado' or estado_depa='desocupado';

administrador:
INSERT INTO usuario values('admin','admin','pass',11,'admin');

creacion tabla gasto_comun
CREATE TABLE gasto_comun ( cod_gasto int, fecha_limite date, monto_luz int, monto_agua int, monto_gas int, monto_otros int, primary key (cod_gasto) );
tuplas de tabla gasto_comun
insert into gasto_comun VALUES (11,"30/06/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (12,"30/06/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (13,"30/06/2022",16000,25000,30500,33000);

tabla pago gastos
CREATE table pago_gasto( id_depa int, cod_gasto int, estado_pago varchar(20), FOREIGN KEY (id_depa) REFERENCES departamento(id_depa), FOREIGN KEY (cod_gasto) REFERENCES gasto_comun(cod_gasto) );

INSERT INTO pago_gasto VALUES(101,11,'por pagar');