<?php
include './bd/conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $correo = $_POST["correo"];
  $contrasena = $_POST["contrasena"];
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $documento = $_POST['documento'];
  $nacimiento = $_POST['nacimiento'];
  $sexo = $_POST['sexo'];
}

$consulta = 'INSERT INTO usuarios (correo,contraseña,nombre,apellido,numdocu,nacimiento,genero) VALUES ("' . $correo . '","' . $contrasena . '", "' . $nombre . '","' . $apellidos . '","' . $documento . '","' . $nacimiento . '","' . $sexo . '")';
mysqli_query($conexion, $consulta);

header("Location: ini_sesion.php");
