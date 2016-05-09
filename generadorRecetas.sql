-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2015 a las 12:23:18
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `generadorRecetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousr`
--

CREATE TABLE IF NOT EXISTS `tipousr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipousr`
--

INSERT INTO `tipousr` (`id`, `descr`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin'),
(3, 'Supervisor'),
(4, 'Farmaceutico'),
(5, 'Cajero'),
(6, 'Atencion Mostrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE IF NOT EXISTS `usr` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `idtipousr` int(2) NOT NULL DEFAULT '0',
  `username` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `active` char(1) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipousr_idx` (`idtipousr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `idtipousr`, `username`, `password`, `email`, `created_on`, `active`, `name`) VALUES
(1, 2, 'martin', '11eede5bc38052e337e38eef74a5c1b9', 'martinrodriguez493@hotmail.com', '2014-08-01 00:00:00', '1', 'Martin Atlantico Rodriguez'),
(17, 6, 'prob', '385e54735cbf7e164d5ca45c7419d3a9', 'p@p.com12', '2014-08-08 10:58:23', '1', 'Probando12'),
(18, 6, 'francisco', '117735823fadae51db091c7d63e60eb0', 'francisco@fran.com', '2014-08-11 01:39:57', '1', 'Francisco Figueroa'),
(19, 4, '12', 'c20ad4d76fe97759aa27a0c99bff6710', '12@2222.com', '2014-08-11 02:08:47', '1', '12'),
(20, 3, '123', '202cb962ac59075b964b07152d234b70', '12@22232.com', '2014-08-11 02:08:55', '1', '123'),
(21, 2, 'juan', '827ccb0eea8a706c4c34a16891f84e7b', 'juan@h.com', '2015-05-27 12:06:53', '1', 'Juan algo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usrhit`
--

CREATE TABLE IF NOT EXISTS `usrhit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_access` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=259 ;

--
-- Volcado de datos para la tabla `usrhit`
--

INSERT INTO `usrhit` (`id`, `iduser`, `last_access`, `ip_access`) VALUES
(13, 1, '2014-08-01 19:18:25', '::1'),
(14, 1, '2014-08-01 19:18:30', '::1'),
(15, 1, '2014-08-01 19:18:59', '::1'),
(16, 1, '2014-08-01 19:21:16', '::1'),
(17, 1, '2014-08-01 19:21:25', '::1'),
(18, 1, '2014-08-01 19:23:04', '::1'),
(19, 1, '2014-08-01 19:35:19', '::1'),
(20, 1, '2014-08-01 19:44:09', '::1'),
(21, 1, '2014-08-01 19:44:31', '::1'),
(22, 1, '2014-08-01 19:44:58', '::1'),
(23, 1, '2014-08-01 19:45:35', '::1'),
(24, 1, '2014-08-01 20:00:47', '::1'),
(25, 1, '2014-08-03 22:23:21', '::1'),
(26, 1, '2014-08-03 22:27:36', '::1'),
(27, 1, '2014-08-03 22:43:09', '::1'),
(199, 2, '2014-08-04 03:00:00', ''),
(200, 1, '2014-08-04 18:26:55', '::1'),
(201, 1, '2014-08-04 23:28:00', '::1'),
(202, 1, '2014-08-05 12:37:14', '::1'),
(203, 1, '2014-08-05 13:32:01', '::1'),
(204, 1, '2014-08-05 23:38:55', '::1'),
(205, 3, '2014-08-06 01:24:51', '::1'),
(206, 3, '2014-08-05 13:27:08', '::1'),
(207, 3, '2014-08-05 13:45:35', '::1'),
(208, 3, '2014-08-05 13:46:15', '::1'),
(209, 3, '2014-08-05 13:46:40', '::1'),
(210, 1, '2014-08-05 13:49:54', '::1'),
(211, 4, '2014-08-06 15:37:18', '::1'),
(212, 1, '2014-08-06 05:52:52', '::1'),
(213, 1, '2014-08-06 05:54:14', '::1'),
(214, 1, '2014-08-06 05:22:42', '::1'),
(215, 1, '2014-08-06 09:50:32', '::1'),
(216, 1, '2014-08-07 06:36:42', '::1'),
(217, 1, '2014-08-07 07:24:26', '::1'),
(218, 13, '2014-08-07 07:30:46', '::1'),
(219, 1, '2014-08-08 11:10:57', '::1'),
(220, 16, '2014-08-08 13:43:30', '::1'),
(221, 16, '2014-08-08 13:48:37', '::1'),
(222, 16, '2014-08-08 13:48:58', '::1'),
(223, 1, '2014-08-08 13:54:57', '::1'),
(224, 17, '2014-08-08 14:00:01', '::1'),
(225, 1, '2014-08-09 13:45:55', '::1'),
(226, 1, '2014-08-09 06:17:15', '::1'),
(227, 1, '2014-08-09 11:12:57', '::1'),
(228, 1, '2014-08-09 12:06:37', '::1'),
(229, 1, '2014-08-11 15:10:57', '::1'),
(230, 1, '2014-08-11 15:29:35', '::1'),
(231, 17, '2014-08-11 15:37:28', '::1'),
(232, 1, '2014-08-11 15:38:21', '::1'),
(233, 1, '2014-08-11 04:59:50', '::1'),
(234, 1, '2014-08-11 05:03:08', '::1'),
(235, 1, '2014-08-11 05:04:40', '::1'),
(236, 1, '2014-08-11 06:04:12', '::1'),
(237, 1, '2014-08-11 10:34:27', '::1'),
(238, 1, '2014-08-12 12:01:50', '::1'),
(239, 1, '2014-08-12 13:46:02', '::1'),
(240, 1, '2014-08-13 12:03:50', '::1'),
(241, 1, '2014-08-25 12:32:42', '::1'),
(242, 1, '2014-08-26 14:02:43', '::1'),
(243, 1, '2014-08-29 13:48:16', '::1'),
(244, 1, '2015-04-29 14:08:43', '127.0.0.1'),
(245, 1, '2015-05-04 13:10:03', '127.0.0.1'),
(246, 1, '2015-05-05 12:38:39', '127.0.0.1'),
(247, 1, '2015-05-06 13:18:39', '127.0.0.1'),
(248, 1, '2015-05-11 14:41:16', '127.0.0.1'),
(249, 1, '2015-05-12 12:45:41', '127.0.0.1'),
(250, 1, '2015-05-12 13:50:34', '127.0.0.1'),
(251, 1, '2015-05-13 14:40:20', '127.0.0.1'),
(252, 1, '2015-05-14 13:16:58', '127.0.0.1'),
(253, 1, '2015-05-19 12:18:38', '127.0.0.1'),
(254, 1, '2015-05-20 12:12:23', '127.0.0.1'),
(255, 1, '2015-05-22 14:37:28', '127.0.0.1'),
(256, 1, '2015-05-26 14:04:47', '127.0.0.1'),
(257, 1, '2015-05-27 15:05:05', '127.0.0.1'),
(258, 21, '2015-05-27 15:07:28', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
