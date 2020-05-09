-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2020 a las 20:41:44
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `cedula` int(10) NOT NULL,
  `identidad` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `fecha` varchar(12) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `departamento` varchar(12) NOT NULL,
  `ciudad` varchar(12) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `fora_clave` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`cedula`, `identidad`, `nombre`, `apellido`, `direccion`, `fecha`, `sexo`, `departamento`, `ciudad`, `correo`, `fora_clave`) VALUES
(1, 'cedula', 'yuver', 'hurta', 'boston', '1999-01-05', 'Hombre', '8', 'Florencia', 'yuver@gmail.com', '12345'),
(12, 'cedula', 'h', 'hh', 'vg', '1996-02-07', 'Hombre', '8', 'Florencia', 'fghj@gmail.com', '12345'),
(321, 'cedula', 'santiago', 'hurtado', 'boston', '1994-03-10', 'Hombre', '3', 'Arauca', 'sant16@gmail.com', '12345'),
(345, 'cedula', 'katerine', 'ibarguen', 'boston', '1993-02-03', 'Mujer', '3', 'Arauca', 'ka@gmail.com', '12345'),
(678, 'cedula', 'Nairo', 'na', 'boston', '2000-01-03', 'Hombre', '7', 'Manizales', 'na@gmail.com', '12345'),
(1007571768, 'cedula', 'yuver', 'Hurtado', 'boston', '1999-01-04', 'Sexo', '1', 'Leticia', 'a@gmail.com', '12345');

--
-- Disparadores `administrador`
--
DELIMITER $$
CREATE TRIGGER `cuenta_defecto` AFTER INSERT ON `administrador` FOR EACH ROW INSERT INTO cuestas_administrador(correo, estado, cedula) VALUES(new.correo,'activo', new.cedula)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestas_administrador`
--

CREATE TABLE `cuestas_administrador` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuestas_administrador`
--

INSERT INTO `cuestas_administrador` (`id`, `cedula`, `correo`, `estado`) VALUES
(1, 1007571768, '20yuver', 'activo'),
(6, 345, 'ka@gmail.com', 'activo'),
(7, 678, 'na@gmail.com', 'activo'),
(8, 321, 'sant16@gmail.com', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestas_egresado`
--

CREATE TABLE `cuestas_egresado` (
  `id` int(11) NOT NULL,
  `cedu` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuestas_egresado`
--

INSERT INTO `cuestas_egresado` (`id`, `cedu`, `correo`, `estado`) VALUES
(4, 123456, '20perez', 'activo'),
(7, 436, '20rogelio', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desactivar_admi`
--

CREATE TABLE `desactivar_admi` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `justifica` varchar(300) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `desactivar_admi`
--

INSERT INTO `desactivar_admi` (`id`, `cedula`, `justifica`, `estado`) VALUES
(18, 321, 'no deseo esta  cuenta', 'en tramite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresado`
--

CREATE TABLE `egresado` (
  `cedu` int(11) NOT NULL,
  `identidad` varchar(70) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellido` varchar(70) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `fecha` varchar(70) NOT NULL,
  `sexo` varchar(70) NOT NULL,
  `departamento` varchar(70) NOT NULL,
  `ciudad` varchar(70) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresado`
--

INSERT INTO `egresado` (`cedu`, `identidad`, `nombre`, `apellido`, `direccion`, `fecha`, `sexo`, `departamento`, `ciudad`, `correo`, `cedula`) VALUES
(436, 'cedula', 'rogelio', 'pataquiva', 'boston', '1999-02-10', 'Hombre', '0', '-', 'rogelio@gmail.com', 1007571768),
(123456, 'cedula', 'pedro', 'perez', 'boston', '1999-03-11', 'Hombre', '1', 'Leticia', 'perez@gmail.com', 1007571768);

--
-- Disparadores `egresado`
--
DELIMITER $$
CREATE TRIGGER `por_defecto_egresado` AFTER INSERT ON `egresado` FOR EACH ROW INSERT INTO cuestas_egresado(correo, estado, cedu) VALUES(new.correo,'activo', new.cedu)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intereses`
--

CREATE TABLE `intereses` (
  `id` int(11) NOT NULL,
  `interes` varchar(79) NOT NULL,
  `cedu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `intereses`
--

INSERT INTO `intereses` (`id`, `interes`, `cedu`) VALUES
(3, 'Tecnologia', 436);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super_usuario`
--

CREATE TABLE `super_usuario` (
  `fora_clave` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `super_usuario`
--

INSERT INTO `super_usuario` (`fora_clave`, `correo`) VALUES
('12345', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `fora_clave` (`fora_clave`);

--
-- Indices de la tabla `cuestas_administrador`
--
ALTER TABLE `cuestas_administrador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `cuestas_egresado`
--
ALTER TABLE `cuestas_egresado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedu` (`cedu`);

--
-- Indices de la tabla `desactivar_admi`
--
ALTER TABLE `desactivar_admi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD PRIMARY KEY (`cedu`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `intereses`
--
ALTER TABLE `intereses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedu` (`cedu`);

--
-- Indices de la tabla `super_usuario`
--
ALTER TABLE `super_usuario`
  ADD PRIMARY KEY (`fora_clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestas_administrador`
--
ALTER TABLE `cuestas_administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cuestas_egresado`
--
ALTER TABLE `cuestas_egresado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `desactivar_admi`
--
ALTER TABLE `desactivar_admi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `intereses`
--
ALTER TABLE `intereses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fora_clave` FOREIGN KEY (`fora_clave`) REFERENCES `super_usuario` (`fora_clave`);

--
-- Filtros para la tabla `cuestas_administrador`
--
ALTER TABLE `cuestas_administrador`
  ADD CONSTRAINT `cuestas_administrador_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `administrador` (`cedula`);

--
-- Filtros para la tabla `cuestas_egresado`
--
ALTER TABLE `cuestas_egresado`
  ADD CONSTRAINT `cuestas_egresado_ibfk_1` FOREIGN KEY (`cedu`) REFERENCES `egresado` (`cedu`);

--
-- Filtros para la tabla `desactivar_admi`
--
ALTER TABLE `desactivar_admi`
  ADD CONSTRAINT `desactivar_admi_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `administrador` (`cedula`);

--
-- Filtros para la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD CONSTRAINT `egresado_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `administrador` (`cedula`);

--
-- Filtros para la tabla `intereses`
--
ALTER TABLE `intereses`
  ADD CONSTRAINT `intereses_ibfk_1` FOREIGN KEY (`cedu`) REFERENCES `egresado` (`cedu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
