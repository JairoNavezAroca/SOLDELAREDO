-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2019 a las 06:00:01
-- Versión del servidor: 8.0.13-4
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kQSXCJnc3v`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Actividades`
--

CREATE TABLE `Actividades` (
  `idActividad` int(11) NOT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `idTarea` int(11) DEFAULT NULL,
  `idProceso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ActividadesOrdenTrab`
--

CREATE TABLE `ActividadesOrdenTrab` (
  `idActividad` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `importeUnitario` decimal(18,2) DEFAULT NULL,
  `numero` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Amenazas`
--

CREATE TABLE `Amenazas` (
  `idAmenaza` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ruc` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `nombre`, `ruc`) VALUES(1, 'Administración y Finanzas', '20132377783');
INSERT INTO `area` (`idarea`, `nombre`, `ruc`) VALUES(2, 'Recursos Humanos', '20132377783');
INSERT INTO `area` (`idarea`, `nombre`, `ruc`) VALUES(3, 'Campo', '20132377783');
INSERT INTO `area` (`idarea`, `nombre`, `ruc`) VALUES(4, 'Fabrica', '20132377783');
INSERT INTO `area` (`idarea`, `nombre`, `ruc`) VALUES(5, 'Comercialización y Ventas', '20132377783');
INSERT INTO `area` (`idarea`, `nombre`, `ruc`) VALUES(6, 'Gerencia Inmobiliaria', '20132377783');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `idasistencia` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `horaEntrada` varchar(20) DEFAULT NULL,
  `horaSalida` varchar(20) DEFAULT NULL,
  `DniPersonal` varchar(8) DEFAULT NULL,
  `Extras` decimal(5,2) DEFAULT NULL,
  `HorasMenos` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(1, '2019-11-19', 'A', '07:06:52', '23:06:52', '19893998', '7.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(2, '2019-11-18', 'A', '07:06:52', '23:06:52', '19893998', '7.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(3, '2019-11-17', 'A', '07:06:52', '23:06:52', '19893998', '7.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(4, '2019-11-16', 'A', '07:06:52', '23:06:52', '19893998', '7.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(5, '2019-11-15', 'A', '07:06:52', '15:06:52', '19893998', '0.00', '-1.00');
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(6, '2019-11-14', 'A', '07:06:52', '15:06:52', '19893998', '0.00', '-1.00');
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(7, '2019-11-13', 'A', '07:06:52', '16:06:52', '19893998', '0.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(8, '2019-11-19', 'A', '07:06:52', '24:06:52', '19893998', '8.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(9, '2019-11-18', 'A', '07:06:52', '23:06:52', '19893998', '7.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(10, '2019-11-17', 'A', '07:06:52', '23:06:52', '19893998', '7.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(11, '2019-11-16', 'A', '07:06:52', '23:06:52', '19893998', '7.00', NULL);
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(12, '2019-11-15', 'A', '07:06:52', '15:06:52', '19893998', '0.00', '-1.00');
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(13, '2019-11-14', 'A', '07:06:52', '15:06:52', '19893998', '0.00', '-1.00');
INSERT INTO `asistencias` (`idasistencia`, `fecha`, `tipo`, `horaEntrada`, `horaSalida`, `DniPersonal`, `Extras`, `HorasMenos`) VALUES(14, '2019-11-13', 'A', '07:06:52', '16:06:52', '19893998', '0.00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficios`
--

CREATE TABLE `beneficios` (
  `idbeneficio` int(11) NOT NULL,
  `descripcion` varchar(25) DEFAULT NULL,
  `DniPersonal` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

CREATE TABLE `capacitaciones` (
  `idcapacitaciones` int(11) NOT NULL,
  `idarea` int(11) DEFAULT NULL,
  `descripcion` text,
  `capacitador` text,
  `fecha` date DEFAULT NULL,
  `motivo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(1, 1, 'Metodos para el levantado de datos y análisis', 'Gerente General', '2019-11-21', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(2, 1, 'Planes de negocios en una empresa agricola', 'Gerente General ', '2019-11-22', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(3, 2, 'Gestion de recursos humanos', 'Encargado del area RR.HH', '2019-11-23', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(4, 3, 'Técnicas para la coservación de la caña', 'Jefe de control de calidad', '2019-11-24', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(5, 4, 'Elaboracion del azúcar', 'Jefe de planta', '2019-11-25', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(6, 5, 'Nuevos metodos de marketing', 'Jefe del Area de Comercialización y Ventas', '2019-11-26', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(7, 5, 'Publicidad Boca a Boca', 'Jefe del area de Comercialización y Ventas', '2019-11-27', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(8, 1, 'Capacitacion ley tributaria', 'Gerente General', '2019-11-28', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(9, 3, 'Técnicas de cosecha', 'Jefe de control de calidad', '2019-11-29', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(10, 4, 'Seguridad Industrial', 'SeguryIndustria', '2019-11-30', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(11, 4, 'Prevención de control de incendios en la industria', 'SeguryIndustria', '2019-12-01', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(12, 6, 'Lugares estrategicos para la construcción de nuevas plantas industriales ', 'Gerente General', '2019-12-02', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(13, 2, 'Importancia del trabajo en grupo', 'Jefe de RR.HH', '2019-11-21', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(14, 3, 'Simulacro de evacuación', 'SeguryIndustria', '2019-11-21', '');
INSERT INTO `capacitaciones` (`idcapacitaciones`, `idarea`, `descripcion`, `capacitador`, `fecha`, `motivo`) VALUES(15, 3, 'Identificaición de peligros y riesgos', 'SeguryIndustria', '2019-11-21', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `idCarta` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `annio` date NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `idProyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CriteriosDeCalificacion`
--

CREATE TABLE `CriteriosDeCalificacion` (
  `idcriterio` int(11) NOT NULL,
  `criterio` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `peso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `CriteriosDeCalificacion`
--

INSERT INTO `CriteriosDeCalificacion` (`idcriterio`, `criterio`, `descripcion`, `peso`) VALUES(11, 'NO DISEÑADO', 'Las actividades / métodos demuestran que no se tiene el requisito y/o no se han bosquejado su implementación o el requisito no es aplicable bajo parámetros de exclusión.\r\n', 0);
INSERT INTO `CriteriosDeCalificacion` (`idcriterio`, `criterio`, `descripcion`, `peso`) VALUES(12, 'PARCIALMENTE DISEÑADO', 'Las actividades / métodos demuestran que se tiene el requisitos definido, pero éste no es del todo conforme con el\r\nrequisitos de la Norma ISO 9001:2015\r\n', 25);
INSERT INTO `CriteriosDeCalificacion` (`idcriterio`, `criterio`, `descripcion`, `peso`) VALUES(13, 'DISEÑADO ', 'Los métodos son conformes con los requisitos de la Norma\r\nISO 9001:2015, pero sin evidencias de aplicación.\r\n', 50);
INSERT INTO `CriteriosDeCalificacion` (`idcriterio`, `criterio`, `descripcion`, `peso`) VALUES(14, 'PARCIALMENTE IMPLEMENTADO', 'Las actividades / métodos son conformes con el requisito de la Norma ISO 9001:2015, pero con pocas evidencias de\r\naplicación y/o de evidenciar no es continua.', 75);
INSERT INTO `CriteriosDeCalificacion` (`idcriterio`, `criterio`, `descripcion`, `peso`) VALUES(15, 'COMPLETAMENTE IMPLEMENTADO', 'Las actividades / métodos son conformes con el requisito de la Norma ISO 9001:2015, y se cuenta con evidencias de\r\naplicación permanentes.', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Debilidades`
--

CREATE TABLE `Debilidades` (
  `idDebilidad` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleevrendimiento`
--

CREATE TABLE `detalleevrendimiento` (
  `IdDetalleEvRendimiento` int(11) NOT NULL,
  `IdEvRendimiento` int(11) NOT NULL,
  `Observacion` text,
  `Porcentaje` decimal(4,1) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleevrendimiento`
--

INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(1, 1, '<p style=\"text-align: center; \">Detalle de Observación Realizada el 04/11/2019</p><p>El señor Alfaro Perez, Esteban, tiene un avance considerable en sus indicadores de productividad, los cuales fueron aumentando cada mes a pasos agigantados, a su última evaluación, la cual fue el 04/11/2019 se registró que tiene un avance del 86% al 92% de productividad respecto a sus meses anteriores.</p>', '92.0', '2019-11-20 23:11:11', b'0');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(2, 2, '1', '23.0', '2019-11-20 23:11:20', b'0');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(3, 2, '1', '89.0', '2019-11-20 23:11:29', b'1');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(4, 3, '.', '95.0', '2019-11-20 23:11:45', b'1');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(5, 1, '<p style=\"text-align: center; \">Detalle de Observación Realizada el 04/11/2019</p><p>El señor Alfaro Perez, Esteban, tiene un avance considerable en sus indicadores de productividad, los cuales fueron aumentando cada mes a pasos agigantados, a su última evaluación, la cual fue el 04/11/2019 se registró que tiene un avance del 86% al 94% de productividad respecto a sus meses anteriores.</p>', '94.0', '2019-11-20 23:11:58', b'1');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(6, 4, '98%', '98.0', '2019-11-22 01:27:28', b'0');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(7, 4, '<p style=\"text-align: center; \">Detalle de Observación Realizada el 04/11/2019</p><p>La señorita Jennifer Olivares, Esteban, tiene un avance considerable en sus indicadores de productividad, los cuales fueron aumentando cada mes a pasos agigantados, a su última evaluación, la cual fue el 04/11/2019 se registró que tiene un avance del 86% al 92% de productividad respecto a sus meses anteriores.</p>', '98.0', '2019-11-22 01:29:19', b'0');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(8, 4, '<p style=\"text-align: center; \">Detalle de Observación Realizada el 04/11/2019</p><p>La señorita Jennifer Olivares, Esteban, tiene un avance considerable en sus indicadores de productividad, los cuales fueron aumentando cada mes a pasos agigantados, a su última evaluación, la cual fue el 04/11/2019 se registró que tiene un avance del 86% al 92% de productividad respecto a sus meses anteriores.</p>', '92.0', '2019-11-22 01:30:52', b'1');
INSERT INTO `detalleevrendimiento` (`IdDetalleEvRendimiento`, `IdEvRendimiento`, `Observacion`, `Porcentaje`, `Fecha`, `Estado`) VALUES(9, 5, 'detalle', '98.0', '2019-11-22 13:39:36', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleordenoptimizacion`
--

CREATE TABLE `detalleordenoptimizacion` (
  `IdDetalleOrdenOptimizacion` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Detalle` text,
  `Estado` bit(1) DEFAULT NULL,
  `FechaRealizar` date DEFAULT NULL,
  `Respuesta` varchar(30) DEFAULT NULL,
  `IdOrdenOptimizacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleordenoptimizacion`
--

INSERT INTO `detalleordenoptimizacion` (`IdDetalleOrdenOptimizacion`, `Fecha`, `Detalle`, `Estado`, `FechaRealizar`, `Respuesta`, `IdOrdenOptimizacion`) VALUES(1, '2019-11-20 23:21:05', '', b'0', '2019-11-21', 'Esperando confirmación', 1);
INSERT INTO `detalleordenoptimizacion` (`IdDetalleOrdenOptimizacion`, `Fecha`, `Detalle`, `Estado`, `FechaRealizar`, `Respuesta`, `IdOrdenOptimizacion`) VALUES(2, '2019-11-20 23:22:04', '<p>Se acepta la propuesta de mejora, y se decidió que se llevará a cabo el día 7 de diciembre del presente año.</p>', b'1', '2019-12-07', 'Aprobado, por realizar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DetallePedido`
--

CREATE TABLE `DetallePedido` (
  `numero` char(10) NOT NULL,
  `codInsumo` char(4) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DetalleProduccion`
--

CREATE TABLE `DetalleProduccion` (
  `numero` char(10) NOT NULL,
  `codInsumo` char(4) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepropmejora`
--

CREATE TABLE `detallepropmejora` (
  `IdDetallePropMejora` int(11) NOT NULL,
  `Detalle` text,
  `IdPropMejora` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Estado` bit(1) DEFAULT NULL,
  `Titulo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallepropmejora`
--

INSERT INTO `detallepropmejora` (`IdDetallePropMejora`, `Detalle`, `IdPropMejora`, `Fecha`, `Estado`, `Titulo`) VALUES(1, '<p>El presente plan de mejora consiste básicamente en cambiar la localización del área recibimiento de la caña de azúcar, en la cual se recoge dicha caña del camión recolector y se guarda en contenedores para ser trasladadas aproximadamente 45 metros; la idea de la propuesta es otorgar permiso al camión recolector para que pueda entrar y dejar mucho más cerca la caña de azúcar, debido a que las dimensiones de la instalación lo permiten, se espera un resultado aprobatorio.</p>', 1, '2019-11-20 23:19:13', b'0', 'Propuesta de mejora en el área de producción');
INSERT INTO `detallepropmejora` (`IdDetallePropMejora`, `Detalle`, `IdPropMejora`, `Fecha`, `Estado`, `Titulo`) VALUES(2, '<p>El presente plan de mejora consiste básicamente en cambiar la localización del área recibimiento de la caña de azúcar, en la cual se recoge dicha caña del camión recolector y se guarda en contenedores para ser trasladadas aproximadamente 45 metros</p>', 1, '2019-11-20 23:19:44', b'0', 'Propuesta de mejora en el área de producción');
INSERT INTO `detallepropmejora` (`IdDetallePropMejora`, `Detalle`, `IdPropMejora`, `Fecha`, `Estado`, `Titulo`) VALUES(3, '<p>El presente plan de mejora consiste básicamente en cambiar la localización del área recibimiento de la caña de azúcar, en la cual se recoge dicha caña del camión recolector y se guarda en contenedores para ser trasladadas aproximadamente 45 metros; la idea de la propuesta es otorgar permiso al camión recolector para que pueda entrar y dejar mucho más cerca la caña de azúcar, debido a que las dimensiones de la instalación lo permiten, se espera un resultado aprobatorio.</p>', 1, '2019-11-20 23:19:48', b'0', 'Propuesta de mejora en el área de producción');
INSERT INTO `detallepropmejora` (`IdDetallePropMejora`, `Detalle`, `IdPropMejora`, `Fecha`, `Estado`, `Titulo`) VALUES(4, '<p>El presente plan de mejora consiste básicamente en cambiar la localización del área recibimiento de la caña de azúcar, en la cual se recoge dicha caña del camión recolector y se guarda en contenedores para ser trasladadas aproximadamente 45 metros; la idea de la propuesta es otorgar permiso al camión recolector para que pueda entrar y dejar mucho más cerca la caña de azúcar, debido a que las dimensiones de la instalación lo permiten, se espera un resultado aprobatorio.</p>', 1, '2019-11-20 23:20:26', b'1', 'Propuesta de mejora en el recibimiento de la caña de azúcar en el área de producción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalletecnicaproduccion`
--

CREATE TABLE `detalletecnicaproduccion` (
  `IdDetalleTecnica` int(11) NOT NULL,
  `IdTecnica` int(11) NOT NULL,
  `Detalle` text,
  `Titulo` varchar(100) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalletecnicaproduccion`
--

INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(1, 1, 'En español significa Justo a tiempo. Es un sistema desarrollado en Japón para la organización de los procesos productivos en las fábricas.', 'Método Just in time (JIT)', '2019-11-20 23:02:19', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(2, 1, '<p>En español significa Justo a tiempo. Es un sistema desarrollado en Japón para la organización de los procesos productivos en las fábricas.</p><p>Su principal estrategia es la simplificación de los controles y la simplificación del proceso productivo. Se tienen que fabricar las mercancías que se necesiten, cuando se necesiten y en las cantidades que se necesiten.<br></p>', 'Método Just in time (JIT)', '2019-11-20 23:02:31', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(3, 1, '<p>En español significa Justo a tiempo. Es un sistema desarrollado en Japón para la organización de los procesos productivos en las fábricas.</p><p>Su principal estrategia es la simplificación de los controles y la simplificación del proceso productivo. Se tienen que fabricar las mercancías que se necesiten, cuando se necesiten y en las cantidades que se necesiten.</p><p>Para Just-in-Time, el desperdicio se define como cualquier actividad que no aporta valor añadido para el consumidor final. Pueden ser desperdicios el exceso de existencias, los plazos de preparación, la inspección, el movimiento de materiales, los rechazos,...</p><p>El JIT es mucho más que un programa destinado a la reducción de inventarios a cero, es un sistema para hacer que las empresas operen eficientemente con un mínimo de recursos.</p>', 'Método Just in time (JIT)', '2019-11-20 23:02:45', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(4, 1, '<p>En español significa Justo a tiempo. Es un sistema desarrollado en Japón para la organización de los procesos productivos en las fábricas.</p><p>Su principal estrategia es la simplificación de los controles y la simplificación del proceso productivo. Se tienen que fabricar las mercancías que se necesiten, cuando se necesiten y en las cantidades que se necesiten.</p><p>Para Just-in-Time, el desperdicio se define como cualquier actividad que no aporta valor añadido para el consumidor final. Pueden ser desperdicios el exceso de existencias, los plazos de preparación, la inspección, el movimiento de materiales, los rechazos,...</p><p>El JIT es mucho más que un programa destinado a la reducción de inventarios a cero, es un sistema para hacer que las empresas operen eficientemente con un mínimo de recursos.</p><p><br></p><p>Nota:</p><p>\"Reducir los inventarios a cero\", como busca el J.I.T., está muy bien, pero imagina por ejemplo la posibilidad de una huelga en el transporte por carretera.</p><p>¿Qué crees que podría ocurrir con la producción? ¿Podemos considerar por ejemplo que es un sistema que precisa de \"paz social\" (es decir que en el país en el que está la fábrica con Técnica J.I.T. no haya riesgo de huelgas o conflictos laborales importanes)?</p>', 'Método Just in time (JIT)', '2019-11-20 23:03:05', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(5, 1, '<p>En español significa Justo a tiempo. Es un sistema desarrollado en Japón para la organización de los procesos productivos en las fábricas.</p><p>Su principal estrategia es la simplificación de los controles y la simplificación del proceso productivo. Se tienen que fabricar las mercancías que se necesiten, cuando se necesiten y en las cantidades que se necesiten.</p><p>Para Just-in-Time, el desperdicio se define como cualquier actividad que no aporta valor añadido para el consumidor final. Pueden ser desperdicios el exceso de existencias, los plazos de preparación, la inspección, el movimiento de materiales, los rechazos,...</p><p>El JIT es mucho más que un programa destinado a la reducción de inventarios a cero, es un sistema para hacer que las empresas operen eficientemente con un mínimo de recursos.</p><p><br></p><p>Nota:</p><p>\"Reducir los inventarios a cero\", como busca el J.I.T., está muy bien, pero imagina por ejemplo la posibilidad de una huelga en el transporte por carretera.</p><p>¿Qué crees que podría ocurrir con la producción? ¿Podemos considerar por ejemplo que es un sistema que precisa de \"paz social\" (es decir que en el país en el que está la fábrica con Técnica J.I.T. no haya riesgo de huelgas o conflictos laborales importantes)?</p>', 'Método Just in time (JIT)', '2019-11-20 23:03:13', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(6, 2, '<p style=\"margin: 0.9em;\"><font color=\"#34424f\" face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">La filosofía LEAN se encauza a la reducción de los desperdicios inherentes al proceso productivo: tiempos de espera, transporte, exceso de producción, exceso de inventario, movimientos y defectos, los productos son diseñados con materiales de alta calidad y producidos mediante procesos muy seguros y estables, reduciendo notablemente los riesgos de su producción, sin embargo esto se hace a costa de aumentar los riesgos financieros.</font></p><p style=\"margin: 0.9em;\"><font color=\"#34424f\" face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\"><br></font></p><p style=\"margin: 0.9em;\"><font color=\"#34424f\" face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Producción Lean es un sistema de producción basada en el sistema implementado por el fabricante de automóviles Toyota. Analizando a las empresas que lo han instaurado se observan unos resultados de hasta un 90% de mejoras en la reducción de los tiempos productivos y hasta un 80% de incremento en sus índices de calidad.</font></p>', 'Producción LEAN', '2019-11-20 23:04:10', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(7, 2, '<p style=\"margin: 0.9em;\"><font color=\"#34424f\" face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Método de trabajo orientado a establecer la máxima eficiencia en todos los procesos productivos, eliminando todas las actividades que no aportan valor añadido al producto final o generen beneficios apreciables al consumidor final.<br></font></p><p style=\"margin: 0.9em;\"><font color=\"#34424f\" face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">La filosofía LEAN se encauza a la reducción de los desperdicios inherentes al proceso productivo: tiempos de espera, transporte, exceso de producción, exceso de inventario, movimientos y defectos, los productos son diseñados con materiales de alta calidad y producidos mediante procesos muy seguros y estables, reduciendo notablemente los riesgos de su producción, sin embargo esto se hace a costa de aumentar los riesgos financieros.</font></p><p style=\"margin: 0.9em;\"><font color=\"#34424f\" face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\">Producción Lean es un sistema de producción basada en el sistema implementado por el fabricante de automóviles Toyota. Analizando a las empresas que lo han instaurado se observan unos resultados de hasta un 90% de mejoras en la reducción de los tiempos productivos y hasta un 80% de incremento en sus índices de calidad.</font></p>', 'Producción LEAN', '2019-11-20 23:04:37', b'1');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(8, 1, '<p>En español significa Justo a tiempo. Es un sistema desarrollado en Japón para la organización de los procesos productivos en las fábricas.</p><p>Su principal estrategia es la simplificación de los controles y la simplificación del proceso productivo. Se tienen que fabricar las mercancías que se necesiten, cuando se necesiten y en las cantidades que se necesiten.</p><p>Para Just-in-Time, el desperdicio se define como cualquier actividad que no aporta valor añadido para el consumidor final. Pueden ser desperdicios el exceso de existencias, los plazos de preparación, la inspección, el movimiento de materiales, los rechazos,...</p><p>El JIT es mucho más que un programa destinado a la reducción de inventarios a cero, es un sistema para hacer que las empresas operen eficientemente con un mínimo de recursos.</p><p><br></p><p>Nota:</p><p>\"Reducir los inventarios a cero\", como busca el J.I.T., está muy bien, pero imagina por ejemplo la posibilidad de una huelga en el transporte por carretera.</p><p>¿Qué crees que podría ocurrir con la producción? ¿Podemos considerar por ejemplo que es un sistema que precisa de \"paz social\" (es decir que en el país en el que está la fábrica con Técnica J.I.T. no haya riesgo de huelgas o conflictos laborales importantes)?</p>', 'Método Just in time', '2019-11-20 23:04:43', b'1');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(9, 3, '', 'Método KAIZEN', '2019-11-20 23:04:52', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(10, 3, '<div>La técnica Kaizen puede resumirse como “Mejora y más Mejora”, todo y todos deben mejorar, su objetivo es obtener la mayor calidad al más bajo costo. La calidad es lo primero y por medio de ella se obtienen los más altos niveles de productividad, haciendo posible la reducción de costos.</div><div><br></div><div>Opera a través de seis sistemas que configuran un todo indisoluble:</div><div><br></div><div>Gestión de calidad total</div><div>Sistema de producción Just in time.</div><div>Mantenimiento productivo total.</div><div>Actividades en grupos pequeños.</div><div>Desarrollo de Políticas laborales.</div><div>Sistema de sugerencias.</div>', 'Método KAIZEN', '2019-11-20 23:05:05', b'0');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(11, 3, '<div>La técnica Kaizen puede resumirse como “Mejora y más Mejora”, todo y todos deben mejorar, su objetivo es obtener la mayor calidad al más bajo costo. La calidad es lo primero y por medio de ella se obtienen los más altos niveles de productividad, haciendo posible la reducción de costos.</div><div><br></div><div>Opera a través de seis sistemas que configuran un todo indisoluble:</div><ul><li>Gestión de calidad total</li><li>Sistema de producción Just in time.</li><li>Mantenimiento productivo total.</li><li>Actividades en grupos pequeños.</li><li>Desarrollo de Políticas laborales.</li><li>Sistema de sugerencias.</li></ul>', 'Método KAIZEN', '2019-11-20 23:05:17', b'1');
INSERT INTO `detalletecnicaproduccion` (`IdDetalleTecnica`, `IdTecnica`, `Detalle`, `Titulo`, `Fecha`, `Estado`) VALUES(12, 4, '<p>es una técnica de gestión de producción originaria de Japón basada en cinco principios elementales, denominada así por la primera letra (en japonés) de cada una de sus cinco etapas que se deben aplicar a cualquier puesto de trabajo:</p><ol><li>Seiri (Selección). Separar innecesarios. Consiste en identificar y separar los materiales necesarios de los innecesarios y en desprenderse de éstos últimos.</li><li>Seiton (Orden). Situar necesarios Consiste en establecer el modo en que deben ubicarse e identificarse los materiales necesarios, de manera que sea fácil y rápido encontrarlos, utilizarlos y reponerlos.</li><li>Seisoo (Limpieza). Suprimir suciedad Consiste en identificar y eliminar las fuentes de suciedad, asegurando que todos los medios se encuentran siempre en perfecto estado operativo.</li><li>Seiketsu (Estandarizar). Señalizar anomalías Consiste en distinguir fácilmente una situación normal de otra anormal, mediante normas sencillas y visibles para todos.</li><li>Shitsuke (Disciplina). Seguir mejorando Consiste en trabajar permanentemente de acuerdo con las normas establecidas.</li></ol>', 'Método de las cinco eses', '2019-11-20 23:05:59', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EAFA`
--

CREATE TABLE `EAFA` (
  `idEstrategiaFA` int(11) NOT NULL,
  `idAmenaza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EDAA`
--

CREATE TABLE `EDAA` (
  `idEstrategiaDA` int(11) NOT NULL,
  `idAmenaza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EDAD`
--

CREATE TABLE `EDAD` (
  `idEstrategiaDA` int(11) NOT NULL,
  `idDebilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EDOD`
--

CREATE TABLE `EDOD` (
  `idEstrategiaDO` int(11) NOT NULL,
  `idDebilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EDOO`
--

CREATE TABLE `EDOO` (
  `idEstrategiaDO` int(11) NOT NULL,
  `idOportunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EFAF`
--

CREATE TABLE `EFAF` (
  `idEstrategiaFA` int(11) NOT NULL,
  `idFortaleza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EFOF`
--

CREATE TABLE `EFOF` (
  `idEstrategiaFO` int(11) NOT NULL,
  `idFortaleza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EFOO`
--

CREATE TABLE `EFOO` (
  `idEstrategiaFO` int(11) NOT NULL,
  `idOportunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `ruc` varchar(18) NOT NULL,
  `razonSocial` varchar(18) DEFAULT NULL,
  `direccion` varchar(18) DEFAULT NULL,
  `mision` varchar(18) DEFAULT NULL,
  `vision` varchar(18) DEFAULT NULL,
  `valor` varchar(18) DEFAULT NULL,
  `factor` varchar(18) DEFAULT NULL,
  `objetivo` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`ruc`, `razonSocial`, `direccion`, `mision`, `vision`, `valor`, `factor`, `objetivo`) VALUES('20132377783', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstrategiasDA`
--

CREATE TABLE `EstrategiasDA` (
  `idEstrategiaDA` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstrategiasDO`
--

CREATE TABLE `EstrategiasDO` (
  `idEstrategiaDO` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstrategiasFA`
--

CREATE TABLE `EstrategiasFA` (
  `idEstrategiaFA` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstrategiasFO`
--

CREATE TABLE `EstrategiasFO` (
  `idEstrategiaFO` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evrendimiento`
--

CREATE TABLE `evrendimiento` (
  `DniPersonal` char(8) NOT NULL,
  `IdEvRendimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evrendimiento`
--

INSERT INTO `evrendimiento` (`DniPersonal`, `IdEvRendimiento`) VALUES('19893998', 4);
INSERT INTO `evrendimiento` (`DniPersonal`, `IdEvRendimiento`) VALUES('25521675', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `FODA`
--

CREATE TABLE `FODA` (
  `idFoda` int(11) NOT NULL,
  `annio` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `FODA`
--

INSERT INTO `FODA` (`idFoda`, `annio`) VALUES(1, '2020');
INSERT INTO `FODA` (`idFoda`, `annio`) VALUES(2, '2021');
INSERT INTO `FODA` (`idFoda`, `annio`) VALUES(3, '2022');
INSERT INTO `FODA` (`idFoda`, `annio`) VALUES(4, '2023');
INSERT INTO `FODA` (`idFoda`, `annio`) VALUES(5, '2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fortalezas`
--

CREATE TABLE `Fortalezas` (
  `idFortaleza` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Fortalezas`
--

INSERT INTO `Fortalezas` (`idFortaleza`, `descripcion`, `idFoda`) VALUES(1, 'F1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Historial`
--

CREATE TABLE `Historial` (
  `idHistorial` int(11) NOT NULL,
  `idProceso` int(11) DEFAULT NULL,
  `año` char(4) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `vs` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Insumos`
--

CREATE TABLE `Insumos` (
  `codInsumo` char(4) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ListaProcesos`
--

CREATE TABLE `ListaProcesos` (
  `idlista` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `version` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ListaProcesos`
--

INSERT INTO `ListaProcesos` (`idlista`, `fecha`, `version`) VALUES(1, '2019-11-25', '1.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MejoraProcesos`
--

CREATE TABLE `MejoraProcesos` (
  `idMejoraProceso` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `diagnostico` varchar(100) DEFAULT NULL,
  `recomendacion` varchar(100) DEFAULT NULL,
  `condicion` char(1) DEFAULT NULL,
  `idProceso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `MejoraProcesos`
--

INSERT INTO `MejoraProcesos` (`idMejoraProceso`, `fecha`, `diagnostico`, `recomendacion`, `condicion`, `idProceso`) VALUES(2, '2019-11-22', ' Tiempo de Producción no conforme con lo planificado (Retrasos)', 'Revisar si las metodologías son inadecuadas,planificación inadecuada, controles deficientes, etc.', NULL, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MejoraTareas`
--

CREATE TABLE `MejoraTareas` (
  `idMejoraTarea` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `diagnostico` varchar(100) DEFAULT NULL,
  `causa` varchar(100) DEFAULT NULL,
  `recomendacion` varchar(100) DEFAULT NULL,
  `condicion` char(1) DEFAULT NULL,
  `idTarea` int(11) DEFAULT NULL,
  `idProceso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `normasseguridad`
--

CREATE TABLE `normasseguridad` (
  `idnorma` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ObjetivosProduccion`
--

CREATE TABLE `ObjetivosProduccion` (
  `idObjetivo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Oportunidades`
--

CREATE TABLE `Oportunidades` (
  `idOportunidad` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idFoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdenDeImplementacion`
--

CREATE TABLE `OrdenDeImplementacion` (
  `idOrden` int(11) NOT NULL,
  `nroDocumento` int(11) DEFAULT NULL,
  `fecha` char(4) DEFAULT NULL,
  `DniPersonal` char(8) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `propuesta` varchar(100) DEFAULT NULL,
  `condicion` char(1) DEFAULT NULL,
  `idMejoraProceso` int(11) DEFAULT NULL,
  `actividades` varchar(200) DEFAULT NULL,
  `docRelacionados` varchar(100) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `OrdenDeImplementacion`
--

INSERT INTO `OrdenDeImplementacion` (`idOrden`, `nroDocumento`, `fecha`, `DniPersonal`, `cargo`, `propuesta`, `condicion`, `idMejoraProceso`, `actividades`, `docRelacionados`, `observaciones`) VALUES(1, NULL, '2019', '04303213', 'Jefe', 'Propuesta 1', NULL, 2, 'Actividad 1', 'Doc1', 'Observacion 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdenOptimizacion`
--

CREATE TABLE `OrdenOptimizacion` (
  `IdOrdenOptimizacion` int(11) NOT NULL,
  `IdPropMejora` int(11) NOT NULL,
  `FechaRegistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `OrdenOptimizacion`
--

INSERT INTO `OrdenOptimizacion` (`IdOrdenOptimizacion`, `IdPropMejora`, `FechaRegistro`) VALUES(1, 1, '2019-11-20 23:21:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdenPedido`
--

CREATE TABLE `OrdenPedido` (
  `numero` char(10) NOT NULL,
  `proveedor` varchar(30) DEFAULT NULL,
  `fecha` date NOT NULL,
  `lugarAtencion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdenTrabajo`
--

CREATE TABLE `OrdenTrabajo` (
  `numero` char(10) NOT NULL,
  `area` varchar(40) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personal`
--

CREATE TABLE `Personal` (
  `DniPersonal` char(8) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `idarea` int(11) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `inicioContrato` date DEFAULT NULL,
  `finContrato` date DEFAULT NULL,
  `salario` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Personal`
--

INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('04303213', 'Abner Olivares', 'Olivares Ruiz', 3, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('06544761', 'Luis Carrión', 'Olivares Ruiz', 2, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('07012945', 'Ava Ruiz', 'Olivares Ruiz', 5, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('07296320', 'Luis Ruiz', 'Olivares Ruiz', 6, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('08614939', 'María Sanchez', 'Olivares Ruiz', 3, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('09097237', 'Eva Ruiz', 'Olivares Ruiz', 4, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('15391392', 'Jeanpier Sanchez', 'Olivares Ruiz', 2, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('16617381', 'Alfredo Garcia', 'Olivares Ruiz', 2, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('180i9455', '7', '9', 1, NULL, NULL, NULL, NULL, 'o', '2019-11-13', '2019-11-30', '70.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('19811114', 'Mathías Sanchez', 'Olivares Ruiz', 6, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('19893998', 'Jennifer Carrión', 'Olivares Ruiz', 1, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('19977910', 'Alba Olivares', 'Olivares Ruiz', 5, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('19979598', 'Francisco Garcia', 'Olivares Ruiz', 6, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('19980186', 'Dayana Garcia', 'Olivares Ruiz', 1, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('20010271', 'Karina Olivares', 'Olivares Ruiz', 2, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('20646882', 'Monica Sanchez', 'Olivares Ruiz', 1, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('21104701', 'Cora Carrión', 'Olivares Ruiz', 5, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('21808999', 'Eva Garcia', 'Olivares Ruiz', 4, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('23150497', 'Luis Carrión', 'Olivares Ruiz', 6, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('23204150', 'Lucía Sanchez', 'Olivares Ruiz', 5, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('23655129', 'Mía Carrión', 'Olivares Ruiz', 4, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('23847239', 'Luis Ruiz', 'Olivares Ruiz', 2, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('23916798', 'Camila Ruiz', 'Olivares Ruiz', 1, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('25521675', 'Sofía Garcia', 'Olivares Ruiz', 3, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('25529875', 'Carla Garcia', 'Olivares Ruiz', 5, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('25545029', 'Emma Olivares', 'Olivares Ruiz', 4, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('25676103', 'María Carrión', 'Olivares Ruiz', 3, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('31031524', 'Regina Sanchez', 'Olivares Ruiz', 4, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('31619357', 'Juan Olivares', 'Olivares Ruiz', 6, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('32760792', 'Ana Ruiz', 'Olivares Ruiz', 3, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');
INSERT INTO `Personal` (`DniPersonal`, `nombre`, `apellido`, `idarea`, `direccion`, `telefono`, `correo`, `fechaNac`, `cargo`, `inicioContrato`, `finContrato`, `salario`) VALUES('70308874', 'Cintia Olivares', 'Olivares Ruiz', 1, NULL, NULL, NULL, NULL, 'Operario', '2019-11-18', '2019-11-18', '930.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Procesos`
--

CREATE TABLE `Procesos` (
  `idProceso` int(11) NOT NULL,
  `proceso` varchar(100) DEFAULT NULL,
  `versiones` decimal(2,1) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tipoproceso` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Procesos`
--

INSERT INTO `Procesos` (`idProceso`, `proceso`, `versiones`, `fecha`, `tipoproceso`) VALUES(6, 'Gestion Gerencial', '1.0', '2019-11-21', 'Estrategico');
INSERT INTO `Procesos` (`idProceso`, `proceso`, `versiones`, `fecha`, `tipoproceso`) VALUES(7, 'Gestion Produccion', '1.0', '2019-11-21', 'Operativos');
INSERT INTO `Procesos` (`idProceso`, `proceso`, `versiones`, `fecha`, `tipoproceso`) VALUES(8, 'Gestion Mantenimiento', '1.0', '2019-11-21', 'Operativo');
INSERT INTO `Procesos` (`idProceso`, `proceso`, `versiones`, `fecha`, `tipoproceso`) VALUES(9, 'Gestion RRRHH', '1.0', '2019-11-21', 'Soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produccion`
--

CREATE TABLE `Produccion` (
  `numero` char(10) NOT NULL,
  `area` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `fechaAlmacen` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `especificaciones` text,
  `labor` decimal(18,2) DEFAULT NULL,
  `codProducto` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `codProducto` char(4) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propmejora`
--

CREATE TABLE `propmejora` (
  `IdPropMejora` int(11) NOT NULL,
  `FechaRegistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propmejora`
--

INSERT INTO `propmejora` (`IdPropMejora`, `FechaRegistro`) VALUES(1, '2019-11-20 23:19:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idProyecto` int(11) NOT NULL,
  `proyecto` varchar(50) NOT NULL,
  `annioInicio` char(4) NOT NULL,
  `annioFin` char(4) NOT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_actividades`
--

CREATE TABLE `proyecto_actividades` (
  `idActividad` int(11) NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `duracion` varchar(25) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `subtareas` text,
  `idProyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PTA`
--

CREATE TABLE `PTA` (
  `idPTA` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `objetivo` varchar(100) NOT NULL,
  `meta` varchar(100) NOT NULL,
  `annio` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PTA_Actividades`
--

CREATE TABLE `PTA_Actividades` (
  `idActividadesPTA` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `idPTA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Solicitud`
--

CREATE TABLE `Solicitud` (
  `idsolicitud` int(11) NOT NULL,
  `idProceso` int(11) DEFAULT NULL,
  `idTarea` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `Destino` varchar(50) DEFAULT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  `DniPersonal` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tareas`
--

CREATE TABLE `Tareas` (
  `idTarea` int(11) NOT NULL,
  `idProceso` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `Tarea` varchar(100) DEFAULT NULL,
  `area` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Tareas`
--

INSERT INTO `Tareas` (`idTarea`, `idProceso`, `numero`, `Tarea`, `area`) VALUES(3, 6, 1, 'registrar usuario', 'Atencion al cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicaproduccion`
--

CREATE TABLE `tecnicaproduccion` (
  `IdTecnica` int(11) NOT NULL,
  `FechaRegistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnicaproduccion`
--

INSERT INTO `tecnicaproduccion` (`IdTecnica`, `FechaRegistro`) VALUES(1, '2019-11-20 23:02:19');
INSERT INTO `tecnicaproduccion` (`IdTecnica`, `FechaRegistro`) VALUES(2, '2019-11-20 23:04:10');
INSERT INTO `tecnicaproduccion` (`IdTecnica`, `FechaRegistro`) VALUES(3, '2019-11-20 23:04:52');
INSERT INTO `tecnicaproduccion` (`IdTecnica`, `FechaRegistro`) VALUES(4, '2019-11-20 23:05:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nombres` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Contraseña` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pregunta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Respuesta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Area` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Apellidos`, `Nombres`, `Email`, `Contraseña`, `Pregunta`, `Respuesta`, `Area`, `Estado`) VALUES(1, 'Navez Aroca', 'Jairo Raul', 'jnavez@unitru.edu.pe', '$2y$10$rzazU2G15aWJtGykTl781O/RGY.9kLTcis1.H4Bca47BQQQ4g85gW', 'Pregunta', 'Respuesta', 'Productividad', b'1');
INSERT INTO `usuario` (`IdUsuario`, `Apellidos`, `Nombres`, `Email`, `Contraseña`, `Pregunta`, `Respuesta`, `Area`, `Estado`) VALUES(2, 'Cabrera Garcia', 'Juan Jose', 'juan@unitru.edu.pe', 'juan', 'Pregunta', 'Respuesta', 'Produccion', b'0');
INSERT INTO `usuario` (`IdUsuario`, `Apellidos`, `Nombres`, `Email`, `Contraseña`, `Pregunta`, `Respuesta`, `Area`, `Estado`) VALUES(3, 'Perez', 'Gabriel', 'gabriel@unitru.edu.pe', '$2y$10$XUPZPLMkJm/gX7KeWoeJo.bIQkR6iY9sXJMSvxdqQCTLEajfPNQF.', 'Pregunta', 'Respuesta', 'Productividad', b'0');
INSERT INTO `usuario` (`IdUsuario`, `Apellidos`, `Nombres`, `Email`, `Contraseña`, `Pregunta`, `Respuesta`, `Area`, `Estado`) VALUES(4, 'Quispe Rodriguez', 'Olman Daniel', 'olmanquispe@gmail.com', '$2y$10$sx50WFny1kEtSqtyE0lHsOfbXNKnOhVeBE2Yt8lpQd9FMavcsc5iG', 'xd', 'xd', 'Produccion', b'1');
INSERT INTO `usuario` (`IdUsuario`, `Apellidos`, `Nombres`, `Email`, `Contraseña`, `Pregunta`, `Respuesta`, `Area`, `Estado`) VALUES(5, 'Gamboa Rubio', 'Maryori Priscila', 'pgamboa@gmail.com', '$2y$10$fkyEaz0TUwWOR4ZX2p0zhuOzUn4rN2VA4beiZuqyuelveFKCRJPo6', 'xd', 'xd', 'Gerencia', b'1');
INSERT INTO `usuario` (`IdUsuario`, `Apellidos`, `Nombres`, `Email`, `Contraseña`, `Pregunta`, `Respuesta`, `Area`, `Estado`) VALUES(6, 'Ipanaque Maza', 'Roxany Marbely', 'roxipanaque@gmail.com', '$2y$10$WMQkM7Yq.3fEncicdGc9v.Bgbk4OSCzH5fCcBiXRrn63Jzp9NIZ5O', 'xd', 'xd', 'Procesos', b'1');
INSERT INTO `usuario` (`IdUsuario`, `Apellidos`, `Nombres`, `Email`, `Contraseña`, `Pregunta`, `Respuesta`, `Area`, `Estado`) VALUES(7, 'Olivares Ruiz ', 'Melissa Olivares', 'molivares@gmail.com', '$2y$10$hVcGuq5.M3rqv6ajlZV.I.AOY/gBTmz0QgIeTSmykGVut0Qzp1MbO', 'xd', 'xd', 'Personal', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Actividades`
--
ALTER TABLE `Actividades`
  ADD PRIMARY KEY (`idActividad`),
  ADD KEY `idTarea` (`idTarea`,`idProceso`);

--
-- Indices de la tabla `ActividadesOrdenTrab`
--
ALTER TABLE `ActividadesOrdenTrab`
  ADD PRIMARY KEY (`idActividad`),
  ADD KEY `numero` (`numero`);

--
-- Indices de la tabla `Amenazas`
--
ALTER TABLE `Amenazas`
  ADD PRIMARY KEY (`idAmenaza`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`),
  ADD KEY `ruc` (`ruc`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`idasistencia`),
  ADD KEY `DniPersonal` (`DniPersonal`);

--
-- Indices de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD PRIMARY KEY (`idbeneficio`),
  ADD KEY `DniPersonal` (`DniPersonal`);

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`idcapacitaciones`),
  ADD KEY `idarea` (`idarea`);

--
-- Indices de la tabla `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`idCarta`),
  ADD KEY `idProyecto` (`idProyecto`);

--
-- Indices de la tabla `CriteriosDeCalificacion`
--
ALTER TABLE `CriteriosDeCalificacion`
  ADD PRIMARY KEY (`idcriterio`);

--
-- Indices de la tabla `Debilidades`
--
ALTER TABLE `Debilidades`
  ADD PRIMARY KEY (`idDebilidad`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `detalleevrendimiento`
--
ALTER TABLE `detalleevrendimiento`
  ADD PRIMARY KEY (`IdDetalleEvRendimiento`),
  ADD KEY `R_85` (`IdEvRendimiento`);

--
-- Indices de la tabla `detalleordenoptimizacion`
--
ALTER TABLE `detalleordenoptimizacion`
  ADD PRIMARY KEY (`IdDetalleOrdenOptimizacion`),
  ADD KEY `R_84` (`IdOrdenOptimizacion`);

--
-- Indices de la tabla `DetallePedido`
--
ALTER TABLE `DetallePedido`
  ADD PRIMARY KEY (`numero`,`codInsumo`),
  ADD KEY `codInsumo` (`codInsumo`);

--
-- Indices de la tabla `DetalleProduccion`
--
ALTER TABLE `DetalleProduccion`
  ADD PRIMARY KEY (`numero`,`codInsumo`),
  ADD KEY `codInsumo` (`codInsumo`);

--
-- Indices de la tabla `detallepropmejora`
--
ALTER TABLE `detallepropmejora`
  ADD PRIMARY KEY (`IdDetallePropMejora`,`IdPropMejora`),
  ADD KEY `R_71` (`IdPropMejora`);

--
-- Indices de la tabla `detalletecnicaproduccion`
--
ALTER TABLE `detalletecnicaproduccion`
  ADD PRIMARY KEY (`IdDetalleTecnica`,`IdTecnica`),
  ADD KEY `R_69` (`IdTecnica`);

--
-- Indices de la tabla `EAFA`
--
ALTER TABLE `EAFA`
  ADD PRIMARY KEY (`idEstrategiaFA`,`idAmenaza`),
  ADD KEY `idAmenaza` (`idAmenaza`);

--
-- Indices de la tabla `EDAA`
--
ALTER TABLE `EDAA`
  ADD PRIMARY KEY (`idEstrategiaDA`,`idAmenaza`),
  ADD KEY `idAmenaza` (`idAmenaza`);

--
-- Indices de la tabla `EDAD`
--
ALTER TABLE `EDAD`
  ADD PRIMARY KEY (`idEstrategiaDA`,`idDebilidad`),
  ADD KEY `idDebilidad` (`idDebilidad`);

--
-- Indices de la tabla `EDOD`
--
ALTER TABLE `EDOD`
  ADD PRIMARY KEY (`idEstrategiaDO`,`idDebilidad`),
  ADD KEY `idDebilidad` (`idDebilidad`);

--
-- Indices de la tabla `EDOO`
--
ALTER TABLE `EDOO`
  ADD PRIMARY KEY (`idEstrategiaDO`,`idOportunidad`),
  ADD KEY `idOportunidad` (`idOportunidad`);

--
-- Indices de la tabla `EFAF`
--
ALTER TABLE `EFAF`
  ADD PRIMARY KEY (`idEstrategiaFA`,`idFortaleza`),
  ADD KEY `idFortaleza` (`idFortaleza`);

--
-- Indices de la tabla `EFOF`
--
ALTER TABLE `EFOF`
  ADD PRIMARY KEY (`idEstrategiaFO`,`idFortaleza`),
  ADD KEY `idFortaleza` (`idFortaleza`);

--
-- Indices de la tabla `EFOO`
--
ALTER TABLE `EFOO`
  ADD PRIMARY KEY (`idEstrategiaFO`,`idOportunidad`),
  ADD KEY `idOportunidad` (`idOportunidad`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ruc`);

--
-- Indices de la tabla `EstrategiasDA`
--
ALTER TABLE `EstrategiasDA`
  ADD PRIMARY KEY (`idEstrategiaDA`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `EstrategiasDO`
--
ALTER TABLE `EstrategiasDO`
  ADD PRIMARY KEY (`idEstrategiaDO`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `EstrategiasFA`
--
ALTER TABLE `EstrategiasFA`
  ADD PRIMARY KEY (`idEstrategiaFA`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `EstrategiasFO`
--
ALTER TABLE `EstrategiasFO`
  ADD PRIMARY KEY (`idEstrategiaFO`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `evrendimiento`
--
ALTER TABLE `evrendimiento`
  ADD PRIMARY KEY (`IdEvRendimiento`),
  ADD KEY `R_70` (`DniPersonal`);

--
-- Indices de la tabla `FODA`
--
ALTER TABLE `FODA`
  ADD PRIMARY KEY (`idFoda`);

--
-- Indices de la tabla `Fortalezas`
--
ALTER TABLE `Fortalezas`
  ADD PRIMARY KEY (`idFortaleza`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `Historial`
--
ALTER TABLE `Historial`
  ADD PRIMARY KEY (`idHistorial`),
  ADD KEY `idProceso` (`idProceso`);

--
-- Indices de la tabla `Insumos`
--
ALTER TABLE `Insumos`
  ADD PRIMARY KEY (`codInsumo`);

--
-- Indices de la tabla `ListaProcesos`
--
ALTER TABLE `ListaProcesos`
  ADD PRIMARY KEY (`idlista`);

--
-- Indices de la tabla `MejoraProcesos`
--
ALTER TABLE `MejoraProcesos`
  ADD PRIMARY KEY (`idMejoraProceso`),
  ADD KEY `idProceso` (`idProceso`);

--
-- Indices de la tabla `MejoraTareas`
--
ALTER TABLE `MejoraTareas`
  ADD PRIMARY KEY (`idMejoraTarea`),
  ADD KEY `idTarea` (`idTarea`,`idProceso`);

--
-- Indices de la tabla `normasseguridad`
--
ALTER TABLE `normasseguridad`
  ADD PRIMARY KEY (`idnorma`);

--
-- Indices de la tabla `ObjetivosProduccion`
--
ALTER TABLE `ObjetivosProduccion`
  ADD PRIMARY KEY (`idObjetivo`);

--
-- Indices de la tabla `Oportunidades`
--
ALTER TABLE `Oportunidades`
  ADD PRIMARY KEY (`idOportunidad`),
  ADD KEY `idFoda` (`idFoda`);

--
-- Indices de la tabla `OrdenDeImplementacion`
--
ALTER TABLE `OrdenDeImplementacion`
  ADD PRIMARY KEY (`idOrden`),
  ADD KEY `DniPersonal` (`DniPersonal`),
  ADD KEY `idMejoraProceso` (`idMejoraProceso`);

--
-- Indices de la tabla `OrdenOptimizacion`
--
ALTER TABLE `OrdenOptimizacion`
  ADD PRIMARY KEY (`IdOrdenOptimizacion`),
  ADD KEY `R_81` (`IdPropMejora`);

--
-- Indices de la tabla `OrdenPedido`
--
ALTER TABLE `OrdenPedido`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `OrdenTrabajo`
--
ALTER TABLE `OrdenTrabajo`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `Personal`
--
ALTER TABLE `Personal`
  ADD PRIMARY KEY (`DniPersonal`),
  ADD KEY `R_666` (`idarea`);

--
-- Indices de la tabla `Procesos`
--
ALTER TABLE `Procesos`
  ADD PRIMARY KEY (`idProceso`);

--
-- Indices de la tabla `Produccion`
--
ALTER TABLE `Produccion`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `codProducto` (`codProducto`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`codProducto`);

--
-- Indices de la tabla `propmejora`
--
ALTER TABLE `propmejora`
  ADD PRIMARY KEY (`IdPropMejora`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProyecto`);

--
-- Indices de la tabla `proyecto_actividades`
--
ALTER TABLE `proyecto_actividades`
  ADD PRIMARY KEY (`idActividad`),
  ADD KEY `idProyecto` (`idProyecto`);

--
-- Indices de la tabla `PTA`
--
ALTER TABLE `PTA`
  ADD PRIMARY KEY (`idPTA`);

--
-- Indices de la tabla `PTA_Actividades`
--
ALTER TABLE `PTA_Actividades`
  ADD PRIMARY KEY (`idActividadesPTA`),
  ADD KEY `idPTA` (`idPTA`);

--
-- Indices de la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  ADD PRIMARY KEY (`idsolicitud`),
  ADD KEY `idProceso` (`idProceso`),
  ADD KEY `idTarea` (`idTarea`,`idProceso`),
  ADD KEY `DniPersonal` (`DniPersonal`);

--
-- Indices de la tabla `Tareas`
--
ALTER TABLE `Tareas`
  ADD PRIMARY KEY (`idTarea`,`idProceso`),
  ADD KEY `idProceso` (`idProceso`);

--
-- Indices de la tabla `tecnicaproduccion`
--
ALTER TABLE `tecnicaproduccion`
  ADD PRIMARY KEY (`IdTecnica`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Actividades`
--
ALTER TABLE `Actividades`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ActividadesOrdenTrab`
--
ALTER TABLE `ActividadesOrdenTrab`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Amenazas`
--
ALTER TABLE `Amenazas`
  MODIFY `idAmenaza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `idasistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  MODIFY `idbeneficio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `idcapacitaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `carta`
--
ALTER TABLE `carta`
  MODIFY `idCarta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `CriteriosDeCalificacion`
--
ALTER TABLE `CriteriosDeCalificacion`
  MODIFY `idcriterio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `Debilidades`
--
ALTER TABLE `Debilidades`
  MODIFY `idDebilidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleevrendimiento`
--
ALTER TABLE `detalleevrendimiento`
  MODIFY `IdDetalleEvRendimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalleordenoptimizacion`
--
ALTER TABLE `detalleordenoptimizacion`
  MODIFY `IdDetalleOrdenOptimizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detallepropmejora`
--
ALTER TABLE `detallepropmejora`
  MODIFY `IdDetallePropMejora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalletecnicaproduccion`
--
ALTER TABLE `detalletecnicaproduccion`
  MODIFY `IdDetalleTecnica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `EstrategiasDA`
--
ALTER TABLE `EstrategiasDA`
  MODIFY `idEstrategiaDA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EstrategiasDO`
--
ALTER TABLE `EstrategiasDO`
  MODIFY `idEstrategiaDO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EstrategiasFA`
--
ALTER TABLE `EstrategiasFA`
  MODIFY `idEstrategiaFA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EstrategiasFO`
--
ALTER TABLE `EstrategiasFO`
  MODIFY `idEstrategiaFO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evrendimiento`
--
ALTER TABLE `evrendimiento`
  MODIFY `IdEvRendimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `FODA`
--
ALTER TABLE `FODA`
  MODIFY `idFoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Fortalezas`
--
ALTER TABLE `Fortalezas`
  MODIFY `idFortaleza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Historial`
--
ALTER TABLE `Historial`
  MODIFY `idHistorial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ListaProcesos`
--
ALTER TABLE `ListaProcesos`
  MODIFY `idlista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `MejoraProcesos`
--
ALTER TABLE `MejoraProcesos`
  MODIFY `idMejoraProceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `MejoraTareas`
--
ALTER TABLE `MejoraTareas`
  MODIFY `idMejoraTarea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `normasseguridad`
--
ALTER TABLE `normasseguridad`
  MODIFY `idnorma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ObjetivosProduccion`
--
ALTER TABLE `ObjetivosProduccion`
  MODIFY `idObjetivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Oportunidades`
--
ALTER TABLE `Oportunidades`
  MODIFY `idOportunidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `OrdenDeImplementacion`
--
ALTER TABLE `OrdenDeImplementacion`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `OrdenOptimizacion`
--
ALTER TABLE `OrdenOptimizacion`
  MODIFY `IdOrdenOptimizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Procesos`
--
ALTER TABLE `Procesos`
  MODIFY `idProceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `propmejora`
--
ALTER TABLE `propmejora`
  MODIFY `IdPropMejora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto_actividades`
--
ALTER TABLE `proyecto_actividades`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PTA`
--
ALTER TABLE `PTA`
  MODIFY `idPTA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PTA_Actividades`
--
ALTER TABLE `PTA_Actividades`
  MODIFY `idActividadesPTA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Tareas`
--
ALTER TABLE `Tareas`
  MODIFY `idTarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tecnicaproduccion`
--
ALTER TABLE `tecnicaproduccion`
  MODIFY `IdTecnica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Actividades`
--
ALTER TABLE `Actividades`
  ADD CONSTRAINT `Actividades_ibfk_1` FOREIGN KEY (`idTarea`,`idProceso`) REFERENCES `Tareas` (`idtarea`, `idproceso`);

--
-- Filtros para la tabla `ActividadesOrdenTrab`
--
ALTER TABLE `ActividadesOrdenTrab`
  ADD CONSTRAINT `ActividadesOrdenTrab_ibfk_1` FOREIGN KEY (`numero`) REFERENCES `OrdenTrabajo` (`numero`);

--
-- Filtros para la tabla `Amenazas`
--
ALTER TABLE `Amenazas`
  ADD CONSTRAINT `Amenazas_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`ruc`) REFERENCES `empresa` (`ruc`);

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`DniPersonal`) REFERENCES `Personal` (`dnipersonal`) ON DELETE CASCADE;

--
-- Filtros para la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD CONSTRAINT `beneficios_ibfk_1` FOREIGN KEY (`DniPersonal`) REFERENCES `Personal` (`dnipersonal`);

--
-- Filtros para la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD CONSTRAINT `capacitaciones_ibfk_1` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`);

--
-- Filtros para la tabla `carta`
--
ALTER TABLE `carta`
  ADD CONSTRAINT `carta_ibfk_1` FOREIGN KEY (`idProyecto`) REFERENCES `proyecto` (`idproyecto`);

--
-- Filtros para la tabla `Debilidades`
--
ALTER TABLE `Debilidades`
  ADD CONSTRAINT `Debilidades_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `detalleordenoptimizacion`
--
ALTER TABLE `detalleordenoptimizacion`
  ADD CONSTRAINT `R_84` FOREIGN KEY (`IdOrdenOptimizacion`) REFERENCES `OrdenOptimizacion` (`idordenoptimizacion`);

--
-- Filtros para la tabla `DetallePedido`
--
ALTER TABLE `DetallePedido`
  ADD CONSTRAINT `DetallePedido_ibfk_1` FOREIGN KEY (`numero`) REFERENCES `OrdenPedido` (`numero`),
  ADD CONSTRAINT `DetallePedido_ibfk_2` FOREIGN KEY (`codInsumo`) REFERENCES `Insumos` (`codinsumo`);

--
-- Filtros para la tabla `DetalleProduccion`
--
ALTER TABLE `DetalleProduccion`
  ADD CONSTRAINT `DetalleProduccion_ibfk_1` FOREIGN KEY (`numero`) REFERENCES `Produccion` (`numero`),
  ADD CONSTRAINT `DetalleProduccion_ibfk_2` FOREIGN KEY (`codInsumo`) REFERENCES `Insumos` (`codinsumo`);

--
-- Filtros para la tabla `detallepropmejora`
--
ALTER TABLE `detallepropmejora`
  ADD CONSTRAINT `R_71` FOREIGN KEY (`IdPropMejora`) REFERENCES `propmejora` (`idpropmejora`);

--
-- Filtros para la tabla `detalletecnicaproduccion`
--
ALTER TABLE `detalletecnicaproduccion`
  ADD CONSTRAINT `R_69` FOREIGN KEY (`IdTecnica`) REFERENCES `tecnicaproduccion` (`idtecnica`);

--
-- Filtros para la tabla `EAFA`
--
ALTER TABLE `EAFA`
  ADD CONSTRAINT `EAFA_ibfk_1` FOREIGN KEY (`idEstrategiaFA`) REFERENCES `EstrategiasFA` (`idestrategiafa`),
  ADD CONSTRAINT `EAFA_ibfk_2` FOREIGN KEY (`idAmenaza`) REFERENCES `Amenazas` (`idamenaza`);

--
-- Filtros para la tabla `EDAA`
--
ALTER TABLE `EDAA`
  ADD CONSTRAINT `EDAA_ibfk_1` FOREIGN KEY (`idEstrategiaDA`) REFERENCES `EstrategiasDA` (`idestrategiada`),
  ADD CONSTRAINT `EDAA_ibfk_2` FOREIGN KEY (`idAmenaza`) REFERENCES `Amenazas` (`idamenaza`);

--
-- Filtros para la tabla `EDAD`
--
ALTER TABLE `EDAD`
  ADD CONSTRAINT `EDAD_ibfk_1` FOREIGN KEY (`idEstrategiaDA`) REFERENCES `EstrategiasDA` (`idestrategiada`),
  ADD CONSTRAINT `EDAD_ibfk_2` FOREIGN KEY (`idDebilidad`) REFERENCES `Debilidades` (`iddebilidad`);

--
-- Filtros para la tabla `EDOD`
--
ALTER TABLE `EDOD`
  ADD CONSTRAINT `EDOD_ibfk_1` FOREIGN KEY (`idEstrategiaDO`) REFERENCES `EstrategiasDO` (`idestrategiado`),
  ADD CONSTRAINT `EDOD_ibfk_2` FOREIGN KEY (`idDebilidad`) REFERENCES `Debilidades` (`iddebilidad`);

--
-- Filtros para la tabla `EDOO`
--
ALTER TABLE `EDOO`
  ADD CONSTRAINT `EDOO_ibfk_1` FOREIGN KEY (`idEstrategiaDO`) REFERENCES `EstrategiasDO` (`idestrategiado`),
  ADD CONSTRAINT `EDOO_ibfk_2` FOREIGN KEY (`idOportunidad`) REFERENCES `Oportunidades` (`idoportunidad`);

--
-- Filtros para la tabla `EFAF`
--
ALTER TABLE `EFAF`
  ADD CONSTRAINT `EFAF_ibfk_1` FOREIGN KEY (`idEstrategiaFA`) REFERENCES `EstrategiasFA` (`idestrategiafa`),
  ADD CONSTRAINT `EFAF_ibfk_2` FOREIGN KEY (`idFortaleza`) REFERENCES `Fortalezas` (`idfortaleza`);

--
-- Filtros para la tabla `EFOF`
--
ALTER TABLE `EFOF`
  ADD CONSTRAINT `EFOF_ibfk_1` FOREIGN KEY (`idEstrategiaFO`) REFERENCES `EstrategiasFO` (`idestrategiafo`),
  ADD CONSTRAINT `EFOF_ibfk_2` FOREIGN KEY (`idFortaleza`) REFERENCES `Fortalezas` (`idfortaleza`);

--
-- Filtros para la tabla `EFOO`
--
ALTER TABLE `EFOO`
  ADD CONSTRAINT `EFOO_ibfk_1` FOREIGN KEY (`idEstrategiaFO`) REFERENCES `EstrategiasFO` (`idestrategiafo`),
  ADD CONSTRAINT `EFOO_ibfk_2` FOREIGN KEY (`idOportunidad`) REFERENCES `Oportunidades` (`idoportunidad`);

--
-- Filtros para la tabla `EstrategiasDA`
--
ALTER TABLE `EstrategiasDA`
  ADD CONSTRAINT `EstrategiasDA_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `EstrategiasDO`
--
ALTER TABLE `EstrategiasDO`
  ADD CONSTRAINT `EstrategiasDO_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `EstrategiasFA`
--
ALTER TABLE `EstrategiasFA`
  ADD CONSTRAINT `EstrategiasFA_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `EstrategiasFO`
--
ALTER TABLE `EstrategiasFO`
  ADD CONSTRAINT `EstrategiasFO_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `evrendimiento`
--
ALTER TABLE `evrendimiento`
  ADD CONSTRAINT `R_70` FOREIGN KEY (`DniPersonal`) REFERENCES `Personal` (`dnipersonal`);

--
-- Filtros para la tabla `Fortalezas`
--
ALTER TABLE `Fortalezas`
  ADD CONSTRAINT `Fortalezas_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `Historial`
--
ALTER TABLE `Historial`
  ADD CONSTRAINT `Historial_ibfk_1` FOREIGN KEY (`idProceso`) REFERENCES `Procesos` (`idproceso`);

--
-- Filtros para la tabla `MejoraProcesos`
--
ALTER TABLE `MejoraProcesos`
  ADD CONSTRAINT `MejoraProcesos_ibfk_1` FOREIGN KEY (`idProceso`) REFERENCES `Procesos` (`idproceso`);

--
-- Filtros para la tabla `MejoraTareas`
--
ALTER TABLE `MejoraTareas`
  ADD CONSTRAINT `MejoraTareas_ibfk_1` FOREIGN KEY (`idTarea`,`idProceso`) REFERENCES `Tareas` (`idtarea`, `idproceso`);

--
-- Filtros para la tabla `Oportunidades`
--
ALTER TABLE `Oportunidades`
  ADD CONSTRAINT `Oportunidades_ibfk_1` FOREIGN KEY (`idFoda`) REFERENCES `FODA` (`idfoda`);

--
-- Filtros para la tabla `OrdenDeImplementacion`
--
ALTER TABLE `OrdenDeImplementacion`
  ADD CONSTRAINT `OrdenDeImplementacion_ibfk_1` FOREIGN KEY (`DniPersonal`) REFERENCES `Personal` (`dnipersonal`),
  ADD CONSTRAINT `OrdenDeImplementacion_ibfk_2` FOREIGN KEY (`idMejoraProceso`) REFERENCES `MejoraProcesos` (`idmejoraproceso`);

--
-- Filtros para la tabla `OrdenOptimizacion`
--
ALTER TABLE `OrdenOptimizacion`
  ADD CONSTRAINT `R_81` FOREIGN KEY (`IdPropMejora`) REFERENCES `propmejora` (`idpropmejora`);

--
-- Filtros para la tabla `Personal`
--
ALTER TABLE `Personal`
  ADD CONSTRAINT `R_666` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`);

--
-- Filtros para la tabla `Produccion`
--
ALTER TABLE `Produccion`
  ADD CONSTRAINT `Produccion_ibfk_1` FOREIGN KEY (`codProducto`) REFERENCES `Producto` (`codproducto`);

--
-- Filtros para la tabla `proyecto_actividades`
--
ALTER TABLE `proyecto_actividades`
  ADD CONSTRAINT `proyecto_actividades_ibfk_1` FOREIGN KEY (`idProyecto`) REFERENCES `proyecto` (`idproyecto`);

--
-- Filtros para la tabla `PTA_Actividades`
--
ALTER TABLE `PTA_Actividades`
  ADD CONSTRAINT `PTA_Actividades_ibfk_1` FOREIGN KEY (`idPTA`) REFERENCES `PTA` (`idpta`);

--
-- Filtros para la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  ADD CONSTRAINT `Solicitud_ibfk_1` FOREIGN KEY (`idProceso`) REFERENCES `Procesos` (`idproceso`),
  ADD CONSTRAINT `Solicitud_ibfk_2` FOREIGN KEY (`idTarea`,`idProceso`) REFERENCES `Tareas` (`idtarea`, `idproceso`),
  ADD CONSTRAINT `Solicitud_ibfk_3` FOREIGN KEY (`DniPersonal`) REFERENCES `Personal` (`dnipersonal`);

--
-- Filtros para la tabla `Tareas`
--
ALTER TABLE `Tareas`
  ADD CONSTRAINT `Tareas_ibfk_1` FOREIGN KEY (`idProceso`) REFERENCES `Procesos` (`idproceso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
