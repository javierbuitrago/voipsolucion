-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-06-2016 a las 03:40:12
-- Versión del servidor: 5.7.11
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creditos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(6) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cedula` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `barrio` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_prestamo` datetime(6) NOT NULL,
  `valor_prestamo` int(10) NOT NULL,
  `porcentaje` int(2) NOT NULL,
  `ciclo_cobro` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `abono` int(10) NOT NULL,
  `saldo_pte` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `cedula`, `telefono`, `direccion`, `barrio`, `fecha_prestamo`, `valor_prestamo`, `porcentaje`, `ciclo_cobro`, `abono`, `saldo_pte`) VALUES
(1, 'ff', '12', '21', 'ffff21', '1212', '2012-12-12 00:00:00.000000', 1222, 12, 'diario', 10, 10000),
(3, 'fffff', '14', '45', 'ddd', 'ddf', '2016-06-23 00:00:00.000000', 654, 10, 'DIARIO', 0, 120000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
