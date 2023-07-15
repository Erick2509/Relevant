<?php
include './bd/conexion.php';
$correo = $_GET['correo'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = $_POST["contraseña"];
    $confpass = $_POST['confircontraseña'];
}
$mensaje = "Las contraseñas deben ser iguales. Por favor vuelve a intentarlo";
if ($pass === $confpass) {
    $consulta = 'UPDATE usuarios SET contraseña="' . $confpass . '"WHERE correo="' . $correo . '"';
    mysqli_query($conexion, $consulta);
    header('Location: ini_sesion.php');
} else {
    header("Location: reestablecer_pass.php?correo=$correo");
}
