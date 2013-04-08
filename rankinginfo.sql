-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2013 at 12:01 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=109 ;

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
(8, '2013-03-25 23:17:57', 'Insertar NotificaciÃ³n', 60);

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
  `comentario` varchar(5000) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `expediente` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `expediente` (`expediente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `promocion`
--


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
