<?php
session_start();
include './bd/conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $metodoPago = $_POST['metodo_pago'];
}
$consulta = 'INSERT INTO metodo_pago (id_usuario,metodo_pago) VALUES ("' . $_SESSION['id'] . '","' . $metodoPago . '")';
mysqli_query($conexion, $consulta);

header("Location: comprobante.php");
