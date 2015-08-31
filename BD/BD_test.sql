-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2015 a las 19:43:06
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hcsxetdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE IF NOT EXISTS `contiene` (
  `id_lista` int(50) NOT NULL,
  `id_destinatario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contiene`
--

INSERT INTO `contiene` (`id_lista`, `id_destinatario`) VALUES
(109, 353),
(109, 354),
(109, 355),
(109, 356);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatario`
--

CREATE TABLE IF NOT EXISTS `destinatario` (
`id_destinatario` int(100) NOT NULL,
  `email_destinatario` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_destinatario` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos_destinatario` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=357 ;

--
-- Volcado de datos para la tabla `destinatario`
--

INSERT INTO `destinatario` (`id_destinatario`, `email_destinatario`, `nombre_destinatario`, `apellidos_destinatario`) VALUES
(348, 'invitado1@ufv.es', NULL, NULL),
(349, 'invitado2@ufv.es', NULL, NULL),
(350, 'invitado3@ufv.es', NULL, NULL),
(351, 'invitado4@ufv.es', NULL, NULL),
(352, 'invitado5@ufv.es', NULL, NULL),
(353, 'o.penalba@ufv.es', NULL, NULL),
(354, 'i.garcia.prof@ufv.es', NULL, NULL),
(355, 'c.montero@ufv.es', NULL, NULL),
(356, 'pfblanco.prof@ufv.es', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE IF NOT EXISTS `lista` (
`id_lista` int(50) NOT NULL,
  `nombre_lista` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuario` int(5) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=110 ;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`id_lista`, `nombre_lista`, `id_usuario`) VALUES
(109, 'UFV-CCP-SCP', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `target`
--

CREATE TABLE IF NOT EXISTS `target` (
`id_target` int(50) NOT NULL,
  `nombre_target` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link_target` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_usuario` int(5) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=154 ;

--
-- Volcado de datos para la tabla `target`
--

INSERT INTO `target` (`id_target`, `nombre_target`, `link_target`, `fecha_ini`, `fecha_fin`, `id_usuario`) VALUES
(151, 'Prueba-1', 'Resultados favorables', NULL, NULL, 21),
(152, 'Prueba-2', 'Resultados promedios', NULL, NULL, 21),
(153, 'Prueba-3', 'Resultados desfavorables', NULL, NULL, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(5) NOT NULL,
  `email_usuario` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos_usuario` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email_usuario`, `clave`, `nombre_usuario`, `apellidos_usuario`) VALUES
(21, 'test@user.es', 'ufv', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `id_destinatario` int(100) NOT NULL,
  `id_target` int(50) NOT NULL,
  `token` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `respuesta_1` int(1) DEFAULT NULL,
  `respuesta_2` int(1) DEFAULT NULL,
  `respuesta_3` int(1) DEFAULT NULL,
  `respuesta_4` int(1) DEFAULT NULL,
  `respuesta_5` int(1) DEFAULT NULL,
  `respuesta_6` int(1) DEFAULT NULL,
  `respuesta_7` int(1) DEFAULT NULL,
  `respuesta_8` int(1) DEFAULT NULL,
  `respuesta_9` int(1) DEFAULT NULL,
  `respuesta_10` int(1) DEFAULT NULL,
  `respuesta_11` int(1) DEFAULT NULL,
  `respuesta_12` int(1) DEFAULT NULL,
  `respuesta_13` int(1) DEFAULT NULL,
  `respuesta_14` int(1) DEFAULT NULL,
  `respuesta_15` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id_destinatario`, `id_target`, `token`, `respuesta_1`, `respuesta_2`, `respuesta_3`, `respuesta_4`, `respuesta_5`, `respuesta_6`, `respuesta_7`, `respuesta_8`, `respuesta_9`, `respuesta_10`, `respuesta_11`, `respuesta_12`, `respuesta_13`, `respuesta_14`, `respuesta_15`) VALUES
(348, 151, 'NCZKXRe', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(348, 152, 'UWJEQRe', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(348, 153, 'LGKDORe', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(349, 151, 'LKOCDRe', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(349, 152, 'ELPWKRe', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(349, 153, 'PWILURe', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(350, 151, 'XLPHSRe', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(350, 152, 'UPQUGRe', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(350, 153, 'HCGQORe', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(351, 151, 'WILPERe', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(351, 152, 'DMAETRe', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(351, 153, 'ASNEFRe', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(352, 151, 'TTSFXRe', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(352, 152, 'OIJIKRe', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(352, 153, 'BHCFBRe', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
 ADD PRIMARY KEY (`id_lista`,`id_destinatario`), ADD KEY `id_destinatario` (`id_destinatario`);

--
-- Indices de la tabla `destinatario`
--
ALTER TABLE `destinatario`
 ADD PRIMARY KEY (`id_destinatario`);

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
 ADD PRIMARY KEY (`id_lista`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `target`
--
ALTER TABLE `target`
 ADD PRIMARY KEY (`id_target`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
 ADD PRIMARY KEY (`id_destinatario`,`id_target`), ADD KEY `id_target` (`id_target`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
MODIFY `id_destinatario` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=357;
--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
MODIFY `id_lista` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT de la tabla `target`
--
ALTER TABLE `target`
MODIFY `id_target` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`id_lista`) REFERENCES `lista` (`id_lista`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`id_destinatario`) REFERENCES `destinatario` (`id_destinatario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista`
--
ALTER TABLE `lista`
ADD CONSTRAINT `lista_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `target`
--
ALTER TABLE `target`
ADD CONSTRAINT `target_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_destinatario`) REFERENCES `destinatario` (`id_destinatario`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`id_target`) REFERENCES `target` (`id_target`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
