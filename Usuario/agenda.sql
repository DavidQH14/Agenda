-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2018 a las 21:40:33
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `apellido`, `empresa`, `telefono`, `correo`) VALUES
(9, 'Fernanda', 'Leyva Palacios', 'UTP', 2147483647, 'marifer@hotmail.com'),
(11, 'David', 'Quintero Hernandez', 'DAE', 2147483647, 'david7_qh@hotmail.com'),
(12, 'Carlos', 'Merino Arenas', 'DAE', 2147483647, 'uriel@hotmail.com'),
(13, 'Eduardo', 'Echeverria del Campo', 'FCC', 2147483647, 'eduardo@hotmail.com'),
(14, 'Jonathan', 'Cruz Gomez', 'CUVyTT', 2147483647, 'jona@hotmail.com'),
(15, 'Vanessa', 'Bautista Flores', 'Bimbo', 2147483647, 'vane@hotmail.com'),
(16, 'Liliana', 'Leon Landell', 'UTP', 2147483647, 'lili@hotmail.com'),
(17, 'Diana', 'Hernandez Sarmiento', 'FCQ', 3339587, 'diana@hotmail.com'),
(18, 'Brenda', 'de la Cruz', 'Volkswagen', 2147483647, 'brenda@hotmail.com'),
(20, 'Uriel', 'Flores Carrillo', 'Derecho', 2147483647, 'uriel@hotmail.com'),
(22, 'Marco', 'Lima Vidal', 'Oracle', 2147483647, 'marco@hotmail.com'),
(23, 'Luis Carlos', 'Cruz Valera', 'Oracle', 2147483647, 'luis@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
