-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2022 a las 00:37:05
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `equipo-jugador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apd`
--

CREATE TABLE `apd` (
  `id_a` int(11) NOT NULL,
  `estado_apd` text NOT NULL,
  `user` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `entidad_social` varchar(60) NOT NULL,
  `nombre_apd` text NOT NULL,
  `apellido_apd` text NOT NULL,
  `codigo_unico` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo_post`
--

CREATE TABLE `archivo_post` (
  `id` int(11) NOT NULL,
  `arch_asoc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulantes`
--

CREATE TABLE `postulantes` (
  `id` int(11) NOT NULL COMMENT 'indice autoincrementable',
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `edad` int(3) NOT NULL,
  `posicion` text NOT NULL,
  `dni` int(8) NOT NULL,
  `cod_post` int(7) NOT NULL,
  `provincia` text NOT NULL,
  `localidad` text NOT NULL,
  `telefono` int(12) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `club_post` int(60) NOT NULL,
  `nacionalidad` text NOT NULL,
  `fecha_nacimiento` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apd`
--
ALTER TABLE `apd`
  ADD UNIQUE KEY `id_a` (`id_a`);

--
-- Indices de la tabla `archivo_post`
--
ALTER TABLE `archivo_post`
  ADD UNIQUE KEY `id_post` (`id`);

--
-- Indices de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apd`
--
ALTER TABLE `apd`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `archivo_post`
--
ALTER TABLE `archivo_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'indice autoincrementable';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
