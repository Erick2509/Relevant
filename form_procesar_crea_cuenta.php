<?php
include './bd/conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $correo = $_POST["correo"];
  $contrasena = $_POST["contrasena"];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $documento = $_POST['documento'];
  $nacimiento = $_POST['nacimiento'];
  $sexo = $_POST['sexo'];
  $pais = $_POST['pais'];
  $direccion = $_POST['direccion'];
  $referencia = $_POST['referencia'];
  $codigo_postal = $_POST['codigo_postal'];
  $ciudad = $_POST['ciudad'];
  $region = $_POST['region'];
  $telefono = $_POST['telefono'];
}
// Verificar si ya existe una contraseña o correo electrónico igual en la base de datos
$consultaExistencia = 'SELECT COUNT(*) AS total FROM usuarios WHERE contraseña = "' . $contrasena . '" OR correo = "' . $correo . '"';
$resultadoExistencia = mysqli_query($conexion, $consultaExistencia);
$filaExistencia = mysqli_fetch_assoc($resultadoExistencia);
$totalExistencia = $filaExistencia['total'];
// Insertar los datos solo si no hay registros con la misma contraseña o correo electrónico
if ($totalExistencia == 0) {

  $consulta = 'INSERT INTO usuarios (correo,contraseña,nombre,apellido,numdocu,nacimiento,genero,pais,direccion,referencia,codigo_postal,ciudad,region,telefono) 
VALUES ("' . $correo . '","' . $contrasena . '", "' . $nombre . '","' . $apellido . '","' . $documento . '","' . $nacimiento . '","' . $sexo . '","' . $pais . '","' . $direccion . '","' . $referencia . '","' . $codigo_postal . '","' . $ciudad . '","' . $region . '","' . $telefono . '")';

  mysqli_query($conexion, $consulta);
  header("Location: ini_sesion.php");
} else {
  header('Location: crea_cuenta.php?mensaje=existe');
}
