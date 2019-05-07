-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-05-2019 a las 00:39:55
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SMcomunicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `dir_ip` varchar(20) NOT NULL,
  `fecha-registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vencido` varchar(5) NOT NULL DEFAULT 'no',
  `fecha_vencido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `tel`, `localidad`, `dir_ip`, `fecha-registro`, `vencido`, `fecha_vencido`) VALUES
(12, 'Chago Antonio', '3111010987', 'Tepic', '192.168.10.100', '2019-05-07 20:46:21', 'si', '0000-00-00'),
(13, 'qwer', '5524909990', 'Compostela', '192.168.10.100', '2019-05-07 21:51:09', 'si', '2019-05-09'),
(14, 'JosÃ© Alexis Curiel VÃ¡zquez', '5524909990', 'Compostela', '192.168.20.10', '2019-05-07 22:24:52', 'no', '2019-05-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `monto` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `meses` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `cliente_id`, `monto`, `fecha`, `meses`) VALUES
(1, 13, '1000', '2019-05-07 21:53:12', '2019-05-08'),
(2, 13, '100', '2019-05-07 22:15:40', '2019-05-09'),
(3, 13, '100', '2019-05-07 22:17:13', '2019-05-09'),
(4, 14, '500', '2019-05-07 22:25:02', '2019-05-08'),
(5, 14, '300', '2019-05-07 22:29:24', '2019-05-10'),
(6, 14, '500', '2019-05-07 22:30:27', '2019-05-08'),
(7, 14, '1000', '2019-05-07 22:30:51', '2019-05-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(10, 'alexis', 'c88bfac84258dd6cbc05adfbd4674c7423519c90f67513d608d8f023119ddfd0f05b450ecaa7ce1c694ea50f1594bb2d95c43b3bcb40ccd1ecf791287dd29aee');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
