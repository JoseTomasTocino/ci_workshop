-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-11-2012 a las 14:36:07
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `talleres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE IF NOT EXISTS `inscripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_taller` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE IF NOT EXISTS `talleres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `numero_plazas` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id`, `titulo`, `descripcion`, `numero_plazas`, `imagen`) VALUES
(6, 'Eaque omnis est ab qui', 'Sunt mollit quasi nostrum dolorum dolore enim error veritatis laudantium, explicabo. Placeat, accusamus voluptatum officia reprehenderit dolor voluptate et ex suscipit labore accusantium in in.', 715, 'd06f38684083eb0faf225ff542f3259e.jpg'),
(7, 'Exercitationem exercitation cum atque inventore', 'Inventore eos et dolor quia cum voluptas et labore illo beatae nulla ipsa, eius sapiente sint at id quia voluptates ullam alias autem dolores optio, asperiores ut iusto quam dolore non delectus, ut e.', 299, '5cddd97459d3a1cdd1fc60d975ea0e49.jpg'),
(8, 'Ad quia explicabo Dolore adipisci', 'Quasi animi, qui praesentium quo fuga. Laboriosam, adipisicing voluptate porro dolore voluptatem illo quo consectetur, eu et quia dolores omnis officia.', 382, '25f716f97c935f375c00223ca4dac2b5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
