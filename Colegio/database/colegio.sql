-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2021 a las 03:49:30
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `ID_CURSO` int(11) NOT NULL,
  `NOMBRE_CURSO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`ID_CURSO`, `NOMBRE_CURSO`) VALUES
(3, '8-B'),
(4, '10-B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOS` varchar(50) NOT NULL,
  `IDENTIFICACION` varchar(50) NOT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `EDAD` int(11) NOT NULL,
  `GENERO_ID` int(11) NOT NULL,
  `CURSO_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `ID_GENERO` int(11) NOT NULL,
  `TIPO_GENERO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ID_GENERO`, `TIPO_GENERO`) VALUES
(1, 'MASCULINO'),
(2, 'FEMENINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `ID_HORARIO` int(11) NOT NULL,
  `PROFESOR_ID` int(11) NOT NULL,
  `MATERIA_ID` int(11) NOT NULL,
  `CURSO_ID` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA_INICIO` time NOT NULL,
  `HORA_FIN` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `ID_MATERIA` int(11) NOT NULL,
  `NOMBRE_MATERIA` varchar(20) NOT NULL,
  `COD_MATERIA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_MATERIA`, `NOMBRE_MATERIA`, `COD_MATERIA`) VALUES
(3, 'Biologia', 'B654');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `ID_PROFESOR` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOS` varchar(50) NOT NULL,
  `IDENTIFICACION` varchar(50) NOT NULL,
  `GENERO_ID` int(11) NOT NULL,
  `COD_DOCENTE` varchar(20) NOT NULL,
  `CURSO_ID` int(11) NOT NULL,
  `MATERIA_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USER` int(11) NOT NULL,
  `USER` varchar(10) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `TIPO_USUARIO` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`ID_CURSO`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD KEY `FK_GEN_EST` (`GENERO_ID`),
  ADD KEY `FK_CURSO_EST` (`CURSO_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`ID_GENERO`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`ID_HORARIO`),
  ADD KEY `FK_PRO_HOR` (`PROFESOR_ID`),
  ADD KEY `FK_CURSO_HOR` (`CURSO_ID`),
  ADD KEY `FK_MAT_HOR` (`MATERIA_ID`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`ID_MATERIA`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ID_PROFESOR`),
  ADD KEY `FK_GEN_PRO` (`GENERO_ID`),
  ADD KEY `FK_CURSO_PRO` (`CURSO_ID`),
  ADD KEY `FK_MAT_PRO` (`MATERIA_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `ID_GENERO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `ID_MATERIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ID_PROFESOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `FK_CURSO_EST` FOREIGN KEY (`CURSO_ID`) REFERENCES `curso` (`ID_CURSO`),
  ADD CONSTRAINT `FK_GEN_EST` FOREIGN KEY (`GENERO_ID`) REFERENCES `genero` (`ID_GENERO`),
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `usuario` (`ID_USER`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `FK_CURSO_HOR` FOREIGN KEY (`CURSO_ID`) REFERENCES `curso` (`ID_CURSO`),
  ADD CONSTRAINT `FK_MAT_HOR` FOREIGN KEY (`MATERIA_ID`) REFERENCES `materia` (`ID_MATERIA`),
  ADD CONSTRAINT `FK_PRO_HOR` FOREIGN KEY (`PROFESOR_ID`) REFERENCES `profesor` (`ID_PROFESOR`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `FK_CURSO_PRO` FOREIGN KEY (`CURSO_ID`) REFERENCES `curso` (`ID_CURSO`),
  ADD CONSTRAINT `FK_GEN_PRO` FOREIGN KEY (`GENERO_ID`) REFERENCES `genero` (`ID_GENERO`),
  ADD CONSTRAINT `FK_MAT_PRO` FOREIGN KEY (`MATERIA_ID`) REFERENCES `materia` (`ID_MATERIA`),
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `usuario` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
