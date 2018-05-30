CREATE TABLE Preguntas(
	id INT NOT NULL AUTO_INCREMENT,
	topic varchar(500) NOT NULL,
	usuario varchar(12),
	PRIMARY KEY (id),
	CONSTRAINT dni FOREIGN KEY (usuario) 
	REFERENCES Cliente(DNI));
