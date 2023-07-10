<?php /*
include './bd/conexion.php';
session_start();
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
    $consulta = "SELECT COUNT(*) as total FROM carrito";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);
    $totalFilas = $fila['total'];

    if ($totalFilas > 0) {
        header('location: Informacion.php');
    } else {
        header('location: carrito.php');
    }
} else {
    header('location: ini_sesion.php');
}*/
header('location: Informacion.php');
