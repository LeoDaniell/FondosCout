create database SAAS;
use SAAS;

/*Definicion de la tabla registro scout*/
Create Table Tbl_T09_RS
(
PK_REGIS varchar (12) not null, 
Nom_Scout varchar (30) not null,
ApScout varchar (30),
AmScout varchar (30),
Inscrito varchar (10) not null,
CURP varchar (17) not null,
Calle varchar (30) not null,
Numero int not null,
Colonia varchar (30) not null,
CP int not null,
Fec_Nac date not null,
Sexo varchar (10) not null,
Fec_Ingre date not null,
Fec_Reno date not null,
CUM varchar (30) not null,
Seisena varchar (20) not null,
Cargo varchar (30) not null,
Scouter varchar (20) not null

);

/*Definicion de la tabla asistencia*/
create table Tbl_T10_AS(
PK_AS varchar (12) not null,
act int not null,
punt int not null,
unif int not null,
ba int not null,
eb int not null,
form int not null,
entu int not null,
act1 int not null,
act2 int not null,
act3 int not null,
observacion varchar (500),	
FK_SESS_10 varchar (12) not null,
FK_RES_10 varchar(12) not null
);

/*Definicion de la tabla sesiones*/
Create Table Tbl_T01_SESS(
PK_SESS varchar (12) not null,
NombreSESS varchar(40)not null,
nivelseccion varchar(20)not null,
tiposeccion varchar (20),
fecha date not null,
costo decimal,
lugar varchar(60),
ingreso decimal,
egreso decimal,
saldo decimal,
saldoAnt decimal,
observacion varchar (500)
);

#Definicion de las llaves primarias#
Alter table Tbl_T09_RS add primary key (PK_REGIS);
Alter table Tbl_T10_AS add primary key (PK_AS);
Alter table Tbl_T01_SESS add primary key (PK_SESS);

#Definicion de las llaves Foraneas#
Alter table Tbl_T10_AS add foreign key (FK_SESS_10)
references Tbl_T01_SESS(PK_SESS);
Alter table Tbl_T10_AS add foreign key (FK_RES_10)
references Tbl_T09_RS(PK_REGIS);