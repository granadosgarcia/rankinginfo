-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2012 at 03:03 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=200 ;

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
(8, '2012-12-16 18:05:09', 'Consulta Arrendado', 172),
(8, '2012-12-16 18:22:01', 'Consulta Arrendado', 173),
(8, '2012-12-16 18:23:59', 'Consulta Arrendado', 174),
(8, '2012-12-16 18:24:10', 'Consulta Arrendado', 175),
(8, '2012-12-16 23:31:07', 'Insercion Arrendado', 176),
(8, '2012-12-16 23:36:35', 'Consulta Arrendado', 177),
(8, '2012-12-16 23:39:50', 'Consulta Arrendado', 178),
(8, '2012-12-16 23:39:52', 'Consulta Arrendado', 179),
(8, '2012-12-16 23:42:16', 'Consulta Arrendado', 180),
(8, '2012-12-16 23:43:26', 'Consulta Arrendado', 181),
(8, '2012-12-16 23:43:36', 'Consulta Arrendado', 182),
(8, '2012-12-16 23:51:10', 'Consulta Arrendado', 183),
(8, '2012-12-16 23:56:02', 'Consulta Arrendado', 184),
(8, '2012-12-16 23:56:40', 'Consulta Arrendado', 185),
(8, '2012-12-16 23:59:03', 'Consulta Arrendado', 186),
(8, '2012-12-18 20:45:37', 'Insercion Empleado', 187),
(8, '2012-12-18 20:47:09', 'Edicion Empleado', 188),
(8, '2012-12-18 20:52:37', 'Edicion Empleado', 189),
(8, '2012-12-18 20:55:45', 'Calificacion Empleado', 190),
(8, '2012-12-18 20:55:59', 'Consulta Empleado', 191),
(8, '2012-12-18 20:56:01', 'Consulta Empleado', 192),
(8, '2012-12-18 20:56:07', 'Consulta Empleado', 193),
(8, '2012-12-18 20:56:40', 'Consulta Empleado', 194),
(8, '2012-12-18 20:58:12', 'Consulta Empleado', 195),
(8, '2012-12-18 20:58:41', 'Consulta Empleado', 196),
(8, '2012-12-18 21:00:03', 'Consulta Empleado', 197),
(8, '2012-12-18 21:00:45', 'Consulta Empleado', 198),
(8, '2012-12-18 21:02:13', 'Consulta Empleado', 199);

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
('Ã¡cÃ©ntÃ³', 'Ã¡cÃ©ntÃ³', 'Ã¡cÃ©ntÃ³', 'Ã¡cÃ©ntÃ³', 8884589, 'Ã¡cÃ©ntÃ³', '/rankinginfo/uploads/img12/Ã¡cÃ©ntÃ³/ife.jpg', 'Ã¡cÃ©ntÃ³', 'Ã¡cÃ©ntÃ³', NULL, NULL, NULL, NULL, 'Ã¡cÃ©ntÃ³', 'Ã¡cÃ©ntÃ³', 'Ã¡cÃ©ntÃ³', 'Ã¡cÃ©ntÃ³', 9995499, 'Ã¡cÃ©ntÃ³', '/rankinginfo/uploads/img12/Ã¡cÃ©ntÃ³/comprobante_domicilio.jpg', '/rankinginfo/uploads/img12/Ã¡cÃ©ntÃ³/foto.jpg'),
('Kevin', 'Mendez', 'Tellez', '13 B sur 7737 San Jose Mayorazgo', 8884588, 'Casado', '/rankinginfo/uploads/img12/BEML920313HCMLNS09/ife.jpg', 'Abraham GonzÃ¡lez FarÃ­as', 'Martin Granados GarcÃ­a', NULL, NULL, NULL, NULL, '13 B sur 7737 San Jose Mayorazgo', 'BEML920313HCMLNS09', 'Irvin Mendez Tellez', '13 B sur 7737 San Jose Mayorazgo', 8884588, 'Maria Martita Jimenez', '/rankinginfo/uploads/img12/BEML920313HCMLNS09/comprobante_domicilio.jpg', '/rankinginfo/uploads/img12/BEML920313HCMLNS09/foto.jpg'),
('JÃ³LOÃ¡Ã©l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nerfnow', NULL, NULL, NULL, NULL, NULL, NULL),
('Prueba1', 'Prueba1', 'Prueba1', 'Prueba1', 23452, 'Prueba1', '/rankinginfo/uploads/img12/Prueba1/ife.jpg', 'Prueba1', 'Prueba1', NULL, NULL, NULL, NULL, 'Prueba1', 'Prueba1', 'Prueba1', 'Prueba1', 23423, 'Prueba1', '/rankinginfo/uploads/img12/Prueba1/comprobante_domicilio.jpg', '/rankinginfo/uploads/img12/Prueba1/foto.jpg');

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

INSERT INTO `arr_calif` (`curp`, `arr_pagos`, `arr_propiedad_actual`, `arr_propiedad_anterior`, `arr_general`, `comentario`, `fecha`, `id`) VALUES
('BEML920313HCMLNS09', 2, 4, 2, 3, 'sdfjk acetÃ³ Ã¡cÃ©ntÃ³ jo jojo deberia de terner mas experiencia, pero no me gusto entonces y por eso bla bla bal bla lbalblaldsklfjsadÃ±klfjÃ±skdljfklÃ±adjsfklÃ±jiohji0`', '2012-12-16', 5),
('BEML920313HCMLNS09', 4, 1, 1, 5, 'espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera espera ', '2012-12-16', 6),
('BEML920313HCMLNS09', 0, 0, 0, 0, 'no tengo opinion', '2012-12-16', 7),
('Ã¡cÃ©ntÃ³', 3, 0, 0, 0, '', '2012-12-16', 8),
('Ã¡cÃ©ntÃ³', 0, 0, 0, 0, 'asdf', '2012-12-16', 9);

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

INSERT INTO `empleado` (`curp`, `nombres`, `apellido_paterno`, `apellido_materno`, `domicilio`, `telefono_particular`, `telefono_personal`, `estado_civil`, `img_ife`, `img_comprobante_domicilio`, `img_comprobante_trabajo`, `clave_escolaridad`, `nombre_conyuge`, `patron_anterior`, `patron_actual`, `responsable_actual`, `telefono_patronactual`, `domicilio_patronactual`, `telefono_patronanterior`, `domicilio_patronanterior`, `img_foto`, `empleo_anterior`, `tiempo_trabajoanterior`, `habilidades`) VALUES
('kasdcurpkevinsadÃ±lkfj', 'Kevin', 'Mendez', 'Tellez', '13 B sur 7737 San Jose Mayorazgo', 8884588, 8884588, 'Casado', '/rankinginfo/uploads/img21/kasdcurpkevinsadÃ±lkfj/ife.jpg', '/rankinginfo/uploads/img21/kasdcurpkevinsadÃ±lkfj/comprobante_domicilio.jpg', '/rankinginfo/uploads/img21/kasdcurpkevinsadÃ±lkfj/comprobante_trabajo.jpg', 1, 'Maria Martita Jimenez', 'Abraham GonzÃ¡lez FarÃ­as', 'Martin Granados GarcÃ­a', 'Irvin Mendez Tellez', 8884588, 'Atlixcayotl numero 4d bla bla', 8884588, '13 B sur 7737 San Jose Mayorazgo', '/rankinginfo/uploads/img21/kasdcurpkevinsadÃ±lkfj/foto.jpg', 'Arrendador', '2 aÃ±os', 'Todas las hablidades posibles por existir y por haber en un empleado');

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

INSERT INTO `emp_calif` (`id`, `curp`, `emp_desempeno`, `emp_calif_anterior`, `comentario`, `fecha`) VALUES
(1, 'kasdcurpkevinsadÃ±lkfj', 4, 2, 'safdsaf', '2012-12-18');

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
(1, 'Ingeniero en Ciencias de la ComputaciÃ³n', 'Finlandia ITESM etc', '/rankinginfo/uploads/img21/kasdcurpkevinsadÃ±lkfj/img_certificado_escolar.jpg', '/rankinginfo/uploads/img21/kasdcurpkevinsadÃ±lkfj/img_cedula_profesional.jpg');

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
  PRIMARY KEY (`id`),
  KEY `curp` (`curp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `appellido_materno` varchar(300) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `curp` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(20) DEFAULT NULL,
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
