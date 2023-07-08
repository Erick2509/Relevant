<?php
include './bd/conexion.php';
$idcarrito = $_GET['idproducto'];
$consulta = 'DELETE FROM carrito WHERE id_carrito=' . $idcarrito;
mysqli_query($conexion, $consulta);
header('Location: carrito.php');
