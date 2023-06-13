<?php
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
header("Location: Envio.php");
