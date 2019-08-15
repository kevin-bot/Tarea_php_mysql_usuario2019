-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2019 a las 20:07:57
-- Versión del servidor: 5.6.17-log
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarios2019`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `ValidarFecha`(fechaVence date) RETURNS tinyint(1)
    DETERMINISTIC
BEGIN 

DECLARE respuestafecha boolean DEFAULT true;

IF fechaVence < current_date() THEN
     SET respuestafecha= false;
     END IF;

RETURN respuestafecha;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombreusu` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `fechavencimiento` date DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  PRIMARY KEY (`nombreusu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreusu`, `password`, `estado`, `fechavencimiento`, `tipo`) VALUES
('alexa', 'daniel', '1', '2019-05-15', 'A'),
('daniel', 'daniel', '1', '2019-09-15', 'A'),
('daniela', 'daniel', '0', '2019-09-17', 'U'),
('kevin', 'daniel', '1', '2019-09-15', 'U');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
