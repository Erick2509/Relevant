<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = $_POST["correo"];
  $opinion = $_POST["opinion"];
}
header("Location: index.php");
