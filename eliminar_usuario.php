<?php
session_start();
include './bd/conexion.php';

$consulta = 'DELETE FROM usuarios WHERE id_usuario=' . $_SESSION['id'];
mysqli_query($conexion, $consulta);
session_destroy();

header("Location: index.php");
