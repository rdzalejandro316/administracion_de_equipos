-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2016 a las 02:14:43
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventarios_soft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios_hw`
--

CREATE TABLE IF NOT EXISTS `accesorios_hw` (
`ID_ACCESORIO` int(11) NOT NULL,
  `DESCRIPCION` varchar(150) DEFAULT NULL,
  `MARCA` varchar(100) DEFAULT NULL,
  `MODELO` varchar(50) DEFAULT NULL,
  `TIPO` varchar(30) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `accesorios_hw`
--

INSERT INTO `accesorios_hw` (`ID_ACCESORIO`, `DESCRIPCION`, `MARCA`, `MODELO`, `TIPO`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(1, 'aaaa', 'aaaaaa', 'aaaaaa', 'aa', '0000-00-00', '00:00:00', 'aaa'),
(2, 'aas', 'aaaaaaa', 'aaa', 'a', '2016-12-31', '23:59:00', 'aaaaaaa'),
(5, 'aaaa', 'aaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaa', '2016-01-01', '00:00:00', 'aaaaaaaaaa'),
(14, 'A', 'A', 'A', 'A', '2015-01-02', '01:01:00', 'A'),
(55, 'a', 'a', 'a', 'a', '2016-01-01', '00:00:00', 'aaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
`ID_BITACORA` int(11) NOT NULL,
  `N_EQUIPO` int(11) NOT NULL,
  `DESCRIPCION` varchar(250) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` int(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=256 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`ID_BITACORA`, `N_EQUIPO`, `DESCRIPCION`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 5, 'a', '2016-05-03', '05:00:00', 0),
(99, 99, 'ppp', '2017-02-02', '01:03:00', 88),
(255, 155, 'aaa', '2016-01-01', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `board`
--

CREATE TABLE IF NOT EXISTS `board` (
`IDBOARD` int(11) NOT NULL,
  `MARCA` varchar(100) DEFAULT NULL,
  `MODELO` varchar(50) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `board`
--

INSERT INTO `board` (`IDBOARD`, `MARCA`, `MODELO`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(1, 'a', 'a', '2016-05-04', '08:23:00', 'aaa'),
(2, 'a', 'a', '2016-01-01', '00:00:00', 'a'),
(5, 'a', 'a', '2017-01-03', '00:01:00', '24242465');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_rol`
--

CREATE TABLE IF NOT EXISTS `c_rol` (
`IDROL` int(11) NOT NULL,
  `ROL` varchar(20) DEFAULT NULL,
  `IDUSUARIO` int(11) NOT NULL,
  `OBS` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `c_rol`
--

INSERT INTO `c_rol` (`IDROL`, `ROL`, `IDUSUARIO`, `OBS`) VALUES
(1, 'a', 0, 'a'),
(2, 'a', 0, 'a'),
(5, 'a', 5, 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_usuario`
--

CREATE TABLE IF NOT EXISTS `c_usuario` (
  `USUARIO` varchar(20) DEFAULT NULL,
  `CLAVE` varchar(50) DEFAULT NULL,
`ID_USUARIO` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `c_usuario`
--

INSERT INTO `c_usuario` (`USUARIO`, `CLAVE`, `ID_USUARIO`) VALUES
('alejo', 'alejo', 1),
('juan', 'juan', 4),
('luis', 'luis', 8),
('9', '9', 9),
('perez', 'perez', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_salas`
--

CREATE TABLE IF NOT EXISTS `equipos_salas` (
`N_EQUIPO` int(11) NOT NULL,
  `ACTIVO_PC` varchar(6) DEFAULT NULL,
  `PC_GENERICO` int(11) NOT NULL,
  `SALONES` int(11) NOT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `equipos_salas`
--

INSERT INTO `equipos_salas` (`N_EQUIPO`, `ACTIVO_PC`, `PC_GENERICO`, `SALONES`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 'ss', 55, 5, '2016-05-03', '11:00:00', 'ssss'),
(9, '9', 9, 9, '2016-01-01', '00:00:00', '9'),
(22, 'q', 222, 222, '2016-05-04', '04:00:00', 'aaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_poder`
--

CREATE TABLE IF NOT EXISTS `f_poder` (
`IDF_PODER` int(11) NOT NULL,
  `MARCA` varchar(100) DEFAULT NULL,
  `MODELO` varchar(50) DEFAULT NULL,
  `VOLTAJE` varchar(30) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `f_poder`
--

INSERT INTO `f_poder` (`IDF_PODER`, `MARCA`, `MODELO`, `VOLTAJE`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(4, 'AA', 'aaaaaaa', 'A', '2016-05-05', '09:12:15', NULL),
(5, 'A', 'A', 'A', '2016-05-04', '15:00:00', 'AAAAA'),
(8, '8', '8', '8', '2016-01-01', '00:00:00', '87');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hdd`
--

CREATE TABLE IF NOT EXISTS `hdd` (
`IDHDD` int(11) NOT NULL,
  `MARCA` varchar(30) DEFAULT NULL,
  `CAPACIDAD` varchar(20) DEFAULT NULL,
  `TIPO` varchar(20) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `hdd`
--

INSERT INTO `hdd` (`IDHDD`, `MARCA`, `CAPACIDAD`, `TIPO`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 'SS', 'SSS', 'SSS', '2016-05-04', '07:00:00', 'ASSS'),
(9, '9', '9', '9', '2016-01-09', '09:00:00', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_software`
--

CREATE TABLE IF NOT EXISTS `list_software` (
`ID_SOFT` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `VERSION_S` varchar(20) DEFAULT NULL,
  `TIPO` varchar(50) DEFAULT NULL,
  `ID_SALON` int(11) NOT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `list_software`
--

INSERT INTO `list_software` (`ID_SOFT`, `NOMBRE`, `VERSION_S`, `TIPO`, `ID_SALON`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 'a', 'a', 'a', 4, '2016-05-05', '04:00:00', 'dddddd'),
(9, '9', '9', '9', 9, '0009-09-09', '09:09:00', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_generico`
--

CREATE TABLE IF NOT EXISTS `pc_generico` (
`IDPC_GEN` int(11) NOT NULL,
  `IDBOARD` int(11) NOT NULL,
  `IDPROCESADOR` int(11) NOT NULL,
  `IDRAM` int(11) NOT NULL,
  `IDF_PODER` int(11) NOT NULL,
  `IDHDD` int(11) NOT NULL,
  `IDUNIDAD_DVD` int(11) NOT NULL,
  `IDACCESORIO` int(11) NOT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `pc_generico`
--

INSERT INTO `pc_generico` (`IDPC_GEN`, `IDBOARD`, `IDPROCESADOR`, `IDRAM`, `IDF_PODER`, `IDHDD`, `IDUNIDAD_DVD`, `IDACCESORIO`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 1, 4, 4, 4, 5, 4, 1, '2016-05-04', '07:00:00', 'sssssssss'),
(9, 9, 9, 9, 9, 9, 9, 9, '0009-09-09', '09:09:00', '9'),
(55, 1, 5, 5, 4, 5, 0, 1, '2016-05-03', '08:00:00', 'ssssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_salones`
--

CREATE TABLE IF NOT EXISTS `pc_salones` (
`ID_SALON` int(11) NOT NULL,
  `IDTORRE` int(11) NOT NULL,
  `SALON` varchar(50) DEFAULT NULL,
  `PROCESADOR` varchar(60) DEFAULT NULL,
  `RAMTOTAL` varchar(10) DEFAULT NULL,
  `HDD` varchar(20) DEFAULT NULL,
  `CANT_PC` varchar(2) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Volcado de datos para la tabla `pc_salones`
--

INSERT INTO `pc_salones` (`ID_SALON`, `IDTORRE`, `SALON`, `PROCESADOR`, `RAMTOTAL`, `HDD`, `CANT_PC`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 5, 's', 's', 's', 's', 's', NULL, '04:00:00', 'ssss'),
(98, 9, '9', '9', '9', '9', '9', '0009-09-09', '09:09:00', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perisferico`
--

CREATE TABLE IF NOT EXISTS `perisferico` (
`IDPERISFERICO` int(11) NOT NULL,
  `N_EQUIPO` int(11) NOT NULL,
  `ACTIVO` varchar(6) DEFAULT NULL,
  `DESCRIPCION` varchar(150) DEFAULT NULL,
  `MARCA` varchar(100) DEFAULT NULL,
  `MODELO` varchar(50) DEFAULT NULL,
  `TIPO` varchar(30) DEFAULT NULL,
  `SERIAL` varchar(40) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `perisferico`
--

INSERT INTO `perisferico` (`IDPERISFERICO`, `N_EQUIPO`, `ACTIVO`, `DESCRIPCION`, `MARCA`, `MODELO`, `TIPO`, `SERIAL`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(2, 2, 'a', 'a', 'a', 'aaaaaaa', 'a', 'a', '2016-05-04', '08:00:00', 'a'),
(9, 9, '9', '9', '9', '9', '9', '9', '0009-09-09', '09:09:00', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesador`
--

CREATE TABLE IF NOT EXISTS `procesador` (
`IDPROCESADOR` int(11) NOT NULL,
  `PROCESADOR` varchar(50) DEFAULT NULL,
  `MODELO` varchar(50) DEFAULT NULL,
  `VELOCIDAD` varchar(20) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `procesador`
--

INSERT INTO `procesador` (`IDPROCESADOR`, `PROCESADOR`, `MODELO`, `VELOCIDAD`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(6, 'rf', 'rr', 'r', '2016-05-04', '13:00:00', 'xxxxxxxxx'),
(9, '9', '9', '9', '0009-09-09', '09:09:00', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ram`
--

CREATE TABLE IF NOT EXISTS `ram` (
`IDRAM` int(11) NOT NULL,
  `MARCA` varchar(100) DEFAULT NULL,
  `TIPO` varchar(20) DEFAULT NULL,
  `CAPACIDAD` varchar(20) DEFAULT NULL,
  `BUS` varchar(20) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ram`
--

INSERT INTO `ram` (`IDRAM`, `MARCA`, `TIPO`, `CAPACIDAD`, `BUS`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 'a', 'a', 'a', 'a', '2016-05-04', '11:00:00', 'aaaaaa'),
(9, '9', '9', '9', '9', '0009-09-09', '09:09:00', '999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torre`
--

CREATE TABLE IF NOT EXISTS `torre` (
`IDTORRE` int(11) NOT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL,
  `DIRECCION` varchar(60) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `torre`
--

INSERT INTO `torre` (`IDTORRE`, `DESCRIPCION`, `TELEFONO`, `DIRECCION`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(5, 's', 's', 's', '2016-05-04', '07:00:00', 'sssssssssss'),
(9, '9', '9', '9', '0000-00-00', '09:09:00', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_dvd`
--

CREATE TABLE IF NOT EXISTS `unidad_dvd` (
`IDUNIDAD_DVD` int(11) NOT NULL,
  `MARCA` varchar(30) DEFAULT NULL,
  `MODELO` varchar(50) DEFAULT NULL,
  `TIPO` varchar(20) DEFAULT NULL,
  `FECHA_CR` date DEFAULT NULL,
  `HORA_CR` time DEFAULT NULL,
  `OBS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2147483647 ;

--
-- Volcado de datos para la tabla `unidad_dvd`
--

INSERT INTO `unidad_dvd` (`IDUNIDAD_DVD`, `MARCA`, `MODELO`, `TIPO`, `FECHA_CR`, `HORA_CR`, `OBS`) VALUES
(9, '9', '9', '9', '0009-09-09', '09:09:00', '9'),
(2147483647, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', '2016-05-05', '07:00:00', '5b9bb1258e9f63f2bcf062c48fab080bdf8e47bf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios_hw`
--
ALTER TABLE `accesorios_hw`
 ADD PRIMARY KEY (`ID_ACCESORIO`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
 ADD PRIMARY KEY (`ID_BITACORA`), ADD KEY `OBS` (`OBS`);

--
-- Indices de la tabla `board`
--
ALTER TABLE `board`
 ADD PRIMARY KEY (`IDBOARD`);

--
-- Indices de la tabla `c_rol`
--
ALTER TABLE `c_rol`
 ADD PRIMARY KEY (`IDROL`);

--
-- Indices de la tabla `c_usuario`
--
ALTER TABLE `c_usuario`
 ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `equipos_salas`
--
ALTER TABLE `equipos_salas`
 ADD PRIMARY KEY (`N_EQUIPO`);

--
-- Indices de la tabla `f_poder`
--
ALTER TABLE `f_poder`
 ADD PRIMARY KEY (`IDF_PODER`);

--
-- Indices de la tabla `hdd`
--
ALTER TABLE `hdd`
 ADD PRIMARY KEY (`IDHDD`);

--
-- Indices de la tabla `list_software`
--
ALTER TABLE `list_software`
 ADD PRIMARY KEY (`ID_SOFT`);

--
-- Indices de la tabla `pc_generico`
--
ALTER TABLE `pc_generico`
 ADD PRIMARY KEY (`IDPC_GEN`);

--
-- Indices de la tabla `pc_salones`
--
ALTER TABLE `pc_salones`
 ADD PRIMARY KEY (`ID_SALON`);

--
-- Indices de la tabla `perisferico`
--
ALTER TABLE `perisferico`
 ADD PRIMARY KEY (`IDPERISFERICO`);

--
-- Indices de la tabla `procesador`
--
ALTER TABLE `procesador`
 ADD PRIMARY KEY (`IDPROCESADOR`);

--
-- Indices de la tabla `ram`
--
ALTER TABLE `ram`
 ADD PRIMARY KEY (`IDRAM`);

--
-- Indices de la tabla `torre`
--
ALTER TABLE `torre`
 ADD PRIMARY KEY (`IDTORRE`);

--
-- Indices de la tabla `unidad_dvd`
--
ALTER TABLE `unidad_dvd`
 ADD PRIMARY KEY (`IDUNIDAD_DVD`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorios_hw`
--
ALTER TABLE `accesorios_hw`
MODIFY `ID_ACCESORIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
MODIFY `ID_BITACORA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT de la tabla `board`
--
ALTER TABLE `board`
MODIFY `IDBOARD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `c_rol`
--
ALTER TABLE `c_rol`
MODIFY `IDROL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `c_usuario`
--
ALTER TABLE `c_usuario`
MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `equipos_salas`
--
ALTER TABLE `equipos_salas`
MODIFY `N_EQUIPO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `f_poder`
--
ALTER TABLE `f_poder`
MODIFY `IDF_PODER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `hdd`
--
ALTER TABLE `hdd`
MODIFY `IDHDD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `list_software`
--
ALTER TABLE `list_software`
MODIFY `ID_SOFT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `pc_generico`
--
ALTER TABLE `pc_generico`
MODIFY `IDPC_GEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `pc_salones`
--
ALTER TABLE `pc_salones`
MODIFY `ID_SALON` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT de la tabla `perisferico`
--
ALTER TABLE `perisferico`
MODIFY `IDPERISFERICO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `procesador`
--
ALTER TABLE `procesador`
MODIFY `IDPROCESADOR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ram`
--
ALTER TABLE `ram`
MODIFY `IDRAM` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `torre`
--
ALTER TABLE `torre`
MODIFY `IDTORRE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `unidad_dvd`
--
ALTER TABLE `unidad_dvd`
MODIFY `IDUNIDAD_DVD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2147483647;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
