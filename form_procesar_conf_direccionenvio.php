<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $direccion = $_POST['direccion'];
    $referencia = $_POST['referencia'];
    $codigo = $_POST['codigo'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
}
header("Location: index.php");
