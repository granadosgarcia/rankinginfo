-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2013 at 01:06 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=261 ;

--
-- Dumping data for table `actividades`
--

INSERT INTO `actividades` (`id_usuario`, `fecha`, `actividad`, `id`) VALUES
(8, '2012-12-16 16:07:58', 'Insercion Arrendado', 143),
(8, '2012-12-16 16:10:21', 'Insercion Arrendado', 144),
(8, '2012-12-16 16:10:48', 'Consulta Arrendado', 145),
(8, '2012-12-16 16:14:03', 'Consulta Arrendado', 146),
(8, '2012-12-16 16:20:07', 'Consulta Arrendado', 147),
(8, '2012-12-16 16:21:44', 'Consulta Arrendado', 148),
(8, '2012-12-16 16:22:26', 'Consulta Arrendado', 149),
(8, '2012-12-16 16:25:31', 'Consulta Arrendado', 150),
(8, '2012-12-16 16:26:45', 'Consulta Arrendado', 151),
(8, '2012-12-16 16:31:34', 'Edición Arrendado', 152),
(8, '2012-12-16 16:32:04', 'Edición Arrendado', 153),
(8, '2012-12-16 16:32:31', 'Edición Arrendado', 154),
(8, '2012-12-16 17:38:45', 'Edición Arrendado', 155),
(8, '2012-12-16 17:43:26', 'Calificacion Arrendado', 156),
(8, '2012-12-16 17:43:57', 'Calificacion Arrendado', 157),
(8, '2012-12-16 17:45:35', 'Calificacion Arrendado', 158),
(8, '2012-12-16 17:45:55', 'Consulta Arrendado', 159),
(8, '2012-12-16 17:47:11', 'Consulta Arrendado', 160),
(8, '2012-12-16 17:48:10', 'Calificacion Arrendado', 161),
(8, '2012-12-16 17:48:21', 'Consulta Arrendado', 162),
(8, '2012-12-16 17:48:41', 'Calificacion Arrendado', 163),
(8, '2012-12-16 17:48:55', 'Consulta Arrendado', 164),
(8, '2012-12-16 17:49:25', 'Consulta Arrendado', 165),
(8, '2012-12-16 17:51:17', 'Insercion Arrendado', 166),
(8, '2012-12-16 17:55:49', 'Consulta Arrendado', 167),
(8, '2012-12-16 18:00:25', 'Edición Arrendado', 168),
(8, '2012-12-16 18:00:47', 'Consulta Arrendado', 169),
(8, '2012-12-16 18:01:21', 'Edición Arrendado', 170),
(8, '2012-12-16 18:04:50', 'Edición Arrendado', 171),
(8, '2012-12-16 18:05:09', 'Consulta Arrendado', 172);

-- --------------------------------------------------------

--
-- Table structure for table `arrendado`
--

CREATE TABLE IF NOT EXISTS `arrendado` (
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `domicilio_actual` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_casa` int(30) DEFAULT NULL,
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
  `arr_pagos` int(1) DEFAULT NULL,
  `arr_propiedad_actual` int(1) DEFAULT NULL,
  `arr_propiedad_anterior` int(1) DEFAULT NULL,
  `arr_general` int(1) DEFAULT NULL,
  `comentario` varchar(500) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `curp` (`curp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
  `domicilio` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono_particular` int(30) DEFAULT NULL,
  `telefono_personal` int(30) DEFAULT NULL,
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
  PRIMARY KEY (`curp`),
  KEY `clave_escolaridad` (`clave_escolaridad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

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
  `emp_calif_anterior` int(1) DEFAULT NULL,
  `comentario` varchar(500) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curp` (`curp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `emp_calif`
--


-- --------------------------------------------------------

--
-- Table structure for table `escolaridad`
--

CREATE TABLE IF NOT EXISTS `escolaridad` (
  `clave` int(10) NOT NULL,
  `grado_escolar` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `lugar_estudio` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `img_certificado_escolar` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `img_cedula_profesional` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
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
  PRIMARY KEY (`id`),
  KEY `curp` (`curp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gestiones`
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
  `domicilio` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
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
