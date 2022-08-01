
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
insert into gasto_comun VALUES (10101,"30/01/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (10102,"28/02/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (10103,"30/03/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (10104,"30/04/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (10105,"30/05/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (10106,"30/06/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (10107,"30/07/2022",16000,25000,30500,33000);

insert into gasto_comun VALUES (10201,"30/06/2022",11000,25000,30500,33000);
insert into gasto_comun VALUES (10202,"30/06/2022",12000,25000,30500,33000);
insert into gasto_comun VALUES (10203,"30/06/2022",13000,25000,30500,33000);
insert into gasto_comun VALUES (10204,"30/06/2022",14000,25000,30500,33000);
insert into gasto_comun VALUES (10205,"30/06/2022",15000,25000,30500,33000);
insert into gasto_comun VALUES (10206,"30/06/2022",16000,25000,30500,33000);
insert into gasto_comun VALUES (10207,"30/06/2022",17000,25000,30500,33000);

insert into gasto_comun VALUES (20101,"30/06/2022",11000,25000,40500,33000);
insert into gasto_comun VALUES (20102,"30/06/2022",12000,25000,40500,33000);
insert into gasto_comun VALUES (20103,"30/06/2022",13000,25000,40500,33000);
insert into gasto_comun VALUES (20104,"30/06/2022",14000,25000,40500,33000);
insert into gasto_comun VALUES (20105,"30/06/2022",15000,25000,40500,33000);
insert into gasto_comun VALUES (20106,"30/06/2022",16000,25000,40500,33000);
insert into gasto_comun VALUES (20107,"30/06/2022",17000,25000,40500,33000);

insert into gasto_comun VALUES (20201,"30/06/2022",11000,25000,40500,33000);
insert into gasto_comun VALUES (20202,"30/06/2022",12000,25000,40500,33000);
insert into gasto_comun VALUES (20203,"30/06/2022",13000,25000,40500,33000);
insert into gasto_comun VALUES (20204,"30/06/2022",14000,25000,40500,33000);
insert into gasto_comun VALUES (20205,"30/06/2022",15000,25000,40500,33000);
insert into gasto_comun VALUES (20206,"30/06/2022",16000,25000,40500,33000);
insert into gasto_comun VALUES (20207,"30/06/2022",17000,25000,40500,33000);

insert into gasto_comun VALUES (30101,"30/06/2022",11000,25000,40500,33000);
insert into gasto_comun VALUES (30102,"30/06/2022",12000,25000,40500,33000);
insert into gasto_comun VALUES (30103,"30/06/2022",13000,25000,40500,33000);
insert into gasto_comun VALUES (30104,"30/06/2022",14000,25000,40500,33000);
insert into gasto_comun VALUES (30105,"30/06/2022",15000,25000,40500,33000);
insert into gasto_comun VALUES (30106,"30/06/2022",16000,25000,40500,33000);
insert into gasto_comun VALUES (30107,"30/06/2022",17000,25000,40500,33000);

tabla pago gastos
CREATE table pago_gasto( id_depa int, cod_gasto int, estado_pago varchar(20), FOREIGN KEY (id_depa) REFERENCES departamento(id_depa), FOREIGN KEY (cod_gasto) REFERENCES gasto_comun(cod_gasto) );

INSERT INTO pago_gasto VALUES(101,10101,'pagado');
INSERT INTO pago_gasto VALUES(101,10102,'pagado');
INSERT INTO pago_gasto VALUES(101,10103,'pagado');
INSERT INTO pago_gasto VALUES(101,10104,'pagado');
INSERT INTO pago_gasto VALUES(101,10105,'pagado');
INSERT INTO pago_gasto VALUES(101,10106,'pagado');
INSERT INTO pago_gasto VALUES(101,10107,'no pago');
INSERT INTO pago_gasto VALUES(101,10108,'no pago');

INSERT INTO pago_gasto VALUES(102,10201,'pagado');
INSERT INTO pago_gasto VALUES(102,10202,'pagado');
INSERT INTO pago_gasto VALUES(102,10203,'pagado');
INSERT INTO pago_gasto VALUES(102,10204,'pagado');
INSERT INTO pago_gasto VALUES(102,10205,'pagado');
INSERT INTO pago_gasto VALUES(102,10206,'pagado');
INSERT INTO pago_gasto VALUES(102,10207,'no pago');
INSERT INTO pago_gasto VALUES(102,10208,'no pago');

INSERT INTO pago_gasto VALUES(201,20101,'pagado');
INSERT INTO pago_gasto VALUES(201,20102,'pagado');
INSERT INTO pago_gasto VALUES(201,20103,'pagado');
INSERT INTO pago_gasto VALUES(201,20104,'pagado');
INSERT INTO pago_gasto VALUES(201,20105,'pagado');
INSERT INTO pago_gasto VALUES(201,20106,'pagado');
INSERT INTO pago_gasto VALUES(201,20107,'pagado');
INSERT INTO pago_gasto VALUES(201,20108,'por pagar');

INSERT INTO pago_gasto VALUES(202,20201,'pagado');
INSERT INTO pago_gasto VALUES(202,20202,'pagado');
INSERT INTO pago_gasto VALUES(202,20203,'pagado');
INSERT INTO pago_gasto VALUES(202,20204,'pagado');
INSERT INTO pago_gasto VALUES(202,20205,'pagado');
INSERT INTO pago_gasto VALUES(202,20206,'pagado');
INSERT INTO pago_gasto VALUES(202,20207,'pagado');
INSERT INTO pago_gasto VALUES(202,20208,'por pagar');

INSERT INTO pago_gasto VALUES(301,30101,'pagado');
INSERT INTO pago_gasto VALUES(301,30102,'pagado');
INSERT INTO pago_gasto VALUES(301,30103,'pagado');
INSERT INTO pago_gasto VALUES(301,30104,'pagado');
INSERT INTO pago_gasto VALUES(301,30105,'pagado');
INSERT INTO pago_gasto VALUES(301,30106,'pagado');
INSERT INTO pago_gasto VALUES(301,30107,'pagado');
INSERT INTO pago_gasto VALUES(301,30108,'pagado');