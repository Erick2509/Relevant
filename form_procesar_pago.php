<?php
session_start();
include './bd/conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $metodoPago = $_POST['metodo_pago'];
}
$_SESSION['Mpago'] = $metodoPago;

foreach ($_SESSION['CARRITO'] as $indice => $producto) {

  $consulta = 'INSERT INTO ventas (descripcion, precio, cantidad, total, metodoPago, Tenvio, Penvio, id_usuario)
VALUES ("' . $producto['descripcion'] . '","' . $producto['precio'] . '","' . $producto['cantidad'] . '","' . ($producto['precio'] * $producto['cantidad']) . '",
"' . $_SESSION['Mpago'] . '","' . $_SESSION['Denvio'] . '","' . $_SESSION['Tenvio'] . '","' . $_SESSION['id'] . '")';
  mysqli_query($conexion, $consulta);
}

header("Location: comprobante.php");
