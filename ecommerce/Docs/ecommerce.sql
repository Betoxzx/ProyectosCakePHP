-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2015 a las 14:45:20
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` binary(36) NOT NULL,
  `nombres` varchar(128) NOT NULL,
  `apellido_paterno` varchar(128) DEFAULT NULL,
  `apellido_materno` varchar(128) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `razon_social` varchar(256) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `calle` varchar(256) NOT NULL,
  `colonia` varchar(256) NOT NULL,
  `cp` int(5) NOT NULL,
  `estado` varchar(5) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `documento_r` varchar(256) DEFAULT NULL,
  `documento_d` varchar(256) DEFAULT NULL,
  `descripcion` text,
  `validado` tinyint(1) NOT NULL DEFAULT '0',
  `img` varchar(256) DEFAULT NULL,
  `cuenta_id` binary(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id` binary(36) NOT NULL,
  `nombres` varchar(128) NOT NULL,
  `apellido_paterno` varchar(128) DEFAULT NULL,
  `apellido_materno` varchar(128) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `validado` tinyint(1) NOT NULL DEFAULT '0',
  `img` varchar(256) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id` binary(36) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` binary(36) NOT NULL,
  `marca_id` binary(36) NOT NULL,
  `descripcion` varchar(256) DEFAULT NULL,
  `unidad` varchar(15) DEFAULT NULL,
  `codigo` varchar(30) DEFAULT NULL,
  `precio_unitario` double NOT NULL DEFAULT '0',
  `stock` double NOT NULL DEFAULT '0',
  `img` varchar(256) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
