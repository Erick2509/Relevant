<?php

include '../Relevant/bd/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = $_POST["correo"];
  $opinion = $_POST["opinion"];
}
$query = 'INSERT INTO comentarios (correo,opinion) VALUES ("' . $correo . '","' . $opinion . '")';
mysqli_query($conexion, $query);

header("Location: index.php");
