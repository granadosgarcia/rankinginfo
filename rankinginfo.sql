-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2013 at 12:46 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rankinginfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `id_usuario` int(7) NOT NULL,
  `fecha` datetime NOT NULL,
  `actividad` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=172 ;

--
-- Dumping data for table `actividades`
--

INSERT INTO `actividades` (`id_usuario`, `fecha`, `actividad`, `id`) VALUES
(8, '2013-03-07 18:17:40', 'Insercion Juicio', 1),
(8, '2013-03-07 18:52:30', 'Insercion Juicio', 2),
(8, '2013-03-07 18:52:52', 'Insercion Juicio', 3),
(8, '2013-03-07 18:52:57', 'Insercion Juicio', 4),
(8, '2013-03-12 18:59:44', 'Insercion Juicio', 5),
(8, '2013-03-12 19:05:37', 'Insercion Juicio', 6),
(8, '2013-03-12 19:12:19', 'Insercion Juicio', 7),
(8, '2013-03-12 19:12:34', 'Insercion Juicio', 8),
(8, '2013-03-12 19:13:02', 'Insercion Juicio', 9),
(8, '2013-03-12 19:14:24', 'Insercion Juicio', 10),
(8, '2013-03-12 19:19:24', 'Insercion Juicio', 11),
(8, '2013-03-12 19:19:45', 'Insercion Juicio', 12),
(8, '2013-03-12 19:20:19', 'Insercion Juicio', 13),
(8, '2013-03-12 19:20:45', 'Insercion Juicio', 14),
(8, '2013-03-12 19:21:04', 'Insercion Juicio', 15),
(8, '2013-03-12 19:22:16', 'Insercion Juicio', 16),
(8, '2013-03-12 19:22:48', 'Insercion Juicio', 17),
(8, '2013-03-12 19:29:46', 'Insercion Juicio', 18),
(8, '2013-03-12 19:30:07', 'Insercion Juicio', 19),
(8, '2013-03-12 19:45:19', 'Insercion Juicio', 20),
(8, '2013-03-12 19:45:43', 'Insercion Juicio', 21),
(8, '2013-03-12 19:47:59', 'Insercion Juicio', 22),
(8, '2013-03-12 19:48:05', 'Insercion Juicio', 23),
(8, '2013-03-12 19:48:11', 'Insercion Juicio', 24),
(8, '2013-03-12 19:49:42', 'Insercion Juicio', 25),
(8, '2013-03-12 19:59:59', 'Insercion Juicio', 26),
(8, '2013-03-12 20:02:03', 'Insercion Juicio', 27),
(8, '2013-03-12 20:02:19', 'Insercion Juicio', 28),
(8, '2013-03-12 20:10:17', 'Insercion Juicio', 29),
(8, '2013-03-12 20:11:33', 'Insercion Juicio', 30),
(8, '2013-03-12 20:13:28', 'Insercion Juicio', 31),
(8, '2013-03-12 20:14:07', 'Insercion Juicio', 32),
(8, '2013-03-12 20:15:00', 'Insercion Juicio', 33),
(8, '2013-03-12 20:17:08', 'Insercion Juicio', 34),
(8, '2013-03-12 20:18:12', 'Insercion Juicio', 35),
(8, '2013-03-12 20:23:15', 'InserciÃ³n Juicio', 36),
(8, '2013-03-12 20:23:46', 'InserciÃ³n Juicio', 37),
(8, '2013-03-12 20:24:30', 'InserciÃ³n Juicio', 38),
(8, '2013-03-12 20:39:59', 'Insercion Juicio', 39),
(8, '2013-03-12 20:40:53', 'Insercion Juicio', 40),
(8, '2013-03-12 20:50:59', 'Insercion Juicio', 41),
(8, '2013-03-12 20:56:15', 'InserciÃ³n Juicio', 42),
(8, '2013-03-12 20:58:09', 'InserciÃ³n Juicio', 43),
(8, '2013-03-12 20:58:47', 'InserciÃ³n Juicio', 44),
(8, '2013-03-12 20:59:38', 'InserciÃ³n Juicio', 45),
(8, '2013-03-25 21:11:16', 'Insercion Juicio', 46),
(8, '2013-03-25 21:44:27', 'Insertar NotificaciÃ³n', 47),
(8, '2013-03-25 21:45:53', 'Insertar NotificaciÃ³n', 48),
(8, '2013-03-25 21:46:31', 'Insertar NotificaciÃ³n', 49),
(8, '2013-03-25 22:40:35', 'InserciÃ³n Juicio', 50),
(8, '2013-03-25 22:56:56', 'Insertar NotificaciÃ³n', 51),
(8, '2013-03-25 22:58:28', 'Insertar NotificaciÃ³n', 52),
(8, '2013-03-25 23:00:54', 'Insertar NotificaciÃ³n', 53),
(8, '2013-03-25 23:04:37', 'Insertar Promocion', 54),
(8, '2013-03-25 23:05:31', 'Insertar Promocion', 55),
(8, '2013-03-25 23:15:16', 'Insertar Promocion', 56),
(8, '2013-03-25 23:16:15', 'Insertar Promocion', 57),
(8, '2013-03-25 23:16:51', 'Insertar NotificaciÃ³n', 58),
(8, '2013-03-25 23:16:57', 'Insertar NotificaciÃ³n', 59),
(8, '2013-03-25 23:17:57', 'Insertar NotificaciÃ³n', 60),
(8, '2013-04-07 19:03:16', 'Insercion Juicio', 109),
(8, '2013-04-07 19:14:13', 'Insertar Promocion', 110),
(8, '2013-04-07 19:15:27', 'Insertar Promocion', 111),
(8, '2013-04-07 19:17:01', 'Insertar Promocion', 112),
(8, '2013-04-07 19:30:59', 'Insertar Promocion', 113),
(8, '2013-04-07 20:27:08', 'Insertar Promocion', 114),
(8, '2013-04-07 20:27:16', 'Insertar Promocion', 115),
(8, '2013-04-07 20:32:11', 'Insertar Promocion', 116),
(8, '2013-04-07 20:32:33', 'Insertar Promocion', 117),
(8, '2013-04-07 20:34:24', 'Insertar Promocion', 118),
(8, '2013-04-07 20:35:25', 'Insertar Promocion', 119),
(8, '2013-04-07 20:38:48', 'Insertar Promocion', 120),
(8, '2013-04-07 20:38:52', 'Insertar Promocion', 121),
(8, '2013-04-07 20:39:10', 'Insertar Promocion', 122),
(8, '2013-04-07 20:39:42', 'Insertar Promocion', 123),
(8, '2013-04-07 20:40:51', 'Insertar Promocion', 124),
(8, '2013-04-07 20:41:01', 'Insertar Promocion', 125),
(8, '2013-04-07 20:42:48', 'Insertar Promocion', 126),
(8, '2013-04-07 20:44:40', 'Insertar Promocion', 127),
(8, '2013-04-07 20:48:31', 'Insertar Promocion', 128),
(8, '2013-04-07 20:48:45', 'Insertar Promocion', 129),
(8, '2013-04-07 20:48:56', 'Insertar Promocion', 130),
(8, '2013-04-07 20:49:20', 'Insertar Promocion', 131),
(8, '2013-04-07 20:50:58', 'Insertar Promocion', 132),
(8, '2013-04-07 20:51:23', 'Insertar Promocion', 133),
(8, '2013-04-07 20:51:42', 'Insertar Promocion', 134),
(8, '2013-04-07 22:01:55', 'Insercion Juicio', 135),
(8, '2013-04-07 22:02:16', 'Insercion Juicio', 136),
(8, '2013-04-07 22:04:36', 'Insercion Juicio', 137),
(8, '2013-04-07 22:04:46', 'Insercion Juicio', 138),
(8, '2013-04-07 22:04:56', 'Insercion Juicio', 139),
(8, '2013-04-07 22:05:24', 'Insercion Juicio', 140),
(8, '2013-04-07 22:05:27', 'Insercion Juicio', 141),
(8, '2013-04-07 22:07:15', 'Insercion Juicio', 142),
(8, '2013-04-07 22:07:39', 'Insercion Juicio', 143),
(8, '2013-04-07 22:11:17', 'Insercion Juicio', 144),
(8, '2013-04-07 22:11:41', 'Insercion Juicio', 145),
(8, '2013-04-07 22:12:47', 'Insercion Juicio', 146),
(8, '2013-04-07 22:13:09', 'Insercion Juicio', 147),
(8, '2013-04-07 22:13:41', 'Insercion Juicio', 148),
(8, '2013-04-07 22:13:55', 'Insercion Juicio', 149),
(8, '2013-04-07 22:16:22', 'Insercion Juicio', 150),
(8, '2013-04-07 22:17:56', 'Insercion Juicio', 151),
(8, '2013-04-07 22:21:44', 'Insercion Juicio', 152),
(8, '2013-04-07 22:22:07', 'Insercion Juicio', 153),
(8, '2013-04-07 22:23:43', 'Insercion Juicio', 154),
(8, '2013-04-07 22:24:04', 'Insercion Juicio', 155),
(8, '2013-04-07 22:24:47', 'Insercion Juicio', 156),
(8, '2013-04-07 22:24:58', 'Insercion Juicio', 157),
(8, '2013-04-07 22:25:04', 'Insercion Juicio', 158),
(8, '2013-04-07 22:25:29', 'Insercion Juicio', 159),
(8, '2013-04-07 22:25:31', 'Insercion Juicio', 160),
(8, '2013-04-07 22:25:32', 'Insercion Juicio', 161),
(8, '2013-04-07 22:27:48', 'Insercion Juicio', 162),
(8, '2013-04-07 22:28:08', 'Insercion Juicio', 163),
(8, '2013-04-07 22:28:24', 'Insercion Juicio', 164),
(8, '2013-04-07 22:34:22', 'Insercion Deudor VW', 165),
(8, '2013-04-07 22:36:05', ' Consulta VW', 166),
(8, '2013-04-07 22:36:47', ' Consulta VW', 167),
(8, '2013-04-11 05:52:55', 'Insertar Promocion', 168),
(8, '2013-04-11 05:53:03', 'Insertar Promocion', 169),
(8, '2013-04-18 18:12:25', 'Insertar Promocion', 170),
(8, '2013-04-18 18:23:11', 'Insercion Juicio', 171);

-- --------------------------------------------------------

--
-- Table structure for table `arrendado`
--

CREATE TABLE IF NOT EXISTS `arrendado` (
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `calle` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `no_interior` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `no_exterior` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `colonia` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ciudad` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estado` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `codigo_postal` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `municipio` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `delegacion` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_casa` int(30) DEFAULT NULL,
  `telefono_particular` int(30) DEFAULT NULL,
  `estado_civil` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_ife` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `arrendador_actual` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `arrendador_anterior` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `domicilio_arrendador_actual` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_arrendador_actual` int(100) DEFAULT NULL,
  `telefono_arrendador_anterior` int(100) DEFAULT NULL,
  `domicilio_arrendador_anterior` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `domicilio_anterior` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `curp` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_aval` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `domicilio_aval` varchar(150) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_aval` int(50) DEFAULT NULL,
  `nombre_conyuge` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_comprobante_domicilio` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_foto` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `clave_ife` int(30) DEFAULT NULL,
  PRIMARY KEY (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `arrendado`
--


-- --------------------------------------------------------

--
-- Table structure for table `arr_calif`
--

CREATE TABLE IF NOT EXISTS `arr_calif` (
  `curp` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `nombre_evaluador` varchar(200) DEFAULT NULL,
  `telefono_evaluador` int(30) DEFAULT NULL,
  `direccion_evaluador` int(200) DEFAULT NULL,
  `arr_pagos` int(1) DEFAULT NULL,
  `arr_propiedad_actual` int(1) DEFAULT NULL,
  `arr_general` int(1) DEFAULT NULL,
  `comentario` varchar(500) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `curp` (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arr_calif`
--


-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `curp` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombres` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_particular` int(30) DEFAULT NULL,
  `telefono_personal` int(30) DEFAULT NULL,
  `calle` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `no_interior` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `no_exterior` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `colonia` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ciudad` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estado` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `codigo_postal` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `municipio` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `delegacion` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estado_civil` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_ife` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_comprobante_domicilio` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_comprobante_trabajo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `clave_escolaridad` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_conyuge` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `patron_anterior` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `patron_actual` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `responsable_actual` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_patronactual` int(30) DEFAULT NULL,
  `domicilio_patronactual` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_patronanterior` int(30) DEFAULT NULL,
  `domicilio_patronanterior` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_foto` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `empleo_anterior` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tiempo_trabajoanterior` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `habilidades` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `clave_ife` int(30) DEFAULT NULL,
  PRIMARY KEY (`curp`),
  KEY `clave_escolaridad` (`clave_escolaridad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `empleado`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_calif`
--

CREATE TABLE IF NOT EXISTS `emp_calif` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `curp` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `emp_desempeno` int(1) DEFAULT NULL,
  `comentario` varchar(500) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nombre_evaluador` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `empresa_evaluador` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `puesto_evaluador` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curp` (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `emp_calif`
--


-- --------------------------------------------------------

--
-- Table structure for table `escolaridad`
--

CREATE TABLE IF NOT EXISTS `escolaridad` (
  `clave` int(10) NOT NULL,
  `grado_escolar` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lugar_estudio` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lugar_estudio2` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lugar_estudio3` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lugar_estudio4` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lugar_estudio5` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_certificado_escolar` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_cedula_profesional` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `escolaridad`
--


-- --------------------------------------------------------

--
-- Table structure for table `gestiones`
--

CREATE TABLE IF NOT EXISTS `gestiones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_gestion` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `comentario` varchar(500) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `etapa_procesal` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `etapa_juicio` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `curp` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `saldo_atrasado` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `semanas_atraso` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ultimo_abono` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `monto_deuda` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curp` (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gestiones`
--


-- --------------------------------------------------------

--
-- Table structure for table `promocion`
--

CREATE TABLE IF NOT EXISTS `promocion` (
  `fecha_notificacion` date DEFAULT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `expediente` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `comentario` varchar(5000) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `expediente` (`expediente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `promocion`
--

INSERT INTO `promocion` (`fecha_notificacion`, `id`, `expediente`, `tipo`, `comentario`) VALUES
('2013-04-04', 1, 'Prueba', 'PromociÃ³n', 'adsf'),
('2013-04-03', 2, 'Prueba', 'NotificaciÃ³n', 'hola'),
(NULL, 3, 'Prueba', 'NotificaciÃ³n', 'Auto De Fecha Veinticinco De Marzo Del Dos Mil Trece.-\r\ntÃ©ngase A La Ocursante Nombrando Abogado Patrono A \r\nLa Profesionista Que Menciona, SeÅ„alando Domicilio Para \r\nRecibir Notificaciones El Que Indica. De Igual Forma Se Le \r\nTiene Contestando En Tiempo Y Forma Legal A La \r\nDemanda Instaurada En Su Contra, Oponiendo \r\nExcepciones Que De La Misma Se Desprende, Objetando \r\nMaterial Probatorio Exhibido Por Su Contraria, Se Le Tiene \r\nAnunciando Pruebas De Su Parte, Con Su Contenido Dese \r\nVista A La Contraria Por El TÃ©rmino De Tres DÃ­as \r\nSiguiente A La NotificaciÃ³n Para Que Objete Las Que \r\nPermite La Ley Y Ofrezca Pruebas Tendientes A Justificar \r\nSus Objeciones. NotifÃ­quese Por Lista.');

-- --------------------------------------------------------

--
-- Table structure for table `relacion_juicios`
--

CREATE TABLE IF NOT EXISTS `relacion_juicios` (
  `actor_nombres` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `actor_apellido_paterno` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `actor_apellido_materno` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `demandado_nombres` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `demandado_apellido_paterno` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `demandado_apellido_materno` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `juicio` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `expediente` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `juzgado` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `ultima_actuacion` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `s_actuacion_01` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `s_actuacion_02` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `estado_procesal` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `comentario_01` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `distrito_juidicial` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`expediente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `relacion_juicios`
--

INSERT INTO `relacion_juicios` (`actor_nombres`, `actor_apellido_paterno`, `actor_apellido_materno`, `demandado_nombres`, `demandado_apellido_paterno`, `demandado_apellido_materno`, `juicio`, `expediente`, `juzgado`, `ultima_actuacion`, `s_actuacion_01`, `s_actuacion_02`, `estado_procesal`, `comentario_01`, `distrito_juidicial`, `fecha`) VALUES
('prueba', 'prueba', 'prueba', 'v', 'vprueba', 'vprueba', 'prueba', '123', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '', 'prueba', '2013-04-02'),
('abraham', 'gonzalez', 'gonzalez', 'emilio', 'peredo', 'peredo', 'Ejecutivo Mercantil', '346/13', 'Septimo Mercantil', 'Presento demanda', '', '', 'Se presento demanda', 'Hay que esperar se notifique auto de radicacion', 'PUebla', '2013-04-04'),
('Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'PruebaPruebaPruebaPruebaPruebaPruebaPrueba', 'Prueba', '2013-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_usuario` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `privilegios` int(2) NOT NULL,
  `img_foto` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `nombre_usuario`, `password`, `privilegios`, `img_foto`) VALUES
(8, 'Abraham', 'abr', '$1$T0IaxXcN$viuwy6JLJa1iBKH5dC8ZL1', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `vw`
--

CREATE TABLE IF NOT EXISTS `vw` (
  `nombre` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `curp` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(30) DEFAULT NULL,
  `calle` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `no_interior` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `no_exterior` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `colonia` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `ciudad` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `municipio` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `delegacion` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `estado` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `codigo_postal` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `no_cliente` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vw`
--

INSERT INTO `vw` (`nombre`, `apellido_paterno`, `apellido_materno`, `curp`, `telefono`, `calle`, `no_interior`, `no_exterior`, `colonia`, `ciudad`, `municipio`, `delegacion`, `estado`, `codigo_postal`, `no_cliente`) VALUES
('prueba', 'prueba', 'prueba', 'prueba', 123121, 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', NULL, 'prueba');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `arr_calif`
--
ALTER TABLE `arr_calif`
  ADD CONSTRAINT `arr_calif_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `arrendado` (`curp`);

--
-- Constraints for table `emp_calif`
--
ALTER TABLE `emp_calif`
  ADD CONSTRAINT `emp_calif_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `empleado` (`curp`);

--
-- Constraints for table `escolaridad`
--
ALTER TABLE `escolaridad`
  ADD CONSTRAINT `escolaridad_ibfk_1` FOREIGN KEY (`clave`) REFERENCES `empleado` (`clave_escolaridad`);

--
-- Constraints for table `gestiones`
--
ALTER TABLE `gestiones`
  ADD CONSTRAINT `gestiones_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `vw` (`curp`);

--
-- Constraints for table `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `promocion_ibfk_1` FOREIGN KEY (`expediente`) REFERENCES `relacion_juicios` (`expediente`);
