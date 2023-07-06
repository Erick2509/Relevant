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

function usuarioLogeado()
{
	// Inicia la sesión
	session_start();

	// Verifica si la variable de sesión existe y tiene un valor válido
	if (isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])) {
		// El usuario está logeado
		return true;
	} else {
		// El usuario no está logeado
		return false;
	}
}

if (usuarioLogeado()) {
	//consulta para usuario logeado
	$query = 'INSERT INTO usuario_informacion (id_usuario,pais,direccion,referencia,codigo_postal,ciudad,region,telefono)
	VALUES ("' . $_SESSION['id'] . '","' . $Pais . '","' . $direccion . '","' . $referencia . '","' . $codigopostal . '","' . $ciudad . '","' . $Provincia . '","' . $telefono . '")';
} else {
	//consulta para usuario no logeado
	$query = 'INSERT INTO informacion (correo, pais, nombre, apellido, numdocu, direccion, referencia, `codigo_postal`, ciudad, region, telefono)
	VALUES ("' . $correo . '", "' . $Pais . '", "' . $nombres . '", "' . $apellidos . '", "' . $identidad . '", "' . $direccion . '", "' . $referencia . '", "' . $codigopostal . '", "' . $ciudad . '", "' . $Provincia . '", "' . $telefono . '")';
}

mysqli_query($conexion, $query);
header("Location: Envio.php");
