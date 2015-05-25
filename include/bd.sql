-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2015 a las 13:38:05
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
(1, 'Nazaries', 'hotel', 80, 'Calle Maestro Montero, 12, 18004 Granada', 4, 666555444, 'nazaries@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', '253 lujosas habitaciones, incluyendo 4 suites panorámicas y 5 junior suites. \r\nTodas disponen de baño completo con columna de hidromasaje, secador de pelo y espejo de aumento; teléfono, conexión WIFI gratuita, minibar, televisión digital, aire acondicionado, caja fuerte, carta de almohadas, camas ultima generación látex.', 'Nazaríes Business & Spa se encuentra a pocos metros de la calle Recogidas y a 500 metros del Palacio de Congresos. Cuenta con un spa y habitaciones con TV de pantalla plana.', 'img/hoteles/nazaries/nazaries1.jpg', 'img/hoteles/nazaries/nazaries2.jpg', 'img/hoteles/nazaries/nazaries3.jpg', 'img/hoteles/nazaries/nazaries4.jpg'),
(5, 'Saray', 'hotel', 79, 'Calle Profesor Enrique Tierno Galván, 4, 18006 Granada', 4, 666555444, 'saray@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Hotel Saray se encuentra a menos de 10 minutos a pie del centro histórico de Granada y cuenta con una piscina al aire libre de temporada con terrazas y jardines con encanto. 	Junto al Palacio de Congresos y Exposiciones, cerca de la Catedral de Granada y los demás monumentos de la ciudad. Muy bien comunicado por tren y autobús.', 'Hotel Saray se encuentra a menos de 10 minutos a pie del centro histórico de Granada y cuenta con una piscina al aire libre de temporada con terrazas y jardines con encanto.', 'img/hoteles/saray/saray1.jpg', 'img/hoteles/saray/saray2.jpg', 'img/hoteles/saray/saray3.jpg', 'img/hoteles/saray/saray4.jpg'),
(6, 'Albayzin', 'hotel', 85, ' Carrera de la Virgen, 48, 18005 Granada', 3, 958130009, 'albayzin@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'El Hotel Vincci Albayzín está en centro de la ciudad de Granada, 	en un edificio de típica estructura andaluza tradicional.  	Destaca un impresionante patio interior que sirve de fuente de 		luz natural a las diferentes estancias. 	Vincci Albayzin está situado en torno a un patio típico andaluz y 		dispone de recepción 24 horas, 	gimnasio con sauna y habitaciones con aire acondicionado y 		conexión Wi-Fi gratuita.El Hotel Albayzín situado en el centro de Granada, cuenta con cinco amplios salones. Algunos de ellos con luz natural. Restaurante a la carta. Modernidad y tradición gastronómica en el ambiente más acogedor y relajante de Granada.', 'Vincci Albayzin está situado en torno a un patio típico andaluz y 		dispone de recepción 24 horas, 	gimnasio con sauna y habitaciones con aire acondicionado y 		conexión Wi-Fi gratuita. 	La catedral de Granada se encuentra a 700 metros', 'img/hoteles/albayzin/albayzin1.jpg', 'img/hoteles/albayzin/albayzin2.jpg', 'img/hoteles/albayzin/albayzin3.jpg', 'img/hoteles/albayzin/albayzin4.jpg'),
(7, 'Fontecruz', 'hotel', 139, 'Calle Gran Vía de Colón, 20, 18010 Granada', 3, 958217810, 'fontecruz@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Les animo a que nos permitan velar por sus sueños en Granada y a que compartan con nosotros su experiencia en Fontecruz Granada: tras acomodarse en su habitación, les propongo visitar nuestro Spa, y posteriormente, al caer la noche, deleitarse  disfrutando las espectaculares vistas a la Alhambra y la Catedral desde nuestra Terraza, culminando la velada entre copas y brindis. Su habitación volverá entonces a recibirles para ofrecerles la más cómoda estancia y el mejor descanso posible.  Entre sus servicios destaca: 39 suites,ubicacion cerca de la catedral, con terraza, sala para eventos, SPA y Wifi.', 'Fontecruz es un establecimiento elegante que se encuentra en el centro de la histórica ciudad         de Granada, y ofrece una zona de spa con baño turco y salas de masaje.         Hay conexión WiFi gratuita en todas las instalaciones.', 'img/hoteles/fontecruz/fontecruz1.jpg', 'img/hoteles/fontecruz/fontecruz2.jpg', 'img/hoteles/fontecruz/fontecruz3.jpg', 'img/hoteles/fontecruz/fontecruz4.jpg'),
(8, 'Alixares', 'hotel', 48, 'Paseo de la Sabica, 40, 18009 Granada', 2, 958225575, 'alixares@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'El Hotel Alixares se encuentra junto a la Alhambra y ofrece vistas panorámicas a Granada y a Sierra Nevada. Cuenta con piscina al aire libre de temporada y habitaciones con aire acondicionado, TV de pantalla plana vía satélite y conexión Wi-Fi gratuita.  Las habitaciones presentan una decoración funcional con suelo de madera. Todas disponen de mininevera, caja fuerte y baño privado.  El Alixares cuenta con 2 restaurantes, zona de terraza , bar cafetería y terraza de verano con barbacoa. En la recepción 24 horas, los huéspedes podrán adquirir toallas de uso gratuito para la piscina.', 'Hotel Alixares se encuentra junto a la Alhambra y ofrece vistas panorámicas a Granada y a Sierra Nevada.         Cuenta con piscina al aire libre de temporada y habitaciones con aire acondicionado, TV de pantalla plana vía         satélite y conexión Wi-Fi gratuita.', 'img/hoteles/alixares/alixares1.jpg', 'img/hoteles/alixares/alixares2.jpg', 'img/hoteles/alixares/alixares3.jpg', 'img/hoteles/alixares/alixares4.jpg'),
(9, 'Alhambra Palace', 'hotel', 139, 'Plaza Arquitecto García de Paredes, 1, 18009 Granada', 4, 958221468, 'alhambra@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Desde 1.910, Hotel de lujo y palacio inspirado en el monumento nazarí, pionero del turismo en Andalucía y en España.126 junior suites y habitaciones dobles, con un especial encanto y todas con diferentes vistas exteriores sujetas a disponibilidad. Le brindamos Gastronomía y relax en sus terrazas y miradores, celebración de eventos e incentivos en sus espectaculares salones panorámicos catalogados por la UNESCO. 100 años después, alojarse en el Hotel Alhambra Palace, es una experiencia única e irrepetible. 	 No existe mejor tradición ni mayor placer que relajarse en nuestra impresionante terraza panorámica, disfrutando de nuestra afamada cocktelería. ', 'Alhambra Palace está situado a las afueras de las antiguas murallas de la Alhambra, y ofrece unas vistas espectaculares a la ciudad de Granada. Dispone de habitaciones elegantes', 'img/hoteles/alhambra_palace/alhambra_palace1.jpg', 'img/hoteles/alhambra_palace/alhambra_palace2.jpg', 'img/hoteles/alhambra_palace/alhambra_palace3.jpg', 'img/hoteles/alhambra_palace/alhambra_palace4.jpg'),
(10, 'Cueva Cortijo La Tala', 'casa', 24, 'Guadix, Granada', 4, 958245345, 'cueva@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Cuenta con doce casas cueva, las cuales se han rehabilitado conservando el estilo original.
Las casas cueva La Tala, están equipadas con calefacción, chimenea, cocina y baño totalmente equipados, televisión a color. Disponemos de casas cueva estándar ideales para parejas o familiares, casas cueva para grupos, casas cueva suite con bañera hidromasaje o jacuzzi, o casas cueva superiores.', 'Cuenta con doce casas cueva, las cuales se han rehabilitado conservando el estilo original.
Las casas cueva La Tala, están equipadas con calefacción, chimenea, cocina y baño totalmente equipados, televisión a color. ', 'img/casas/casacueva/cueva1.jpg', 'img/casas/casacueva/cueva2.jpg', 'img/casas/casacueva/cueva3.jpg', 'img/casas/casacueva/cueva4.jpg'),
(11, 'Caserío de la Fuente', 'casa', 22, 'Deifontes, Granada', 4, 958245345, 'fuente@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Situado en un bello paraje junto al río Cubillas, perteneciente al término municipal de Deifontes, a 20 minutos de la Alhambra, 40 de Sierra Nevada y a escasos sesenta minutos de la playa, el Caserío de la Fuente se encuentra perfectamente ubicado para hacer excursiones, rutas culturales, deportes al aire libre o simplemente disfrutar de un lugar lleno de encanto, campos silenciosos y cielos estrellados.
Las cabañas, construidas totalmente con madera gozan de todas las comodidades que usted pueda necesitar; agua caliente, bomba de frío y calor, cocina totalmente amueblada con electrodomésticos y menaje de cocina.', 'El Caserío de la Fuente se encuentra perfectamente ubicado para hacer excursiones, rutas culturales, deportes al aire libre o simplemente disfrutar de un lugar lleno de encanto, campos silenciosos y cielos estrellados.', 'img/casas/fuente/fuente1.jpg', 'img/casas/fuente/fuente2.jpg', 'img/casas/fuente/fuente3.jpg', 'img/casas/fuente/fuente4.jpg'),
(12, 'Las Chorreras', 'casa', 20, 'Illora, Granada', 3, 958245345, 'chorreras@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Cortijo Las Chorreras ha sido recuperado, con una cuidada restauración, para ofrecer la máxima tranquilidad y confort a sus huéspedes.
En nuestra casa pueden encontrar tranquilidad y la paz que transmite un enclave privilegiado donde se encuentra la casa, un bosque de encinas de 40.000 m2, su magnifico jardín con iluminación nocturna y sus vistas a la sierra. Sus caminos y rutas espectaculares para hacer senderismo harán que nuestros clientes disfruten de la casa y su entorno al máximo. También podrán realizar observación de aves.', 'Cortijo Las Chorreras ha sido recuperado, con una cuidada restauración, para ofrecer la máxima tranquilidad y confort a sus huéspedes.', 'img/casas/chorreras/chorreras1.jpg', 'img/casas/chorreras/chorreras2.jpg', 'img/casas/chorreras/chorreras3.jpg', 'img/casas/chorreras/chorreras4.jpg'),
(13, 'Casalpujarra', 'casa', 24, 'Bubion, Granada', 2, 958235675, 'alpujarra@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Los Apartamentos Casalpujarra, se encuentran en la Alpujarra en el pueblo de Bubión; en el centro del Barranco de Poqueira.
El Termino Municipal de Bubión forma parte  del Parque Natural de Sierra Nevada en su parte baja y del Parque Nacional en su parte alta; lo que le confiere a la zona un atractivo de especial interés, sobre todo para aquellas personas amantes de la naturaleza.
Existen Cantidad de rutas y senderospara recorrer el Barranco de Poqueira, o continuar a otros pueblos ; la visita Guiada al Parque Nacional de Sierra Nevada es visita obligada, para ver de cerca las altas cumbres (Veleta , Mulhacen) sitios emblematicos como Siete Lagunas  o La Laguna de La Caldera; merece especial interes la Flora y la Fauna de este Parque nacional.', 'Los Apartamentos Casalpujarra, se encuentran en la Alpujarra en el pueblo de Bubión; en el centro del Barranco de Poqueira.', 'img/casas/alpujarra/alpujarra1.jpg', 'img/casas/alpujarra/alpujarra2.jpg', 'img/casas/alpujarra/alpujarra3.jpg', 'img/casas/alpujarra/alpujarra4.jpg'),
(14, 'Casas Cueva El Mirador de Galera', 'casa', 22, 'Galera, Granada', 3, 958234345, 'galera@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'El Mirador de Galera dispone de 8 Casas Cueva rehabilitadas según el estilo tradicional, con todas las comodidades de una vivienda moderna.
Las Casas Cueva son viviendas bioclimáticas que mantienen en su interior una temperatura cálida en invierno y fresca en verano, en torno a 19 ºC. Por sus especiales características se convierte en una opción diferente de Turismo Rural de calidad, alternativa a las Casas Rurales.
Situadas en Galera y Orce, entorno rural del Altiplano de Granada, rodeado de parques naturales, donde podrás disfrutar de un paisaje singular, excepcionales yacimientos arqueológicos, una rica gastronomía, un cielo estrellado…, no te lo imagines.', 'El Mirador de Galera dispone de 8 Casas Cueva rehabilitadas según el estilo tradicional, con todas las comodidades de una vivienda moderna.', 'img/casas/galera/galera1.jpg', 'img/casas/galera/galera2.jpg', 'img/casas/galera/galera3.jpg', 'img/casas/galera/galera4.jpg'),
(15, 'El Corral de Serafín', 'casa', 13, 'Niqüelas, Granada', 4, 958245345, 'corral@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'El Patio del Carbón, de esta casa solo puedo decir que es un sueño hecho realidad, siempre soñé con tener una casa así y al fin lo conseguí. Hecha con mis manos con mucha dedicación y mucho trabajo.
Se accede a la casa a través de un tinao ( casa encima de la calle) es de los pocos que aun quedan en el pueblo y el mas grande.
La casa consta de dos plantas, en la primera, baño, lavadero, el resto esta todo corrido y sin tabiques como el salón, la cocina y el patio. El patio esta cubierto en la segunda planta con una cúpula de cristal, por lo tanto se pueden ver las nubes, los pájaros volar ,la lluvia, y en las nuches de luna, su luz ilumina todo el patio. También hay una fuente de agua, no me imaginaba el patio sin el sonido del agua', 'El Corral de Serafin esta en pleno centro de una pequeña localidad (Nigüelas) que cuenta con el encanto de las zonas rurales, pero con acceso a todos los servicios. Es una casa rural totalmente restaurada, equipada con todas las comodidades necesarias.', 'img/casas/corral/corral1.jpg', 'img/casas/corral/corral2.jpg', 'img/casas/corral/corral3.jpg', 'img/casas/corral/corral4.jpg'),
(16, 'Entremares', 'hotel', 60, 'Calle Gran Vía, 12, 18002 Granada', 4, 958821434, 'entremares@correo.es', 'https://www.youtube.com/embed/uCz627K-R2Q', 'Construido en 1966 y reformado en 2008, el hotel dispone de 369 habitaciones amplias, sencillas y cómodas, contando todas ellas con aire acondicionado, TV vía satélite y conexión Wi-Fi gratuita *. Completan sus instalaciones: distintos bares, restaurantes, piscinas, diferentes salones para el relax y entretenimiento, y numerosas instalaciones exteriores para el ocio y la salud, de las que destacamos el emblemático Centro de Talasoterapia y Spa Termas Carthaginesas, Balneario Marino con más de mil metros cuadrados de piscinas termales, zonas de masajes e instalaciones para la salud y el relax.', 'En las instalaciones del Hotel Entremares podrás hacer de todo: desde relajarte en el balneario, que ofrece diferentes tipos de tratamientos de relax, salud y belleza, tomar una copa en los bares o probar la rica comida de los restaurantes.', 'img/hoteles/mar/mar1.jpeg', 'img/hoteles/mar/mar2.jpeg', 'img/hoteles/mar/mar3.jpeg', 'img/hoteles/mar/mar4.jpeg');


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`idHabitacion`, `tipo_hab`, `precio`, `idAlojamiento`) VALUES
(1, '1', 80, 1),
(2, '2', 90, 1),
(3, '1', 80, 5),
(4, '2', 90, 5),
(5, '1', 100, 6),
(6, '2', 130, 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idReserva`, `fecha_entrada`, `fecha_salida`, `precio`, `dni`, `idHabitacion`) VALUES
(1, '2015-05-17', '2015-05-23', 200, '12345678o', 2),
(2, '2015-05-17', '2015-05-23', 300, '12345678o', 1);

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
