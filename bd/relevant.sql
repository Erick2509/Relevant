-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2023 a las 06:20:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `relevant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_correo` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `opinion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_correo`, `correo`, `opinion`) VALUES
(1, 'castilloerick760@gmail.com', 'Prueba de correo de opinion cargada a la base de datos'),
(2, 'prueba2@gmail.com', 'prueba2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio_venta`
--

CREATE TABLE `envio_venta` (
  `id_tipoenvio` int(11) NOT NULL,
  `tipoenvio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `envio_venta`
--

INSERT INTO `envio_venta` (`id_tipoenvio`, `tipoenvio`) VALUES
(1, 19.9),
(2, 59.9),
(3, 59.9),
(4, 19.9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id_informacion` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `numdocu` int(8) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `codigo_postal` int(20) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id_informacion`, `correo`, `pais`, `nombre`, `apellido`, `numdocu`, `direccion`, `referencia`, `codigo_postal`, `ciudad`, `region`, `telefono`) VALUES
(2, 'castilloerick760@gmail.com', 'Peru', 'Erick', 'Castillo', 72784578, 'Jiron Junin 378', 'cercado de lima', 20457, 'lima', 'Lima', 978451236),
(3, 'prueba@gmail.com', 'Peru', 'Prueba', 'Prueba', 74857987, 'direccion prueba', 'prueba', 12478, 'prueba', 'Lima', 124578451);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id_Metodopago` int(11) NOT NULL,
  `metodo_pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `metodo_pago`
--

INSERT INTO `metodo_pago` (`id_Metodopago`, `metodo_pago`) VALUES
(6, 'Depósito Bancario'),
(7, 'Paypal'),
(8, 'Paypal'),
(9, 'Depósito Bancario'),
(10, 'Yape/Plin'),
(11, 'Paypal'),
(12, 'Paypal'),
(13, 'Depósito Bancario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `numdocu` int(8) NOT NULL,
  `nacimiento` date NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `correo`, `contraseña`, `nombre`, `apellido`, `numdocu`, `nacimiento`, `genero`) VALUES
(4, 'correo@prueba.com', '123456', 'Prueba', 'Prueba', 78451236, '2023-06-20', 'Masculino'),
(5, 'correoprueba2@gmail.com', 'prueba2', 'prueba2', 'prueba2', 45784124, '2023-06-29', 'Masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_correo`);

--
-- Indices de la tabla `envio_venta`
--
ALTER TABLE `envio_venta`
  ADD PRIMARY KEY (`id_tipoenvio`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id_Metodopago`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `envio_venta`
--
ALTER TABLE `envio_venta`
  MODIFY `id_tipoenvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `id_Metodopago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
