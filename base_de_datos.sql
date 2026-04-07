CREATE DATABASE techgame_db;
USE techgame_db;

CREATE TABLE categorias (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(50));
CREATE TABLE proveedores (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(50), estado VARCHAR(20));
CREATE TABLE productos (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(50), categoria_id INT, stock INT, FOREIGN KEY(categoria_id) REFERENCES categorias(id));
CREATE TABLE clientes (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(50), email VARCHAR(50));
CREATE TABLE empleados (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(50), cargo VARCHAR(50));
CREATE TABLE pedidos (id INT AUTO_INCREMENT PRIMARY KEY, cliente_id INT, fecha DATE, FOREIGN KEY(cliente_id) REFERENCES clientes(id));
CREATE TABLE detalle_pedidos (id INT AUTO_INCREMENT PRIMARY KEY, pedido_id INT, producto_id INT, cantidad INT, FOREIGN KEY(pedido_id) REFERENCES pedidos(id), FOREIGN KEY(producto_id) REFERENCES productos(id));
CREATE TABLE eventos (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(50), fecha DATE);

INSERT INTO categorias (nombre) VALUES ('Consolas'), ('Videojuegos'), ('Accesorios');
INSERT INTO proveedores (nombre, estado) VALUES ('Sony', 'Activo'), ('Nintendo', 'Inactivo'), ('Microsoft', 'Activo');
INSERT INTO productos (nombre, categoria_id, stock) VALUES ('PlayStation 5', 1, 15), ('Mando Xbox', 3, 4), ('Super Mario Bros', 2, 20);
INSERT INTO clientes (nombre, email) VALUES ('Juan Rojas', 'jrojas@mail.com'), ('B. Olaya', 'bolaya@mail.com');
