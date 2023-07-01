<?php
include './bd/conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST["metodo_pago"])) {
    $metodoPago = $_POST["metodo_pago"];

    if ($metodoPago == "Depósito Bancario") {
      $metodoPago == "Depósito Bancario";
    } elseif ($metodoPago == "Yape/Plin") {
      $metodoPago == "Yape/Plin";
    } elseif ($metodoPago == "Paypal") {
      $metodoPago == "Paypal";
    }
  }
}
$consulta = 'INSERT INTO metodo_pago (metodo_pago) VALUES ("' . $metodoPago . '")';
mysqli_query($conexion, $consulta);

header("Location: comprobante.php");
