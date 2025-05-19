CREATE DATABASE tienda_juegos;
USE tienda_juegos;

CREATE TABLE administradores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO administradores (usuario, password) 
VALUES ('admin', SHA2('admin123', 256));
