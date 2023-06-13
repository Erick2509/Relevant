<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $correo = $_POST["correo"];
  $contrasena = $_POST["contrasena"];
}
header("Location: index.php");
