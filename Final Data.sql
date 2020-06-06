Create database Final;
use final;
create table users(
iduser INT primary key auto_increment,
NOM_USER varchar(45) not null,
APE_USER varchar(45) not null,
TEL_USER varchar(8) not null,
DIR_USER varchar(50) not null,
CORREO_USER varchar(50) not null unique,
PASS varchar (50) not null
);


create table habitaciones(
idhabitacion INT primary key auto_increment,
NUM_HABITACION INT not null,
TIPO_HABITACION int not null,
CAPACIDAD varchar(10) not null,
PRECIO DECIMAL,
constraint foreign key fk_tip (Tipo_habitacion) references Tipohabitacion(idtipohabitacion)
);

create table TipoHabitacion(
idtipohabitacion INT primary key auto_increment,
tipo varchar(50) not null
);



create table reservas(
idreservas INT  primary key auto_increment,
DIA_RESERVA DATE,
Fecha_ireserva date,
Fecha_sreserva date,
CANT_PERSONAS INT,
idformaPago int,
PRECIO DECIMAL,
HORA_ENTRADA TIME,
HORA_SALIDA TIME,
constraint foreign key (idformaPago) references formaPago(idformaPago)
);

alter table reservas add idhabitacion int not null ;
alter table reservas add iduser int not null;
alter table reservas add constraint fk_user foreign key(idhabitacion) references habitaciones(idhabitacion);
alter table reservas add constraint fk_for foreign key(iduser) references users(iduser);

create table formaPago(
idformaPago INT  primary key auto_increment,
TIPO varchar(10) not null
)