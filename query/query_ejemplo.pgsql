CREATE DATABASE TablaPagina;
CREATE SCMEMA ejercicios;
SET search_path TO ejercicios,public;
DROP TABLE IF EXISTS persona;
CREATE TABLE persona(
    idpersona SERIAL PRIMARY KEY,
    nombreapellido VARCHAR(100) NOT NULL,
    rut VARCHAR(11) NOT NULL,
    email VARCHAR(60)
);
INSERT INTO persona(nombreapellido, rut, email) VALUES
('ss cdcd','9999999-9','scsdsd@njs.com'),
('Asd csdssdsds','18654782-6','alguien@nnnjs.com'),
('ssu add','4567123-K','ggg@hhh.cl'),
('tt kk','6743123-0','scsdsd@njs.com');