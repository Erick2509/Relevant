<?php
session_start();

include './bd/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
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
    if (!isset($_SESSION['CARRITO'])) {

        $producto = array(
            'id' => $id,
            'descripcion' => $descripcion,
            'imagen' => $imagen,
            'precio' => $precio,
            'cantidad' => $cantidad,
        );
        $_SESSION['CARRITO'][0] = $producto;
    } else {

        $NumeroProductos = count($_SESSION['CARRITO']);
        $productoExistente = false;
        foreach ($_SESSION['CARRITO'] as &$item) {
            if ($item['id'] == $id) {
                // El producto ya existe en el carrito, aumentar la cantidad
                $item['cantidad'] += $cantidad;
                $productoExistente = true;
                break;
            }
        }

        if (!$productoExistente) {
            $producto = array(
                'id' => $id,
                'descripcion' => $descripcion,
                'imagen' => $imagen,
                'precio' => $precio,
                'cantidad' => $cantidad,
            );
            $_SESSION['CARRITO'][$NumeroProductos] = $producto;
        }
    }

    header("Location: carrito.php");
} else {
    header('location: ini_sesion.php');
}
