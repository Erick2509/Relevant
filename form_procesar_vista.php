<?php
session_start();

include './bd/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $total = $precio * $cantidad;
}
function usuarioLogeado()
{
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

    $consulta = 'INSERT INTO carrito (descripcion, precio,cantidad,total,imagen,id_usuario) 
VALUES ("' . $descripcion . '", "' . $precio . '", "' . $cantidad . '","' . $total . '", "' . $imagen . '","' . $_SESSION['id'] . '")';
    mysqli_query($conexion, $consulta);
    header("Location: carrito.php");
} else {
    header('location: ini_sesion.php');
}
