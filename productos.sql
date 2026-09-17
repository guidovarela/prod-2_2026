CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10, 2),
    imagen VARCHAR(255),
    categoria VARCHAR(50)
);


-- Inserción de datos de prueba en la tabla productos
INSERT INTO productos (nombre, descripcion, precio, imagen, categoria) VALUES
('Mochila Urbana', 'Mochila reforzada con compartimento para notebook de 15 pulgadas.', 4500.00, 'img/mochila.jpg', 'Accesorios'),
('Teclado Mecánico RGB', 'Teclado mecánico retroiluminado con switches azules y conexión USB.', 12500.50, 'img/teclado.jpg', 'Tecnología'),
('Auriculares Bluetooth', 'Auriculares inalámbricos con cancelación de ruido y micrófono integrado.', 8900.00, 'img/auriculares.jpg', 'Tecnología'),
('Lámpara de Escritorio', 'Lámpara LED con brazo articulado y regulador de brillo táctil.', 3200.00, 'img/lampara.jpg', 'Hogar');