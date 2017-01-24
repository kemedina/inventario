-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-01-2017 a las 03:55:18
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `codigo_a` int(11) NOT NULL AUTO_INCREMENT,
  `compania` varchar(100) NOT NULL,
  `contacto` int(11) NOT NULL,
  `articulo` varchar(100) NOT NULL,
  `cantidad` tinyint(4) NOT NULL,
  `factura` varchar(100) NOT NULL,
  `fecha_in` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo_a`),
  KEY `articulo` (`articulo`,`cantidad`,`fecha_in`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`codigo_a`, `compania`, `contacto`, `articulo`, `cantidad`, `factura`, `fecha_in`) VALUES
(1, '', 10, '', 0, '', '1991-01-13'),
(2, '', 22, '', 0, '', '2010-01-10'),
(3, '', 666, '', 0, '', '1975-01-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `correlativo` varchar(100) NOT NULL,
  `articulo` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `fecha_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`correlativo`, `articulo`, `cantidad`, `departamento`, `fecha_in`) VALUES
('', 'Velit est ut quasi sint voluptatem aperiam mollit Nam', 99, '', '1975-01-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nose`
--

CREATE TABLE IF NOT EXISTS `nose` (
  `camp` varchar(100) NOT NULL,
  `camp2` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nose`
--

INSERT INTO `nose` (`camp`, `camp2`, `total`) VALUES
('0', 7, 95),
('kkk', 88, 165);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE IF NOT EXISTS `tabla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `factura` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `nombre`, `apellido`, `factura`) VALUES
(1, 'nayroby', 'azuaje', '0001'),
(2, 'genesis', 'azuaje', '0002');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
