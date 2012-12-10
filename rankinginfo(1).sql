-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2012 at 07:39 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `actividades`
--

INSERT INTO `actividades` (`id_usuario`, `fecha`, `actividad`, `id`) VALUES
(8, '2012-12-10 13:37:23', 'Consulta Empleado', 1),
(8, '2012-12-10 13:37:27', 'Consulta Empleado', 2),
(8, '2012-12-10 13:37:28', 'Consulta Empleado', 3);

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

INSERT INTO `arrendado` (`nombre`, `apellido_paterno`, `apellido_materno`, `domicilio_actual`, `telefono_casa`, `estado_civil`, `img_ife`, `arrendador_actual`, `arrendador_anterior`, `domicilio_arrendador_actual`, `telefono_arrendador_actual`, `telefono_arrendador_anterior`, `domicilio_arrendador_anterior`, `domicilio_anterior`, `curp`, `nombre_aval`, `domicilio_aval`, `telefono_aval`, `nombre_conyuge`, `img_comprobante_domicilio`, `img_foto`) VALUES
('kevin1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kevin1', NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arr_calif`
--


-- --------------------------------------------------------

--
-- Table structure for table `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `clave` int(10) NOT NULL AUTO_INCREMENT,
  `arr_pagos` int(3) DEFAULT NULL,
  `arr_propiedad_actual` int(3) DEFAULT NULL,
  `arr_propiedad_anterior` int(3) DEFAULT NULL,
  `arr_general` int(3) DEFAULT NULL,
  `emp_desempeno` int(3) DEFAULT NULL,
  `comentario` varchar(8000) COLLATE latin1_spanish_ci DEFAULT NULL,
  `emp_calif_anterior` int(10) DEFAULT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `calificacion`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`curp`, `nombres`, `apellido_paterno`, `apellido_materno`, `domicilio`, `telefono_particular`, `telefono_personal`, `estado_civil`, `img_ife`, `img_comprobante_domicilio`, `img_comprobante_trabajo`, `clave_escolaridad`, `nombre_conyuge`, `patron_anterior`, `patron_actual`, `responsable_actual`, `telefono_patronactual`, `domicilio_patronactual`, `telefono_patronanterior`, `domicilio_patronanterior`, `img_foto`, `empleo_anterior`, `tiempo_trabajoanterior`, `habilidades`) VALUES
('julian', 'kevin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('kevin', 'kevin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `emp_calif`
--

INSERT INTO `emp_calif` (`id`, `curp`, `emp_desempeno`, `emp_calif_anterior`, `comentario`, `fecha`) VALUES
(1, 'julian', 3, 0, 'julian', '2012-12-10'),
(2, 'kevin', 2, 4, 'kevin', '2012-12-10');

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

INSERT INTO `escolaridad` (`clave`, `grado_escolar`, `lugar_estudio`, `img_certificado_escolar`, `img_cedula_profesional`) VALUES
(1, '', '', '', ''),
(2, '', '', '', '');

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
