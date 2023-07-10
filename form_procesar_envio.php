<?php
session_start();
include './bd/conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Procesar el formulario de envío aquí
  $selectedEnvio = $_POST['envio'];
}


if ($selectedEnvio == 59.90) {
  $descripcionenvio = 'Envío express - 1 a 3 días hábiles';
} else if ($selectedEnvio == 30.90) {
  $descripcionenvio = 'Envío regular - 3 a 5 días hábiles';
} else if ($selectedEnvio == 11.90) {
  $descripcionenvio = 'Recojo en - Tienda 1';
} else if ($selectedEnvio == 10.90) {
  $descripcionenvio = 'Recojo en - Tienda 2';
} else {
  $descripcionenvio = 'Recojo en - Tienda 3';
}
$_SESSION['Tenvio'] = $selectedEnvio;
$_SESSION['Denvio'] = $descripcionenvio;

// Redireccionar al siguiente paso
header("Location: pago.php");
