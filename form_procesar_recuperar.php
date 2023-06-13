<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = $_POST["correo"];
}

header("Location: ini_sesion.php");
