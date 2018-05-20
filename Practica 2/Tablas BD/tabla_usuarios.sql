CREATE TABLE Cliente(
	Nombre varchar(10) NOT NULL,
	Apellidos varchar(30) NOT NULL,
	DNI varchar(12) NOT NULL,
	FechaNacimiento varchar(30) NOT NULL,
	Sexo varchar(2) NOT NULL,
	Direccion varchar(50) NOT NULL,
	Telefono varchar(12) NOT NULL,
	Email varchar(30) NOT NULL,
	Talla varchar(1),
	Tarifa varchar(15) NOT NULL,
	Pago varchar(10) NOT NULL,
	Estadisticas varchar(60),
	PRIMARY KEY(DNI));
	