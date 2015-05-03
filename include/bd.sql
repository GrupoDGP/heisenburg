-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-05-2015 a las 16:03:12
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
  `tfn` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `resumen` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen1` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen2` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen3` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen4` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idAlojamiento`),
  KEY `idAlojamiento` (`idAlojamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idComentario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comentario` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idAlojamiento` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `idAlojamiento` (`idAlojamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
  `idHabitacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `camaSupletoria` int(11) DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tarifa` float DEFAULT NULL,
  `idAlojamiento` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idHabitacion`),
  KEY `idAlojamiento` (`idAlojamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


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
  `idHabitacion`int(10) unsigned NOT NULL,
  PRIMARY KEY (`idReserva`),
  KEY `dni` (`dni`),
  KEY `idHabitacion` (`idHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario`int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  KEY `dni` (`dni`),
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD FOREIGN KEY (`idAlojamiento`) REFERENCES `alojamientos` (`idAlojamiento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD  FOREIGN KEY (`dni`) REFERENCES `reserva` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD  FOREIGN KEY (`idHabitacion`) REFERENCES `reserva` (`idHabitacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD  FOREIGN KEY (`idAlojamiento`) REFERENCES `alojamientos` (`idAlojamiento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD  FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD  FOREIGN KEY (`idHabitacion`) REFERENCES `habitacion` (`idHabitacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD  FOREIGN KEY (`idAlojamiento`) REFERENCES `alojamientos` (`idAlojamiento`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
