<?php

	$servidor = 'localhost:3306';
	$basedatos = 'relevant';
	$usuario = 'root';
	$clave = '';

	$conexion = mysqli_connect($servidor, $usuario, $clave, $basedatos);

	if($conexion===FALSE){
		echo "Error de conexion: ".mysqli_connect_error();
		die();
	}
