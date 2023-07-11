<?php
session_start();
include './bd/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $direccion = $_POST['direccion'];
    $referencia = $_POST['referencia'];
    $codigo = $_POST['codigo'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
}

$consulta = 'UPDATE usuarios SET direccion="' . $direccion . '",referencia="' . $referencia . '",codigo_postal="' . $codigo . '",ciudad="' . $ciudad . '",telefono="' . $telefono . '" WHERE id_usuario=' . $_SESSION['id'];
mysqli_query($conexion, $consulta);
header("Location: index.php");
