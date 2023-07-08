<?php
session_start();
include './bd/conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Procesar el formulario de envío aquí
  $selectedEnvio = $_POST['envio'];
}

$consulta = 'INSERT INTO envio_venta (id_usuario,tipoenvio) VALUES ("' . $_SESSION['id'] . '","' . $selectedEnvio . '")';
mysqli_query($conexion, $consulta);



// Redireccionar al siguiente paso
header("Location: pago.php");
