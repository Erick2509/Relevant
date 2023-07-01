<?php

include '../Relevant/bd/conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Obtener los valores del formulario
	$correo = $_POST["correo"];
	$Pais = $_POST["Pais"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$identidad = $_POST["identidad"];
	$direccion = $_POST["direccion"];
	$referencia = $_POST["referencia"];
	$codigopostal = $_POST["codigo_postal"];
	$ciudad = $_POST["ciudad"];
	$Provincia = $_POST["Provincia"];
	$telefono = $_POST["telefono"];
}

$query = 'INSERT INTO informacion (correo, pais, nombre, apellido, numdocu, direccion, referencia, `codigo_postal`, ciudad, region, telefono)
          VALUES ("' . $correo . '", "' . $Pais . '", "' . $nombres . '", "' . $apellidos . '", "' . $identidad . '", "' . $direccion . '", "' . $referencia . '", "' . $codigopostal . '", "' . $ciudad . '", "' . $Provincia . '", "' . $telefono . '")';
mysqli_query($conexion, $query);
header("Location: Envio.php");
