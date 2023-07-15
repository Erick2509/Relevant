<?php
include './bd/conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = $_POST["correo"];
}

$consulta = 'SELECT * FROM usuarios WHERE correo="' . $correo . '"';
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
  header("Location: reestablecer_pass.php?correo=$correo");
} else {
  echo '<script>
    alert("El correo ingresado no existe");
    window.location.href = "recuperar_contrasena.php";
  </script>';
}
