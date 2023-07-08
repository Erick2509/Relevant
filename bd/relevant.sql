-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2023 a las 07:08:34
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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `id_usuario` int(11) NOT NULL,
  `tipoenvio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `envio_venta`
--

INSERT INTO `envio_venta` (`id_tipoenvio`, `id_usuario`, `tipoenvio`) VALUES
(5, 1, 11.90),
(7, 1, 59.90),
(8, 1, 59.90),
(9, 1, 59.90),
(10, 1, 59.90);

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
(3, 'prueba@gmail.com', 'Peru', 'Prueba', 'Prueba', 74857987, 'direccion prueba', 'prueba', 12478, 'prueba', 'Lima', 124578451),
(4, 'pruebasinlogin@gmail.com', 'Peru', 'pruebasin', 'pruebasin', 45784578, 'lima', 'lima', 2147483647, 'lima', 'Ancash', 21465464);

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
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id_Metodopago` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `metodo_pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `metodo_pago`
--

INSERT INTO `metodo_pago` (`id_Metodopago`, `id_usuario`, `metodo_pago`) VALUES
(14, 1, 'Paypal'),
(16, 1, 'Depósito Bancario'),
(17, 1, 'Paypal'),
(18, 1, 'Yape/Plin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Short deportivo de compresión para hombre', 89.90, 'imagenes/short.jpg'),
(2, 'Short deportivo de compresión para hombre', 89.90, 'imagenes/short.jpg');

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
(1, 'prueba@gmail.com', '123456', 'Erick', 'Castillo', 74587845, '2001-12-20', 'Masculino'),
(2, 'prueba2modificado@gmail.com', 'contraseñamodificada', 'ErickModificado', 'CastilloModificado', 12345678, '2023-07-04', 'Masculino'),
(3, 'prueba2@gmail.com', '123456', 'prueba2', 'prueba2', 457841245, '2023-07-06', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_informacion`
--

CREATE TABLE `usuario_informacion` (
  `id_usuarioinfo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario_informacion`
--

INSERT INTO `usuario_informacion` (`id_usuarioinfo`, `id_usuario`, `pais`, `direccion`, `referencia`, `codigo_postal`, `ciudad`, `region`, `telefono`) VALUES
(1, 1, 'Peru', 'LIMAINFO', 'LIMAINFO', 123456, 'LIMAINFO', 'Lima', 978451247),
(10, 1, '', 'LIMAINFO', 'LIMAINFO', 123456, 'LIMAINFO', '', 978451247);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `usuarios_id_usuario_prenda` (`id_usuario`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_correo`);

--
-- Indices de la tabla `envio_venta`
--
ALTER TABLE `envio_venta`
  ADD PRIMARY KEY (`id_tipoenvio`),
  ADD KEY `usuarios_id_usuario_envio_venta` (`id_usuario`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `metodos_pagos`
--
ALTER TABLE `metodos_pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id_Metodopago`),
  ADD KEY `usuarios_id_usuario_metodo_pago` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_informacion`
--
ALTER TABLE `usuario_informacion`
  ADD PRIMARY KEY (`id_usuarioinfo`),
  ADD KEY `usuarios_id_usuario_usuario_informacion` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `envio_venta`
--
ALTER TABLE `envio_venta`
  MODIFY `id_tipoenvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `metodos_pagos`
--
ALTER TABLE `metodos_pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `id_Metodopago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_informacion`
--
ALTER TABLE `usuario_informacion`
  MODIFY `id_usuarioinfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `usuarios_id_usuario_prenda` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `envio_venta`
--
ALTER TABLE `envio_venta`
  ADD CONSTRAINT `usuarios_id_usuario_envio_venta` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD CONSTRAINT `usuarios_id_usuario_metodo_pago` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_informacion`
--
ALTER TABLE `usuario_informacion`
  ADD CONSTRAINT `usuarios_id_usuario_usuario_informacion` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
