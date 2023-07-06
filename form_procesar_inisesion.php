<?php
session_start();

include './bd/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $correo = $_POST["correo"];
  $contrasena = $_POST["contrasena"];
}

$consulta_usuario = "SELECT * FROM usuarios WHERE correo='" . $correo . "' AND contraseña='" . $contrasena . "'";
$resultado_usuario = mysqli_query($conexion, $consulta_usuario);

$existe_usuario = 0;
while ($usuario_fila = mysqli_fetch_array($resultado_usuario)) {
  $existe_usuario = 1;

  //Almacenar id, nombre, apellido
  $_SESSION['id'] = $usuario_fila['id_usuario'];
  $_SESSION['nombre'] = $usuario_fila['nombre'];
  $_SESSION['apellido'] = $usuario_fila['apellido'];
  $_SESSION['correo'] = $usuario_fila['correo'];
  $_SESSION['numdocu'] = $usuario_fila['numdocu'];
}

if ($existe_usuario == 0) {
  header('Location: ini_sesion.php?error=sesion');
} else {
  header("Location: index.php");
}
