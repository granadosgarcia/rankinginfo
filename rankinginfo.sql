-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2012 at 07:15 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=141 ;

--
-- Dumping data for table `actividades`
--

INSERT INTO `actividades` (`id_usuario`, `fecha`, `actividad`, `id`) VALUES
(8, '2012-12-16 01:01:58', 'Consulta Arrendado', 128),
(8, '2012-12-16 01:02:00', 'Consulta Arrendado', 129),
(8, '2012-12-16 01:02:00', 'Consulta Arrendado', 130),
(8, '2012-12-16 01:05:40', 'Insercion Empleado', 131),
(8, '2012-12-16 01:07:17', 'Calificacion Empleado', 132),
(8, '2012-12-16 01:07:41', 'Calificacion Empleado', 133),
(8, '2012-12-16 01:07:49', 'Consulta Empleado', 134),
(8, '2012-12-16 01:07:56', 'Consulta Empleado', 135),
(8, '2012-12-16 01:08:14', 'Consulta Empleado', 136),
(8, '2012-12-16 01:10:26', 'Insercion Arrendado', 137),
(8, '2012-12-16 01:10:54', 'Calificacion Arrendado', 138),
(8, '2012-12-16 01:11:07', 'Calificacion Arrendado', 139),
(8, '2012-12-16 01:11:16', 'Consulta Arrendado', 140);

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
('Kevin', 'Mendez', 'Tellez', '13 B sur 7737 San', 903290, 'Casado', '/rankinginfo/uploads/img12/092390jksdfkevin2309k/ife.jpg', 'Jose Merenges Altimoa', 'Martin Granados GarcÃ­a', NULL, NULL, NULL, NULL, '2938 del maria finlandia rosario', '092390jksdfkevin2309k', 'Irvin Mendez Tellez', '09kidfsj del rosario en canada', 903209, 'Maria Juanita Jimenez', '/rankinginfo/uploads/img12/092390jksdfkevin2309k/comprobante_domicilio.jpg', '/rankinginfo/uploads/img12/092390jksdfkevin2309k/foto.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `arr_calif`
--

INSERT INTO `arr_calif` (`curp`, `arr_pagos`, `arr_propiedad_actual`, `arr_propiedad_anterior`, `arr_general`, `comentario`, `fecha`, `id`) VALUES
('092390jksdfkevin2309k', 5, 2, 1, 1, 'Me gustaria tenerlo de arrendado', '2012-12-16', 3),
('092390jksdfkevin2309k', 3, 2, 2, 2, 'kevinasdÃ±fj', '2012-12-16', 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`curp`, `nombres`, `apellido_paterno`, `apellido_materno`, `domicilio`, `telefono_particular`, `telefono_personal`, `estado_civil`, `img_ife`, `img_comprobante_domicilio`, `img_comprobante_trabajo`, `clave_escolaridad`, `nombre_conyuge`, `patron_anterior`, `patron_actual`, `responsable_actual`, `telefono_patronactual`, `domicilio_patronactual`, `telefono_patronanterior`, `domicilio_patronanterior`, `img_foto`, `empleo_anterior`, `tiempo_trabajoanterior`, `habilidades`) VALUES
('92390Kevinfsdasdf', 'Kevin', 'Mendez', 'Tellez', 'Atlixco de la concepcion del rosario kevin', 923818, 2147483647, 'Casado', '/rankinginfo/uploads/img21/92390Kevinfsdasdf/ife.jpg', '/rankinginfo/uploads/img21/92390Kevinfsdasdf/comprobante_domicilio.jpg', '/rankinginfo/uploads/img21/92390Kevinfsdasdf/comprobante_trabajo.jpg', 13, 'Maria Juanita Jimenez', 'Martin Granados GarcÃ­a', 'Abraham Gonzalez Farias', 'Irvin Mendez Tellez', 9230909, '13 B sur 7737 San Jose Mayorazgo', 92384829, 'Atlixcayotlo lol lol cp.3829 numero 13', '/rankinginfo/uploads/img21/92390Kevinfsdasdf/foto.jpg', 'Like a Bus', '9 aÃ±os', 'Comer sin parar hasta morir');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `emp_calif`
--

INSERT INTO `emp_calif` (`id`, `curp`, `emp_desempeno`, `emp_calif_anterior`, `comentario`, `fecha`) VALUES
(3, '92390Kevinfsdasdf', 1, 4, 'Excelente Trabajador Contratelo sin pensarlo', '2012-12-16'),
(4, '92390Kevinfsdasdf', 2, 4, 'Deseso q vuelva a trabajar ', '2012-12-16');

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
(13, 'Posgrado', 'ITesm', '/rankinginfo/uploads/img21/92390Kevinfsdasdf/img_certificado_escolar.jpg', '/rankinginfo/uploads/img21/92390Kevinfsdasdf/img_cedula_profesional.jpg');

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
  `fecha` datetime NOT NULL,
  `tipo_gestion` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `comentario` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `etapa_procesal` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `etapa_juicio` varchar(300) DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vw`
--

INSERT INTO `vw` (`fecha`, `tipo_gestion`, `comentario`, `etapa_procesal`, `etapa_juicio`, `id`) VALUES
('2012-12-16 00:55:17', 'Opcion 2', NULL, 'Opcion 3', 'Opcion 3', 1),
('2012-12-16 00:55:56', 'Opcion 4', NULL, 'Opcion 2', 'Opcion 1', 2),
('2012-12-16 00:57:38', NULL, 'sadfÃ±ladjsflÃ±kadjsfklÃ±ajsdf', NULL, NULL, 3),
('2012-12-16 01:13:51', 'Opcion 3', 'fghcjfgkf', 'Opcion 3', 'Opcion 3', 4),
('2012-12-16 01:13:57', NULL, 'sdafadsf', NULL, 'Opcion 2', 5);

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
