<?php
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
header("Location: index.php");
