-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2023 a las 09:56:32
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
(1, 'prueba@gmail.com', 'Correo de prueba'),
(2, 'correo@gmail.com', 'correo de prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos_pagos`
--

CREATE TABLE `metodos_pagos` (
  `id_pago` int(11) NOT NULL,
  `tipo_pago` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `instrucciones` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `metodos_pagos`
--

INSERT INTO `metodos_pagos` (`id_pago`, `tipo_pago`, `descripcion`, `instrucciones`) VALUES
(1, 'Depósito Bancario', 'Puedes realizar tus pagos realizando un depósito bancario a\r\n                    nombre de RELEVANT en nuestras cuentas de: BCP: Cuenta\r\n                    Corriente Soles: 000-0000000-0-00', 'Una vez realizado tu pago, envianos el voucher/comprobante de deposito al Whatsapp:999999999 o al correo relevant@gmail.com. Verficaremos que el deposito se haya recibido correctamente para poder preparar tu pedido. El tiempo de entrega comienza a contar desde el dia de pago.'),
(2, 'Yape/Plin', 'Puedes realizar tus pagos de Yape o Plin en el siguiente numero : 999999999', 'Para pagar en Yape sigue los siguientes pasos:  Ingresa al app de Yape. Presiona el boton \"Yapear\" en la pantalla principal Busca en tus contactos el numero: 999999999 Ingresa el monto a pagar Presiona \"Yapear\" y listo Una vez realizado tu pago, envianos el voucher/comprobante de deposito al Whatsapp:999999999 o al correo relevant@gmail.com. Verficaremos que el deposito se haya recibido correctamente para poder preparar tu pedido. El tiempo de entrega comienza a contar desde el dia de pago.'),
(3, 'Paypal', 'Puedes realizar tus pagos de Paypal al siguiente correo electrónico: correo@gmail.com\r\n                                                         ', 'Una vez realizado tu pago, envianos el voucher/comprobante de deposito al Whatsapp:999999999 o al correo relevant@gmail.com. Verficaremos que el deposito se haya recibido correctamente para poder preparar tu pedido. El tiempo de entrega comienza a contar desde el dia de pago.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `codigo_producto` varchar(250) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `precio_lista` decimal(10,2) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `imagen2` varchar(100) NOT NULL,
  `imagen3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `descripcion`, `codigo_producto`, `precio`, `precio_lista`, `imagen`, `imagen2`, `imagen3`) VALUES
(1, 'Short deportivo de compresión para hombre', 'SANTOR SKU: 1000241861', 89.90, 110.90, 'imagenes/short.jpg', 'imagenes/prueba01.webp', 'imagenes/prueba02.webp'),
(2, 'Adidas - Buzo Negro para Hombres', 'CASAD ADI: 20124578', 99.90, 119.90, 'imagenes/img_adidas/buzo1.webp', 'imagenes/img_adidas/buzo1-1.webp', 'imagenes/img_adidas/buzo1-2.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_envio`
--

CREATE TABLE `tipo_envio` (
  `id_envio` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipo_envio`
--

INSERT INTO `tipo_envio` (`id_envio`, `descripcion`, `precio`) VALUES
(1, 'Envío express - 1 a 3 días hábiles', 59.90),
(2, 'Envío regular - 3 a 5 días hábiles', 30.90),
(3, 'Recojo en - Tienda 1\r\n', 11.90),
(4, 'Recojo en - Tienda 2', 10.90),
(5, 'Recojo en - Tienda 3', 9.90);

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
  `genero` varchar(20) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `correo`, `contraseña`, `nombre`, `apellido`, `numdocu`, `nacimiento`, `genero`, `pais`, `direccion`, `referencia`, `codigo_postal`, `ciudad`, `region`, `telefono`) VALUES
(1, 'prueba@gmail.com', '123456', 'Prueba', 'Prueba', 78451235, '2023-07-19', 'Masculino', 'Peru', 'Lima', 'Jiron 1245', 20124, 'Lima', 'Lima', 978451245),
(2, 'prueba2@gmail.com', '123456', 'Prueba2', 'Prueba2', 78451245, '2023-07-03', 'Masculino', 'Peru', 'Jiron 1234', 'cerca', 20145, 'Lima', 'Lima', 978451245),
(4, 'prueba3@gmail.com', '1234', 'Prueba3', 'prueba3', 784512358, '2023-07-12', 'Masculino', 'Peru', 'jiron', 'Lima', 20154, 'Lima', 'Lima', 999999999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `metodoPago` varchar(100) NOT NULL,
  `Tenvio` varchar(100) NOT NULL,
  `Penvio` decimal(10,2) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `descripcion`, `precio`, `cantidad`, `total`, `metodoPago`, `Tenvio`, `Penvio`, `fecha`, `id_usuario`) VALUES
(3, 'Short deportivo de compresión para hombre', 89.90, 1, 89.90, 'Depósito Bancario', 'Envío express - 1 a 3 días hábiles', 59.90, '2023-07-11 15:54:50', 1),
(4, 'Short deportivo de compresión para hombre', 89.90, 8, 719.20, 'Paypal', 'Recojo en - Tienda 3', 9.90, '2023-07-13 23:18:57', 1),
(5, 'Adidas - Buzo Negro para Hombres', 99.90, 6, 599.40, 'Paypal', 'Recojo en - Tienda 3', 9.90, '2023-07-13 23:18:57', 1),
(6, 'Adidas - Buzo Negro para Hombres', 99.90, 1, 99.90, 'Depósito Bancario', 'Envío express - 1 a 3 días hábiles', 59.90, '2023-07-15 02:39:18', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_correo`);

--
-- Indices de la tabla `metodos_pagos`
--
ALTER TABLE `metodos_pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tipo_envio`
--
ALTER TABLE `tipo_envio`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `usuarios_id_usuario_ventas` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `metodos_pagos`
--
ALTER TABLE `metodos_pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_envio`
--
ALTER TABLE `tipo_envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `usuarios_id_usuario_ventas` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
