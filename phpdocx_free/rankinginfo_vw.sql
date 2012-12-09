-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2012 at 07:08 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

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

INSERT INTO `arrendado` (`nombre`, `apellido_paterno`, `apellido_materno`, `domicilio_actual`, `telefono_casa`, `estado_civil`, `img_ife`, `arrendador_actual`, `arrendador_anterior`, `domicilio_anterior`, `curp`, `nombre_aval`, `domicilio_aval`, `telefono_aval`, `nombre_conyuge`, `img_comprobante_domicilio`, `img_foto`) VALUES
('asf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1qwe89', NULL, NULL, NULL, NULL, NULL, NULL),
('Jarja', 'Hernandez', 'Pudin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ASDF', NULL, NULL, NULL, NULL, NULL, NULL),
('akfadsfkas asfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdf912', NULL, NULL, NULL, NULL, NULL, NULL),
('asdf', 'asdfads', 'asdf', NULL, NULL, NULL, NULL, 'afd', 'asdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 0, 'asdfasdf', NULL, NULL),
('asdf1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdffsadf1', NULL, NULL, NULL, NULL, NULL, NULL),
('asdfwqe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdfwqe123', NULL, NULL, NULL, NULL, NULL, NULL),
('Abraham', 'Gonzalez', 'Farias', 'Mayorazgo 123', 98888888, 'Soltero', '/rankinginfo/uploads/img12/gonzalez123p/ife.jpeg', 'ASA', 'Vitalsound', 'Lomas 78', 'gonzalez123p', 'Kevin Mendez', 'Villas Puebla 123', 123489123, 'Mal', '/rankinginfo/uploads/img12/gonzalez123p/comprobante_domicilio.jpeg', '/rankinginfo/uploads/img12/gonzalez123p/foto.jpeg'),
('Jorge', 'Abigai', 'Peredo', NULL, 782934, 'Casado', NULL, NULL, NULL, NULL, 'Jorge2234123', NULL, NULL, NULL, NULL, NULL, NULL),
('Kevin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KEVIN12', NULL, NULL, NULL, NULL, NULL, NULL),
('Mateo', 'Lopez', 'Hernandez', 'Villas 1234', 1234567890, 'Soltero', '/rankinginfo/uploads/img12/mateocurp123r/ife.jpeg', 'Honda', 'KFC', 'Lomas 435', 'mateocurp123r', 'Kevin Mendez', 'Casa 931', 12345123, 'Lol', '/rankinginfo/uploads/img12/mateocurp123r/comprobante_domicilio.jpeg', '/rankinginfo/uploads/img12/mateocurp123r/foto.jpeg'),
('Kevin', 'Mendez', 'Tellez', 'Villas 123', 12341233, 'Soltero', '/rankinginfo/uploads/img12/metk1234123hts/ife.jpeg', 'Volkswagen', 'Honda', 'Villas 321', 'metk1234123hts', 'Abraham Gonzalez', 'Mayorazgo 123', 98888888, 'Sofia Vergara', '/rankinginfo/uploads/img12/metk1234123hts/comprobante_domicilio.jpeg', '/rankinginfo/uploads/img12/metk1234123hts/foto.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `arr_calif`
--

CREATE TABLE IF NOT EXISTS `arr_calif` (
  `curp` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `clave` int(10) NOT NULL,
  PRIMARY KEY (`curp`,`clave`),
  KEY `clave` (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `arr_calif`
--

INSERT INTO `arr_calif` (`curp`, `clave`) VALUES
('gonzalez123p', 1),
('gonzalez123p', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `calificacion`
--

INSERT INTO `calificacion` (`clave`, `arr_pagos`, `arr_propiedad_actual`, `arr_propiedad_anterior`, `arr_general`, `emp_desempeno`, `comentario`, `emp_calif_anterior`, `fecha`) VALUES
(1, 5, 4, 5, 5, NULL, 'PESIMO', NULL, '2012-10-22'),
(2, 1, 0, 5, 0, NULL, '', NULL, '2012-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `cliente_vw`
--

CREATE TABLE IF NOT EXISTS `cliente_vw` (
  `pais` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `numero_exterior` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `numero_interior` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `curp` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `codigo_postal` int(10) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `poblacion` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estado` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_ultimo_pago` date DEFAULT NULL,
  `semanas_atraso` int(10) DEFAULT NULL,
  `ultimo_abono` int(100) DEFAULT NULL,
  `fecha_ultima_actualizacion` date DEFAULT NULL,
  `fecha_ultima_visita` date DEFAULT NULL,
  `saldo` int(20) DEFAULT NULL,
  `saldo_atrasado` int(20) DEFAULT NULL,
  `ultimo_abono_moratorio` int(20) DEFAULT NULL,
  `saldo_moratorio` int(20) DEFAULT NULL,
  `saldo_total` int(30) DEFAULT NULL,
  `id_gestion` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `curp` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombres` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_materno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `domicilio` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `telefono_particular` int(30) NOT NULL,
  `telefono_personal` int(30) NOT NULL,
  `estado_civil` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `img_ife` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `img_comprobante_domicilio` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_comprobante_trabajo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `clave_escolaridad` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_conyuge` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `patron_anterior` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `patron_actual` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `responsable_actual` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono_patronactual` int(30) NOT NULL,
  `domicilio_patronactual` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `telefono_patronanterior` int(30) NOT NULL,
  `domicilio_patronanterior` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `img_foto` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `empleo_anterior` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `tiempo_trabajoanterior` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `habilidades` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`curp`),
  KEY `clave_escolaridad` (`clave_escolaridad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `emp_calif`
--

CREATE TABLE IF NOT EXISTS `emp_calif` (
  `curp` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `clave` int(10) NOT NULL,
  PRIMARY KEY (`curp`,`clave`),
  KEY `clave` (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `gestion_vw`
--

CREATE TABLE IF NOT EXISTS `gestion_vw` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `contenido` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `prueba`
--

INSERT INTO `prueba` (`nombre`, `apellido_paterno`) VALUES
('Jorge', 'Peredo'),
('Jorge Mateo', 'Hernandez');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `nombre_usuario`, `password`, `privilegios`, `img_foto`) VALUES
(7, 'Abraham', 'abr', '$1$wyys2CHb$lB7hLsaCu/.js9tewNbJr1', 10, '');

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
  ADD CONSTRAINT `arr_calif_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `arrendado` (`curp`),
  ADD CONSTRAINT `arr_calif_ibfk_2` FOREIGN KEY (`clave`) REFERENCES `calificacion` (`clave`);

--
-- Constraints for table `emp_calif`
--
ALTER TABLE `emp_calif`
  ADD CONSTRAINT `emp_calif_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `empleado` (`curp`),
  ADD CONSTRAINT `emp_calif_ibfk_2` FOREIGN KEY (`clave`) REFERENCES `calificacion` (`clave`);

--
-- Constraints for table `escolaridad`
--
ALTER TABLE `escolaridad`
  ADD CONSTRAINT `escolaridad_ibfk_1` FOREIGN KEY (`clave`) REFERENCES `empleado` (`clave_escolaridad`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
