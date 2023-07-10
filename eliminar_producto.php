<?php
session_start();
include './bd/conexion.php';
$idcarrito = $_GET['idproducto'];

if ($idcarrito) {
    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        if ($producto['id'] == $idcarrito) {
            unset($_SESSION['CARRITO'][$indice]);
        }
    }
}
header('Location: carrito.php');
