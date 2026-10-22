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
('Lámpara de Escritorio', 'Lámpara LED con brazo articulado y regulador de brillo táctil.', 3200.00, 'img/lampara.jpg', 'Hogar'),
('Botella Térmica', 'Botella de acero inoxidable que conserva bebidas frías o calientes.', 2800.00, 'img/botella.jpg', 'Accesorios'),
('Mouse Inalámbrico', 'Mouse ergonómico inalámbrico con sensor óptico de alta precisión.', 3900.00, 'img/mouse.jpg', 'Tecnología'),
('Cuaderno A5', 'Cuaderno de tapa dura con hojas rayadas y cierre elástico.', 1500.00, 'img/cuaderno.jpg', 'Papelería'),
('Silla Ergonómica', 'Silla de oficina ajustable con soporte lumbar y apoyabrazos.', 28900.00, 'img/silla.jpg', 'Hogar'),
('Parlante Portátil', 'Parlante Bluetooth compacto con batería recargable y sonido estéreo.', 7600.00, 'img/parlante.jpg', 'Tecnología'),
('Taza de Cerámica', 'Taza de cerámica de 350 ml apta para microondas.', 1800.00, 'img/taza.jpg', 'Hogar'),
('Mochila Escolar', 'Mochila liviana con varios compartimentos y correas acolchadas.', 6200.00, 'img/mochila-escolar.jpg', 'Accesorios'),
('Cargador USB-C', 'Cargador de pared USB-C con carga rápida y protección contra sobrecargas.', 5400.00, 'img/cargador.jpg', 'Tecnología'),
('Reloj de Pared', 'Reloj de pared silencioso con diseño moderno y mecanismo a pilas.', 4100.00, 'img/reloj.jpg', 'Hogar'),
('Set de Marcadores', 'Set de 12 marcadores de colores con tinta lavable.', 2200.00, 'img/marcadores.jpg', 'Papelería'),
('Almohadón Decorativo', 'Almohadón suave con funda desmontable y diseño geométrico.', 3500.00, 'img/almohadon.jpg', 'Hogar'),
('Webcam HD', 'Cámara web HD con micrófono integrado y conexión USB.', 9800.00, 'img/webcam.jpg', 'Tecnología'),
('Gorra Urbana', 'Gorra ajustable de algodón con visera curva.', 2600.00, 'img/gorra.jpg', 'Accesorios'),
('Organizador de Escritorio', 'Organizador compacto con compartimentos para útiles y accesorios.', 3100.00, 'img/organizador.jpg', 'Papelería'),
('Set de Toallas', 'Juego de dos toallas de algodón absorbente para baño.', 6700.00, 'img/toallas.jpg', 'Hogar');