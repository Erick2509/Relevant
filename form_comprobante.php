<?php
include './bd/conexion.php';
$consulta = "TRUNCATE TABLE carrito";
$resultado = mysqli_query($conexion, $consulta);

header('location: catalogo.php');
