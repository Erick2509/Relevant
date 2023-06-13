<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $documento = $_POST['documento'];
  $contrasena = $_POST['contrasena'];
  $correo = $_POST['correo'];
  $nacimiento = $_POST['nacimiento'];

  header("Location: index.php");
}
