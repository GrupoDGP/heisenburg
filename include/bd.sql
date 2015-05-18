-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2015 a las 11:33:11
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `heisenburg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamientos`
--

CREATE TABLE IF NOT EXISTS `alojamientos` (
  `idAlojamiento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(11,0) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estrellas` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `resumen` text COLLATE utf8_spanish_ci NOT NULL,
  `resumenCorto` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen1` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen2` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen3` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen4` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idAlojamiento`),
  KEY `idAlojamiento` (`idAlojamiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `alojamientos`
--

INSERT INTO `alojamientos` (`idAlojamiento`, `nombre`, `tipo`, `precio`, `direccion`, `estrellas`, `telefono`, `email`, `video`, `resumen`, `resumenCorto`, `imagen1`, `imagen2`, `imagen3`, `imagen4`) VALUES
(1, 'Nazaries', 'hotel', 80, 'Calle Maestro Montero, 12, 18004 Granada', 4, 666555444, 'nazaries@correo.es', '', '253 lujosas habitaciones, incluyendo 4 suites panorámicas y 5 junior suites. \r\nTodas disponen de baño completo con columna de hidromasaje, secador de pelo y espejo de aumento; teléfono, conexión WIFI gratuita, minibar, televisión digital, aire acondicionado, caja fuerte, carta de almohadas, camas ultima generación látex.', 'Nazaríes Business & Spa se encuentra a pocos metros de la calle Recogidas y a 500 metros del Palacio de Congresos. Cuenta con un spa y habitaciones con TV de pantalla plana.', 'img/hoteles/nazaries/nazaries1.jpg', 'img/hoteles/nazaries/nazaries2.jpg', 'img/hoteles/nazaries/nazaries3.jpg', 'img/hoteles/nazaries/nazaries4.jpg'),
(5, 'Saray', 'hotel', 79, 'Calle Profesor Enrique Tierno Galván, 4, 18006 Granada', 4, 666555444, 'saray@correo.es', '', 'Hotel Saray se encuentra a menos de 10 minutos a pie del centro histórico de Granada y cuenta con una piscina al aire libre de temporada con terrazas y jardines con encanto. 	Junto al Palacio de Congresos y Exposiciones, cerca de la Catedral de Granada y los demás monumentos de la ciudad. Muy bien comunicado por tren y autobús.', 'Hotel Saray se encuentra a menos de 10 minutos a pie del centro histórico de Granada y cuenta con una piscina al aire libre de temporada con terrazas y jardines con encanto.', 'img/hoteles/saray/saray1.jpg', 'img/hoteles/saray/saray2.jpg', 'img/hoteles/saray/saray3.jpg', 'img/hoteles/saray/saray4.jpg'),
(6, 'Albayzin', 'hotel', 85, ' Carrera de la Virgen, 48, 18005 Granada', 3, 958130009, 'albayzin@correo.es', '', 'El Hotel Vincci Albayzín está en centro de la ciudad de Granada, 	en un edificio de típica estructura andaluza tradicional.  	Destaca un impresionante patio interior que sirve de fuente de 		luz natural a las diferentes estancias. 	Vincci Albayzin está situado en torno a un patio típico andaluz y 		dispone de recepción 24 horas, 	gimnasio con sauna y habitaciones con aire acondicionado y 		conexión Wi-Fi gratuita.El Hotel Albayzín situado en el centro de Granada, cuenta con cinco amplios salones. Algunos de ellos con luz natural. Restaurante a la carta. Modernidad y tradición gastronómica en el ambiente más acogedor y relajante de Granada.', 'Vincci Albayzin está situado en torno a un patio típico andaluz y 		dispone de recepción 24 horas, 	gimnasio con sauna y habitaciones con aire acondicionado y 		conexión Wi-Fi gratuita. 	La catedral de Granada se encuentra a 700 metros', 'img/hoteles/albayzin/albayzin1.jpg', 'img/hoteles/albayzin/albayzin2.jpg', 'img/hoteles/albayzin/albayzin3.jpg', 'img/hoteles/albayzin/albayzin4.jpg'),
(7, 'Fontecruz', 'hotel', 139, 'Calle Gran Vía de Colón, 20, 18010 Granada', 3, 958217810, 'fontecruz@correo.es', '', 'Les animo a que nos permitan velar por sus sueños en Granada y a que compartan con nosotros su experiencia en Fontecruz Granada: tras acomodarse en su habitación, les propongo visitar nuestro Spa, y posteriormente, al caer la noche, deleitarse  disfrutando las espectaculares vistas a la Alhambra y la Catedral desde nuestra Terraza, culminando la velada entre copas y brindis. Su habitación volverá entonces a recibirles para ofrecerles la más cómoda estancia y el mejor descanso posible.  Entre sus servicios destaca: 39 suites,ubicacion cerca de la catedral, con terraza, sala para eventos, SPA y Wifi.', 'Fontecruz es un establecimiento elegante que se encuentra en el centro de la histórica ciudad         de Granada, y ofrece una zona de spa con baño turco y salas de masaje.         Hay conexión WiFi gratuita en todas las instalaciones.', 'img/hoteles/fontecruz/fontecruz1.jpg', 'img/hoteles/fontecruz/fontecruz2.jpg', 'img/hoteles/fontecruz/fontecruz3.jpg', 'img/hoteles/fontecruz/fontecruz4.jpg'),
(8, 'Alixares', 'hotel', 48, 'Paseo de la Sabica, 40, 18009 Granada', 2, 958225575, 'alixares@correo.es', '', 'El Hotel Alixares se encuentra junto a la Alhambra y ofrece vistas panorámicas a Granada y a Sierra Nevada. Cuenta con piscina al aire libre de temporada y habitaciones con aire acondicionado, TV de pantalla plana vía satélite y conexión Wi-Fi gratuita.  Las habitaciones presentan una decoración funcional con suelo de madera. Todas disponen de mininevera, caja fuerte y baño privado.  El Alixares cuenta con 2 restaurantes, zona de terraza , bar cafetería y terraza de verano con barbacoa. En la recepción 24 horas, los huéspedes podrán adquirir toallas de uso gratuito para la piscina.', 'Hotel Alixares se encuentra junto a la Alhambra y ofrece vistas panorámicas a Granada y a Sierra Nevada.         Cuenta con piscina al aire libre de temporada y habitaciones con aire acondicionado, TV de pantalla plana vía         satélite y conexión Wi-Fi gratuita.', 'img/hoteles/alixares/alixares1.jpg', 'img/hoteles/alixares/alixares2.jpg', 'img/hoteles/alixares/alixares3.jpg', 'img/hoteles/alixares/alixares4.jpg'),
(9, 'Alhambra Palace', 'hotel', 139, 'Plaza Arquitecto García de Paredes, 1, 18009 Granada', 4, 958221468, 'alhambra@correo.es', '', 'Desde 1.910, Hotel de lujo y palacio inspirado en el monumento nazarí, pionero del turismo en Andalucía y en España.126 junior suites y habitaciones dobles, con un especial encanto y todas con diferentes vistas exteriores sujetas a disponibilidad. Le brindamos Gastronomía y relax en sus terrazas y miradores, celebración de eventos e incentivos en sus espectaculares salones panorámicos catalogados por la UNESCO. 100 años después, alojarse en el Hotel Alhambra Palace, es una experiencia única e irrepetible. 	 No existe mejor tradición ni mayor placer que relajarse en nuestra impresionante terraza panorámica, disfrutando de nuestra afamada cocktelería. ', 'Alhambra Palace está situado a las afueras de las antiguas murallas de la Alhambra, y ofrece unas vistas espectaculares a la ciudad de Granada. Dispone de habitaciones elegantes', 'img/hoteles/alhambra_palace/alhambra_palace1.jpg', 'img/hoteles/alhambra_palace/alhambra_palace2.jpg', 'img/hoteles/alhambra_palace/alhambra_palace3.jpg', 'img/hoteles/alhambra_palace/alhambra_palace4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idComentario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comentarioBueno` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentarioMalo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idAlojamiento` int(10) unsigned NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `usuario` (`usuario`),
  KEY `idAlojamiento` (`idAlojamiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `comentarioBueno`, `comentarioMalo`, `idAlojamiento`, `usuario`) VALUES
(1, 'Un servicio excelente', 'No tenia buena localizacion', 1, 'antonio'),
(2, 'habitaciones muy amplias', 'No haiba buffet libre en el desayuno', 1, 'antonio'),
(3, 'Un servicio excelente', 'No tenia buena localizacion', 5, 'antonio'),
(4, 'habitaciones muy amplias', 'No haiba buffet libre en el desayuno', 5, 'antonio'),
(5, 'Un servicio excelente', 'No tenia buena localizacion', 6, 'antonio'),
(6, 'habitaciones muy amplias', 'No haiba buffet libre en el desayuno', 6, 'antonio'),
(7, 'Un servicio excelente', 'No tenia buena localizacion', 7, 'antonio'),
(8, 'habitaciones muy amplias', 'No haiba buffet libre en el desayuno', 7, 'antonio'),
(9, 'Un servicio excelente', 'No tenia buena localizacion', 8, 'antonio'),
(10, 'habitaciones muy amplias', 'No haiba buffet libre en el desayuno', 8, 'antonio'),
(11, 'Un servicio excelente', 'No tenia buena localizacion', 9, 'antonio'),
(12, 'habitaciones muy amplias', 'No haiba buffet libre en el desayuno', 9, 'antonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `idFactura` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coste` float DEFAULT NULL,
  `fechaEntrada` date DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idHabitacion` int(10) unsigned NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idFactura`),
  KEY `dni` (`dni`),
  KEY `idHabitacion` (`idHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
  `idHabitacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_hab` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float DEFAULT NULL,
  `idAlojamiento` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idHabitacion`),
  KEY `idAlojamiento` (`idAlojamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `idReserva` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_entrada` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `idHabitacion` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idReserva`),
  KEY `dni` (`dni`),
  KEY `idHabitacion` (`idHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `usuario` (`usuario`),
  KEY `dni` (`dni`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `dni`, `nombre`, `apellidos`, `usuario`, `password`, `correo`, `tipo`) VALUES
(2, '12345678o', 'antonio', 'JIMÉNEZ', 'antonio', 'antonio', 'jm94antonio@correo.ugr.es', 'Hostelero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `idValoracion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `valor` float DEFAULT NULL,
  `idAlojamiento` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idValoracion`),
  KEY `idAlojamiento` (`idAlojamiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`idValoracion`, `valor`, `idAlojamiento`) VALUES
(6, 10, 1),
(7, 5, 1),
(8, 7, 1),
(9, 6, 1),
(10, 2, 1),
(11, 9, 5),
(12, 5, 5),
(13, 7, 5),
(14, 6, 5),
(15, 2, 5),
(16, 10, 6),
(17, 5, 6),
(18, 7, 6),
(19, 6, 6),
(20, 2, 6),
(21, 9, 7),
(22, 5, 7),
(23, 7, 7),
(24, 6, 7),
(25, 2, 7),
(26, 9, 8),
(27, 5, 8),
(28, 7, 8),
(29, 6, 8),
(30, 2, 8),
(31, 9, 9),
(32, 5, 9),
(33, 7, 9),
(34, 6, 9),
(35, 2, 9),
(36, 10, 1),
(37, 10, 1),
(39, 10, 1),
(40, 4, 1),
(41, 7, 6),
(42, 4, 6);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`idAlojamiento`) REFERENCES `alojamientos` (`idAlojamiento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `reserva` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idHabitacion`) REFERENCES `reserva` (`idHabitacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`idAlojamiento`) REFERENCES `alojamientos` (`idAlojamiento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idHabitacion`) REFERENCES `habitacion` (`idHabitacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`idAlojamiento`) REFERENCES `alojamientos` (`idAlojamiento`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
