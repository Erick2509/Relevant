<?php
session_start();
include './bd/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $metodoPago = $_POST['metodo_pago'];
}
$_SESSION['Mpago'] = $metodoPago;

//NUMERO PEDIDO
if (isset($_SESSION['CARRITO']) && count($_SESSION['CARRITO']) > 0) {
  // Obtener el número de boleta actual
  $numeroBoleta = isset($_SESSION['numeroBoleta']) ? $_SESSION['numeroBoleta'] : 0;

  // Incrementar el número de boleta para la próxima boleta
  $numeroBoleta++;
  $_SESSION['numeroBoleta'] = $numeroBoleta;
}


foreach ($_SESSION['CARRITO'] as $indice => $producto) {

  $consulta = 'INSERT INTO ventas (descripcion, precio, cantidad, total, metodoPago, Tenvio, Penvio,fecha, id_usuario)
VALUES ("' . $producto['descripcion'] . '","' . $producto['precio'] . '","' . $producto['cantidad'] . '","' . ($producto['precio'] * $producto['cantidad']) . '",
"' . $_SESSION['Mpago'] . '","' . $_SESSION['Denvio'] . '","' . $_SESSION['Tenvio'] . '", NOW(),"' . $_SESSION['id'] . '")';
  mysqli_query($conexion, $consulta);
}

header("Location: comprobante.php");
