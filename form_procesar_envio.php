<?php
include './bd/conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Procesar el formulario de envío aquí
  $selectedEnvio = $_POST['envio'];
}
$consulta = 'INSERT INTO envio_venta (tipoenvio) VALUES ("' . $selectedEnvio . '")';
mysqli_query($conexion, $consulta);

// Redireccionar al siguiente paso
header("Location: pago.php");
