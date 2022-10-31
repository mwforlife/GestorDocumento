
create database gestordocumentos;

use gestordocumentos;

create table sexo(
    id int not null auto_increment primary key,
    nombre varchar(20) not null
);

insert into sexo(nombre) values('Masculino');
insert into sexo(nombre) values('Femenino');

create table estadocivil(
    id int not null auto_increment primary key,
    nombre varchar(20) not null
);

insert into estadocivil(nombre) values('Soltero');
insert into estadocivil(nombre) values('Casado');
insert into estadocivil(nombre) values('Divorciado');
insert into estadocivil(nombre) values('Viudo');

create table discapacidad(
    id int not null auto_increment primary key,
    nombre varchar(20) not null
);

insert into discapacidad(nombre) values('Si');
insert into discapacidad(nombre) values('No');

create table regiones (
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null, 
    nombre varchar(200) not null
);

create table comunas (
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null,
    region int not null references regiones(id)
);

create table ciudades (
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null,
    region int not null references regiones(id)
);

create table nacionalidad (
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table afp(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null,
    tasa decimal(10,2) not null
);

create table tiposueldo(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table tipodocumento(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table tipoisapre(
    id int not null auto_increment primary key,
    nombre varchar(50) not null
);

insert into tipoisapre(nombre) values('Fonasa');
insert into tipoisapre(nombre) values('Isapre');

create table isapre(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null,
    tipo int not null references tipoisapre(id)
);


create table cajascompensacion(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table mutuales(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table tipocontrato(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table jornadas(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table tramosasignacionfamiliar(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table causalterminocontrato(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table cargos(
    id int not null auto_increment primary key,
    codigo varchar(20) not null,
    codigoprevired varchar(20) not null,
    nombre varchar(50) not null
);

create table codigoactividad(
    id int not null auto_increment primary key,
    codigosii int not null,
    nombre varchar(50) not null
);

create table status(
    id int not null auto_increment primary key,
    nombre varchar(50) not null
);

insert into status(nombre) values('Activo');
insert into status(nombre) values('Inactivo');

create table users (
    id_usu int not null auto_increment primary key,
    rut varchar(20) not null,
    nombre varchar(200) not null,
    apellidos varchar(200) not null,
    email varchar(200) not null,
    direccion varchar(200) not null,
    region int not null references regiones(id),
    comuna int not null references comunas(id),
    telefono varchar(20) not null,
    password varchar(64) not null,
    estado int not null references status(id),
    token varchar(200) not null,
    created_at timestamp not null default current_timestamp,
    updated_at timestamp not null default current_timestamp on update current_timestamp
);

create table sesionusuario (
    id int not null auto_increment primary key,
    id_usu int not null references users(id_usu),
    token varchar(200) not null,
    created_at timestamp not null default current_timestamp,
    updated_at timestamp not null default current_timestamp on update current_timestamp
);

create table permisos(
    id int not null auto_increment primary key,
    nombre varchar(50) not null,
    descripcion varchar(200) not null
);

insert into permisos(nombre,descripcion) values('Gestión','Permite Gestion las definiciones de sistema');
insert into permisos(nombre,descripcion) values('Lectura','Permite leer los datos');
insert into permisos(nombre,descripcion) values('Escritura','Permite escribir los datos');
insert into permisos(nombre,descripcion) values('Actualizacion','Permite actualizar los datos');
insert into permisos(nombre,descripcion) values('Eliminacion','Permite eliminar los datos');

create table permisosusuarios(
    id int not null auto_increment primary key,
    idusuario int not null references users(id_usu),
    idpermiso int not null references permisos(id)
);

create table empresa(
    id int not null auto_increment primary key,
    rut varchar(20) not null,
    razonsocial varchar(200) not null,
    direccion varchar(200) not null,
    region int not null references regiones(id),
    comuna int not null references comunas(id),
    ciudad int not null references ciudades(id),
    telefono varchar(20) not null,
    email varchar(200) not null,
    giro varchar(200) not null,
    cajascompensacion int not null references cajascompensacion(id),
    mutuales int not null references mutuales(id),
    cotizacionbasica decimal(10,2) not null,
    cotizacionleysanna decimal(10,2) not null,
    cotizacionadicional decimal(10,2) not null,
    created_at timestamp not null default current_timestamp,
    updated_at timestamp not null default current_timestamp on update current_timestamp
);

create table representantelegal(
    id int not null auto_increment primary key,
    rut varchar(20) not null,
    nombre varchar(200) not null,
    primerapellido varchar(200) not null,
    segundoapellido varchar(200) not null,
    empresa int not null references empresa(id)
);

create table nubcodigoactividad(
    id int not null auto_increment primary key,
    codigo int not null references codigoactividad(id),
    empresa int not null references empresa(id)
);

create table centrocosto(
    id int not null auto_increment primary key,
    nombre varchar(200) not null,
    empresa int not null references empresa(id)
);

create table subcentrocosto(
    id int not null auto_increment primary key,
    nombre varchar(200) not null,
    centrocosto int not null references centrocosto(id)
);

create table trabajadores(
    id int not null auto_increment primary key,
    rut varchar(20) not null,
    dni varchar(20) ,
    nombre varchar(200) not null,
    primerapellido varchar(200) not null,
    segundoapellido varchar(200) not null,
    fechanacimiento date not null,
    sexo int not null references sexo(id),
    estadocivil int not null references estadocivil(id),
    nacionalidad int not null references nacionalidad(id),
    discapacidad int not null references discapacidad(id),
    calle varchar(200) not null,
    numero varchar(20) not null,
    depto varchar(20) ,
    region int not null references regiones(id),
    comuna int not null references comunas(id),
    ciudad int not null references ciudades(id),
    telefono varchar(20) not null,
    email varchar(200) not null
);

create table AuditoriaEventos(
    id int not null auto_increment primary key,
    idusuario int not null references users(id_usu),
    evento varchar(200) not null,
    fecha timestamp not null default current_timestamp
);

