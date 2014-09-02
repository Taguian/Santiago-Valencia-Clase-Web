-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2014 a las 00:06:06
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clasewebuno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `codigo` varchar(767) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `apellido` varchar(1000) NOT NULL,
  `correo` varchar(767) NOT NULL,
  UNIQUE KEY `codigo` (`codigo`,`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`codigo`, `nombre`, `apellido`, `correo`) VALUES
('11212031', 'Santiago', 'Plopiroles', 'taguianbassment@gmail.com'),
('11212350', 'Pollolopo', 'Casual', 'pachuco@noestoy.com'),
('11212354', 'Florindo', 'Mochila', 'pelinomacarino@noestoy.com'),
('11212355', 'Pepe', 'Peperon', 'pepelinomacarino@noestoy.com'),
('11212356', 'Riperino', 'Pauperinos', 'ripinriperinos@noestoy.com'),
('11212357', 'Macarino', 'Dongallina', 'nomorespamarinio@noestoy.com'),
('11212358', 'Fleperino', 'Papioca', 'spamaricnomacarino@noestoy.com'),
('11212359', 'Dongerino', 'Mochola', 'puapual@noestoy.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantesynotas`
--

CREATE TABLE IF NOT EXISTS `estudiantesynotas` (
  `codigo` varchar(1000) NOT NULL,
  `idnota` varchar(1000) NOT NULL,
  `valornota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantesynotas`
--

INSERT INTO `estudiantesynotas` (`codigo`, `idnota`, `valornota`) VALUES
('11212031', '1', 5),
('11212031', '2', 5),
('11212031', '4', 5),
('11212031', '3', 5),
('11212350', '1', 3),
('11212350', '2', 3),
('11212350', '3', 3),
('11212350', '4', 3),
('11212354', '1', 3),
('11212354', '2', 3),
('11212354', '3', 3),
('11212354', '4', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idnota` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(1000) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  PRIMARY KEY (`idnota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idnota`, `nombre`, `porcentaje`) VALUES
(1, 'primera entrega', 20),
(2, 'segunda entrega', 25),
(3, 'tercera entrega', 25),
(4, 'cuarta entrega', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
