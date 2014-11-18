-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2014 a las 06:59:11
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `restaurant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE IF NOT EXISTS `cartas` (
`Id_carta` int(2) NOT NULL,
  `Tipo` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Descripcion` varchar(60) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`Id_carta`, `Tipo`, `Descripcion`) VALUES
(1, '1', 'Comida Mexicana'),
(2, '2', 'Desayunos'),
(3, '3', 'Comida Gourmet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`Id_cte` int(3) NOT NULL,
  `Nombre` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `CP` int(5) DEFAULT NULL,
  `Ciudad` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Colonia` int(20) DEFAULT NULL,
  `Direccion` int(30) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Email` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
`No_cuenta` int(4) NOT NULL,
  `Cliente` int(4) DEFAULT NULL,
  `SaldoTotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE IF NOT EXISTS `mesas` (
`Id_mesa` int(3) NOT NULL,
  `Nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`Id_mesa`, `Nombre`, `Precio`) VALUES
(1, 'Mesa 1', 50),
(2, 'Mesa 2', 50),
(3, 'Mesa 3', 60),
(4, 'Mesa 4', 55),
(5, 'Mesa 5', 55),
(6, 'Principal', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
`No_orden` int(3) NOT NULL,
  `Cliente` int(2) NOT NULL,
  `Pedido` int(3) NOT NULL,
  `Saldo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
`Id_pedido` int(3) NOT NULL,
  `Platillo` int(2) NOT NULL,
  `Raciones` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE IF NOT EXISTS `platillos` (
`Id_platillo` int(2) NOT NULL,
  `Tipo` int(2) DEFAULT NULL,
  `Nombre` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Descripcion` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`Id_platillo`, `Tipo`, `Nombre`, `Descripcion`, `Precio`) VALUES
(6, 1, 'Cazuela de Vacuno', 'Tapapecho o Asado de tira, Piment&oacute;n (picado en tiras), dientes de Ajo, Zanahoria (picada en tiras), Apio, Papas, Porotos Verdes, Zapallo, Arroz, Choclo, Perejil picado, agua fr&iacute;a, Or&eacute;gano Entero Gourmet, Cebolla Sal condimentada Gourmet, Ajo Sal condimentada Gourmet, Pimienta Blanca Molida Gourmet (en peque&ntilde;a cantidad), Sal.', 50),
(2, 1, 'Conejo al pulque', 'chile pasilla limpio, desvenado y asado, \r\n tomate asado, cebolla asada, dientes de ajo asados, comino, conejo, 300 ml de pulque.', 50),
(1, 2, 'Fideo soba con at&uacute;n', 'nidos de noodles de trigo, aceite de ajonjol&iacute;, salsa de soya, ajonjol&iacute;, esp&aacute;rragos, lomo de at&uacute;n fresco.', 40),
(4, 2, 'Flores Rellenas', '<strong>Mole de frijol: </strong> frijol, agua, ajo, cebolla.                                <strong>Chips de Calabaza: </strong> harina, yema de huevo, agua mineral, calabaza. <strong>flores: </strong> flor de calabaza, queso Oaxaca, crema &aacute;cida, salsa verde.', 30),
(5, 3, 'Pollo al conac', 'Presas de pollo sin piel, Sal, Pimienta Negra Molida Gourmet, Ajo en Polvo Gourmet, Or&eacute;gano Entero Gourmet, Jugo de un lim&oacute;n, mantequilla, cebolla rallada, Co&ntilde;ac, vino blanco, caldo de pollo, Aj&iacute; de color Gourmet para espolvorear.', 55),
(3, 3, 'Risotto Di Brasato Di Vitello', 'cebolla picada, dientes de ajo picados, aceite de oliva, champi&ntilde;ones blancos, fileteados, 40 gr de ternera, previamente braseada, rodajas de tomate deshidratado, vino blanco seco, arroz Arborio, tomillo, cdta de mantequilla, cda de queso Parmesano, rallado.', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE IF NOT EXISTS `reservacion` (
  `Id_reservacion` int(3) NOT NULL,
  `Cliente` int(3) NOT NULL,
  `Costo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
`Id_reservacion` int(3) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Mesa` int(3) DEFAULT NULL,
  `No_asientos` int(1) DEFAULT NULL,
  `Costo` int(11) NOT NULL,
  `Cliente` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `rol`) VALUES
(1, 'delta', '63bcabf86a9a991864777c631c5b7617', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
 ADD PRIMARY KEY (`Id_carta`), ADD KEY `Tipo` (`Tipo`,`Descripcion`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`Id_cte`), ADD KEY `Nombre` (`Nombre`,`CP`,`Ciudad`,`Colonia`,`Direccion`,`Telefono`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
 ADD PRIMARY KEY (`No_cuenta`), ADD KEY `Cliente` (`Cliente`,`SaldoTotal`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
 ADD PRIMARY KEY (`Id_mesa`), ADD KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
 ADD PRIMARY KEY (`No_orden`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
 ADD PRIMARY KEY (`Id_pedido`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
 ADD PRIMARY KEY (`Id_platillo`), ADD KEY `Tipo` (`Tipo`,`Nombre`,`Descripcion`,`Precio`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
 ADD PRIMARY KEY (`Id_reservacion`,`Cliente`), ADD KEY `Saldo` (`Costo`), ADD KEY `ReservFK2` (`Cliente`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
 ADD PRIMARY KEY (`Id_reservacion`), ADD KEY `Fecha` (`Fecha`,`Hora`,`Mesa`,`No_asientos`), ADD KEY `Mesa` (`Mesa`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
MODIFY `Id_carta` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `Id_cte` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
MODIFY `No_cuenta` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
MODIFY `Id_mesa` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
MODIFY `No_orden` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
MODIFY `Id_pedido` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
MODIFY `Id_platillo` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
MODIFY `Id_reservacion` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
ADD CONSTRAINT `CuentaFK` FOREIGN KEY (`Cliente`) REFERENCES `cliente` (`Id_cte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `platillos`
--
ALTER TABLE `platillos`
ADD CONSTRAINT `platillos_ibfk_1` FOREIGN KEY (`Tipo`) REFERENCES `cartas` (`Id_carta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservacion`
--
ALTER TABLE `reservacion`
ADD CONSTRAINT `ReservFK1` FOREIGN KEY (`Id_reservacion`) REFERENCES `reservaciones` (`Id_reservacion`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ReservFK2` FOREIGN KEY (`Cliente`) REFERENCES `cliente` (`Id_cte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
ADD CONSTRAINT `ReservacionFK` FOREIGN KEY (`Mesa`) REFERENCES `mesas` (`Id_mesa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
