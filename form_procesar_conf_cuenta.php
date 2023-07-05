<?php
session_start();
include './bd/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $documento = $_POST['documento'];
  $contrasena = $_POST['contrasena'];
  $correo = $_POST['correo'];
  $nacimiento = $_POST['nacimiento'];
}
$consulta = 'UPDATE usuarios SET nombre="' . $nombre . '", apellido="' . $apellidos . '", numdocu="' . $documento . '", contraseña="' . $contrasena . '", correo="' . $correo . '", nacimiento="' . $nacimiento . '" WHERE id_usuario="' . $_SESSION['id'] . '"';

mysqli_query($conexion, $consulta);

header("Location: index.php");
