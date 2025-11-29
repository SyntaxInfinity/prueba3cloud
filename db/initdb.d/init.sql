CREATE DATABASE IF NOT EXISTS prueba;
USE prueba;

CREATE TABLE log(
    hora VARCHAR(100) NOT NULL PRIMARY KEY,
    actividad VARCHAR(100) NOT NULL,
    estado VARCHAR(100) NOT NULL
);

INSERT INTO log hora, actividad, estado VALUES ("12:30", "creacion base de los servicios", "activos completos");