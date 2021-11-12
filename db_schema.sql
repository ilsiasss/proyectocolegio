/*
	CRUD con PostgreSQL y PHP
	@author parzibyte [parzibyte.me/blog]
	@date 2019-06-17

	================================
	Este archivo define la tabla e inserta algunos datos
	para trabajar
	================================
*/
CREATE TABLE estudiante(
	id serial primary key,
	nombre varchar(50) NOT NULL,
    apellido varchar(50) NOT NULL,
    direccion varchar(50) NOT NULL,
	edad smallint NOT NULL
);

CREATE TABLE maestro(
	idm serial primary key,
	nombrem varchar(50) NOT NULL,
	edadm smallint NOT NULL
);

insert into mascotas
(nombre, edad)
values
('Maggie', 3),
('Guayaba', 2),
('Capuchina', 2),
('Snowball', 1),
('Panqué', 1);