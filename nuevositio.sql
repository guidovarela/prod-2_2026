-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-10-2026 a las 16:18:39
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevositio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `asunto` varchar(15) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `asunto`, `mensaje`, `fecha`) VALUES
(1, 'Guido Varela', 'guidovarela@yahoo.com.ar', 'Consulta', 'adasdasd', '2026-09-17'),
(2, 'Guido Varela', 'guidovarela@yahoo.com.ar', 'Consulta', 'adasdasd', '2026-09-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `imagen`, `categoria`) VALUES
(1, 'Mochila Urbana', 'Mochila reforzada con compartimento para notebook de 15 pulgadas.', '4500.00', 'img/mochila.jpg', 'Accesorios'),
(2, 'Teclado Mecánico RGB', 'Teclado mecánico retroiluminado con switches azules y conexión USB.', '12500.50', 'img/teclado.jpg', 'Tecnología'),
(3, 'Auriculares Bluetooth', 'Auriculares inalámbricos con cancelación de ruido y micrófono integrado.', '8900.00', 'img/auriculares.jpg', 'Tecnología'),
(4, 'Lámpara de Escritorio', 'Lámpara LED con brazo articulado y regulador de brillo táctil.', '3200.00', 'img/lampara.jpg', 'Hogar'),
(5, 'Lámpara de Escritorio', 'Lámpara LED con brazo articulado y regulador de brillo táctil.', '3200.00', 'img/lampara.jpg', 'Hogar'),
(6, 'Botella Térmica', 'Botella de acero inoxidable que conserva bebidas frías o calientes.', '2800.00', 'img/botella.jpg', 'Accesorios'),
(7, 'Mouse Inalámbrico', 'Mouse ergonómico inalámbrico con sensor óptico de alta precisión.', '3900.00', 'img/mouse.jpg', 'Tecnología'),
(8, 'Cuaderno A5', 'Cuaderno de tapa dura con hojas rayadas y cierre elástico.', '1500.00', 'img/cuaderno.jpg', 'Papelería'),
(9, 'Silla Ergonómica', 'Silla de oficina ajustable con soporte lumbar y apoyabrazos.', '28900.00', 'img/silla.jpg', 'Hogar'),
(10, 'Parlante Portátil', 'Parlante Bluetooth compacto con batería recargable y sonido estéreo.', '7600.00', 'img/parlante.jpg', 'Tecnología'),
(11, 'Taza de Cerámica', 'Taza de cerámica de 350 ml apta para microondas.', '1800.00', 'img/taza.jpg', 'Hogar'),
(12, 'Mochila Escolar', 'Mochila liviana con varios compartimentos y correas acolchadas.', '6200.00', 'img/mochila-escolar.jpg', 'Accesorios'),
(13, 'Cargador USB-C', 'Cargador de pared USB-C con carga rápida y protección contra sobrecargas.', '5400.00', 'img/cargador.jpg', 'Tecnología'),
(14, 'Reloj de Pared', 'Reloj de pared silencioso con diseño moderno y mecanismo a pilas.', '4100.00', 'img/reloj.jpg', 'Hogar'),
(15, 'Set de Marcadores', 'Set de 12 marcadores de colores con tinta lavable.', '2200.00', 'img/marcadores.jpg', 'Papelería'),
(16, 'Almohadón Decorativo', 'Almohadón suave con funda desmontable y diseño geométrico.', '3500.00', 'img/almohadon.jpg', 'Hogar'),
(17, 'Webcam HD', 'Cámara web HD con micrófono integrado y conexión USB.', '9800.00', 'img/webcam.jpg', 'Tecnología'),
(18, 'Gorra Urbana', 'Gorra ajustable de algodón con visera curva.', '2600.00', 'img/gorra.jpg', 'Accesorios'),
(19, 'Organizador de Escritorio', 'Organizador compacto con compartimentos para útiles y accesorios.', '3100.00', 'img/organizador.jpg', 'Papelería'),
(20, 'Set de Toallas', 'Juego de dos toallas de algodón absorbente para baño.', '6700.00', 'img/toallas.jpg', 'Hogar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
