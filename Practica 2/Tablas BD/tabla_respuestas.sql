CREATE TABLE Respuestas(
	id_respuesta INT NOT NULL AUTO_INCREMENT,
	id_pregunta INT NOT NULL,
	usuario varchar(12) NOT NULL,
	topic VARCHAR(500),
	PRIMARY KEY (id_respuesta),
	CONSTRAINT iden_pregunta FOREIGN KEY (id_pregunta)
	REFERENCES Preguntas(id));
