DROP DATABASE IF EXISTS kyoto;
CREATE DATABASE kyoto;
USE kyoto;
create table comentarios(
id int primary key auto_increment,
nombre varchar(34),
comentario varchar(34),
fecha timestamp
);