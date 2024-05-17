-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2016 a las 09:32:14
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wisher`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wish`
--

CREATE TABLE IF NOT EXISTS `wish` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `wisher_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wish_wisher` (`wisher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `wish`
--

INSERT INTO `wish` (`id`, `title`, `description`, `wisher_id`) VALUES
(23, 'hummer', 'holaaaaa', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wisher`
--

CREATE TABLE IF NOT EXISTS `wisher` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `wisher`
--

INSERT INTO `wisher` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(10, 'Miguel', 'Renteria', 'MiguelRenteriaV', 'Miguel'),
(11, 'Sergio', 'Aguirre', 'AguirreSerg', 'sergio'),
(12, 'Jorge', 'Lara', 'JorgeLara', 'jorge'),
(13, 'Manuel', 'Renteria', 'ManuelRenteria', 'manuel'),
(14, 'jose', 'velazquez', 'jose', 'jose'),
(15, 'maria', 'maria', 'maria', 'maria'),
(16, 'Ramon', 'Ram', 'Ramonram', 'ramonram');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `wish`
--
ALTER TABLE `wish`
  ADD CONSTRAINT `fk_wish_wisher` FOREIGN KEY (`wisher_id`) REFERENCES `wisher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
