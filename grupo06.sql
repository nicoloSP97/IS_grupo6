-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2022 a las 05:09:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo06`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condominio`
--

CREATE TABLE `condominio` (
  `id_condominio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `condominio`
--

INSERT INTO `condominio` (`id_condominio`) VALUES
(1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_depa` int(11) NOT NULL,
  `estado_depa` varchar(20) DEFAULT NULL,
  `id_condominio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_depa`, `estado_depa`, `id_condominio`) VALUES
(101, 'ocupado', 1),
(102, 'ocupado', 1),
(201, 'ocupado', 1),
(202, 'ocupado', 1),
(301, 'ocupado', 1),
(302, 'disponible', 1),
(401, 'disponible', 1),
(402, 'disponible', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto_comun`
--

CREATE TABLE `gasto_comun` (
  `cod_gasto` int(11) NOT NULL,
  `fecha_limite` date DEFAULT NULL,
  `monto_luz` int(11) DEFAULT NULL,
  `monto_agua` int(11) DEFAULT NULL,
  `monto_gas` int(11) DEFAULT NULL,
  `monto_otros` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gasto_comun`
--

INSERT INTO `gasto_comun` (`cod_gasto`, `fecha_limite`, `monto_luz`, `monto_agua`, `monto_gas`, `monto_otros`) VALUES
(10101, '2022-01-31', 16000, 25000, 30500, 33000),
(10102, '2022-02-28', 17000, 25000, 30500, 33000),
(10103, '2022-03-31', 18000, 25000, 30500, 33000),
(10104, '2022-04-30', 19000, 25000, 30500, 33000),
(10105, '2022-05-31', 20000, 25000, 30500, 33000),
(10106, '2022-06-30', 21000, 25000, 30500, 33000),
(10107, '2022-07-31', 22000, 25000, 30500, 33000),
(10108, '2022-08-31', 16000, 25000, 30500, 33000),
(10201, '2022-01-31', 12000, 21000, 30500, 33000),
(10202, '2022-02-28', 12000, 22000, 30500, 33000),
(10203, '2022-03-31', 12000, 23000, 30500, 33000),
(10204, '2022-05-31', 12000, 24000, 30500, 33000),
(10205, '2022-05-31', 12000, 25000, 30500, 33000),
(10206, '2022-06-30', 12000, 26000, 30500, 33000),
(10207, '2022-07-31', 12000, 27000, 30500, 33000),
(10208, '2022-08-31', 16000, 25000, 30500, 33000),
(20101, '2022-01-31', 11000, 25000, 40500, 33000),
(20102, '2022-02-28', 12000, 25000, 40500, 33000),
(20103, '2022-03-31', 13000, 25000, 40500, 33000),
(20104, '2022-04-30', 14000, 25000, 40500, 33000),
(20105, '2022-05-31', 15000, 25000, 40500, 33000),
(20106, '2022-06-30', 16000, 25000, 40500, 33000),
(20107, '2022-07-31', 17000, 25000, 40500, 33000),
(20108, '2022-08-31', 16000, 25000, 30500, 33000),
(20201, '2022-01-31', 11000, 25000, 40500, 30000),
(20202, '2022-02-28', 12000, 25000, 40500, 30000),
(20203, '2022-03-31', 13000, 25000, 40500, 30000),
(20204, '2022-04-30', 14000, 25000, 40500, 30000),
(20205, '2022-05-31', 15000, 25000, 40500, 30000),
(20206, '2022-06-30', 16000, 25000, 40500, 30000),
(20207, '2022-07-31', 17000, 25000, 40500, 30000),
(20208, '2022-08-31', 16000, 25000, 30500, 33000),
(30101, '2022-01-31', 11000, 25000, 40500, 33000),
(30102, '2022-02-28', 12000, 25000, 40500, 33000),
(30103, '2022-03-31', 13000, 25000, 40500, 33000),
(30104, '2022-04-30', 14000, 25000, 40500, 33000),
(30105, '2022-05-31', 15000, 25000, 40500, 33000),
(30106, '2022-06-30', 16000, 25000, 40500, 33000),
(30107, '2022-07-31', 17000, 25000, 40500, 33000),
(30108, '2022-08-31', 16000, 25000, 30500, 33000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habita`
--

CREATE TABLE `habita` (
  `id_depa` int(11) DEFAULT NULL,
  `rut` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habita`
--

INSERT INTO `habita` (`id_depa`, `rut`) VALUES
(101, '101'),
(102, '102'),
(201, '201'),
(202, '202'),
(301, '301');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_gasto`
--

CREATE TABLE `pago_gasto` (
  `id_depa` int(11) DEFAULT NULL,
  `cod_gasto` int(11) DEFAULT NULL,
  `estado_pago` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_gasto`
--

INSERT INTO `pago_gasto` (`id_depa`, `cod_gasto`, `estado_pago`) VALUES
(101, 10101, 'pagado'),
(101, 10102, 'pagado'),
(101, 10103, 'pagado'),
(101, 10104, 'pagado'),
(101, 10105, 'pagado'),
(101, 10106, 'pagado'),
(101, 10107, 'pagado'),
(101, 10108, 'pagado'),
(102, 10201, 'pagado'),
(102, 10202, 'pagado'),
(102, 10203, 'pagado'),
(102, 10204, 'pagado'),
(102, 10205, 'pagado'),
(102, 10206, 'pagado'),
(102, 10207, 'pagado'),
(102, 10208, 'no pago'),
(201, 20101, 'pagado'),
(201, 20102, 'pagado'),
(201, 20103, 'pagado'),
(201, 20104, 'pagado'),
(201, 20105, 'pagado'),
(201, 20106, 'pagado'),
(201, 20107, 'pagado'),
(201, 20108, 'por pagar'),
(202, 20201, 'pagado'),
(202, 20202, 'pagado'),
(202, 20203, 'pagado'),
(202, 20204, 'pagado'),
(202, 20205, 'pagado'),
(202, 20206, 'pagado'),
(202, 20207, 'pagado'),
(202, 20208, 'por pagar'),
(301, 30101, 'pagado'),
(301, 30102, 'pagado'),
(301, 30103, 'pagado'),
(301, 30104, 'pagado'),
(301, 30105, 'pagado'),
(301, 30106, 'pagado'),
(301, 30107, 'pagado'),
(301, 30108, 'pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `cod_usuario` int(11) NOT NULL,
  `rol_usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`cod_usuario`, `rol_usuario`) VALUES
(11, 'administrador'),
(22, 'arrendatario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(20) DEFAULT NULL,
  `rut` varchar(20) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `rut`, `pass`, `cod_usuario`, `apellido`) VALUES
('mario11', '101', 'pass', 22, 'faundez'),
('mario12', '102', 'pass', 22, 'faundez'),
('mario21', '201', 'pass', 22, 'faundez'),
('mario22', '202', 'pass', 22, 'faundez'),
('mario31', '301', 'pass', 22, 'faundez'),
('admin', 'admin', 'pass', 11, 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `condominio`
--
ALTER TABLE `condominio`
  ADD PRIMARY KEY (`id_condominio`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_depa`),
  ADD KEY `id_condominio` (`id_condominio`);

--
-- Indices de la tabla `gasto_comun`
--
ALTER TABLE `gasto_comun`
  ADD PRIMARY KEY (`cod_gasto`);

--
-- Indices de la tabla `habita`
--
ALTER TABLE `habita`
  ADD KEY `id_depa` (`id_depa`),
  ADD KEY `rut` (`rut`);

--
-- Indices de la tabla `pago_gasto`
--
ALTER TABLE `pago_gasto`
  ADD KEY `id_depa` (`id_depa`),
  ADD KEY `cod_gasto` (`cod_gasto`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`id_condominio`) REFERENCES `condominio` (`id_condominio`);

--
-- Filtros para la tabla `habita`
--
ALTER TABLE `habita`
  ADD CONSTRAINT `habita_ibfk_1` FOREIGN KEY (`id_depa`) REFERENCES `departamento` (`id_depa`),
  ADD CONSTRAINT `habita_ibfk_2` FOREIGN KEY (`rut`) REFERENCES `usuario` (`rut`);

--
-- Filtros para la tabla `pago_gasto`
--
ALTER TABLE `pago_gasto`
  ADD CONSTRAINT `pago_gasto_ibfk_1` FOREIGN KEY (`id_depa`) REFERENCES `departamento` (`id_depa`),
  ADD CONSTRAINT `pago_gasto_ibfk_2` FOREIGN KEY (`cod_gasto`) REFERENCES `gasto_comun` (`cod_gasto`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `tipo_usuario` (`cod_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
