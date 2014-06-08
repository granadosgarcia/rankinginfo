-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2014 at 01:26 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=31 ;

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
  `telefono_personal` int(10) DEFAULT NULL,
  PRIMARY KEY (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `errores_juicios`
--

CREATE TABLE IF NOT EXISTS `errores_juicios` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `input` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `explicacion` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `id_juicio` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_juicio` (`id_juicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

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
  `expedientillo` varchar(150) COLLATE latin1_spanish_ci DEFAULT NULL,
  `abogado_patrono_nombres` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `abogado_patrono_apellido_paterno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `abogado_patrono_apellido_materno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `persona_moral_nombres` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `persona_moral_apellido_paterno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `persona_moral_apellido_materno` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`expediente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=11 ;

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
-- Constraints for table `errores_juicios`
--
ALTER TABLE `errores_juicios`
  ADD CONSTRAINT `error_juicio01` FOREIGN KEY (`id_juicio`) REFERENCES `relacion_juicios` (`expediente`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
