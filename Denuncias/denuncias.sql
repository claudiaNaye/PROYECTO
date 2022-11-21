-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-11-2022 a las 01:48:19
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `denuncias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncias`
--

DROP TABLE IF EXISTS `denuncias`;
CREATE TABLE IF NOT EXISTS `denuncias` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Edad` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Dia_Agresion` date NOT NULL,
  `Tipo_Agresion` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Nombre_agresor` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Telefono_agresor` int(10) NOT NULL,
  `Domicilio_Agresor` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT  COLLATE=utf8mb4_general_ci;


--
-- Volcado de datos para la tabla `denuncias`
--

INSERT INTO `denuncias` (`Id`, `Nombre`, `Edad`, `Telefono`, `Dia_Agresion`, `Tipo_Agresion`, `Nombre_agresor`, `Telefono_agresor`, `Domicilio_Agresor`) VALUES
(1, 'Carlos Daniel', '12', 123456789, '2022-11-08', 'muchas', 'helluyu amenos', 123466785, 'primera poniente'),
(3, 'nancy', '15', 98433, '2022-05-22', 'mala', 'santiago', 88457443, 'zapata'),
(4, 'maria', '16', 8854434, '2022-10-22', 'abuso', 'david', 3243222, 'tuxtla');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
